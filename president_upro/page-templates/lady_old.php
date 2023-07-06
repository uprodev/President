<?php
/*
Template Name: Lady (old)
*/
?>

<?php get_header(); ?>

<section class="lady-head">
	<div class="content-width content-mini">

		<?php if ($field = get_field('title')): ?>
			<h1><?= $field ?></h1>
		<?php endif ?>
		
		<?php if ($field = get_field('subtitle')): ?>
			<h6><?= $field ?></h6>
		<?php endif ?>

		<figure>

			<?php if ($field = get_field('image')): ?>
				<?= wp_get_attachment_image($field['ID'], 'full') ?>
			<?php endif ?>

			<div class="info">
				<ul>
					
					<?php get_template_part('parts/share') ?>

				</ul>
				<p><?php _e('שתף', 'President') ?></p>
			</div>

			<?php if ($field = get_field('caption')): ?>
				<figcaption><?= $field ?></figcaption>
			<?php endif ?>
			
		</figure>

		<?php
		$featured_posts = get_field('posts');
		if($featured_posts): ?>

			<div class="content">

				<?php foreach($featured_posts as $post): 

					setup_postdata($post); ?>
					<div class="item">

						<?php if (has_post_thumbnail()): ?>
							<div class="img-wrap">
								<a href="<?php the_permalink() ?>">
									<?php the_post_thumbnail() ?>
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

	</div>
</section>

<section class="lady-content">

	<?php if( have_rows('sections') ): ?>

		<div class="nav-content">
			<ul id="nav">

				<?php while( have_rows('sections') ): the_row(); ?>

					<?php if ($field = get_sub_field('menu_title')): ?>
						<li>
							<a href="#section-<?= get_row_index() ?>"><?= $field ?></a>
						</li>
					<?php endif ?>

				<?php endwhile; ?>

			</ul>
		</div>

	<?php endif; ?>

	<?php if( have_rows('sections') ): ?>
		<?php while( have_rows('sections') ): the_row(); ?>

			<div class="item-content item-content-<?= get_row_index() ?><?php if(get_sub_field('is_grey')) echo ' bg-grey-full' ?>" id="section-<?= get_row_index() ?>">
				<div class="content-mini content-width<?php if(get_sub_field('is_text_content')) echo ' content-text' ?>">

					<?php if( have_rows('section') ): ?>
						<?php while( have_rows('section') ): the_row(); ?>

							<?php 
							switch (get_sub_field('type')) {
								case 'Text':
								the_sub_field('text');
								break;

								case 'Quote': ?>
								<?php if (get_sub_field('quote')): ?>
									<div class="bg-black">
										<div class="bg">
											<img src="<?= get_stylesheet_directory_uri() ?>/img/bg-7.png" alt="">
										</div>
										<div class="wrap">

											<?php if ($field = get_sub_field('quote')['text']): ?>
												<h3><?= $field ?></h3>
											<?php endif ?>

											<?php if ($field = get_sub_field('quote')['name']): ?>
												<p><?= $field ?></p>
											<?php endif ?>

										</div>
									</div>
								<?php endif ?>
								<?php break;

								case 'Line': ?>
								<div class="line"></div>
								<?php break;

								case 'Image line': ?>
								<div class="line-img">
									<span>
										<img src="<?= get_stylesheet_directory_uri() ?>/img/img-24.png" alt="">
									</span>
								</div>
								<?php break;

								case 'Large image': ?>
								<?php if (get_sub_field('large_image')): ?>
									<figure class="flex-figcaption">

										<?php if ($field = get_sub_field('large_image')['image']): ?>
											<?= wp_get_attachment_image($field['ID'], 'full') ?>
										<?php endif ?>

										<figcaption>

											<?php if ($field = get_sub_field('large_image')['title']): ?>
												<h6><?= $field ?></h6>
											<?php endif ?>
											
											<?php if ($field = get_sub_field('large_image')['caption']): ?>
												<p><?= $field ?></p>
											<?php endif ?>
											
										</figcaption>
									</figure>
								<?php endif ?>
								<?php break;

								case 'Content': ?>
								<?php if( have_rows('content') ): ?>

									<div class="text">

										<?php while( have_rows('content') ): the_row(); ?>

											<?php 
											switch (get_sub_field('content_type')) {
												case 'Text':
												the_sub_field('content_text');
												break;

												case 'List with links': ?>
												<?php if( have_rows('content_list_with_links') ): ?>

													<ul class="link-list">

														<?php while( have_rows('content_list_with_links') ): the_row(); ?>

															<?php if ($field = get_sub_field('content_list_with_links_link')): ?>
																<li>
																	<a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
																</li>
															<?php endif ?>

														<?php endwhile; ?>

													</ul>

												<?php endif; ?>
												<?php break;

												case 'Image with caption': ?>
												<?php if (get_sub_field('content_image_with_caption')): ?>
													<figure>

														<?php if ($field = get_sub_field('content_image_with_caption')['content_image_with_caption_image']): ?>
															<?= wp_get_attachment_image($field['ID'], 'full') ?>
														<?php endif ?>

														<?php if ($field = get_sub_field('content_image_with_caption')['content_image_with_caption_caption']): ?>
															<figcaption><?= $field ?></figcaption>
														<?php endif ?>
														
													</figure>
												<?php endif ?>
												<?php break;

												case 'Link': ?>
												<?php if ($field = get_sub_field('content_link')): ?>
													<div class="btn-wrap">
														<a href="<?= $field['url'] ?>" class="btn-default btn-black"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
													</div>
												<?php endif ?>
												<?php break;

												case 'List': ?>
												<?php if( have_rows('content_list') ): ?>

													<ul class="list-point">

														<?php while( have_rows('content_list') ): the_row(); ?>

															<li>

																<?php if ($field = get_sub_field('content_list_title')): ?>
																	<h6><?= $field ?></h6>
																<?php endif ?>
																
																<?php if ($field = get_sub_field('content_list_text')): ?>
																	<p><?= $field ?></p>
																<?php endif ?>
																
															</li>

														<?php endwhile; ?>

													</ul>

												<?php endif; ?>
												<?php break;

												default:
												break;
											}
											?>

										<?php endwhile; ?>

									</div>

								<?php endif; ?>
								<?php break;

								default:
								break;
							}
							?>

						<?php endwhile; ?>
					<?php endif; ?>

				</div>

				<?php if (($featured_posts = get_sub_field('posts')) && get_sub_field('is_posts')): ?>

				<div class="bg-grey">
					<div class="content-width blog-text content-mini ">

						<?php if ($field = get_sub_field('posts_title')): ?>
							<h2><?= $field ?></h2>
						<?php endif ?>

						<div class="flex">

							<?php foreach($featured_posts as $post): 

								setup_postdata($post); ?>
								<div class="blog-item">

									<?php if (has_post_thumbnail()): ?>
										<figure>
											<a href="<?php the_permalink() ?>">
												<?php the_post_thumbnail('full') ?>
											</a>
										</figure>
									<?php endif ?>
									
									<div class="text">
										<h6>
											<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
										</h6>

										<?php if ($field = get_field('photo')): ?>
											<p><?= $field ?></p>
										<?php endif ?>
										
									</div>
								</div>
							<?php endforeach; ?>

							<?php wp_reset_postdata(); ?>

						</div>
					</div>
				</div>

			<?php endif ?>

		</div>

	<?php endwhile; ?>
<?php endif; ?>

</section>

<?php get_footer(); ?>