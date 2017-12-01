<?php

$this->sections[] = array(
    'title'  => esc_html__( 'General Settings', 'flex-theme' ),
    'id'     => 'general-settings',
    'desc'   => esc_html__( 'All Settings in Themes', 'flex-theme' ),
    'icon'   => 'el el-cogs',
    'fields' => array(
        array(
            'id'       => 'header_phone',
            'type'     => 'text',
            'title'    => esc_html( 'Phone Header', 'flex-theme' ),
            'desc'     => esc_html( 'Enter Phone Header', 'flex-theme' ),
        ),
        array(
            'id'       => 'frm_sign_up',
            'type'     => 'text',
            'title'    => esc_html( 'Form Sign Up', 'flex-theme' ),
            'desc'     => esc_html( 'Enter Shortcodes Form Sign up', 'flex-theme' ),
        ),
        array(
            'id'       => 'google_id',
            'type'     => 'text',
            'title'    => esc_html( 'Google Analytics ID', 'flex-theme' ),
            'desc'     => esc_html( 'UA-XXXXXXXX-X', 'flex-theme' ),
        ),
        array(
            'id'       => 'google_id_client',
            'type'     => 'text',
            'title'    => esc_html( 'Google Analytics Client ID', 'flex-theme' ),
            'desc'     => esc_html( 'UA-XXXXXXXX-X', 'flex-theme' ),
        ),
        array(
            'id'       => 'face_fx_id',
            'type'     => 'text',
            'title'    => esc_html( 'Facebook pixel ID', 'flex-theme' ),
            'desc'     => esc_html( ' ', 'flex-theme' ),
        ),
        array(
            'id'       => 'tag_id',
            'type'     => 'text',
            'title'    => esc_html( 'REMARKETING TAG ID', 'flex-theme' ),
            'desc'     => esc_html( ' ', 'flex-theme' ),
        ),
        array(
            'id'       => 'vsid',
            'type'     => 'text',
            'default'   => '124,145',
            'title'    => esc_html( 'Field ID Visited Pages', 'flex-theme' ),
            'desc'     => esc_html( 'Download Visited Pages csv form. Ex: 12,13 ', 'flex-theme' ),
        ),
    )
);

