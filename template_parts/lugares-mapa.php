<?php
$places = new WP_Query(
    array(
        'post_type' => 'lugares',
        'orderby' => 'publish',
        'order' => 'DESC',
    )
);
?>

<div class="container">
    <div class="row m-auto">
        <div class="col text-center">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/mapa-pe.png' ?>" class="img-responsive w100vw pt-5 pb-5">
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-12 col-md-4">
            <h2 class="title-section bold">Lugares</h2>
        </div>
        <div class="col-12 col-md-8 pt-2">
            <div class="pull-right">
                <?php while ($places->have_posts()):
                    $places->the_post(); ?>

                    <a href="<?php echo get_the_permalink(); ?>"
                        class="btn btn-default bold h1">
                        <?php echo get_the_title(); ?>
                    </a>

                <?php endwhile; ?>
            </div>

        </div>
    </div>

</div>