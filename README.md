<img src="https://raw.githubusercontent.com/eskilop/project-addons/master/esky-theme/esky_theme_logo.png" width="128px"></img>
# Esky Theme
A modern, elegant, customizable, dynamic wordpress theme.

Started as a side project to discover the many ways to extend wordpress, I continued incrementally adding features, until I felt it was good enough to be used, so I published it.

[How does it look like?](https://www.eskilop.it/blog/) • [Documentation](https://github.com/eskilop/Esky-Theme/wiki) • [Latest](https://www.github.com/Eskilop/Esky-Theme/releases/latest) • [More](https://www.eskilop.it/blog/esky-theme)

## Features

* A modern base theme
* Fully customizable
* Mobile-first
* Provides styling elements to use in your article (more in [the wiki](https://github.com/eskilop/Esky-Theme/wiki/Visual-Elements))

## Packaging it yourself

If you want to package your own version of the theme, do the following:

```bash
# clone the repository
git clone https://github.com/eskilop/Esky-Theme.git

# cd into the 'tools' directory
cd Esky-Theme/tools

# make the scripts executable
chmod +x *.py

# incorporate css and minify resources
./rebuild_css.py production

# package it
./package.py
```

You should then be able to install the created file (`tools/esky.zip`) in wordpress, or extract it then transfer the `esky/` folder in your wordpress's `wp-content/themes/` directory.

## LICENSE
```
    Esky-Theme: A modern, elegant, customizable, dynamic wordpress theme.
    Copyright (C) 2019  Luca D'Amato

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <https://www.gnu.org/licenses/>.
```
Contact: <a href="mailto:eskilop@eskilop.it">eskilop@eskilop.it</a>

## Credits & Thanks

* Every person that shares free knowledge on the web
* [Phim by Talesoft](https://github.com/Talesoft/phim) php image and color manipulation library
* [Composer](https://getcomposer.org/) A Dependency Manager for PHP
* [Bulma.io](https://bulma.io/) the CSS framework that powers this project
* [WordPress](https://wordpress.org) my go-to FOSS CMS