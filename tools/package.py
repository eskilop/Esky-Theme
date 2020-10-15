#!/usr/bin/env python3

from zipfile import ZipFile
import os
from os import path
from css_html_js_minify import process_single_html_file, process_single_js_file, process_single_css_file, html_minify, js_minify, css_minify

def get_paths(directory):
    paths=[]
    blacklist=[
        '.git',
        '.github',
        '.gitignore',
        'tools',
        '.gitignore',
        'CHANGELOG',
        'composer.json',
        'composer.lock',
        '.DS_Store',
        'dynamic_esky_template.php',
        'esky_content.css',
        'structure.css',
        'ui.css',
        'esky.js',
        '/tools/'
        '.',
        '..']
    for root, directories, files in os.walk(directory):
        for filename in files:
            filepath=os.path.join(root,filename)
            if not filename in blacklist:
                if not filepath.split('/')[1] in blacklist:
                    paths.append(filepath)
    return paths

# minify before zipping
css_compress_list = ["../css/esky_content.css", "../css/structure.css", "../css/ui.css"]
js_compress_list = ["../js/esky.js"]

for cssfile in css_compress_list:
    process_single_css_file(cssfile, output_path=cssfile.replace('.css', '.min.css'))

for jsfile in js_compress_list:
    process_single_js_file(jsfile, output_path=jsfile.replace('.js', '.min.js'))

# get the main minified css file contents
fmcss = open('./placeholder.min.css', 'r')
minified_css = fmcss.read()
fmcss.close()

# get the dynamic style contents
dcss = open('../css/dynamic_esky_template.php', 'r')
dcss_contents = dcss.read()
dcss.close()

# overwrite placeholder with minified css
dcss_contents = dcss_contents.replace("/*<minified-css-here>*/", minified_css)

# save in true dynamic style file
true_dyn = open('../css/dynamic_esky.php', 'w')
true_dyn.write(dcss_contents)
true_dyn.close()

with ZipFile('esky.zip', 'w') as eskyzipped:
    os.chdir(path.abspath('../'))
    for path in get_paths('./'):
        eskyzipped.write(path)
    eskyzipped.close()
