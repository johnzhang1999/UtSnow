<?php get_header(); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  <div class="row">
		<div class="col-md-8 col-md-offset-1">
		<center>
		<?php 
if (has_post_thumbnail()) {
     // 显示特色图像
     the_post_thumbnail();
} else {
     // 设置特色图像
     $attachments = get_posts(array(
          'post_type' => 'attachment',
          'post_mime_type'=>'image',
          'posts_per_page' => 0,
          'post_parent' => $post->ID,
          'order'=>'ASC'
     ));
     if ($attachments) {
          foreach ($attachments as $attachment) {
               set_post_thumbnail($post->ID, $attachment->ID);
               break;
          }
          // 显示特色图像
          the_post_thumbnail();
     }
} ?>		
			<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>	
			——·&nbsp;&nbsp;&nbsp;<?php the_time('Y年n月j日') ?> | <?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?>&nbsp;&nbsp;&nbsp;·——
			</center>
			<hr>
			<psize><?php the_content(); ?></psize>
			<hr>
			<?php comments_template(); ?>
		</div>
		<div class="col-md-2">
			<?php get_sidebar(); ?>	
		</div>
	</div>

<?php endwhile; else: ?>
	<p><?php _e('(⊙o⊙)…没有文章喔……'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>