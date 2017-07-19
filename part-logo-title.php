  <header class="header">
	  <a class="header__logo" href="//www.jhu.edu"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Johns Hopkins University"></a>
        <div class="header__title">
          <?php switch_to_blog(1); $network_site_title = get_bloginfo('name'); restore_current_blog(); ?>
          <?php if (!is_main_site()) : ?>
                       <a class="header__title__main" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
          <?php endif; ?>
        </div>
      </header>