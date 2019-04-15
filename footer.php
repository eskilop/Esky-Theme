<?php wp_footer(); ?>
<footer class="footer has-text-centered">
  <div class="content">
    <p>
      Proudly powered by <strong>Esky</strong> theme, w/ ❤️ by 
      <a href="https://eskilop.it/so-here-i-am">
        <img id="avatar" src="https://assets.gitlab-static.net/uploads/-/system/user/avatar/764306/avatar.png" width="24" height="24">
      </a>
    </p>
    <div class="esky-social-menu">
    <?php esky_display_social_menu(); ?>
    </div>
  </div>
</footer>
<?php @ require 'gtag.html' ?>
</body>