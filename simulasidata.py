import requests
import math
import random
import time

while True:
    GAM1= str(random.randrange(50))
    GAM2= str(random.randrange(50))
    GAM3= str(random.randrange(50))
    GAM4= str(random.randrange(50))
    GAM5= str(random.randrange(50))
    GAM6= str(random.randrange(50))
    GAM7= str(random.randrange(50))
    r= requests.get("http://localhost/statusoperasi/data.php?GAM1="+GAM1+"&GAM2="+GAM2+"&GAM3="+GAM3+"&GAM4="+GAM4+"&GAM5="+GAM5+"&GAM6="+GAM6+"&GAM7="+GAM7)
    print(r.text)
    time.sleep(1)