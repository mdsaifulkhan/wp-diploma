<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Theme genius Wordpress Theme Development</title>
        
        
        
        <!-- CSS FILE -->
        
        
        
        <?php
            
            wp_head();
        
        ?>
        
    </head>
    <body>
        
        <?php if( has_nav_menu( 'primary' ) ) : ?>
        <nav class="navbar navbar-inverse">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'nav navbar-nav',
                        'menu_id' => 'nav'
                    
                    )
                )
            ?>
        </nav>
        
        <?php endif; ?>
        
        
        
        
        <?php
        
//        Just for understand
            
//            echo get_template_directory_uri(); // this is show file location with web url
//            echo '<hr>';
//            
//            var_dump(wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '3.3.7', 'all'));
//        
//            echo '<hr>';
//            
//            echo get_template_directory(); // this is show file location with driver url
        
        ?>