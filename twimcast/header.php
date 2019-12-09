<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Amp scripts -->
	<script async src="https://cdn.ampproject.org/v0.js"></script>
	<script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
	<script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.2.js"></script>
	<script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
	<script async custom-element="amp-lightbox" src="https://cdn.ampproject.org/v0/amp-lightbox-0.1.js"></script>
	<script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
	<!-- iphone meta tags	 -->
	<?php if (have_posts()) : while (have_posts()) : the_post();
		endwhile;
	endif; ?>
	<meta property="fb:app_id" content="713777305326587" />
	<meta property="fb:admins" content="1626522259" />

	<?php if (is_single()) { ?>
		<!-- Open Graph -->
		<meta property="og:url" content="<?php the_permalink() ?>" />
		<meta property="og:title" content="<?php single_post_title(''); ?>" />
		<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
		<meta property="og:type" content="article" />
		<meta property="og:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {
													echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID));
												} ?>" />
		<!-- Schema.org -->
		<meta itemprop="name" content="<?php single_post_title(''); ?>">
		<meta itemprop="description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>">
		<meta itemprop="image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {
												echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID));
											} ?>">
		<!-- Twitter Cards -->
		<meta property="twitter:card" content="summary">
		<meta property="twitter:site" content="Twimbit.pro">
		<meta property="twitter:title" content="<?php single_post_title(''); ?>">
		<meta property="twitter:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>">
		<meta property="twitter:creator" content="Twimbit User">
		<meta property="twitter:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {
														echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID));
													} ?>">
		<meta property="twitter:url" content="<?php the_permalink() ?>" />
		<meta property="twitter:domain" content="Twimbit Pro">

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