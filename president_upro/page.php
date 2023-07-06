<?php get_header(); ?>

<section class="page-head">
	<div class="content-width content-mini">
		<h1 class="after"><?php the_title() ?></h1>
	</div>

	<?php if( have_rows('slider') ): ?>

		<div class="slider-wrap">
			<div class="swiper head-slider">
				<div class="swiper-wrapper">

					<?php while( have_rows('slider') ): the_row(); ?>

						<?php if ($field = get_sub_field('text')): ?>
							<div class="swiper-slide slide-<?= get_row_index() ?>"<?php if($image = get_sub_field('image')) echo ' style="background-image: url(' . $image['url'] . ');"' ?>>
								<div class="content-width content-mini"><?= $field ?></div>
							</div>
						<?php endif ?>

					<?php endwhile; ?>

				</div>
				<div class="swiper-pagination head-pagination"></div>
			</div>
		</div>

	<?php endif; ?>

</section>

<section class="page-content text-black">
	<div class="content-mini content-width">
		<div class="content">
			<div class="main">
				<?php the_content() ?>
			</div>
			<div class="aside">
				<ul class="soc">
					
					<?php get_template_part('parts/share') ?>

					<li><p><?php _e('שתף', 'President') ?></p></li>
				</ul>

				<?php if( have_rows('anchors') ): ?>

					<ul class="aside-menu">

						<?php while( have_rows('anchors') ): the_row(); ?>

							<?php if ($field = get_sub_field('link')): ?>
								<li>
									<a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
								</li>
							<?php endif ?>

						<?php endwhile; ?>

					</ul>

				<?php endif; ?>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>