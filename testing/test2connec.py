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

# Connexion à la base de données
engine = create_engine('mysql://root:qwerty@localhost:3306/IDF')

# Lire la table 'paris' dans un DataFrame

table_name = 'paris'  # Remplacez par le nom correct de votre table
query = f"SELECT * FROM {table_name}"
df = pd.read_sql(query, engine)

# Afficher le DataFrame
print(df)
