from tkinter import *
import sys

from sound import s_catch


root=Tk()
root.geometry('1080x720')
root.title('Cities game')
root.iconbitmap(f'images\\city.ico')
root.resizable(False,False)
root['bg']='white'
root.wm_attributes('-fullscreen', 0)

bg_img=PhotoImage(file=f'images\\3.png')
bg_label=Label(image=bg_img)
bg_label.place(x=0, y=0, relheight=1, relwidth=1)



import music
import load

root.mainloop()