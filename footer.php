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


<?php
$args = array(
	'post_type' => 'textos-editaveis',
	'post_status' => 'publish',
	'numberposts' => -1,
	'order'    => 'ASC'
);
$editableTexts = new WP_Query($args);

// print_r("<pre>");
// print_r($editableTexts);
// print_r("</pre>");

$footerInfos = array();

while ($editableTexts->have_posts()) : $editableTexts->the_post();

	if (get_the_title() == 'Footer') {
		$footerInfos = array(
			'email' => get_post_custom_values('email')[0],
			'telefone_1' => get_post_custom_values('telefone_1')[0],
			'telefone_2' => get_post_custom_values('telefone_2')[0],
			'email' => get_post_custom_values('email')[0],
			'incentivadores_url' => get_post_custom_values('incentivadores_url')[0],
			'instagram' => get_post_custom_values('instagram')[0],
			'logo_footer' => get_post_custom_values('logo_footer')[0],
			'producao_url' => get_post_custom_values('producao_url')[0],
		);
	}


endwhile;
?>
<div class="<?= (is_front_page() ? '' : 'pt-5 pb-5') ?>"></div>

<section class="container-fluid bg-beige fluid pt-5 pb-5">
	<div class="container pt-5 ">
		<div class="row">
			<div class="col-12 col-xl-5">
				<img src="<?= $footerInfos['logo_footer'] ?>" alt="Logo - O fim da vida das coisas" title="Logo - O fim da vida das coisas" class="img-responsive footer-logo">
			</div>
			<div class="col-12 col-xl-7">
				<div class="row">
					<div class="col-12 col-md-7">
						<h3 class="title-footer bold pb-3">Contato</h3>
						<a href="mailto:<?= $footerInfos['email'] ?>" class="d-block h4 link bold color-black h5">
							<?= $footerInfos['email'] ?></a>
						<a class="d-block h5 bold color-black" href="tel:<?= $footerInfos['telefone_1'] ?>">
							<?= $footerInfos['telefone_1'] ?>
						</a>
						<a class="d-block h5 bold color-black" href="tel:<?= $footerInfos['telefone_1'] ?>">
							<?= $footerInfos['telefone_2'] ?>
						</a>
					</div>
					<div class="col-12 col-md-5">
						<h3 class="title-footer bold">Estamos no instagram</h3>
						<p><a href="https://instagram.com/<?= $footerInfos['instagram'] ?>" class="color-black" target="_blank">
								@<?= $footerInfos['instagram'] ?></a></p>
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-12 col-md-7">
						<h6 class="h6 bold pt-3 pb-2">Incentivo</h3>
							<img src="<?= get_site_url() . $footerInfos['incentivadores_url'] ?>" alt="Incentivo" class="img-responsive m-auto d-block">
					</div>
					<div class="col-12 col-md-5">
						<h6 class="h6 pt-3 pb-2 bold">Produção</h6>
						<?php if ($footerInfos['producao_url'] == '') { ?>
							<div class="d-block bg-black">
								<p>.</p>
							</div>
						<?php } else { ?>

							<img src="<?= $footerInfos['producao_url'] ?>" alt="Produção" class="img-responsive">
						<?php } ?>
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
			<a href="<?php echo get_site_url(); ?>" class="color-black fst-italic fw-light">
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