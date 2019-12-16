<a href="<?php echo $post_url; ?>">
    <div class="trending-list">
        <amp-img layout="responsive" height="120" width="120" alt="List icon" src="<?php echo $featured_image; ?>">
            <amp-img alt="Mountains" fallback height="120" width="120" src="<?php echo $dir_path; ?>/assets/images/fallback.jpg"></amp-img>
        </amp-img>
        <div class="trending-list-content">
            <?php include(locate_template('templates/widget-templates/list-type.php', false, false)); ?>
        </div>
    </div>
</a>