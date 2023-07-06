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

<h6>
	<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
</h6>
<p><?= get_the_date() ?></p>
</div>