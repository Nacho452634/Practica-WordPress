<?php
/*
Template Name: Pàgina contacte
*/

get_header();

while (have_posts()){
    the_post();
    the_content();
}

get_footer();