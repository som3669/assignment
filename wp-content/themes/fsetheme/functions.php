<?php



//print_r(get_stylesheet_uri());
//constant define
define('FSE_CSS_URI',untrailingslashit( get_template_directory_uri() ) . '/assets/css' );
define( 'FSE_CSS_URIPATH', untrailingslashit( get_template_directory() ) . '/assets/css' );



function fse_setup_theme(){
//    add featured image on the post and pages
    add_theme_support('post-thumbnails');
//    add deafult posts and comments to head
    add_theme_support('autpmatic-feed-links');
//    table,quotes, separator for margin, padding,boarder
    add_theme_support('wp-block-styles');
//    image block wide or full alignment
    add_theme_support('align-wide');
//    editor styles in gutebverg
    add_theme_support('editor-styles');
//    add editor style
    add_editor_style([
        'assets/css/editor.css',
        'assets/css/main.css',
    ]);
}
add_action('after_setup_theme','fse_setup_theme');





function assign_theme_script(){
//    wp_enqueue_style('/stylesheet',get_template_directory_uri().'/style.css');
    wp_enqueue_style('/stylesheet',get_stylesheet_uri(),[],filemtime(get_template_directory().'/style.css'),'all');

}
add_action('wp_enqueue_scripts','assign_theme_script')

?>