<?php
/*
Template Name: 하위 페이지로
*/

global $post;
$child_pages = get_pages( 'child_of=' . $post->ID . '&sort_column=menu_order' );

if( $child_pages ) {
    $first_child = $child_pages[0];
    wp_redirect( get_permalink($first_child->ID) );
    exit;
}
else {
    $redirect_url = get_post_meta( $post->ID, 'redirect_url', true );
    if( $redirect_url ) {
        wp_redirect( $redirect_url );
        exit;
    }
    else {
        wp_redirect( home_url() );
        exit;
    }    
}