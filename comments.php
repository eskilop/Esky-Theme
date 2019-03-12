<?php
/**
 * The template for displaying Comments.
 *
 * @package Esky
 * @since Esky 1.0
 */
 
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>
 
<div id="comments" class="comments-area">
 
    <?php if ( have_comments() ) : ?>
        <h5 class="comments-title">
            <?php
                printf( _nx( 'One thought on "%2$s"', '%1$s thoughts on "%2$s"', get_comments_number(), 'comments title', 'esky' ),
                    number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
            ?>
        </h5>
 
        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 32,
                ) );
            ?>
        </ol><!-- .comment-list -->
 
        <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'esky' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'esky' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'esky' ) ); ?></div>
        </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>
 
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php _e( 'Comments are closed.' , 'esky' ); ?></p>
        <?php endif; ?>
 
    <?php endif; // have_comments() ?>
 
    <?php
        $aria_req = 'aria-required="true"';

        $fields = array (
            'author' => 
            '<p class="comment-form-author" style="padding: 0.5rem;"><label for="author">' . __( 'Username') .
            ( $req ? '<span class="required">*</span>' : '' ) . '</label>' .
            '<input id="author" name="author" size="30" class="input is-rounded" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . ' /></p>',
            'email' =>
            '<p class="comment-form-email" style="padding: 0.5rem;"><label for="email">' . __( 'Email') .
            ( $req ? '<span class="required">*</span>' : '' ) . '</label>' .
            '<input id="email" name="email" size="30" class="input is-rounded" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) . '" ' . $aria_req . ' /></p>',
            'cookies' =>
            '<p class="comment-form-cookies-consent" style="padding: 0.5rem;"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" />' . '<label for="wp-comment-cookies-consent">' . __( 'Save my name and email in this browser for the next time I comment, with a cookie.' ) . '</label></p>'
        );

        $comment_args = array (
            'fields' => $fields,
            'comment_field' =>
            '<p class="comment-form-comment" style="padding: 0.5rem;"><label for="comment">' . _x( 'Comment', 'noun' ) . 
            '</label><textarea id="comment" name="comment" class="textarea" cols="45" rows="8" aria-required="true"></textarea></p>',
            'class_submit' => 'submit button is-primary',
            'label_submit' => "Post comment"
        );
        comment_form($comment_args); 
    ?>
 
</div>