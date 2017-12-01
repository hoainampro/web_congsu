<?php
/**
 * Template Functions
 * 
 * @package flex-theme
 */

function get_dynamic_sidebar($index = 1){
	$sidebar_contents = "";
	ob_start();
	dynamic_sidebar($index);
	$sidebar_contents = ob_get_clean();
	return $sidebar_contents;
}

if (!function_exists('flex_col')) {
	function flex_col($area = 'main'){
		if (get_dynamic_sidebar('sidebar-left') != '' && 
			get_dynamic_sidebar('sidebar-right') != '') {
            $main_col = 'col-md-6 col-sm-6 col-xs-12';
			$sidebar = 'col-md-3 col-sm-3 col-xs-12';
		}elseif(get_dynamic_sidebar('sidebar-left') != '' || 
			get_dynamic_sidebar('sidebar-right') != ''){
            $main_col = 'col-md-8 col-sm-8 col-xs-12';
			$sidebar = 'col-md-4 col-sm-4 col-xs-12';
		}else {
            $main_col = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';
            $sidebar = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';
		}
        if ($area == 'sidebar') {
            echo $sidebar;
        }else{
            echo $main_col;
        }	
    }
}


function flex_pagination() {
    global $wp_query;
    $big = 999999999;
    $pages = paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?page=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'prev_next' => false,
        'type' => 'array',
        'prev_next' => TRUE,
        'prev_text' => '&larr; Prev',
        'next_text' => 'Next &rarr;',
    ));
    
    if (is_array($pages)) {
        $current_page = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<ul class="pagination">';
        foreach ($pages as $i => $page) {
            if ($current_page == 1 && $i == 0) {
                echo "<li class='active'>$page</li>";
            } else {
                if (strpos( $page, 'current' ) !== false ) {
                    echo "<li class='active'>$page</li>";
                } else {
                    echo "<li>$page</li>";
                }
            }
        }
        echo '</ul>';
    }
}

