<!doctype html>

<html class="no-js" lang="en-US" amp="">

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Amp scripts -->
	<script async="" src="https://cdn.ampproject.org/v0.js"></script>
	<script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.2.js"></script>
	<script async custom-element="amp-audio" src="https://cdn.ampproject.org/v0/amp-audio-0.1.js"></script>
	<script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
	<script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
	<script async custom-element="amp-selector" src="https://cdn.ampproject.org/v0/amp-selector-0.1.js"></script>
	<script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>

	<!-- Amp analytics
	<script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
	<amp-analytics type="gtag" data-credentials="include">
		<script type="application/json">
			{
				"vars": {
					"gtag_id": "G-GY9R6EWH96",
					"config": {
						"G-GY9R6EWH96": {
							"groups": "default"
						}
					}
				}
			}
		</script>
	</amp-analytics> -->

	<?php if (is_single()) { ?>
		<meta name="twitter:image" content="<?php echo get_field('featured_images', get_queried_object()->ID)[0]; ?>">
		<meta property="og:image" content="<?php echo get_field('featured_images', get_queried_object()->ID)[0]; ?>">
		<meta property="og:image:secure_url" content="<?php echo get_field('featured_images', get_queried_object()->ID)[0]; ?>">
	<?php } ?>
	<title>
		<?php
		global $page, $paged;
		wp_title('|', true, 'right');
		// Add the blog name.
		bloginfo('name');
		// Add the blog description for the home/front page.
		$site_description = get_bloginfo('description', 'display');
		if ($site_description && (is_home() || is_front_page()))
			echo " | $site_description";
		// Add a page number if necessary:
		if ($paged >= 2 || $page >= 2)
			echo ' | ' . sprintf(__('Page %s', 'oscar'), max($paged, $page));
		?>
	</title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="amp-google-client-id-api" content="googleanalytics">
	<!--     <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<?php wp_head(); ?>

</head>

<body>
	<header class="main-footer show-mobile">
		<div class="footer-container">
			<a href="<?php echo home_url(); ?>" class="footer-home footer-icon">
				<h3>Twimbit</h3>
			</a>
			<a href="<?php echo home_url(); ?>" class="footer-home footer-icon" hidden>
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="21" height="21.988" viewBox="0 0 21 21.988">
					<defs>
						<clipPath id="clip-path">
							<rect width="21" height="21.988" fill="none" />
						</clipPath>
					</defs>
					<g id="home">
						<path id="_Icon_Сolor" data-name="🎨 Icon Сolor" d="M18.8,21.988H2.2a2.2,2.2,0,0,1-2.2-2.2V10.574A2.214,2.214,0,0,1,.671,8.992l9-8.674a1.252,1.252,0,0,1,1.667,0l8.994,8.673A2.216,2.216,0,0,1,21,10.574v9.213A2.2,2.2,0,0,1,18.8,21.988ZM7,10.987h7a1.136,1.136,0,0,1,1.167,1.1v7.7h3.489l.012-9.213L10.5,2.662,2.34,10.528l-.007,9.259h3.5v-7.7A1.136,1.136,0,0,1,7,10.987Zm1.167,2.2v6.6h4.666v-6.6Z" transform="translate(0 0)" fill="#0d1c2e" />
					</g>
				</svg>

			</a>
			<div class="footer-search footer-icon" style="flex: 0.3;margin-right: 20px;">
				<a class="footer-search footer-icon" on="tap:twimcast-sidebar.open" role="button" tabindex="1">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" viewBox="0 0 18 18">
						<defs>
							<clipPath id="clip-path">
								<path id="_Icon_Сolor" data-name="🎨 Icon Сolor" d="M17,18a.994.994,0,0,1-.707-.293l-3.4-3.395A7.91,7.91,0,0,1,8,16a8,8,0,1,1,8-8,7.909,7.909,0,0,1-1.688,4.9l3.395,3.4A1,1,0,0,1,17,18ZM8,2a6,6,0,1,0,6,6A6.007,6.007,0,0,0,8,2Z" transform="translate(0)" fill="#0d1c2e" />
							</clipPath>
						</defs>
						<g id="search">
							<path id="_Icon_Сolor-2" data-name="🎨 Icon Сolor" d="M17,18a.994.994,0,0,1-.707-.293l-3.4-3.395A7.91,7.91,0,0,1,8,16a8,8,0,1,1,8-8,7.909,7.909,0,0,1-1.688,4.9l3.395,3.4A1,1,0,0,1,17,18ZM8,2a6,6,0,1,0,6,6A6.007,6.007,0,0,0,8,2Z" fill="#0d1c2e" />
						</g>
					</svg>
				</a>
				<a class="footer-profile footer-icon" on="tap:twimcast-sidebar.open" role="button" tabindex="1">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23" height="16" viewBox="0 0 23 16">
						<defs>
							<clipPath id="clip-path">
								<rect width="23" height="16" fill="none" />
							</clipPath>
							<clipPath id="clip-path-2">
								<path id="_Icon_Сolor" data-name="🎨 Icon Сolor" d="M1.211,16A1.242,1.242,0,0,1,0,14.735V14.6a1.243,1.243,0,0,1,1.211-1.266H21.788A1.244,1.244,0,0,1,23,14.6v.136A1.242,1.242,0,0,1,21.788,16Zm0-6.666A1.243,1.243,0,0,1,0,8.068V7.932A1.242,1.242,0,0,1,1.211,6.667H21.788A1.242,1.242,0,0,1,23,7.932v.136a1.244,1.244,0,0,1-1.212,1.266Zm0-6.667A1.242,1.242,0,0,1,0,1.4V1.265A1.242,1.242,0,0,1,1.211,0H21.788A1.242,1.242,0,0,1,23,1.265V1.4a1.242,1.242,0,0,1-1.212,1.265Z" fill="#0d1c2e" />
							</clipPath>
						</defs>
						<g id="menu" clip-path="url(#clip-path)">
							<path id="_Icon_Сolor-2" data-name="🎨 Icon Сolor" d="M1.211,16A1.242,1.242,0,0,1,0,14.735V14.6a1.243,1.243,0,0,1,1.211-1.266H21.788A1.244,1.244,0,0,1,23,14.6v.136A1.242,1.242,0,0,1,21.788,16Zm0-6.666A1.243,1.243,0,0,1,0,8.068V7.932A1.242,1.242,0,0,1,1.211,6.667H21.788A1.242,1.242,0,0,1,23,7.932v.136a1.244,1.244,0,0,1-1.212,1.266Zm0-6.667A1.242,1.242,0,0,1,0,1.4V1.265A1.242,1.242,0,0,1,1.211,0H21.788A1.242,1.242,0,0,1,23,1.265V1.4a1.242,1.242,0,0,1-1.212,1.265Z" fill="#0d1c2e" />
						</g>
					</svg>
				</a>
			</div>
			<a class="footer-explore footer-icon" hidden>
				<svg xmlns="http://www.w3.org/2000/svg" width="15.986" height="18.329" viewBox="0 0 15.986 18.329">
					<g id="Component_409_1" data-name="Component 409 – 1" transform="translate(1 0.164)">
						<line id="Line_1" data-name="Line 1" y2="18.126" fill="none" stroke="#0d1c2e" stroke-width="2" />
						<line id="Line_2" data-name="Line 2" y2="18.126" transform="translate(5.333)" fill="none" stroke="#0d1c2e" stroke-width="2" />
						<line id="Line_3" data-name="Line 3" x2="3" y2="18" transform="translate(11)" fill="none" stroke="#0d1c2e" stroke-width="2" />
					</g>
				</svg>

			</a>

		</div>
	</header>