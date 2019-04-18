<?php
function esky_display_tags() {
    $tags = get_the_tags();
    if ($tags !== false) {
        $html = '<h4>Tags:</h4><div class="post-tags">';
        foreach ( $tags as $tag ) {
            $tag_link = get_tag_link( $tag->term_id );
            $html .= "<span class=\"tag\" class='{$tag->slug}' style='margin: 0.2rem;'><a href='{" . esc_url( $tag_link) . "}'>$tag->name</a></span>";
        }
        $html .= '</div>';
        echo $html;
    }
}

function esky_display_cta() {
    $telegram = get_theme_mod( 'esky_telegram_cta', false );
    $twitter = get_theme_mod( 'esky_twitter_cta', false );
    $facebook = get_theme_mod( 'esky_facebook_cta', false );
    $linkedin = get_theme_mod( 'esky_linkedin_cta', false );
    $pinterest = get_theme_mod( 'esky_pinterest_cta', false );

    if (isset($telegram) && $telegram !== false) {
        echo "<a class=\"button esky-social-item is-lightblue\" href=\"https://telegram.me/share/url?url="."https://www.eskilop.it".$_SERVER['REQUEST_URI']."\">";
        echo "Share on ";
        echo "<span style=\"padding:1.2rem;\" class=\"icon\"><i class=\"fab fa-telegram-plane\"></i></span>";
        echo "</a>";
    }

    if (isset($twitter) && $twitter !== false) {
        echo "<a class=\"button esky-social-item is-lightblue\" href=\"http://twitter.com/share?url=https://www.eskilop.it".$_SERVER['REQUEST_URI']."\">";
        echo "Share on ";
        echo "<span style=\"padding:1.2rem;\" class=\"icon\"><i class=\"fab fa-twitter\"></i></span>";
        echo "</a>";
    }

    if (isset($pinterest) && $pinterest !== false) {
        echo "<a class=\"button esky-social-item is-red\" href=\"javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());\">";
        echo "Share on ";
        echo "<span style=\"padding:1.2rem;\" class=\"icon\"><i class=\"fab fa-pinterest\"></i></span>";
        echo "</a>";
    }

    if (isset($facebook) && $facebook !== false) {
        echo "<a class=\"button esky-social-item is-blue\" href=\"http://www.facebook.com/sharer.php?u=https://www.eskilop.it".$_SERVER['REQUEST_URI']."\">";
        echo "Share on ";
        echo "<span style=\"padding:1.2rem;\" class=\"icon\"><i class=\"fab fa-facebook\"></i></span>";
        echo "</a>";
    }

    if (isset($linkedin) && $linkedin !== false) {
        echo "<a class=\"button esky-social-item is-blue\" href=\"http://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.eskilop.it".$_SERVER['REQUEST_URI']."\">";
        echo "Share on ";
        echo "<span style=\"padding:1.2rem;\" class=\"icon\"><i class=\"fab fa-linkedin\"></i></span>";
        echo "</a>";
    }
}
?>