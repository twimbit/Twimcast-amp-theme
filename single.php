<?php get_header();
$dir_path = get_template_directory_uri();

$insta_read         = get_field( 'featured_images', get_queried_object() );
$author_image       = get_field( 'author_image', 'user_' . get_queried_object()->post_author )['sizes']['large'];
$author_permalink   = get_author_posts_url( get_queried_object()->post_author );
$category_permalink = get_category_link( get_the_category( get_the_ID() )[0]->term_id );
?>

<style>

    .amp-carousel-button-prev {
        background-position: 40% 36%;
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill='%23fff'%3E%3Cpath d='M15 8.25H5.87l4.19-4.19L9 3 3 9l6 6 1.06-1.06-4.19-4.19H15v-1.5z'/%3E%3C/svg%3E");
    }

    .amp-carousel-button-next {
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill='%23fff'%3E%3Cpath d='M9 3L7.94 4.06l4.19 4.19H3v1.5h9.13l-4.19 4.19L9 15l6-6z'/%3E%3C/svg%3E");
        background-size: 18px 18px;
    }

    .amp-carousel-button {
        position: relative;
        box-sizing: border-box;
        height: 34px;
        width: 34px;
        margin: 16px;
        border-style: none;
        border-radius: 2px;
        background-color: rgba(0, 0, 0, 0.5);
        background-position: 50% 50%;
        background-repeat: no-repeat;
        z-index: 10;
        pointer-events: all;
        display: block;
        top: auto;
    }

    @media (min-width: 770px) {
        .rending-title {
            height: 59px;
        }
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

        <div class="article_category">
            <div class="MuiBox-root jss1573 sc-fzplWN hRBsWH">
                <a href="<?php echo $category_permalink; ?>">
                    <div class="MuiChip-root-category-box MuiChip-colorPrimary MuiChip-clickable category-box-name"
                         tabindex="0" role="button">
                        <span class="MuiChip-label"><?php echo get_the_category( get_the_ID() )[0]->name; ?></span>
                        <span class="MuiTouchRipple-root"></span>
                    </div>

                    <h6 class="MuiTypography-root MuiTypography-subtitle1"
                        style="margin: 10px 5px;">
                        <?php echo get_the_category( get_the_ID() )[0]->description; ?>
                    </h6>
                </a>
            </div>
        </div>
        <section class="postArea" id="postTest">
            <div class="postArea-container">
                <div id="main-post-area" class="post-div article">
                    <div class="article_content_wrapper">
                        <div class="article_content">
<!--                        <div class="post-title-player-area1">-->
                                <div class="post-title article_text_header">
                                    <h3>
                                        <!-- post content -->
                                        <?php the_title(); ?>
                                    </h3>
                                </div>
                                <div class="MuiBox-root jss163 article_author">
                                    <a href="" style="text-transform: capitalize;">
                                        <div class="MuiBox-root jss164 author_credentials">
                                            <div class="MuiBox-root jss165" style="flex: 0.25 1 0%;">
                                                <amp-img width="20" height="20" layout="responsive" alt="List icon" lightbox="user" class="jss146"
                                                         src="<?php echo ! empty( $author_image ) ? $author_image : $dir_path . '/assets/images/author.png' ?>">
                                                </amp-img>

                                            </div>
                                            <div class="MuiBox-root jss166 author-name" style="flex: 2 1 0%;">
                                                <span class="MuiTypography-root jss147 MuiTypography-colorSecondary">
                                                    <span>
                                                        <a href="<?php echo $author_permalink; ?>">
                                                            <?php echo get_the_author_meta( 'display_name', get_queried_object()->post_author ); ?>
                                                        </a>
                                                    </span>
                                                </span>
                                                <span class="MuiTypography-root MuiTypography-colorSecondary" style="font-weight: 500;"></span>
                                            </div>
                                            <div class="MuiBox-root MuiTypography-colorSecondary ">
                                                <div class=" read-time">
                                                    <span class="MuiChip-label"><?php echo get_field( 'length', get_queried_object() ); ?> mins read</span>
                                                </div>
                                                <span class="MuiTypography-root MuiTypography-colorSecondary MuiTypography-alignCenter MuiTypography-displayBlock">
                                                    <?php echo get_the_date( "M d ,  Y" ); ?>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="post-inta-reads">
                                    <div class="post-excerpt show-mobile">
                                        <?php if ( is_single() ) {
                                            $audio_url = get_field( 'audio_upload' )['url'];
                                            if ( ! ( empty( $audio_url ) ) ) {
                                                ?>
                                                <div class="podcast-player-cover" style="display:flex">
                                                    <amp-audio style="width:100%" width="auto" height="40"
                                                               src="<?php echo $audio_url; ?>" controlslist="nodownload">
                                                        <div fallback>Your browser doesn’t support HTML5 audio</div>
                                                    </amp-audio>
                                                </div>
                                            <?php }
                                        } ?>
                                    </div>
                                    <div class="post-insta-read">
                                        <?php if ( ! empty( $insta_read ) && count( $insta_read ) > 1 ) { ?>
                                            <!--For mobile-->
                                            <amp-carousel lightbox width="1" height="1" layout="responsive" type="slides"
                                                          controls class="show-mobile">
                                                <?php
                                                foreach ( $insta_read as $val ) { ?>
                                                    <amp-img src="<?php echo $val['url']; ?>" width="1" object-fit="cover"
                                                             height="1" layout="responsive"></amp-img>
                                                <?php } ?>
                                            </amp-carousel>
                                            <!--For desktop-->
                                            <div class="show-desktop" style="position: relative;">
                                                <amp-carousel
                                                        class="insta-read-desktop-carousel"
                                                        controls
                                                        id="mainCarousel"
                                                        width="100"
                                                        height="1"
                                                        layout="responsive"
                                                        type="carousel"
                                                >
                                                    <?php foreach ( $insta_read as $key => $val ) { ?>
                                                        <amp-img
                                                                tabindex="1"
                                                                role="insta reads"
                                                                lightbox
                                                                src=<?php echo $val['url']; ?>
                                                                height="250"
                                                                width="250"
                                                                layout="responsive"
                                                                object-fit="cover"
                                                                style="box-shadow:0px 3px 6px #00000029;cursor: pointer"
                                                                on="tap:carouselLightBox,carouselWithPreview.goToSlide(index=index),carouselWithPreviewSelector.toggle(index=index,value=true)">
                                                        </amp-img>
                                                    <?php } ?>
                                                </amp-carousel>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
<!--                        </div>-->
                            <!-- Post text -->
                            <div class="post-content-container article_text_content">
                                <div class="entry-content">
                                    <?php
                                    echo apply_filters( 'the_content', get_post_field( 'post_content', get_the_ID() ) );
                                    if ( get_the_tags( get_queried_object()->term_id ) ) {
                                        ?>
                                        <div class="content-tags">
                                            <?php
                                            foreach ( (array) get_the_tags( get_queried_object()->term_id ) as $tag_val ) { ?>
                                                <a href="<?php echo get_category_link( $tag_val->term_id ); ?>"><span><?php echo $tag_val->name; ?></span></a>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!--Author and insight-->
                        <div class="recomended-posts">
							<?php
							$author_url  = get_the_permalink( $post );
							$post_author = get_the_author_meta( 'display_name', get_queried_object()->post_author );
							if ( ( empty( $author_image ) ) ) {
								$author_image = getRandomImageForCategory();
							}
							?>
                            <div>
                                <a href="<?php echo $author_permalink; ?>">
                                    <div class="post-list author-cat">
                                        <amp-img width="120" height="120" layout="responsive" object-fit="cover"
                                                 alt="List icon" src="<?php echo $author_image; ?>"></amp-img>
                                        <div style="flex:1;margin-left:25px;justify-content: center;display: flex;flex-direction: column;">
                                            <h5 style="color: rgb(102, 96, 96);font-size: 12px;">Written By</h5>
                                            <h3 class="post-writer" style="margin:0"><?php echo $post_author; ?></h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
								<?php
								$catObj      = get_the_category( get_queried_object()->ID )[0];
								$cat_image   = get_field( 'thumbnail', 'term_' . $catObj->term_id )['sizes']['thumbnail'];
								$cat_url     = get_the_permalink( $post );
								$cat_title   = $catObj->name;
								$cat_excerpt = $catObj->description;
								if ( ( empty( $cat_image ) ) ) {
									$cat_image = getRandomImageForCategory();
								}
								?>
                                <a href="<?php echo $category_permalink; ?>">
                                    <div class="category-list author-cat">
                                        <amp-img width="120" height="120" layout="responsive" object-fit="cover"
                                                 alt="List icon" src="<?php echo $cat_image; ?>" role=""></amp-img>
                                        <div style="flex:1;margin-left:25px;justify-content: center;display: flex;flex-direction: column;">
                                            <h5 style="color: rgb(102, 96, 96);font-size: 12px;">Insight From</h5>
                                            <h3 class="post-writer" style="margin:0"><?php echo $cat_title; ?></h3>
                                            <span class="insights"><?php echo $cat_excerpt; ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!--END author -->

                        <!--Recommended posts-->
						<?php
						$args  = array(
							'post_type'    => array( 'post' ),
							'numberposts'  => 4,
							'cat'          => get_the_category( get_queried_object()->ID )[0]->term_id,
							'orderby'      => 'date',
							'order'        => 'ASC',
							'post__not_in' => array( get_the_ID() )
						);
						$posts = get_posts( $args );
						if ( ! empty( $posts ) ) {
							?>

                            <div class="recomended-posts recommended"
                                 style="grid-row-gap:0;position: relative;">
                                <h3 class="recomended-title">Related</h3>
								<?php
								foreach ( $posts as $post ) {
									$featured_image = get_field( 'featured_images', $post )[0]['sizes']['medium'];
									$post_url       = get_the_permalink( $post );
									$post_title     = $post->post_title;
									$post_excerpt   = $post->post_excerpt;
									$post_author    = get_the_author_meta( 'display_name', $post->post_author );
									$post_category  = get_the_category( $post->ID )[0]->name;
									$post_date      = get_the_date( "M d ,  Y", $post );
									$post_readTime  = get_field( 'length', $post );
									$post_type      = get_field( 'intent_type', $post );
									if ( ( empty( $featured_image ) ) ) {
										$featured_image = getRandomImageForCategory();
									}
									?>
                                    <div>
                                        <a href="<?php echo get_the_permalink( $post ); ?>">
                                            <div class="post-list">
                                                <amp-img width="120" height="120" layout="responsive"
                                                         object-fit="cover"
                                                         alt="List icon"
                                                         src="<?php echo $featured_image; ?>"></amp-img>
                                                <div style="flex:1" class="post-list-description">
													<?php include( locate_template( 'templates/widget-templates/list-type.php', false, false ) ); ?>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
									<?php
								} ?>
                            </div>

							<?php
						}
						?>
                    </div>
                </div>

				<?php get_template_part( 'templates/twimcast', 'right' ) ?>
            </div>
        </section>
    </main><!-- #site-content -->

<?php
get_footer();
