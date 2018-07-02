<header class="header header-default">
  <div class="header-top">
    <div class="container">
 <div class="header-top-left">
        <?php //print $header_top_menu_tree; ?>
		<span class="login">
        <i class="fa fa-phone"></i> <a href="tel:+4540922207">+ 45 40 92 22 07&nbsp;&nbsp;&nbsp;</a>
        </span>
		<span class="login">
        <i class="fa fa-envelope"></i> <a href="mailto:info@webland.dk">info@webland.dk</a>
        </span>
      </div>
      <div class="header-top-right">
        <?php //print $login_account_links; ?>
		<div class="social-links-wrapper">
              <ul class="social-links social-links__dark">
                <?php if (theme_get_setting('social_links_facebook_enabled')): ?>
                  <li><a class="fb" href="//<?php print theme_get_setting('social_links_facebook_link'); ?>" ><i class="fa fa-facebook"></i></a></li>
                <?php endif; ?>
                <?php if (theme_get_setting('social_links_twitter_enabled')): ?>
                  <li><a class="tw" href="//<?php print theme_get_setting('social_links_twitter_link'); ?>"><i class="fa fa-twitter"></i></a></li>
                <?php endif; ?>          
                <?php if (theme_get_setting('social_links_instagram_enabled')): ?>
                  <li><a class="in" href="//<?php print theme_get_setting('social_links_instagram_link'); ?>"><i class="fa fa-instagram"></i></a></li>
                <?php endif; ?>          
                <?php if (theme_get_setting('social_links_linkedin_enabled')): ?>
                  <li><a href="//<?php print theme_get_setting('social_links_linkedin_link'); ?>"><i class="fa fa-linkedin"></i></a></li>
                <?php endif; ?>
                <?php if (theme_get_setting('social_links_xing_enabled')): ?>
                  <li><a href="//<?php print theme_get_setting('social_links_xing_link'); ?>"><i class="fa fa-xing"></i></a></li>
                <?php endif; ?>
                <?php if (theme_get_setting('social_links_rss_enabled')): ?>
                  <li><a href="//<?php print theme_get_setting('social_links_rss_link'); ?>" ><i class="fa fa-google-plus"></i></a></li>
                <?php endif; ?>
              </ul>
</div>
      </div>
    </div>
  </div>
  <div class="header-main">
    <div class="container">
      <!-- Logo -->
      <div class="logo">
        <?php if($logo): ?>
          <a href="<?php print $front_page; ?>"><img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>"></a>
        <?php else: ?>
          <h1><a href="<?php print $front_page; ?>"><?php print $site_name; ?></a></h1>
        <?php endif; ?>
        <p class="tagline"><?php print $site_slogan; ?></p>
      </div>
      <!-- Logo / End -->
		 <div class="cta-btn">
		  <a class="btn btn-primary" href="/placere-en-ordre">Placere en ordre</a>
		</div>
      <button type="button" class="navbar-toggle">
        <i class="fa fa-bars"></i>
      </button>
        <!-- Navigation -->
      <nav class="nav-main">
        <ul data-breakpoint="992" class="flexnav">
         <?php
            if(module_exists('tb_megamenu')) {
              print theme('tb_megamenu', array('menu_name' => 'main-menu'));
            }
            else {
              $main_menu_tree = module_exists('i18n_menu') ? i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu')) : menu_tree(variable_get('menu_main_links_source', 'main-menu'));
              print drupal_render($main_menu_tree);
            }
          ?>
        </ul>
      </nav>
      <!-- Navigation / End -->
    </div>
  </div>
</header>