<?php
$title       = $widget['title'];
$cat         = $widget['category'][0]->term_id;
$postCount   = $widget['post_count'];
$select_type = $widget['select_type'];
$orderby     = $widget['select_order']['card_order_by'];
$order       = $widget['select_order']['card_order'];
$query_type  = $widget['query_type'];
$tags        = array();

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
	$posts = $widget['posts'];
}
if ( empty( ! ( $posts ) ) ) {
	?>
    <div class="trending-widget explore-all">
        <div id="trending-widget" class="widget-anchor "></div>
        <p style="margin-bottom: 27px;"><?php echo $title; ?> </p>
        <div id="myTrendingList">
			<?php
			$i           = 1;
			$postsNumber = count( $posts );
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
				if ( $i == 1 ) { ?>
                    <div class="<?php if ( $postsNumber < 8 ) {
						echo "trending-first";
					} else if ( $postsNumber == 8 ) {
						echo "trending-span-3";
					} else {
						echo "list-divider";
					} ?> show-desktop">
                        <div class="trending-list-container">
							<?php include( locate_template( 'templates/widget-templates/list-first.php', false, false ) ); ?>
                        </div>
                    </div>
                    <div class="show-mobile list-divider">
						<?php include( locate_template( 'templates/widget-templates/list-all.php', false, false ) ); ?>
                    </div>
				<?php } else { ?>
                    <div class="<?php if ( $i == 2 && $postsNumber == 8 ) {
						echo "trending-span-3";
					} else {
						echo "list-divider";
					} ?>">
						<?php include( locate_template( 'templates/widget-templates/list-all.php', false, false ) ); ?>
                    </div>
					<?php
				}
				$i = $i + 1;
			} ?>
        </div>
		<?php if ( $query_type == 'cat_tag' && ! $widget['show_on_top'] ) { ?>
            <div class="explore-all-link">
                <h4><a href="<?php echo $list_category_explore_all; ?>">Explore all <span>>></span> </a></h4>
            </div>
		<?php } ?>
    </div>
<?php }
