import sys
import argparse
import pandas as pd
from sklearn.metrics.pairwise import cosine_similarity
from sklearn.preprocessing import MinMaxScaler
import time
from geopy.distance import geodesic
import matplotlib.pyplot as plt
import numpy as np
from sqlalchemy import create_engine

start_time = time.time()

# Connexion à la base de données
engine = create_engine('mysql://root:qwerty@localhost:3306/IDF')

# Lire les données directement depuis la base de données
query = "SELECT * FROM IDF.paris"
df = pd.read_sql(query, engine)

# Afficher le DataFrame
print(df)

# Définition des arguments en ligne de commande
parser = argparse.ArgumentParser(description="Script de recommandation d'appartements.")
parser.add_argument('reference_id', type=str, help="ID de l'appartement de référence")
parser.add_argument('--without', type=str, help="ID de l'appartement à exclure du calcul de la similarité")
args = parser.parse_args()

# Trouver l'index de l'appartement de référence dans le DataFrame
reference_index = df[df['id_mutation'] == args.reference_id].index[0]

# Exclure l'appartement spécifié par le paramètre without (s'il est fourni)
if args.without:
    df = df[df['id_mutation'] != args.without]

# ... (le reste du script reste inchangé)
# Créer une nouvelle colonne 'coef_plan' en utilisant la formule fournie
max_latitude = df['latitude'].max()
max_longitude = df['longitude'].max()
df['coef_plan'] = (max_latitude - df['latitude']) * 0.5 + (max_longitude - df['longitude']) * 0.5


# Sélectionner les colonnes pour le calcul de la similarité
columns_to_compare = ['valeur_fonciere', 'surface_reelle_bati', 'nombre_pieces_principales', 'longitude', 'latitude','coef_plan']

# Créer un sous-dataframe avec les colonnes à normaliser
data_to_normalize = df[columns_to_compare]

# Normaliser les données
scaler = MinMaxScaler()
normalized_data = scaler.fit_transform(data_to_normalize)
normalized_df = pd.DataFrame(normalized_data, columns=columns_to_compare)

# Calculer la similarité cosinus avec l'appartement de référence
cosine_similarities = cosine_similarity(normalized_df, [normalized_df.iloc[reference_index]])

# Ajouter une colonne avec la similarité cosinus au DataFrame d'origine
df['cosine_similarity'] = cosine_similarities

# Trier le DataFrame en fonction de la similarité cosinus (en ordre décroissant)
df_sorted = df.sort_values(by='cosine_similarity', ascending=False)

# Conserver uniquement les 15 premières lignes du DataFrame trié (à partir de la deuxième ligne)
df_sorted = df_sorted.iloc[1:].head(10)

# Supprimer la colonne 'cosine_similarity' avant de sauvegarder le CSV
df_sorted.drop(columns=['cosine_similarity'], inplace=True)

# Supprimer la colonne 'coef_plan' avant de sauvegarder le CSV
df_sorted.drop(columns=['coef_plan'], inplace=True)

# Enregistrer le DataFrame trié dans un nouveau fichier CSV
df_sorted.to_csv('C:/Users/William/Documents/2024_ESIEA/cap_projet/clean_folder/Recommander_system/testing/top10.csv', index=False)

# Enregistrer le moment où le programme se termine
end_time = time.time()

# Calculer la durée totale d'exécution
execution_time = end_time - start_time
print(f"Temps d'exécution : {execution_time} secondes")