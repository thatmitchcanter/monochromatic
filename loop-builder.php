<?php
/**
 * @package WordPress
 * @subpackage monochromatic
 */
?>
<?php monochromatic_before_loop(); ?>	
<?php while ( have_posts() ) : the_post(); ?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <section class="entry">
	<?php if (is_singular()) { the_content("Continue reading " . the_title('', '', false));  
			 } else { ?>
              <?php if ( get_theme_mod( 'monochromatic_post_excerpt' ) == "short") : ?>
			  		<p><?php echo wp_trim_words( get_the_content() , '55' ); ?></p>
              <?php elseif ( get_theme_mod( 'monochromatic_post_excerpt' ) == "medium") : ?>
			  		<p><?php echo wp_trim_words( get_the_content() , '110' ); ?></p>
              <?php elseif ( get_theme_mod( 'monochromatic_post_excerpt' ) == "long") : ?>
			  		<p><?php echo wp_trim_words( get_the_content() , '165' ); ?></p>		
              <?php else : ?>
	           		<?php the_content("Continue reading " . the_title('', '', false)); ?>
              <?php endif; ?>
	<?php } ?>
    </section>
</article>
<?php endwhile; ?>
<?php monochromatic_after_loop(); ?>