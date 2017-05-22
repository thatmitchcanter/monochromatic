<?php
/**
 * @package WordPress
 * @subpackage Downbeat
 */
?>

<header id="header">
<div class="container">
<div class="row">
    <div class="sixteen columns alpha omega">
    <a class="logo" href="<?php echo home_url(); ?>">
    <?php if ( get_theme_mod( 'downbeat_logo' ) ) : ?>
	    <div class='site-logo'>
	        <h1 class="remove-bottom site-title"><img class="scale-with-grid" src='<?php echo esc_url( get_theme_mod( 'downbeat_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></h1>
	    </div>
	<?php else : ?>
	    <h1 class="remove-bottom site-title"><?php bloginfo('title'); ?></h1>
	    <h5 class="site-description"><?php bloginfo('description'); ?></h5>
	<?php endif; ?>
    </a>
    </div>
</div>
</div><!-- container -->
</header>