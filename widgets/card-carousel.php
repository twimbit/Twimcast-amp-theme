<?php
$title = $widget['title'];
$posts = $widget['post'];
$card_explore_all = get_category_link(get_the_category($widget['post'][0]->ID)[0]);
?>
<div class="suggested-widget explore-all">
    <p><?php echo $title;

        $dir_path = get_template_directory_uri();
        ?> </p>
    <amp-carousel class="featured-carousel" height="0" width="0" type="carousel" layout="responsive" controls>
        <?php
        foreach ($posts as $post) {
            $featured_image = "";
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
        ?>
            <div class="featrued-card-container">
                <a href="<?php echo get_the_permalink($post); ?>" aria-label="Bussiness Model" aria-label="<?php echo $post_author; ?>">
                    <div class="featured-img">
                        <amp-img layout="fixed-height" object-fit="cover" height="160" alt="List icon" src="<?php echo $featured_image; ?>">
                        </amp-img>
                    </div>
                    <?php include(locate_template('templates/widget-templates/list-type.php', false, false)); ?>
                </a>
            </div>
        <?php } ?>
    </amp-carousel>
    <a href="<?php echo $card_explore_all; ?>" class="explore-all-link" hidden>
        <h4>Explore all <span>>></span></h4>
    </a>

</div>