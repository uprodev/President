<?php
/*
Template Name: President
*/
?>

<?php get_header(); ?>

<section class="president-head rellax" data-rellax-speed="-4">

	<?php get_template_part('parts/banner') ?>

</section>

<section class="lady-content president-content">

	<?php if( have_rows('links') ): ?>

		<div class="nav-content">
			<ul id="nav" class="pres-nav">

				<?php while( have_rows('links') ): the_row(); ?>

					<?php if ($field = get_sub_field('link')): ?>
						<li>
							<a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
						</li>
					<?php endif ?>

				<?php endwhile; ?>

			</ul>
		</div>

	<?php endif; ?>

	<?php the_content() ?>
	
</section>

<?php get_footer(); ?>