<?php if( have_rows('items_9') ): ?>

	<section class="awards awards-2">
		<div class="content-width content-mini">
			<div class="content">

				<?php while( have_rows('items_9') ): the_row(); ?>

					<?php if (get_row_index() == 1): ?>
						<div class="left item">

							<?php if ($field = get_field('title_9')): ?>
								<h2><?= $field ?></h2>
							<?php endif ?>
							
							<figure class="shadow">

								<?php if ($field = get_sub_field('image')): ?>
									<?= wp_get_attachment_image($field['ID'], 'full') ?>
								<?php endif ?>
								
								<?php if ($field = get_sub_field('link')): ?>
									<div class="link-line link-bg">
										<a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?><span></span></a>
									</div>
								<?php endif ?>

							</figure>
						</div>
					<?php else: ?>

						<?php if (get_row_index() == 2): ?>
							<div class="right item">
							<?php endif ?>

							<figure class="shadow">
								
								<?php if ($field = get_sub_field('image')): ?>
									<?= wp_get_attachment_image($field['ID'], 'full') ?>
								<?php endif ?>
								
								<?php if ($field = get_sub_field('link')): ?>
									<div class="link-line link-bg">
										<a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?><span></span></a>
									</div>
								<?php endif ?>
							</figure>

							<?php if (get_row_index() == count(get_field('items_9'))): ?>

							<?php if ($link = get_field('link_9')): ?>
								<div class="link-line link-full">
									<a href="<?= $link['url'] ?>"<?php if($link['target']) echo ' target="_blank"' ?>><i><?= $link['title'] ?></i><span></span></a>
								</div>
							<?php endif ?>

						</div>
					<?php endif ?>

				<?php endif ?>

			<?php endwhile; ?>

		</div>
	</div>
</section>

<?php endif; ?>