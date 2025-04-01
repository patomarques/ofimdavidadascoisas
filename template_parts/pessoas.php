<?php
$args = array(
    'post_type' => 'pessoas',
    'post_status' => 'publish',
    'numberposts' => -1,
    'order'    => 'ASC'
);
$pessoas = new WP_Query($args);
?>

<div class="container">
    <div class="row square-container">

        <?php while ($pessoas->have_posts()) : $pessoas->the_post(); ?>
            <?php $thumbTeamUrl = get_the_post_thumbnail_url($pessoas->the_ID(), 'post-thumbnail');
            if (empty($thumbTeamUrl)) {
                $thumbTeamUrl = get_site_url() . '/wp-content/uploads/2024/11/icon-image-not-found-free-vector-3775104631.jpg';
            }
            ?>

            <div class="col-12 col-sm-4 col-dm-3 col-lg-3 mb-5">
                <a href="<?php echo get_permalink(); ?>" class="content-people">
                    <div class="square">
                            <div class="content content-people__image" style="background-image: url(<?= $thumbTeamUrl; ?>);">
                            </div>
                    </div>
                    <div class="content-people__title text-center">
                        <h4 class="h4 mt-3"><?php echo get_the_title(); ?></h4>
                    </div>
                </a>
            </div>

        <?php endwhile; ?>

    </div>
</div>