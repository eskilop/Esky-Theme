<?php
function esky_display_tags() {
    $tags = get_the_tags();
	$html = '<h4>Tags:</h4><div class="post_tags">';
	foreach ( $tags as $tag ) {
        $tag_link = get_tag_link( $tag->term_id );
        $html .= "<span class=\"tag\" class='{$tag->slug}' style='margin: 0.2rem;'><a href='{" . esc_url( $tag_link) . "}'>$tag->name</a></span>";
	}
	$html .= '</div>';
	echo $html;
}

function esky_display_article_meta() {
    $authorpic = '  <img class="esky-author" src="' . get_avatar_url( get_the_author_meta( 'ID' ), 32) . '"/>';
    $authorinfo = '  <div class="meta-author">';
    $authorinfo .= '    <strong>-<a href="' .get_the_author_meta('url') .'">' .get_the_author_meta('nickname') . '</a></strong>';
    $authorinfo .= '    <p>' . get_the_author_meta( 'description' ) . '</p>';
    $authorinfo .= '  </div>';
    $post_date = '<div class="meta-date"><p>posted on ' . get_the_date('l j F, Y - h:m') . '</p></div>';
    echo '<div class="post-meta">';
    echo    $authorpic;
    echo '  <div class="meta-mixed">';
    echo    $authorinfo;
    echo    $post_date;
    echo '  </div>';
    echo '</div>';
}
?>