<?php
/**
 * @package WordPress
 * @subpackage monochromatic
 */
?>
<?php monochromatic_before_loop(); ?>	
<?php while ( have_posts() ) : the_post(); ?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <a class="title-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title('<h3 class="post-title">', '</h3>'); ?></a>
    <?php if (!is_page()) { ?>
		<section class="pre-meta">
			<p>Posted by <?php the_author_posts_link(); ?> on <?php echo get_the_date(); ?></p>
		</section>
    <?php } ?>
    <?php if ( get_theme_mod( 'monochromatic_featured_image' ) == "yes") : ?>
    	<?php the_post_thumbnail(full); ?>
    <?php endif; ?>
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
	<?php wp_link_pages( $args ); ?>
    </section>
    <?php if (!is_page()) { ?>
		<section class="post-meta">
		    <?php if ( get_theme_mod( 'monochromatic_tags' ) == "yes") : ?>
				<p class="remove-bottom">Categories: <?php the_category(' '); ?> | <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>		    	
		    	<p><?php the_tags(); ?></p>
		    <?php else : ?>
				<p>Categories: <?php the_category(' '); ?> | <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
		    <?php endif; ?>
		</section>
    <?php } ?>
</article>
<?php endwhile; ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	<nav id="pagination">
		<?php
		global $wp_query;

		$big = 999999999; // need an unlikely integer

		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages
		) );
		?>
	</nav><!-- #nav-below -->
<?php endif; ?>

<?php /* Only load comments on single post */ ?>
<?php if(is_single()) : comments_template( '', true ); endif; ?>
<?php monochromatic_after_loop(); ?>