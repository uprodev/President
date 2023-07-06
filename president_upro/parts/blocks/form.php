<?php if ($field = get_field('form')): ?>
	<div class="form-wrap-red" style="display:none" id="<?= $field ?>">
		<a href="#" class="close-form">
			<img src="<?= get_stylesheet_directory_uri() ?>/img/close-small.svg" alt="">
		</a>

		<?php the_field('text') ?>
		
		<?= do_shortcode('[contact-form-7 id="' . $field . '" html_class="form-flex"]') ?>
		
	</div>
	<?php endif ?>