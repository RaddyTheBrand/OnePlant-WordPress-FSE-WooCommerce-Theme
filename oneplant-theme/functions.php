<?php

/*-----------------------------------------------------------
Enqueue Styles
------------------------------------------------------------*/

if(!function_exists('oneplant_styles')) :

    function oneplant_styles() {
        wp_enqueue_style('oneplant-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    }
    
endif;

add_action('wp_enqueue_scripts', 'oneplant_styles');