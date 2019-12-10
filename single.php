<?php get_header();
$dir_path = get_template_directory_uri();
?>
<style scoped>
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-weight: 600;
        font-family: 'Open sans', sans-serif !important;
        line-height: 1.5;
        margin: 10px 0
    }

    h1 {
        font-weight: 700;
        font-size: 32px;
    }

    h2 {
        font-size: 30px;
    }

    h3 {
        font-weight: 500;
        font-size: 27px;
        margin-top: 16px
    }

    h4 {
        font-size: 24px;
        font-weight: 400;
    }

    h5 {
        font-size: 20px;
        font-weight: 400;
        color: #7f7f7f;
    }

    h6 {
        font-size: 18px;
        font-weight: 400;
        color: #7f7f7f;
    }
</style>
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
                        <amp-script width="200" height="50" script="hello-world">

                            <button>Hello amp-script!</button>
                        </amp-script>
                        <?php $audio_url = get_field('audio_upload')['url'];
                        if (!(empty($audio_url))) {
                            ?>
                            <div class="post-play" id="play-icon">
                                <div href="#" on="tap:amp-player.play(),play-icon.hide(),pause-icon.show(),player.toggleClass(class='hide-player')" role="button" tabindex="1">
                                    <img src="<?php echo $dir_path . '/assets/images/svg/play-icon.svg'; ?>" alt="">
                                </div>
                            </div>
                            <div class="post-play" id="pause-icon" hidden>
                                <div href="#" on="tap:amp-player.pause(),play-icon.show(),pause-icon.hide(),player.toggleClass(class='hide-player')" role="button" tabindex="1">
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
                    </div>
                    <div class="post-excerpt" hidden>
                        <p><?php echo the_excerpt(); ?></p>
                    </div>
                    <div class="recomended-posts">
                        <?php
                        echo get_post_field('post_content', get_the_ID());
                        ?>
                    </div>
                </div>
            </div>
            <?php get_template_part('templates/twimcast', 'right') ?>
        </div>
    </section>
</main><!-- #site-content -->

<script id="hello-world" type="text/plain" target="amp-script">
    const btn = document.querySelector('button');
  btn.addEventListener('click', () => {
   alert('hello');
  });
</script>

<?php
get_footer();
