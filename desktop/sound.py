import pygame
import sys


pygame.mixer.pre_init(44100, -16, 1, 512)
pygame.mixer.init()

s_catch = pygame.mixer.Sound(f'music\\sample.mp3')
