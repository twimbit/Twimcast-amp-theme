<a href="<?php echo $post_url; ?>" aria-label="Bussiness Model">
    <div class="featured-img">
        <amp-img layout="fixed-height" object-fit="cover" height="160" alt="List icon" src="<?php echo $featured_image; ?>">
        </amp-img>
    </div>
    <?php include(locate_template('templates/widget-templates/list-type.php', false, false)); ?>
</a>