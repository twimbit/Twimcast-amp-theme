<?php $dir_path = get_template_directory_uri(); ?>
<div class="post-right">
    <div class="post-right-container" id="post-right-anim">
        <div href="#" role="button" tabindex="1" style="outline:none">
            <div class="post-share">
                <div class="share-text" hidden>
                    Share
                </div>

                <div class="share-icon">
                    <span>999</span>
                    <amp-social-share class="rounded" type="facebook" data-param-app_id="254325784911610" width="20" height="20"></amp-social-share>
                    <amp-social-share class="rounded" type="linkedin" width="20" height="20"></amp-social-share>
                    <amp-social-share class="rounded" type="twitter" width="20" height="20"></amp-social-share>
                    <amp-social-share type="system" width="20" height="20"></amp-social-share>
                </div>
            </div>
        </div>
        <?php if ((is_single()) || (is_page())) { ?>
            <div class="post-author-name">
                <p><span><?php echo get_the_author_meta('display_name', get_queried_object()->post_author); ?></span></p>
            </div>
            <div class="post-read-time">
                <p style="display: flex;align-items: center;font-size: 13px;">
                    <?php
                    // echo get_post_meta(get_the_ID())['reading_time'][0];
                    $post_type = get_field('intent_type', get_queried_object());
                    if ($post_type == 'podcast') {
                        if (is_single()) {
                            $audio_url = get_field('audio_upload')['url'];
                            if (!(empty($audio_url))) {
                    ?>
                                <div class="amp-player-post">
                                    <amp-audio width="auto" id="amp-player" height="30" src="https://my.twimcast.com/wp-content/uploads/2019/11/Diplo-Revolution-SEANBOBO-REMIX-1.mp3" controlslist="nodownload">
                                        <div fallback>Your browser doesn’t support HTML5 audio</div>
                                    </amp-audio>
                                </div>


                        <?php }
                        }
                    } else if ($post_type == 'read') {
                        echo '<span>' . get_field('length', get_queried_object()) . '</span>';
                        ?>

                        <span style="margin-left: 5px"> mins read time</span>
                    <?php    }
                    ?>
                </p>
            </div>
            <div class="post-excerpt">
                <p style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    padding-bottom: 5px;"><?php echo get_the_category(get_the_ID())[0]->name; ?></p>
                <p style="padding-top: 5px;"><?php echo get_the_category(get_the_ID())[0]->description; ?></p>
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
        </div>
    </div>
    <div class="post-playlist">
        <input type=text placeholder="Playlist" name=share id=post-subscribe aria-label="Search imput" />
        <div class="post-subscribe">
            <a href="#">Subscribe</a>
        </div>
    </div>

</div>