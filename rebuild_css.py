#!/usr/bin/env python3

import sass

cssfile = open('placeholder.css')
base_css = cssfile.read()
cssfile.close()

# placeholder colors used for colorscheme generation
red = "#AAAAAA"
green = "#BBBBBB"
orange = "#CCCCCC"
blue = "#DDDDDD"
yellow = "#EEEEEE"
purple = "#FFFFFF"
lightblue = "#999999"
cyan = "#888888"
pink = "#777777"
white = "#AA0000"
edark = "#555555"
primary = "#444444"
complementary = "#333333"
link = "#222222"
link_hover = "#111111"

def from_scss(colorstr):
  replacement_b = "a {\n  color: "
  replacement_a = "; }\n"
  sass_str = replacement_b + colorstr + replacement_a
  return sass.compile(string=sass_str).replace(replacement_b, "").replace(replacement_a, "")

def subst(c_a, strcolor):
  print("substituting: {}, {} with {}".format(from_scss(c_a).upper(), from_scss(c_a).lower(), strcolor))
  return base_css.replace(from_scss(c_a).upper(), strcolor).replace(from_scss(c_a).lower(), strcolor)

base_css = subst(red, "<?php echo $colors[\"red\"] ?>")
base_css = subst(green,  "<?php echo $colors[\"green\"] ?>")
base_css = subst(orange,  "<?php echo $colors[\"orange\"] ?>")
base_css = subst(blue,  "<?php echo $colors[\"blue\"] ?>")
base_css = subst(yellow,  "<?php echo $colors[\"yellow\"] ?>")
base_css = subst(purple,  "<?php echo $colors[\"purple\"] ?>")
base_css = subst(lightblue,  "<?php echo $colors[\"lightblue\"] ?>")
base_css = subst(cyan,  "<?php echo $colors[\"cyan\"] ?>")
base_css = subst(pink,  "<?php echo $colors[\"pink\"] ?>")
base_css = subst(white,  "<?php echo $colors[\"white\"] ?>")
base_css = subst(edark,  "<?php echo $colors[\"edark\"] ?>")
base_css = subst(primary,  "<?php echo $colors[\"primary\"] ?>")
base_css = subst(complementary,  "<?php echo $colors[\"complementary\"] ?>")
base_css = subst(link,  "<?php echo $colors[\"white\"] ?>")
base_css = subst(link_hover,  "<?php echo $colors[\"complementary\"] ?>")

base_css = subst("lighten({}, 5%)".format(white), "<?php echo Color::toHexString(Color::lighten(Color::get($colors[\"white\"]), 0.05)) ?>")
base_css = subst("lighten({}, 2%)".format(edark), "<?php echo Color::toHexString(Color::lighten(Color::get($colors[\"edark\"]), 0.02)) ?>")
base_css = subst("lighten({}, 5%)".format(edark), "<?php echo Color::toHexString(Color::lighten(Color::get($colors[\"edark\"]), 0.05)) ?>")
base_css = subst("lighten({}, 10%)".format(edark), "<?php echo Color::toHexString(Color::lighten(Color::get($colors[\"edark\"]), 0.1)) ?>")
base_css = subst("lighten({}, 12%)".format(edark), "<?php echo Color::toHexString(Color::lighten(Color::get($colors[\"edark\"]), 0.12)) ?>")
base_css = subst("lighten({}, 15%)".format(edark), "<?php echo Color::toHexString(Color::lighten(Color::get($colors[\"edark\"]), 0.15)) ?>")
base_css = subst("lighten({}, 20%)".format(edark), "<?php echo Color::toHexString(Color::lighten(Color::get($colors[\"edark\"]), 0.2)) ?>")
base_css = subst("lighten({}, 50%)".format(edark), "<?php echo Color::toHexString(Color::lighten(Color::get($colors[\"edark\"]), 0.5)) ?>")

base_css = subst("darken({}, 2.5%)".format(red), "<?php echo Color::toHexString(Color::lighten(Color::get($colors[\"red\"]), 0.05)) ?>")
base_css = subst("darken({}, 2.5%)".format(green), "<?php echo Color::toHexString(Color::lighten(Color::get($colors[\"green\"]), 0.05)) ?>")
base_css = subst("darken({}, 2.5%)".format(orange), "<?php echo Color::toHexString(Color::lighten(Color::get($colors[\"orange\"]), 0.05)) ?>")
base_css = subst("darken({}, 2.5%)".format(blue), "<?php echo Color::toHexString(Color::lighten(Color::get($colors[\"blue\"]), 0.05)) ?>")
base_css = subst("darken({}, 2.5%)".format(yellow), "<?php echo Color::toHexString(Color::lighten(Color::get($colors[\"yellow\"]), 0.05)) ?>")
base_css = subst("darken({}, 2.5%)".format(purple), "<?php echo Color::toHexString(Color::lighten(Color::get($colors[\"purple\"]), 0.05)) ?>")
base_css = subst("darken({}, 2.5%)".format(lightblue), "<?php echo Color::toHexString(Color::lighten(Color::get($colors[\"lightblue\"]), 0.05)) ?>")
base_css = subst("darken({}, 2.5%)".format(cyan), "<?php echo Color::toHexString(Color::lighten(Color::get($colors[\"cyan\"]), 0.05)) ?>")
base_css = subst("darken({}, 2.5%)".format(pink), "<?php echo Color::toHexString(Color::lighten(Color::get($colors[\"pink\"]), 0.05)) ?>")
base_css = subst("darken({}, 2.5%)".format(white), "<?php echo Color::toHexString(Color::lighten(Color::get($colors[\"white\"]), 0.05)) ?>")
base_css = subst("darken({}, 2.5%)".format(edark), "<?php echo Color::toHexString(Color::lighten(Color::get($colors[\"edark\"]), 0.05)) ?>")
base_css = subst("darken({}, 2.5%)".format(primary), "<?php echo Color::toHexString(Color::lighten(Color::get($colors[\"primary\"]), 0.05)) ?>")
base_css = subst("darken({}, 2.5%)".format(complementary), "<?php echo Color::toHexString(Color::lighten(Color::get($colors[\"complementary\"]), 0.05)) ?>")
base_css = subst("darken({}, 2.5%)".format(link), "<?php echo Color::toHexString(Color::lighten(Color::get($colors[\"link\"]), 0.05)) ?>")
base_css = subst("darken({}, 2.5%)".format(link_hover), "<?php echo Color::toHexString(Color::lighten(Color::get($colors[\"link_hover\"]), 0.05)) ?>")

# links colored as normal text
base_css = base_css + "\n a {\n\ttext-decoration: underline !important;\n}"
base_css = base_css + "\na:hover {\n\ttext-decoration: none !important;\n}"
base_css = base_css + "\n.navbar-item, div.navbar-item a, a.button {\n\ttext-decoration: none !important;\n}"

# read btn as card
base_css = base_css + "\na.read-btn {\n\tbackground-color: <?php echo Color::toHexString(Color::lighten(Color::get($colors[\"edark\"]), 0.05)) ?> !important;\n}"
base_css = base_css + "\na.read-btn:hover, a.read-btn:active, a.read-btn:focus {\n\tbackground-color: <?php echo Color::toHexString(Color::lighten(Color::get($colors[\"edark\"]), 0.15)) ?> !important;\n}"

# card-footer
base_css = base_css + "\n.card-footer {\n\tborder-top: 1px solid <?php echo Color::toHexString(Color::lighten(Color::get($colors[\"edark\"]), 0.2)) ?> !important;\n}"

cssfile = open('placeholder.css', 'w')
cssfile.write(base_css)
cssfile.close()