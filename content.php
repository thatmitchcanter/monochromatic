<?php
/**
 * @package WordPress
 * @subpackage monochrome
 */
 ?>  
<section id="content">
    <?php if ( get_theme_mod( 'monochrome_layout' ) == "right") { ?>
    <div class="row">
	    <aside id="side">
	        <?php get_template_part( 'sidebar', 'index' ); //the Sidebar ?>
	    </aside>
	    <main id="main">
	        <?php get_template_part( 'loop', 'index' ); //the Loop ?>
	    </main>	    
	    <!--clearing break-->
	    <br class="clear" />
	 </div>
	<?php } elseif ( get_theme_mod( 'monochrome_layout' ) == "full") { ?>
    <div class="row">	
	    <main id="main">
	        <?php get_template_part( 'loop', 'index' ); //the Loop ?>
	    </div>
 	</div>    
	<?php } else { ?>
    <div class="row">		
	    <main id="main">
	        <?php get_template_part( 'loop', 'index' ); //the Loop ?>
	    </main>
	    <aside id="side">
	        <?php get_template_part( 'sidebar', 'index' ); //the Sidebar ?>
	    </aside>
	    <!--clearing break-->
	    <br class="clear" />
	</div>
	<?php } ?>
</section>