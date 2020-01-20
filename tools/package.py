#!/usr/bin/env python3

from zipfile import ZipFile
import os
from os import path

def get_paths(directory):
    paths=[]
    blacklist=['.git', 'tools', '.gitignore', 'CHANGELOG', 'composer.json', 'composer.lock', '.DS_Store', '.', '..']
    for root, directories, files in os.walk(directory):
        for filename in files:
            filepath=os.path.join(root,filename)
            if not filename in blacklist:
                if not filepath.split('/')[1] in blacklist:
                    paths.append(filepath)
    return paths


with ZipFile('esky-theme.zip', 'w') as eskyzipped:
    os.chdir(path.abspath('../'))
    for path in get_paths('./'):
        eskyzipped.write(path)
    eskyzipped.close()
