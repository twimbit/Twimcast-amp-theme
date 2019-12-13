<div class="post-right">
    <div class="post-right-container">
        <div href="#" on="tap:amp-share.toggleClass(class='hide-player')" role="button" tabindex="1" style="outline:none">
            <div class="post-share">
                <div class="share-text">
                    Share
                </div>
                <div class="share-icon">
                    <span>999</span>
                    <div class="share-svg">
                        <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">
                            <path d="M 20 0 C 17.789063 0 16 1.789063 16 4 C 16 4.277344 16.039063 4.550781 16.09375 4.8125 L 7 9.375 C 6.265625 8.535156 5.203125 8 4 8 C 1.789063 8 0 9.789063 0 12 C 0 14.210938 1.789063 16 4 16 C 5.203125 16 6.265625 15.464844 7 14.625 L 16.09375 19.1875 C 16.039063 19.449219 16 19.722656 16 20 C 16 22.210938 17.789063 24 20 24 C 22.210938 24 24 22.210938 24 20 C 24 17.789063 22.210938 16 20 16 C 18.796875 16 17.734375 16.535156 17 17.375 L 7.90625 12.8125 C 7.960938 12.550781 8 12.277344 8 12 C 8 11.722656 7.960938 11.449219 7.90625 11.1875 L 17 6.625 C 17.734375 7.464844 18.796875 8 20 8 C 22.210938 8 24 6.210938 24 4 C 24 1.789063 22.210938 0 20 0 Z" /></svg>
                    </div>
                </div>
            </div>
        </div>
        <?php if (is_single() || is_page()) { ?>
            <div class="post-author-name">
                <p><span><?php echo get_the_author_meta('display_name', get_queried_object()->post_author); ?></span></p>
            </div>
            <div class="post-read-time">
                <p>
                    <?php echo get_field('length', get_queried_object());
                        $post_type = get_field('intent_type', get_queried_object());
                        if ($post_type == 'podcast') { ?>
                        <span>min listen</span>
                    <?php    } else if ($post_type == 'read') { ?>
                        <span>min read time</span>
                    <?php    }
                        ?>
                </p>
            </div>
            <div class="post-excerpt">
                <?php echo the_excerpt(); ?>
            </div>
        <?php } else if (is_archive()) { ?>
            <div class="post-excerpt">
                <?php echo get_queried_object()->category_description; ?>
            </div>
        <?php } ?>
        <div class="light-share-container hide-player" id="amp-share">
            <svg on="tap:amp-share.toggleClass(class='hide-player')" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.112 31.112" xml:space="preserve" tabindex="1" role="button">
                <polygon points="31.112,1.414 29.698,0 15.556,14.142 1.414,0 0,1.414 14.142,15.556 0,29.698 1.414,31.112 15.556,16.97 29.698,31.112 31.112,29.698 16.97,15.556 " />
            </svg>
            <amp-social-share class="rounded" type="facebook" data-param-app_id="254325784911610" width="32" height="32"></amp-social-share>
            <amp-social-share class="rounded" type="linkedin" width="32" height="32"></amp-social-share>
            <amp-social-share class="rounded" type="twitter" width="32" height="32"></amp-social-share>
            <amp-social-share class="rounded" type="whatsapp" width="32" height="32"></amp-social-share>
        </div>
    </div>
    <div class="post-playlist">
        <input type=text placeholder="Playlist" name=share id=post-subscribe aria-label="Search imput" />
        <div class="post-subscribe">
            <a href="#">Subscribe</a>
        </div>
    </div>
</div>