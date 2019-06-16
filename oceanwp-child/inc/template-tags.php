<?php

/*--------------------------------------
 * 댓글 커스텀, 숏코드
 *--------------------------------------*/
function rk_comments_list( $atts ) {

	extract( shortcode_atts(array(
        'list_count' => 5,
        'trim_contents' => 6,
        'trim_meta' => 3
	), $atts) );

    $args = array(
        'number' => $list_count,
        'status' => 'approve'
    );
    $comments_query = new WP_Comment_Query;
    $comments = $comments_query->query( $args );

    $html = '<ul class="short_comments_list">';

    foreach ( $comments as $comment ) {
        $html .= '<li><a href="' . esc_url( get_permalink($comment->comment_post_ID) . '#comment-' . $comment->comment_ID ) . '" rel="bookmark">' . wp_trim_words( wp_strip_all_tags($comment->comment_content), $trim_contents ) . '</a><span class="comment-meta">(' . $comment->comment_author . ': ' . wp_trim_words( get_the_title($comment->comment_post_ID), $trim_meta ) . ')</span></li>';
    }

    return $html . '</ul>';
}
add_shortcode('rk-get-comments', 'rk_comments_list');


/*--------------------------------------
 * 최근 글 목록 by 카테고리
 *--------------------------------------*/
function rk_recent_by_category( $atts ) {

    extract( shortcode_atts(array(
        'list_count' => 10,
        'trim_contents' => 6,
        'cat' => '검증업체'
	), $atts) );

    $args = array(
        'posts_per_page' => $list_count,
        'category_name' => $cat,
        'post_status' => 'publish'
    );
    $recent_query = new WP_Query($args);

    $html = '';

    if( $recent_query->have_posts() ) {
        $html .= '<ul class="short_recent_list">';
        while ( $recent_query->have_posts() ) {
            $recent_query->the_post();
            $html .= '<li><h5 class="recent-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h5></li>';
        }
        $html .= '</ul>';
        wp_reset_postdata();
    }

    return $html;

}
add_shortcode('rk-get-recent', 'rk_recent_by_category');


/*--------------------------------------
 * 플러그인 > 로그인아웃
 *--------------------------------------*/
function rk_login_out( $atts ) {

	extract( shortcode_atts(array(
        'redirect_url' => home_url()
    ), $atts) );
    
    if( is_user_logged_in() ) {
        $html = '<a href="' . esc_url( wp_logout_url(home_url()) ) . '">로그아웃</a> <span class="seperator">|</span>';
    }
    else {
        $html = '<a href="https://www.mt-police.com/로그인/">로그인</a> <span class="seperator">|</span> <a href="https://www.mt-police.com/회원가입/">회원가입</a>';
    }   

    return $html;
}
add_shortcode( 'rk-loginout', 'rk_login_out' );