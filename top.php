<?php
/**
 * @package WordPress
 * @subpackage monochromatic
 */
?>

<header id="header">
	<div class="row">
		<div class="logo_container">
	    <a class="logo" href="<?php echo home_url(); ?>">
	    <?php if ( get_theme_mod( 'monochromatic_logo' ) ) : ?>
		    <div class='site-logo'>
		        <h1 class="remove-bottom site-title"><img class="scale-with-grid" src='<?php echo esc_url( get_theme_mod( 'monochromatic_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></h1>
		    </div>
		<?php else : ?>
		    <h1 class="remove-bottom site-title"><?php bloginfo('title'); ?></h1>
		    <!--<h5 class="site-description"><?php bloginfo('description'); ?></h5>-->
		<?php endif; ?>
	    </a>
	    </div>
	    <?php if ( get_theme_mod( 'monochromatic_navigation' ) == "header") { ?>
			<?php
			if (has_nav_menu('navigation')) { ?>
			<nav class="navigation" id="header-nav">
				  <?php wp_nav_menu( array( 'theme_location' => 'navigation' ) ); ?>
				  <br class="clear" />
			</nav>
			<?php } ?>
	    <?php } ?>
	</div>
</header>