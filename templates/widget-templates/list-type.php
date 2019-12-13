<div class="rending-title"><?php echo $post_title; ?></div>
<div class="trending-excerpt"><?php echo $post_excerpt; ?></div>
<div class="author-category">
    <div class="author-name">
        <?php echo $post_author; ?>
    </div>
    <div class="category">
        <?php echo $post_category; ?>
    </div>
</div>
<div class="date-time-type">
    <div class="date">
        <?php echo $post_date; ?>
    </div>
    <div class="divider"></div>
    <div class="trending-time" title="Read time">
        <?php echo $post_readTime; ?> min
    </div>
    <div class="trending-type">
        <?php
        if ($post_type == 'podcast') { ?>
            <img src="<?php echo $dir_path . '/assets/images/svg/headphone.svg'; ?>" alt="">
        <?php    } else if ($post_type == 'read') { ?>
            <span>read</span><img src="<?php echo $dir_path . '/assets/images/svg/book.svg'; ?>" alt="">
        <?php    }
        ?>
    </div>
    <div class="add-to-queue">
        <img src="<?php echo $dir_path . '/assets/images/svg/queue.svg'; ?>" alt="">
    </div>
</div>