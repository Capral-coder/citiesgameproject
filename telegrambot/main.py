from aiogram import Bot, Dispatcher, executor, types
import logging
import random
import sqlite3

admin=['NULL']

logging.basicConfig(level=logging.INFO)
bot=Bot(token="токен")
dp=Dispatcher(bot)

user=sqlite3.connect('users.sqlite3')
userc=user.cursor()
userc.execute("CREATE TABLE IF NOT EXISTS users (user_id INT, activity TEXT DEFAULT(FALSE))")
userc.execute("CREATE TABLE IF NOT EXISTS last_letter (user_id INT, last TEXT)")
userc.execute("CREATE TABLE IF NOT EXISTS help (user_id INT, help INT DEFAULT(0))")
user.commit()

cities=sqlite3.connect('example.db')
citiesc=cities.cursor()

@dp.message_handler(commands=['start'])
async def welcome(message: types.Message):
        user=message.from_user.first_name
        botname = await bot.get_me()
        sti = open('static/welcome.png', 'rb')
        await message.answer_sticker(sticker=sti)
        await message.answer(f"Привіт , {user}.\nЯ - {botname.first_name} створений, щоб допомогти вам в грі.\nВведіть /start_game, щоб почати грати і /stop_game, щоб закінчити гру.\nЩоб отримати (3) підсказки введіть команду /help.\nНажміть на меню, щоб побачити повний список команд. Приємної гри!")

@dp.message_handler(commands=['site'])
async def site (message: types.Message):
    await message.answer('Наш сайт citiesgame.tk')

@dp.message_handler(commands=['support'])
async def support (message: types.Message):
    await message.answer('Якщо у вас виникли проблеми, повідомте про помилки нам на пошту citiesgame@citiesgame.tk')

@dp.message_handler(commands=['help'])
async def help_user(message: types.Message):
    userc.execute(f'''SELECT * FROM users WHERE user_id="{message.from_user.id}"''')
    try:
        if message.from_user.id == userc.fetchall()[0][0]:
            userc.execute(f'''SELECT activity FROM users WHERE user_id="{message.from_user.id}"''')
            if userc.fetchall()[0][0] == 'FALSE':
                await message.answer('Розпочніть гру щоб використовувати цю команду')
            else:
                userc.execute(f'''SELECT last FROM last_letter WHERE user_id="{message.from_user.id}"''')
                if userc.fetchall()[0][0] == "":
                    userc.execute(f'''SELECT help FROM help WHERE user_id="{message.from_user.id}"''')
                    if int(userc.fetchall()[0][0]) < 3:
                        userc.execute(f'''SELECT name FROM user_base_{message.from_user.id}''')
                        long_base_name=len(userc.fetchall())
                        userc.execute(f'''SELECT name FROM user_base_{message.from_user.id}''')
                        await message.answer(f'Підказка "{userc.fetchall()[random.randint(0,long_base_name)][0]}"')
                        userc.execute(f'''SELECT help FROM help WHERE user_id="{message.from_user.id}"''')
                        userc.execute(f'''UPDATE help SET help='{int(userc.fetchall()[0][0])+1}' WHERE user_id="{message.from_user.id}"''')
                        user.commit()
                        userc.execute(f'''SELECT help FROM help WHERE user_id="{message.from_user.id}"''')
                        await message.answer(f'Ви використали {int(userc.fetchall()[0][0])} із 3 підказок')
                    else:
                        await message.answer('Ви використали всі підказки')
                else:
                    userc.execute(f'''SELECT help FROM help WHERE user_id="{message.from_user.id}"''')
                    if int(userc.fetchall()[0][0]) < 3:
                        userc.execute(f'''SELECT last FROM last_letter WHERE user_id="{message.from_user.id}"''')
                        userc.execute(f'''SELECT name FROM user_base_{message.from_user.id} WHERE name LIKE "{userc.fetchall()[0][0]}%"''')
                        long_base_name=len(userc.fetchall())
                        userc.execute(f'''SELECT last FROM last_letter WHERE user_id="{message.from_user.id}"''')
                        userc.execute(f'''SELECT name FROM user_base_{message.from_user.id} WHERE name LIKE "{userc.fetchall()[0][0]}%"''')
                        await message.answer(f'Підказка "{userc.fetchall()[random.randint(0,long_base_name)][0]}"')
                        userc.execute(f'''SELECT help FROM help WHERE user_id="{message.from_user.id}"''')
                        userc.execute(f'''UPDATE help SET help='{int(userc.fetchall()[0][0])+1}' WHERE user_id="{message.from_user.id}"''')
                        user.commit()
                        userc.execute(f'''SELECT help FROM help WHERE user_id="{message.from_user.id}"''')
                        await message.answer(f'Ви використали {int(userc.fetchall()[0][0])} із 3 підказок')
                    else:
                        await message.answer('Ви використали всі підказки')
    except:
        await message.answer('Розпочніть гру щоб використовувати цю команду')

