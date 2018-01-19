<?php
/**
 * Bottom Left Sidebar for Main Home
 *
 */
?>
	<div class="widget-area" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-home-left' ) ) : ?>

		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
