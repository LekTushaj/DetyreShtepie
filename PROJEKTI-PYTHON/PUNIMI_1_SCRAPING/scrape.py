
from bs4 import BeautifulSoup
import requests
from csv import writer

url = "https://www.pararius.com/apartments/amsterdam"
page = requests.get(url)

soup = BeautifulSoup(page.content,'html.parser')

lists = soup.find_all('section', class_="listing-search-item")

with open('housing.csv','w', encoding='utf8', newline='') as f:
    thewriter = writer(f)
    header = ['TTULLI', 'LOKACIONI', 'ÇMIMI', 'HAPËSIRA','NR_DHOMAVE','INTERIORI']
    thewriter.writerow(header)

    for list in lists:
        titulli = list.find('a',class_="listing-search-item__link--title").text.replace('\n','')
        lokacioni = list.find('div',class_="listing-search-item__sub-title").text.replace('\n','')
        çmimi = list.find('div',class_="listing-search-item__price").text.replace('\n','')
        hapësira = list.find('li',class_="illustrated-features__item--surface-area").text.replace('\n','')
        nr_dhomave = list.find('li',class_="illustrated-features__item--number-of-rooms").text.replace('\n','')
        interiori = list.find('li',class_="illustrated-features__item--interior").text.replace('\n','')


        info = [titulli,lokacioni,çmimi,hapësira,nr_dhomave,interiori]
        thewriter.writerow(info)

        






