<section class="big-img-text">
	<div class="bg">
		<img src="<?= get_stylesheet_directory_uri() ?>/img/bg-4.png" alt="" class="img-bg">
		<img src="<?= get_stylesheet_directory_uri() ?>/img/after-1.png" alt="" class="after-img">
	</div>
	<div class="content-width content-mini">
		<div class="text-wrap">

			<?php if ($field = get_field('title_8')): ?>
				<h2><?= $field ?></h2>
			<?php endif ?>

			<?php if ($field = get_field('image_8')): ?>
				<div class="img-wrap">
					<?= wp_get_attachment_image($field['ID'], 'full') ?>
				</div>
			<?php endif ?>

			<?php if ($field = get_field('text_8')): ?>
				<?= $field ?>
			<?php endif ?>

			<?php if ($field = get_field('link_8')): ?>
				<div class="link-line link-line-white">
					<a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?><span></span></a>
				</div>
			<?php endif ?>

		</div>

		<?php if ($field = get_field('image_8')): ?>
			<figure>
				<?= wp_get_attachment_image($field['ID'], 'full') ?>
			</figure>
		<?php endif ?>

	</div>
</section>