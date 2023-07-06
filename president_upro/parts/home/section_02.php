<section class="news-block">
	<div class="content-width content-mini">
		<div class="content">
			<div class="left">

				<?php if ($field = get_field('main_post_2')): ?>
					<div class="big-item shadow">

						<?php if (has_post_thumbnail($field->ID)): ?>
							<figure>
								<a href="<?php the_permalink($field->ID) ?>">
									<?= get_the_post_thumbnail($field->ID, 'full') ?>
								</a>
							</figure>
						<?php endif ?>
						
						<div class="wrap">
							<h1>
								<a href="<?php the_permalink($field->ID) ?>"><?= get_the_title($field->ID) ?></a>
							</h1>
							<div class="bottom">
								<p><?= wp_get_object_terms($field->ID, 'category')[0]->name ?></p>
								<p class="date"><?= get_the_date('m.d.Y', $field->ID) ?></p>
							</div>
						</div>
					</div>
				<?php endif ?>
				
				<?php
				$featured_posts = get_field('bottom_posts_2');
				if($featured_posts): ?>

					<div class="line">

						<?php foreach($featured_posts as $post): 

							setup_postdata($post); ?>

							<?php get_template_part('parts/content', 'post') ?>

						<?php endforeach; ?>

						<?php wp_reset_postdata(); ?>

					</div>

				<?php endif; ?>

			</div>
			<div class="right">

				<?php
				$featured_posts = get_field('sidebar_posts_2');
				if($featured_posts): ?>

					<?php foreach($featured_posts as $post): 

						setup_postdata($post); ?>
						
						<?php get_template_part('parts/content', 'post') ?>

					<?php endforeach; ?>

					<?php wp_reset_postdata(); ?>
				<?php endif; ?>

				<?php if ($field = get_field('link_2')): ?>
					<div class="link-line link-line-big">
						<a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?><span></span></a>
					</div>
				<?php endif ?>

			</div>
		</div>
	</div>
</section>