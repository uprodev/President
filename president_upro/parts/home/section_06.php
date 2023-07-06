<section class="block-4n">
	<div class="bg">
		<img src="<?= get_stylesheet_directory_uri() ?>/img/bg-2.svg" alt="" class="bg-img">
		<img src="<?= get_stylesheet_directory_uri() ?>/img/bg-2-1.svg" alt="" class="img-item">
	</div>
	<div class="content-width content-mini">

		<?php if (get_field('top_6')): ?>
			<div class="top">

				<?php if ($field = get_field('top_6')['logo']): ?>
					<figure>
						<?= wp_get_attachment_image($field['ID'], 'full') ?>
					</figure>
				<?php endif ?>
				
				<?php if ($field = get_field('top_6')['text']): ?>
					<div class="text-wrap"><?= $field ?></div>
				<?php endif ?>
				
			</div>
		<?php endif ?>
		
		<?php if( have_rows('items_6') ): ?>

			<div class="content">

				<?php while( have_rows('items_6') ): the_row(); ?>

					<div class="item item-<?= get_row_index() ?>"<?php if($field = get_sub_field('color')) echo ' style="background-color: ' . $field . ';"' ?>>

						<?php if ($field = get_sub_field('image')): ?>
							<figure>
								<?= wp_get_attachment_image($field['ID'], 'full') ?>
							</figure>
						<?php endif ?>

						<div class="text">
							<?php the_sub_field('text') ?>

							<?php if ($field = get_sub_field('link')): ?>
								<div class="btn-wrap">
									<a href="<?= $field['url'] ?>" class="btn-default"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
								</div>
							<?php endif ?>

						</div>
					</div>

				<?php endwhile; ?>

			</div>

		<?php endif; ?>

	</div>
</section>