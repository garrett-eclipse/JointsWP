<?php
/*
Template Name: Full Width (No Sidebar)
*/

get_header(); ?>

<?php get_template_part( 'parts/wrapper', 'top-full' ); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php get_template_part( 'parts/loop', 'page' ); ?>

<?php endwhile; endif; ?>

<?php get_template_part( 'parts/wrapper', 'bottom-full' ); ?>

<?php get_footer(); ?>