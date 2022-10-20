from bs4 import BeautifulSoup 
import requests 
import pandas as pd 
import numpy as np
from time import sleep
from random import randint

header = {"Accept-Language": "en-US,en;q=0.9"}

emri_filmit = []
viti_publikimit = []
kohezgjatja = []
rangimi = []
votat = []


pages = np.arange(start=1,stop=100,step=100)

for page in pages:
    page = requests.get("https://www.imdb.com/search/title/?groups=top_1000&sort=user_rating,desc&count=100&start='+{page}+'&ref_=adv_nxt", headers=header)
    soup = BeautifulSoup(page.text, 'html.parser')
    movie_data = soup.find_all('div', attrs= {'class': "lister-item mode-advanced"}) 
    sleep(randint(2,8))
    for store in movie_data:
        emri = store.h3.a.text
        emri_filmit.append(emri)

        viti = store.h3.find('span', class_ = "lister-item-year text-muted unbold").text
        viti_publikimit.append(viti)

        koha = store.p.find('span', class_ ='runtime').text
        kohezgjatja.append(koha)

        rangu = store.find('div', class_ = 'inline-block ratings-imdb-rating').text.replace('\n','')
        rangimi.append(rangu)

        value = store.find_all('span', attrs={"name": "nv"})

        vota = value[0].text
        votat.append(vota)

       

lista_filmave = pd.DataFrame({"Emri Filmit": emri_filmit, "Viti Publikimit": viti_publikimit, "Kohezgjatja Filmit": kohezgjatja, "Rangu": rangimi, "Votat": votat})

print(lista_filmave)

with pd.ExcelWriter("output.xlsx") as writer:
    lista_filmave.to_excel(writer, sheet_name="Sheet_1")
    







