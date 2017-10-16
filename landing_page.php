<?/*
Template Name: Landing Page
*/
?>

<?php get_header(); ?>

  <main class="white">
    <section class="valign-wrapper logocont">

      <div id="particles-js" class="">
        

      </div>
      <div class="row">
          <div class="container">
            <img class="responsive-img col s10 offset-s1 center-align" src="<?php echo get_bloginfo('template_directory');?>/img/logo@600.png">
          </div>
      </div>

    </section>

    <section class="blue-grey darken-4">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="container white-text flow-text">

    <?php the_content('Read More'); ?>
</div>
<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
    </section>
    
    
  </main>

  <?php get_footer(); ?>
