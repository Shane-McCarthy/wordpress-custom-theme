<?php
/**
 * Template Name: Two Column
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();
?>
<div class="container extra">
    <div class="row two-col-custom">
        <div class="col-md-9">

<?php if(have_posts()): while(have_posts()): the_post();
    ?>
    <div class="page-title">
    <h1><?php the_title();  ?>
    </h1>
    </div>
    <?php
    the_content();
endwhile; endif;
?>
</div>
        <?php get_sidebar(); ?>
</div>
</div>

<?php get_footer(); ?>