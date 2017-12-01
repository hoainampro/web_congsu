<?php
/*
  Plugin Name: Landing Page Template
  Plugin URI: #
  Description: Landing Page Template 
  Author: LenamSoft
  Author URI: #
  Version: 2.0
*/

define("PLURL", plugins_url( '/landing-tpl/',dirname(__FILE__)));
define("plVer", '2.0');
define("PlDir", plugin_dir_path( __FILE__ ));
include 'inc/landing-tpl-class.php';
include 'inc/landing-tpl-function.php';
include 'inc/wp-permastructure.php';

$postTypes = array("landing-page");
$prefix = 'ltp_';
$myFields = array(
    array(
        'name'          => 'headline',
        'title'         => 'Headline',
        'description'   => '',
        'type'          => 'text',
        'scope'         => $postTypes,
        'capability'    => 'edit_posts'
    ),
    array(
        'name'          => 'sub-headline',
        'title'         => 'Sub Headline',
        'description'   => '',
        'type'          => 'text',
        'scope'         => $postTypes,
        'capability'    => 'edit_posts'
    ),
    array(
        'name'          => 'gallery_data',
        'title'         => 'Feature images',
        'description'   => '',
        'type'          => 'gallery',
        'scope'         => $postTypes,
        'capability'    => 'edit_posts'
    ),  
    array(
        'name'          => 'content-section',
        'title'         => 'Content section',
        'description'   => '',
        'type'          => 'textarea',
        'scope'         =>  $postTypes,
        'capability'    => 'edit_posts'
    ),
    array(
        'name'          => 'form-short-code',
        'title'         => 'Formidable short code',
        'description'   => '',
        'type'          => 'text',
        'scope'         => $postTypes,
        'capability'    => 'edit_posts'
    ),
    array(
        'name'          => 'google-map',
        'title'         => 'Google Map Code',
        'description'   => '',
        'type'          => 'textarea',
        'scope'         => $postTypes,
        'capability'    => 'edit_posts'
    ),
);

if ( class_exists('LandingClass') ) {
    $ldtpl = new LandingClass();
    $ldtpl->LptFields = $myFields;
    $ldtpl->postTypes = $postTypes;
    $ldtpl->prefix = $prefix;
    $ldtpl->init();
}