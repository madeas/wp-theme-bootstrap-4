<?php

/**!
 * Navbar walker nav menu
 */
class bootstrap_4_walker_nav_menu extends Walker_Nav_menu {
    
    function start_lvl( &$output, $depth ){ // ul
        $indent = str_repeat("\t",$depth); // indents the outputted HTML
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
    }
  
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ){ // li a span
        
    $indent = ( $depth ) ? str_repeat("\t",$depth) : '';
    
    $li_attributes = '';
        $class_names = $value = '';
    
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        
        $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
        $classes[] = ($item->current || $item->current_item_anchestor) ? 'active' : '';
        $classes[] = 'nav-item';
        $classes[] = 'nav-item-' . $item->ID;
        if( $depth && $args->walker->has_children ){
            $classes[] = 'dropdown-menu';
        }
        
        $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = ' class="' . esc_attr($class_names) . '"';
        
        $id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
        
        $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';
        
        $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';
        
        $attributes .= ( $args->walker->has_children ) ? ' class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="nav-link"';
        
        $item_output = $args->before;
        $item_output .= ( $depth > 0 ) ? '<a class="dropdown-item"' . $attributes . '>' : '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
        
        $output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    
    }
    
}
/*
Register Navbar
*/
register_nav_menu('navbar', __('Navbar', 'Меню в header'));
register_nav_menus(array( 'sidebar_menu' => 'Меню в sidebar'));
/*
 * Основные стили сайта 
 *
*/

// Заносим CSS стили и JS скрипты в функцию theme_scripts_styles
function theme_scripts_styles(){

// Подключаю стили
    wp_enqueue_style( 'exo', ('http://fonts.googleapis.com/css?family=Exo+2:300,300italic,500,600&subset=latin,cyrillic'), array(), '', 'all' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.0.0', 'all' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0', 'all' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), '3.5.2', 'all' );
    wp_enqueue_style( 'general-style', get_stylesheet_uri(), array(), '1.0.2', 'all' );
    
// Подключаем файл с JS скриптом сразу без регистрации
    wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '3.3.1', true );
    wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/js/popper.min.js', array(), '', true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.0.0', true );    
}
// Создаем экшн в котором подключаем скрипты подключенные внутри функции twentytwelve_scripts_styles
add_action( 'wp_enqueue_scripts', 'theme_scripts_styles', 1 );

/*
 * theme_get_file выводит файлы из директории темы 
 * название можно выбрать любое и менять его в файлах выше, соответственно * 
 *
 */

function theme_get_file( $file ) {
	$file_parts   = pathinfo( $file );
	$accepted_ext = array( 'jpg', 'img', 'png', 'css', 'js' );
	if ( in_array( $file_parts['extension'], $accepted_ext ) ) {
		$file_path = get_stylesheet_directory() . $file;
		if ( file_exists( $file_path ) ) {
			return esc_url( get_stylesheet_directory_uri() . $file );
		} else {
			return esc_url( get_template_directory_uri() . $file );
		}
	}

	return $file;
}

function top_widgets_init() {
	register_sidebar( array(
		'name'          => 'Верхняя часть сайта',
		'id'            => 'custom-header-widget',
		'before_widget' => '<div class="col-4 col-md">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="text-dark">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'top_widgets_init' );

function wpb_widgets_init() {
	register_sidebar( array(
		'name'          => 'Нижняя часть сайта',
		'id'            => 'custom-footer-widget',
		'before_widget' => '<div class="col-6 col-md">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="text-white">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'wpb_widgets_init' );
?>
