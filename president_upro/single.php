<?php get_header(); ?>

<section class="article"<?php if(get_field('ltr')) echo ' style="direction: ltr;"' ?>>
	<div class="before"></div>
	<div class="content-width content-mini">
		<div class="head">
			<h1><?php the_title() ?></h1>

			<?php if (get_the_excerpt()): ?>
				<h6><?php the_excerpt() ?></h6>
			<?php endif ?>
			
			<div class="date-line">
				<p>
					<span><?= get_the_date('d/m/Y') ?></span>

					<?php if ($field = get_field('text')): ?>
						<span><?= $field ?></span>
					<?php endif ?>
					
				</p>
				<ul class="soc">

					<?php get_template_part('parts/share') ?>
					
					<li><p><?php _e('שתף', 'President') ?></p></li>
				</ul>
			</div>
			<figure>

				<?php if ($field = get_field('video')): ?>
					<a data-fancybox href="<?= $field ?>">
						<?php the_post_thumbnail('full') ?>
						<span class="icon-wrap">
							<img src="<?= get_stylesheet_directory_uri() ?>/img/icon-14.svg" alt="">
						</span>
					</a>
				<?php elseif(has_post_thumbnail()): ?>
					<?php the_post_thumbnail('full') ?>
					<figcaption>

						<?php if ($field = get_field('photo')): ?>
							<h6><?= $field ?></h6>
						<?php endif ?>
						
						<?php if ($field = get_field('caption')): ?>
							<p><?= $field ?></p>
						<?php endif ?>
						
					</figcaption>
				<?php endif ?>
				
			</figure>
		</div>
		<div class="content">
			<?php the_content() ?>
		</div>
	</div>
</section>

<?php
$featured_posts = get_field('related_posts')['posts'];
if($featured_posts): ?>

	<section class="lobby lobby-bottom ">
		<div class="content-width content-mini">
			<div class="content">

				<?php if ($field = get_field('related_posts')['link']): ?>
					<div class="link-line link-full">
						<a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>><i><?= $field['title'] ?></i><span></span></a>
					</div>
				<?php endif ?>
				
				<div class="wrap">

					<?php foreach($featured_posts as $post): 

						setup_postdata($post); ?>

						<?php get_template_part('parts/content', 'post_news') ?>

					<?php endforeach; ?>

					<?php wp_reset_postdata(); ?>

				</div>

			</div>
		</div>
	</section>

<?php endif; ?>

<?php get_footer(); ?>