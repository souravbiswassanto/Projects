from django.urls import path
from . import views
app_name = 'firstcrud'
urlpatterns = [
    path('', views.home,name="home"),
    path('form/', views.form, name = "form"),
]
