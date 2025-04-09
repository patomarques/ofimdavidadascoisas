<?php
$args = array(
    'post_type' => 'equipe',
    'post_status' => 'publish',
    'numberposts' => -1,
    'order'    => 'ASC'
);
$equipe = new WP_Query($args);
?>

<section id="section-team" class="container-fluid p-0 mt-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="title-content ">Equipe</h2>
            </div>
        </div>

    </div>
    <div class="container-fluid p-0">
        <div class="">
            <div class="slick-js">

                <?php while ($equipe->have_posts()) : $equipe->the_post(); ?>

                    <?php $thumbTeamUrl = get_the_post_thumbnail_url($equipe->the_ID(), 'large');
                    if (empty($thumbTeamUrl)) {
                        $thumbTeamUrl = get_site_url() . '/wp-content/uploads/2024/11/icon-image-not-found-free-vector-3775104631.jpg';
                    }
                    ?>
                    <div class="equipe__card">
                        <div class="equipe__content">
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modal<?= the_ID() ?>">
                                <div class="equipe__content__image" style="background-image: url(<?= $thumbTeamUrl; ?>)">
                                </div>

                            </a>
                        </div>
                        <div class="equipe__content__text text-center mt-3">
                            <div class="equipe__content__name pb-3"><?php echo get_the_title(); ?></div>
                            <div class="equipe__content__desc mb-4 d-none"><?php echo the_content(); ?></div>
                        </div>

                        <div class="d-flex text-center ">
                            <div class="m-auto">
                                <?php if (isset(get_post_custom_values('instagram')[0])) { ?>
                                    <a href="<?= get_post_custom_values('instagram')[0] ?>" alt="Instagram" title="Instagram" target="_blank" class="m-3 mt-0">
                                        <i class="fab fa-instagram fa-2x"></i>
                                    </a>
                                <?php } ?>


                                <?php if (isset(get_post_custom_values('portfolio')[0])) { ?>
                                    <a href="<?= get_post_custom_values('portfolio')[0] ?>" title="Site / Portfólio" alt="Site / Portfólio" class="m-3 mt-0" target="_blank">
                                        <i class="far fa-paper-plane fa-2x"></i>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            </div>

        </div>
    </div>
</section>

<?php while ($equipe->have_posts()) : $equipe->the_post(); ?>

    <div class="modal fade" id="modal<?= the_ID() ?>" tabindex="-1" aria-labelledby="modal<?= the_ID() ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl modal-cv">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center" id="modal<?= the_ID() ?>">Ficha Técnica Profissional</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5">
                    <div class="row">
                        <div class="col-12 col-lg-4 text-center">
                            <p class="p-1"><?php echo get_the_post_thumbnail(get_the_ID(), 'large'); ?></p>
                            <h3 class="modal__title pt-2 pb-0 mb-0 fs-3"><?php echo get_the_title(); ?></h3>
                            <h4 class="modal__subtitle fw-light fs-5 mb-3"><?= get_post_custom_values('funcao')[0] ?></h4>

                            <div class="d-flex text-center">
                                <div class="m-auto">
                                    <?php if (!empty(get_post_custom_values('instagram')[0])) { ?>
                                        <a href="<?= get_post_custom_values('instagram')[0] ?>" alt="Instagram" title="Instagram" target="_blank" class="mx-4">
                                            <i class="fab fa-instagram display-5 color-black"></i>
                                        </a>
                                    <?php } ?>

                                    <?php if (isset(get_post_custom_values('portfolio')[0])) { ?>
                                        <a href="<?= get_post_custom_values('portfolio')[0] ?>" title="Site / Portfólio" alt="Site / Portfólio" class="mt-3 mb-3" target="_blank">
                                            <i class="far fa-paper-plane display-6 color-black"></i>
                                        </a>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-8 p-3 pl-5 text-justify">
                            <?php echo the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endwhile; ?>