<?php
add_action('customize_register', 'monochrome_header_customize');
add_action('customize_register', 'monochrome_layout_customize');
add_action('customize_register', 'monochrome_post_customize');
add_action('customize_register', 'monochrome_home_customize');

function monochrome_header_customize($wp_customize) {
 
    $wp_customize->add_section( 'monochrome_header_settings', array(
		'title'           => __('Header Options', 'monochrome' ),         
        'priority'        => 35,
        'description'     => __('Set options for content located in the header (logo upload, etc).', 'monochrome' ),
    ) );
 
    $wp_customize->add_setting( 'monochrome_logo', array(
    ) );
 
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'monochrome_logo', array(
        'label'   => __('Upload Logo', 'monochrome' ),
        'section' => 'monochrome_header_settings',
        'settings'   => 'monochrome_logo',
    ) ) ); 
 
	if ( $wp_customize->is_preview() && ! is_admin() )
	    add_action( 'wp_footer', 'monochrome_customize_preview', 21);
}

function monochrome_home_customize($wp_customize) {
 
    $wp_customize->add_section( 'monochrome_home_settings', array(
        'title'           => __('Homepage Options', 'monochrome' ),         
        'priority'        => 36,
        'description'     => __('Set options for the home page.', 'monochrome' ),
    ) );
 
    $wp_customize->add_setting( 'monochrome_post_excerpt', array(
         'default'        => 'short',        
    ) );    

    $wp_customize->add_control( 'monochrome_post_excerpt', array(
        'label'   => __('Excerpt Length', 'monochrome' ),
        'section' => 'monochrome_home_settings',
        'type'    => 'select',
        'choices'    => array(
            'short' => __('Short', 'monochrome' ),     
            'medium' => __('Medium', 'monochrome' ),               
            'long' => __('Long', 'monochrome' ), 
            'full' => __('Full Post', 'monochrome' ),
            ),
    ) );    

}

function monochrome_layout_customize($wp_customize) {
 
    $wp_customize->add_section( 'monochrome_layout_settings', array(
        'title'          => __('Layout Options', 'monochrome' ),
        'priority'       => 37,
        'description'     => __('Set options for how various content regions are displayed.', 'monochrome' ),        
    ) );

    $wp_customize->add_setting( 'monochrome_layout', array(
         'default'        => 'left',        
    ) );    

	$wp_customize->add_control( 'monochrome_layout', array(
	    'label'   => __('Preferred Layout', 'monochrome' ),
        'section' => 'monochrome_layout_settings',
	    'type'    => 'select',
	    'choices'    => array(
	        'left' => __('Left Content', 'monochrome' ),    	
	        'right' => __('Right Content', 'monochrome' ),
	        'full' => __('Full Width', 'monochrome' ),
	        ),
	) );    

    $wp_customize->add_setting( 'monochrome_footer_widgets', array(
         'default'        => 'yes',        
    ) );    

    $wp_customize->add_control( 'monochrome_footer_widgets', array(
        'label'   => __('Use Footer Widgets?', 'monochrome' ),
        'section' => 'monochrome_layout_settings',
        'type'    => 'select',
        'choices'    => array(
            'yes' => __('Yes', 'monochrome' ),      
            'no' => __('No', 'monochrome' ),
            ),
    ) );  

    $wp_customize->add_setting( 'monochrome_navigation', array(
         'default'        => 'header',        
    ) );    

    $wp_customize->add_control( 'monochrome_navigation', array(
        'label'   => __('Navigation Setting', 'monochrome' ),
        'section' => 'monochrome_layout_settings',
        'type'    => 'select',
        'choices'    => array(
            'header' => __('In Header', 'monochrome' ),      
            'navbar' => __('Navigation Bar', 'monochrome' ),
            ),
    ) );            
 
}

function monochrome_post_customize($wp_customize) {
 
    $wp_customize->add_section( 'monochrome_post_settings', array(
        'title'          => __('Post Options', 'monochrome' ),
        'priority'       => 38,
        'description'     => __('Set options for the post related content and meta.', 'monochrome' ),                
    ) );

    $wp_customize->add_setting( 'monochrome_tags', array(
    	'default' => 'yes'
    ) );    

	$wp_customize->add_control( 'monochrome_tags', array(
	    'label'   => __('Use Tags in Post?', 'monochrome' ),
        'section' => 'monochrome_post_settings',
	    'type'    => 'select',
	    'choices'    => array(
	        'yes' => __('Yes', 'monochrome' ),    	
	        'no' => __('No', 'monochrome' ),
	        ),
	) );    

    $wp_customize->add_setting( 'monochrome_featured_image', array(
        'default' => 'no'
    ) );    

    $wp_customize->add_control( 'monochrome_featured_image', array(
        'label'   => __('Display Featured Image in Post?', 'monochrome' ),
        'section' => 'monochrome_post_settings',
        'type'    => 'select',
        'choices'    => array(
            'no' => __('No', 'monochrome' ),            
            'yes' => __('Yes', 'monochrome' ),        
            ),
    ) );        
 
}

function monochrome_customize_preview() { ?>
    <script type="text/javascript">
    ( function( $ ){
    wp.customize('blogname',function( value ) {
        value.bind(function(to) {
            $('.site-title').html(to);
        });
    });
    wp.customize('blogdescription',function( value ) {
        value.bind(function(to) {
            $('.site-description').html(to);
        });
    });
    } )( jQuery )
    </script>
    <?php
}