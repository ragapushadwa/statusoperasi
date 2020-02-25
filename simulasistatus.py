import requests
import math
import random
import time

while True:
    Daya= str(random.randrange(100))
    LajuAlir= str(random.randrange(100))
    Suhu= str(random.randrange(100))
    g= requests.get("http://localhost/statusoperasi/datastatus.php?Daya="+Daya+"&LajuAlir="+LajuAlir+"&Suhu="+Suhu)
    print(g.text)
    time.sleep(1)
