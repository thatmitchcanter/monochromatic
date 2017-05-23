<?php
add_action('customize_register', 'monochromatic_header_customize');
add_action('customize_register', 'monochromatic_layout_customize');
add_action('customize_register', 'monochromatic_post_customize');
add_action('customize_register', 'monochromatic_home_customize');

function monochromatic_header_customize($wp_customize) {
 
    $wp_customize->add_section( 'monochromatic_header_settings', array(
		'title'           => __('Header Options', 'monochromatic' ),         
        'priority'        => 35,
        'description'     => __('Set options for content located in the header (logo upload, etc).', 'monochromatic' ),
    ) );
 
    $wp_customize->add_setting( 'monochromatic_logo', array(
    ) );
 
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'monochromatic_logo', array(
        'label'   => __('Upload Logo', 'monochromatic' ),
        'section' => 'monochromatic_header_settings',
        'settings'   => 'monochromatic_logo',
    ) ) ); 
 
	if ( $wp_customize->is_preview() && ! is_admin() )
	    add_action( 'wp_footer', 'monochromatic_customize_preview', 21);
}

function monochromatic_home_customize($wp_customize) {
 
    $wp_customize->add_section( 'monochromatic_home_settings', array(
        'title'           => __('Homepage Options', 'monochromatic' ),         
        'priority'        => 36,
        'description'     => __('Set options for the home page.', 'monochromatic' ),
    ) );
 
    $wp_customize->add_setting( 'monochromatic_post_excerpt', array(
         'default'        => 'short',        
    ) );    

    $wp_customize->add_control( 'monochromatic_post_excerpt', array(
        'label'   => __('Excerpt Length', 'monochromatic' ),
        'section' => 'monochromatic_home_settings',
        'type'    => 'select',
        'choices'    => array(
            'short' => __('Short', 'monochromatic' ),     
            'medium' => __('Medium', 'monochromatic' ),               
            'long' => __('Long', 'monochromatic' ), 
            'full' => __('Full Post', 'monochromatic' ),
            ),
    ) );    

}

function monochromatic_layout_customize($wp_customize) {
 
    $wp_customize->add_section( 'monochromatic_layout_settings', array(
        'title'          => __('Layout Options', 'monochromatic' ),
        'priority'       => 37,
        'description'     => __('Set options for how various content regions are displayed.', 'monochromatic' ),        
    ) );

    $wp_customize->add_setting( 'monochromatic_layout', array(
         'default'        => 'left',        
    ) );    

	$wp_customize->add_control( 'monochromatic_layout', array(
	    'label'   => __('Preferred Layout', 'monochromatic' ),
        'section' => 'monochromatic_layout_settings',
	    'type'    => 'select',
	    'choices'    => array(
	        'left' => __('Left Content', 'monochromatic' ),    	
	        'right' => __('Right Content', 'monochromatic' ),
	        'full' => __('Full Width', 'monochromatic' ),
	        ),
	) );    

    $wp_customize->add_setting( 'monochromatic_footer_widgets', array(
         'default'        => 'yes',        
    ) );    

    $wp_customize->add_control( 'monochromatic_footer_widgets', array(
        'label'   => __('Use Footer Widgets?', 'monochromatic' ),
        'section' => 'monochromatic_layout_settings',
        'type'    => 'select',
        'choices'    => array(
            'yes' => __('Yes', 'monochromatic' ),      
            'no' => __('No', 'monochromatic' ),
            ),
    ) );  

    $wp_customize->add_setting( 'monochromatic_navigation', array(
         'default'        => 'header',        
    ) );    

    $wp_customize->add_control( 'monochromatic_navigation', array(
        'label'   => __('Navigation Setting', 'monochromatic' ),
        'section' => 'monochromatic_layout_settings',
        'type'    => 'select',
        'choices'    => array(
            'header' => __('In Header', 'monochromatic' ),      
            'navbar' => __('Navigation Bar', 'monochromatic' ),
            ),
    ) );            
 
}

function monochromatic_post_customize($wp_customize) {
 
    $wp_customize->add_section( 'monochromatic_post_settings', array(
        'title'          => __('Post Options', 'monochromatic' ),
        'priority'       => 38,
        'description'     => __('Set options for the post related content and meta.', 'monochromatic' ),                
    ) );

    $wp_customize->add_setting( 'monochromatic_tags', array(
    	'default' => 'yes'
    ) );    

	$wp_customize->add_control( 'monochromatic_tags', array(
	    'label'   => __('Use Tags in Post?', 'monochromatic' ),
        'section' => 'monochromatic_post_settings',
	    'type'    => 'select',
	    'choices'    => array(
	        'yes' => __('Yes', 'monochromatic' ),    	
	        'no' => __('No', 'monochromatic' ),
	        ),
	) );    

    $wp_customize->add_setting( 'monochromatic_featured_image', array(
        'default' => 'no'
    ) );    

    $wp_customize->add_control( 'monochromatic_featured_image', array(
        'label'   => __('Display Featured Image in Post?', 'monochromatic' ),
        'section' => 'monochromatic_post_settings',
        'type'    => 'select',
        'choices'    => array(
            'no' => __('No', 'monochromatic' ),            
            'yes' => __('Yes', 'monochromatic' ),        
            ),
    ) );        
 
}

function monochromatic_customize_preview() { ?>
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