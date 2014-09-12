<?php
function add_stylesheet (){
    wp_enqueue_style('bootstrap_css',get_template_directory_uri().'/css/bootstrap.css');
    wp_enqueue_style('scrolling-nav_css',get_template_directory_uri().'/css/scrolling-nav.css');
    wp_enqueue_style('custom-style_css',get_template_directory_uri().'/css/custom-style.css');
}
add_action('wp_enqueue_scripts','add_stylesheet');

function theme_js() {

    global $wp_scripts;

    wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
    wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

    $wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
    $wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );
//this is the important part the rest is for buzz killington IE9
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/jquery.easing.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/jquery-1.10.2.js', array('jquery'), '', true );
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/scrolling-nav.js', array('jquery'), '', true );
    wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery','bootstrap_js'), '', true );

}
add_action( 'wp_enqueue_scripts', 'theme_js' );

add_theme_support('menus');
function add_nav_menus(){
    register_nav_menus(
        array(
            'header_menu'=> _('Header Menu'),
            'alt_menu'=> _('Alt Menu')
        )
    );
}
add_action('init','add_nav_menus');
add_action('widgets_init','create_widget');
function create_widget (){
    function create_widget_func ($name,$id,$description){
        register_sidebar(array(
            'name' => __( $name ),
            'id' => $id,
            'description' => __( $description ),
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));

//    register_sidebar(array(
//        'name'=>'column',
//        'id'=>'col-page',
//        'description'=>'Top blurb in the intro section',
//        'before_widget'=>'<div class="widget"> ',
//        'after_widget'=> '</div>',
//        'before_title'=> '<h3 class="widget1">',
//        'after_title'=> '</h3>'
//    ));
    }
    create_widget_func('Intro section','intro-section','Displays the intro section');
    create_widget_func('column','col-page','Displays the Column section');
    create_widget_func('Blog','blog','Displays the blog section');
}

add_theme_support( 'post-thumbnails' );


// add to init hook

add_action('init','image_post_types');
add_shortcode('imagecustompost','image_cpt_shortcode');
// add these custom post types
function image_post_types(){


// register aotw post types
    register_post_type('image_post_type',
        array('labels' => array(
            'name' => 'Image Post Type',
            'menu_name' => 'Image Posts'),
            'singular_label' => 'Image Post Type',
            'public' => true,
            'show_ui' =>true,
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'show_in_menu' => true,
            'supports'=>
                array('title','thumbnail')
        )
    );
}
function image_cpt_shortcode($attr){


    if($attr['page']<=10){
        $per_page['page'] = $attr['page'];
    }else{
        $per_page['page'] = 10;
    }


    $output =  '<h2 class="winner-title">Hall of Winners</h2><h3 class="winner-subtitle">Congratulations to all of our winners</h3>';
    $args = array( 'post_type' => 'image_post_type', 'posts_per_page' => $per_page['page'] );
    $loop = new WP_query( $args );

    if ( $loop->have_posts() ) :

        while ( $loop->have_posts() ) : $loop->the_post();

            $output.='<div class="winner-div"><h3>';
            $output.= get_the_title();
            $output.= '</h3>';
            if ( has_post_thumbnail() ) {
                // check if the post has a post thumbnail assigned to it.
                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($loop->ID), 'full' );
                $url = $thumb['0'];
                $output.= '<img src="'.$url.'"/>';
            }

            $output.= '</div>';
        endwhile;


    else :
        // if no content, include the "no posts found" template.
        get_template_part( 'content', 'none' );

    endif;


    return $output;
}
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');
?>