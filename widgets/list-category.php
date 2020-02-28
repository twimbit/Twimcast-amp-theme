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
        <p style="margin-bottom: 27px;"><?php echo $title; ?> </p>
        <div id="myTrendingList">
            <?php
            $i = 1;
            $postsNumber = count($posts);
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
                    $featured_image = getRandomImageForPost();
                }
                if ($i == 1) { ?>
                    <div class="trending-first show-desktop">
                        <div class="trending-list-container">
                            <?php include(locate_template('templates/widget-templates/list-first.php', false, false)); ?>
                        </div>
                    </div>
                    <div class="show-mobile list-divider">
                        <?php include(locate_template('templates/widget-templates/list-all.php', false, false)); ?>
                    </div>
                <?php    } else { ?>
                    <div class="<?php if ($i == 5) {
                                    echo "show-desktop";
                                } ?> list-divider">
                        <?php include(locate_template('templates/widget-templates/list-all.php', false, false)); ?>
                    </div>
            <?php if ($i == 5) break;
                }
                $i = $i + 1;
            } ?>
        </div>
        <div class="explore-all-link">
            <h4><a href="<?php echo $list_category_explore_all; ?>">Explore all <span>>></span> </a></h4>
        </div>

    </div>
<?php }
