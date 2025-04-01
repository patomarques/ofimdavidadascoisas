<?php
$args = array(
    'post_type' => 'objetos',
    'post_status' => 'publish',
    'numberposts' => -1,
    'order'    => 'ASC'
);
$objetos = new WP_Query($args);
$title = strtolower(get_the_title());
?>

<div class="container-full page-lugares">
    <div class="row">
        <div class="square-container">
            <?php while ($objetos->have_posts()) : $objetos->the_post(); ?>
                <?php $thumbTeamUrl = get_the_post_thumbnail_url($objetos->the_ID(), 'post-thumbnail');
                    if (empty($thumbTeamUrl)) {
                        $thumbTeamUrl = get_site_url() . '/wp-content/uploads/2024/11/icon-image-not-found-free-vector-3775104631.jpg';
                    }

                    $type = (!empty(get_post_custom_values('lugar')[0])) ? get_post_custom_values('pessoa')[0] : '';
                    $type = strtolower($type);
                ?>

                <div class="col-12 col-sm-4 col-md-3 col-lg-3 mb-3 <?= ($title != $type) ? 'd-none' : '' ?>">
                    <div class="card m-2">
                        <div class="square">
                            <div class="content" style="background: url(<?= $thumbTeamUrl; ?>)">
                            </div>
                        </div>
                        <div class="card__content pb-5">
                            <h4 class="card__title text-center mt-3"><?php echo get_the_title(); ?></h4>
                            <div class="m-auto d-flex">
                                <a href="<?= get_permalink() ?>" class="btn btn-secondary text-center m-auto">Ver mais</a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        </div>
    </div>
</div>