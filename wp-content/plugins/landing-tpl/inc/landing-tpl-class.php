<?php
/**
* 
*/
class LandingClass
{
	var $prefix = 'ltp_';
    var $postTypes = array("landing-page");
    var $LptFields = array();

	public function __construct() {
        add_action('admin_enqueue_scripts',array($this, 'admin_add_scripts'));
        add_action('wp_enqueue_scripts',array($this, 'site_add_scripts'));
        add_action('init',array($this,'createTypeLanding') );

        add_filter( 'post_type_link', array($this,'landing_page_remove_slug'), 10, 3 );
		add_filter( 'post_link', array($this,'landing_page_remove_slug'), 10, 3 );
        add_action( 'pre_get_posts', array($this,'landing_page_update_slug')  );

		add_filter('single_template', array($this,'landing_page_template'));
        add_action('init',array($this, 'pl_add_taxonomy_landingpage'));
    }
	
    public function init()
    {
    	add_action('admin_menu', array($this, 'createLptFields') );
        add_action('save_post', array( $this, 'saveLptFields' ), 1, 2 );
        add_action('do_meta_boxes',array( $this, 'removeDefaultLptFields'), 10, 3 );
    }

    public function admin_add_scripts() {
        wp_enqueue_style('admin-css-lp',PLURL.'css/style-admin-landing.css' );
        wp_enqueue_script('admin-js-lp',PLURL .'js/js-admin-landing.js',array(),plVer,true);
    }

    public function site_add_scripts() {
        wp_enqueue_style('lp-bst',PLURL.'css/bootstrap.min.css' );
        wp_enqueue_style('css-lp',PLURL.'css/style-landing.css' );
        wp_enqueue_script('js-lp',PLURL .'js/js-landing.js',array(),plVer,true);
    }

    /**
    * Create the new Post type landing page
    */
    public function createTypeLanding() {
	    $labels = array(
	        'name'                => __( 'Landing Pages', 'landing-tpl' ),
	        'singular_name'       => __( 'Landing Page', 'landing-tpl' ),
	        'menu_name'           => __( 'Landing Pages', 'landing-tpl' ),
	        'name_admin_bar'      => __( 'Landing Page',  'landing-tpl' ),
	        'add_new'             => __( 'Add New', 'landing-tpl' ),
	        'add_new_item'        => __( 'Add New Landing Page', 'landing-tpl' ),
	        'new_item'            => __( 'New Landing Page', 'landing-tpl' ),
	        'edit_item'           => __( 'Edit Landing Page', 'landing-tpl' ),
	        'view_item'           => __( 'View Landing Page', 'landing-tpl' ),
	        'all_items'           => __( 'All Landing Pages', 'landing-tpl' ),
	        'not_found'           => __( 'No Landing Pages Found.', 'landing-tpl' ),
	        'not_found_in_trash'  => __( 'No landing page found in Trash.', 'landing-tpl' ),
	    );
	 
	    $args = array(
	        'labels'             => $labels,
	        'public'             => true,
	        'publicly_queryable' => true,
	        'show_ui'            => true,
	        'show_in_menu'       => true,
	        'query_var'          => true,
	        'rewrite'            => array('slug'  => 'landing-page',
									    'with_front' => false,
									    'pages'      => true,
									    'feeds'      => true,),            
	        'has_archive'        => false,
            '_builtin' => false,
	        'hierarchical'       => false,
	        'menu_position'      => null,
	        'supports'           => array( 'title','custom-fields','thumbnail'),
	    );
	    register_post_type( 'landing-page', $args );
	}

