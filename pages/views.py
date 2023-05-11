import pandas as pd
import numpy as np 
from rest_framework import status  
from io import BytesIO
import requests
import json
from PIL import Image
import nltk 
from nltk.stem import PorterStemmer
import base64
from django.http import HttpResponse 
from django.shortcuts import render
from .models import Login
from nltk.tokenize import word_tokenize
from nltk.stem import WordNetLemmatizer
from nltk.corpus import stopwords
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.metrics.pairwise import cosine_similarity
from django.shortcuts import redirect
import string
from nltk.stem import SnowballStemmer
from sklearn.feature_extraction.text import CountVectorizer
from .models import Login  
from .serializer import ProductSerializers  
from rest_framework.views import APIView  
from rest_framework.response import Response  
import csv
from django.http import JsonResponse


import openpyxl
def get_data():
    # Ouvrir le fichier CSV
    with open(r"result.csv",newline='') as csvfile:
        reader = csv.reader(csvfile, delimiter=',')
        
        # Initialiser le dictionnaire
        my_dict = {}
        l_id=[]
        l_nom=[]
        l_img={}

        # Parcourir les lignes du fichier CSV à partir de la deuxième ligne (après les entêtes)
        for i, row in enumerate(reader):
            if i == 0:
                # Ignorer la première ligne (entêtes de colonnes)
                continue

            # Extraire les valeurs de la ligne
            id_value, nom_value, description_value, path = row
            
            # Fusionner le nom et la description en une chaîne de caractères
            combined_value = f"{id_value} - {nom_value} - {description_value}"
        
            # Ajouter l'élément au dictionnaire avec l'id comme clé et la chaîne de caractères combinée comme valeur
            my_dict[id_value] = (combined_value, path)
            l_id.append(id_value)
            l_nom.append(combined_value)
            l_img[id_value] = path

    return (l_id, l_nom, l_img)


def filtrageage(texte):

    nltk.download('stopwords')
    nltk.download('punkt')
    # Obtenir une liste de stopwords en français
    stopwords_fr = stopwords.words('french')
    evite=["style","coleur","taille","Type de motif" , "Type du col","Longueur","Type","Détails",
        "Longueur des manches","Type de manches","Saison","Type d’ajustement","Transparent","Type de fermeture","Tissu",
        "matériel","Composition","Tissu","coleur métallique","détails","type de motif","motif" ]
    
    # Tokenizer le texte en mots
    mots = word_tokenize(texte)
    mots_filtres = []
    for mot in mots :
        if mot not in stopwords_fr:
            if mot not in evite:
                mots_filtres.append(mot)

    # Concaténer les mots filtrés en une chaîne de caractères
    texte_filtre = " ".join(mots_filtres)

    # Retourner la chaîne de caractères filtrée
    return texte_filtre




def sim(text):
    l_id, l_nom, l_img = get_data()
    l_text = [text]
    l_text.extend(l_nom)

    tfidf_vectorizer = TfidfVectorizer()
    sparse_matrix = tfidf_vectorizer.fit_transform(l_text)
    doc_term_matrix = sparse_matrix.todense()
    df = pd.DataFrame(doc_term_matrix, columns=tfidf_vectorizer.get_feature_names())

    # corrigé l'indexation de la similarité cosine
    print(f"taille df :   {df.shape}")
    cs = cosine_similarity(df[:1], df[1:234])
    print(cs)
    return cs


# ancien t5dm sim : def sim(text):
    l_id, l_nom, l_img = get_data()
    l_text = [text]
    l_text.extend(l_nom)

    count_vectorizer = CountVectorizer()
    sparse_matrix = count_vectorizer.fit_transform(l_text)
    doc_term_matrix = sparse_matrix.todense()
    df = pd.DataFrame(doc_term_matrix,columns=count_vectorizer.get_feature_names())

    # corrigé l'indexation de la similarité cosine
    print(f"taille df :   {df.shape}")
    cs = cosine_similarity(df[:1], df[1:234])
    return cs

