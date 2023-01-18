from django import forms
from . import models
class studentForm(forms.ModelForm):
    #studentName = forms.CharField()
    #studentAge = forms.IntegerField()
    #studentDept = forms.CharField()
    class Meta:
        model = models.Student
        fields = "__all__"