<?php
$args = array(
    'post_type' => 'videos',
    'post_status' => 'publish',
    'numberposts' => -1,
    'order'    => 'ASC'
);
$videos = new WP_Query($args);
?>

<div class="container-full page-videos">
    <div class="row">
        <div class="square-container">
            <?php while ($videos->have_posts()) : $videos->the_post(); ?>
                <?php $thumbTeamUrl = get_the_post_thumbnail_url($videos->the_ID(), 'post-thumbnail');
                    if (empty($thumbTeamUrl)) {
                        $thumbTeamUrl = get_site_url() . '/wp-content/uploads/2024/11/icon-image-not-found-free-vector-3775104631.jpg';
                    }
                ?>

                <div class="col-12 col-sm-6 col-xl-6 mb-2">
                    <div class="card m-2">
                        <div class="card__content">
                            <h4 class="card__title text-center mt-3"><?php echo get_the_title(); ?></h4>
                            <p class="card__text"><?php echo the_content(); ?></p>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        </div>
    </div>
</div>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->
