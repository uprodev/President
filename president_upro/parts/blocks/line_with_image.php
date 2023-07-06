<?php if ($field = get_field('image')): ?>
	<div class="line-img">
		<span>
			<?= wp_get_attachment_image($field['ID'], 'full') ?>
		</span>
	</div>
	<?php endif ?>