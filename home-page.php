<?php

/**
 * Template Name: home page
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */ get_header();
$dir_path = get_template_directory_uri();
?>

<main id="site-content" role="main">
    <section id="twimcast-sidebar" class="">
        <div class="twimcast-sidebar-container">
            <?php get_template_part('templates/twimcast', 'sidebar'); ?>
        </div>
    </section>
    <section class="widget-area">
        <div id="main-widget-area" class="widget-area-section">
            <?php $widgets = get_field('add_widgets', 'options');
            //print_r($widgets);
            foreach ($widgets as $widget) {
                if ($widget['acf_fc_layout'] == 'custom_carousel') {
                    $title = $widget['title'];
                    $media = $widget['media'];
                    include(locate_template('widgets/custom.php', false, false));
                } else if ($widget['acf_fc_layout'] == 'image_carousel') {
                    $title = $widget['title'];
                    $posts = $widget['posts'];
                    include(locate_template('widgets/image-carousel.php', false, false));
                } else if ($widget['acf_fc_layout'] == 'list_post') {
                    $title = $widget['title'];
                    $posts = $widget['post'];
                    $category_url = get_category_link(get_the_category($widget['post'][0]->ID)[0]);
                    include(locate_template('widgets/list-post.php', false, false));
                } else if ($widget['acf_fc_layout'] == 'thumbnail_carousel') {
                    $title = $widget['title'];
                    $categories = $widget['category'];
                    include(locate_template('widgets/thumbnail-carousel.php', false, false));
                } else if ($widget['acf_fc_layout'] == 'card_carousel') {
                    $title = $widget['title'];
                    $post = $widget['post'];
                    $card_explore_all = get_category_link(get_the_category($widget['post'][0]->ID)[0]);
                    include(locate_template('widgets/card-carousel.php', false, false));
                } else if ($widget['acf_fc_layout'] == 'list_category') {
                    $title = $widget['title'];
                    $cat = $widget['category']->term_id;
                    $list_category_explore_all = get_category_link($cat);
                    $tags = array();
                    foreach ((array) $widget['tags'] as $tag) {
                        //pushing tags in tags array
                        array_push($tags, $tag->name);
                    }
                    //print_r($tags);
                    $args = array(
                        'post_type' => array('post'),
                        'cat' => $cat,
                        'tag' => $tags
                    );
                    $posts = get_posts($args);
                    if (empty(!($posts))) {
                        include(locate_template('widgets/list-category.php', false, false));
                    }
                }
            }
            ?>
            <div class="twimcast-text">
                <h2>TwimCast</h2>
            </div>
        </div>
    </section>

</main><!-- #site-content -->

<?php
get_footer();
