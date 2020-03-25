<?php get_header();
$dir_path       = get_template_directory_uri();
$queriedObj     = get_queried_object();
$image_array    = get_field( 'thumbnail', $queriedObj );
$category_image = $image_array['url'];
if ( ( empty( $category_image ) ) ) {
	$category_image = getRandomImageForCategory();
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
            background-image: url("<?php echo getRandomImageForCategory(); ?>");
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 270px;
            position: relative;
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
            padding-top: 50px;
            background-color: #fff;
        }

        @media (min-width: 770px) {
            div#main-post-area {
                margin-top: 0;
                width: auto;
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
                            <li><a href="#">First widget</a></li>
                            <li><a href="#">First widget</a></li>
                            <li><a href="#">First widget</a></li>
                            <li><a href="#">First widget</a></li>
                        </ul>
                    </div>

                    <div class="post-container">

						<?php include( locate_template( 'templates/widget-templates/cards.php', false, false ) ); ?>

                    </div>
                </div>
            </div>
        </section>
    </main><!-- #site-content -->

<?php
get_footer();
