<?php
/**
 * @package WordPress
 * @subpackage monochromatic
 */
if ( get_theme_mod( 'monochromatic_navigation' ) == "navbar") {
	if (has_nav_menu('navigation')) { ?>
	<nav class="navigation" id="nav">
	<div class="row">
		<div class="sixteen columns alpha omega">
		  <?php wp_nav_menu( array( 'theme_location' => 'navigation' ) ); ?>
		  <br class="clear" />
		</div>
	  <br class="clear" />
	</div>
	</nav>
	<?php }
} ?>