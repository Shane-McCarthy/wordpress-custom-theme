<?php
/**
 * Template Name: Image Custom Post
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();

//Protect against arbitrary paged values
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

?>
<div class="container">
    <div class="row">
    <div id="main-content" class="main-content">



        <div id="primary" class="content-area">

            <div id="content" class="site-content" role="main">
                <div class="col-md-9">
                <div id="left-content">
                    <h1><?php the_title(); ?></h1>
                    <?php  the_content(); ?>
                    <h2 class="winner-title">Best Images</h2>
                    <h3 class="winner-subtitle">Hand Selected Images</h3>
                    <?php
                    $args = array( 'post_type' => 'image_post_type', 'posts_per_page' => 3,'paged' => $paged );
                    $loop = new WP_Query( $args );
                    if ( $loop->have_posts() ) :

                    while ( $loop->have_posts() ) : $loop->the_post();
                    ?>
                    <div class="winner-div">
                        <h3><?php the_title(); ?></h3>
                        <?php
                        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.

                            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
                            $url = $thumb['0'];
                            echo '<div class="blog"><img src="'.$url.'"/></div>';

//                        the_post_thumbnail('full');


                        }else{
                            echo 'Balls';
                        }

                        echo '</div>';
                        endwhile;


                        else :
                            // If no content, include the "No posts found" template.
                            get_template_part( 'content', 'none' );

                        endif;
                        echo '<div class="aotw-nation">';
                        $big = 999999999; // need an unlikely integer

                        echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format' => '?paged=%#%',
                            'current' => max( 1, get_query_var('paged') ),
                            'total' => $loop->max_num_pages
                        ) );
                        ?>
                    </div>
                </div>
                </div>
                <div>
                    <?php	if(get_sidebar()){
                        get_sidebar();
                    }else{
                        get_sidebar('right');
                    }
                    ;?>

                </div><!-- #content -->
            </div><!--left-content-->
        </div><!-- #primary -->

    </div><!-- #main-content -->
</div>
</div>
<?php

get_footer();
