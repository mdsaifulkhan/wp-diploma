<?php 

    function wp_diploma_theme_files(){
        
//        wp_enqueue_style( string $handle, string $src = '', array $deps = array(), string|bool|null $ver = false, string $media = 'all' );
        
        wp_enqueue_style('diploma-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '3.3.7', 'all');
        
        wp_enqueue_script('jquery'); // for default js file
            
    }

    add_action('wp_enqueue_scripts', 'wp_diploma_theme_files');