<?php



//print_r(get_stylesheet_uri());

function assign_theme_script(){
//    wp_enqueue_style('/stylesheet',get_template_directory_uri().'/style.css');
    wp_enqueue_style('stylesheet',get_stylesheet_uri(),[],filemtime(get_template_directory().'/style.css'),'all');
    wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/assets/css/bootstrap.min.css',[],false,'all');
    wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/assets/js/bootstrap.min.js',['jquery'],false,true);

}
add_action('wp_enqueue_scripts','assign_theme_script')

?>