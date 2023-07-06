<div class="item<?php if (get_field('video')) echo ' item-video' ?>">
	
	<?php if (has_post_thumbnail()): ?>
		<figure>
			<a href="<?php the_permalink() ?>">
				<?php the_post_thumbnail('full') ?>

			</a>
		</figure>
	<?php endif ?>

	<div class="text">
		<h6>
			<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
		</h6>
		
		<?php if (get_the_excerpt()): ?>
			<p><?php the_excerpt() ?></p>
		<?php endif ?>

		<p class="date"><?= get_the_date() ?></p>
	</div>
</div>