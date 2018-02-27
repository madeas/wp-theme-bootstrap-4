<?php
/**
 * Template for displaying search forms in tWPonB4
 *
 * @package WordPress
 * @subpackage tWPonB4
 * @since 1.0
 * @version 1.0
 */
?>

<?php $unique_id = esc_attr( uniqid( 'searchform' ) ); ?>
<form role="search" method="get" id="searchform" class="form-inline my-2 my-lg-0 searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" id="<?php echo $unique_id; ?>" class="form-control mr-sm-2" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'tWPonB4' ); ?>" name="s">
    <button class="btn btn-outline-secondary my-2 my-sm-0" id="searchsubmit" type="submit">Поиск</button>
</form>
