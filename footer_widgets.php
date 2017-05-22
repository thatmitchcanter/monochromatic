<?php
/**
 * @package WordPress
 * @subpackage Downbeat
 */
 ?>  
<?php if ( get_theme_mod( 'downbeat_footer_widgets' ) == "yes") : ?> 
	<section id="footer_widgets">
	<div class="container">
	<div class="row">
		<?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>
	    <?php dynamic_sidebar( 'footer-sidebar' ); ?>
	    <?php else : ?>
	        <p>Widgets here are controlled in the "Footer Sidebar" widget area.</p>
	    <?php endif; ?>  
	    <!--clearing break-->
	    <br class="clear" />     
	</div>
	</div>
	</section>
<?php endif; ?> 