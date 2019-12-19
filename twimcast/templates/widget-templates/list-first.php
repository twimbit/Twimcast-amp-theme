<a href="<?php echo $post_url; ?>" aria-label="Bussiness Model">
    <div class="featured-img">
        <amp-img width="<?php echo $width; ?>" layout="responsive" height="<?php echo $height; ?>" alt="List icon" src="<?php echo $featured_image; ?>">
            <amp-img alt="Mountains" fallback height="160" width="193" src="<?php echo $dir_path; ?>/assets/images/fallback.jpg"></amp-img>
        </amp-img>
    </div>
    <?php include(locate_template('templates/widget-templates/list-type.php', false, false)); ?>
</a>