$this->sections[] = array(
    'title'  => __( 'Header', 'flex-theme' ),
    'desc'   => __( 'All setings for header on this theme.', 'flex-theme' ),
    'icon'   => 'el el-hand-right',
    'fields' => array(
        array(
            'id'       => 'logo-on',
            'type'     => 'switch',
            'title'    => __( 'Enable Image Logo', 'flex-theme' ),
            'compiler' => 'bool',
            'desc'     => __( 'Do you want to enable image logo?', 'flex-theme' ),
            'on'       => __('Enabled', 'flex-theme'),
            'off'      => __('Disabled', 'flex-theme'),
            'default'  => true,
        ),
        array(
            'id'    => 'logo-image',
            'type'  => 'media',
            'required' => array( 'logo-on', '=', true ),
            'title' => __('Logo Image', 'flex-theme'),
            'desc'  => __('Image that you want to use as logo.', 'flex-theme'),
            'default'  => array('url' => THEME_URL_ASSETS.'/images/logo.png')
        ),
        array(
            'id'       => 'favicon',
            'type'     => 'media',
            'url'      => false,
            'title'    => esc_html( 'Favicon', 'flex-theme' ),
            'compiler' => 'true',
            'default'  => array('url' => THEME_URL_ASSETS.'/images/favicon.png')
        ),
        array(
            'id'       => 'header_top',
            'type'     => 'switch',
            'title'    => __( 'Show Header Top', 'flex-theme' ),
            'compiler' => 'bool',
            'desc'     => __( 'Do you want to show header top?', 'flex-theme' ),
            'on'       => __('Show', 'flex-theme'),
            'off'      => __('Hidden', 'flex-theme'),
            'default'  => 0,
        ),
        
        // TOP BAR COLORS
        array(
            'id'        => 'topbar_colors_start',
            'type'      => 'section',
            'required' => array( 'header_top', '=', '1' ),
            'title'     => esc_html__('Top Bar Setting', 'flex-theme'),
            'indent'    => true,
        ),
            array(
                'id'       => 'header_top_content',
                'type' => 'ace_editor',
                'required' => array( 'header_top', '=', '1' ),
                'title' => __('Header Top Content', 'flex-theme'),
                'subtitle'     => __( 'Paste your content here.', 'flex-theme' ),
                'mode'     => 'html',
                'theme'    => 'chrome',
            ),
            array(
                'id'        => 'topbar_bg_color',
                'type'      => 'color',
                'required' => array( 'header_top', '=', '1' ),
                'title'     => esc_html__('Top Bar Background Color', 'flex-theme'),
                'subtitle'  => esc_html__('Will replace top bar background color', 'flex-theme'),
                'default'   => '#c4c4c4',
                'output'    => array( 
                    'background-color' => '.pl_header_top', 
                ),
            ),
            array(
                'id'        => 'topbar_txt_color',
                'type'      => 'color',
                'required' => array( 'header_top', '=', '1' ),
                'title'     => esc_html__('Header Top Text Color', 'flex-theme'),
                'subtitle'  => esc_html__('Will replace top bar text color', 'flex-theme'),
                'default'   => '#fff',
                'output'    => array( 
                    'color' => '.pl_header_top, .pl_header_top p, .pl_header_top a, .pl_header_top p i', 
                    
                ),
            ),
            array(
                'id'             => 'topbar_spacing',
                'type'           => 'spacing', 
                'mode'           => 'padding',  
                'all'            => false,
                'required' => array( 'header_top', '=', '1' ),
                'units'          => array('px','em', '%'),
                'units_extended' => 'true',  
                'output'         => array('padding' => '.pl_header_top'),
                'title'          => esc_html__( 'Header Top Padding', 'flex-theme' ),
                'subtitle'       => esc_html__( 'Allow youto choose the spacing.', 'flex-theme' ),
                'desc'           => esc_html__( 'You can enable or disable any piece. Top, Right, Bottom, Left', 'flex-theme' ),
                'default'            => array(
                    'margin-top'     => '15', 
                    'margin-right'   => '0', 
                    'margin-bottom'  => '15', 
                    'margin-left'    => '0',
                    'units'          => 'px', 
                )
            ),
        array(
            'id'        => 'topbar_colors_end',
            'type'      => 'section',
            'indent'    => false,
        ), 
    )
);

$this->sections[] = array(
    'title'  => esc_html__( 'Content', 'flex-theme' ),
    'id'     => 'conten-settings',
    'desc'   => esc_html__( 'Club Hours, Error, No Post ', 'flex-theme' ),
    'icon'   => 'el el-cogs',
    'fields' => array(
        array(
            'id'       => 'club_hours',
            'type'     => 'ace_editor',
            'title'    => esc_html('Club Hours:', 'flex-theme'),
            'subtitle' => __( 'Paste your content here.', 'flex-theme' ),
            'mode'     => 'html',
            'theme'    => 'chrome',
        ),
        array(
            'id'       => 'schedule_down',
            'type'     => 'ace_editor',
            'title'    => __('Class Schedule Link Download', 'flex-theme'),
            'subtitle' => __( 'Paste your content here.', 'flex-theme' ),
            'mode'     => 'html',
            'theme'    => 'chrome',
        ),
        array(
            'id'       => '404_content',
            'type'     => 'ace_editor',
            'title'    => __('Error 404', 'flex-theme'),
            'subtitle' => __( 'Paste your content here.', 'flex-theme' ),
            'mode'     => 'html',
            'theme'    => 'chrome',
            'default'  => 'Error 404 <br> Page not found!',
        ),
        array(
            'id'       => 'no_content',
            'type'     => 'ace_editor',
            'title'    => __('Content None', 'flex-theme'),
            'subtitle' => __( 'Paste your content here.', 'flex-theme' ),
            'mode'     => 'html',
            'theme'    => 'chrome',
            'default'  => 'No post shows!',
        ),
    )
);

