<?php get_header();
$cat_img = get_field('thumbnail', get_queried_object())['sizes']['large'];
$dir_path = get_template_directory_uri();
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
                        <amp-img src='<?php echo $cat_img; ?>' height="250" layout="fixed-height" alt="a sample image"></amp-img>
                    </div>
                    <div class="post-title">
                        <h3>
                            <?php echo get_queried_object()->name; ?>
                        </h3>
                        <div class="post-author-name">
                            <p hidden><span>Jessi</span><span>CX</span></p>
                        </div>
                    </div>
                    <div class="post-excerpt">
                        <p><?php echo get_queried_object()->category_description; ?></p>
                    </div>
                    <div class="recomended-posts" style="font-family: 'Montserrat';">
                        <?php
                        $args = array(
                            'post_type' => array('post'),
                            'cat' => get_queried_object()->term_id,
                        );
                        $posts = get_posts($args);
                        foreach ($posts as $post) {
                            $featured_image = get_the_post_thumbnail_url($post, 'thumbnail');
                            $post_url = get_the_permalink($post);
                            $post_title = $post->post_title;
                            $post_excerpt = $post->post_excerpt;
                            $post_author = get_the_author_meta('display_name', $post->post_author);
                            $post_category = get_the_category($post->ID)[0]->name;
                            $post_date = get_the_date('d M', $post);
                            $post_readTime = get_field('length', $post);
                            $post_type = get_field('intent_type', $post); ?>

                            <div>
                                <a href="<?php echo $post_url; ?>">
                                    <div class="post-list">
                                        <amp-img width="120" height="120" alt="List icon" src="<?php echo $featured_image; ?>"></amp-img>
                                        <div style="flex:1;margin-left:10px">
                                            <div class="rending-title"><?php echo $post_title; ?></div>
                                            <div class="trending-excerpt"><?php echo $post_excerpt; ?></div>
                                            <div class="author-category">
                                                <div class="author-name">
                                                    <?php echo $post_author; ?>
                                                </div>
                                                <div class="category">
                                                    <?php echo $post_category; ?>
                                                </div>
                                            </div>
                                            <div class="date-time-type">
                                                <div class="date">
                                                    <?php echo $post_date; ?>
                                                </div>
                                                <div class="divider"></div>
                                                <div class="trending-time">
                                                    <?php echo $post_readTime; ?> min
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
                </div>
            </div>
            <?php get_template_part('templates/twimcast', 'right') ?>
        </div>
    </section>
</main><!-- #site-content -->

<?php
get_footer();
