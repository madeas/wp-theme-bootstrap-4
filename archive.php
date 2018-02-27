<?php get_header(); ?>
<h1 class="page-title">
   <?php
if (is_category()):
    single_cat_title();
elseif ( is_tag() ) :
	single_tag_title();
elseif (is_year()):
    printf(__('Year: %s', 'striped'), '<span>' . get_the_date(_x('Y', 'yearly archives date format', 'striped')) . '</span>');
elseif (is_month()):
    printf(__('Month: %s', 'striped'), '<span>' . get_the_date(_x('F Y', 'monthly archives date format', 'striped')) . '</span>');
elseif (is_day()):
    printf(__('Day: %s', 'striped'), '<span>' . get_the_date() . '</span>');
endif;
?>
</h1>
<?php
   if ( is_category() ) : // выводим описание только на странице рубрики
       if (category_description() !== '') : // если есть описание, выведем его
            echo '<p>' . category_description() . '</p>';
       endif;
   endif;
?>
<?php while ( have_posts() ) : the_post(); ?>