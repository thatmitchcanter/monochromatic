<?php
/**
 * @package WordPress
 * @subpackage monochromatic
 */
 ?>   
<ul id="sidebar">
	<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
    <?php dynamic_sidebar( 'right-sidebar' ); ?>
    <?php else : ?>
        <p>Widgets here are controlled in the "Right Sidebar" widget area.</p>
    <?php endif; ?>
</ul>