<?php get_header(); ?>

<div class="container-fluid bg-red">
    <?php
    echo do_shortcode('[smartslider3 slider="2"]');
    ?>
</div>

<section class="container-fluid bg-yellow pt-5 pb-5">
    <div class="container pt-5 pb-4">
        <div class="row">
            <h2 class="display-2 bold pb-4"><?= get_post_custom_values('home_text_intro_title')[0] ?></h2>
            <p class="fw-light fs-2"><?= get_post_custom_values('home_text_intro_subtitle')[0] ?></p>

            <a href="<?php echo get_site_url() . '/sobre' ?>" class="fs-2 fw-normal color-black">>>> Saiba mais.</a>
        </div>
    </div>

</section>

<?php
$objects = new WP_Query(
    array(
        'post_type' => 'objetos',
        'orderby' => 'publish',
        'order' => 'DESC',
    )
);
?>

<section class="container-fluid bg-red pt-5 pb-5">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12 col-md-4 col-lg-6">
                <h2 class="title-section bold">Acervo</h2>
            </div>
            <div class="col-12 col-md-8 col-lg-6">

                <ul class="nav justify-content-end nav-acervo">
                    <li class="nav-item nav-acervo__item">
                        <a href="<?= get_site_url() . '/objetos' ?>" class="nav-acervo__item__link">Objetos</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= get_site_url() . '/pessoas' ?>" class="nav-acervo__item__link">Pessoas</a>

                    </li>
                    <li class="nav-item">
                        <a href="<?= get_site_url() . '/acervo/lugares' ?>" class="nav-acervo__item__link">Lugares</a>

                    </li>
                </ul>
            </div>
        </div>
        <div class="row">

            <div class="multiple-items js-slider">
                <?php while ($objects->have_posts()):
                    $objects->the_post(); ?>

                    <div>
                        <img src="<?= get_the_post_thumbnail_url(get_the_ID()) ?>"
                            title="<?php echo get_the_title(); ?>" alt="<?php echo get_the_title(); ?>" class="img-responsive">
                    </div>

                <?php endwhile; ?>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-6 text-left">
                <h2 class="title-section fw-bold">Objetos</h2>
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-end pt-1">
                    <a href="<?= get_site_url() . '/objetos' ?>" class="h4 mt-3 fw-normal text-see-more">>>> Saiba mais.</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$peoples = new WP_Query(
    array(
        'post_type' => 'pessoas',
        'orderby' => 'publish',
        'order' => 'DESC',
    )
);
?>

<section class="container-fluid bg-blue p-0">
    <div class="slick-people">

        <?php while ($peoples->have_posts()):
            $peoples->the_post(); ?>

            <div class="slick-people__item">
                <a href="<?php echo get_the_permalink(); ?>" title="<?= get_the_title() ?>">
                    <div style="background-image: url(<?= get_the_post_thumbnail_url(get_the_ID()) ?>)"
                        class="slick-people__item__image"></div>
                </a>
            </div>
        <?php endwhile; ?>
    </div>


    <div class="container pb-5">
        <div class="row mt-5">
            <div class="col-6">
                <h2 class="title-section fw-bold">Pessoas</h2>
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-end">
                    <a href="<?= get_site_url() . '/pessoas' ?>" class="color-black h4 pt-3 pb-0 mb-0 text-see-more">>>> Saiba mais.</a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
$places = new WP_Query(
    array(
        'post_type' => 'lugares',
        'orderby' => 'publish',
        'order' => 'DESC',
    )
);
?>

<section class="container-fluid bg-green pt-5 pb-5">
    <?php echo get_template_part('template_parts/lugares-mapa'); ?>
</section>

<?php get_footer(); ?>