<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package MTP
 */

get_header();
?>

	<!-- Custom Code -->
	<?php if ( is_active_sidebar ( 'fullwidth-header-banner' ) ) : ?>
		<div class="header-widget header-banner" role="complementary">
			<div class="wrapper container">
				<div class="header-banner-content row">
					<h2 class="archive-title">
						<?php $category = get_the_category(); echo $category[0]-> cat_name; ?>
					</h2>
					<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
				</div>
				<?php dynamic_sidebar ( 'fullwidth-header-banner' ); ?>
			</div>
		</div>
	<?php endif; ?>
	<!-- Custom Code -->

<div class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'mtp' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'mtp' ); ?></p>

					<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'mtp' ); ?></h2>
						<ul>
							<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
							?>
						</ul>
					</div><!-- .widget -->

					<?php
					/* translators: %1$s: smiley */
					$mtp_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'mtp' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$mtp_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .container -->

<?php
get_footer();
