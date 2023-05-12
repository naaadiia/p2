import pycurl
from io import BytesIO
from django.http import HttpResponse

def call_php_api(request):
    # URL de votre API PHP
    url = "https://mon-api-php.herokuapp.com/api.php"

    # Données à envoyer à l'API PHP
    data = {
        "param1": "valeur1",
        "param2": "valeur2"
    }

    # Convertir les données en une chaîne de requête
    data_str = "&".join([f"{key}={value}" for key, value in data.items()])

    # Initialiser une instance de cURL
    buffer = BytesIO()
    c = pycurl.Curl()

    # Définir les options de la requête cURL
    c.setopt(c.URL, url)
    c.setopt(c.POSTFIELDS, data_str)
    c.setopt(c.WRITEDATA, buffer)

    # Exécuter la requête cURL
    c.perform()
    c.close()

    # Extraire la réponse de la requête cURL
    response_str = buffer.getvalue().decode("utf-8")

    # Retourner la réponse dans une réponse HTTP
    return HttpResponse(response_str)
