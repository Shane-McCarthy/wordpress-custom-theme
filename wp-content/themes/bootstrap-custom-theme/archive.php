<?php get_header(); ?>

<div class="container blog">
    <div class="row">

        <div class="col-md-9">
            <h1><?php the_title(); ?></h1>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="page-header">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php
                    $thumbnail = get_post_thumbnail_id();
                    $thumbnail_url = wp_get_attachment_image_src($thumbnail,'thumbnail-size',true);
                    echo '<img src="'.$thumbnail_url[0].'" alt="';
                    the_title();
                    echo '">';
                    ?>
                </div>

                <?php the_excerpt(); ?>

            <?php endwhile; else: ?>

                <div class="page-header">
                    <h1>Oh no!</h1>
                </div>

                <p>No content is appearing for this page!</p>

            <?php endif; ?>


        </div>

        <?php get_sidebar('blog'); ?>

    </div>

<?php get_footer(); ?>