<?php
/*
Template Name: Team
*/
?>

<?php get_header(); ?>

<section class="team">
	<div class="bg">
		<img src="<?= get_stylesheet_directory_uri() ?>img/bg-15.png" alt="">
	</div>
	<div class="content-width content-mini">
		<h1><?php the_title() ?></h1>

		<?php if( have_rows('team') ): ?>

			<div class="content">

				<?php while( have_rows('team') ): the_row(); ?>

					<?php if (get_row_index() <= 2): ?>
						<div class="line">
						<?php endif ?>

						<div class="item">

							<?php if ($field = get_sub_field('title')): ?>
								<h6><?= $field ?></h6>
							<?php endif ?>
							
							<ul>

								<?php if ($field = get_sub_field('text')): ?>
									<li>
										<p><?= $field ?></p>
									</li>
								<?php endif ?>
								
								<?php if ($field = get_sub_field('phone')): ?>
									<li>
										<a href="tel:+<?= preg_replace('/[^0-9]/', '', $field) ?>"><img src="<?= get_stylesheet_directory_uri() ?>/img/icon-8-1.svg" alt=""><span><?= $field ?></span></a>
									</li>
								<?php endif ?>
								
								<?php if ($field = get_sub_field('fax')): ?>
									<li>
										<a href="tel:+<?= preg_replace('/[^0-9]/', '', $field) ?>"><img src="<?= get_stylesheet_directory_uri() ?>/img/icon-8-2.svg" alt=""><span><?= $field ?></span></a>
									</li>
								<?php endif ?>
								
								<?php if ($field = get_sub_field('email')): ?>
									<li>
										<a href="mailto:<?= $field ?>"><img src="<?= get_stylesheet_directory_uri() ?>/img/icon-8-3.svg" alt=""><?= $field ?></a>
									</li>
								<?php endif ?>
								
							</ul>
						</div>

						<?php if (get_row_index() == 1 || get_row_index() == count(get_field('team'))): ?>
					</div>
				<?php endif ?>

			<?php endwhile; ?>

		</div>

	<?php endif; ?>

</div>
</section>

<?php get_footer(); ?>