<?php get_header(); 
$dir_path = get_template_directory_uri();
?>

<main id="site-content" role="main">
    <section id="twimcast-sidebar">
        <div class="twimcast-sidebar-container">
            <?php get_template_part('templates/twimcast', 'sidebar'); ?>
        </div>
    </section>
    <section class="postArea">
        <div class="postArea-container">
            <div id="main-post-area" class="post-div">
                <div class="post-container">
                    <div class="post-image">
                        <amp-img src='<?php echo the_post_thumbnail_url('large'); ?>' height="250" layout="fixed-height" alt="a sample image"></amp-img>
                        <?php $audio_url = get_field('audio_upload')['url'];
                        if (!(empty($audio_url))) {
                            ?>
                            <div class="post-play" id="play-icon">
                                <div href="#" on="tap:amp-player.play(),play-icon.hide(),pause-icon.show()">
                                <img src="<?php echo $dir_path . '/assets/images/svg/play-icon.svg'; ?>" alt="">
                                </div>
                            </div>
                            <div class="post-play" id="pause-icon" hidden>
                                <div href="#" on="tap:amp-player.pause(),play-icon.show(),pause-icon.hide()">
                                <img src="<?php echo $dir_path . '/assets/images/svg/pause-icon.svg'; ?>" alt="">
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="post-title">
                        <h3>
                            <!-- post content -->
                            <?php the_title(); ?>
                        </h3>
                        <div class="post-author-name">
                            <p><span><?php print_r($post_author = get_the_author_meta('display_name', $post->post_author)); ?></span><span>CX</span></p>
                        </div>
                    </div>
                    <div class="post-excerpt">
                        <p><?php echo the_excerpt(); ?></p>
                    </div>
                    <div class="recomended-posts">
                        <?php echo get_post_field('post_content', get_the_ID()); ?>
                    </div>
                </div>
            </div>
            <div class="post-right">
                <div class="post-right-container">
                    <a href="#">
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
                    </a>
                </div>
                <div class="post-playlist">
                    <input type=text placeholder="Playlist" name=share id=post-subscribe aria-label="Search imput" />
                    <div class="post-subscribe">
                        <a href="#">Subscribe</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- #site-content -->

<?php
get_footer();
