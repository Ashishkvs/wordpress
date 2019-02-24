<?php 

//custom post type  args  'post_type' ie. 'event' & array
function university_post_type(){
    register_post_type('event',array(
        'supports'=>array('title','editor','excerpt'),
        'rewrite' => array( 'slug' => 'events'),
        'has_archive' =>true,
        'public'=>true,
        'menu_icon' =>'dashicons-calendar',
        'labels'=>array(
            'name'=>'Events', //name of post type in dashboard
            'add_new_item'=> 'Add New Events',
            'edit_item' => 'Ediy Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
            )
    ));
}

add_action('init','university_post_type');
//don't forget 
//dashboard > settings > permalinks > save changes
?>