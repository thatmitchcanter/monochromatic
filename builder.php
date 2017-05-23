<?php
/**
 * Template Name: Builder Page
 * Description: Use with Beaver Builder.
 * @package WordPress
 * @subpackage monochromatic
 */

/* Meta, Title, Responsive, and Document Setup Tags */
get_header();
	
/* Top Content Area (#header) */
get_template_part( 'top', 'index' ); 
	
/* Navigation Area (#navigation) */        
get_template_part( 'menu', 'index' ); ?>
    
<section id="builder-content">


				<?php get_template_part( 'loop', 'builder' ); //the Loop ?>

</section>

<?php
/* Lower Footer Widgets (#footer_widgets) */                 
get_template_part( 'footer_widgets', 'index' ); 

/* Lower Content Area (#footer) */                 
get_template_part( 'bottom', 'index' );     
	   
/* Lower Script Calls & Meta */                             
get_footer();
?>          