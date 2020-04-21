<?php

$template_uri = get_template_directory_uri();

function r3_theme_scripts(){
    // CSS
    wp_enqueue_style('r3_style_css', get_stylesheet_directory_uri() . '/style.css');

    // JAVASCRIT
    wp_enqueue_script('r3_jquery_js', $template_uri . '/assets/js/lib/jquery-3.5.0.min.js');
    wp_enqueue_script('r3_main_js', $template_uri . '/assets/js/main.js');
    wp_enqueue_script('r3_lib_js', $template_uri . '/assets/js/lib/plugins.js');
}


function r3_widgets(){
    register_sidebar( 
        array(
            'name' => 'Sidebar Lateral',
            'id' => 'r3_sidebar',
            'description' => 'Painel Sidebar Lateral',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget_title">',
            'after_title' => '</h4>'
        ));

        // register_sidebar( 
        //     array(
        //         'name' => 'Sidebar Footer',
        //         'id' => 'r3_sidebarfooter',
        //         'description' => 'Sidebar Footer',
        //         'before_widget' => '<div id="%1$s" class="widget %2$s">',
        //         'after_widget' => '</div>',
        //         'before_title' => '<h4 class="widget_title">',
        //         'after_title' => '</h4>',
        // ));
}


function r3_after_setup(){
    register_nav_menu("menu-main", "Menu Principal");

    add_theme_support( "post-thumbnails");

    register_sidebar(array(
        'name'          => __( 'Primary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    // LOGO
        $defaults = array(
        'height'      => 70,
        'width'       => 5,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
        );
        add_theme_support("custom-logo");
    // end LOGO

    $taxonomy = 'crossfit';
    $args = array(
        'orderby'           => 'name', 
        'order'             => 'ASC',
        'hide_empty'        => true, 
        'exclude'           => array(), 
        'exclude_tree'      => array(), 
        'include'           => array(),
        'number'            => '', 
        'fields'            => 'all', 
        'slug'              => 'crossfit',
        'parent'            => '',
        'hierarchical'      => true, 
        'child_of'          => 0,
        'childless'         => false,
        'get'               => '', 
        'name__like'        => '',
        'description__like' => '',
        'pad_counts'        => false, 
        'offset'            => '', 
        'search'            => '', 
        'cache_domain'      => 'core',
    );
    $terms = get_terms($taxonomy, $args);

}

function wpsites_image_nav_links(){
    if( !is_single('single') ) 
      return;

    if( $prev_post = get_previous_post() ): 
        echo'<span class="single-post-nav previous-post-link">';
        $prevpost = get_the_post_thumbnail( $prev_post->ID, 'medium', array('class' => 'pagination-previous')); 
        previous_post_link( '%link',"$prevpost  <p>Previous Post in Category</p>", TRUE ); 
        echo'</span>';
    endif; 

    if( $next_post = get_next_post() ): 
        echo'<span class="single-post-nav next-post-link">';
        $nextpost = get_the_post_thumbnail( $next_post->ID, 'medium', array('class' => 'pagination-next')); 
        next_post_link( '%link',"$nextpost  <p>Next Post in Category</p>", TRUE ); 
        echo'</span>';
    endif; 
}