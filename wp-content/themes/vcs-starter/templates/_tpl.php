<?php

/* Template Name: With left-sidebar */

get_header();

?>
<?php
echo apply_filters('the_content',$wp_query->post->post_content);
?>	

 
<?php get_footer(); ?>