<div class="trending-widget explore-all">
    <p><?php echo $title; ?> </p>
    <amp-carousel class="sub-cat" type="carousel" controls height="120">
        <!-- Loop assigned categories -->
        <?php foreach ($categories as $category) {
            $cat_name = $category->name;
            $cat_thumbnail = get_field('thumbnail', $category)['sizes']['thumbnail'];
            $cat_url = get_category_link($category);
            ?>
            <a href="<?php echo $cat_url; ?>" aria-label="Bussiness Model" class="thumbnail-carousel">
                <amp-img src="<?php echo $cat_thumbnail; ?>" width="150" height="110" alt="suggested thumbnail">
                    <amp-img alt="Mountains" fallback width="150" height="110" src="<?php echo $dir_path; ?>/assets/images/fallback.jpg"></amp-img>
                </amp-img>
                <p><?php echo $cat_name; ?></p>
            </a>
        <?php } ?>
    </amp-carousel>
    <a href="#" class="explore-all-link" hidden>
        <h4>Explore all <span>>></span></h4>
    </a>
    <hr style="margin-top: 60px">
</div>