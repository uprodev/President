<?php if ($image = get_field('image')): ?>
	<figure<?php if($id = get_field('id')) echo ' id="' . $id . '"' ?>>
		<?= wp_get_attachment_image($image['ID'], 'full') ?>
		<figcaption>
			<h6><?= get_field('caption') ?></h6>
			<p><?= get_field('photo_text') ?></p>
		</figcaption>
	</figure>
	<?php endif ?>