<?php if( have_rows('links_7') ): ?>

	<section class="awards">
		<div class="bg">
			<img src="<?= get_stylesheet_directory_uri() ?>/img/bg-3.png" alt="">
		</div>
		<div class="content-width content-mini">
			<div class="content">

				<?php while( have_rows('links_7') ): the_row(); ?>

					<?php if (get_row_index() == 1): ?>
						<div class="left item">

							<?php if ($field = get_field('title_7')): ?>
								<h2><?= $field ?></h2>
							<?php endif ?>
							
							<?php if ($field = get_sub_field('link')): ?>
								<figure class="shadow">

									<?php if ($image = get_sub_field('image')): ?>
										<?= wp_get_attachment_image($image['ID'], 'full') ?>
									<?php endif ?>

									<div class="link-line link-bg">
										<a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?><span></span></a>
									</div>
								</figure>
							<?php endif ?>

						</div>
					<?php else: ?>

						<?php if (get_row_index() == 2): ?>
							<div class="right item">
							<?php endif ?>

							<?php if ($field = get_sub_field('link')): ?>
								<figure class="shadow">

									<?php if ($image = get_sub_field('image')): ?>
										<?= wp_get_attachment_image($image['ID'], 'full') ?>
									<?php endif ?>

									<div class="link-line link-bg">
										<a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?><span></span></a>
									</div>
								</figure>
							<?php endif ?>

							<?php if (get_row_index() == count(get_field('links_7'))): ?>

							<?php if ($link = get_field('link_7')): ?>
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