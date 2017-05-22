<?php
add_action('customize_register', 'downbeat_header_customize');
add_action('customize_register', 'downbeat_layout_customize');
add_action('customize_register', 'downbeat_post_customize');
add_action('customize_register', 'downbeat_home_customize');

function downbeat_header_customize($wp_customize) {
 
    $wp_customize->add_section( 'downbeat_header_settings', array(
		'title'           => __('Header Options', 'downbeat' ),         
        'priority'        => 35,
        'description'     => __('Set options for content located in the header (logo upload, etc).', 'downbeat' ),
    ) );
 
    $wp_customize->add_setting( 'downbeat_logo', array(
    ) );
 
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'downbeat_logo', array(
        'label'   => __('Upload Logo', 'downbeat' ),
        'section' => 'downbeat_header_settings',
        'settings'   => 'downbeat_logo',
    ) ) ); 
 
	if ( $wp_customize->is_preview() && ! is_admin() )
	    add_action( 'wp_footer', 'downbeat_customize_preview', 21);
}

function downbeat_home_customize($wp_customize) {
 
    $wp_customize->add_section( 'downbeat_home_settings', array(
        'title'           => __('Homepage Options', 'downbeat' ),         
        'priority'        => 36,
        'description'     => __('Set options for the home page.', 'downbeat' ),
    ) );
 
    $wp_customize->add_setting( 'downbeat_post_excerpt', array(
         'default'        => 'short',        
    ) );    

    $wp_customize->add_control( 'downbeat_post_excerpt', array(
        'label'   => __('Excerpt Length', 'downbeat' ),
        'section' => 'downbeat_home_settings',
        'type'    => 'select',
        'choices'    => array(
            'short' => __('Short', 'downbeat' ),     
            'medium' => __('Medium', 'downbeat' ),               
            'long' => __('Long', 'downbeat' ), 
            'full' => __('Full Post', 'downbeat' ),
            ),
    ) );    

}

function downbeat_layout_customize($wp_customize) {
 
    $wp_customize->add_section( 'downbeat_layout_settings', array(
        'title'          => __('Layout Options', 'downbeat' ),
        'priority'       => 37,
        'description'     => __('Set options for how various content regions are displayed.', 'downbeat' ),        
    ) );

    $wp_customize->add_setting( 'downbeat_layout', array(
         'default'        => 'left',        
    ) );    

	$wp_customize->add_control( 'downbeat_layout', array(
	    'label'   => __('Preferred Layout', 'downbeat' ),
        'section' => 'downbeat_layout_settings',
	    'type'    => 'select',
	    'choices'    => array(
	        'left' => __('Left Content', 'downbeat' ),    	
	        'right' => __('Right Content', 'downbeat' ),
	        'full' => __('Full Width', 'downbeat' ),
	        ),
	) );    

    $wp_customize->add_setting( 'downbeat_footer_widgets', array(
         'default'        => 'yes',        
    ) );    

    $wp_customize->add_control( 'downbeat_footer_widgets', array(
        'label'   => __('Use Footer Widgets?', 'downbeat' ),
        'section' => 'downbeat_layout_settings',
        'type'    => 'select',
        'choices'    => array(
            'yes' => __('Yes', 'downbeat' ),      
            'no' => __('No', 'downbeat' ),
            ),
    ) );        
 
}

function downbeat_post_customize($wp_customize) {
 
    $wp_customize->add_section( 'downbeat_post_settings', array(
        'title'          => __('Post Options', 'downbeat' ),
        'priority'       => 38,
        'description'     => __('Set options for the post related content and meta.', 'downbeat' ),                
    ) );

    $wp_customize->add_setting( 'downbeat_tags', array(
    	'default' => 'yes'
    ) );    

	$wp_customize->add_control( 'downbeat_tags', array(
	    'label'   => __('Use Tags in Post?', 'downbeat' ),
        'section' => 'downbeat_post_settings',
	    'type'    => 'select',
	    'choices'    => array(
	        'yes' => __('Yes', 'downbeat' ),    	
	        'no' => __('No', 'downbeat' ),
	        ),
	) );    

    $wp_customize->add_setting( 'downbeat_featured_image', array(
        'default' => 'no'
    ) );    

    $wp_customize->add_control( 'downbeat_featured_image', array(
        'label'   => __('Display Featured Image in Post?', 'downbeat' ),
        'section' => 'downbeat_post_settings',
        'type'    => 'select',
        'choices'    => array(
            'no' => __('No', 'downbeat' ),            
            'yes' => __('Yes', 'downbeat' ),        
            ),
    ) );        
 
}

function downbeat_customize_preview() { ?>
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