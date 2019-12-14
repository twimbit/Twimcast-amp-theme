<?php $title = $widget['title'];
$media = $widget['media'];
?>
<div class="custom-carousel amp-carousel-style explore-all">
    <div class="background-svg" hidden>

    </div>
    <p><?php echo $title; ?> </p>
    <amp-carousel height="250" type="slides" layout="responsive" width=750 id="carouselWithPreview" on="slideChange:carouselWithPreviewSelector.toggle(index=event.index, value=true)">
        <?php foreach ($media as $image) {
            // print_r($image);
            $image_url = $image['image']['sizes']['large'];
            $url = $image['link'];
            $width = $image['image']['sizes']['large-width'];
            $height = $image['image']['sizes']['large-height'];
            if ((empty($image_url))) {
                $image_url = getRandomImageForCategory();
            }
            ?>
            <a href="<?php echo $url; ?>" style="width:670px;position:relative;border-radius:4px" target="_blank">
                <amp-img src='<?php echo $image_url; ?>' height="<?php echo $height; ?>" width="<?php echo $width; ?>" layout="responsive" alt="a sample image">
                    <amp-img alt="Mountains" fallback height="250" width="670" height="368" src="<?php echo $dir_path; ?>/assets/images/fallback.jpg"></amp-img>
                </amp-img>
            </a>
        <?php } ?>
    </amp-carousel>
    <div class="amp-selector show-mobile">
        <amp-selector id="carouselWithPreviewSelector" class="carousel-preview" on="select:carouselWithPreview.goToSlide(index=event.targetOption)" layout="container">
            <div class="carousel-dot" option="0" selected></div>
            <div option="1" class="carousel-dot"></div>
            <div option="2" class="carousel-dot"></div>
        </amp-selector>
    </div>
</div>