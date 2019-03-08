<?php
/**
 * Header for posts
 * 
 * @package Esky
 * @since Esky 1.0
 */
?>
<nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="javascript:history.back();">
      <i class="material-icons">arrow_back</i>
    </a>
    <a class="navbar-item" href="/">
      <img src="https://assets.gitlab-static.net/uploads/-/system/user/avatar/764306/avatar.png" alt="Eskilop.it">
    </a>
    <a class="navbar-item" href="/"><?php bloginfo('name'); ?></a>
  </div>
</nav>
<div class="content">
<?php the_title( '<h1 style="margin-left: 2%; margin-top: 5%;" class="title">', '</h1>' ); ?>