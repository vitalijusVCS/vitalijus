<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body>
	<?php echo get_page_template_slug() ?>
	<header id="top">
		<?php 
		$custom_logo_id = get_theme_mod( 'custom_logo' );
		$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		?>
		<div class="logo">
			<a href="<?php echo home_url(); ?>"><img src="<?php echo $logo[0]; ?>" alt="logo"></a>
		</div>
		<div class="headersection">
			<nav class="topnav">
				<ul class="topnavul">
					<li class="hidemenu"><a href="mailto:<?php the_field('e_mail', 81); ?>"><i class="fa fa-envelope-square"></i><?php the_field('e_mail', 81); ?></a></li>
					<li class="hidemenu"><a href="tel:<?php the_field('phone_number', 81); ?>"><i class="fa fa-phone-square"></i><?php the_field('phone_number', 81); ?></a></li>
					<li id="infobtn"><a href="" class="hidemenu"><i class="fa fa-info-circle"></i>Apie myShop<i class="down"></i></a>
						<ul class="dropdowntopmenu hidemenu">
							<?php wp_nav_menu( array(
								'theme_location' => 'topsubmenu')); ?>
						</ul>
					</li>
					<li class="burger"><label for="toggle-menu" class="menu-on"><i class="fa fa-bars"></i></label>
						<input type="checkbox" id="toggle-menu">
						<ul class="primary-nav">
							<?php wp_nav_menu( array(
								'theme_location' => 'topsubmenu')); ?>
						</ul>

				</ul>
			</nav>
			<div class="searchandreg">
				<form class="searchbar" role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<input type="search" id="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>" class="search-field" placeholder="Prekių paieška..." value="<?php echo get_search_query(); ?>" name="s" />
					<button type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'woocommerce' ); ?>"><i class="fa fa-search" id="searchbtn"></i></button>
					<input type="hidden" name="post_type" value="product" />
				</form>
				<div class="acccontainer">
					<div class="acc">
						<a href="<?php echo home_url('my-account'); ?>"><i class="fa fa-user"></i>
						<div class="acctxt">
							<p class="phide">Prisijungti/Registruotis</p>
							<p class="phide">Mano profilis<span class="down"></span></p>
						</div>
						</a>
							<ul class="accdropcontent">
								<li id="joinbtn"><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account',''); ?>">Prisijungti /<br>Registruotis</a></li>
								<li id="myportbtn"><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account',''); ?>">Mano paskyra</li>
							</ul>
					</div>
					<div class="marked">
						<a href="<?php echo home_url('wish-list'); ?>"><i class="fa fa-heart"></i>
						<div class="markedtxt">
							<p class="phide">Norimos</p>
							<p class="phide">Prekės<span class="down"></span></p>
						</div>
						</a>
							<div class="markeddrop">
								<?php include(locate_template('sidebar2.php')); ?>
							</div>
					</div>
					<div class="shopingcart">
						<a href="<?php echo home_url('cart'); ?>"><i class="fa fa-shopping-cart" id="maincart"></i>
						<div class="carttxt">
							<p class="phide"><a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo WC()->cart->get_cart_total(); ?></a></p>
							<p class="phide">Krepšelis<span class="down"></span></p>
						</div>
						</a>
							<ul class="cartcontent">
								<li><?php include(locate_template('sidebar.php')); ?></li>
							</ul>
					</div>
				</div>
			</div>
		</div>	
	</header>
	<main <?php body_class(); ?>>