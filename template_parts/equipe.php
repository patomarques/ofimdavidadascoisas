<?php
    $args = array(
        'post_type' => 'equipe',
        'post_status' => 'publish',
        'numberposts' => -1,
        'order'    => 'ASC'
    );
    $equipe = new WP_Query($args);
?>

<div class="row mb-4">
    <div class="col-12 text-center">
        <h2 class="title-section ">Equipe</h2>
    </div>
</div>
<div class="row">
    <div class="slick-js">

        <?php while ($equipe->have_posts()) : $equipe->the_post(); ?>

            <?php $thumbTeamUrl = get_the_post_thumbnail_url($equipe->the_ID(), 'post-thumbnail');
            if (empty($thumbTeamUrl)) {
                $thumbTeamUrl = get_site_url() . '/wp-content/uploads/2024/11/icon-image-not-found-free-vector-3775104631.jpg';
            }
            ?>
            <div class="equipe__card">
                <div class="equipe__content">
                    <div class="equipe__content__image">
                        <img src="<?= $thumbTeamUrl; ?>" alt="<?php the_title(); ?>" class="img-fluid rounded">
                    </div>
                    <div class="equipe__content__text text-center mt-3">
                        <div class="equipe__content__name"><?php echo get_the_title(); ?></div>
                        <div class="equipe__content__desc mb-4"><?php echo the_content(); ?></div>
                    </div>
                </div>

                <div class="d-flex text-center">
                    <div class="m-auto">
                        <a href="<?= get_post_custom_values('instagram')[0] ?>" alt="Instagram" title="Instagram" target="_blank" class="m-3 mt-0">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>

                        <?php if(isset(get_post_custom_values('portfolio')[0])){ ?>
                        <a href="<?= get_post_custom_values('portfolio')[0] ?>" title="Site / Portfólio" alt="Site / Portfólio" class="m-3 mt-0" target="_blank" >
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
