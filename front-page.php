<?php
/**
 * The template for front page with no sidebar
 *
 * This is the template that displays only on static front page.
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PBBiz
 */

get_header();
?>

	<div id="primary" class="content-area" style="margin:0">
		<main id="main" class="site-main" style="margin:0">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
	<script type="text/javascript">
			// Unwrap container for no sidebar layout
			( function( $ ) {
				$(document).ready(function() {
					var contentDiv = $('#primary');
					if ( contentDiv.parent().is('.site-content > .container')) {
						contentDiv.unwrap();
					}
				});
			} )( jQuery );
    </script>

<?php
get_footer();


