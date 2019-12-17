<?php get_header();
$dir_path = get_template_directory_uri();
$queriedObj = get_queried_object();
$image_array = get_field('thumbnail', $queriedObj);
$featured_image = $image_array['url'];
$width = $image_array['width'];
$height = $image_array['height'];
if ((empty($featured_image))) {
    $featured_image = getRandomImageForCategory();
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
    <section class="postArea">
        <div class="postArea-container">
            <div id="main-post-area" class="post-div">
                <div class="post-container">
                    <div class="post-image">
                        <amp-img src='<?php echo $featured_image; ?>' height="<?php echo $height; ?>" width="<?php echo $width; ?>" layout="responsive" alt="a sample image"></amp-img>
                    </div>
                    <div class="post-title">
                        <h3>
                            <?php echo $queriedObj->name; ?>
                        </h3>
                        <div class="post-author-name">
                            <p hidden><span>Jessi</span><span>CX</span></p>
                        </div>
                    </div>
                    <div class="post-excerpt" hidden>
                        <p><?php echo $queriedObj->category_description; ?></p>
                    </div>
                    <div class="recomended-posts" style="font-family: 'Montserrat';">
                        <?php
                        $args = array(
                            'post_type' => array('post'),
                            'posts_per_page' => get_option('posts_per_page'),
                            'cat' => $queriedObj->term_id,
                            'paged' => get_query_var('paged') ? absint(get_query_var('paged')) : 1
                        );
                        $posts = get_posts($args);
                        foreach ($posts as $post) {
                            $featured_image = get_the_post_thumbnail_url($post, 'thumbnail');
                            $post_type = get_field('intent_type', $post);
                            if ((empty($featured_image))) {
                                $featured_image = getRandomImageForCategory();
                            }
                            ?>
                            <div>
                                <a href="<?php echo get_the_permalink($post); ?>">
                                    <div class="post-list">
                                        <amp-img width="120" height="120" layout="fill" alt="List icon" src="<?php echo $featured_image; ?>"></amp-img>
                                        <div style="flex:1;margin-left:10px">
                                            <div class="rending-title"><?php echo $post->post_title; ?></div>
                                            <div class="trending-excerpt"><?php echo $post->post_excerpt; ?></div>
                                            <div class="author-category">
                                                <div class="author-name">
                                                    <?php echo get_the_author_meta('display_name', $post->post_author); ?>
                                                </div>
                                                <div class="category">
                                                    <?php echo get_the_category($post->ID)[0]->name; ?>
                                                </div>
                                            </div>
                                            <div class="date-time-type">
                                                <div class="date">
                                                    <?php echo get_the_date('d M', $post); ?>
                                                </div>
                                                <div class="divider"></div>
                                                <div class="trending-time">
                                                    <?php echo get_field('length', $post); ?> min
                                                </div>
                                                <div class="trending-type">
                                                    <?php
                                                        if ($post_type == 'podcast') { ?>
                                                        <img src="<?php echo $dir_path . '/assets/images/svg/headphone.svg'; ?>" alt="">
                                                    <?php } elseif ($post_type == 'read') { ?>
                                                        <span>read</span><img src="<?php echo $dir_path . '/assets/images/svg/book.svg'; ?>" alt="">
                                                    <?php } ?>
                                                </div>
                                                <div class="add-to-queue" on="tab:add-queue-menu.show()">
                                                    <img src="<?php echo $dir_path . '/assets/images/svg/queue.svg'; ?>" alt="" role="button">
                                                </div>
                                            </div>
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
                            'prev_text'          => __('Previous', 'twentytwenty'),
                            'next_text'          => __('Next', 'twentytwenty'),
                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'twentytwenty') . ' </span>',
                        )
                    );
                    ?>
                </div>
            </div>
            <?php get_template_part('templates/twimcast', 'right') ?>
        </div>
    </section>
</main><!-- #site-content -->

<?php
get_footer();
