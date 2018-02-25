<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

<?php get_template_part( 'parts/wrapper', 'top-sidebar' ); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php get_template_part( 'parts/loop', 'single' ); ?>

<?php endwhile; else : ?>

	<?php get_template_part( 'parts/content', 'missing' ); ?>

<?php endif; ?>

<?php get_template_part( 'parts/wrapper', 'bottom-sidebar' ); ?>

<?php get_footer(); ?>