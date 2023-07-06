<?php
/*
Template Name: News
*/
?>

<?php get_header(); ?>

<section class="lobby">
	<div class="before"></div>
	<div class="content-width content-mini">
		<h1 class="after"><?php single_cat_title() ?></h1>
		<div class="content">

			<?php if ($main_post = get_field('main_post', 'term_' . get_queried_object_id())): ?>
				<div class="big-item">
					<figure>
						<a href="<?php the_permalink($main_post) ?>">

							<?php if (has_post_thumbnail($main_post)): ?>
								<?= get_the_post_thumbnail($main_post, 'full') ?>
							<?php endif ?>

							<?php if (get_the_content(null, null, $main_post) && str_contains(get_the_content(null, null, $main_post), '<video')): ?>
							<div class="icon-wrap">
								<img src="<?= get_stylesheet_directory_uri() ?>/img/icon-12.svg" alt="">
							</div>
						<?php endif ?>

					</a>

					<div class="wrap">
						<h2>
							<a href="<?php the_permalink($main_post) ?>"><?= get_the_title($main_post) ?></a>
						</h2>

						<?php if (get_the_excerpt($main_post)): ?>
							<p><?= get_the_excerpt($main_post) ?></p>
						<?php endif ?>

						<p class="data"><?= get_the_date('m.d.Y', $main_post) ?></p>
					</div>
				</figure>
			</div>
		<?php endif ?>

		<?php 
		$wp_query = new WP_Query(array('post_type' => 'post', 'cat' => get_queried_object_id(), 'post__not_in' => [$main_post], 'paged' => get_query_var('paged')));
		if($wp_query->have_posts()): ?>

			<?php while ($wp_query->have_posts()): $wp_query->the_post();
				?>

				<?php if (!$main_post && $wp_query->current_post == 0): ?>
					<div class="big-item">
						<figure>
							<a href="<?php the_permalink() ?>">

								<?php if (has_post_thumbnail()): ?>
									<?php the_post_thumbnail('full') ?>
								<?php endif ?>

								<?php if (get_the_content(null, null, get_the_ID()) && str_contains(get_the_content(null, null, get_the_ID()), '<video')): ?>
								<div class="icon-wrap">
									<img src="<?= get_stylesheet_directory_uri() ?>/img/icon-12.svg" alt="">
								</div>
							<?php endif ?>

						</a>

						<div class="wrap">
							<h2>
								<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
							</h2>

							<?php if (get_the_excerpt()): ?>
								<p><?php the_excerpt() ?></p>
							<?php endif ?>

							<p class="data"><?= get_the_date('m.d.Y') ?></p>
						</div>
					</figure>
				</div>
			<?php else: ?>

				<?php $current = $main_post ? 0 : 1 ?>
				<?php if ($wp_query->current_post == $current): ?>
					<div class="wrap">
					<?php endif ?>

					<?php get_template_part('parts/content', 'post_news') ?>

					<?php if ($wp_query->current_post == $wp_query->found_posts - 1): ?>
					</div>
				<?php endif ?>

			<?php endif ?>

		<?php endwhile ?>

		<?php get_template_part('parts/pagination') ?>

	<?php endif ?>

	<?php wp_reset_query(); 
	?>

</div>
</div>
<div class="after-bg"></div>
</section>

<?php get_footer(); ?>