<?php get_header(); ?>

<main id="site-content" role="main">
	<section id="twimcast-sidebar">
		<div class="twimcast-sidebar-container">
			<?php get_template_part('templates/twimcast', 'sidebar'); ?>
		</div>
	</section>
	<section class="widget-area">
		<div id="main-widget-area" class="widget-area-section">
			<?php $widgets = get_field('add_widgets', 'options');
			print_r($widgets);
			foreach ($widgets as $widget) {
				if ($widget['acf_fc_layout'] == 'custom_carousel') {
					$title = $widget['title'];
					$media = $widget['media'];
					?>
					<div class="custom-carousel amp-carousel-style explore-all">
						<div class="background-svg" hidden>
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 370.404 387.706">
								<defs>
									<linearGradient id="linear-gradient" x1="0.5" x2="0.525" y2="1.214" gradientUnits="objectBoundingBox">
										<stop offset="0" stop-color="#fff" stop-opacity="0.702" />
										<stop offset="1" stop-color="#fff" stop-opacity="0" />
									</linearGradient>
								</defs>
								<path id="Path_377" data-name="Path 377" d="M13.388,0H356.06c7.57,0,13.707,7.841,13.707,17.513l.319,340.141c0,4.316-44.669,43.628-95.534,25.132-22.173-18.615-44.189-29.726-65.05-35.934-48.669-14.484-89.506-.839-105.061,7.169C30.378,393.446-.319,288.135-.319,17.513-.319,7.841,5.818,0,13.388,0Z" transform="translate(0.319)" fill="url(#linear-gradient)" />
							</svg>
						</div>
						<p><?php echo $title; ?> </p>
						<amp-carousel height="250" type="slides" layout="fixed-height">
							<?php foreach ($media as $image) {
										$image_url = $image['image']['sizes']['large'];
										$url = $image['link'];
										?>
								<a href="<?php echo $url; ?>">
									<amp-img src='<?php echo $image_url; ?>' height="300" layout="fixed-height" alt="a sample image"></amp-img>
								</a>
							<?php } ?>
						</amp-carousel>
					</div>
				<?php
					} else if ($widget['acf_fc_layout'] == 'image_carousel') {
						$title = $widget['title'];
						$posts = $widget['posts'];
						?>
					<div class="featured-widget amp-carousel-style explore-all">
						<p><?php echo $title; ?> </p>
						<!-- for mobile -->
						<div class="show-mobile">
							<amp-carousel height="300" width="400" type="slides" layout="responsive">
								<?php foreach ($posts as $post) {
											$featured_image = get_the_post_thumbnail_url($post, 'medium');
											$post_url = get_the_permalink($post);
											?>
									<a href="<?php echo $post_url; ?>">
										<amp-img src='<?php echo $featured_image; ?>' width="400" height="300" layout="responsive" alt="a sample image"></amp-img>
									</a>
								<?php } ?>
							</amp-carousel>
						</div>


						<!-- For desktop -->
						<div class="show-desktop">
							<amp-carousel height="160" type="carousel" controls>
								<?php foreach ($posts as $post) {
											$featured_image = get_the_post_thumbnail_url($post, 'medium');
											$post_url = get_the_permalink($post);
											?>
									<a href="<?php echo $post_url; ?>" style="margin-right:8px">
										<amp-img src='<?php echo $featured_image; ?>' width="250" height="160" alt="a samp"></amp-img>
									</a>
								<?php } ?>
							</amp-carousel>
						</div>

						<a href="#" class="explore-all-link">
							<h4>Explore all <span>>></span></h4>
						</a>
						<hr>
					</div>
				<?php } else if ($widget['acf_fc_layout'] == 'list') {
						$title = $widget['title'];
						$posts = $widget['post'];
						?>
					<div class="trending-widget explore-all">
						<p><?php echo $title; ?> </p>
						<div id="myTrendingList">
							<?php
									$i = 1;
									foreach ($posts as $post) {
										$featured_image = get_the_post_thumbnail_url($post, 'medium');
										$post_url = get_the_permalink($post);
										$post_title = $post->post_title;
										$post_excerpt = $post->post_excerpt;
										$post_author = get_the_author_meta('display_name', $post->post_author);
										$post_category = get_the_category($post->ID)[0]->name;
										$post_date = get_the_date('d M', $post);
										$post_readTime = get_field('length', $post);
										if ($i == 1) { ?>
									<div class="trending-first">
										<div class="trending-list-container">
											<a href="#" aria-label="Bussiness Model">
												<div class="featured-img">
													<amp-img width="193" height="160" alt="List icon" src="<?php echo $featured_image; ?>"></amp-img>
												</div>
												<div class="rending-title"><?php echo $post_title; ?></div>
												<div class="trending-excerpt"><?php echo $post_excerpt; ?></div>
												<div class="author-category">
													<div class="author-name">
														<?php echo $post_author; ?>
													</div>
													<div class="category">
														<?php echo $post_category; ?>
													</div>
												</div>
												<div class="date-time-type">
													<div class="date">
														<?php echo $post_date; ?>
													</div>
													<div class="divider"></div>
													<div class="trending-time">
														<?php echo $post_readTime; ?> min
													</div>
													<div class="trending-type">
														icon
													</div>
													<div class="add-to-queue">
														<svg enable-background="new 0 0 32 32" id="Glyph" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
															<path d="M13,16c0,1.654,1.346,3,3,3s3-1.346,3-3s-1.346-3-3-3S13,14.346,13,16z" id="XMLID_294_" />
															<path d="M13,26c0,1.654,1.346,3,3,3s3-1.346,3-3s-1.346-3-3-3S13,24.346,13,26z" id="XMLID_295_" />
															<path d="M13,6c0,1.654,1.346,3,3,3s3-1.346,3-3s-1.346-3-3-3S13,4.346,13,6z" id="XMLID_297_" />
														</svg>
													</div>
												</div>
											</a>
										</div>
									</div>
								<?php	} else { ?>
									<div>
										<a href="#">
											<div class="trending-list">
												<amp-img width="120" height="120" alt="List icon" src="<?php echo $featured_image; ?>"></amp-img>
												<div style="flex:1;margin-left:10px">
													<div class="rending-title"><?php echo $post_title; ?></div>
													<div class="trending-excerpt"><?php echo $post_excerpt; ?></div>
													<div class="author-category">
														<div class="author-name">
															<?php echo $post_author; ?>
														</div>
														<div class="category">
															<?php echo $post_category; ?>
														</div>
													</div>
													<div class="date-time-type">
														<div class="date">
															<?php echo $post_date; ?>
														</div>
														<div class="divider"></div>
														<div class="trending-time">
															<?php echo $post_readTime; ?> min
														</div>
														<div class="trending-type">
															icon
														</div>
														<div class="add-to-queue">
															<svg enable-background="new 0 0 32 32" id="Glyph" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
																<path d="M13,16c0,1.654,1.346,3,3,3s3-1.346,3-3s-1.346-3-3-3S13,14.346,13,16z" id="XMLID_294_" />
																<path d="M13,26c0,1.654,1.346,3,3,3s3-1.346,3-3s-1.346-3-3-3S13,24.346,13,26z" id="XMLID_295_" />
																<path d="M13,6c0,1.654,1.346,3,3,3s3-1.346,3-3s-1.346-3-3-3S13,4.346,13,6z" id="XMLID_297_" />
															</svg>
														</div>
													</div>
												</div>
											</div>
										</a>
										<div class="trending-list-divider"></div>
									</div>
							<?php	}
										$i = $i + 1;
									} ?>


						</div>
						<a href="#" class="explore-all-link">
							<h4>Explore all <span>>></span></h4>
						</a>
						<hr>
					</div>
				<?php	} else if ($widget['acf_fc_layout'] == 'thumbnail_carousel') {
						$title = $widget['title'];
						$categories = $widget['category']
						?>
					<div class="trending-widget explore-all">
						<p><?php echo $title; ?> </p>
						<amp-carousel class="sub-cat" type="carousel" controls height="120">
							<div class="sub-cat-inner-container">
								<?php foreach ($categories as $category) {
											$cat_name = $category->name;
											$cat_thumbnail = get_field('thumbnail', $category)['sizes']['thumbnail'];
											$cat_url = get_category_link($category);
											?>
									<a href="<?php echo $cat_url; ?>" aria-label="Bussiness Model">
										<div class="sub-cat-img">
											<amp-img src="<?php echo $cat_thumbnail; ?>" width="160" height="110" alt="suggested thumbnail"></amp-img>
											<p><?php echo $cat_name; ?></p>
										</div>
									</a>
								<?php } ?>
							</div>
						</amp-carousel>
						<a href="#" class="explore-all-link">
							<h4>Explore all <span>>></span></h4>
						</a>
						<hr>
					</div>
				<?php	} else if ($widget['acf_fc_layout'] == 'card_carousel') {
						$title = $widget['title'];
						$post = $widget['post']
						?>
					<div class="suggested-widget explore-all" style="max-width:900px">
						<p><?php echo $title; ?> </p>
						<amp-carousel class="featured-carousel" type="carousel" controls height="315px">
							<div class="featrued-card-container">
								<a href="#" aria-label="Bussiness Model">
									<div class="featured-img">
										<amp-img width="251" height="160" alt="List icon" src="https://amp.dev/static/samples/img/image3.jpg"></amp-img>
									</div>
									<div class="rending-title">Title of the read</div>
									<div class="trending-excerpt">content excerpt</div>
									<div class="author-category">
										<div class="author-name">
											Author name
										</div>
										<div class="category">
											Category
										</div>
									</div>
									<div class="date-time-type">
										<div class="date">
											07 May
										</div>
										<div class="divider"></div>
										<div class="trending-time">
											5 Mins
										</div>
										<div class="trending-type">
											icon
										</div>
										<div class="add-to-queue">
											:
										</div>
									</div>
								</a>
							</div>
						</amp-carousel>
						<a href="#" class="explore-all-link">
							<h4>Explore all <span>>></span></h4>
						</a>
						<hr>
					</div>
			<?php	}
			}
			?>
			<div class="twimcast-text">
				<h2>TwimCast</h2>
			</div>
		</div>
	</section>

</main><!-- #site-content -->

<?php
get_footer();
