<a href="<?php echo $post_url; ?>">
    <div class="trending-list">
        <amp-img layout="responsive" object-fit="cover" height="120" width="120" alt="List icon" src="<?php echo $featured_image?>">
        </amp-img>
        <div class="trending-list-content">
            <?php include(locate_template('templates/widget-templates/list-type.php', false, false)); ?>
        </div>
    </div>
</a>