from django.db import models

class Product(models.Model):
    Product_id = models.AutoField
    Product_name = models.CharField(max_length=50)
    category = models.CharField(max_length=50,default="")
    price = models.IntegerField(default=0)
    desc = models.CharField(max_length=500)
    pub_date = models.DateField()
    image = models.ImageField(upload_to="shop/image",default="")

    def __str__(self):
        return self.Product_name