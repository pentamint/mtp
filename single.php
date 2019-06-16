<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
					<h2 class="page_title">
						먹튀폴리스
					</h2>
					<div class="page_description">
						<span>먹튀폴리스는 철저한 검증을 토대로 악덕 먹튀사이트를 고발하고 2차피해를 방지하기위해 최선을 다하고 있습니다. 사용 중 먹튀 피해를 당하셨다면사이트 제보 및 신고 부탁 드립니다. 먹튀제보를 통하여 토토사이트 이용법에 대한 올바른 상담 및, 위로금 등을 지급받으실 수 있습니다. 제보 시, 반드시 공지사항에 먹튀제보방법 을 참고하여 제보해주시기 바랍니다.</span>
					</div>
				</div>
				<?php dynamic_sidebar ( 'fullwidth-header-banner' ); ?>
			</div>
		</div>
	<?php endif; ?>
	<!-- Custom Code -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation( array(
				'prev_text'                  => __( '<span class="title">
														<i class="fas fa-chevron-left"></i>이전 글 보기
													</span>
													<span class="post-title">
														%title
													</span>' ),
				'next_text'                  => __( '<span class="title">
														<i class="fas fa-chevron-right"></i>다음 글 보기
													</span>
													<span class="post-title">
														%title
													</span>' ),
				'in_same_term'               => true,
				'taxonomy'                   => __( 'post_tag' ),
				'screen_reader_text' => __( '계속 보기' ),
			) );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

if (in_category('12')) {
	get_sidebar('excat');
}
elseif (in_category('11')) {
	get_sidebar('exres');
}
else {
	get_sidebar();
}
get_footer();
