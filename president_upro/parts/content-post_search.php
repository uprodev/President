<div class="item">

	<figure>
		<a href="<?php the_permalink() ?>">

			<?php if (has_post_thumbnail()): ?>
				<?php the_post_thumbnail('full') ?>
			<?php else: ?>
				<?= wp_get_attachment_image(2593, 'full') ?>
			<?php endif ?>
			
		</a>
	</figure>

	<?php $terms = wp_get_object_terms(get_the_ID(), 'category') ?>

	<div class="text-wrap">
		<div class="link-line">
			<a href="<?= get_term_link($terms[0]->term_id) ?>"><?= $terms[0]->name ?><span></span></a>
		</div>
		<h3>
			<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
		</h3>

		<?php if (get_the_excerpt()): ?>
			<p><?php the_excerpt() ?></p>
		<?php endif ?>
		
	</div>
</div>