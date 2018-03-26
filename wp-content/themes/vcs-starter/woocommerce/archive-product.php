<?php get_header(); ?>
<main>
	<div class="flex-container">
		
			<input id="checkit" type="checkbox" />
			<label for="checkit" class="checklabel"><i class="fa fa-filter"></i>Filtrai<i class="fa fa-sort-down"></i></label>

		<div class="filter-container" id="filterid">
			<?php include(locate_template('sidebar3.php')); ?>
		</div>
		<div class="shop-items">
			<?php 
			woocommerce_product_loop_start();

			if ( wc_get_loop_prop( 'total' ) ) {
				while ( have_posts() ) {
					the_post();

					/**
					 * Hook: woocommerce_shop_loop.
					 *
					 * @hooked WC_Structured_Data::generate_product_data() - 10
					 */
					do_action( 'woocommerce_shop_loop' );

					wc_get_template_part( 'content', 'product' );
				}
			}

			woocommerce_product_loop_end(); 
			?>
		</div>
	</div>
</main>

<?php get_footer(); ?>