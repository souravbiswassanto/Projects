from django.shortcuts import render

# Create your views here.
def home(request):
    dict={}
    return render(request, 'appOne/index.html', context = dict)