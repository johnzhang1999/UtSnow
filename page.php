<?php get_header(); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  <div class="row">
		<div class="col-md-10 col-md-offset-1">
			<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>	
			<hr>
			<psize><?php the_content(); ?></psize>
			<hr>
			<?php comments_template(); ?>
		</div>
		
	</div>

<?php endwhile; else: ?>
	<p><?php _e('(⊙o⊙)…没有文章喔……'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>