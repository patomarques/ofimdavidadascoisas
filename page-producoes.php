<?php get_header(); ?>

<section id="page-producoes" class="container">

    <div class="row">
        <div class="col-12 text-center">
            <h2 class="title-page display-1 pt-5 pb-5 mb-3">Produções</h2>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <h3 class="display-7 pb-3">Documentário</h3>

        <?php echo the_content(); ?>
        </div>

        <div class="col-12 col-lg-6 m-auto mt-5 pt-5">
            <div class="content-box d-block text-center p-5">
                <div class="box-icon-rounded">
                    <i class="fa-solid fa-book "></i>
                </div>
                <h4 class="content-box__title pb-4">Ebooks</h4>
                <a href="<?= get_site_url() ?>/wp-content/uploads/2024/11/Museologia_e_suas_interfaces_criticas_mu.pdf" target="_blank"
                    class="btn btn-green pt-2 pl-5 pr-4 pb-2">Visualizar</a>
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>