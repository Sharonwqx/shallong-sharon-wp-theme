<?php get_header(); ?>
<?php get_sidebar(); ?>

	

	   <div class="post-main">
		<?php if(have_posts()):
				while (have_posts()): the_post(); ?>
				
		<div class="post" id="post-<?php the_ID();?>">
			<div class="post-header">
				<h2><a class="title" href="<?php the_permalink();  ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title()?></a></h2>
			
			</div>
			<div class="info">
				<span class="date"><?php the_time('F j,Y h:i a');?></span>
				<?php if($options['author']): ?>
				<span class="author">
					<?php the_author_posts_link(); ?>
				</span>
				<?php endif;?>
				<?php edit_post_link('edit', '<span class="editpost">', '</span>');?>
				<span class="comments">
					<?php comments_popup_link('no comment', '1  comment', '% comments', 'Comments off') ;?>
				</span>
				
				<div class="fixed"></div>

			</div>
			<div class="content">
				<?php the_content("read more"); ?>
			</div>
			<div class="under">
				<span class="categories">Categories</span>
				<span><?php the_category(','); ?></span>
			</div>
		</div>

		<?php endwhile;else: ?>
			<div class="errorbox">
				No posts
			</div>
		<?php endif; ?>
		<div id="pageavi">
			<?php if(function_exists(wp_pagenavi)): ?>
			<?php wp_pagenavi(); ?>
			<?php else: ?>
			<span class="newer"><?php previous_posts_link('previous'); ?></span>
			<span class="older"><?php next_posts_link('next'); ?></span>
			<?php endif; ?>
		</div>
			
      </div>

	

	
<?php get_footer(); ?>