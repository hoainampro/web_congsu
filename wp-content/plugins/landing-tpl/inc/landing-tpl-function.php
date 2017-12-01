<?php
/**
* Function for Plugin
*/
function get_field_landing($key,$postid = '')
{
  $pid = ($postid != '')?$postid:get_the_ID();
  $all_meta = get_post_meta($pid);
  return $all_meta[$key][0];
}

function the_field_landing($key,$postid = '')
{
  $pid = ($postid != '')?$postid:get_the_ID();
  $all_meta = get_post_meta($pid);
  print $all_meta[$key][0];
}