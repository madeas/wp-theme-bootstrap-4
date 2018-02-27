<?php get_header(); ?>
    <div id="container">
        <div class="row">
            <div class="col-md-8">
            <?php get_template_part( 'loop', 'single' );?>
            </div>
                <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>
