<?php
function load_style(){
    wp_enqueue_style('stylesheet',get_template_directory_uri().'/style.css');
    wp_enqueue_style('custom',get_stylesheet_directory_uri().'/css/custom.css');
}
add_action('wp_enqueue_scripts','load_style');
?>