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

				<!-- 카테고리 배너 -->
				<a href="http://www.mt-police.com/livescore/스포츠중계-해외축구중계-mlb중계-nba중계/" class="cat-banner"><img src="https://www.mt-police.com/wp-content/uploads/2019/06/gongji-opt-833X121.gif" alt="토토사이트 배너"></a>

				<ul class="tab-btn-wrap">
                    <li class="tab-btn"><a href="https://www.mt-police.com/토토사이트-스포츠분석/">All</a></li>
                    <li class="tab-btn"><a href="https://www.mt-police.com/cat/166/tag/축구/">축구</a></li>
                    <li class="tab-btn"><a href="https://www.mt-police.com/cat/166/tag/야구/">야구</a></li>
                    <li class="tab-btn"><a href="https://www.mt-police.com/cat/166/tag/농구/">농구</a></li>
                    <li class="tab-btn"><a href="https://www.mt-police.com/cat/166/tag/배구/">배구</a></li>
                    <li class="tab-btn"><a href="https://www.mt-police.com/cat/166/tag/하키/">하키</a></li>
                </ul>

				<ul class="bbs_head">
					<li class="bbs_title bbs_li">제목</li>
					<li class="bbs_author bbs_li">작성자</li>
					<li class="bbs_date bbs_li">작성일</li>
				</ul>

			<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					//get_template_part( 'template-parts/content', get_post_type() );

					get_template_part( 'template-parts/bbs_list' );

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
				<?php if ( is_active_sidebar ( 'sports-analysis-1' ) ) : ?>
					<!-- #sports-analysis-widget-1 -->
					<div id="sports-analysis-widget-1" class="content-widget widget-area" role="complementary">
						<?php dynamic_sidebar ( 'sports-analysis-1' ); ?>
					</div>
				<?php endif; ?>
				<?php if ( is_active_sidebar ( 'sports-analysis-2' ) ) : ?>
					<!-- #sports-analysis-widget-2 -->
					<div id="sports-analysis-widget-2" class="content-widget widget-area" role="complementary">
						<?php dynamic_sidebar ( 'sports-analysis-2' ); ?>
					</div>
				<?php endif; ?>
				<?php if ( is_active_sidebar ( 'sports-analysis-3' ) ) : ?>
					<!-- #sports-analysis-widget-3 -->
					<div id="sports-analysis-widget-3" class="content-widget widget-area" role="complementary">
						<?php dynamic_sidebar ( 'sports-analysis-3' ); ?>
					</div>
				<?php endif; ?>
				<?php if ( is_active_sidebar ( 'sports-analysis-4' ) ) : ?>
					<!-- #sports-analysis-widget-4 -->
					<div id="sports-analysis-widget-4" class="content-widget widget-area" role="complementary">
						<?php dynamic_sidebar ( 'sports-analysis-4' ); ?>
					</div>
				<?php endif; ?>
			</main><!-- #main -->

			<?php get_sidebar(); ?>

		</div><!-- #primary -->

<?php
get_footer();
