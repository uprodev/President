<?php
/*
Template Name: Lady
*/
?>

<?php get_header(); ?>

<section class="lady-head" >
	<div class="content-width content-mini">
		<h1><?php the_title() ?></h1>

		<?php if ($field = get_field('subtitle')): ?>
			<h6><?= $field ?></h6>
		<?php endif ?>
		

		<figure>

			<?php if (has_post_thumbnail()): ?>
				<?php the_post_thumbnail('full') ?>
			<?php endif ?>
			
			<div class="info">
				<ul>
					<?php get_template_part('parts/share') ?>
				</ul>
				<p><?php _e('שתף', 'President') ?></p>
			</div>

			<?php if ($field = get_field('image_caption')): ?>
				<figcaption><?= $field ?></figcaption>
			<?php endif ?>
			
		</figure>

		<?php

        $links_type =  get_field('links_type');
        $links =  get_field('links_row');
        if ($links_type == 'Links' && $links) {
            ?>
            <div class="content">

                <?php foreach($links as $link):


                     ?>
                    <div class="item">


                            <div class="img-wrap">
                                <a target="<?= $link['link']['target'] ?>" href="<?= $link['link']['url'] ?>">
                                    <img src="<?= $link['image']['url'] ?>">
                                </a>
                            </div>


                        <h6>
                            <a href="<?= $link['link']['url'] ?>"><?= $link['link']['title'] ?></a>
                        </h6>
                    </div>
                <?php endforeach; ?>

                <?php wp_reset_postdata(); ?>

            </div>
                <?php
        } else {
		$featured_posts = get_field('posts');
            if($featured_posts): ?>

                <div class="content">

                    <?php foreach($featured_posts as $post):

                        setup_postdata($post); ?>
                        <div class="item">

                            <?php if (has_post_thumbnail()): ?>
                                <div class="img-wrap">
                                    <a href="<?php the_permalink() ?>">
                                        <?php the_post_thumbnail('full') ?>
                                    </a>
                                </div>
                            <?php endif ?>

                            <h6>
                                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                            </h6>
                        </div>
                    <?php endforeach; ?>

                    <?php wp_reset_postdata(); ?>

                </div>

            <?php endif; ?>
            
        <?php } ?>

	</div>
</section>

<section class="lady-content">

	<?php if( have_rows('links') ): ?>

		<div class="nav-content">
			<ul id="nav">

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