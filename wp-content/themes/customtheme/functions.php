<?php



//print_r(get_stylesheet_uri());

function assign_theme_script(){
//    wp_enqueue_style('/stylesheet',get_template_directory_uri().'/style.css');
    wp_enqueue_style('/stylesheet',get_stylesheet_uri(),[],filemtime(get_template_directory().'/style.css'),'all');

}
add_action('wp_enqueue_scripts','assign_theme_script')

?>