<?php
/**
* Class custom post type and taxonomy
*/
class Fx_Post
{
    /**
     * Holds arrays
     * @since 2.0
     * @var array
     */
    var $post_type = array( 
            'slider'=>'Slider',
            'feature' => 'Feature',
            'project'=>'Project',
            'news'=>'News',
            'news_teamplates'=>'News Teamplate',
            'blogs_tail' =>'Blogs tail',
            'donor'=>'Donors',
            'page_services'=>'Page Services'
        );
	var $taxonomy  = array();
	function __construct()
	{
		add_action('init',array($this, 'fx_create_post_type'));
	}

    // Post Type 
    function fx_create_post_type(){
        foreach ($this->post_type as $key => $type) {
            $labels = array(
                'name'                => __( $type.'s', 'flex-theme' ),
                'singular_name'       => __( $type, 'flex-theme' ),
                'menu_name'           => __( $type.'s', 'flex-theme' ),
                'name_admin_bar'      => __( $type,  'flex-theme' ),
                'add_new'             => __( 'Add New', 'flex-theme' ),
                'add_new_item'        => __( 'Add New '.$type, 'flex-theme' ),
                'new_item'            => __( 'New '.$type, 'flex-theme' ),
                'edit_item'           => __( 'Edit '.$type, 'flex-theme' ),
                'view_item'           => __( 'View '.$type, 'flex-theme' ),
                'all_items'           => __( 'All '.$type.'s', 'flex-theme' ),
                'not_found'           => __( 'No '.$type.'s Found.', 'flex-theme' ),
                'not_found_in_trash'  => __( 'No '.$type.' found in Trash.', 'flex-theme' ),
            );
            $args = array(
                'labels'             => $labels,
                'public'             => true,
                'publicly_queryable' => true,
                'show_ui'            => true,
                'show_in_menu'       => true,
                'query_var'          => true,
                'rewrite'            => array('slug' => $key),
                'has_archive'        => false,
                'hierarchical'       => false,
                'menu_position'      => null,
                'supports'           => array( 'title','editor','thumbnail','page-attributes',),
            );
            register_post_type( $key, $args );
        }
    }

	function fx_add_taxonomy_news() {
		$labels = array(
			'name' => 'News Category',
			'singular' => 'News Category',
			'menu_name' => 'News Category'
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
		);
		register_taxonomy('news-cat', 'news', $args);
	}
    
}

global $fx_post;
$fx_post = new Fx_Post();