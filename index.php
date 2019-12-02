<?php get_header(); ?>

<main id="site-content" role="main">
	<section id="twimcast-sidebar">
		<div class="twimcast-sidebar-container">
			<?php get_template_part('templates/twimcast', 'sidebar'); ?>
		</div>
	</section>
	<section class="widget-area">
		<div id="main-widget-area" class="widget-area-section">
			<?php //$widgets = get_field('add_widgets', 'options'); 
			?>
			<div class="custom-carousel amp-carousel-style explore-all">
				<?php get_template_part('widgets/widget', 'custom'); ?>
			</div>

			<div class="featured-widget amp-carousel-style explore-all">
				<?php get_template_part('widgets/widget', 'featured'); ?>
			</div>

			<div class="trending-widget explore-all">
				<?php get_template_part('widgets/widget', 'trending'); ?>
			</div>

			<div class="trending-widget explore-all">
				<?php get_template_part('widgets/widget', 'latest'); ?>
			</div>

			<div class="trending-widget explore-all">
				<?php get_template_part('widgets/widget', 'banking'); ?>
			</div>

			<div class="trending-widget explore-all">
				<?php get_template_part('widgets/widget', 'digital'); ?>
			</div>

			<div class="suggested-widget explore-all">
				<?php get_template_part('widgets/widget', 'suggested'); ?>
			</div>

			<div class="suggested-widget explore-all" style="max-width:900px">
				<?php get_template_part('widgets/widget', 'report'); ?>
			</div>

			<div class="twimcast-text">
				<h2>TwimCast</h2>
			</div>
		</div>
	</section>

</main><!-- #site-content -->

<?php
get_footer();
