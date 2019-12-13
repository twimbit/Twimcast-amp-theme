<?php
$title = $widget['title'];
$cat = $widget['category'][0]->term_id;
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
    ?>
    <div class="trending-widget explore-all">
        <p><?php echo $title; ?> </p>
        <div id="myTrendingList">
            <?php
                $i = 1;
                foreach ($posts as $post) {
                    $featured_image = get_the_post_thumbnail_url($post, 'thumbnail');
                    $post_url = get_the_permalink($post);
                    $post_title = $post->post_title;
                    $post_excerpt = $post->post_excerpt;
                    $post_author = get_the_author_meta('display_name', $post->post_author);
                    $post_category = get_the_category($post->ID)[0]->name;
                    $post_date = get_the_date('d M', $post);
                    $post_readTime = get_field('length', $post);
                    $post_type = get_field('intent_type', $post);
                    $image_array = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
                    $width = $image_array[1];
                    $height = $image_array[2];
                    if ((empty($featured_image))) {
                        $featured_image = getRandomImageForPost();
                        $width = 1;
                        $height = 1;
                    }
                    if ($i == 1) { ?>
                    <div class="trending-first show-desktop">
                        <div class="trending-list-container">
                            <?php include(locate_template('templates/widget-templates/list-first.php', false, false)); ?>
                        </div>
                    </div>
                    <div class="show-mobile">
                        <?php include(locate_template('templates/widget-templates/list-all.php', false, false)); ?>
                        <div class="trending-list-divider"></div>
                    </div>
                <?php    } else { ?>
                    <div class="<?php if ($i == 5) {
                                                echo "show-desktop";
                                            } ?>" style="padding-top: 4px">
                        <?php include(locate_template('templates/widget-templates/list-all.php', false, false)); ?>
                        <div class="trending-list-divider <?php if ($i == 4 || $i == 5) {
                                                                            echo "hide-item";
                                                                        } ?>"></div>
                    </div>
            <?php if ($i == 5) break;
                    }
                    $i = $i + 1;
                } ?>
        </div>
        <a href="<?php echo $list_category_explore_all; ?>" class="explore-all-link">
            <h4>Explore all <span>>></span></h4>
        </a>
        <hr>
    </div>
<?php }
