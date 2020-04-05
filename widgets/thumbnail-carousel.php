<?php
$title         = $widget['title'];
$categories    = $widget['category'];
$authors       = $widget['authors'];
$tags          = $widget['tags'];
$select_series = $widget['select_series'];
//print_r( $authors );

if ( $select_series == 'category' ) {
	$series = $categories;
} else if ( $select_series == 'tags' ) {
	$series = $tags;

} else if ( $select_series == 'author' ) {
	$author_array = array();
	foreach ( (array) $authors as $key => $author ) {
		$author_array[ $key ]['name']            = $author['user']['display_name'];
		$author_array[ $key ]['author_image']    = get_field( 'author_image', 'user_' . $author['user']['ID'] )['sizes']['thumbnail'];
		$author_array[ $key ]['author_page_url'] = get_author_posts_url( $author['user']['ID'] );
	}
	$series = $author_array;
}
//print_r( $author_array );
if ( ! empty( $series ) ) {
	?>

    <div class="thumbnail-widget explore-all" style="background-image: <?php if ( isMobile() ) {
		echo generateRandomColor();
	} ?>">
        <div id="<?php echo return_unique_id( $widget['show_on_top'], $widget['acf_fc_layout'], $category_key ); ?>"
             class="widget-anchor"></div>
		<?php if ( $title ) { ?>
            <p><?php echo $title; ?> </p>
		<?php } ?>
        <amp-carousel class="sub-cat" type="carousel" controls height="0" width="0" layout="responsive">
            <!-- Loop assigned categories -->
			<?php foreach ( $series as $val ) {
				$cat_thumbnail = get_field( 'thumbnail', $val )['sizes']['thumbnail'];
				$cat_url       = get_category_link( $val );
				$cat_name      = $val->name;
				if ( $select_series == 'author' ) {
					$cat_thumbnail = $val['author_image'];
					$cat_url       = $val['author_page_url'];
					$cat_name      = $val['name'];
				}
				if ( ( empty( $cat_thumbnail ) ) ) {
					$cat_thumbnail = getRandomImageForCategory();
				}
				?>
                <a href="<?php echo $cat_url; ?>" aria-label="Bussiness Model" class="thumbnail-carousel">
                    <p><?php echo $cat_name; ?></p>
                    <amp-img layout="fixed-height" object-fit="cover" height="81" alt="List icon"
                             src="<?php echo $cat_thumbnail; ?>">
                    </amp-img>

                </a>
			<?php } ?>
        </amp-carousel>
        <a href="#" class="explore-all-link" hidden>
            <h4>Explore all <span>>></span></h4>
        </a>

    </div>
<?php }
