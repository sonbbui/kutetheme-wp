<?php
$prefix = 'kt_';

$key    = 'kt_options';

global $wp_registered_sidebars;

$sidebars = array();

foreach ( $wp_registered_sidebars as $sidebar ) {
    $sidebars[ $sidebar['id'] ] = $sidebar['name'];
}

$config = array(
    //General
    $prefix . 'generals' => array(
        'title'   => 'General',
        'type'    => 'wrapper',
        
        'cmb'     => array (
            $prefix . 'default_page' => array(
                'setting' => array( 
                    'id'      => $prefix . 'default_page',
        			'hookup'  => false,
                    'title'   => 'Page',
        			'show_on' => array(
        				// These are important, don't remove
        				'key'   => 'options-page',
        				'value' => array( $key )
        			) 
                ),
                'fields'    => array(
                    array(
                		'name'    => __( 'Page Service', 'kutetheme' ),
                		'id'      => 'kt_page_service',
                		'type'    => 'page_select',
                        'desc'    => __( 'Setting page service', 'kutetheme' ),
                	),
                    array(
                		'name'    => __( 'Page Support', 'kutetheme' ),
                		'id'      => 'kt_page_support',
                		'type'    => 'page_select',
                        'desc'    => __( 'Setting page support ', 'kutetheme' ),
                	),
                    array(
                		'name'    => __( 'About Us', 'kutetheme' ),
                		'id'      => 'kt_page_about_us',
                		'type'    => 'page_select',
                        'desc'    => __( 'Setting page about us', 'kutetheme' ),
                	)
                )
            ),
            $prefix . 'default_sidebar' => array(
                'setting' => array( 
                    'id'      => $prefix . 'default_sidebar',
        			'hookup'  => false,
                    'title'   => 'Sidebar',
        			'show_on' => array(
        				// These are important, don't remove
        				'key'   => 'options-page',
        				'value' => array( $key )
        			) 
                ),
                'fields'    => array(
                    array(
                		'name'    => __( 'Sidebar Area', 'kutetheme' ),
                		'id'      => 'kt_sidebar_are',
                		'type'    => 'select',
                		'default' => 'left',
                        'options' => array(
                            'full'  => 'Full',
                            'left'  => 'Left',
                            'right' => 'Right'
                        ),
                        'desc'    => __( 'Setting Sidebar Area', 'kutetheme' ),
                	),
                    array(
                		'name'    => __( 'Choose sidebar', 'kutetheme' ),
                		'id'      => 'kt_used_sidebar',
                		'type'    => 'sidebar_select',
                		'default' => 'sidebar-primary',
                        'desc'    => __( 'Setting sidebar in the area sidebar', 'kutetheme' ),
                	)
                )
            ),
		)
    ),
    //Logo
    $prefix . 'logo_favicon' =>  array(
        'setting' => array(
            'id'      => $prefix . 'logo_favicon',
            'title'   => 'Logo',
    		'hookup'  => false,
    		'show_on' => array(
    			// These are important, don't remove
    			'key'   => 'options-page',
    			'value' => array( $key )
            )
		),
        'fields'    => array(
            array(
        		'name'    => __( 'Logo', 'kutetheme' ),
        		'id'      => 'kt_logo',
        		'type'    => 'file',
                'desc'    => __( 'Setting your site\'s logo', 'kutetheme' ),
        	),
            array(
        		'name'    => __( 'Logo Footer', 'kutetheme' ),
        		'id'      => 'kt_logo_footer',
        		'type'    => 'file',
                'desc'    => __( 'Setting your site\'s logo in footer', 'kutetheme' ),
        	),
            array(
        		'name'    => __( 'Favicon', 'kutetheme' ),
        		'id'      => 'kt_favicon',
        		'type'    => 'file',
                'desc'    => __( 'Setting your site\'s favicon', 'kutetheme' ),
        	)
        )
    ),
    //Header
    $prefix . 'header' => array(
        'title'   => 'Header',
        'type'    => 'wrapper',
        
        'cmb'     => array (
            $prefix . 'default_header' => array(
                'setting' => array( 
                    'id'      => $prefix . 'default_header',
        			'hookup'  => false,
                    'title'   => 'General',
        			'show_on' => array(
        				// These are important, don't remove
        				'key'   => 'options-page',
        				'value' => array( $key )
        			) 
                ),
                'fields'    => array(
                    array(
                		'name'    => __( 'Header', 'kutetheme' ),
                		'id'      => 'kt_used_header',
                		'type'    => 'radio_image',
                        'desc'    => __( 'Setting header style display', 'kutetheme' ),
                        'show_option_none' => 0,
                        'default' => '1',
                        'options' => array(
                			'1' => KUTETHEME_PLUGIN_URL .'/assets/imgs/v1.jpg',
                			'2' => KUTETHEME_PLUGIN_URL .'/assets/imgs/v2.jpg',
                			'3' => KUTETHEME_PLUGIN_URL .'/assets/imgs/v3.jpg',
                            '4' => KUTETHEME_PLUGIN_URL .'/assets/imgs/v4.jpg',
                            '5' => KUTETHEME_PLUGIN_URL .'/assets/imgs/v5.jpg',
                            '6' => KUTETHEME_PLUGIN_URL .'/assets/imgs/v6.jpg',
                            '7' => KUTETHEME_PLUGIN_URL .'/assets/imgs/v7.jpg',
                		),
                	)
                )
            ),
            $prefix . 'vertical_menu' => array(
                'setting' => array( 
                    'id'      => $prefix . 'vertical_menu',
        			'hookup'  => false,
                    'title'   => 'Vertical Menu',
        			'show_on' => array(
        				// These are important, don't remove
        				'key'   => 'options-page',
        				'value' => array( $key )
        			) 
                ),
                'fields'    => array(
                    array(
                        'name'    => __( 'User Vertical Menu', 'kutetheme' ),
                        'id'      => 'kt_enable_vertical_menu',
                        'type'    => 'select',
                        'default' => 'enable',
                        'options' => array(
                            'enable'  => 'Enable',
                            'disable'  => 'Disable'
                        ),
                        'desc'    => __( 'Use Vertical Menu on show any page', 'kutetheme' ),
                    ),
                    array(
                        'name'    => __( 'Collapse', 'kutetheme'),
                        'id'      => 'kt_click_open_vertical_menu',
                        'type'    => 'select',
                        'default' => 'disable',
                        'options' => array(
                            'enable'  => 'Enable',
                            'disable'  => 'Disable'
                        ),
                        'desc'    => __( 'Vertical menu will expand on click', 'kutetheme' ),
                    ),
                    array(
                        'name'    => __( 'The number of visible vertical menu items', 'kutetheme' ),
                        'desc'    => __( 'The number of visible vertical menu items', 'kutetheme' ),
                        'id'      => 'kt_vertical_item_visible',
                        'default' =>11,
                        'type'    => 'numeric',
                    )
                )
            ),
            $prefix . 'header_3' => array(
                'setting' => array( 
                    'id'      => $prefix . 'header_3',
        			'hookup'  => false,
                    'title'   => 'Header 3',
        			'show_on' => array(
        				// These are important, don't remove
        				'key'   => 'options-page',
        				'value' => array( $key )
        			) 
                ),
                'fields'    => array(
                    array(
                        'name' => __( 'Ads text', 'kutetheme' ),
                        'desc' => __( 'Display ads text only header style 3', 'kutetheme' ),
                        'id'   => 'kt_header_message',
                        'type' => 'text',
                    )
                )
            ),
            $prefix . 'header_7' => array(
                'setting' => array( 
                    'id'      => $prefix . 'header_7',
        			'hookup'  => false,
                    'title'   => 'Header 7',
        			'show_on' => array(
        				// These are important, don't remove
        				'key'   => 'options-page',
        				'value' => array( $key )
        			) 
                ),
                'fields'    => array(
                    array(
                		'name'       => __( 'Category Service', 'kutetheme' ),
                		'id'         => 'kt_service_cate',
                		'type'       => 'taxonomy_select',
                        'taxonomy'   => 'service_cat',
                        'desc'       => __( 'Setting category service in header 7', 'kutetheme' ),
                        'show_option_none' => 'Choose Category'
                	)
                )
            )
		),
    ),
    //Footer
    $prefix . 'footer' => array(
        'title'   => 'Footer',
        'type'    => 'wrapper',
        
        'cmb'     => array (
            $prefix . 'default_footer' => array(
                'setting' => array( 
                    'id'      => $prefix . 'default_footer',
        			'hookup'  => false,
                    'title'   => 'General',
        			'show_on' => array(
        				// These are important, don't remove
        				'key'   => 'options-page',
        				'value' => array( $key )
        			) 
                ),
                'fields'    => array(
                    array(
                		'name'    => __( 'Footer', 'kutetheme' ),
                		'id'      => 'kt_footer_style',
                		'type'    => 'radio_image',
                        'desc'    => __( 'Setting footer style display', 'kutetheme' ),
                        'show_option_none' => 0,
                        'default' => '1',
                        'options' => array(
                			'1' => KUTETHEME_PLUGIN_URL .'/assets/imgs/fv1.jpg',
                			'2' => KUTETHEME_PLUGIN_URL .'/assets/imgs/fv2.jpg',
                			'3' => KUTETHEME_PLUGIN_URL .'/assets/imgs/fv3.jpg',
                		)
                	),
                    array(
                		'name' => __( 'Copyrights', 'kutetheme' ),
                		'desc' => __( 'Copyrights your site', 'kutetheme' ),
                		'id'   => 'kt_copyrights',
                		'type' => 'textarea',
                	)
                )
            ),
            $prefix . 'footer_2' => array(
                'setting' => array( 
                    'id'      => $prefix . 'footer_2',
        			'hookup'  => false,
                    'title'   => 'Footer 2',
        			'show_on' => array(
        				// These are important, don't remove
        				'key'   => 'options-page',
        				'value' => array( $key )
        			) 
                ),
                'fields'    => array(
                     array(
                        'name'    => __( 'Footer Background', 'kutetheme' ),
                        'id'      => 'kt_footer_background',
                        'type'    => 'file',
                        'desc'    => __( 'Display Background on footer style 2', 'kutetheme' ),
                    ),
                    array(
                        'name'    => __( 'Footer Payment logo', 'kutetheme' ),
                        'id'      => 'kt_footer_payment_logo',
                        'type'    => 'file',
                        'desc'    => __( 'Display payment logo on footer style 2', 'kutetheme' ),
                    ),
                    array(
                        'name'    => __( 'Subscribe newsletter title', 'kutetheme' ),
                        'desc'    => __( 'Subscribe newsletter title display on footer style 2', 'kutetheme' ),
                        'id'      => 'kt_footer_subscribe_newsletter_title',
                        'type'    => 'text',
                        'default' => 'SIGN UP BELOW FOR EARLY UPDATES'
                    ),
                    array(
                        'name'    => __( 'Subscribe newsletter description', 'kutetheme' ),
                        'desc'    => __( 'Subscribe newsletter description display on footer style 2', 'kutetheme' ),
                        'id'      => 'kt_footer_subscribe_newsletter_description',
                        'type'    => 'text',
                        'default' => 'You a Client , large or small, and want to participate in this adventure, please send us an email to support@kuteshop.com'
                    )
                )
            ),
		),
    ),
    //Woocommerce
    $prefix . 'woocommerce' => array(
        'title'   => 'Woocommerce',
        'type'    => 'wrapper',
        
        'cmb'     => array (
            $prefix . 'default_woocommerce' => array(
                'setting' => array( 
                    'id'      => $prefix . 'default_woocommerce',
        			'hookup'  => false,
                    'title'   => 'Woocommerce',
        			'show_on' => array(
        				// These are important, don't remove
        				'key'   => 'options-page',
        				'value' => array( $key )
        			) 
                ),
                'fields'    => array(
                    array(
                		'name'    => __( 'Number of days newness', 'kutetheme' ),
                		'id'      => 'kt_woo_newness',
                		'type'    => 'text',
                		'default' => '7',
                        'desc'    => __( 'Number of days to treat as new product', 'kutetheme' ),
                	),
                    array(
                		'name'    => __( 'Grid column', 'kutetheme' ),
                		'id'      => 'kt_woo_grid_column',
                		'type'    => 'select',
                		'default' => '3',
                        'options' => array(
                            '1' => '1 Column',
                            '2' => '2 Columns',
                            '3' => '3 Columns',
                            '4' => '4 Columns',
                            '6' => '6 Columns'
                        ),
                        'desc'    => __( 'Number column to display width gird mod', 'kutetheme' ),
                	)
                )
            ),
            $prefix . 'shop_page' => array(
                'setting' => array( 
                    'id'      => $prefix . 'shop_page',
        			'hookup'  => false,
                    'title'   => 'Shop Page',
        			'show_on' => array(
        				// These are important, don't remove
        				'key'   => 'options-page',
        				'value' => array( $key )
        			) 
                ),
                'fields'    => array(
                    array(
                		'name'    => __( 'Shop Sidebar Area', 'kutetheme' ),
                		'id'      => 'kt_woo_shop_sidebar_are',
                		'type'    => 'select',
                		'default' => 'left',
                        'options' => array(
                            'full'  => 'Full',
                            'left'  => 'Left',
                            'right' => 'Right'
                        ),
                        'desc'    => __( 'Setting Sidebar Area on shop page', 'kutetheme' )
                    ),
                    array(
                		'name'    => __( 'Shop page sidebar', 'kutetheme' ),
                		'id'      => 'kt_woowoo_shop_used_sidebar',
                		'type'    => 'sidebar_select',
                		'default' => 'sidebar-shop',
                        'desc'    => __( 'Setting sidebar in the area sidebar on shop page', 'kutetheme' ),
                	),
                    array(
                		'name'    => __( 'Products perpage', 'kutetheme' ),
                		'id'      => 'kt_woo_products_perpage',
                		'type'    => 'text',
                		'default' => '12',
                        'desc'    => __( 'Number of products on shop page', 'kutetheme' ),
                	)
                )
            ),
            $prefix . 'single_page' => array(
                'setting' => array( 
                    'id'      => $prefix . 'single_page',
        			'hookup'  => false,
                    'title'   => 'Single Product',
        			'show_on' => array(
        				// These are important, don't remove
        				'key'   => 'options-page',
        				'value' => array( $key )
        			) 
                ),
                'fields'    => array(
                    array(
                		'name'    => __( 'Single Sidebar Area', 'kutetheme' ),
                		'id'      => 'kt_woo_single_sidebar_are',
                		'type'    => 'select',
                		'default' => 'full',
                        'options' => array(
                            'full'  => 'Full',
                            'left'  => 'Left',
                            'right' => 'Right'
                        ),
                        'desc'    => __( 'Setting Sidebar Area on single page', 'kutetheme' ),
                	),
                    array(
                		'name'    => __( 'Single page sidebar', 'kutetheme' ),
                		'id'      => 'kt_woo_single_used_sidebar',
                		'type'    => 'sidebar_select',
                		'default' => 'full',
                        'options' => $sidebars,
                        'desc'    => __( 'Setting sidebar in the area sidebar on single page', 'kutetheme' ),
                	)
                )
            )
		),
    ),
    //Social
    $prefix . 'social' =>  array(
        'setting' => array(
            'id'      => $prefix . 'social',
            'title'   => 'Socials',
    		'hookup'  => false,
    		'show_on' => array(
    			// These are important, don't remove
    			'key'   => 'options-page',
    			'value' => array( $key )
            )
		),
        'fields'    => array(
            array(
        		'name' => __( 'Addthis ID', 'kutetheme' ),
        		'desc' => __( 'Setting id addthis', 'kutetheme' ),
        		'id'   => 'kt_addthis_id',
        		'type' => 'text',
        	),
            array(
        		'name' => __( 'Facebook Link', 'kutetheme' ),
        		'desc' => __( 'Setting id facebook link', 'kutetheme' ),
        		'id'   => 'kt_facebook_link_id',
        		'type' => 'text',
        	),
            array(
        		'name' => __( 'Twitter', 'kutetheme' ),
        		'desc' => __( 'Your twitter username', 'kutetheme' ),
        		'id'   => 'kt_twitter_link_id',
        		'type' => 'text',
        	),
            array(
        		'name' => __( 'Pinterest', 'kutetheme' ),
        		'desc' => __( 'Your pinterest username', 'kutetheme' ),
        		'id'   => 'kt_pinterest_link_id',
        		'type' => 'text',
        	),
            array(
        		'name' => __( 'Dribbble', 'kutetheme' ),
        		'desc' => __( 'Your dribbble username', 'kutetheme' ),
        		'id'   => 'kt_dribbble_link_id',
        		'type' => 'text',
        	),
            array(
        		'name' => __( 'Vimeo', 'kutetheme' ),
        		'desc' => __( 'Your vimeo username', 'kutetheme' ),
        		'id'   => 'kt_vimeo_link_id',
        		'type' => 'text',
        	),
            array(
        		'name' => __( 'Tumblr Link', 'kutetheme' ),
        		'desc' => __( 'Your tumblr username', 'kutetheme' ),
        		'id'   => 'kt_tumblr_link_id',
        		'type' => 'text',
        	),
            array(
        		'name' => __( 'Skype', 'kutetheme' ),
        		'desc' => __( 'Your skype username', 'kutetheme' ),
        		'id'   => 'kt_skype_link_id',
        		'type' => 'text',
        	),
            array(
        		'name' => __( 'LinkedIn Link', 'kutetheme' ),
        		'desc' => __( 'Setting id linkedIn link', 'kutetheme' ),
        		'id'   => 'kt_linkedIn_link_id',
        		'type' => 'text',
        	),
            array(
        		'name' => __( 'Vk', 'kutetheme' ),
        		'desc' => __( 'Your vk id', 'kutetheme' ),
        		'id'   => 'kt_vk_link_id',
        		'type' => 'text',
        	),
            array(
        		'name' => __( 'Google+ Link', 'kutetheme' ),
        		'desc' => __( 'Setting id Google+ link', 'kutetheme' ),
        		'id'   => 'kt_google_plus_link_id',
        		'type' => 'text',
        	),
            array(
        		'name' => __( 'Google+ Link', 'kutetheme' ),
        		'desc' => __( 'Setting id Google+ link', 'kutetheme' ),
        		'id'   => 'kt_google_plus_link_id',
        		'type' => 'text',
        	),
            array(
        		'name' => __( 'Youtube', 'kutetheme' ),
        		'desc' => __( 'Your youtube username', 'kutetheme' ),
        		'id'   => 'kt_youtube_link_id',
        		'type' => 'text',
        	),
            array(
        		'name' => __( 'Instagram', 'kutetheme' ),
        		'desc' => __( 'Your instagram username', 'kutetheme' ),
        		'id'   => 'kt_instagram_link_id',
        		'type' => 'text',
        	)
        )
    ),
    //CSS
    $prefix . 'stylesheet' =>  array(
        'setting' => array(
            'id'      => $prefix . 'stylesheet',
            'title'   => 'CSS',
    		'hookup'  => false,
    		'show_on' => array(
    			// These are important, don't remove
    			'key'   => 'options-page',
    			'value' => array( $key )
            )
		),
        'fields'    => array(
            array(
        		'name' => __( 'Code CSS', 'kutetheme' ),
        		'desc' => __( 'Add css in your site', 'kutetheme' ),
        		'id'   => 'kt_add_css',
        		'type' => 'textarea_code',
        	)
        )
    ),
    //JS
    $prefix . 'javascript' =>  array(
        'setting' => array(
            'id'      => $prefix . 'javascript',
            'title'   => 'JS',
    		'hookup'  => false,
    		'show_on' => array(
    			// These are important, don't remove
    			'key'   => 'options-page',
    			'value' => array( $key )
            )
		),
        'fields'    => array(
            array(
        		'name' => __( 'Code JS', 'kutetheme' ),
        		'desc' => __( 'Add js in your site', 'kutetheme' ),
        		'id'   => 'kt_add_js',
        		'type' => 'textarea_code',
        	)
        )
    ),
    //JS
    $prefix . 'infomation' =>  array(
        'setting' => array(
            'id'      => $prefix . 'infomation',
            'title'   => 'Info',
    		'hookup'  => false,
    		'show_on' => array(
    			// These are important, don't remove
    			'key'   => 'options-page',
    			'value' => array( $key )
            )
		),
        'fields'    => array(
            array(
        		'name' => __( 'Address', 'kutetheme' ),
        		'desc' => __( 'Setting address for your site', 'kutetheme' ),
        		'id'   => 'kt_address',
        		'type' => 'text',
        	),
            array(
        		'name' => __( 'Phone', 'kutetheme' ),
        		'desc' => __( 'Setting hotline for your site', 'kutetheme' ),
        		'id'   => 'kt_phone',
        		'type' => 'text',
        	),
            array(
        		'name' => __( 'Email', 'kutetheme' ),
        		'desc' => __( 'Setting email for your site', 'kutetheme' ),
        		'id'   => 'kt_email',
        		'type' => 'text',
        	)
        )
    )
);
return $config;