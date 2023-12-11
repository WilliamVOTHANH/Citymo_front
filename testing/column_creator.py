import pandas as pd

# Charger le fichier CSV
df = pd.read_csv('C:/Users/William/Documents/2024_ESIEA/cap_projet/clean_folder/Recommander_system/testing/dataset.csv')

# Séparer les valeurs dans la colonne Features par des virgules
df['Features'] = df['Features'].str.split(',')

# Extraire le nombre de la colonne 'Surface' en utilisant une expression régulière
df['Surface'] = df['Features'].str[0].str.extract('([\d.]+)')

# Sauvegarder le DataFrame modifié dans un nouveau fichier CSV
df.to_csv('dataset_modifie.csv', index=False)
