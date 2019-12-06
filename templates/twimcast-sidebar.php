<div class="sidebar-heading">
    <?php if (!(is_home())) { ?>
        <div class="sidebar-back">
            <a href="#" onclick="window.history.go(-1);">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-left" class="svg-inline--fa fa-arrow-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"></path>
                </svg>
            </a>
        </div>
    <?php } ?>
    <a href="<?php echo home_url(); ?>" class="sidebar-home">
        <h3>TwimCast</h3>
    </a>

    <div class="sidebar-icon">
        <a href="#" on="tap:twimcast-sidebar.toggleClass(class='show')">
            <svg id="menu" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22" height="16" viewBox="0 0 22 16">
                <defs>
                    <clipPath id="clip-path">
                        <path id="_Icon_Сolor" data-name="🎨 Icon Сolor" d="M1.158,16A1.218,1.218,0,0,1,0,14.735V14.6a1.219,1.219,0,0,1,1.158-1.266H20.841A1.22,1.22,0,0,1,22,14.6v.136A1.219,1.219,0,0,1,20.841,16Zm0-6.666A1.219,1.219,0,0,1,0,8.068V7.932A1.218,1.218,0,0,1,1.158,6.667H20.841A1.219,1.219,0,0,1,22,7.932v.136a1.22,1.22,0,0,1-1.159,1.266Zm0-6.667A1.218,1.218,0,0,1,0,1.4V1.265A1.218,1.218,0,0,1,1.158,0H20.841A1.219,1.219,0,0,1,22,1.265V1.4a1.219,1.219,0,0,1-1.159,1.265Z" fill="#0d1c2e" />
                    </clipPath>
                </defs>
                <path id="_Icon_Сolor-2" data-name="🎨 Icon Сolor" d="M1.158,16A1.218,1.218,0,0,1,0,14.735V14.6a1.219,1.219,0,0,1,1.158-1.266H20.841A1.22,1.22,0,0,1,22,14.6v.136A1.219,1.219,0,0,1,20.841,16Zm0-6.666A1.219,1.219,0,0,1,0,8.068V7.932A1.218,1.218,0,0,1,1.158,6.667H20.841A1.219,1.219,0,0,1,22,7.932v.136a1.22,1.22,0,0,1-1.159,1.266Zm0-6.667A1.218,1.218,0,0,1,0,1.4V1.265A1.218,1.218,0,0,1,1.158,0H20.841A1.219,1.219,0,0,1,22,1.265V1.4a1.219,1.219,0,0,1-1.159,1.265Z" transform="translate(0)" fill="#0d1c2e" />
            </svg>
        </a>
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
            <div class="search-icon">
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
            </div>
            <input type=text required=required placeholder="Insights, podcasts, or reports" name=s id=searchTerm aria-label="Search imput" />
        </div>
    </form>
</div>



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
            <div class="podcast-player" id="player">
                <div class="podcast-player-container">
                    <div class="podcast-player-thumbnail">
                        <amp-img src='<?php echo the_post_thumbnail_url('thumbnail'); ?>' height="52" width="52" alt="a sample image"></amp-img>
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