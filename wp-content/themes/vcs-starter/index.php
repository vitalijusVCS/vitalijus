<?php get_header(); ?>
		<section>
			<?php get_template_part('elements/product-categories'); ?>
				<div class="slideradds">
					<?php get_template_part('elements/main-slider'); ?>
					<?php get_template_part('elements/adds'); ?>	
				</div>
			</div>
		</section>
		<div id="backtostartbtn">
			<a href="#top"><i class="fa fa-arrow-circle-up"></i></a>
		</div>
		<?php get_template_part('elements/product-slider'); ?>
		<?php get_template_part('elements/product-slider2'); ?>		
<?php get_footer(); ?>
