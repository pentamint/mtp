<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
					<?php the_title( '<h2 class="page-title">', '</h2>' ); ?>
					<div class="page_description">
						<span>먹튀폴리스는 철저한 검증을 토대로 악덕 먹튀사이트를 고발하고 2차피해를 방지하기위해 최선을 다하고 있습니다. 사용 중 먹튀 피해를 당하셨다면사이트 제보 및 신고 부탁 드립니다. 먹튀제보를 통하여 토토사이트 이용법에 대한 올바른 상담 및, 위로금 등을 지급받으실 수 있습니다. 제보 시, 반드시 공지사항에 먹튀제보방법 을 참고하여 제보해주시기 바랍니다.</span>
					</div>
				</div>
				<?php dynamic_sidebar ( 'fullwidth-header-banner' ); ?>
			</div>
		</div>
	<?php endif; ?>
	<div class="wise-chat-mobile-wrapper">
		<div class="wise-chat-room">
			<?php echo do_shortcode( '[wise-chat channel="먹폴 라이브 채팅방"]' ); ?>
		</div>
		<button type="button" class="btn btn-secondary wise-chat-caller">
			<span class="chat-open-text">먹폴 채팅방</span>
		</button>
	</div>
	<!-- Custom Code -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

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

		<?php get_sidebar(); ?>

	</div><!-- #primary -->

<?php
get_footer();

