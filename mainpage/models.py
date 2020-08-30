from django.db import models

class BlogPost(models.Model):
    blog_text = models.CharField(max_length=2000)
    pub_date = models.DateTimeField('date published')