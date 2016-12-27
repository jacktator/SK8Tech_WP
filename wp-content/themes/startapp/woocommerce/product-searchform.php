<?php
/**
 * The template for displaying product search form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/product-searchform.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes, 8guild
 * @package WooCommerce/Templates
 * @version 2.5.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<form method="get" class="search-box woocommerce-product-search" action="<?php echo esc_url( home_url( '/' ) ); ?>" autocomplete="off">
	<input type="hidden" name="post_type" value="product">
	<input type="text" name="s"
	       placeholder="<?php echo esc_attr_x( 'Search', 'search form placeholder', 'startapp' ); ?>"
	       value="<?php the_search_query(); ?>">
	<button type="submit"><i class="material-icons search"></i></button>
</form>
