from django.urls import path    
from . import views 
from .views import ProductView

urlpatterns = [
    path('',views.index, name='index'),
    path('test',views.test, name='test'),
    path('basic/', ProductView.as_view()),
    path('product2/', ProductView.as_view()),
    path('basic/<int:id>/', ProductView.as_view()),



]
