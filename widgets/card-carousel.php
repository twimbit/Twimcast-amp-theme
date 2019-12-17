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
            $featured_image = get_the_post_thumbnail_url($post, 'thumbnail');
            $image_array = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
            $width = $image_array[1];
            $height = $image_array[2];
            if ((empty($featured_image))) {
                $featured_image = getRandomImageForPost();
                $width = 1;
                $height = 1;
            }
            ?>
            <div class="featrued-card-container">
                <a href="<?php echo get_the_permalink($post); ?>" aria-label="Bussiness Model" aria-label="<?php echo $post_author; ?>">
                    <div class="featured-img">
                        <amp-img width="<?php echo $width; ?>" layout="responsive" height="<?php echo $height; ?>" alt="List icon" src="<?php echo $featured_image; ?>">
                            <amp-img alt="Mountains" fallback width="251" height="200"  src="<?php echo $dir_path; ?>/assets/images/fallback.jpg"></amp-img>
                        </amp-img>
                    </div>
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
                        <div class="trending-time" title="Read time">
                            <?php echo get_field('length', $post); ?> min
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

</div>