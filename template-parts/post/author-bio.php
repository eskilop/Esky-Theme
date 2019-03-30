<?php
/**
 * Template to display author bio
 * 
 * @package Esky
 * @since Esky 1.0
 */
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
?>