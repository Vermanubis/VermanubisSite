from django.shortcuts import render
from django.http import HttpResponse

def mainpage(request):
    context = {'lol' : 'lol'}
    return render(request, 'mainpage/mainpage.html', context)
