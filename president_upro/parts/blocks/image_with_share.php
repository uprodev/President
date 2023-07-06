<?php if ($field = get_field('image')): ?>
	<figure class="big-figure">
		<?= wp_get_attachment_image($field['ID'], 'full') ?>
		<div class="info">

			<?php get_template_part('parts/share_for_image') ?>

			<p><?php _e('שתף', 'President') ?></p>
		</div>

		<?php if ($caption = get_field('caption')): ?>
			<figcaption><?= $caption ?></figcaption>
		<?php endif ?>
		
	</figure>
	<?php endif ?>