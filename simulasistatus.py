import requests
import math
import random
import time

while True:
    Daya= str(random.randrange(109,112))
    LajuAlir= str(random.randrange(136,138))
    Suhu= str(random.randrange(100))
    Suhubahanbakar= str(random.randrange(698,702))
    LajuAlir2Tube= str(random.randrange(819,821))
    LajuAlir2Plat= str(random.randrange(519,521))
    
    g= requests.get("http://localhost/statusoperasi/datastatus.php?Daya="+Daya+"&LajuAlir="+LajuAlir+"&Suhu="+Suhu+"&LajuAlir2Tube="+LajuAlir2Tube+"&LajuAlir2Plat="+LajuAlir2Plat+"&Suhubahanbakar="+Suhubahanbakar)
    print(g.text)
    time.sleep(1)
