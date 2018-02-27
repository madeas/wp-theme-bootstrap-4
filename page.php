<?php 
/**
 * Шаблон для отображения всех страниц

 * @package WordPress
 * @subpackage tWPonB4
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>

<div class="container bg-white my-3">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-white">
    <li class="breadcrumb-item"><a href="/">Главная</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
  </ol>
</nav>
</div>
<div class="container bg-white my-3 py-3">
		<h1><?php the_title(); ?></h1>
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
