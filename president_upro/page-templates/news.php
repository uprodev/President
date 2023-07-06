<?php
/*
Template Name: News
*/
?>

<?php get_header(); ?>

<section class="lobby">
	<div class="before"></div>
	<div class="content-width content-mini">
		<h1 class="after"><?php the_title() ?></h1>
		<div class="content">

			<?php if ($field = get_field('main_post')): ?>
				<div class="big-item">
					<figure>
						<a href="<?php the_permalink($field->ID) ?>">

							<?php if (has_post_thumbnail($field->ID)): ?>
								<?= get_the_post_thumbnail($field->ID, 'full') ?>
							<?php endif ?>
							
							<?php if (get_the_content(null, null, $field->ID) && str_contains(get_the_content(null, null, $field->ID), '<video')): ?>
							<div class="icon-wrap">
								<img src="<?= get_stylesheet_directory_uri() ?>/img/icon-12.svg" alt="">
							</div>
						<?php endif ?>

					</a>

					<div class="wrap">
						<h2>
							<a href="<?php the_permalink($field->ID) ?>"><?= get_the_title($field->ID) ?></a>
						</h2>

						<?php if (get_the_excerpt($field->ID)): ?>
							<p><?= get_the_excerpt($field->ID) ?></p>
						<?php endif ?>
						
						<p class="data"><?= get_the_date('m.d.Y', $field->ID) ?></p>
					</div>
				</figure>
			</div>
		<?php endif ?>

		<?php 
		$wp_query = new WP_Query(array('post_type' => 'post', 'post__not_in' => array($field->ID), 'paged' => get_query_var('paged')));
		if($wp_query->have_posts()): 
			?>

			<div class="wrap">

				<?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>
					
					<?php get_template_part('parts/content', 'post_news') ?>

				<?php endwhile ?>

				<?php get_template_part('parts/pagination') ?>

			<?php endif ?>

		</div>

		<?php wp_reset_query(); 
		?>

	</div>
</div>
<div class="after-bg"></div>
</section>

<?php get_footer(); ?>