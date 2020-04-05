<?php
$title = $widget['title'];
$postCount = $widget['post_count'];
$select_type = $widget['select_type'];
$orderby = $widget['select_order']['card_order_by'];
$order = $widget['select_order']['card_order'];
$query_type = $widget['query_type'];
$tags = get_widget_tags($widget['tags']);

if (!$widget['show_on_top']) {
    $cat = $widget['category'][0];
} else {
    $cat = get_queried_object()->term_id;
}
if ($cat) {
    $list_category_explore_all = get_category_link($cat);
} else {
    $list_category_explore_all = get_category_link(get_term_by('slug', $tags[0], 'post_tag')->term_id);
}

//print_r( $select_type );


if ($query_type == 'cat_tag') {
    $posts = get_post_by_widget_query($cat, $tags, $postCount, $select_type, $orderby, $order);

} else if ($query_type == 'post') {
    $posts = $widget['posts'];
}


if ($posts) {
    ?>
    <div class="trending-widget explore-all">
        <div id="<?php echo return_unique_id($widget['show_on_top'], $widget['acf_fc_layout'], $category_key); ?>"
             class="widget-anchor"></div>
        <?php if ($title) { ?>
            <p style="margin-bottom: 27px;"><?php echo $title; ?> </p>
        <?php } ?>
        <div id="myTrendingList">
            <?php
            $i = 1;
            $postsNumber = count($posts);
            foreach ($posts as $post) {
                $featured_image = get_field('featured_images', $post)[0]['sizes']['medium'];
                $post_url = get_the_permalink($post);
                $post_title = $post->post_title;
                $post_excerpt = $post->post_excerpt;
                $post_author = get_the_author_meta('display_name', $post->post_author);
                $post_category = get_the_category($post->ID)[0]->name;
                $post_date = get_the_date('d M', $post);
                $post_readTime = get_field('length', $post);
                $post_type = get_field('intent_type', $post);
                if ((empty($featured_image))) {
                    $featured_image = getRandomImageForPost();
                }
                if ($i == 1) { ?>
                    <div class="<?php if ($postsNumber < 8) {
                        echo "trending-first";
                    } else if ($postsNumber == 8) {
                        echo "trending-span-3";
                    } else {
                        echo "list-divider";
                    } ?> show-desktop">
                        <div class="trending-list-container">
                            <?php include(locate_template('templates/widget-templates/list-first.php', false, false)); ?>
                        </div>
                    </div>
                    <div class="show-mobile list-divider">
                        <?php include(locate_template('templates/widget-templates/list-all.php', false, false)); ?>
                    </div>
                <?php } else { ?>
                    <div class="<?php if ($i == 2 && $postsNumber == 8) {
                        echo "trending-span-3";
                    } else {
                        echo "list-divider";
                    } ?>">
                        <?php include(locate_template('templates/widget-templates/list-all.php', false, false)); ?>
                    </div>
                    <?php
                }
                $i = $i + 1;
            } ?>
        </div>
        <?php if ($query_type == 'cat_tag' && !$widget['show_on_top'] && $list_category_explore_all) { ?>
            <div class="explore-all-link">
                <h4><a href="<?php echo $list_category_explore_all; ?>">Explore all <span>>></span> </a></h4>
            </div>
        <?php } ?>
    </div>
<?php }
