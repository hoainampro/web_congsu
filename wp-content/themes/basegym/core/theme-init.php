<?php 

/*
* Auto activation plugin
*/
if (!class_exists( 'TGM_Plugin_Activation' )){
	require_once THEME_CORE.'class-tgm-plugin-activation.php';
}

/*
* Base class theme 
* add css and js theme support menu and widgets
*/
if (!class_exists( 'Fx_Base' ) ){
	require_once THEME_CORE.'class-flex-base.php';
}

/**
* Class custom post type and taxonomy
*/
if (!class_exists( 'Fx_Post' ) ){
	require_once THEME_CORE.'class-custom-post.php';
}

/*
* Class theme option all field
* global $px_option 
*/
require_once( THEME_OPTIONS.'ReduxCore/framework.php');
require_once( THEME_OPTIONS.'class-flex-options.php');

/**
 * My walker nav menu extends wp walker nav menu
 */
if (!class_exists('Fx_Walker_Nav_Menu')) {
	require_once THEME_CORE.'menu/class-flex-walker-nav.php';
}

/*
* Add-on advanced custom fields
*/
if(!function_exists('acf_register_repeater_field') ){
	add_action('acf/register_fields', 'acf_register_repeater_field');
	function acf_register_repeater_field()
	{
		include_once(THEME_CORE.'acf-addon/acf-repeater/repeater.php');
		include_once(THEME_CORE.'acf-addon/acf-gallery/gallery.php');
		include_once(THEME_CORE.'acf-addon/acf-flexible-content/flexible-content.php');
	}
}

/* Add on custom on theme */
require_once THEME_ADDON.'flduplicate.php';
require_once THEME_ADDON.'postexpirator.php';

/** Template functions */
require_once THEME_CORE. 'template-functions.php';
require_once THEME_CORE. 'template-shortcode.php';
require_once THEME_CORE. 'template-add_script.php';
