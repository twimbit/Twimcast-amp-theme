<?php $dir_path = get_template_directory_uri();
?>
<div class="sidebar-heading">
    <a href="<?php echo home_url(); ?>" class="sidebar-home">
        <h3>TwimCast</h3>
    </a>

    <div class="sidebar-icon show-sidebar">
        <div on="tap:twimcast-sidebar.toggleClass(class='show'),site-content.toggleClass(class='overflow-stop')" role="button" tabindex="1">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31.112 31.112" style="enable-background:new 0 0 31.112 31.112;" xml:space="preserve">
                <polygon points="31.112,1.414 29.698,0 15.556,14.142 1.414,0 0,1.414 14.142,15.556 0,29.698 1.414,31.112 15.556,16.97 
	29.698,31.112 31.112,29.698 16.97,15.556 " />
            </svg>
        </div>
    </div>
</div>
<div class="sidebar-signup">
    <a href="#">
        Sign Up <span> Beta</span>
    </a>
</div>
<div class="sidebar-search">
    <form action="<?php echo site_url(); ?>" class="sidebar-form">
        <div class="search d-flex">

            <input type=text required=required placeholder="Search" name=s id=searchTerm aria-label="Search imput" />
            <button class="search-icon" type="submit" aria-label="Search">

                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" viewBox="0 0 18 18">
                    <defs>
                        <clipPath id="clip-path">
                            <path id="_Icon_Сolor" data-name="🎨 Icon Сolor" d="M17,18a.994.994,0,0,1-.707-.293l-3.4-3.395A7.91,7.91,0,0,1,8,16a8,8,0,1,1,8-8,7.909,7.909,0,0,1-1.688,4.9l3.395,3.4A1,1,0,0,1,17,18ZM8,2a6,6,0,1,0,6,6A6.007,6.007,0,0,0,8,2Z" transform="translate(0)" fill="#0d1c2e" />
                        </clipPath>
                    </defs>
                    <g id="search">
                        <path id="_Icon_Сolor-2" data-name="🎨 Icon Сolor" d="M17,18a.994.994,0,0,1-.707-.293l-3.4-3.395A7.91,7.91,0,0,1,8,16a8,8,0,1,1,8-8,7.909,7.909,0,0,1-1.688,4.9l3.395,3.4A1,1,0,0,1,17,18ZM8,2a6,6,0,1,0,6,6A6.007,6.007,0,0,0,8,2Z" fill="#0d1c2e" />
                    </g>
                </svg>

            </button>

        </div>
    </form>
</div>


<h3 class="sidebar-title">Top Categories</h3>
<div class="sidebar-menu">
    <?php wp_nav_menu(array(
                        'theme_location' => 'sidebar-category-menu',
                        'container_class' => 'menu'
                    ));
    ?>

    <li class="sidebar-list-item sidebar-explore-all" hidden>
        <a href="#">
            Explore All...
        </a>
    </li>

    <div class="sidebar-divider"></div>
    <?php wp_nav_menu(array(
                        'theme_location' => 'sidebar-bottom-menu',
                        'container_class' => 'menu'
                    ));
                    if (is_single()) {
                        $audio_url = get_field('audio_upload')['url'];
                        if (!(empty($audio_url))) {
    ?>
            <div class="podcast-player show-desktop" id="player">
                <div class="podcast-player-container">
                    <div class="podcast-player-thumbnail">
                        <amp-img src='<?php echo the_post_thumbnail_url('thumbnail'); ?>' height="52" width="52" alt="a sample image">
                        </amp-img>
                    </div>
                    <div class="podcast-player-info">
                        <div class="podcast-player-title">
                            <h3><?php the_title(); ?></h3>
                        </div>
                        <div class="podcast-player-playlist">
                            Playing from my list
                        </div>
                    </div>
                </div>
                <amp-audio width="auto" id="amp-player" height="50" src="<?php echo $audio_url; ?>" controlslist="nodownload">
                    <div fallback>Your browser doesn’t support HTML5 audio</div>
                </amp-audio>
            </div>
    <?php }
                                                                    } ?>
</div>