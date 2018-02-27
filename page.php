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

			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/page/content', 'page' );
				// Если комментарии открыты или у нас есть хотя бы один комментарий, загрузите шаблон комментария.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile; // End of the loop.
			?>
</div>
<?php get_footer(); ?>
