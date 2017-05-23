<?php function monochrome_before_loop() {  

	if (is_archive()) { ?>

		<h2 class="page-title">
			<?php if ( is_day() ) : ?>
				<?php printf( __( 'Daily Archives: %s', 'index' ), '<span>' . get_the_date() . '</span>' ); ?>
			<?php elseif ( is_month() ) : ?>
				<?php printf( __( 'Monthly Archives: %s', 'index' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'index' ) ) . '</span>' ); ?>
			<?php elseif ( is_year() ) : ?>
				<?php printf( __( 'Yearly Archives: %s', 'index' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'index' ) ) . '</span>' ); ?>
			<?php elseif (is_category() ) : ?>
				<?php printf( __( 'Category Archive', 'index' ) ); ?>: <?php single_cat_title(); ?>
			<?php else : ?>
				<?php _e( 'Blog Archives', 'index' ); ?>
			<?php endif; ?>
		</h2>
					
	<?php }

}

function monochrome_after_loop() {

}