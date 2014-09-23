
<section class="sidebar">
	<div class="sideContent">
		<?php dynamic_sidebar('index');?>
		<!--
		<ul>
			<li>
				<?php get_search_form(); ?>
			</li>
		</ul>
		<ul role=""navigation>
			<?php wp_list_pages('title_li=<h2>'.'Pages'.'</h2>'); ?>
			<li>
			<h2>Archives</h2>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>
			<?php wp_list_categories('show_count=1&title_li=<h2>'.'Categories'.'</h2>'); ?>
		</ul>
		<ul>
			<?php if(is_home()||is_page()) {?>
			<li>
				<h2>Meta</h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout();?></li>
				</ul>
			</li>
			<?php }?>
		</ul>
		-->
	</div>
</section>