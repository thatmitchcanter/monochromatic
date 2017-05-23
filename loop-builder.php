<?php
/**
 * @package WordPress
 * @subpackage Downbeat
 */
?>
<?php downbeat_before_loop(); ?>	
<?php while ( have_posts() ) : the_post(); ?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <section class="entry">
	<?php if (is_singular()) { the_content("Continue reading " . the_title('', '', false));  
			 } else { ?>
              <?php if ( get_theme_mod( 'downbeat_post_excerpt' ) == "short") : ?>
			  		<p><?php echo wp_trim_words( get_the_content() , '55' ); ?></p>
              <?php elseif ( get_theme_mod( 'downbeat_post_excerpt' ) == "medium") : ?>
			  		<p><?php echo wp_trim_words( get_the_content() , '110' ); ?></p>
              <?php elseif ( get_theme_mod( 'downbeat_post_excerpt' ) == "long") : ?>
			  		<p><?php echo wp_trim_words( get_the_content() , '165' ); ?></p>		
              <?php else : ?>
	           		<?php the_content("Continue reading " . the_title('', '', false)); ?>
              <?php endif; ?>
	<?php } ?>
    </section>
</article>
<?php endwhile; ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	<nav id="nav-below">
		<div class="nav-previous"><?php next_posts_link(); ?></div>
		<div class="nav-next"><?php previous_posts_link(); ?></div>
	</nav><!-- #nav-below -->
<?php endif; ?>

<?php /* Only load comments on single post */ ?>
<?php if(is_single()) : comments_template( '', true ); endif; ?>
<?php downbeat_after_loop(); ?>