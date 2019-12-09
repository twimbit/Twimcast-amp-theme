<?php get_header();
$dir_path = get_template_directory_uri();
?>

<main id="site-content" role="main" style="height:100vh;padding:0">
    <section id="twimcast-sidebar">
        <div class="twimcast-sidebar-container">
            <?php get_template_part('templates/twimcast', 'sidebar'); ?>
        </div>
    </section>
    <section class="postArea">
        <div class="postArea-container">
            <div id="main-post-area" class="post-div">
                <?php $file_url = get_field('pdf_file', get_queried_object());
                if (!(empty($file_url))) { ?>
                    <div class="post-container" style="height: 99%;margin:0">
                        <amp-iframe height="130" width="100" layout="responsive" sandbox="allow-scripts allow-same-origin" src="<?php echo $dir_path . '/web/viewer.html?file=' . $file_url; ?>" frameborder="0">
                            <amp-img layout="fill" src="https://foo.com/foo.png" placeholder></amp-img>
                        </amp-iframe>
                    </div>
                <?php } else { ?>
                    <div class="post-container">
                        <div class="post-image">
                            <amp-img src='https://playground.amp.dev/static/samples/img/image2.jpg' height="250" layout="fixed-height" alt="a sample image"></amp-img>
                        </div>
                        <div class="post-title">
                            <h3>
                                <!-- post content -->
                                <?php the_title(); ?>
                            </h3>
                        </div>
                        <div class="post-excerpt">
                            <p><?php echo the_excerpt(); ?></p>
                        </div>
                        <div class="recomended-posts">
                            <?php
                                echo get_post_field('post_content', get_the_ID());
                                ?>
                        </div>
                    </div>
                <?php }
                ?>
            </div>
            <?php get_template_part('templates/twimcast', 'right') ?>
        </div>
    </section>
</main><!-- #site-content -->

<?php
get_footer();
