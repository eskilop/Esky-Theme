<?php wp_footer(); ?>
<footer class="footer has-text-centered">
  <div class="content">
    <p>
      Proudly powered by <strong>Esky</strong> theme, w/ ❤️ by 
      <a href="https://eskilop.it/so-here-i-am">
        <img id="avatar" src="https://secure.gravatar.com/avatar/7cf44f708e5e4578360eb8a971aaa8fe?s=512&d=identicon" width="24" height="24">
      </a>
    </p>
    <div class="esky-social-menu">
    <?php esky_display_social_menu(); ?>
    </div>
  </div>
</footer>
<?php echo get_theme_mod( 'esky_google_analytics', '') ?>
</body>