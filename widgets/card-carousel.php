<?php
$title       = $widget['title'];
$cat         = $widget['category'][0]->term_id;
$postCount   = $widget['post_count'];
$select_type = $widget['select_type'];
$orderby     = $widget['select_order']['card_order_by'];
$order       = $widget['select_order']['card_order'];
$query_type  = $widget['query_type'];
//print_r( $select_type );
$tags = array();
foreach ( (array) $widget['tags'] as $tag ) {
	//pushing tags in tags array
	array_push( $tags, $tag->slug );
}
$list_category_explore_all = get_category_link( $cat );
//print_r( $tags );
$args = array(
	'numberposts' => $postCount,
	'post_type'   => array( 'post' ),
	'tax_query'   => array(
		'relation' => 'OR',
		array(
			'taxonomy' => 'category',
			'field'    => 'id',
			'terms'    => $cat
		),
		array(
			'taxonomy' => 'post_tag',
			'field'    => 'slug',
			'terms'    => $tags
		),
		array(
			'taxonomy' => 'types',
			'field'    => 'id',
			'terms'    => $select_type
		)
	),
	'order_by'    => $orderby,
	'order'       => $order
);

if ( $query_type == 'cat_tag' ) {
	$posts = get_posts( $args );
} else if ( $query_type == 'post' ) {
	$posts = $widget['post'];
}
//print_r( $posts );
$card_explore_all = get_category_link( get_the_category( $widget['post'][0]->ID )[0] );
?>
<div class="suggested-widget explore-all">
    <div id="card-carousel" class="widget-anchor "></div>
    <p><?php echo $title;

		$dir_path = get_template_directory_uri();
		?> </p>
	<?php if ( isMobile() ) { ?>
        <amp-carousel class="featured-carousel" height="0" width="0" type="carousel" layout="responsive" controls>
			<?php
			foreach ( $posts as $post ) {
				$featured_image = get_field( 'featured_images', $post )[0];
				$post_url       = get_the_permalink( $post );
				$post_title     = $post->post_title;
				$post_excerpt   = $post->post_excerpt;
				$post_author    = get_the_author_meta( 'display_name', $post->post_author );
				$post_category  = get_the_category( $post->ID )[0]->name;
				$post_date      = get_the_date( 'd M', $post );
				$post_readTime  = get_field( 'length', $post );
				$post_type      = get_field( 'intent_type', $post );
				if ( ( empty( $featured_image ) ) ) {
					$featured_image = getRandomImageForPost();
				}
				?>
                <div class="featrued-card-container">
                    <a href="<?php echo get_the_permalink( $post ); ?>" aria-label="Bussiness Model"
                       aria-label="<?php echo $post_author; ?>">
                        <div class="featured-img">
                            <amp-img layout="fixed-height" object-fit="cover" height="160" alt="List icon"
                                     src="<?php echo $featured_image; ?>">
                            </amp-img>
                        </div>
						<?php include( locate_template( 'templates/widget-templates/list-type.php', false, false ) ); ?>
                    </a>
                </div>
			<?php } ?>
        </amp-carousel>
	<?php } else { ?>
        <div class="card-widget-container">
			<?php foreach ( $posts as $post ) {
				$featured_image = get_field( 'featured_images', $post )[0];
				$post_url       = get_the_permalink( $post );
				$post_title     = $post->post_title;
				$post_excerpt   = $post->post_excerpt;
				$post_author    = get_the_author_meta( 'display_name', $post->post_author );
				$post_category  = get_the_category( $post->ID )[0]->name;
				$post_date      = get_the_date( 'd M', $post );
				$post_readTime  = get_field( 'length', $post );
				$post_type      = get_field( 'intent_type', $post );
				if ( ( empty( $featured_image ) ) ) {
					$featured_image = getRandomImageForPost();
				}
				?>

                <div class="card-widget-card list-divider">
					<?php include( locate_template( 'templates/widget-templates/list-all.php', false, false ) ); ?>
                </div>

			<?php } ?>
        </div>
	<?php } ?>
</div>