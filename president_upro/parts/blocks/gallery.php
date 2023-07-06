<?php if( have_rows('gallery') ): ?>

	<div class="figure-wrap">

		<?php while( have_rows('gallery') ): the_row(); ?>

			<?php if ($field = get_sub_field('image')): ?>
				<figure>
					<a href="<?= $field['url'] ?>" data-fancybox="gallery">
						<?= wp_get_attachment_image($field['ID'], 'full') ?>
					</a>
					<figcaption>

						<?php if ($caption = get_sub_field('caption_1')): ?>
							<h6><?= $caption ?></h6>
						<?php endif ?>
						
						<?php if ($caption = get_sub_field('caption_2')): ?>
							<p><?= $caption ?></p>
						<?php endif ?>
						
					</figcaption>
				</figure>
			<?php endif ?>
			

		<?php endwhile; ?>

	</div>

	<?php endif; ?>