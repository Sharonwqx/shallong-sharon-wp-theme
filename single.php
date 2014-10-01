<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); 
?>

	
		<section id="content" class="post-main  col-sm-6 col-sm-offset-3" role="main">
			
				<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

				?>
					<div class="post">
						<div class="post-all-content">
							<div class="postheader">
								<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" /><?php the_title(); ?></a></h2>
							</div>
							<?php the_content(); ?>
							<?php wp_link_pages(); ?>
							<div class="pagination">
								<?php previous_post_link( '<div class="alignleft">&laquo; %link</div>' ); ?>
								<?php next_post_link( '<div class="alignright">%link &raquo;</div>' ); ?>
							</div>
							<div style="clear:both"></div>
						<?php
								
									comments_template();
								
							endwhile;
						?>
						</div>	<!-- #post-all-content -->	
					</div>
			
		</section><!-- #content -->
	

<?php
get_sidebar();
get_footer();
?>