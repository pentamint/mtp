<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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

		<div id="primary" class="content-area">
			<main id="main" class="site-main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header><!-- .page-header -->

			<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content', get_post_type() );

				endwhile;

				// the_posts_navigation();

				the_posts_pagination( array(
					'mid_size'  => 2,
					'prev_text' => __( '이전글 보기', 'textdomain' ),
					'next_text' => __( '다음글 보기', 'textdomain' ),
				) );

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
				<?php if ( is_active_sidebar ( 'trusted-site-1' ) ) : ?>
					<!-- #trusted-site-widget-1 -->
					<div id="trusted-site-widget-1" class="content-widget widget-area" role="complementary">
						<?php dynamic_sidebar ( 'trusted-site-1' ); ?>
					</div>
				<?php endif; ?>
				<?php if ( is_active_sidebar ( 'trusted-site-2' ) ) : ?>
					<!-- #trusted-site-widget-2 -->
					<div id="trusted-site-widget-2" class="content-widget widget-area" role="complementary">
						<?php dynamic_sidebar ( 'trusted-site-2' ); ?>
					</div>
				<?php endif; ?>
				<?php if ( is_active_sidebar ( 'trusted-site-3' ) ) : ?>
					<!-- #trusted-site-widget-3 -->
					<div id="trusted-site-widget-3" class="content-widget widget-area" role="complementary">
						<?php dynamic_sidebar ( 'trusted-site-3' ); ?>
					</div>
				<?php endif; ?>
				<?php if ( is_active_sidebar ( 'trusted-site-4' ) ) : ?>
					<!-- #trusted-site-widget-4 -->
					<div id="trusted-site-widget-4" class="content-widget widget-area" role="complementary">
						<?php dynamic_sidebar ( 'trusted-site-4' ); ?>
					</div>
				<?php endif; ?>
			</main><!-- #main -->

			<?php get_sidebar(); ?>

		</div><!-- #primary -->

<?php
get_footer();
