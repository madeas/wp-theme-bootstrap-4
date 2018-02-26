<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="description" content="demo website creative agency madeas studio" />
    <title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>	
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>      
</head>
<body <?php body_class(); ?>>	
		
<header>	
<nav class="navbar navbar-topbar sticky-top navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
  <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
    &#9776;
  </button>
  <div class="collapse navbar-toggleable-xs" id="collapsingNavbar">
    <?php
        wp_nav_menu( array(
          'theme_location' => 'navbar',
          'container'      => false,
          'menu_class'     => 'nav navbar-nav',
          'fallback_cb'    => '__return_false',
          'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth'          => 2,
          'walker'         => new bootstrap_4_walker_nav_menu()
       ) );
    ?>
    <?php get_template_part('navbar-search'); ?>
  </div>
</nav>
</header>
