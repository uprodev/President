<?php if ($field = get_field('image')): ?>
	<div class="bg">
		<?= wp_get_attachment_image($field['ID'], 'full') ?>
	</div>
	<?php endif ?>