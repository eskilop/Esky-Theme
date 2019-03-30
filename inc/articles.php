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

}
?>