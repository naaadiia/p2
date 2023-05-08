from rest_framework import serializers  
from .models import Login  
  
class ProductSerializers(serializers.ModelSerializer):  
    nom = serializers.CharField(max_length=200, required=True)  

    class Meta:  
        model = Login  
        fields = ('__all__')  