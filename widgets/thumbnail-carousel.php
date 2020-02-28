<?php
$title = $widget['title'];
$categories = $widget['category'];
if (!empty($categories)) {
?>

    <div class="thumbnail-widget explore-all">
        <p style="margin-left: 0;"><?php echo $title; ?> </p>
        <amp-carousel class="sub-cat" type="carousel" controls height="0" width="0" layout="responsive">
            <!-- Loop assigned categories -->
            <?php foreach ($categories as $category) {
                $cat_thumbnail = get_field('thumbnail', $category)['sizes']['thumbnail'];
                $cat_url = get_category_link($category);
                if ((empty($cat_thumbnail))) {
                    $cat_thumbnail = getRandomImageForCategory();
                }
            ?>
                <a href="<?php echo $cat_url; ?>" aria-label="Bussiness Model" class="thumbnail-carousel">
                    <p><?php echo $category->name; ?></p>
                    <amp-img layout="fixed-height" object-fit="cover" height="117" alt="List icon" src="<?php echo $cat_thumbnail; ?>">
                    </amp-img>

                </a>
            <?php } ?>
        </amp-carousel>
        <a href="#" class="explore-all-link" hidden>
            <h4>Explore all <span>>></span></h4>
        </a>

    </div>
<?php }
