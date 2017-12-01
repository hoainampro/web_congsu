<?php

/**
* Class Flex main site
*/
class Fx_Base 
{
    
    function __construct()
    {
        add_action('init',array($this, 'fx_theme_support'));
        add_action('wp_enqueue_scripts',array($this, 'fx_theme_add_scripts'));
        add_action('widgets_init', array($this, 'fx_theme_witget_init'));
        add_action('tgmpa_register', array($this, 'fx_tgmpa_plugin_activation'));
    }

    /*
    * Theme Add css and js
    */
    public function fx_theme_add_scripts()
    {
        global $wp_scripts;
        wp_enqueue_script('jquery');
        /*Google Font*/
       // wp_enqueue_style('google-font','https://fonts.googleapis.com/css?family=Lato:300,400,700',array(),THEME_VER);

        /* Bootstrap*/
        wp_enqueue_style('btmincss',THEME_URL_LIBS.'bootstrap/css/bootstrap.min.css',array(),'3.3.7');
        wp_enqueue_style('btthemecss',THEME_URL_LIBS.'bootstrap/css/bootstrap-theme.min.css', array(), '3.3.7');
        wp_enqueue_script('btminjs',THEME_URL_LIBS.'bootstrap/js/bootstrap.min.js',array(),'3.3.7',true);

        /*owl-carousel*/
        wp_enqueue_style('owl-css',THEME_URL_LIBS.'owl-carousel/owl.carousel.min.css',array(),'2.0'); 
        wp_enqueue_script('owl-js',THEME_URL_LIBS.'owl-carousel/owl.carousel.min.js', array(), '2.0', true); 
        /*flmenu*/
        wp_enqueue_style('flmenu-css',THEME_URL_LIBS.'flmenu/flmenu.min.css',array(),THEME_VER); 
        wp_enqueue_script('flmenu-js',THEME_URL_LIBS.'flmenu/flmenu.min.js', array(), THEME_VER, true);
        /*colorbox*/
        wp_enqueue_style('colorbox-css', THEME_URL_LIBS.'colorbox/colorbox.css',array(),'1.6.4'); 
        wp_enqueue_script('colorbox-js', THEME_URL_LIBS . 'colorbox/colorbox-min.js', array(), '1.6.4', true);
        /*js_ui*/
         wp_enqueue_style('js_ui-css', THEME_URL_LIBS.'js_ui/jquery-ui.css',array(),THEME_VER); 
         wp_enqueue_script('js_ui-js', THEME_URL_LIBS . 'js_ui/jquery-ui.js', array(),THEME_VER); 
        /*Font*/
        wp_enqueue_style('fontawesome', THEME_URL_LIBS.'font-awesome/css/font-awesome.min.css',array(),'4.7.0'); 

        /* Style Themes */
        //wp_enqueue_style('theme-style', THEME_URL.'/style.css');
        wp_enqueue_script('fl-script', THEME_URL_ASSETS.'js/main.js', array(),false,true);
        wp_enqueue_style('fl-css', THEME_URL_ASSETS.'css/main.css', array(),THEME_VER); 
        wp_enqueue_style('fl-cres', THEME_URL_ASSETS.'css/responsive.css', array(),THEME_VER); 
    }

    /*
    * Add theme support
    */
    public function fx_theme_support() 
    {
        load_theme_textdomain( 'flex-theme', get_template_directory() . '/languages' );
        // Adds title tag
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
        add_theme_support('automatic-feed-links' );
        add_theme_support('post-formats',array( 'video', 'audio' , 'gallery', 'link', 'quote',));
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'flex-theme'),
            'footer' => __('Footer Menu', 'flex-theme'),
        ));
        remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
        remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
        add_filter( 'wp_get_attachment_image_attributes', function( $attr ){
            if( isset( $attr['class'] )  && 'custom-logo' === $attr['class'] )
                $attr['class'] = 'custom-logo img-responsive';
            return $attr;
        });
        add_filter('widget_text', 'do_shortcode');
        add_filter( 'login_headerurl',function(){ return home_url(); });
        add_filter( 'login_headertitle',function(){ return get_bloginfo('name'); });
    }

    /*
    * Add witget
    */
    public function fx_theme_witget_init() 
    {
        register_sidebar(array(
            'name'          => __('Sidebar left', 'flex-theme'),
            'id'            => 'sidebar-left',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ));

        register_sidebar(array(
            'name'          => __('Sidebar right', 'flex-theme'),
            'id'            => 'sidebar-right',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ));
        
        register_sidebar(array(
            'name'          => __('Header', 'flex-theme'),
            'id'            => 'header',
            'before_widget' => '<div id="%1$s" class="block_header %2$s">',
            'after_widget'  => '</div>',
        ));
       
        register_sidebar(array(
            'name'          => __('Footer Top', 'flex-theme'),
            'id'            => 'footer-top',
            'before_widget' => '<aside id="%1$s" class="widget %2$s ">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ));
    }

    /**
     * minimize CSS styles
     */
    public static function compressCss($buffer){
        $buffer = preg_replace("!/\*[^*]*\*+([^/][^*]*\*+)*/!", "", $buffer);
        $buffer = str_replace(" ", " ", $buffer); 
        $arr = array("\r\n", "\r", "\n", "\t", "  ", "    ", "    ");
        $rep = array("", "", "", "", " ", " ", " ");
        $buffer = str_replace($arr, $rep, $buffer);
        $buffer = preg_replace("/\s*([\{\}:,])\s*/", "$1", $buffer);
        $buffer = str_replace(';}', "}", $buffer);
        return $buffer;
    }

    public static function fx_tgmpa_plugin_activation() {
        $plugins = array(
            array(
                'name' => 'Advanced Custom Fields',
                'slug' => 'advanced-custom-fields',
                'required' => true
            )
        );

        $configs = array(
                'menu' => 'tp_plugin_install',
                'has_notice' => true,
                'dismissable' => false,
                'is_automatic' => true
        );
        tgmpa( $plugins, $configs );
    }
}

global $fx_base;
$fx_base = new Fx_Base();