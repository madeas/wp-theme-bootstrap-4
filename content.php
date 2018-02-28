<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part('content') ?>
<?php endwhile; ?>
 
<?php
if (function_exists('theme_pagination')) theme_pagination(); 
else posts_nav_link();
?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
