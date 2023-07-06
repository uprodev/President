<section class="video-list">
	<div class="content-width content-mini">
		<div class="content">
			<div class="left">
				<h2><?php _e('נאומי הנשיא', 'President') ?></h2>

				<?php
				$featured_posts = get_field('sidebar_posts_4');
				if($featured_posts): ?>

					<ul>

						<?php foreach($featured_posts as $post): 

							setup_postdata($post); ?>
							
							<li>
								<h6>
									<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
								</h6>
								<p><?= get_the_date() ?></p>
							</li>

						<?php endforeach; ?>

						<?php wp_reset_postdata(); ?>

					</ul>

				<?php endif; ?>

				<?php if ($field = get_field('link_4')): ?>
					<div class="link-line link-line-big">
						<a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?><span></span></a>
					</div>
				<?php endif ?>

			</div>
			<div class="right">
				<h2><?php _e('נאומי הנשיא', 'President') ?></h2>

				<?php if ($field = get_field('main_post_4')): ?>
					<div class="big-item shadow">

						<?php if (has_post_thumbnail($field->ID)): ?>
							<figure>
								<?= get_the_post_thumbnail($field->ID, 'full') ?>

								<?php if (get_the_content(null, null, $field->ID) && str_contains(get_the_content(null, null, $field->ID), '<video')): ?>
								<div class="icon-wrap">
									<img src="<?= get_stylesheet_directory_uri() ?>/img/icon-2.png" alt="">
								</div>
							<?php endif ?>

						</figure>
					<?php endif ?>

					<div class="wrap">
						<h3>
							<a href="<?php the_permalink($field->ID) ?>"><?= get_the_title($field->ID) ?></a>
						</h3>
						<p><?= get_the_date('m.d.Y', $field->ID) ?></p>
					</div>
				</div>
			<?php endif ?>

			<?php
			$featured_posts = get_field('bottom_posts_4');
			if($featured_posts): ?>

				<div class="line">

					<?php foreach($featured_posts as $post): 

						setup_postdata($post); ?>
						
						<?php get_template_part('parts/content', 'post_2') ?>

					<?php endforeach; ?>

					<?php wp_reset_postdata(); ?>

				</div>

			<?php endif; ?>

		</div>
	</div>
</div>
</section>