$this->sections[] = array(
    'title'  => __( 'Footer', 'flex-theme' ),
    'desc'   => __( 'All setings for footer on this theme.', 'flex-theme' ),
    'icon'   => 'el el-hand-right',
    'fields' => array(
        array(
            'id'       => 'logo_footer_on',
            'type'     => 'switch',
            'title'    => __( 'Enable Logo Footer', 'flex-theme' ),
            'compiler' => 'bool',
            'desc'     => __( 'Do you want to enable image logo?', 'flex-theme' ),
            'on'       => __('Enabled', 'flex-theme'),
            'off'      => __('Disabled', 'flex-theme'),
            'default'  => false,
        ),
            array(
                'id'    => 'logo_footer',
                'type'  => 'media',
                'required' => array( 'logo_footer_on', '=', true ),
                'title' => __('Logo Footer', 'flex-theme'),
                'desc'  => __('Image that you want to use as logo.', 'flex-theme'),
                'default'  => array('url' => THEME_URL_ASSETS.'/images/logo.png')
            ),  
        array(
            'id'       => 'shows_fbottom',
            'type'     => 'switch',
            'title'    => __( 'Show Footer Bottom', 'flex-theme' ),
            'default'  => 1,
            'on'       => 'Show',
            'off'      => 'Hide',
        ),
            array(
                    'id'       => 'fbottom_content',
                    'type' => 'ace_editor',
                    'required' => array( 'shows_fbottom', '=', '1' ),
                    'title' => __('Footer Bottom Top Content', 'flex-theme'),
                    'subtitle'     => __( 'Paste your content here.', 'flex-theme' ),
                    'mode'     => 'html',
                    'theme'    => 'chrome',
                ),
            array(
                    'id'        => 'fbottom_bg_color',
                    'type'      => 'color',
                    'required' => array( 'shows_fbottom', '=', '1' ),
                    'title'     => esc_html__('Footer Bottom Background Color', 'flex-theme'),
                    'subtitle'  => esc_html__('Will replace top bar background color', 'flex-theme'),
                    'default'   => '#333333',
                    'output'    => array( 
                        'background-color' => '#footer-bottom', 
                    ),
                ),

        array(
            'id'       => 'show_copyright',
            'type'     => 'switch',
            'title'    => esc_html( 'Show Copyright', 'flex-theme' ),
            'subtitle' => esc_html( 'Show / Hide Copyright bar', 'flex-theme' ),
            'default'  => 1,
            'on'       => 'Show',
            'off'      => 'Hide',
        ),
        // Copyright
            array(
                'id'       => 'copyright_text',
                'type'     => 'text',
                'required' => array( 'show_copyright', '=', '1' ),
                'title'    => esc_html( 'Copyright Text', 'flex-theme' ),
                'default'     => esc_html( '&copy; '.date("Y").' Copyright '.get_bloginfo('name').'. All rights reserved.', 'flex-theme' ),
            ),
            array(
                    'id'             => 'copyright_spacing',
                    'type'           => 'spacing', 
                    'mode'           => 'padding', 
                    'all'            => false,
                    'units'          => array('px','%','em'),
                    'units_extended' => 'true',     
                    'display_units'=> 'true',   
                    'required' => array( 'show_copyright', '=', '1' ),
                    'output'    => array('padding' => '#copyright'),
                    'title'          => esc_html__( 'Copyright Padding', 'flex-theme' ),
                    'subtitle'       => esc_html__( 'Allow youto choose the spacing.', 'flex-theme' ),
                    'desc'           => esc_html__( 'You can enable or disable any piece. Top, Right, Bottom, Left', 'flex-theme' ),
                    'default'            => array(
                        'margin-top'     => '15', 
                        'margin-right'   => '0', 
                        'margin-bottom'  => '15', 
                        'margin-left'    => '0',
                        'units'          => 'px', 
                    )
            ),
            array(
                'id'        => 'copyright_bg_color',
                'type'      => 'color',
                'required' => array( 'show_copyright', '=', '1' ),
                'title'     => esc_html__('Copyright Background Color', 'flex-theme'),
                'subtitle'  => esc_html__('Will replace top bar background color', 'flex-theme'),
                'default'   => '#333333',
                'output'    => array( 
                    'background-color' => '#copyright', 
                ),
            ),
            array(
                'id'        => 'copyright_txt_color',
                'type'      => 'color',
                'required' => array( 'show_copyright', '=', '1' ),
                'title'     => esc_html__('Copyright Text Color', 'flex-theme'),
                'subtitle'  => esc_html__('Will replace top bar text color', 'flex-theme'),
                'default'   => '#fff',
                'output'    => array( 
                    'color' => '#copyright,#copyright p,#copyright a', 
                    
                ),
            ),
    )
);

