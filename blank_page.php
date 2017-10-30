<?/*
Template Name: Blank Page
*/
?>

<?php get_header(); ?>
<main>
<div class="container">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <div class="post">
 
                <?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
                        <?php the_excerpt(); ?>
                <?php else : ?>
                        <?php the_content('Read More'); ?>
                <?php endif; ?>
 
                <div class="dots"></div>
            </div><!-- post -->

<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>	
                </main>
<?php get_footer(); ?>

