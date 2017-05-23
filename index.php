<?php
/**
 * @package WordPress
 * @subpackage monochrome
 */
 
 	/* Meta, Title, Responsive, and Document Setup Tags */
    get_header();
        
	/* Top Content Area (#header) */
    get_template_part( 'top', 'index' ); 
        
	/* Navigation Area (#navigation) */        
    get_template_part( 'navigation', 'index' );

	/* Main Content (#content and #sidebar) */            
    get_template_part( 'content', 'index' ); 

	/* Lower Footer Widgets (#footer_widgets) */                 
    get_template_part( 'footer_widgets', 'index' ); 
    
	/* Lower Content Area (#footer) */                 
    get_template_part( 'bottom', 'index' );     
           
	/* Lower Script Calls & Meta */                             
    get_footer();
   
?>         