<?php get_header();
$dir_path = get_template_directory_uri();
$queriedObj = get_queried_object();
$image_array = get_field('thumbnail', $queriedObj);
$featured_image = $image_array['url'];
$width = $image_array['width'];
$height = $image_array['height'];
if ((empty($featured_image))) {
    $featured_image = getRandomImageForCategory();
}
?>

<main id="site-content" role="main">
    <div id="twimcast-sidebar-desk" class="show-desktop twimbit-sidebar-desktop">
        <div class="twimcast-sidebar-container">
			<?php get_template_part( 'templates/twimcast', 'sidebar' ); ?>
        </div>
    </div>
    <amp-sidebar id="twimcast-sidebar" layout="nodisplay" side="right">
        <div class="twimcast-sidebar-container">
            <?php get_template_part('templates/twimcast', 'sidebar'); ?>
        </div>
    </amp-sidebar>
    <section class="archiveArea">
        <div class="postArea-container">
            <div id="main-post-area" class="post-div">
                <div class="post-container">
                    <div class="post-title">
                        <h3 style="margin-left: 16px;margin-bottom: 16px;" >
                            <?php echo $queriedObj->name; ?>
                        </h3>
                        <div class="post-author-name">
                            <p hidden><span>Jessi</span><span>CX</span></p>
                        </div>
                    </div>
                    <div class="post-excerpt" hidden>
                        <p><?php echo $queriedObj->category_description; ?></p>
                    </div>
                    <div class="recomended-posts" style="border-bottom: 25px solid #f5f5f500;">
                        <?php
                        $args = array(
                            'post_type' => array('post'),
                            'posts_per_page' => get_option('posts_per_page'),
                            'cat' => $queriedObj->term_id,
                            'paged' => get_query_var('paged') ? absint(get_query_var('paged')) : 1
                        );
                        $posts = get_posts($args);
                        foreach ($posts as $post) {
                            $image_array = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                            $post_url = get_the_permalink($post);
                            $post_title = $post->post_title;
                            $post_excerpt = $post->post_excerpt;
                            $post_author = get_the_author_meta('display_name', $post->post_author);
                            $post_category = get_the_category($post->ID)[0]->name;
                            $post_date = get_the_date('d M', $post);
                            $post_readTime = get_field('length', $post);
                            $post_type = get_field('intent_type', $post);
                            $featured_image = get_the_post_thumbnail_url($post, 'thumbnail');
                            $post_type = get_field('intent_type', $post);
                            if ((empty($featured_image))) {
                                $featured_image = getRandomImageForCategory();
                            }
                        ?>
                            <div>
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
