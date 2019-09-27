import pandas as pd
from sklearn.preprocessing import LabelEncoder
data = pd.read_csv("dat.csv", header=None, delim_whitespace=True)
print(data.head())
data.fillna(data.mean(), inplace=True)

le = LabelEncoder()

df_encoded = data.apply(le.fit_transform)
print(df_encoded.head())

df_encoded.to_csv('encoded.csv', encoding='utf-8', index=False)

