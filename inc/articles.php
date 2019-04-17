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
    echo "<a class=\"button esky-social-item is-blue\" href=\"https://telegram.me/share/url?url="."https://www.eskilop.it".$_SERVER['REQUEST_URI']."\">";
    echo "Share on ";
    echo "<span style=\"padding:1.2rem;\" class=\"icon\"><i class=\"fab fa-telegram-plane\"></i></span>";
    echo "</a>";

    echo "<a class=\"button esky-social-item is-blue\" href=\"http://twitter.com/share?url=https://www.eskilop.it".$_SERVER['REQUEST_URI']."\">";
    echo "Share on ";
    echo "<span style=\"padding:1.2rem;\" class=\"icon\"><i class=\"fab fa-twitter\"></i></span>";
    echo "</a>";
}
?>