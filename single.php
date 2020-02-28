<?php get_header();
$dir_path = get_template_directory_uri();
//$featured_image = get_the_post_thumbnail_url();
// print_r($featured_image);
// $image_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
// $width = $image_array[1];
// $height = $image_array[2];
// if ((empty($featured_image))) {
//     $featured_image = getRandomImageForPost();
//     $width = 1;
//     $height = 1;
// }
$insta_read = get_field('featured_images', get_queried_object());
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
</style>

<main id="site-content" role="main">
    <amp-sidebar id="twimcast-sidebar" layout="nodisplay" side="right">
        <div class="twimcast-sidebar-container">
            <?php get_template_part('templates/twimcast', 'sidebar'); ?>
        </div>
    </amp-sidebar>
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
                                    <amp-social-share class="rounded" type="facebook" width="25" height="25" data-share-endpoint="http://www.facebook.com/sharer.php?u="></amp-social-share>
                                    <amp-social-share class="rounded" type="linkedin" width="25" height="25"></amp-social-share>
                                    <amp-social-share class="rounded" type="twitter" width="25" height="25"></amp-social-share>
                                    <amp-social-share type="system" width="25" height="25"></amp-social-share>
                                </div>
                            </div>
                            <div class="post-author-name" style="margin-top: 10px">
                                <p><span><?php echo get_the_author_meta('display_name', get_queried_object()->post_author); ?> in </span><span class="post-author-cat"><?php echo get_the_category(get_the_ID())[0]->name; ?></span></p>
                            </div>
                            <div class="post-read-time">
                                <p style="display: flex;align-items: center;font-size: 13px;color:#505050">
                                    <span><?php echo get_the_date("M d ,  Y"); ?></span>
                                    <span style="margin:0 5px">•</span>
                                    <span><?php echo get_field('length', get_queried_object()); ?> mins</span>
                                    <?php
                                    // echo get_post_meta(get_the_ID())['reading_time'][0];
                                    $post_type = get_field('intent_type', get_queried_object());
                                    if ($post_type == 'podcast') { ?>

                                    <?php    } else if ($post_type == 'read') { ?>
                                        <span style="margin-left: 5px"> mins</span>
                                    <?php    }
                                    ?>
                                </p>
                            </div>
                        </div>
                        <div style="background-color: #f1f3f4;margin: 0 -16px;">
                            <div class="post-excerpt">
                                <?php if (is_single()) {
                                    $audio_url = get_field('audio_upload')['url'];
                                    if (!(empty($audio_url))) {
                                ?>
                                        <div class="podcast-player-cover show-mobile" style="display:flex">
                                            <amp-audio style="width:100%" width="auto" height="40" src="<?php echo $audio_url; ?>" controlslist="nodownload">
                                                <div fallback>Your browser doesn’t support HTML5 audio</div>
                                            </amp-audio>
                                        </div>
                                <?php }
                                } ?>
                            </div>
                            <div class="post-insta-read">
                                <?php if (count($insta_read) > 1) { ?>
                                    <amp-carousel lightbox width="1" height="1" layout="responsive" type="slides" controls>
                                        <?php
                                        foreach ($insta_read as $val) { ?>
                                            <amp-img src="<?php echo $val; ?>" width="1" object-fit="cover" height="1" layout="responsive"></amp-img>
                                        <?php } ?>
                                    </amp-carousel>
                                <?php } ?>
                            </div>
                        </div>

                    </div>


                    <!-- Post text -->
                    <div class="entry-content">
                        <?php
                        echo get_post_field('post_content', get_the_ID());
                        ?>
                    </div>

                    <div class="recomended-posts" style="grid-row-gap:0;padding-left:16px;padding-right:16px">
                        <?php
                        $author_image = get_field('author_image', 'user_' . get_queried_object()->post_author)['sizes']['thumbnail'];
                        $author_url = get_the_permalink($post);
                        $post_author = get_the_author_meta('display_name', get_queried_object()->post_author);
                        if ((empty($author_image))) {
                            $author_image = getRandomImageForCategory();
                        }
                        ?>
                        <div style="border-bottom: 1px solid #ccc;">
                            <a href="<?php echo get_the_permalink($post); ?>">
                                <div class="post-list">
                                    <amp-img width="120" height="120" layout="responsive" object-fit="cover" alt="List icon" src="<?php echo $author_image; ?>"></amp-img>
                                    <div style="flex:1;margin-left:10px;justify-content: center;display: flex;flex-direction: column;">
                                        <h5 style="color: rgb(102, 96, 96);font-size: 12px;">Written By</h5>
                                        <h3 class="post-writer" style="margin:0"><?php echo $post_author; ?></h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div style="border-bottom: 1px solid #ccc;">
                            <?php
                            $catObj = get_the_category(get_queried_object()->ID)[0];
                            $cat_image = get_field('thumbnail', 'term_' . $catObj->term_id)['sizes']['thumbnail'];
                            $cat_url = get_the_permalink($post);
                            $cat_title = $catObj->name;
                            $cat_excerpt = $catObj->description;
                            if ((empty($cat_image))) {
                                $cat_image = getRandomImageForCategory();
                            }
                            ?>
                            <a href="<?php echo get_the_permalink($post); ?>">
                                <div class="post-list">
                                    <amp-img width="120" height="120" layout="responsive" object-fit="cover" alt="List icon" src="<?php echo $cat_image; ?>"></amp-img>
                                    <div style="flex:1;margin-left:10px;justify-content: center;display: flex;flex-direction: column;">
                                        <h5 style="color: rgb(102, 96, 96);font-size: 12px;">Insight From</h5>
                                        <h3 class="post-writer" style="margin:0"><?php echo $cat_title; ?></h3>
                                        <span style="color: gray;font-size: 12px;font-weight: 500;-webkit-line-clamp: 3;-webkit-box-orient: vertical;"><?php echo $cat_excerpt; ?></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="recomended-posts" style="grid-row-gap:0;padding-left:16px;padding-right:16px">
                        <h3 class="recomended-title">Related</h3>
                        <?php
                        $args = array(
                            'post_type' => array('post'),
                            'numberposts' => 4,
                            'cat' => get_the_category(get_queried_object()->ID)[0]->term_id
                        );
                        $posts = get_posts($args);
                        foreach ($posts as $post) {
                            $featured_image = get_field('featured_images', $post)[0];
                            $post_url = get_the_permalink($post);
                            $post_title = $post->post_title;
                            $post_excerpt = $post->post_excerpt;
                            $post_author = get_the_author_meta('display_name', $post->post_author);
                            $post_category = get_the_category($post->ID)[0]->name;
                            $post_date = get_the_date('d M', $post);
                            $post_readTime = get_field('length', $post);
                            $post_type = get_field('intent_type', $post);
                            if ((empty($featured_image))) {
                                $featured_image = getRandomImageForCategory();
                            }
                        ?>
                            <div style="border-bottom: 1px solid #ccc;">
                                <a href="<?php echo get_the_permalink($post); ?>">
                                    <div class="post-list">
                                        <amp-img width="120" height="120" layout="responsive" object-fit="cover" alt="List icon" src="<?php echo $featured_image; ?>"></amp-img>
                                        <div style="flex:1;margin-left:10px">
                                            <?php include(locate_template('templates/widget-templates/list-type.php', false, false)); ?>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php
                        }
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
