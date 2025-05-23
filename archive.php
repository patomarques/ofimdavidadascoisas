<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bravada
 *
 */
get_header(); ?>

	<div id="container" class="<?php bravada_get_layout_class(); ?>">
		<main id="main" class="main">
			<?php cryout_before_content_hook();  ?>

			<h2 class="title-page display-1 text-center mt-1 mb-5 pb-5"><?php echo wp_title(''); ?></h2>
			
			<?php if ( have_posts() ) : ?>

				<header class="page-header pad-container" <?php cryout_schema_microdata( 'element' ); ?>>
					<?php

						// Load custom header if author
						if (is_author()) {
							get_template_part( 'content/user-bio' );
						// Default for all archives
						} else {
								the_archive_title( '<h1 class="page-title" ' . cryout_schema_microdata('entry-title', 0) . '>', '</h1>' );
								the_archive_description( '<div class="taxonomy-description">', '</div>' );
						}
					?>
				</header><!-- .page-header -->

				<?php if(get_post_type() == 'lugares') { 	
						get_template_part('template_parts/lugares-mapa'); 
					}else { 
				?>

				<div id="content-masonry" class="content-masonry" <?php cryout_schema_microdata( 'blog' ); ?>>
					<?php
					while ( have_posts() ) : the_post();
						 get_template_part( 'content/content', get_post_format() );
					endwhile;
					?>
				</div>

				<?php } ?>

				<?php //bravada_pagination();

			// If no content, include the "No posts found" template.
			else :
				get_template_part( 'content/content', 'notfound' );
			endif;

			cryout_after_content_hook(); ?>
		</main><!-- #main -->

		<?php bravada_get_sidebar(); ?>
	</div><!-- #container -->

<?php get_footer(); ?>
