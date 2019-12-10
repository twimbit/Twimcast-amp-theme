<?php
$title = $widget['title'];
$post = $widget['post'];
$card_explore_all = get_category_link(get_the_category($widget['post'][0]->ID)[0]);
?>
<div class="suggested-widget explore-all">
    <p><?php echo $title;

        $dir_path = get_template_directory_uri();
        ?> </p>
    <amp-carousel class="featured-carousel" height="0" width="0" type="carousel" layout="responsive" controls>
        <?php
        foreach ($posts as $post) {
            $featured_image = get_the_post_thumbnail_url($post, 'medium');
            $post_url = get_the_permalink($post);
            $post_title = $post->post_title;
            $post_excerpt = $post->post_excerpt;
            $post_author = get_the_author_meta('display_name', $post->post_author);
            $post_category = get_the_category($post->ID)[0]->name;
            $post_date = get_the_date('d M', $post);
            $post_readTime = get_field('length', $post); ?>
            <div class="featrued-card-container">
                <a href="<?php echo $post_url; ?>" aria-label="Bussiness Model" aria-label="<?php echo $post_author; ?>">
                    <div class="featured-img">
                        <amp-img width="251" height="160" alt="List icon" src="<?php echo $featured_image; ?>">
                            <amp-img alt="Mountains" fallback width="251" height="160" height="368" src="<?php echo $dir_path; ?>/assets/images/fallback.jpg"></amp-img>
                        </amp-img>
                    </div>
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
                        <div class="trending-time" title="Read time">
                            <?php echo $post_readTime; ?> min
                        </div>
                        <div class="trending-type">
                            <?php
                                if ($post_type == 'podcast') { ?>
                                <img src="<?php echo $dir_path . '/assets/images/svg/headphone.svg'; ?>" alt="">
                            <?php    } else if ($post_type == 'read') { ?>
                                <img src="<?php echo $dir_path . '/assets/images/svg/book.svg'; ?>" alt="">
                            <?php    }
                                ?>
                        </div>
                        <div class="add-to-queue">
                            <img src="<?php echo $dir_path . '/assets/images/svg/queue.svg'; ?>" alt="">
                        </div>
                    </div>
                </a>
            </div>
        <?php } ?>
    </amp-carousel>
    <a href="<?php echo $card_explore_all; ?>" class="explore-all-link" hidden>
        <h4>Explore all <span>>></span></h4>
    </a>
    <hr style="margin-top: 60px">
</div>