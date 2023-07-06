<?php get_header(); ?>

<?php global $wp_query ?>

<section class="search-result">
	<div class="content-width content-mini">
		<h1><?= $wp_query->found_posts ?> <?php _e('תוצאות', 'President') ?></h1>
		<div class="form-wrap">
			
			<?php get_search_form() ?>

		</div>
		<div class="content">

			<?php if ( have_posts() ) :
				while ( have_posts() ) : the_post(); ?>

					<?php get_template_part('parts/content', 'post_search') ?>

				<?php endwhile; ?>
			<?php endif; ?>

			<?php get_template_part('parts/pagination') ?>

		</div>
	</div>
</section>

<?php get_footer(); ?>