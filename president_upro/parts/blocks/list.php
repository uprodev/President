<?php if( have_rows('list') ): ?>

	<ul class="list-point">

		<?php while( have_rows('list') ): the_row(); ?>

			<li>

				<?php if ($field = get_sub_field('title')): ?>
					<h6><?= $field ?></h6>
				<?php endif ?>
				
				<?php if ($field = get_sub_field('text')): ?>
					<p><?= $field ?></p>
				<?php endif ?>
				
			</li>

		<?php endwhile; ?>

	</ul>

	<?php endif; ?>