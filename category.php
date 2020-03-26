<?php get_header();
$dir_path       = get_template_directory_uri();
$queriedObj     = get_queried_object();
$image_array    = get_field( 'thumbnail', $queriedObj );
$category_image = $image_array['url'];
$cover_image    = get_field( 'cover_image', $queriedObj )['url'];
if ( ( empty( $category_image ) ) ) {
	$category_image = getRandomImageForCategory();
}
if ( function_exists( 'get_field' ) ) {
	$widgets = get_field( 'category_widgets', $queriedObj );
}
?>
    <style>
        .archiveArea {
            margin-left: 16vw;
            padding-left: 0;
            font-family: "Segoe UI Regular", "Segoe UI Symbo", -apple-system, BlinkMacSystemFont, "Helvetica Neue", Helvetica, sans-serif;
        }

        div#main-post-area {
            margin-right: 0;
        }

        .category-cover {
            background-image: url("<?php echo $cover_image; ?>");
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 270px;
            position: relative;
            background-position: center;
        }

        .category-title-top {
            position: absolute;
            z-index: 2;
            bottom: 0;
            left: 0;
            right: 0;
            height: 130px;
            display: flex;
        }

        .background-blur {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            height: 130px;
            backdrop-filter: blur(30px) brightness(0.76);
            z-index: 1;
        }

        .category-thumb amp-img {
            transform: scale(1) translate(42px, -155px);
            border-radius: 7px;
            box-shadow: 0 3px 6px black;
            position: sticky;
            top: 0;
        }

        .category-thumb {
            height: 46px;
        }

        .title-desc {
            margin-left: 210px;
            color: #fff;
        }

        .title-desc h3 {
            margin: 10px 0 0 0;
            font-size: 36px;
            font-weight: 500;
        }

        .title-desc h4 {
            margin: 10px 0 0 0;
            font-size: 18px;
        }

        .widget-list {
            background-color: #fff;
            position: sticky;
            top: 0;
            z-index: 1;
            border-bottom: 1px #ccc solid;
            height: 46px;
            display: flex;
        }

        .widget-list ul {
            list-style: none;
            display: flex;
            height: 46px;
            align-items: center;
            margin: 0;
        }


        .widget-list a {
            text-decoration: none;
            font-size: 14px;
            color: #494949;
            height: 46px;
            display: flex;
            align-items: center;
            padding: 0 10px;
        }

        .widget-list a:hover {
            background-color: hsla(0, 0%, 79.6%, .19);
        }

        .post-container {
            background-color: #fff;
            padding: 20px 100px 20px 100px;
        }

        html {
            scroll-behavior: smooth;
        }

        .widget-list li {
            max-width: 150px;
        }

        .widget-list span {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal;
            -webkit-line-clamp: 1;
        }

        @media (min-width: 770px) {
            div#main-post-area {
                margin-top: 0;
                width: auto;
            }

            .explore-all {
                display: inline-block;
                box-shadow: 3px 3px 14px rgba(0, 0, 0, .16);
            }
        }


        /*transform: scale(0.25) translate(84px, 330px);*/
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
                    <div class="category-cover">
                        <div class="background-blur"></div>
                        <div class="category-title-top">

                            <div class="title-desc">
                                <h3><?php echo $queriedObj->name; ?></h3>
                                <h4><?php echo $queriedObj->category_description; ?></h4>
                            </div>
                        </div>
                    </div>

                    <div class="widget-list">
                        <div class="category-thumb">
                            <amp-position-observer
                                    on="scroll:animateSmall.seekTo(percent=event.percent)"
                                    intersection-ratios="1"
                                    layout="nodisplay">
                            </amp-position-observer>
                            <amp-img id="categoryThumb" src="<?php echo $category_image; ?>"
                                     object-fit="cover"
                                     height="141" width="141"></amp-img>
                        </div>
                        <amp-animation id="animate" layout="nodisplay">
                            <script type="application/json">
                                {
                                    "duration": "500ms",
                                    "fill": "both",
                                    "easing": "ease-out",
                                    "animations": [
                                        {
                                            "selector": "#categoryThumb",
                                            "keyframes": [
                                                {
                                                    "transform": "scale(1) translate(42px, -185px)"
                                                },
                                                {
                                                    "transform": "scale(0.2) translate(42px, -100px)"
                                                }
                                            ]
                                        }
                                    ]
                                }
                            </script>
                        </amp-animation>
                        <ul>
							<?php
							//print_r($widgets);
							foreach ( (array) $widgets as $widget ) {
								if ( $widget['acf_fc_layout'] == 'image_carousel' ) {
									if ( $widget['show_on_top'] == "yes" ) { ?>
                                        <li><a href="#featured-widget"><?php echo $widget['title'] ?></a></li>
									<?php }
								} else if ( $widget['acf_fc_layout'] == 'thumbnail_carousel' ) {
									if ( $widget['show_on_top'] == "yes" ) { ?>
                                        <li><a href="#thumbnail-carousel"><?php echo $widget['title'] ?></a></li>
									<?php }
								} else if ( $widget['acf_fc_layout'] == 'card_carousel' ) {
									if ( $widget['show_on_top'] == "yes" ) { ?>
                                        <li><a href="#card-carousel"><?php echo $widget['title'] ?></a></li>
									<?php }
								} else if ( $widget['acf_fc_layout'] == 'list_category' ) {
									if ( $widget['show_on_top'] == "yes" ) { ?>
                                        <li><a href="#list-category"><?php echo $widget['title'] ?></a></li>
									<?php }
								} else if ( $widget['acf_fc_layout'] == 'standard' ) {
									if ( $widget['show_on_top'] == "yes" ) { ?>
                                        <li><a href="#trending-widget"><span><?php echo $widget['title'] ?></span></a>
                                        </li>
									<?php }
								}
							}
							?>
                        </ul>
                    </div>

                    <div class="post-container">
						<?php
						//print_r($widgets);
						foreach ( (array) $widgets as $widget ) {
							if ( $widget['acf_fc_layout'] == 'image_carousel' ) {
								include( locate_template( 'widgets/image-carousel.php', false, false ) );
							} else if ( $widget['acf_fc_layout'] == 'thumbnail_carousel' ) {
								include( locate_template( 'widgets/thumbnail-carousel.php', false, false ) );
							} else if ( $widget['acf_fc_layout'] == 'card_carousel' ) {
								include( locate_template( 'widgets/card-carousel.php', false, false ) );
							} else if ( $widget['acf_fc_layout'] == 'list_category' ) {
								include( locate_template( 'widgets/list-category.php', false, false ) );
							} else if ( $widget['acf_fc_layout'] == 'standard' ) {
								include( locate_template( 'widgets/standard.php', false, false ) );
							}
						}
						?>

                    </div>
                </div>
            </div>
        </section>
    </main><!-- #site-content -->

<?php
get_footer();
