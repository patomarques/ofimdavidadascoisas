<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Bravada
 */

get_header(); ?>

	<div id="container" class="<?php bravada_get_layout_class(); ?>">
	
		<main id="main" class="main">
			<?php cryout_before_content_hook(); ?>

			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<h2 class="title-page display-1 mt-0 pb-4"><?php echo the_title(); ?></h2>
					</div>
				</div>
			</div>

			<?php get_template_part( 'content/content', 'page' ); ?>

			<?php cryout_after_content_hook(); ?>
		</main><!-- #main -->

		<?php bravada_get_sidebar(); ?>

	</div><!-- #container -->

<?php get_footer();