def get_id_nom(x,x2):
    l_id, l_nom, l_img = get_data()
    img = []
    k = 0
    li_3_id=[]
    top_3_indices = []
    top_3_values = []

    for i in np.argsort(x[0])[:-4:-1]:
        if x[0][i] > 0 and x[0][i] != 1: 
            top_3_indices.append(i + 1)
            top_3_values.append(x[0][i])
            img.append(l_img[l_id[i]])
            li_3_id.append(l_id[i])
    if x2 in li_3_id :
        idx=li_3_id.index(x2)
        #if idx :
        del li_3_id[idx]
        del top_3_indices[idx]
        del top_3_values[idx]
        del img[idx]
        print("lindex est ==  ",idx)


    print(f"top indices : {top_3_indices}")
    print(f"top_valeur: {top_3_values}")
    print(f"produit_id: {li_3_id}")
    print(f"produit_id: {li_3_id}")

    return top_3_values, top_3_indices, img ,li_3_id


def get_id_nom2(x):
    l_id, l_nom, l_img = get_data()
    img = []
    k = 0
    li_3_id=[]
    top_3_indices = []
    top_3_values = []

    for i in np.argsort(x[0])[:-4:-1]:
        if x[0][i] > 0 and x[0][i] != 1: 
            top_3_indices.append(i + 1)
            top_3_values.append(x[0][i])
            img.append(l_img[l_id[i]])
            li_3_id.append(l_id[i])
        #print(f"top indices : {top_3_indices}")
        #print(f"top_valeur: {top_3_values}")
        #print(f"produit_id: {li_3_id}")
        #print(f"produit_id: {li_3_id}")
    return top_3_values, top_3_indices, img 




#def get_id_nom(x):
    l_id, l_nom, l_img = get_data()
    img = []
    k = 0
    
    top_3_indices = []
    top_3_values = []
    for i in np.argsort(x[0])[-3:]:
        if x[0][i] > 0:  # vérifier que la similarité est supérieure à 0
            top_3_indices.append(i + 1)  # ajouter l'ID de produit à la liste des indices (ajouter 1 car l'ID de produit commence à 1 plutôt qu'à 0)
            top_3_values.append(x[0][i])  # ajouter la valeur de similarité à la liste des valeurs
            
            img.append(l_img[l_id[i]])  # récupérer le chemin d'accès à l'image à partir de l'identifiant de produit
    
    return top_3_values, top_3_indices, img



def index(request):
    if request.method == 'POST':
        nom = request.POST.get('nom')
        #desc = request.POST.get('desc')
        data = Login(nom=nom) #desc=desc)
        data.save()
        nomf=filtrageage(nom)
        l = sim(nomf)
        top_prod, id_top, img1 = get_id_nom2(l)
        #maxpro = get_produit(l)
        img=img1
        #ids, noms, img_paths = get_data()
        return render(request, 'pages/test.html', {'reslt': nomf, 'textfiltre': nomf ,'sim': l, 'res': top_prod, 'produit': id_top,'img':img})
    else:
        return render(request, 'pages/index.html')
def test(request) :
    return render(request,'pages/test.html')
      

class ProductView (APIView):  
    def get(self, request, *args, **kwargs):  
        result = Login.objects.all()  
        serializers = ProductSerializers(result, many=True)   
        return Response({'status': 'success', "product":serializers.data}, status=200) 
    def post(self, request):
        res = request.data
        id = str(res.get('id'))        
        title = res.get('title')
    
        nomf = filtrageage(str(title))
        print("nom est ====",nomf)
        similarities = sim(nomf)
        top_3_values, top_3_indices, img , li_3_id = get_id_nom(similarities,id)
        name_similarity_list = [(top_3_indices[i], top_3_values[i]) for i in range(len(top_3_indices))]
        return Response({'status': 'success',
                        'id': id,
                        'title': title,
                        'name_similarity_list': name_similarity_list,
                        'img': img, 
                        'li_id': li_3_id})
   
   
   
   
   
   
   
    #def post2(self, request):
        res = request.data
        title = res.get('title')
        nomf = filtrageage(str(title))
        print("nom est ====",nomf)
        similarities = sim(nomf)
        top_3_values, top_3_indices, img , li_3_id = get_id_nom(similarities,id)
        name_similarity_list = [(top_3_indices[i], top_3_values[i]) for i in range(len(top_3_indices))]
        return Response({'status': 'success',
                        'nomf': nomf,
                        })






