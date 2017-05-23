<?php
/**
 * Template Name: Full-width Page (No Sidebar)
 * Description: A full-width template with no sidebar
 *
 * @package WordPress
 * @subpackage monochromatic
 */

/* Meta, Title, Responsive, and Document Setup Tags */
get_header();
	
/* Top Content Area (#header) */
get_template_part( 'top', 'index' ); 
	
/* Navigation Area (#navigation) */        
get_template_part( 'menu', 'index' ); ?>
    
<section id="content">
	<div class="row">
		<main id="primary" class="full-width">
			<div id="full_content">

				<?php get_template_part( 'loop', 'index' ); //the Loop ?>

			</div><!-- #full_content -->
		</main><!-- #primary -->
	</div>  

</section>
<?php
/* Lower Footer Widgets (#footer_widgets) */                 
get_template_part( 'footer_widgets', 'index' ); 

/* Lower Content Area (#footer) */                 
get_template_part( 'bottom', 'index' );     
	   
/* Lower Script Calls & Meta */                             
get_footer();
?>          