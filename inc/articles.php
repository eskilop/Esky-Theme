<?php
function esky_display_tags() {
    $tags = get_the_tags();
    if ($tags !== false) {
        $html = '<div id="esky-post-tags-container"><h4>Tags:</h4><div class="post-tags">';
        foreach ( $tags as $tag ) {
            $tag_link = get_tag_link( $tag->term_id );
            $html .= "<span class=\"tag\" class='{$tag->slug}' style='margin: 0.2rem;'><a href='{" . esc_url( $tag_link) . "}'>$tag->name</a></span>";
        }
        $html .= '</div></div>';
        echo $html;
    }
}

add_filter( "the_content", 'esky_display_discussion');
function esky_display_discussion($content) {
    $telegram_discussion_msg = get_theme_mod( "esky_discussion_cta", NULL);
    $telegram_discussion_url = get_theme_mod( "esky_discussion_url_cta", NULL);
    $compound_text = "";

    if (isset($telegram_discussion_msg) && isset($telegram_discussion_msg)) {
        $compound_text = " <a href='" . esc_url($telegram_discussion_url) . "'>" . $telegram_discussion_msg . "</a>";
    }

    $last = substr($content, -5);
    $content = substr($content, 0, -5);
    
    if(is_single() && !is_home()) {
        $content .= $compound_text;
        $content .= $last;
    }
    return $content;
}

function esky_display_cta() {
    $copy = get_theme_mod( 'esky_copy_url_cta', true );
    $telegram = get_theme_mod( 'esky_telegram_cta', true );
    $twitter = get_theme_mod( 'esky_twitter_cta', true );
    $facebook = get_theme_mod( 'esky_facebook_cta', false );
    $whatsapp = get_theme_mod( 'esky_whatsapp_cta', false );
    $linkedin = get_theme_mod( 'esky_linkedin_cta', false );
    $pinterest = get_theme_mod( 'esky_pinterest_cta', false );

    $url = "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

    echo "<div class=\"esky_ctabox\">";

    if (isset($copy) && $copy !== false) {
        echo "<a class=\"button esky-social-item is-lightblue\" href=\"javascript:var dummy = document.createElement('input'),text = window.location.href;document.body.appendChild(dummy);dummy.value = text;dummy.select();document.execCommand('copy');document.body.removeChild(dummy);\">";
        echo "Copy Url ";
        echo "<span style=\"padding:1.2rem;\" class=\"icon\"><i class=\"fas fa-copy\"></i></span>";
        echo "</a>";
    }

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

// Display estimated reading time
// raw_content is get_the_content()
function esky_get_erd($raw_content) {
  $content = apply_filters( 'the_content', $raw_content );
  $stripped_tags =  wp_strip_all_tags(do_shortcode(html_entity_decode( $content )), true);

  $minutes = (floor(str_word_count($stripped_tags)/225));
  $message = "";

  if ($minutes  > 1)
    $message = " minutes read";
  else
    $message = " minute read";
  
  return $minutes . $message;
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
   $glry .= "<div style=\"display: inline-block;\">";
   $glry .= "<img src=\"\" class=\"gallery-main\"/>";

   // Loop through all galleries found
	foreach( $galleries as $gallery ) {
       $glry .="<div style=\"\">";
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

add_filter( 'the_password_form', 'esky_password_form' );
function esky_password_form() {
    global $post;
 
    $loginurl = site_url() . '/wp-login.php?action=postpass';
    $label = 'pwbox-' . ( ! empty( $post->ID ) ? $post->ID : rand() );

    $initial_text = get_theme_mod( 'esky_ppp_initial_text', 'Enter Password to Unlock Post:' );
 
    ob_start();
    ?>

    <div class="container-custom">            
        <form action="<?php echo esc_attr( $loginurl ) ?>" method="post" class="esky-password-form" role="search">
            <label for="<?php echo esc_attr( $label ) ?>" class="esky-post-password-label"><?php esc_attr_e( $initial_text ) ?></label><br/><br/>
            <input name="post_password" id="<?php echo esc_attr( $label ) ?>" class="input is-primary" type="password" placeholder="Enter your access code" />
            <input type="submit" name="Submit" class="button is-primary esky-pass-submit" value="<?php esc_attr_e( "Access" ) ?>" />            
        </form>
    </div>
 
    <?php
    return ob_get_clean();
}
?>
