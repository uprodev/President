<?php if (has_post_thumbnail()): ?>
	<div class="bg">
		<?php the_post_thumbnail('full') ?>
	</div>
<?php endif ?>

<div class="content-width content-mini">
	<div class="left">
		<h1><?php the_title() ?></h1>
	</div>

	<?php if( have_rows('links') ): ?>

		<ol>

			<?php while( have_rows('links') ): the_row(); ?>

				<?php if ($field = get_sub_field('link')): ?>
					<li>
						<p>
							<a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
						</p>
					</li>
				<?php endif ?>

			<?php endwhile; ?>

		</ol>

	<?php endif; ?>

</div>