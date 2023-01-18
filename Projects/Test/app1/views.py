from django.shortcuts import render
from django.http import HttpResponse
from . import forms
# Create your views here.
from .models import *
def home(request):
    studentList = Student.objects.all()
    teacherList = Teacher.objects.all()
    #studentList = Student.objects.order_by('name)
    dict = {
        'student': studentList,
        'teacher': teacherList,
    }
    return render(request, "app1/index.html", context=dict)


def form(request):
    studentForm = forms.studentForm()
    dict = {
        'studentForm': studentForm,
    }
    if request.method == "POST":
        studentForm = forms.studentForm(request.POST)
        if studentForm.is_valid():
            studentForm.save(commit=True)
    return render(request, "app1/form.html", context=dict)
