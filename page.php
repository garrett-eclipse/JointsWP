<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>

<?php get_template_part( 'parts/wrapper', 'top-sidebar' ); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php get_template_part( 'parts/loop', 'page' ); ?>

<?php endwhile; endif; ?>

<?php get_template_part( 'parts/wrapper', 'bottom-sidebar' ); ?>

<?php get_footer(); ?>