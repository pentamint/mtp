<?php
/**
 * 게시판 모양으로 표현하기 위한 템플릿
 *
 * @package OceanWP WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<ul class="blog-entry-inner bbs_body">
		<li class="blog-entry-header bbs_title bbs_li">
			<h2 class="blog-entry-title entry-title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2>
		</li>

		<li class="meta-author bbs_author bbs_li"<?php oceanwp_schema_markup( 'author_name' ); ?>>
			<?php echo the_author_posts_link(); ?>
		</li>

		<li class="meta-date bbs_date bbs_li"<?php oceanwp_schema_markup( 'publish_date' ); ?>>
			<?php echo get_the_date( 'Y.m.d' ); ?>
		</li>


	</ul><!-- .blog-entry-inner -->
</article>