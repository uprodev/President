<?php if ($field = get_field('video_1')): ?>
	<section class="home-banner">
		<div class="content-width">
			<div class="content rellax" data-rellax-speed="-8">

				<?php if ($field = get_field('image_1')): ?>
					<div class="bg-cover">
						<?= wp_get_attachment_image($field['ID'], 'full') ?>
						<div class="btn-play">
							<a href="#">
								<img src="<?= get_stylesheet_directory_uri() ?>/img/icon-14.svg" alt="">
							</a>
						</div>
					</div>
				<?php endif ?>
				
				<video id="my-video" class="video-js"  muted playsinline loop preload="auto" data-setup="{}"><source src="<?= $field['url'] ?>" type='video/mp4'>
					<p class="vjs-no-js">
						To view this video please enable JavaScript, and consider upgrading to a web browser that
						<a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
					</p>
				</video>
			</div>
		</div>
	</section>
	<?php endif ?>