@dp.message_handler(commands=['start_game'])
async def starting(message: types.Message):
    if message.text == '/start_game':
        userc.execute(f'''SELECT * FROM users WHERE user_id="{message.from_user.id}"''')
        try:
            if message.from_user.id == userc.fetchall()[0][0]:
                userc.execute(f'''SELECT activity FROM users WHERE user_id="{message.from_user.id}"''')
                if userc.fetchall()[0][0] == 'TRUE':
                    await message.answer('Ви вже граєте')
                else:
                    await message.answer('Ведіть місто')
                    userc.execute(f'DELETE FROM user_base_{message.from_user.id}')
                    userc.execute(f"UPDATE users SET activity='FALSE' WHERE user_id={message.from_user.id} ")
                    userc.execute(f"UPDATE last_letter SET last='' WHERE user_id={message.from_user.id} ")
                    userc.execute(f"UPDATE help SET help=0 WHERE user_id={message.from_user.id} ")
                    user.commit()
                    for row in citiesc.execute('SELECT * FROM base'):
                        userc.execute(f'INSERT INTO user_base_{message.from_user.id} VALUES(?)',(row))
                    userc.execute(f"UPDATE users SET activity='TRUE' WHERE user_id={message.from_user.id} ")
                    user.commit()
        except:
            await message.answer('Ведіть місто')
            userc.execute('INSERT INTO users VALUES(?, ?)',(message.from_user.id, 'FALSE'))
            userc.execute('INSERT INTO last_letter VALUES(?, ?)',(message.from_user.id, ''))
            userc.execute('INSERT INTO help VALUES(?, ?)',(message.from_user.id, '0'))
            userc.execute(f'CREATE TABLE IF NOT EXISTS user_base_{message.from_user.id} (name TEXT)')
            user.commit()
            for row in citiesc.execute('SELECT * FROM base'):
                userc.execute(f'INSERT INTO user_base_{message.from_user.id} VALUES(?)',(row))
            userc.execute(f"UPDATE users SET activity='TRUE' WHERE user_id={message.from_user.id} ")
            user.commit()
            
        @dp.message_handler(content_types=['text'])
        async def text(message: types.Message):
            
            def check_user():
                if message.text[-1] == 'Ь' or message.text[-1] == 'И' or message.text[-1] == 'ь' or message.text[-1] == 'и':
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
            if message.text == '/stop_game':
                userc.execute(f'DELETE FROM user_base_{message.from_user.id}')
                userc.execute(f"UPDATE users SET activity='FALSE' WHERE user_id={message.from_user.id} ")
                userc.execute(f"UPDATE last_letter SET last='' WHERE user_id={message.from_user.id} ")
                userc.execute(f"UPDATE help SET help=0 WHERE user_id={message.from_user.id} ")
                user.commit()
            else:
                userc.execute(f'''SELECT activity FROM users WHERE user_id="{message.from_user.id}"''')
                if userc.fetchall()[0][0] == 'FALSE':
                    await message.answer('Розпочніть гру')
                else:
                    def check():
                        userc.execute(f'SELECT last FROM last_letter WHERE user_id = {message.from_user.id}')
                        if userc.fetchall()[0][0] == '':
                            k=1
                            return k
                        userc.execute(f'SELECT last FROM last_letter WHERE user_id = {message.from_user.id}')
                        if userc.fetchall()[0][0] == message.text[0].title():
                            k=2
                            return k
                    
                    if check() == 1 or check() == 2:
                        userc.execute(f'''SELECT * FROM user_base_{message.from_user.id} WHERE name="{message.text}"''')
                        try:
                            if message.text == userc.fetchall()[0][0]:
                                userc.execute(f'''DELETE FROM user_base_{message.from_user.id} WHERE name="{message.text}"''')
                                userc.execute(f"UPDATE last_letter SET last='{message.text[int(check_user())].upper()}' WHERE user_id={message.from_user.id}")
                                user.commit()
                                userc.execute(f'SELECT last FROM last_letter WHERE user_id = {message.from_user.id}')
                                userc.execute(f'''SELECT * FROM user_base_{message.from_user.id} WHERE name LIKE "{userc.fetchall()[0][0]}%"''')
                                temp=len(userc.fetchall())
                                userc.execute(f'SELECT last FROM last_letter WHERE user_id = {message.from_user.id}')
                                userc.execute(f'''SELECT * FROM user_base_{message.from_user.id} WHERE name LIKE "{userc.fetchall()[0][0]}%"''')
                                city_ai=str(userc.fetchall()[random.randint(0, temp-1)][0])
                                await message.answer(city_ai)
                                userc.execute(f'''DELETE FROM user_base_{message.from_user.id} WHERE name="{city_ai}"''')
                                userc.execute(f"UPDATE last_letter SET last='{city_ai[int(check_ai())].upper()}' WHERE user_id={message.from_user.id}")
                                user.commit()           
                        except:
                            await message.answer('В нашій ДБ немає такого міста')
                    else:
                        userc.execute(f"SELECT last FROM last_letter WHERE user_id={message.from_user.id}")
                        await message.answer(f'Ваше місто починається на {userc.fetchall()[0][0]}')
                        
if __name__ == "__main__":
    executor.start_polling(dp, skip_updates=True)