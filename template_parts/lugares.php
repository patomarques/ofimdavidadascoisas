<?php
$args = array(
    'post_type' => 'lugares',
    'post_status' => 'publish',
    'numberposts' => -1,
    'order'    => 'ASC'
);
$lugares = new WP_Query($args);
?>

<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h2 class="title-page display-1 pt-5 pb-5 mb-3">Lugares</h2>
        </div>
    </div>
</div>

<div class="container-full page-lugares">
    <?php echo get_template_part('template_parts/lugares-mapa'); ?>
</div>