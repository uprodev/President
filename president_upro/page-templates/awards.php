<?php
/*
Template Name: Awards
*/
?>

<?php get_header(); ?>

<section class="president-head awards-head rellax" data-rellax-speed="-4">

	<?php get_template_part('parts/banner') ?>

</section>

<section class="lady-content president-content awards-content">
	<div class="bg">
		<img src="<?= get_stylesheet_directory_uri() ?>/img/img-43.png" alt="">
	</div>
	<div class="nav-content">

		<?php if( have_rows('links') ): ?>

			<ul id="nav" class="awards-nav">

				<?php while( have_rows('links') ): the_row(); ?>

					<?php if ($field = get_sub_field('link')): ?>
						<li>
							<a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
						</li>
					<?php endif ?>

				<?php endwhile; ?>

			</ul>

		<?php endif; ?>

	</div>

	<?php the_content() ?>
	
</section>

<?php get_footer(); ?>