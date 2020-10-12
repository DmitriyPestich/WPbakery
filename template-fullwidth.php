<?php
/*
  * Template name: Page Full Width
  * */
get_header(); ?>

	<div class="full-width-page flex_container">
		<div class="story ale_blog_archive content cf">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


				<?php the_content(); ?>

			<?php endwhile; endif; ?>

			<?php if (comments_open()) : ?>
				<?php comments_template(); ?>
			<?php endif; ?>
		</div>
	</div>
<?php get_footer(); ?>