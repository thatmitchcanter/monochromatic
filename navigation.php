<?php
/**
 * @package WordPress
 * @subpackage Downbeat
 */
if (has_nav_menu('navigation')) { ?>
<nav class="navigation" id="nav">
<div class="container">
<div class="row">
	<div class="sixteen columns alpha omega">
	  <?php wp_nav_menu( array( 'theme_location' => 'navigation' ) ); ?>
	  <br class="clear" />
	</div>
  <br class="clear" />
</div>
</div>
</nav>
<?php } ?>