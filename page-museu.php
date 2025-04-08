<?php
/* Template Name: Museu
*/ 
?>
<?php echo get_header(); ?>

<section id="page-about" class="container-fluid page-content">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="title-section"><?php echo get_the_title(); ?></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>
                    <?php echo the_content(); ?>
                </p>
            </div>
        </div>
    </div>

    <?php echo get_template_part('template_parts/equipe');?>
</section>

<?php echo get_footer(); ?>