"""
def post(self, request):
        res = request.data
        id = str(res.get('id'))        
        title = res.get('title')
    
        nomf = filtrageage(str(title))
        print("nom est ====",nomf)
        similarities = sim(nomf)
        top_3_values, top_3_indices, img , li_3_id = get_id_nom(similarities,id)
        name_similarity_list = [(top_3_indices[i], top_3_values[i]) for i in range(len(top_3_indices))]
        return Response({'status': 'success',
                        'id': id,
                        'title': title,
                        'name_similarity_list': name_similarity_list,
                        'img': img, 
                        'li_id': li_3_id})
ef post(self, request):
        res = request.data
        id = str(res.get('id'))        
        title = res.get('title')
        nomf = filtrageage(str(title))
        
        similarities = sim(nomf)
        print(similarities)
        top_3_values, top_3_indices, img , li_3_id = get_id_nom(similarities,id)
        name_similarity_list = [(top_3_indices[i], top_3_values[i]) for i in range(len(top_3_indices))]
        print('id est == ', top_3_indices)
        print( "l'id st : ",li_3_id)
        print("e=== ", nomf)
        return Response({'status': 'success',
                        'id': id,
                        'title': title,
                        'name_similarity_list': name_similarity_list,
                        'img': img, 
                        'li_id': li_3_id})
------------
    def  post(self, request):
        res = request.data
        #nomt= request.POST.get('title', '')
        nom = res#['nom']  # valeur entrée dans le formulaire PHP
        nomf = filtrageage(str(nom))
        #nomtx
        #print("nooooooom filtre est === ", nomf)
        similarities = sim(nomf)
        print(similarities)
        top_3_values, top_3_indices, img = get_id_nom(similarities)
        #print('limaaaage est :: ',img)
        # créer une liste de noms et de similarités triée dans le même ordre que sorted_similarities
        name_similarity_list = [(top_3_indices[i], top_3_values[i]) for i in range(len(top_3_indices))]

        # renvoyer les détails des produits correspondants avec leur similarité
        return Response({'status': 'success',
                        'nom': nomf,
                        'name_similarity_list': name_similarity_list,
                        'img': img })
  
  
    
    def process_title(request):
        title = request.GET.get('title', '')
        print("titre est =",title)
        #title_uppercase = title.upper()  # Convertit le titre en majuscules
        similarities = sim(title)
        print("la siiiim ========" , similarities)
        top_3_values, top_3_indices, img = get_id_nom(similarities)
        print('limaaaage est :: ',img)
        # créer une liste de noms et de similarités triée dans le même ordre que sorted_similarities
        name_similarity_list = [(top_3_indices[i], top_3_values[i]) for i in range(len(top_3_indices))]

        # renvoyer les détails des produits correspondants avec leur similarité
        return Response({'status': 'success',
                        'nom': similarities,
                        'name_similarity_list': name_similarity_list,
                        'img': img })
"""
"""
    #te5dem version 2  id et score  image path 
    #def post(self, request):
        res = request.data
        #nomt= request.POST.get('title', '')
        nom = res['nom']  # valeur entrée dans le formulaire PHP
        nomf = filtrageage(nom)
        #nomtx
        print("nooooooom filtre est === ", nomf)
        similarities = sim(nomf)
        print(similarities)
        top_3_values, top_3_indices, img = get_id_nom(similarities)
        print('limaaaage est :: ',img)
        # créer une liste de noms et de similarités triée dans le même ordre que sorted_similarities
        name_similarity_list = [(top_3_indices[i], top_3_values[i]) for i in range(len(top_3_indices))]

        # renvoyer les détails des produits correspondants avec leur similarité
        return Response({'status': 'success',
                        'nom': nomf,
                        'name_similarity_list': name_similarity_list,
                        'img': img })

                        """
    


    
    
    
  
    