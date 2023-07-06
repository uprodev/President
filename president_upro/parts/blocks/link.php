<?php if ($field = get_field('link')): ?>
	<div class="btn-wrap"<?php if($id = get_field('id')) echo ' id="' . $id . '"' ?>>
		<a href="<?= get_field('is_open_map_and_form') && get_field('form') ? '#' . get_field('form') : $field['url'] ?>" class="btn-default btn-black<?php if(get_field('image')) echo ' btn-img'; if(get_field('is_blue')) echo ' btn-blue'; if(get_field('is_border')) echo ' btn-border'; if(get_field('is_open_map_and_form')) echo ' open-map'; ?>"<?php if($field['target']) echo ' target="_blank"'; ?>>
			<?= $field['title'] ?>

			<?php if ($image = get_field('image')): ?>
				<?= wp_get_attachment_image($image['ID'], 'full') ?>
			<?php endif ?>
			
		</a>
	</div>
	<?php endif ?>