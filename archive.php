<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Fourteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<section id="primary" class="site-content">
		

			<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
						if ( is_day() ) :
							printf( __( 'Daily Archives: %s', 'sharon-shallong' ), get_the_date() );

						elseif ( is_month() ) :
							printf( __( 'Monthly Archives: %s', 'sharon-shallong' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyfourteen' ) ) );

						elseif ( is_year() ) :
							printf( __( 'Yearly Archives: %s', 'sharon-shallong' ), get_the_date( _x( 'Y', 'yearly archives date format', 'sharon-shallong' ) ) );

						else :
							_e( 'Archives', 'sharon-shallong' );

						endif;
					?>
				</h1>
			</header><!-- .page-header -->

			<div id="content" class="post-main" role="main">
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
