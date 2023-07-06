<section class="img-text-block">
	<div class="content-width content-mini">
		<div class="content">

			<?php if ($field = get_field('title_3')): ?>
				<h2 class="mob"><?= $field ?></h2>
			<?php endif ?>
			
			<?php if ($field = get_field('image_3')): ?>
				<figure>
					<?= wp_get_attachment_image($field['ID'], 'full') ?>
				</figure>
			<?php endif ?>

			<div class="text-wrap">
				<div class="wrap">

					<?php if ($field = get_field('title_3')): ?>
						<h2><?= $field ?></h2>
					<?php endif ?>
					
					<?php if ($field = get_field('text_3')): ?>
						<?= $field ?>
					<?php endif ?>

					<?php if ($field = get_field('link_3')): ?>
						<div class="link-line ">
							<a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?><span></span></a>
						</div>
					<?php endif ?>

				</div>

				<?php if( have_rows('links_3') ): ?>

					<div class="item-wrap">

						<?php while( have_rows('links_3') ): the_row(); ?>

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