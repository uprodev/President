<?php
$featured_posts = get_field('posts');
if($featured_posts): ?>

	<div class="bg-grey">
		<div class="content-width blog-text content-mini">

			<?php if ($field = get_field('title')): ?>
				<h2><?= $field ?></h2>
			<?php endif ?>

			<div class="flex">

				<?php foreach($featured_posts as $post): ?>
					<div class="blog-item">

						<?php if (has_post_thumbnail($post->ID)): ?>
							<figure>
								<a href="<?php the_permalink($post->ID) ?>">
									<?= get_the_post_thumbnail($post->ID, 'full') ?>
								</a>
							</figure>
						<?php endif ?>

						<div class="text">
							<h6>
								<a href="<?php the_permalink($post->ID) ?>"><?= get_the_title($post->ID) ?></a>
							</h6>

							<?php if (get_the_excerpt($post->ID)): ?>
								<p><?= get_the_excerpt($post->ID) ?></p>
							<?php endif ?>

						</div>
					</div>
				<?php endforeach; ?>

			</div>
		</div>
	</div>

	<?php endif; ?>