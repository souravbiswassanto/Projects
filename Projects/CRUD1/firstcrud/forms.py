from django import forms
from . import models

class firstCrudForm(forms.ModelForm):
    class Meta:
        model = models.testCrud
        fields = "__all__"
        
        