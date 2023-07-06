<?php get_header(); ?>

<section class="lobby news">
	<div class="before"></div>
	<div class="content-width content-mini">
		<h1 class="after"><?php single_cat_title() ?></h1>
		<div class="content">

			<div class="wrap">

				<?php if ( have_posts() ) :
					while ( have_posts() ) : the_post(); ?> 

						<?php get_template_part('parts/content', 'post_news') ?>

					<?php endwhile; ?>

				<?php get_template_part('parts/pagination') ?>

				<?php endif; ?>

			</div>

		</div>
	</div>
	<div class="after-bg"></div>
</section>

<?php get_footer(); ?>