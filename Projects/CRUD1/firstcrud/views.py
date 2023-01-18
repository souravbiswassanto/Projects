from django.shortcuts import render
from . import forms
from firstcrud.models import *
# Create your views here.
def home(request):
    testcrud = testCrud.objects.all()
    dict ={
        'testCrud' : testcrud,
    }
    return render(request, 'firstcrud/index.html', context = dict)

def form(request):
    firstCrudForm = forms.firstCrudForm
    dict = {
        'firstCrudForm' : firstCrudForm,
    }
    if request.method == "POST":
        firstCrudForm = forms.firstCrudForm(request.POST)
        if firstCrudForm.is_valid():
            firstCrudForm.save(commit=True)
            return home(request)
    return render(request, 'firstcrud/form.html', context=dict)