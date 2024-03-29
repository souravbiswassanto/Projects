from django.db import models

# Create your models here.
class Student(models.Model):
    name = models.CharField(max_length=50)
    age = models.IntegerField()
    dept = models.CharField(max_length=50)
    
    def __str__(self):
        return self.name + "-" + self.dept

class Teacher(models.Model):
    name = models.CharField(max_length=50)
    age = models.IntegerField()
    department = models.CharField(max_length=50)
    rank = models.CharField(max_length=50)
    
    def __str__(self):
        return self.name+"_"+self.department