    public function pl_add_taxonomy_landingpage()
    {
        $labels = array(
            'name' => 'Categories',
            'singular' => 'Category',
            'menu_name' => 'Categories'
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
        register_taxonomy('lp-cat', 'landing-page', $args);
    }

    public function landing_page_remove_slug( $post_link, $post, $leavename ) {
         $whitelist = array ('landing-page');
	    if (!in_array( $post->post_type, $whitelist ) || 'publish' != $post->post_status )
	        return $post_link;
	    if( isset($GLOBALS['wp_post_types'][$post->post_type],
	             $GLOBALS['wp_post_types'][$post->post_type]->rewrite['slug'])){
	        $slug = $GLOBALS['wp_post_types'][$post->post_type]->rewrite['slug'];
	    } else {
	        $slug = $post->post_type;
	    }
	    $post_link = str_replace( '/' . $slug  . '/', '/', $post_link );
	    return $post_link;
    }
    
    public function landing_page_update_slug( $query ) {
        if ( ! $query->is_main_query() )
            return;
        if ( 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
            return;
        }
        if ( ! empty( $query->query['name'] ) ) {
            $query->set( 'post_type', array( 'post', 'page','landing-page') );
        }
    }
	
	/**
    * Custom templete for Landing Page
    */
	public function landing_page_template($single) {
		global $wp_query, $post;
		if ($post->post_type == "landing-page"){
			return PlDir . '/templates/single-landing-page.php';   
		}
		return $single;
	}
    

	/**
    * Create the new Custom Fields meta box
    */
    public function createLptFields() {
        if ( function_exists('add_meta_box')){
            foreach ( $this->postTypes as $postType ) {
                add_meta_box( 'landing-page-fields', 
		                    'Landing Page Fields', 
		                    array( &$this, 'displayLptFields' ), 
		                    $postType, 'normal', 'high' 
                );
            }
        }
    }

    /**
    * Display the new Custom Fields meta box
    */
    public function displayLptFields() {
        global $post;
        $data_form = '<div class="lpt-form-wrap form-wrap">';
        wp_nonce_field( 'landing-page-fields', 'landing-page-fields_wpnonce', false, true );
            foreach ( $this->LptFields as $customField ) {
                // Check scope
                $Flname = $this->prefix .''.$customField[ 'name' ];
                $Fltitle = $customField[ 'title' ];
                $Fldata = get_post_meta( $post->ID,$Flname, true );
                $scope = $customField[ 'scope' ];
                $output = false;
                foreach ( $scope as $scopeItem ) {
                    switch ( $scopeItem ) {
                        default: {
                            if ( $post->post_type == $scopeItem )
                                $output = true;
                            break;
                        }
                    }
                    if ( $output ) break;
                }
                // Check capability
                if ( !current_user_can( $customField['capability'], $post->ID ) ){
                    $output = false;
                }
                    
                // Output if allowed
                if ( $output ) { 
                    $data_form .= '<div class="lpt-form-field form-field">';
                        switch ( $customField[ 'type' ] ) {
                            case "gallery": { 
                                $data_form .= '<label for="' . $Flname .'"><b>' . $Fltitle . '</b></label><div class="field_wrap_galery">';
                                
                                if ( isset($Fldata) && !empty($Fldata) ) 
                                {
                                    foreach ($Fldata as $key => $value) {
                                    $data_form .= '
					                    <div class="field_row_gallery clear">
										    <div class="field_left">
										        <div class="form_field">
										            <label><b>Image URL</b></label>
										            <input type="text" class="meta_image_url" name="'.$Flname.'[image_url][]"
										                value="'.$value['image_url'].'" />
										        </div>
										        <div class="form_field">
										            <label><b>Description</b></label>
										            <input type="text" class="meta_image_desc" name="'.$Flname.'[image_desc][]"
										                value="'.$value['image_desc'].'"/>
										        </div>
										    </div>
										    <div class="field_right image_wrap">
										        <img src="'.$value['image_url'].'" height="100" width="100" />
										    </div>
										    <div class="field_right tplaction">
										        <a class="button button-primary" onclick="ld_add_image(this)">Choose File</a><br />
					                            <a class="button remove" onclick="ld_remove_field(this)">Remove</a>
										    </div>
										</div>';
                                    } 
                                }else{

                                } 
                                $data_form .='</div>
                                <div class="master_field_galery" style="display: none;">
                                    <div class="field_row_gallery clear">
                                        <div class="field_left">
                                            <div class="form_field">
                                                <label><b>Image URL</b></label>
                                                <input class="meta_image_url" value="" type="text" name="'.$Flname.'[image_url][]" />
                                            </div>
                                            <div class="form_field">
                                                <label><b>Description</b></label>
                                                <input value="" type="text" name="'.$Flname.'[image_desc][]" />
                                            </div>
                                        </div>
                                        <div class="field_right image_wrap"></div> 
                                        <div class="field_right tplaction"> 
                                            <a class="button button-primary" onclick="ld_add_image(this)">Choose File</a><br />
                                            <a class="button remove" onclick="ld_remove_field(this)">Remove</a>
                                        </div>
                                    </div>
                                  </div>
                                  <div id="add_field_row" class="clear">
                                    <a class="button ld_add_field">Add Feature images</a>
                                  </div>';
                                break;
                            }
                            case "textarea":{
                                $data_form .= '<label for="' . $Flname .'"><b>' . $Fltitle . '</b></label>';
                                $data_form .= '<textarea name="' . $Flname. '" id="' . $Flname . '" columns="30" rows="10">' . htmlspecialchars($Fldata) . '</textarea>';
                                break;
                            }
                            default: {
                                $data_form .= '<label for="' . $Flname .'"><b>' . $Fltitle . '</b></label>';
                                $data_form .= '<input type="text" name="'.$Flname.'" id="'.$Flname.'" value="'.htmlspecialchars($Fldata).'" />';
                                break;
                            }
                        }
                    $data_form .= '</div>';
                }
            } 
        $data_form .= '</div>';
        print $data_form;
    }
   
    /**
    * Remove the default Custom Fields meta box
    */
    public function removeDefaultLptFields( $type, $context, $post ) {
        foreach ( array( 'normal', 'advanced', 'side' ) as $context ) {
            foreach ( $this->postTypes as $postType ) {
                remove_meta_box( 'postcustom', $postType, $context );
            }
        }
    }

    /**
    * Save the new Custom Fields values
    */
    public function saveLptFields( $post_id, $post ) {
        if ( !isset( $_POST[ 'landing-page-fields_wpnonce' ] ) || !wp_verify_nonce( $_POST[ 'landing-page-fields_wpnonce' ], 'landing-page-fields' ) )
            return;
        if ( !current_user_can( 'edit_post', $post_id ) )
            return;
        if ( ! in_array( $post->post_type, $this->postTypes ) )
            return;
        foreach ( $this->LptFields as $LptField ) {
        	$Flname = $this->prefix .''.$LptField[ 'name' ];
            if ( current_user_can( $LptField['capability'], $post_id ) ) {
            	
                if ( isset( $_POST[$Flname] )) {
                	if ($LptField['type'] != 'gallery') {
                		$value = trim( $_POST[$Flname] );
	                    // Auto-paragraphs for any WYSIWYG
	                    if ( $LptField['type'] == "wysiwyg" ){
	                    	$value = wpautop($value);
	                    }
                	}
                    // Save Gallery 
                    if ($LptField['type'] == 'gallery'){
                    	$gallery_data = array();
				        for ($i = 0; $i < count($_POST[$Flname]['image_url']); $i++ ){
				            if ( '' != $_POST[$Flname]['image_url'][$i]) 
				            {
				                $gallery_data[$i]['image_url']  = $_POST[$Flname]['image_url'][ $i ];
				                $gallery_data[$i]['image_desc'] = $_POST[$Flname]['image_desc'][ $i ];
				            }
				        }
				        $value = $gallery_data;
                    }
                    update_post_meta( $post_id, $Flname,$value);
                } else {
                    delete_post_meta( $post_id, $Flname);
                }
            }
        }
    }

    
}