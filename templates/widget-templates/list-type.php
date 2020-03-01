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
    <?php $audio_url = get_field('audio_upload', $post)['url'];
    if ($audio_url) { ?>
        <div class="trending-time" title="Read time">
            <span><?php echo $post_readTime; ?> mins</span>
        </div>
        <div class="trending-type">
            <!-- <img src="<?php //echo $dir_path . '/assets/images/svg/headphone.svg'; 
                            ?>" alt=""> -->
        </div>
    <?php    } else if (($post_type == 'read') || ($post_type == "podcast")) { ?>
        <div class="trending-time" title="Read time">
            <span> <?php if (!(empty($post_readTime))) {
                        echo $post_readTime;
                    } ?></span>
        </div>
        <div class="trending-type">
            <span>min</span>
            <!-- <img src="<?php //echo $dir_path . '/assets/images/svg/book.svg'; 
                            ?>" alt=""> -->
        </div>
    <?php } ?>

    <div class="add-to-queue">
        <!-- <img src="<?php //echo $dir_path . '/assets/images/svg/queue.svg'; 
                        ?>" alt=""> -->
    </div>
</div>