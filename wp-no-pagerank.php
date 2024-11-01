<?php
/*
Plugin Name: WordPress No Pagerank
Plugin URI: http://elliottback.com/wp/archives/2005/01/19/wp-no-pagerank/
Description: Adds rel="nofollow" to comment links, rendering them useless for spammers.
Author: Elliott Back
Author URI: http://elliottback.com
Version: 1.0
*/ 

function wp_no_pagerank_check_text($comment) {
	return str_replace('<a ', '<a rel="nofollow" ', $comment);
}

function wp_no_pagerank_check_author($url){
	return $url . "' rel='nofollow";
}

add_filter('comment_text', 'wp_no_pagerank_check_text');
add_filter('comment_url', 'wp_no_pagerank_check_author');
?>