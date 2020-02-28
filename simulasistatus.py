import requests
import math
import random
import time

while True:
    Daya= str(random.randrange(100))
    LajuAlir= str(random.randrange(100))
    Suhu= str(random.randrange(100))
    Suhubahanbakar= str(random.randrange(100))
    LajuAlir2Tube= str(random.randrange(100))
    LajuAlir2Plat= str(random.randrange(100))
    
    g= requests.get("http://localhost/statusoperasi/datastatus.php?Daya="+Daya+"&LajuAlir="+LajuAlir+"&Suhu="+Suhu+"&LajuAlir2Tube="+LajuAlir2Tube+"&LajuAlir2Plat="+LajuAlir2Plat+"&Suhubahanbakar="+Suhubahanbakar)
    print(g.text)
    time.sleep(1)
