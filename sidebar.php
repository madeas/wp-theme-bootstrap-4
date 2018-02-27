<?php 
/**
 * Шаблон для отображения записей в блоге

 * @package WordPress
 * @subpackage tWPonB4
 * @since 1.0
 * @version 1.0
 */
?>
<aside class="sidebar col-md-4">
	<?php if ( ! dynamic_sidebar('sidebar-right') ) : ?>
<?php endif; ?>	
	<!-- Copyright -->
<small id="copyright" class="text-center text-muted">
  <p>
    &copy; <?php echo date('Y');?>  <?php bloginfo('name'); ?>  <a href="https://github.com/madeas/wp-theme-bootstrap-4">
      <i class="fa fa-github" aria-hidden="true"></i>
    </a>
  </p>
</small>
</aside>
