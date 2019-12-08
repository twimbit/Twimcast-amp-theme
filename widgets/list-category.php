<div class="trending-widget explore-all">
    <p><?php echo $title; ?> </p>
    <div id="myTrendingList">
        <?php
        $i = 1;
        foreach ($posts as $post) {
            $featured_image = get_the_post_thumbnail_url($post, 'medium');
            $post_url = get_the_permalink($post);
            $post_title = $post->post_title;
            $post_excerpt = $post->post_excerpt;
            $post_author = get_the_author_meta('display_name', $post->post_author);
            $post_category = get_the_category($post->ID)[0]->name;
            $post_date = get_the_date('d M', $post);
            $post_readTime = get_field('length', $post);
            $post_type = get_field('intent_type', $post);
            if ($i == 1) { ?>
                <div class="trending-first">
                    <div class="trending-list-container">
                        <a href="<?php echo $post_url; ?>" aria-label="Bussiness Model">
                            <div class="featured-img">
                                <amp-img width="193" height="160" alt="List icon" src="<?php echo $featured_image; ?>"></amp-img>
                            </div>
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
                        </a>
                    </div>
                </div>
            <?php    } else { ?>
                <div>
                    <a href="<?php echo $post_url; ?>">
                        <div class="trending-list">
                            <amp-img width="120" height="120" alt="List icon" src="<?php echo $featured_image; ?>"></amp-img>
                            <div style="flex:1;margin-left:10px">
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
                                            <span>read</span> <img src="<?php echo $dir_path . '/assets/images/svg/book.svg'; ?>" alt="">
                                        <?php    }
                                                ?>
                                    </div>
                                    <div class="add-to-queue">
                                        <img src="<?php echo $dir_path . '/assets/images/svg/queue.svg'; ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="trending-list-divider"></div>
                </div>
        <?php if ($i == 5) break;
            }
            $i = $i + 1;
        } ?>
    </div>
    <a href="<?php echo $list_category_explore_all; ?>" class="explore-all-link">
        <h4>Explore all <span>>></span></h4>
    </a>
    <hr>
</div>