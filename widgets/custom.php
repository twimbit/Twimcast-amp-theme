<?php $title = $widget['title'];
$media = $widget['media'];
?>
<div class="custom-carousel amp-carousel-style explore-all">
    <p style=" top: -34px;"><?php echo $title; ?> </p>
    <!-- on="slideChange:carouselWithPreviewSelector.toggle(index=event.index, value=true)"  -->
    <amp-carousel class="show-desktop" height="300" type="slides" layout="responsive" width="400" id="carouselWithPreview" controls>
        <?php foreach ($media as $image) {
                                //print_r($image);
                                $image_url = $image['image']['url'];
                                $url = $image['link'];
                                $width = $image['image']['width'];
                                $height = $image['image']['height'];
                                if ((empty($image_url))) {
                                    $image_url = getRandomImageForCategory();
                                }
        ?>
            <a href="<?php echo $url; ?>" style="height:264px;top:14px;position:relative;border-radius:4px" target="_blank">
                <amp-img src='<?php echo $image_url; ?>' height="<?php echo $height; ?>" width="<?php echo $width; ?>" layout="responsive" alt="a sample image">
                </amp-img>
            </a>
        <?php } ?>
    </amp-carousel>

    <!-- for mobile -->
    <amp-carousel class="show-mobile" height="300" type="slides" layout="responsive" width="400" id="carouselWithPreview" controls on="slideChange:carouselWithPreviewSelector.toggle(index=event.index, value=true)">
        <?php foreach ($media as $image) {
                                                                                                //print_r($image);
                                                                                                $image_url = $image['image']['url'];
                                                                                                $url = $image['link'];
                                                                                                $width = $image['image']['width'];
                                                                                                $height = $image['image']['height'];
                                                                                                if ((empty($image_url))) {
                                                                                                    $image_url = getRandomImageForCategory();
                                                                                                }
        ?>
            <a href="<?php echo $url; ?>" style="height:264px;top:14px;position:relative;border-radius:4px" target="_blank">
                <amp-img src='<?php echo $image_url; ?>' height="300" width="768" layout="responsive" alt="a sample image">
                </amp-img>
            </a>
        <?php } ?>
    </amp-carousel>
    <div class="amp-selector show-mobile">
        <amp-selector id="carouselWithPreviewSelector" class="carousel-preview" on="select:carouselWithPreview.goToSlide(index=event.targetOption)" layout="container">
            <?php
                                                                                            $i = 0;
                                                                                            foreach ($media as $val) {
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