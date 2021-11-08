from tkinter import messagebox


from text import rules
from sound import s_catch


def rule_button():
    s_catch.play()
    messagebox.showinfo(title='Cities game', message=rules)
