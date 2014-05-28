<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php // Insert Post Data Below ?>

<?php endwhile; ?>
<?php // Insert Post Navigation Below ?>

<?php else: ?>
<?php // Insert No Posts Found Content Below ?>

<?php endif; ?>
<?php get_footer(); ?>