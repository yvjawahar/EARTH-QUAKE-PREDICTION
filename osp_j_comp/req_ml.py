import numpy as np
import pandas as pd
from sklearn.model_selection import train_test_split
import pickle
from sklearn import metrics
import xgboost as xgb
import pickle
import warnings
import sys

warnings.filterwarnings('ignore')


with open('xgb.pkl', 'rb') as f:
    model = pickle.load(f)

# Get input variables from command line arguments
Latitude = float(sys.argv[1]) #.encode('utf-8')
Longitude = float(sys.argv[2]) #.encode('utf-8')
Depth = float(sys.argv[3]) #.encode('utf-8')
# dtest = xgb.DMatrix([[latitude, longitude, height]])
data = pd.DataFrame({'Latitude': [Latitude], 'Longitude': [Longitude], 'Depth': [Depth]})
prediction = model.predict(data)

# Output prediction
print(prediction)