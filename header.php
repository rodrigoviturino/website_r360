<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/db192ad007.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
    <title>Site R360</title>
</head>
<body <?php body_class(); ?>>
    <header class="header">
        <section class="header__borderTop"></section>

        <nav class="header__wrapper">
            <div class="container">
           
            <!-- Logo -->
                <?php 
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    // echo $image[0];
                ?>
                <a href="<?php bloginfo('url'); ?>" class="header__wrapper-logo">
                    <img src="<?php echo $image[0]; ?>" alt="">
                </a>
            <!-- end Logo -->

                <?php 
                if(has_nav_menu('menu-main') ) {

                    wp_nav_menu( [
                        'theme_location' => 'menu-main',
                        'container' => false,
                        'menu_class' => 'header__wrapper-menu',
                        'fallback_cb' => false,
                        // 'walker' => new Odin_Bootstrap_Nav_Walker()
                    ]);
                }
                ?>

                <a href="#" class="header__wrapper-search">
                    <i class="fas fa-search"></i>
                </a>

                </div>

        </nav>

    </header>