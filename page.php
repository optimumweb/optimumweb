<?php get_header(); ?>
<?php wpbp_content_before(); ?>
<section id="content">
    <?php /* Start loop */ ?>
    <?php wpbp_loop_before(); ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php wpbp_post_before(); ?>
        <?php wpbp_post_inside_before(); ?>
        <?php the_content(); ?>
        <?php wpbp_post_inside_after(); ?>
        <?php wpbp_post_after(); ?>
    <?php endwhile; // End the loop ?>
    <?php wpbp_loop_after(); ?>
</section>
<?php wpbp_content_after(); ?>
<?php get_footer(); ?>