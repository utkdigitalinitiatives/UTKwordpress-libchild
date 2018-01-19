<?php
/**
 * Bottom Center Sidebar for Main Home
 *
 */
?>
<!-- Begin Bottom Center Sidebar for Main Home -->
	<div class="widget-area" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-home-center' ) ) : ?>

		<?php endif; // end sidebar widget area ?>
	</div>
	<!-- End Bottom Center Sidebar for Main Home -->
