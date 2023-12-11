import pandas as pd

# Charger le fichier CSV
df = pd.read_csv('dataset_modifie2.csv')

# Utiliser une expression régulière pour extraire le chiffre de la colonne 'Nombre de pièce'
df['Nombre de piece'] = df['Nombre de piece'].str.extract('(\d+)')

# Sauvegarder le DataFrame modifié dans un nouveau fichier CSV
df.to_csv('dataset_modifie3.csv', index=False)
