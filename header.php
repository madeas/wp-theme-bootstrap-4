<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta name="description" content="<?php if ( is_single() ) {
      single_post_title('', true);
    } else {
      bloginfo('name'); echo " - "; bloginfo('description');
    }
  ?>" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="description" content="demo website creative agency madeas studio" />
    <title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>	
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>	
<header itemscope itemtype="http://schema.org/WPHeader" class="header">
	
<div class="bg-white header-widgets">
    <div class="container">
		<div class="row very-top-header">
          <?php
if ( is_active_sidebar( 'custom-header-widget' ) ) : ?>
	<?php dynamic_sidebar( 'custom-header-widget' ); ?>
<?php endif; ?>
		</div>
    </div>
</div>
	
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>	
<a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a>
    <div class="collapse navbar-collapse" id="navbarDropdown">
      <?php
        wp_nav_menu( array(
          'theme_location'  => 'navbar',
          'container'       => false,
          'menu_class'      => '',
          'fallback_cb'     => '__return_false',
          'items_wrap'      => '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
          'depth'           => 2,
          'walker'          => new bootstrap_4_walker_nav_menu()
        ) );
      ?>
		<?php
				get_search_form();
		endif;
		?>
    </div>
</nav>	
</header>
