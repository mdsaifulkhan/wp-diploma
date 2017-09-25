<?php

    require 'inc/theme-files.php';

    add_theme_support('post-thumbnails');

    // for menu

    function class5_menu_support(){
        
        register_nav_menus( array(
            
            'primary' => 'Primary Menu',
            'footer_menu' => 'Footer Menu'
        
        ) );
    }

    add_action('init', 'class5_menu_support');

    add_image_size('post-image', 500, 150, true);

    function custom_excerpt_length($length){
        $length = 20;
        return $length;
    }
    add_filter('excerpt_length', 'custom_excerpt_length', 999);

    function my_title($title){
        
        $title = 'NEW: ' .  $title;
        return $title;
        
    }

    add_filter('the_title', 'my_title');
  
    