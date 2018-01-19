<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage UT-TheHill
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<? 
  $home_url = home_url();
  $search_term = substr($_SERVER['REQUEST_URI'],1);
  $search_term = urldecode(stripslashes($search_term));
//  $search_term = 'blog';
  $search_url = $home_url . "/". $search_term;
  $search_term = str_replace('/', ' ', $search_term);
  $search_term = str_replace('-', ' ', $search_term);
//  $full_search_url = $search_url . $search_term;
//  $full_search_url = preg_replace('/ /', '%20', $full_search_url);
//  $full_page = implode("", file($full_search_url));
//  print_r($full_page); die();
?>



		<div id="content" class="site-content wide" role="main">

			<div class="page-wrapper">
				<div class="page-content">
					<h2><?php _e( 'Page Not Found', 'utthehill' ); ?></h2>
          <h4><?php _e( 'We&rsquo;re sorry. It looks like nothing was found at this location.', 'utthehill' ); ?></h4>

          <div class="one-third column">
            <img src="<?php echo get_template_directory_uri(); ?>/images/interface/404.jpg" class="alignleft size-full" alt="Image of Smokey encouraging us to find the page.">
          </div>


          <div class="two-thirds column">

								<h3>Please use our <a href="http://www.lib.utk.edu/contact/website-feedback/">website feedback form</a>  to provide a description of what you were looking for and we will be glad to help you find it.</h3>
        

          </div>
<?php

$s=get_search_query();
$args = array(
                's' => $search_term
            );


    // The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
//  echo( "<div class=\"box-light\">");
  echo( "<hr>");
        _e("<h4>Here are some pages that you may  be looking for, based upon the URL containing  &ldquo;". $search_term .".&rdquo;</h4>", "utthehill");
  echo( "<ul>");
        while ( $the_query->have_posts() ) {
           $the_query->the_post();
                 ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                 <?php
        }
  echo( "</ul>");
 // echo( "</div>");
    }else{

   } ?>
  <hr>
  
  
<br class="clear">


				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->
		</div>

<?php get_footer(); ?>