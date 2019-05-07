<?php
function esky_display_social_menu() {

  $twitter = get_theme_mod( "esky_twitter", null );
  $discord = get_theme_mod( "esky_discord", null );
  $telegram = get_theme_mod( "esky_telegram", null );
  $instagram = get_theme_mod( "esky_instagram", null );
  $gitlab = get_theme_mod( "esky_gitlab", null );
  $github = get_theme_mod( "esky_github", null );
  $bitbucket = get_theme_mod( "esky_bitbucket", null);
  $dribbble = get_theme_mod( "esky_dribbble", null);
  $deviantart = get_theme_mod( "esky_deviantart", null);
  $behance = get_theme_mod( "esky_behance", null);

  if (isset($telegram) && $telegram !=="") {
    echo "<a class=\"button esky-social-item is-lightblue is-rounded\" href=\"https://t.me/".$telegram."\">
            <span class=\"icon\">
              <i class=\"fab fa-telegram-plane\"></i>
            </span>
          </a>";
  }

  if (isset($discord) && $discord !=="") {
    echo "<a class=\"button esky-social-item is-blue is-rounded\" href=\"https://discord.gg/".$discord."\">
            <span class=\"icon\">
              <i class=\"fab fa-discord\"></i>
            </span>
          </a>";
  }

  if (isset($instagram) && $instagram !=="") {
    echo "<a class=\"button esky-social-item is-red is-rounded\" href=\"https://instagram.com/".$instagram."\">
            <span class=\"icon\">
              <i class=\"fab fa-instagram\"></i>
            </span>
          </a>";
  }

  if (isset($twitter) && $twitter !=="") {
    echo "<a class=\"button esky-social-item is-lightblue is-rounded\" href=\"https://twitter.com/".$twitter."\">
            <span class=\"icon\">
              <i class=\"fab fa-twitter\"></i>
            </span>
          </a>";
  }
  
  if (isset($gitlab) && $gitlab !=="") {
    echo "<a class=\"button esky-social-item is-orange is-rounded\" href=\"https://gitlab.com/".$gitlab."\">
            <span class=\"icon\">
              <i class=\"fab fa-gitlab\"></i>
            </span>
          </a>";
  }

  if (isset($github) && $github !=="") {
    echo "<a class=\"button esky-social-item is-black is-rounded\" href=\"https://github.com/".$github."\">
            <span class=\"icon\">
              <i class=\"fab fa-github\"></i>
            </span>
          </a>";
  }

  if (isset($bitbucket) && $bitbucket !=="") {
    echo "<a class=\"button esky-social-item is-lightblue is-rounded\" href=\"https://bitbucket.org/".$bitbucket."\">
            <span class=\"icon\">
              <i class=\"fab fa-bitbucket\"></i>
            </span>
          </a>";
  }

  if (isset($dribbble) && $dribbble !=="") {
    echo "<a class=\"button esky-social-item is-pink is-rounded\" href=\"https://dribbble.com/".$dribbble."\">
            <span class=\"icon\">
              <i class=\"fab fa-dribbble\"></i>
            </span>
          </a>";
  }

  if (isset($deviantart) && $deviantart !=="") {
    echo "<a class=\"button esky-social-item is-green is-rounded\" href=\"https://deviantart.com/".$deviantart."\">
            <span class=\"icon\">
              <i class=\"fab fa-deviantart\"></i>
            </span>
          </a>";
  }

  if (isset($behance) && $behance !=="") {
    echo "<a class=\"button esky-social-item is-blue is-rounded\" href=\"https://behance.net/".$behance."\">
            <span class=\"icon\">
              <i class=\"fab fa-behance\"></i>
            </span>
          </a>";
  }
}

function the_menu($name) {
  $menu = wp_nav_menu( array(
    "container" => 'div',
    "echo" => false,
    "walker" => new Esky_NavWalker()
    ) );

  $menu = preg_replace('/<div class="menu-(.*)-container"><ul id="menu-(.*)" class="menu">/', '', $menu);
  $menu = str_replace("</ul></div>", "", $menu);
  echo $menu;
}
?>