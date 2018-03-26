<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
	<div class="single-product-container">
		<div class="third-side">
			<?php include(locate_template('sidebar4.php')); ?>
			<div>
				<img src="<?php the_field('logo', 150); ?>" alt="logo">
				<div class="ggg">
					<div class="ava">
						<p>Avansas, €</p>
						<input type="range" min="0" max="" value="0" class="psr" id="myRange">
						<input type="text" class="avansas" value="">
					</div>
					<div class="ava">
						<p>Terminas mėn.</p>
						<input type="range" min="3" max="36" value="0" class="psr" id="myRange2">
						<input type="text" class="terminas" value="">
					</div>
					<div class="ppmbtn">
						<p>Įmoka €/mėn.</p>
						<p class="paypm"></p>
					</div>
					<div class="calcbtn">
						<button class="calc">Skaiciuoti</button>
					</div>
				</div>
			</div>
		</div>
		<div class="single-product-content">
		<?php while ( have_posts() ) : the_post(); ?>

				<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>
		</div>
	</div>
	




				

<?php get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
?>

