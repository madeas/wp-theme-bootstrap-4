<footer class="entry-meta">
	<?php edit_post_link( __( 'Edit', 'striped' ), '<div class="edit-link">', '</div>' ); ?>
	<p class="tags"><?php the_tags(__( 'Tagged as: ', 'striped' ),', '); ?></p>
	<p class="categories"><?php _e( 'Categorized in&#58; ', 'striped' ) . the_category(', '); ?></p>
</footer>