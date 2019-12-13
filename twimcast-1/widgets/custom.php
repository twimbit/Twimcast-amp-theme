<?php $title = $widget['title'];
$media = $widget['media']; ?>
<div class="custom-carousel amp-carousel-style explore-all">
    <div class="background-svg" hidden>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 370.404 387.706">
            <defs>
                <linearGradient id="linear-gradient" x1="0.5" x2="0.525" y2="1.214" gradientUnits="objectBoundingBox">
                    <stop offset="0" stop-color="#fff" stop-opacity="0.702" />
                    <stop offset="1" stop-color="#fff" stop-opacity="0" />
                </linearGradient>
            </defs>
            <path id="Path_377" data-name="Path 377" d="M13.388,0H356.06c7.57,0,13.707,7.841,13.707,17.513l.319,340.141c0,4.316-44.669,43.628-95.534,25.132-22.173-18.615-44.189-29.726-65.05-35.934-48.669-14.484-89.506-.839-105.061,7.169C30.378,393.446-.319,288.135-.319,17.513-.319,7.841,5.818,0,13.388,0Z" transform="translate(0.319)" fill="url(#linear-gradient)" />
        </svg>
    </div>
    <p><?php echo $title; ?> </p>
    <amp-carousel height="250" type="slides" layout="responsive" width=750>
        <?php foreach ($media as $image) {
            $image_url = $image['image']['sizes']['large'];
            $url = $image['link'];
            ?>
            <a href="<?php echo $url; ?>" style="width:670px;position:relative" target="_blank">
                <amp-img src='<?php echo $image_url; ?>' height="250" width="670" layout="fill" alt="a sample image">
                    <amp-img alt="Mountains" fallback height="250" width="670" height="368" src="<?php echo $dir_path; ?>/assets/images/fallback.jpg"></amp-img>
                </amp-img>
            </a>
        <?php } ?>
    </amp-carousel>
</div>