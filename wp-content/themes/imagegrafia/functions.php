<?php 
function imagegrafia_files(){
     wp_enqueue_script('imagegrafia-script',get_theme_file_uri('/js/scripts-bundled.js'),NULL,'1.0',true);
     wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

     wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('imagegrafia_main_styles',get_stylesheet_uri());
}
function universally_features(){
    register_nav_menu('headerMenuLocation','Header Menu Location'); // nav menu params are theme_location , themeName
    register_nav_menu('footerLocationOne','Footer Location One');
    register_nav_menu('footerLocationTwo','Footer Location Two');

    add_theme_support('title-tag');
}
add_action('wp_enqueue_scripts','imagegrafia_files');
add_action('after_setup_theme','universally_features');

//custom post type
function university_post_type(){
    register_post_type('event',array(
        'public'=>true,
        'menu_icon' =>'dashicons-calendar',
        'labels'=>array(
            'name'=>'Events'
        )
    ));
}

add_action('init','university_post_type');

?>