from django.shortcuts import render
from django.http import HttpResponse
from django.core.mail import send_mail
from django.core.mail import EmailMessage
import os

def mainpage(request):
    context = {'' : ''}
    return render(request, 'mainpage/mainpage.html', context)
    
    
def contact(request):
    if request.method == "POST":
        message_name = request.POST['message-name']
        message_email = request.POST['message-email']
        message_name = message_name + " Email: " + message_email
        message = request.POST['message']
      
        msg = EmailMessage(message_name, message, message_email, to=['vermanubis1@gmail.com'])
        msg.send()
        
        short_name = message_name.split();
        
        return render(request, 'mainpage/contact.html', {'short_name' : short_name[0]})
        
    else:
        return render(request, 'mainpage/contact.html', {})
