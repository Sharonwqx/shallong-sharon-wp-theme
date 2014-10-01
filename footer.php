<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<div style="clear:both"></div>
	<footer id="colophon" class="site-footer" role="contentinfo">

		<?php get_sidebar( 'footer' ); ?>
		By Sharon-Shallong 
	</footer><!-- #colophon -->

	<div style="clear:both"></div>
	<?php wp_footer(); ?>
</div> <!--End row-->

</body>
</html>