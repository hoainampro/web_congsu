<?php
add_shortcode('list_social', 'list_social_func');
function list_social_func($atts, $content = null){
	return flex_social();
}
