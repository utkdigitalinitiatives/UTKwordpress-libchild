
<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage UT-TheHill
 * @since Twenty Thirteen 1.0
 */
?>

    <?php if ( is_active_sidebar( 'sidebar-3' ) ||  is_active_sidebar( 'sidebar-4' ) ||  is_active_sidebar( 'sidebar-5' )  ) : ?>
      <div id="linkdrawer" <?php utthehill_footer_sidebar_class(); ?>>
        <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
          <div id="first" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'sidebar-3' ); ?>
          </div><!-- #first .widget-area -->
        <?php endif; ?>
        <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
          <div id="second" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'sidebar-4' ); ?>
          </div><!-- #second .widget-area -->
        <?php endif; ?>
        <?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
          <div id="third" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'sidebar-5' ); ?>
          </div><!-- #third .widget-area -->
        <?php endif; ?>
      </div><!-- #linkdrawer -->
    <?php endif; ?>





	</div><!-- #primary -->
	
</div><!-- .main-content -->
<!--
<?php if ( function_exists('yoast_breadcrumb') ) 
{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
-->
<!--  begin footer include -->
<?php include("https://www.lib.utk.edu/template/2016/includes-utlibraries/footer.php"); ?>
<!--  end footer include -->
</div><!-- #main -->

  <div id="system-indicia">
    <p>The flagship campus of <a href="http://tennessee.edu">the University of Tennessee System</a> and partner in <a href="http://www.tntransferpathway.org/">the Tennessee Transfer Pathway</a>.</p>
  </div>

</div><!-- #page -->



	<?php wp_footer(); ?>

		</body>
</html>