<?php get_header();
$dir_path     = get_template_directory_uri();
$queriedObj   = get_queried_object();
$image_array  = get_field( 'thumbnail', $queriedObj );
$author_image = get_field( 'author_image', 'user_' . $queriedObj->data->ID )['sizes']['large'];
if ( ( empty( $author_image ) ) ) {
	$author_image = getRandomImageForCategory();
}
?>
    <style>
        .category-image amp-img {
            margin-top: 17px    ;
        }

        .category-title {
            justify-content: unset;
            margin-top: 17px;
        }
    </style>
    <main id="site-content" role="main">
        <div id="twimcast-sidebar-desk" class="show-desktop twimbit-sidebar-desktop">
            <div class="twimcast-sidebar-container">
				<?php get_template_part( 'templates/twimcast', 'sidebar' ); ?>
            </div>
        </div>
        <amp-sidebar id="twimcast-sidebar" layout="nodisplay" side="right">
            <div class="twimcast-sidebar-container">
				<?php get_template_part( 'templates/twimcast', 'sidebar' ); ?>
            </div>
        </amp-sidebar>
        <section class="archiveArea">
            <div class="postArea-container">
                <div id="main-post-area" class="post-div">
                    <div class="post-container">
                        <div class="category-meta">
                            <div class="category-image">
                                <amp-img width="70" height="70" alt="List icon" lightbox="category"
                                         src="<?php echo $author_image; ?>"></amp-img>
                            </div>
                            <div class="category-title">
                                <h3>
									<?php echo $queriedObj->data->display_name; ?>
                                </h3>
                                <p><?php echo $queriedObj->roles[0]; ?></p>
                            </div>
                        </div>

                        <div class="recomended-posts" style="border-bottom: 25px solid #f5f5f500;">
							<?php
							$args  = array(
								'post_type'      => array( 'post' ),
								'posts_per_page' => get_option( 'posts_per_page' ),
								'author'         => $queriedObj->data->ID,
								'paged'          => get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1
							);
							$posts = get_posts( $args );
							foreach ( $posts as $post ) {
								$image_array    = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' );
								$post_url       = get_the_permalink( $post );
								$post_title     = $post->post_title;
								$post_excerpt   = $post->post_excerpt;
								$post_author    = get_the_author_meta( 'display_name', $post->post_author );
								$post_category  = get_the_category( $post->ID )[0]->name;
								$post_date      = get_the_date( 'd M', $post );
								$post_readTime  = get_field( 'length', $post );
								$post_type      = get_field( 'intent_type', $post );
								$featured_image = get_field( 'featured_images', $post )[0]['sizes']['thumbnail'];
								$post_type      = get_field( 'intent_type', $post );
								if ( ( empty( $featured_image ) ) ) {
									$featured_image = getRandomImageForCategory();
								}
								?>
                                <div>
                                    <a href="<?php echo get_the_permalink( $post ); ?>">
                                        <div class="post-list">
                                            <amp-img width="120" height="120" layout="responsive" object-fit="cover"
                                                     alt="List icon" src="<?php echo $featured_image; ?>"></amp-img>
                                            <div style="flex:1;margin-left:10px">
												<?php include( locate_template( 'templates/widget-templates/list-type.php', false, false ) ); ?>
                                            </div>
                                        </div>
                                    </a>

                                </div>
								<?php
							}
							?>
                        </div>
						<?php // Previous/next page navigation.
						the_posts_pagination(
							array(
								'prev_text'          => __( 'Previous', 'twentytwenty' ),
								'next_text'          => __( 'Next', 'twentytwenty' ),
								'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentytwenty' ) . ' </span>',
							)
						);
						?>
                    </div>
                </div>
				<?php get_template_part( 'templates/twimcast', 'right' ) ?>
            </div>
        </section>
    </main><!-- #site-content -->

<?php
get_footer();
