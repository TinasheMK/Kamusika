# Kamusika
Kamusika Online Shopping

# Rasa Initialisation Comands
conda create --name rasa-env python==3.8  
conda activate rasa-env  

python -m pip uninstall pip  
python -m ensurepip  
python -m pip install -U pip  

python -m pip install --upgrade setuptools  
python -m pip install rasa  

# Start rasa backend
python -m rasa run --m ./models --endpoints endpoints.yml --port 5005 -vv --enable-api

rasa run -m models --enable-api --cors "*" --debug

rasa run actions --cors "*" --debug