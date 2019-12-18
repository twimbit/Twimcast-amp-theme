<?php get_header();
$dir_path = get_template_directory_uri();
$featured_image = get_the_post_thumbnail_url();
// print_r($featured_image);
$image_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
$width = $image_array[1];
$height = $image_array[2];
if ((empty($featured_image))) {
    $featured_image = getRandomImageForPost();
    $width = 1;
    $height = 1;
}
?>


<main id="site-content" role="main">
    <section id="twimcast-sidebar">
        <div class="twimcast-sidebar-container">
            <?php get_template_part('templates/twimcast', 'sidebar'); ?>
        </div>
    </section>
    <section class="postArea" id="postTest">
        <div class="postArea-container">
            <div id="main-post-area" class="post-div">
                <div class="post-container">
                    <!--                    <div class="post-image">-->
                    <!--                        <amp-img src='--><?php //echo $featured_image; 
                                                                    ?>
                    <!--' height="--><?php //echo $height; 
                                        ?>
                    <!--" width="--><?php //echo $width; 
                                    ?>
                    <!--" layout="responsive" alt="a sample image"></amp-img>-->
                    <!--                    </div>-->

                    <div class="post-title-player-area">
                        <div class="post-title">
                            <h3>
                                <!-- post content -->
                                <?php the_title(); ?>
                            </h3>
                        </div>
                        <div class="post-meta-data show-mobile">
                            <div class="post-share">
                                <div class="share-text" hidden>
                                    Share
                                </div>

                                <div class="share-icon">
                                    <span>999</span>
                                    <amp-social-share class="rounded" type="facebook" data-param-app_id="254325784911610" width="20" height="20"></amp-social-share>
                                    <amp-social-share class="rounded" type="linkedin" width="20" height="20"></amp-social-share>
                                    <amp-social-share class="rounded" type="twitter" width="20" height="20"></amp-social-share>
                                    <amp-social-share class="rounded" type="whatsapp" width="20" height="20"></amp-social-share>
                                </div>
                            </div>
                            <div class="post-author-name" style="margin-top: 10px">
                                <p><span><?php echo get_the_author_meta('display_name', get_queried_object()->post_author); ?> in <?php echo get_the_category(get_the_ID())[0]->name; ?></span></p>
                            </div>
                            <div class="post-read-time">
                                <p style="display: flex;align-items: center;font-size: 13px;">
                                    <?php echo get_field('length', get_queried_object());
                                                                                                                                    // echo get_post_meta(get_the_ID())['reading_time'][0];
                                                                                                                                    $post_type = get_field('intent_type', get_queried_object());
                                                                                                                                    if ($post_type == 'podcast') { ?>

                                    <?php    } else if ($post_type == 'read') { ?>
                                        <span style="margin-left: 5px"> mins read time</span>
                                    <?php    }
                                    ?>
                                </p>
                            </div>
                        </div>
                        <div class="post-excerpt">
                            <?php if (is_single()) {
                                                                                                                                        $audio_url = get_field('audio_upload')['url'];
                                                                                                                                        if (!(empty($audio_url))) {
                            ?>
                                    <div class="podcast-player-cover show-mobile">
                                        <amp-audio style="width:100%" width="auto" height="40" src="<?php echo $audio_url; ?>" controlslist="nodownload">
                                            <div fallback>Your browser doesn’t support HTML5 audio</div>
                                        </amp-audio>
                                    </div>
                            <?php }
                                                                                                                                    } ?>
                        </div>
                    </div>


                    <!-- Post text -->
                    <div class="entry-content">
                        <?php
                                                                                                                                    echo get_post_field('post_content', get_the_ID());
                        ?>
                    </div>
                </div>
            </div>
            <?php get_template_part('templates/twimcast', 'right') ?>
        </div>
    </section>
</main><!-- #site-content -->

<?php
                                                                                                                                    get_footer();
