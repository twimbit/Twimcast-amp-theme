<?php
$title = $widget['title'];
$posts = $widget['posts'];
?>
<div class="featured-widget amp-carousel-style explore-all">
    <p><?php echo $title; ?> </p>
    <!-- for mobile -->
    <div class="show-mobile">
        <amp-carousel height="0" width="0" type="slides" layout="responsive" id="carouselWithPreview-image" on="slideChange:carouselWithPreviewSelector-image.toggle(index=event.index, value=true)">
            <?php foreach ($posts as $post) {
                $featured_image = "";
                $post_url = get_the_permalink($post);
                $post_title = $post->post_title;
                if ((empty($featured_image))) {
                    $featured_image = getRandomImageForPost();
                }
            ?>
                <a href="<?php echo $post_url; ?>" class="image-slide">
                    <p><?php echo $post_title; ?></p>
                    <amp-img object-fit="cover" layout="fixed-height" height="216" alt="List icon" src="<?php echo $featured_image; ?>">
                    </amp-img>
                </a>
            <?php } ?>
        </amp-carousel>
        <div class="amp-selector show-mobile">
            <amp-selector id="carouselWithPreviewSelector-image" class="carousel-preview" on="select:carouselWithPreview-image.goToSlide(index=event.targetOption)" layout="container">
                <?php
                $i = 0;
                foreach ($posts as $val) {
                    if ($i == 0) {
                ?>
                        <div class="carousel-dot" option="<?php echo $i; ?>" selected></div>
                    <?php } else { ?>
                        <div option="<?php echo $i; ?>" class="carousel-dot"></div>
                <?php }
                    $i++;
                } ?>
            </amp-selector>
        </div>
    </div>


    <!-- For desktop -->
    <div class="show-desktop">

        <amp-carousel height="341" type="carousel" layout="fixed-height" controls style="margin-left:0">
            <?php foreach ($posts as $post) {
                $featured_image = get_field('featured_images', $post)[0];
                $post_url = get_the_permalink($post);
                $post_title = $post->post_title;
                $category_url = get_category_link(get_the_category($post->ID)[0]);
                if ((empty($featured_image))) {
                    $featured_image = getRandomImageForPost();
                }
            ?>
                <a class="image-slide-carousel" href="<?php echo $post_url; ?>">
                    <h3 class="featured-description"><?php echo $post_title; ?></h3>
                    <amp-img height="300" alt="List icon" object-fit="cover" src="<?php echo $featured_image; ?>" style="box-shadow: 0px 3px 6px #00000029"></amp-img>
                </a>
            <?php } ?>
        </amp-carousel>

        <amp-carousel height="0" width="0" type="carousel" controls layout="responsive" hidden>
            <?php foreach ($posts as $post) {
                $featured_image = get_field('featured_images', $post)[0];
                $post_url = get_the_permalink($post);
                $post_title = $post->post_title;
                $category_url = get_category_link(get_the_category($post->ID)[0]);
                $width = $image_array[1];
                $height = $image_array[2];
                if ((empty($featured_image))) {
                    $featured_image = getRandomImageForPost();
                }
            ?>
                <a href="<?php echo $post_url; ?>" style="margin-right:10px" class="image-carousel">
                    <p><?php echo $post_title; ?></p>
                    <amp-img layout="fixed-height" height="216" object-fit="cover" alt="List icon" src="<?php echo $featured_image; ?>">
                    </amp-img>

                </a>
            <?php } ?>
        </amp-carousel>
    </div>
    <a href="<?php echo $category_url; ?>" class="explore-all-link" hidden>
        <h4>Explore all <span>>></span></h4>
    </a>
</div>