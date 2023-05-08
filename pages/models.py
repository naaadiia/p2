from django.db import models

class Login(models.Model):
    nom = models.CharField(max_length=100)
