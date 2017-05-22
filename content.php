<?php
/**
 * @package WordPress
 * @subpackage Downbeat
 */
 ?>  
<section id="content">
<div class="container">
    <?php if ( get_theme_mod( 'downbeat_layout' ) == "right") { ?>
    <div class="row">
	    <div class="one-third column alpha" id="side">
	        <?php get_template_part( 'sidebar', 'index' ); //the Sidebar ?>
	    </div>
	    <div class="two-thirds column omega" id="main">
	        <?php get_template_part( 'loop', 'index' ); //the Loop ?>
	    </div>	    
	    <!--clearing break-->
	    <br class="clear" />
	 </div>
	<?php } elseif ( get_theme_mod( 'downbeat_layout' ) == "full") { ?>
    <div class="row">	
	    <div class="sixteen columns alpha omega" id="main">
	        <?php get_template_part( 'loop', 'index' ); //the Loop ?>
	    </div>
 	</div>    
	<?php } else { ?>
    <div class="row">		
	    <div class="two-thirds column alpha" id="main">
	        <?php get_template_part( 'loop', 'index' ); //the Loop ?>
	    </div>
	    <div class="one-third column omega" id="side">
	        <?php get_template_part( 'sidebar', 'index' ); //the Sidebar ?>
	    </div>
	    <!--clearing break-->
	    <br class="clear" />
	</div>
	<?php } ?>

</div>
</section>