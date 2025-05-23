<?php

/**
 * The Header
 *
 * Displays all of the <head> section and everything up till <main>
 *
 * @package Bravada
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<?php cryout_meta_hook(); ?>
	<meta charset="<?php bloginfo('charset'); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if (is_singular() && pings_open(get_queried_object())) : ?>
		<link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>">
	<?php endif; ?>
	<?php
	cryout_header_hook();
	wp_head();
	?>
	<!-- <link rel="stylesheet" type="text/css" href="<?= get_site_urL() ?>/wp-content/themes/ripley/node_modules/bootstrap/dist/css/bootstrap.min.css" /> -->
</head>

<body <?php body_class();
		cryout_schema_microdata('body'); ?>>
	<?php do_action('wp_body_open'); ?>
	<?php cryout_body_hook(); ?>
	<div id="site-wrapper">

		<header id="masthead" class="cryout" <?php cryout_schema_microdata('header') ?>>

			<div id="site-header-main">

				<div class="site-header-top">

					<div class="site-header-inside">

						<div id="header-menu" <?php cryout_schema_microdata('menu'); ?>>
							<?php cryout_topmenu_hook(); ?>
						</div><!-- #header-menu -->

					</div><!-- #site-header-inside -->

				</div><!--.site-header-top-->

				<?php if (has_nav_menu('primary') || (true == cryout_get_option('theme_pagesmenu'))) { ?>
					<nav id="mobile-menu" tabindex="-1">
						<?php cryout_mobilemenu_hook(); ?>
						<?php do_action('cryout_side_section_hook'); ?>
					</nav> <!-- #mobile-menu -->
				<?php } ?>

				<div class="site-header-bottom">

					<div class="site-header-bottom-fixed">

						<div class="site-header-inside">

							<div class="container">
								<div class="row">
									<div class="col-8 col-md-4">
										<div id="branding">
											<?php cryout_branding_hook(); ?>
										</div><!-- #branding -->

									</div>
									<div class="col-4 col-md-8">
										<?php if (bravada_check_empty_menu('primary') && (has_nav_menu('primary') || (true == cryout_get_option('theme_pagesmenu')))) { ?>
											<div class='menu-burger d-xl-none'>
												<button class='hamburger' type='button' aria-label="<?php esc_attr_e('Main menu', 'bravada') ?>">
													<span></span>
													<span></span>
													<span></span>
												</button>
											</div>

										<?php } ?>


										<?php if (bravada_check_empty_menu('top') && (has_nav_menu('top') || (true == cryout_get_option('theme_pagesmenu')))) { ?>
											<nav id="<?php echo apply_filters('bravada_navigation_compat', 'access') ?>" aria-label="<?php esc_attr_e('Top Menu', 'bravada') ?>" <?php cryout_schema_microdata('menu'); ?>>
												<?php cryout_access_hook(); ?>
											</nav><!-- #access -->
										<?php } ?>

									</div>
								</div>
							</div>



						</div><!-- #site-header-inside -->

					</div><!-- #site-header-bottom-fixed -->

				</div><!--.site-header-bottom-->

			</div><!-- #site-header-main -->

			<div id="header-image-main">
				<div id="header-image-main-inside">
					<?php cryout_headerimage_hook(); ?>
				</div><!-- #header-image-main-inside -->
			</div><!-- #header-image-main -->

		</header><!-- #masthead -->

		<?php cryout_absolute_top_hook(); ?>

		<div id="content" class="cryout">
			<?php cryout_main_hook(); ?>