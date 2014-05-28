<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php // Insert Single Page Data Below ?>

<?php endwhile; endif; ?>
<?php get_footer(); ?>