$this->sections[] = array(
    'title'  => __( 'Custom Code', 'flex-theme' ),
    'desc'   => __( 'All setings for custom css and js on this theme.', 'flex-theme' ),
    'icon'   => 'el el-cogs',
    'fields' => array(
        array(
            'id'=>'ctcss',
            'type' => 'ace_editor',
            'title' => __('CSS Code', 'flex-theme'),
            'subtitle'     => __( 'Paste your CSS code here.', 'flex-theme' ),
            'mode'     => 'css',
            'theme'    => 'chrome',
        ),
        array(
            'id'=>'ctjs',
            'type' => 'ace_editor',
            'title' => __('JS Code', 'flex-theme'),
            'subtitle'     => __( 'Paste your JS code here.', 'flex-theme' ),
            'mode'     => 'js',
            'theme'    => 'chrome',
        ),
    )
);

$this->sections[] = array(
    'title'  => __( 'Social Media', 'flex-theme' ),
    'desc'   => __( 'All setings for Social Link.', 'flex-theme' ),
    'icon'   => 'el el-podcast',
    'fields' => array(
        array(
            'id'       => 'ss_face',
            'type'     => 'text',
            'title'    => esc_html( 'Facebook', 'flex-theme' ),
            'desc'     => esc_html( 'Enter facebook profile link', 'flex-theme' ),
        ),
        array(
            'id'       => 'ss_twitter',
            'type'     => 'text',
            'title'    => esc_html( 'Twitter', 'flex-theme' ),
            'desc'     => esc_html( 'Enter twitter profile link', 'flex-theme' ),
        ),
        array(
            'id'       => 'ss_ldin',
            'type'     => 'text',
            'title'    => esc_html( 'Linkedin', 'flex-theme' ),
            'desc'     => esc_html( 'Enter linkedin profile link', 'flex-theme' ),
        ),
        array(
            'id'       => 'ss_gplus',
            'type'     => 'text',
            'title'    => esc_html( 'Google Plus', 'flex-theme' ),
            'desc'     => esc_html( 'Enter google plus profile link', 'flex-theme' ),
        ),
        array(
            'id'       => 'ss_ytube',
            'type'     => 'text',
            'title'    => esc_html( 'Youtube', 'flex-theme' ),
            'desc'     => esc_html( 'Enter Youtube profile link', 'flex-theme' ),
        ),
        array(
            'id'       => 'ss_ingram',
            'type'     => 'text',
            'title'    => esc_html( 'Instagram', 'flex-theme' ),
            'desc'     => esc_html( 'Enter instagram profile link', 'flex-theme' ),
        )
    )
);

