<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

get_header('shop'); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action('woocommerce_before_main_content');
	?>

		<?php do_action( 'woocommerce_archive_description' ); ?>

		<?php if ( have_posts() ) : ?>


			<ul class="products">

				<?php woocommerce_product_subcategories(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php woocommerce_get_template_part( 'content', 'product' ); ?>

				<?php endwhile; // end of the loop. ?>

			</ul>

			<?php do_action('woocommerce_after_shop_loop'); ?>

		<?php else : ?>

			<?php if ( ! woocommerce_product_subcategories( array( 'before' => '<ul class="products">', 'after' => '</ul>' ) ) ) : ?>

				<p><?php _e( 'No products found which match your selection.', 'woocommerce' ); ?></p>

			<?php endif; ?>

		<?php endif; ?>

		<div class="clear"></div>

		<?php
			/**
			 * woocommerce_pagination hook
			 *
			 * @hooked woocommerce_pagination - 10
			 * @hooked woocommerce_catalog_ordering - 20
			 */
			do_action( 'woocommerce_pagination' );
		?>

	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action('woocommerce_after_main_content');
	?>

	<?php
		/**
		 * woocommerce_sidebar hook
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action('woocommerce_sidebar');
	?>

<?php get_footer('shop'); ?>