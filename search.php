<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<section id="primary" class="site-content">
		

			<?php if ( have_posts() ) : ?>

			
			<div id="content" class="post-main" role="main">
				<header class="page-header">
					<h1 class="page-title"><?php printf( 'Search Results for: %s', get_search_query() ); ?></h1>
				</header><!-- .page-header -->
			<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
			?>
			<div class="post" id="post-<?php the_ID();?>">
				<div class="post-all-content">
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
				</div><!--post-all-content-->
			</div><!--post-->
			<?php
					endwhile;
					

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>
			
			<div style="clear:both"/>
		</div><!-- #content -->

	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
