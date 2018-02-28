<?php get_header(); ?>

<div class="container bg-white my-3 py-3">
	<div class="row">
		
		<div class="col-md-12">			
		<h2>
		<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h2>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part('content', 'single') ?>
			
			<?php // If comments are open or we have at least one comment, load up the comment template.
 				if ( comments_open() || '0' != get_comments_number() ) :
 					comments_template();
 				endif;
			?>
			
			<?php endwhile; ?>
		</div>
		
	</div>
</div>

<?php get_footer(); ?>
