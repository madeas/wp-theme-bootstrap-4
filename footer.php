<footer class="footer py-5 bg-dark text-white">
	<div class="container">	
		
      <div class="row">
        <div class="col-12 col-md text-center">
          <img src="/white_logo_on_transparent_156x73.png" alt="">
          <small class="d-block mb-3 text-muted">&copy; <?php echo date('Y'); ?> <a class="text-muted" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></small>
        </div>
          <?php
if ( is_active_sidebar( 'custom-footer-widget' ) ) : ?>
	<?php dynamic_sidebar( 'custom-footer-widget' ); ?>
<?php endif; ?>
      </div>
		
	</div>
</footer>
	<?php wp_footer(); ?>
</body>
</html>
