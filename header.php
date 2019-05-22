<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

    <header>
        <div class="header-wrpapper">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="<?php echo get_home_url()?>">

                        <?php
                        $logo_img = '';
                        if( $custom_logo_id = get_theme_mod('custom_logo') ){
                            $logo_img = wp_get_attachment_image_url( $custom_logo_id, 'full', false);
                        } ?>

                        <img src="<?php echo $logo_img; ?>" class="img-fluid" alt="">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                    </button>


                    <?php if ( has_nav_menu( 'top' ) ) : ?>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <?php wp_nav_menu( array(
                                'theme_location' => 'top',
                                'container'       => '',
                                'container_class' => '',
                                'container_id'    => '',
                                'menu_class'      => 'menu main-menu ml-auto',
                                'menu_id'         => 'top',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'items_wrap'      => '<ul id="%1$s" class="%2$s navbar-nav d-flex justify-content-end align-items-center mb-2">%3$s</ul>',
                                'depth'           => 0,
                                'walker'          => ''
                            ) ); ?>

                        </div>

                    <?php endif; ?>

                </nav>
            </div>
        </div>
    </header>




