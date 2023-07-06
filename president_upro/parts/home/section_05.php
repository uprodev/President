<section class="text-img-3n">
	<div class="content-width content-mini">
		<div class="content">
			<div class="left">

				<?php if ($field = get_field('title_5')): ?>
					<h2><?= $field ?></h2>
				<?php endif ?>
				

				<?php if ($field = get_field('image_5')): ?>
					<figure>
						<?= wp_get_attachment_image($field['ID'], 'full') ?>
					</figure>
				<?php endif ?>

				<?php if ($field = get_field('text_5')): ?>
					<?= $field ?>
				<?php endif ?>

				<?php if ($field = get_field('link_5')): ?>
					<div class="link-line">
						<a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?><span></span></a>
					</div>
				<?php endif ?>

			</div>
			
			<div class="right">
				<div class="col col-1">

					<?php if ($field = get_field('image_5')): ?>
					<figure>
						<?= wp_get_attachment_image($field['ID'], 'full') ?>
					</figure>
				<?php endif ?>

			</div>

			<?php if( have_rows('links_5') ): ?>

				<div class="col col-2">

					<?php while( have_rows('links_5') ): the_row(); ?>

						<?php if ($field = get_sub_field('link')): ?>
							<div class="item">
								<a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>>
									<span class="text"><?= $field['title'] ?></span>

									<?php if ($image = get_sub_field('image')): ?>
										<span class="img-wrap">
											<?= wp_get_attachment_image($image['ID'], 'full') ?>
										</span>
									<?php endif ?>
									
								</a>
							</div>
						<?php endif ?>

					<?php endwhile; ?>

				</div>

			<?php endif; ?>

		</div>
	</div>
</div>
</section>