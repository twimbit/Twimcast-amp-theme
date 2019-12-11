<?php
$title = $widget['title'];
$posts = $widget['posts'];
?>
<div class="featured-widget amp-carousel-style explore-all">
    <p><?php echo $title; ?> </p>
    <!-- for mobile -->
    <div class="show-mobile">
        <amp-carousel height="300" width="400" type="slides" layout="responsive">
            <?php foreach ($posts as $post) {
                $featured_image = get_the_post_thumbnail_url($post, 'medium');
                $post_url = get_the_permalink($post);
                $post_title = $post->post_title;
                if ((empty($featured_image))) {
                    $featured_image = getRandomImageForPost();
                }
                ?>
                <a href="<?php echo $post_url; ?>">
                    <amp-img src='<?php echo $featured_image; ?>' width="400" height="300" layout="responsive" alt="a sample image">
                        <amp-img alt="Mountains" fallback height="300" width="400" height="368" src="<?php echo $dir_path; ?>/assets/images/fallback.jpg"></amp-img>
                    </amp-img>
                    <p><?php echo $post_title; ?></p>
                </a>
            <?php } ?>
        </amp-carousel>
    </div>


    <!-- For desktop -->
    <div class="show-desktop">
        <amp-carousel height="0" width="0" type="carousel" controls layout="responsive">
            <?php foreach ($posts as $post) {
                $featured_image = get_the_post_thumbnail_url($post, 'thumbnail');
                $post_url = get_the_permalink($post);
                $post_title = $post->post_title;
                $category_url = get_category_link(get_the_category($post->ID)[0]);
                if ((empty($featured_image))) {
                    $featured_image = getRandomImageForPost();
                }
                ?>
                <a href="<?php echo $post_url; ?>" style="margin:10px" class="image-carousel">
                    <amp-img src='<?php echo $featured_image; ?>' layout="responsive" width="250" height="160" alt="a samp" style="height:160px;width:250px">
                        <amp-img alt="Mountains" fallback height="160" width="250" src="<?php echo $dir_path; ?>/assets/images/fallback.jpg"></amp-img>
                    </amp-img>
                    <p><?php echo $post_title; ?></p>
                </a>
            <?php } ?>
        </amp-carousel>
    </div>

    <a href="<?php echo $category_url; ?>" class="explore-all-link" hidden>
        <h4>Explore all <span>>></span></h4>
    </a>
    <hr style="margin-top:60px">
</div>