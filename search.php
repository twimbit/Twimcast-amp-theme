<?php get_header();
$dir_path = get_template_directory_uri();
//$s_cats = array();
$s_posts = array();
/* creating posts and cats arrays from search results */
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		// array_push($s_cats, get_the_category(get_the_ID())[0]->term_id);
		array_push( $s_posts, get_post( get_the_ID() ) );
	}
}

//$u_cats = array_unique($s_cats);
?>

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
                        <div class="post-image" style="height:auto;box-shadow:none;">
                            <p class="search-heading"><?php printf( __( '%s Search Results found for : %s', 'twentysixteen' ), '<span>' . esc_html( $wp_query->found_posts ), esc_html( get_search_query() ) . '</span>' ); ?></p>
                        </div>
                        <div class="post-title" hidden>
                            <h3>
								<?php echo get_queried_object()->name; ?>
                            </h3>
                            <div class="post-author-name">
                                <p hidden><span>Jessi</span><span>CX</span></p>
                            </div>
                        </div>
                        <div class="post-excerpt" hidden>
                            <p><?php echo get_queried_object()->category_description; ?></p>
                        </div>
                        <div class="recomended-posts">
							<?php
							foreach ( $s_posts as $post ) {
								$post_url       = get_the_permalink( $post );
								$post_title     = $post->post_title;
								$post_excerpt   = $post->post_excerpt;
								$post_author    = get_the_author_meta( 'display_name', $post->post_author );
								$post_category  = get_the_category( $post->ID )[0]->name;
								$post_date      = get_the_date( 'd M', $post );
								$post_readTime  = get_field( 'length', $post );
								$post_type      = get_field( 'intent_type', $post );
								$featured_image = get_field( 'featured_images', $post )[0]['sizes']['thumbnail'];
								if ( ( empty( $featured_image ) ) ) {
									$featured_image = getRandomImageForCategory();
								}
								?>
                                <div>
                                    <a href="<?php echo get_the_permalink( $post ); ?>">
                                        <div class="post-list">
                                            <amp-img width="120" height="120" alt="List icon" layout="responsive"
                                                     src="<?php echo $featured_image; ?>"></amp-img>
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
                <div class="post-right">
                    <div class="post-right-container" hidden>
                        <a href="#">
                            <div class="post-share">
                                <div class="share-text">
                                    Share
                                </div>
                                <div class="share-icon">
                                    <span>999</span>
                                    <div class="share-svg">
                                        <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                             width="24px" height="24px">
                                            <path d="M 20 0 C 17.789063 0 16 1.789063 16 4 C 16 4.277344 16.039063 4.550781 16.09375 4.8125 L 7 9.375 C 6.265625 8.535156 5.203125 8 4 8 C 1.789063 8 0 9.789063 0 12 C 0 14.210938 1.789063 16 4 16 C 5.203125 16 6.265625 15.464844 7 14.625 L 16.09375 19.1875 C 16.039063 19.449219 16 19.722656 16 20 C 16 22.210938 17.789063 24 20 24 C 22.210938 24 24 22.210938 24 20 C 24 17.789063 22.210938 16 20 16 C 18.796875 16 17.734375 16.535156 17 17.375 L 7.90625 12.8125 C 7.960938 12.550781 8 12.277344 8 12 C 8 11.722656 7.960938 11.449219 7.90625 11.1875 L 17 6.625 C 17.734375 7.464844 18.796875 8 20 8 C 22.210938 8 24 6.210938 24 4 C 24 1.789063 22.210938 0 20 0 Z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-playlist">
                        <input type=text placeholder="Playlist" name=share id=post-subscribe aria-label="Search imput"/>
                        <div class="post-subscribe">
                            <a href="#">Subscribe</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- #site-content -->

<?php
get_footer();
