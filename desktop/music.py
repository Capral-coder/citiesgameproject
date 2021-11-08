import pygame
import sys


pygame.mixer.pre_init(44100, -16, 1, 512)
pygame.mixer.init()

k_catch = pygame.mixer.music.load(f'music\\sample3.mp3')
k_catch = pygame.mixer.music.play(-1)

def music_pause():
    pygame.mixer.music.pause()

def music_unpause():
    pygame.mixer.music.unpause()