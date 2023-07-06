<section class="soc-block">
	<div class="bg">
		<img src="<?= get_stylesheet_directory_uri() ?>/img/bg-5.png" alt="" class="bg-img">
		<img src="<?= get_stylesheet_directory_uri() ?>/img/icon-5-1.png" alt="" class="img img-1">
		<img src="<?= get_stylesheet_directory_uri() ?>/img/icon-5-2.png" alt="" class="img img-2">
		<img src="<?= get_stylesheet_directory_uri() ?>/img/icon-5-3.png" alt="" class="img img-3">
		<img src="<?= get_stylesheet_directory_uri() ?>/img/icon-5-4.png" alt="" class="img img-4">
		<img src="<?= get_stylesheet_directory_uri() ?>/img/icon-5-5.png" alt="" class="img img-5">
		<img src="<?= get_stylesheet_directory_uri() ?>/img/icon-5-6.png" alt="" class="img img-6">
		<img src="<?= get_stylesheet_directory_uri() ?>/img/icon-5-7.png" alt="" class="img img-7">
		<img src="<?= get_stylesheet_directory_uri() ?>/img/icon-5-8.png" alt="" class="img img-8">
	</div>
	<div class="content-width content-mini">

		<?php if (get_field('top_10')): ?>
			<div class="title">

				<?php if ($field = get_field('top_10')['image']): ?>
					<figure>
						<?= wp_get_attachment_image($field['ID'], 'full') ?>
					</figure>
				<?php endif ?>

				<div class="text">

					<?php if ($field = get_field('top_10')['title']): ?>
						<p><?= $field ?></p>
					<?php endif ?>
					
					<?php if ($field = get_field('top_10')['link']): ?>
						<a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
					<?php endif ?>
					
				</div>
			</div>
		<?php endif ?>
		
		<div class="content">

			<?php if ($field = get_field('twitter_shortcode_10')): ?>
				<div class="item item-1">
					<?= $field ?>
				</div>
			<?php endif ?>
			
			<?php if ($field = get_field('instagram_shortcode_10')): ?>
				<div class="item item-2">
					<?= $field ?>
				</div>
			<?php endif ?>
			
			<?php if ($field = get_field('facebook_shortcode_10')): ?>
				<div class="item item-3">
					<?= $field ?>
				</div>
			<?php endif ?>
			
		</div>
		<div class="video-wrap">

			<?php if ($field = get_field('tiktok_shortcode_10')): ?>
				<div class="tic">
					<?= $field ?>
				</div>
			<?php endif ?>
			
			<?php if ($field = get_field('youtube_shortcode_10')): ?>
				<div class="video-block">
					<?= $field ?>
				</div>
			<?php endif ?>
			
		</div>
	</div>
</section> 