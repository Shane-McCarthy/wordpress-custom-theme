<?php
/**
 * Template Name: Full Width
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();
?>
    <div class="container extra">
        <div class="row two-col-custom">
            <div class="col-md-12">


                    <div class="page-title">
                        <h1><?php wp_title('');  ?>
                        </h1>
                    </div>
                    <?php $args = array(
                        'post_type'=> 'post',
                        'category_name' => 'featured'
                    );
                    $the_query = new WP_Query($args);
                    ?>
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                    <?php if ( have_posts() ) : while ($the_query-> have_posts() ) : $the_query->the_post(); ?>
                            <li data-target="#carousel-example-generic"data-slide-to="<?php echo $the_query->current_post; ?>" class="<?php if( $the_query->current_post == 0 ):?>active<?php endif; ?>"></li>

                    <?php endwhile; endif; ?>

                        </ol>
<?php rewind_posts();  ?>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
        <?php if ( have_posts() ) : while ($the_query-> have_posts() ) : $the_query->the_post(); ?>
                            <div class="item <?php if($the_query->current_post == 0 ){
                                echo 'active';
                            }  ?>">
                                <?php
                                $thumbnail = get_post_thumbnail_id();
                                $thumbnail_url = wp_get_attachment_image_src($thumbnail,'thumbnail-size',true);
                                $thumbnail_meta = get_post_meta($thumbnail,'_wp_attachment_image_alt',true);
                                echo '<img src="'.$thumbnail_url[0].'" alt="';
                                echo $thumbnail_meta;
                                echo '">';
                                ?>
                                <div class="carousel-caption">
                                   <?php the_title();  ?>
                                </div>
                            </div>

        <?php endwhile;  endif;  ?>

                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
        <?php if(have_posts()): while(have_posts()): the_post();
            ?>
                    <?php
                    the_content();
                endwhile; endif;
                ?>
            </div>

        </div>
    </div>

<?php get_footer(); ?>