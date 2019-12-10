<?php get_header();
$dir_path = get_template_directory_uri();
?>

<main id="site-content" role="main">
    <section id="twimcast-sidebar" class="">
        <div class="twimcast-sidebar-container">
            <?php get_template_part('templates/twimcast', 'sidebar'); ?>
        </div>
    </section>
    <section class="widget-area">
        <div id="main-widget-area" class="widget-area-section">
            <?php $widgets = get_field('add_widgets', 'options');
            //print_r($widgets);
            foreach ($widgets as $widget) {
                if ($widget['acf_fc_layout'] == 'custom_carousel') {
                    include(locate_template('widgets/custom.php', false, false));
                } else if ($widget['acf_fc_layout'] == 'image_carousel') {
                    include(locate_template('widgets/image-carousel.php', false, false));
                } else if ($widget['acf_fc_layout'] == 'list_post') {
                    include(locate_template('widgets/list-post.php', false, false));
                } else if ($widget['acf_fc_layout'] == 'thumbnail_carousel') {
                    include(locate_template('widgets/thumbnail-carousel.php', false, false));
                } else if ($widget['acf_fc_layout'] == 'card_carousel') {
                    include(locate_template('widgets/card-carousel.php', false, false));
                } else if ($widget['acf_fc_layout'] == 'list_category') {
                    include(locate_template('widgets/list-category.php', false, false));
                }
            }
            ?>
            <div class="twimcast-text">
                <h2>TwimCast</h2>
            </div>
        </div>
    </section>

</main><!-- #site-content -->

<?php
get_footer();
