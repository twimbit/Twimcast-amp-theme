<div class="sidebar-heading">
    <h3>TwimCast</h3>
    <div class="sidebar-icon">
        <a href="#">
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
    <ul class="sidebar-menu-ul-category">
        <?php $cats = get_categories();
        //print_r($cats);
        foreach ($cats as $val) {
            $cat_name = $val->name;
            $cat_link = get_category_link($val);
            ?>
            <li class="sidebar-list-item">
                <a href="<?php echo $cat_link; ?>">
                    <?php echo $cat_name; ?>
                </a>
            </li>
        <?php }
        ?>

        <li class="sidebar-list-item sidebar-explore-all" hidden>
            <a href="#">
                Explore All...
            </a>
        </li>
    </ul>


    <div class="sidebar-divider"></div>
    <ul class="sidebar-menu-ul-category">
        <li class="sidebar-list-item">
            <a href="#">
                Twimbit
            </a>
        </li>
        <li class="sidebar-list-item">
            <a href="#">
                Creator
            </a>
        </li>
        <li class="sidebar-list-item">
            <a href="#">
                Library
            </a>
        </li>
        <li class="sidebar-list-item sidebar-explore-all" hidden>
            <a href="#">
                More...
            </a>
        </li>
    </ul>
</div>