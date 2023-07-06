<?php if( have_rows('links') ): ?>

	<div class="btn-wrap btn-several-wrap">
		<?php while( have_rows('links') ): the_row(); ?>

			<?php if ($field = get_sub_field('link')): ?>
				<a href="<?= $field['url'] ?>" class="btn-default btn-black<?php if(get_sub_field('is_show_widget')) echo ' show-widget' ?>"<?php if($field['target']) echo ' target="_blank"' ?>>

					<?php if (get_sub_field('is_download')): ?>
						<img src="<?= get_stylesheet_directory_uri() ?>/img/icon-16.svg" alt="">
					<?php endif ?>
					
					<?= $field['title'] ?>
				</a>
			<?php endif ?>

		<?php endwhile; ?>

	</div>

	<?php endif; ?>