from django.shortcuts import render
import random
import sqlite3
import os

last=[]
score=[0]
temp=[]
attempts=[0]

def home(request):
    os.system(f'del Temp\\* /Q')
    os.system(f'copy example.db Temp\\')
    return render(request, 'main.html')

def rules(request):
    return render(request, 'main3.html')

def about(request):
    return render(request, 'main4.html')

def game(request):
    con = sqlite3.connect(f'Temp\\example.db')
    cur=con.cursor()
    try:
        city=request.GET['text']
        def check_user():
            if city[-1] == 'Ь' or city[-1] == 'И' or city[-1] == 'ь' or city[-1] == 'и':
                i=-2
            else:
                i=-1
            return i
            
        def check_ai():
            if city_ai[-1] == 'Ь' or city_ai[-1] == 'И' or city_ai[-1] == 'ь' or city_ai[-1] == 'и':
                i=-2
            else:
                i=-1
            return i
        if last==[] or last[-1] == city[0].title():
            cur.execute(f'''SELECT * FROM base WHERE name="{city}"''')
            try:
                if city == cur.fetchall()[0][0]:
                    cur.execute(f'''DELETE FROM base WHERE name="{city}"''')
                    con.commit()
                    last.append(city[int(check_user())].upper())
                    score.append(score[-1]+1)
                    try:
                        cur.execute(f'''SELECT * FROM base WHERE name LIKE "{last[-1]}%"''')
                        temp.append(cur.fetchall())
                        city_ai=str(temp[0][random.randint(0, len(temp[0])-1)][0])
                        temp.clear()
                        last.append(city_ai[int(check_ai())].upper())
                        label=(f"Комп'ютер: {city_ai}")
                    except:
                        pass
            except IndexError:
                label=('В нашій базі даних немає такого міста')
        else:
            label= (f'Ваше місто починається на {last[-1]}')
    except:
        pass    
    try:
        return render(request, 'main2.html',{'label':label})
    except:
        return render(request, 'main2.html',{'label':"Очікування комп'ютера"})