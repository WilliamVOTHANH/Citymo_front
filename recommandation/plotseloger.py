import pandas as pd
import matplotlib.pyplot as plt
import numpy as np
from matplotlib.colors import Normalize
from matplotlib.cm import ScalarMappable

# Charger les données depuis le fichier CSV
data = pd.read_csv('dataset/seloger.csv')

# Trier les données en fonction de la position dans la liste
data['position'] = np.arange(len(data))
data = data.sort_values(by='position')

# Créer un graphique
fig, ax = plt.subplots()
ax.set_title('Carte des coordonnées')

# Normaliser la position pour attribuer des couleurs
norm = Normalize(vmin=data['position'].min(), vmax=data['position'].max())

# Créer une échelle de couleurs allant du jaune au violet
cmap = plt.get_cmap('YlGnBu')

# Créer un objet de mappage des couleurs
sm = ScalarMappable(cmap=cmap, norm=norm)
sm.set_array([])

# Tracer les points sur la carte
sc = ax.scatter(data['longitude'], data['latitude'], c=data['position'], cmap=cmap, marker='o', s=100)

# Ajouter une barre de couleurs
cbar = plt.colorbar(sm, ax=ax)
cbar.set_label('Position dans la liste')

# Afficher le graphique
plt.show()
