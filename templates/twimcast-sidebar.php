<?php $dir_path = get_template_directory_uri();
?>

<div class="sidebar-heading">
    <a href="<?php echo home_url(); ?>" class="sidebar-home">
        <amp-img src="<?php echo $dir_path . '/assets/images/logo.png'; ?>" height="35"
                 width="25"></amp-img>
    </a>

    <div class="sidebar-icon show-sidebar">
        <div on="tap:twimcast-sidebar.close" role="button" tabindex="1">
            <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 x="0px" y="0px" viewBox="0 0 31.112 31.112" style="enable-background:new 0 0 31.112 31.112;"
                 xml:space="preserve">
                <polygon points="31.112,1.414 29.698,0 15.556,14.142 1.414,0 0,1.414 14.142,15.556 0,29.698 1.414,31.112 15.556,16.97 
	29.698,31.112 31.112,29.698 16.97,15.556 "/>
            </svg>
        </div>
    </div>
</div>
<div class="sidebar-signup">
    <a href="https://twimbit.typeform.com/to/XojIj8?intent=twimcast" target="_blank">
        Sign Up <span> Beta</span>
    </a>
    <div class="send-to-pwa show-mobile" style="margin-left: 15px;">
        <a href="https://twimcast.com" target="_blank">
            <span style="font-size: 13px;margin-top: 0;">Open web App</span>
        </a>
    </div>
</div>
<div class="sidebar-search">
    <form action="<?php echo site_url(); ?>" class="sidebar-form">
        <div class="search d-flex">

            <input type=text required=required placeholder="Search..." name=s id=searchTerm aria-label="Search imput"/>
            <button class="search-icon" type="submit" aria-label="Search" style="background-color: #ccc0;">

                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18"
                     height="18" viewBox="0 0 18 18">
                    <defs>
                        <clipPath >
                            <path  data-name="🎨 Icon Сolor"
                                  d="M17,18a.994.994,0,0,1-.707-.293l-3.4-3.395A7.91,7.91,0,0,1,8,16a8,8,0,1,1,8-8,7.909,7.909,0,0,1-1.688,4.9l3.395,3.4A1,1,0,0,1,17,18ZM8,2a6,6,0,1,0,6,6A6.007,6.007,0,0,0,8,2Z"
                                  transform="translate(0)" fill="#0d1c2e"/>
                        </clipPath>
                    </defs>
                    <g>
                        <path  data-name="🎨 Icon Сolor"
                              d="M17,18a.994.994,0,0,1-.707-.293l-3.4-3.395A7.91,7.91,0,0,1,8,16a8,8,0,1,1,8-8,7.909,7.909,0,0,1-1.688,4.9l3.395,3.4A1,1,0,0,1,17,18ZM8,2a6,6,0,1,0,6,6A6.007,6.007,0,0,0,8,2Z"
                              fill="#0d1c2e"/>
                    </g>
                </svg>

            </button>

        </div>
    </form>
</div>


<h3 class="sidebar-title" hidden>Top Categories</h3>
<div class="sidebar-menu">
	<?php wp_nav_menu( array(
		'menu'  => 'desktop-primary',
		'container_class' => 'menu'
	) );
	?>

    <li class="sidebar-list-item sidebar-explore-all" hidden>
        <a href="#">
            Explore All...
        </a>
    </li>

    <div class="sidebar-divider"></div>
	<?php wp_nav_menu( array(
		'menu'  => 'desktop-secondary',
		'container_class' => 'menu'
	) );
	?>
</div>