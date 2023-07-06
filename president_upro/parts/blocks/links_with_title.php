<?php if( have_rows('links') ): ?>

	<?php if ($field = get_field('title')): ?>
		<h6><?= $field ?></h6>
	<?php endif ?>
	
	<ul class="link-list">

		<?php while( have_rows('links') ): the_row(); ?>

			<?php if ($field = get_sub_field('link')): ?>
				<li>
					<a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
				</li>
			<?php endif ?>

		<?php endwhile; ?>

	</ul>

	<?php endif; ?>