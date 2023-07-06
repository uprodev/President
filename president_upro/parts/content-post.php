<div class="item shadow">

	<?php if (has_post_thumbnail()): ?>
		<figure>
			<a href="<?php the_permalink() ?>">
				<?php the_post_thumbnail('full') ?>

				<?php if (get_field('video')): ?>
				<div class="icon-wrap">
					<img src="<?= get_stylesheet_directory_uri() ?>/img/icon-1.png" alt="">
				</div>
			<?php endif ?>

		</a>
	</figure>
<?php endif ?>

<div class="text-wrap">
	<h6>
		<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
	</h6>
	<div class="bottom">
		<p><?= wp_get_object_terms(get_the_ID(), 'category')[0]->name ?></p>
		<p><?= get_the_date() ?></p>
	</div>
</div>
</div>