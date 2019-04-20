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
    $telegram = get_theme_mod( 'esky_telegram_cta', true );
    $twitter = get_theme_mod( 'esky_twitter_cta', true );
    $facebook = get_theme_mod( 'esky_facebook_cta', false );
    $whatsapp = get_theme_mod( 'esky_whatsapp_cta', false );
    $linkedin = get_theme_mod( 'esky_linkedin_cta', false );
    $pinterest = get_theme_mod( 'esky_pinterest_cta', false );

    $url = "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

    echo "<div style=\"esky_ctabox\">";
    if (isset($telegram) && $telegram !== false) {
        echo "<a class=\"button esky-social-item is-lightblue\" href=\"https://telegram.me/share/url?url=".$url."\">";
        echo "Share on ";
        echo "<span style=\"padding:1.2rem;\" class=\"icon\"><i class=\"fab fa-telegram-plane\"></i></span>";
        echo "</a>";
    }

    if (isset($whatsapp) && $whatsapp !== false) {
        echo "<a class=\"button esky-social-item is-green\" href=\"https://api.whatsapp.com/send?text=".$url."\">";
        echo "Share on ";
        echo "<span style=\"padding:1.2rem;\" class=\"icon\"><i class=\"fab fa-whatsapp\"></i></span>";
        echo "</a>";
    }

    if (isset($twitter) && $twitter !== false) {
        echo "<a class=\"button esky-social-item is-lightblue\" href=\"http://twitter.com/share?url=".$url."\">";
        echo "Share on ";
        echo "<span style=\"padding:1.2rem;\" class=\"icon\"><i class=\"fab fa-twitter\"></i></span>";
        echo "</a>";
    }

    if (isset($pinterest) && $pinterest !== false) {
        echo "<a class=\"button esky-social-item is-red\" href=\"javascript:void(0)\" onclick=\"window.open('http://pinterest.com/pin/create/button/?url=".$url."', 'Share with pinterest', 'width=600, height=400'); return false;\">";
        echo "Share on ";
        echo "<span style=\"padding:1.2rem;\" class=\"icon\"><i class=\"fab fa-pinterest\"></i></span>";
        echo "</a>";
    }

    if (isset($facebook) && $facebook !== false) {
        echo "<a class=\"button esky-social-item is-blue\" href=\"javascript:void(0)\" onclick=\"window.open('http://www.facebook.com/sharer.php?u=".$url."', 'Share with facebook', 'width=600, height=400'); return false;\">";
        echo "Share on ";
        echo "<span style=\"padding:1.2rem;\" class=\"icon\"><i class=\"fab fa-facebook\"></i></span>";
        echo "</a>";
    }
    echo "</div>";
}

function esky_gallery( $content ) {

	global $post;

	// Only do this on singular items
	if( ! is_singular() )
	    return $content;

	// Make sure the post has a gallery in it
	if( ! has_shortcode( $post->post_content, 'gallery' ) )
	    return $content;

	// Retrieve all galleries of this post
   $galleries = get_post_galleries_images( $post );

   $glry = "<div class=\"gallery-container\">";
   $glry .= "<div style=\"width: 50%;margin: 0.2 auto;\">";
   $glry .= "<img src=\"https://www.bmw.de/content/dam/bmw/common/all-models/4-series/coupe/2017/images-and-videos/images/BMW-4-series-coupe-images-and-videos-1920x1200-05.jpg.asset.1487327363288.jpg\" class=\"gallery-main\"/>";

   // Loop through all galleries found
	foreach( $galleries as $gallery ) {
       $glry .="<div>";
		foreach( $gallery as $image ) {
           $glry .= "<img src=\"" . $image . "\" class=\"gallery-item\"/>";
       }
       $glry .= "</div>";
	}
   $glry .= "</div></div>";

   $content = preg_replace('/\[gallery.*\]/', $glry, $content);

	return $content;
}
 add_filter( 'the_content', 'esky_gallery' );
?>