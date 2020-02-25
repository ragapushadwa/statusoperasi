import requests
import math
import random
import time

while True:
    Daya= str(random.randrange(50))
    LajuAlir= str(random.randrange(50))
    Suhu= str(random.randrange(50))
    g= requests.get("http://localhost/statusoperasi/datastatus.php?Daya="+Daya+"&LajuAlir="+LajuAlir+"&Suhu="+Suhu)
    print(g.text)
    time.sleep(1)
