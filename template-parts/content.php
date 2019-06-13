<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Paris_Baguette_Biz
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php paris_baguette_biz_post_thumbnail(); ?>
	
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				paris_baguette_biz_posted_on();
				paris_baguette_biz_posted_by();
				?>

				<!-- Custom Code -->
				<div class="comment-wrapper">
					<img class="comment-icon" src="/wp-content/uploads/2019/06/detail-chat.png" alt="먹튀폴리스 댓글 아이콘">
					<p>
						<?php comments_number( '댓글 없음', '한개의 댓글', '%개의 댓글' ); ?>.
					</p>
				</div>
				<!-- Custom Code End -->

			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'paris-baguette-biz' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'paris-baguette-biz' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php paris_baguette_biz_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->