function flex_archive_title() {
    if ( is_category() ) {
        $title = sprintf( __( '%s' ), single_cat_title( '', false ) );
    } elseif ( is_tag() ) {
        $title = sprintf( __( 'Tag: %s' ), single_tag_title( '', false ) );
    } elseif ( is_author() ) {
        $title = sprintf( __( 'Author: %s' ), '<span class="vcard">' . get_the_author() . '</span>' );
    } elseif ( is_year() ) {
        $title = sprintf( __( 'Year: %s' ), get_the_date( _x( 'Y', 'yearly archives date format' ) ) );
    } elseif ( is_month() ) {
        $title = sprintf( __( 'Month: %s' ), get_the_date( _x( 'F Y', 'monthly archives date format' ) ) );
    } elseif ( is_day() ) {
        $title = sprintf( __( 'Day: %s' ), get_the_date( _x( 'F j, Y', 'daily archives date format' ) ) );
    } elseif ( is_tax( 'post_format' ) ) {
        if ( is_tax( 'post_format', 'post-format-aside' ) ) {
            $title = _x( 'Asides', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) {
            $title = _x( 'Galleries', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-image' ) ) {
            $title = _x( 'Images', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-video' ) ) {
            $title = _x( 'Videos', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-quote' ) ) {
            $title = _x( 'Quotes', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-link' ) ) {
            $title = _x( 'Links', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-status' ) ) {
            $title = _x( 'Statuses', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-audio' ) ) {
            $title = _x( 'Audio', 'post format archive title' );
        } elseif ( is_tax( 'post_format', 'post-format-chat' ) ) {
            $title = _x( 'Chats', 'post format archive title' );
        }
    } elseif ( is_post_type_archive() ) {
        $title = sprintf( __( 'Archives: %s' ), post_type_archive_title( '', false ) );
    } elseif ( is_tax() ) {
        $tax = get_taxonomy( get_queried_object()->taxonomy );
        /* translators: 1: Taxonomy singular name, 2: Current taxonomy term */
        $title = sprintf( __( '%1$s: %2$s' ), $tax->labels->singular_name, single_term_title( '', false ) );
    } else {
        $title = __( 'Archives' );
    }
    
    print str_replace('Category:', '', $title);
}

function flex_menu($theme_location='primary',$menu_id='',$menu_class='nav navbar-nav'){
    return wp_nav_menu(array('theme_location'=> $theme_location, 
                            'container'     => false, 
                            'menu_class'    => $menu_class,
                            'menu_id'       => $menu_id,
                            'walker'        => new Fx_Walker_Nav_Menu())
                    );
}

function flex_social(){
    global  $pl_options;
    $ouput = '';
        if (check_social('ss_face') == true) {
            $ouput .= '<li class="facebook">
                            <a target="_blank" title="Facebook" href="'.$pl_options['ss_face'].'">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>';
        }

        if (check_social('ss_twitter') == true) {
            $ouput .= '<li class="twitter">
                            <a target="_blank" title="Twitter" href="'.$pl_options['ss_twitter'].'">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>';
        }

        if (check_social('ss_ldin') == true) {
            $ouput .= '<li class="linkedin">
                            <a target="_blank" title="Linkedin" href="'.$pl_options['ss_ldin'].'">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>';
        }
        
        if (check_social('ss_gplus') == true) {
            $ouput .= '<li class="google-plus">
                            <a target="_blank" title="Google Plus" href="'.$pl_options['ss_gplus'].'">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>';
        }  

        if (check_social('ss_ingram') == true) {
            $ouput .= '<li target="_blank" class="instagram">
                            <a title="Instagram" href="'.$pl_options['ss_ingram'].'">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>';
        }

        if (check_social('ss_ytube') == true ) {
            $ouput .= '<li class="youtube">
                            <a target="_blank" title="Youtube" href="'.$pl_options['ss_ytube'].'">
                                <i class="fa fa-youtube"></i>
                            </a>
                        </li>';
        }  
        
    if (!empty($ouput)) {
        return '<ul class="social_list">'.$ouput.'</ul>';
    }
    return '';
}

function check_social($value){
    if (get_toption($value) && get_toption($value) != ''){
        return true;
    }else{
        return false;
    }
}

function fltrim($string){
    $arr = array("\r\n", "\r", "\n", "\t", "  ", "    ", "    ");
    $rep = array("", "", "", "", " ", " ", " ");
    $string = str_replace($arr, $rep, $string);
    return $string;
}

function get_toption($option){
    global  $pl_options;
    return $pl_options[$option];
}

function the_toption($option ,$type = ''){
    global  $pl_options;
    if ($type!='') {
       switch ($type) {
            case 'image':
                print $pl_options[$option]['url'];
                break;
            default:
                print apply_filters('the_excerpt',fltrim($pl_options[$option]));
                break;
        }
    }else{
        print apply_filters('the_excerpt',fltrim($pl_options[$option]));
    }
}

/* Hook Form download csv */
add_filter( 'frm_csv_columns', 'add_track_column', 10, 2 );
function add_track_column( $headings, $form_id ) {
    $idf = get_toption('vsid');
    $idfs = explode(',', $idf);
    foreach ($idfs as $key => $val) {
        if (isset($headings[$val])) {
            unset($headings[$val]);
            $headings[$val] = 'Visited Pages';
        }
    }
  return $headings;
}

add_filter('frm_csv_value', 'frm_csv_value', 10, 2);
function frm_csv_value($value, $atts){
    $idf = get_toption('vsid');
    $idfs = explode(',', $idf);
      if(in_array($atts['field']->id, $idfs)){ 
        $entry_id = $atts['entry']->id;
        $entry = FrmEntry::getOne( $entry_id );
        $entry_description = maybe_unserialize( $entry->description );
        $value = $entry_description;
      }
  return $value;
}
