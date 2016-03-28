<!DOCTYPE html>
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title><?php wp_title(''); ?></title>
	


    <?php wp_head(); ?>	<?php global $current_user;
      get_currentuserinfo();
if ( is_super_admin() || is_admin() || $current_user->user_level=='3') {
echo '';	
}
else{
?>
<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/0044/9740.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>
<?php }?>

  </head>
  <body>
    <div class="body">
      <header class="header">
	  <a class="header__logo" href="//www.jhu.edu"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Johns Hopkins University"></a>
        <div class="header__title">
          <?php switch_to_blog(1); $network_site_title = get_bloginfo('name'); restore_current_blog(); ?>
          <?php if (!is_main_site()) : ?>
                       <a class="header__title__main" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
          <?php endif; ?>
        </div>
      </header>
      <a class="menu-toggle"></a>
      <nav class="menu">
        <span class="menu__title">Find Resources Based On:</span>
        <?php switch_to_blog(1); ?>
          <ul>
            <li class="menu__sub">
              <a>What You Need</a>
              <ul class="menu__sub__dropdown">
                <?php wp_nav_menu(array(
                  'menu' => 'what',
                  'container' => false,
                  'items_wrap' => '%3$s'
                )); ?>
              </ul>
            </li>
            <li class="menu__sub">
              <a>Who You Are</a>
              <ul class="menu__sub__dropdown">
                <?php wp_nav_menu(array(
                  'menu' => 'who',
                  'container' => false,
                  'items_wrap' => '%3$s'
                )); ?>
              </ul>
            </li>
            <?php wp_nav_menu(array(
              'menu' => 'header',
              'container' => false,
              'items_wrap' => '%3$s'
            )); ?>
          </ul>
        <?php restore_current_blog(); ?>
        <div class="menu__search-wrap">
          <form class="menu__search" method="get" action="https://www.jhu.edu/search">
            <a class="menu__search__toggle"><span>Search</span></a>
            <label for="search">Search</label>
            <input class="menu__search__input" id="search" type="search" placeholder="Search for topics &amp; people" name="q">
          </form>
        </div>
      </nav>