<div class="bg-black">

	<?php if ($field = get_field('image')): ?>
		<div class="bg">
			<?= wp_get_attachment_image($field['ID'], 'full') ?>
		</div>
	<?php endif ?>
	
	<div class="wrap">

		<?php if ($field = get_field('text')): ?>
			<h3><?= $field ?></h3>
		<?php endif ?>
		
		<?php if ($field = get_field('name')): ?>
			<p><?= $field ?></p>
		<?php endif ?>
		
	</div>
</div>