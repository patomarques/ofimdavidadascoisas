<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of #main and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package Bravada
 */

?>

<?php cryout_absolute_bottom_hook(); ?>

<aside id="colophon" <?php cryout_schema_microdata('sidebar'); ?>>
	<div id="colophon-inside" <?php bravada_footer_colophon_class(); ?>>
		<?php get_sidebar('footer'); ?>
	</div>
</aside><!-- #colophon -->

</div><!-- #main -->

<div class="<?= (is_front_page()?'':'pt-5 pb-5') ?>"></div>

<section class="container-fluid bg-beige fluid pt-5 pb-5">
	<div class="container pt-5 ">
		<div class="row">
			<div class="col-12 col-md-5">
				<img src="<?= get_stylesheet_directory_uri() . '/assets/img/logo-footer.png' ?>" alt="Logo - O fim da vida das coisas" class="img-responsive">
			</div>
			<div class="col-12 col-md-7">
				<div class="row">
					<div class="col-12 col-md-7">
						<h3 class="title-footer bold pb-3">Contato</h3>
						<a href="mailto:contato@ofimdavidadascoisas.com" class="d-block h4 link bold color-black h5">contato@ofimdavidadascoisas.com</a>
						<a class="d-block h5 bold color-black" href="call:+5581988869961">+55 81 9 8886 9961</a>
						<a class="d-block h5 bold color-black" href="call:+5581988869961">+55 81 9 8886 9961</a>
					</div>
					<div class="col-12 col-md-5">
						<h3 class="title-footer bold">Estamos no instagram</h3>
						<p><a href="https://instagram.com/" class="color-black">@ofimdavidadascoisas</a></p>
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-12 col-md-7">
						<h6 class="h6 bold pt-3 pb-2">Incentivo</h3>
							<?php $imageApoiadores = get_stylesheet_directory_uri() . '/assets/img/logos-incentivo.png'; ?>
							<img src="<?= $imageApoiadores ?>" alt="Apoiadores" class="img-responsive m-auto d-block">
					</div>
					<div class="col-12 col-md-5">
						<h6 class="h6 pt-3 pb-2 bold">Produção</h6>
						<div class="d-block bg-black">
							<p>.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<footer id="footer" class="cryout bg-beige pt-5 pb-0 mb-0" <?php cryout_schema_microdata('footer'); ?>>
	<?php cryout_master_topfooter_hook(); ?>
	<div id="footer-top">
		<div class="footer-inside">
			<a href="<?php echo get_site_url(); ?>" class="color-black h6 italic">
				<?php echo get_bloginfo(); ?> &#169; <?= date('Y') ?>
			</a>
		</div>
	</div>
	<!-- <div id="footer-bottom">
			<div class="footer-inside">
				<p class="h6">Desenvolvido por <a class="link" href="https://www.patomarques.com.br" target="_blank">Pato Marques</a></p>
			</div>
		</div> -->
</footer>

<?php wp_footer(); ?>

</body>

</html>