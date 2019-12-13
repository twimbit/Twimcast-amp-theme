<?php
$title = $widget['title'];
$posts = $widget['post'];
?>
<div class="trending-widget explore-all">
    <p><?php echo $title; ?> </p>
    <div id="myTrendingList">
        <?php
        $category_url;
        $i = 1;
        foreach ($posts as $post) {
            $featured_image = get_the_post_thumbnail_url($post, 'medium');
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
            if ($i == 1) {
                ?>
                <div class="trending-first">
                    <div class="trending-list-container">
                        <?php include(locate_template('templates/widget-templates/list-first.php', false, false)); ?>
                    </div>
                </div>
            <?php    } else { ?>
                <div>
                    <?php include(locate_template('templates/widget-templates/list-all.php', false, false)); ?>
                    <div class="trending-list-divider"></div>
                </div>
        <?php if ($i == 5) break;
            }
            $i = $i + 1;
        } ?>


    </div>
    <hr style="margin-top:70px">
</div>