<?php
$title       = $widget['title'];
$postCount   = $widget['post_count'];
$select_type = $widget['select_type'];
$orderby     = $widget['select_order']['card_order_by'];
$order       = $widget['select_order']['card_order'];
$query_type  = $widget['query_type'];
//print_r( $select_type );
if ( ! $widget['show_on_top'] ) {
	$cat = $widget['category'][0];
} else {
	$cat = get_queried_object()->term_id;
}

$tags        = get_widget_tags( $widget['tags'] );

$list_category_explore_all = get_category_link( $cat );
//print_r( $tags );

if ( $query_type == 'cat_tag' ) {
	$posts = get_post_by_widget_query($cat,$tags,$postCount,$select_type,$orderby,$order);
} else if ( $query_type == 'post' ) {
	$posts = $widget['post'];
}
$dir_path = get_template_directory_uri();
//print_r( $posts );
$card_explore_all = get_category_link( get_the_category( $widget['post'][0]->ID )[0] );
if ( $posts ) {
?>
<style>
@media (max-width: 768px) and (min-width: 320px){
.suggested-widget .author-name {
height: 40px;
}
.suggested-widget .rending-title {

    height: 45px;
}}
</style>
<div class="suggested-widget explore-all"  style="background-image: <?php if ( isMobile() ) { echo generateRandomColor(); } ?>">
    <div id="<?php echo return_unique_id( $widget['show_on_top'], $widget['acf_fc_layout'], $category_key ); ?>" class="widget-anchor"></div>
    <?php if ( $title ) { ?>
            <p><?php echo $title; ?> </p>
		<?php } ?>
	<?php if ( isMobile() ) { ?>
        <amp-carousel class="featured-carousel" height="0" width="0" type="carousel" layout="responsive" controls>
			<?php
			foreach ( $posts as $post ) {
				$featured_image = get_field( 'featured_images', $post )[0]['sizes']['medium'];
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
                <div class="featrued-card-container" ">
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
				$featured_image = get_field( 'featured_images', $post )[0]['sizes']['medium'];
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
<?php } ?>