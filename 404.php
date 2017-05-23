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
    get_template_part( 'navigation', 'index' ); ?>

    <section id="content">
        <div class="row">
            <main id="main">
            <h1>Uh Oh! Page Not Found!</h1>
            <p>We're really, really sorry, but you've come across a page that doesn't exist!  Maybe it used to exist, and it doesn't now.  Or maybe it never existed, and you made a mistake (it's ok, it happens).</p>
            <p>Regardless, we still like you.  Use the back button to come from whence you came, or explore the site using the navigation items.  Thanks for stopping by!</p>
            </main>
        </div>
    </section>
   
<?php             
    get_template_part( 'footer_widgets', 'index' ); 
    
	/* Lower Content Area (#footer) */                 
    get_template_part( 'bottom', 'index' );     
           
	/* Lower Script Calls & Meta */                             
    get_footer();
   
?>         