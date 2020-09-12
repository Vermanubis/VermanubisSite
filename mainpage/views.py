from django.shortcuts import render
from django.http import HttpResponse
from django.core.mail import send_mail
from django.core.mail import EmailMessage

def mainpage(request):
    context = {'lol' : 'lol'}
    return render(request, 'mainpage/mainpage.html', context)
    
def contact(request):
    if request.method == "POST":
        message_name = request.POST['message-name']
        message_email = request.POST['message-email']
        message = request.POST['message']
      
        msg = EmailMessage(message_name, message, message_email, to=['vermanubis1@gmail.com'])
        msg.send()
        
        return render(request, 'mainpage/contact.html', {'message_name' : message_name})
        
    else:
        return render(request, 'mainpage/contact.html', {})
