<?php $current_page_id = get_the_ID(); ?>
<?php if (get_sub_field('activities_list_layouts') == 'List View'): ?>
<?php if (is_page('2509') ):?>
<div class="activitiesList-Sidebar">
    <div class="container-custom">
<?php endif; ?>    
    <?php if (is_page('2509') ):?>
    <div class="col-md-8 mainCont">
    <?php endif; ?>
    <section class="activitiesListView <?php echo get_sub_field('custom_class'); ?>">
        <div class="list">
            <?php
            $listItems = 0;
            $items = get_sub_field('list_view_items')
            ?>
            <?php if (have_rows('activities_list_view_repeater')): ?>
                <?php while (have_rows('activities_list_view_repeater')): the_row(); ?>
                    <?php if ($listItems < $items): ?>
                        <div class="item">
                            <div class="cont">
                                <div class="itemImg">
                                    <?php if (get_sub_field('activities_list_image') == ''): ?>
                                        <img src="/wp-content/themes/BizcorLuxury/images/kanoe.jpg" alt="" title=""/>
                                    <?php else: ?>
                                        <img src="<?php echo get_sub_field('activities_list_image'); ?>" alt="" title=""/>
                                    <?php endif; ?>
                                </div><!--itemImg-->
                                <div class="itemText">
                                    <?php if (get_sub_field('activities_list_title') != ''): ?>
                                        <h4><?php echo get_sub_field('activities_list_title'); ?></h4>
                                    <?php endif ?>
                                    <div class="active_phone_view_box">
                                        <ul>
                                            <?php if (get_sub_field('activities_date') != ''): ?>
                                                <li class="dateField">

                                                    <img src="/wp-content/themes/BizcorLuxury/images/calendar-g.svg" alt="calendar"/><?php echo get_sub_field('activities_date'); ?>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (get_sub_field('activities_phone_link') != ''): ?>
                                                <li>
                                                    <?php $tel = preg_replace("/[^0-9]/", "", get_sub_field('activities_phone_link')); ?>
                                                    <a href="tel:<?php echo $tel; ?>" class="activ_phone item_phone"><i class="fas fa-phone"></i><?php echo get_sub_field('activities_phone_link'); ?>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if (get_sub_field('visit_site') != ''): ?>
                                                <li class="visite">
                                                    <a href="<?php echo get_sub_field('visit_site'); ?>" class="activ_phone"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                                        visit website</a>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                    <article>
                                        <?php echo get_sub_field('activities_list_details'); ?>
                                    </article>
                                    <?php if (get_sub_field('activities_list_link') != ''): ?>
                                        <a <?php if (get_sub_field('activities_link_target') == 'Blank'): ?>target="_blank"<?php endif; ?> href="<?php echo get_sub_field('activities_list_link'); ?>" class="view">
                                            <span class="menu">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </span>
                                            <?php echo get_sub_field('activities_list_link_text'); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php $listItems++; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div><!--End List-->
        <?php if ($listItems > $items): ?>
            <div class="showMore">
                <span>Load More</span>
            </div>
        <?php
        $rows = get_sub_field('activities_list_view_repeater');
        $ALItems = array();
        if ($rows) {
            $i = 0;
            foreach ($rows as $row) {
                $ALItems[$i]['title'] = $row['activities_list_title'];
                $ALItems[$i]['text'] = trim(preg_replace('/\s\s+/', ' ', $row['activities_list_details']));

                if ($row['activities_list_link'] == '') {
                    $ALItems[$i]['button'] = '';
                } else {
                    if ($row['activities_link_target'] == 'Blank') {
                        $target = 'target="_blank"';
                    } else {
                        $target = '';
                    }
                    $ALItems[$i]['button'] = '<a ' . $target . ' href="' . $row['activities_list_link'] . '" class="view" ><span class="menu"><span></span><span></span><span></span></span>' . $row['activities_list_link_text'] . '</a>';
                    $ALItems[$i]['button'] = filter_var($ALItems[$i]['button'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                }

                if ($row['activities_phone_link'] == '') {
                    $ALItems[$i]['phone'] = '';
                } else {
                    $call = preg_replace("/[^0-9]/", "", $row['activities_phone_link']);
                    $ALItems[$i]['phone'] = '<li><a href="tel:' . $call . '"><i class="fas fa-phone"></i>' . $row['activities_phone_link'] . '</a></li>';
                    $ALItems[$i]['phone'] = filter_var($ALItems[$i]['phone'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                }

                if ($row['activities_date'] == '') {
                    $ALItems[$i]['date'] = '';
                } else {
                    $ALItems[$i]['date'] = '<li class="dateField"><img src="/wp-content/themes/BizcorLuxury/images/calendar.svg" alt="calendar"/>' . $row['activities_date'] . '</li>';
                    $ALItems[$i]['date'] = filter_var($ALItems[$i]['date'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                }


                if ($row['visit_site'] == '') {
                    $ALItems[$i]['website'] = '';
                } else {
                    $ALItems[$i]['website'] = '<li class="visite"><a href="' . $row['visit_site//99'] . '" class="activ_phone"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>  visite website</a></li>';
                    $ALItems[$i]['website'] = filter_var($ALItems[$i]['website'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                }

                if ($row['activities_list_image'] != '') {
                    $ALItems[$i]['image'] = $row['activities_list_image'];
                } else {
                    $ALItems[$i]['image'] = '/wp-content/uploads/2020/01/535x430.jpg';
                }
                $i++;
            }
        }
        ?>
            <div id="json"><?php echo JSON_encode($ALItems, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);?></div>
            <script>
                $ALItems = JSON.parse(document.getElementById('json').innerText);
                //$ALItems = '<?php echo JSON_encode($ALItems, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);?>'

                //alert($ALItems);
                //alert(JSON.stringify($ALItems, null, 4));
                elemPerTime = '<?php echo $items;?>';
                elemPerTime = +elemPerTime;

                ALItemsLG = $ALItems.length;

                jQuery('.showMore span').click(function () {
                    var displayed = jQuery('.activitiesListView .item');
                    var displayedLG = displayed.length;

                    if (ALItemsLG < displayedLG + elemPerTime) {
                        toDisplay = ALItemsLG - displayedLG;
                        jQuery('.showMore').remove();
                    } else {
                        toDisplay = displayedLG + elemPerTime;
                    }
                    i = displayedLG;
                    do {
                        $ALItems[i].date = $ALItems[i].date.replace(/&amp;/g, "&").replace(/&gt;/g, ">").replace(/&lt;/g, "<").replace(/&quot;/g, '"');
                        $ALItems[i].website = $ALItems[i].website.replace(/&amp;/g, "&").replace(/&gt;/g, ">").replace(/&lt;/g, "<").replace(/&quot;/g, '"');
                        $ALItems[i].phone = $ALItems[i].phone.replace(/&amp;/g, "&").replace(/&gt;/g, ">").replace(/&lt;/g, "<").replace(/&quot;/g, '"');
                        $ALItems[i].button = $ALItems[i].button.replace(/&amp;/g, "&").replace(/&gt;/g, ">").replace(/&lt;/g, "<").replace(/&quot;/g, '"');

                        var appender = '<div class="item"><div class="cont"><div class="itemImg"><img src="' + $ALItems[i].image + '" alt="" title=""/></div>' +
                            '<div class="itemText"><h4>' + $ALItems[i].title + '</h4><div class="active_phone_view_box">' +
                            '<ul>' + $ALItems[i].date + $ALItems[i].phone + $ALItems[i].website + '</ul>' +
                            '</div><article>' + $ALItems[i].text + '</article>' + $ALItems[i].button + '</div></div></div>';
                        //alert(appender)
                        jQuery('.activitiesListView .list').append(appender);
                        i++;
                    } while (i < toDisplay);
                });
            </script>
        <?php endif; ?>
        <style>
            /*activitiesList-Sidebar*/
            .activitiesList-Sidebar{
                background-color: #FAFAFA;
            }
            .activitiesList-Sidebar .container-custom{
                margin: 0 auto;
                max-width: 1600px;
                padding: 90px 15px;        
            }
            .activitiesList-Sidebar .activitiesListView .item{
                border-radius: 15px;
                padding: 0;
                overflow: hidden;
            }
            .activitiesList-Sidebar .activitiesListView .item .cont{
                padding: 20px;
            }
            .activitiesList-Sidebar .activitiesListView .item h4 {
            	font: 500 25px/30px var(--title_font);
            	color: #001F48;
            }
            @media (max-width: 767px){
            .activitiesList-Sidebar .mainCont{
                padding: 0 5px;            
            }   
            .activitiesList-Sidebar .container-custom{
                padding: 60px 15px;
            }  
            }
            /*end activitiesList-Sidebar*/
            
            #json {
                display: none
            }
            /*.activities_fav {*/
            /*    max-width: 1335px !important;*/
            /*    margin: 0 auto !important;*/
            /*}*/
            .activitiesListView .item {
                background: #fff;
                padding: 25px;
                margin-bottom: 20px;
                box-shadow: 0px 3px 30px rgba(0, 0, 0, 0.12);
            }
            .activitiesListView .item .cont {
                position: relative;
                min-height: 250px;
            }
            .activitiesListView .item .cont:before,
            .activitiesListView .item .cont:after {
                content: "";
                display: block;
                height: 0;
                overflow: hidden;
                clear: both;
            }
            .activitiesListView .item h4 {
                margin: 0 0 10px 0;
                font: 400 24px/28px var(--original_font);
                letter-spacing: 0px;
                color: #292929;
            }
            .activitiesListView .item .contact-info {
                margin-bottom: 15px;
                color: #333;
                font-size: 14px;
            }
            .activitiesListView .item .contact-info a {
                color: #333;
                padding-right: 25px;
                transition: all 0.4s;
                display: inline-block;
            }
            .activitiesListView .item .contact-info a:first-of-type {
                padding-left: 25px;
            }
            .activitiesListView .item .dateField img {
                display: inline-block;
                position: relative;
                top: -2px;
                margin-right: 3px;
            }
            .activitiesListView .item .contact-info i.fa-phone {
                color: #858585 !important;
                margin-right: 5px !important;
                font-size: 12px !important;
                background: transparent !important;
            }
            .activitiesListView .item .contact-info a:hover {
                color: var(--main_color);
            }
            .activitiesListView .item .contact-info a:last-child i {
                color: #fff;
                background: #858585;
                border-radius: 100%;
                width: 12px;
                height: 12px;
                font-size: 8px;
                padding-top: 2px;
                text-align: center;
                margin-right: 3px;
                position: relative;
                top: -2px;
            }
            .activitiesListView .item .itemImg {
                width: 40%;
                height: auto;
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                background: var(--second_color);
            }
            .activitiesListView .itemImg img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            .activitiesListView .item .itemText {
                width: 60%;
                float: right;
                padding-left: 20px;
                padding-top: 13px;
                padding-bottom: 13px;
            }
            .activitiesListView .item .itemText article {
                padding: 20px 0;
                border-top: 1px solid rgba(159, 159, 159, 0.25);
                line-height: 28px;
                color: rgba(41, 41, 41, 0.75);
                /*height: 104px;
                overflow: hidden;*/
            }
            .activitiesListView .item .itemText .event_loc {
                display: inline-block;
            }
            .activitiesListView .item .itemText .event_loc i {
                margin-right: 7px;
                color: #858585;
            }
            .activitiesListView .item .itemText .event_phone {
                display: block;
                margin-top: 7px;
                padding-top: 7px;
                border-top: 1px solid rgba(159, 159, 159, 0.25);
                color: #333;
            }
            .activitiesListView .item .itemText .event_phone i {
                margin-right: 7px;
                color: #858585;
            }
            .activitiesListView .item a.view {
                color: #292929;
                border-bottom: 1px solid #292929;
                padding: 3px 0;
                transition: all 0.4s;
                margin-top: 20px;
                display: inline-block;
                text-align: center;
                font-size: 16px;
                font-weight: 600;
            }
            .activitiesListView .item a.view span.menu {
                position: relative;
                display: inline-block;
                width: 12px;
                margin-right: 3px;
            }
            .activitiesListView .item a.view span.menu span {
                display: block;
                height: 2px;
                border-radius: 1px;
                width: 100%;
                background: #292929;
                transition: all 0.4s;
            }
            .activitiesListView .item a.view span.menu span:not(:last-child) {
                margin-bottom: 2px;
            }
            .activitiesListView .item a.view:hover {
                color: var(--main_color);
                border-color: var(--main_color);
            }
            .activitiesListView .item a.view:hover span.menu span {
                background: var(--main_color);
            }
            .activitiesListView .item .active_phone_view_box ul {
                margin: 0;
                padding: 0 0 5px;
            }
            .activitiesListView .item .active_phone_view_box li {
                display: inline-block;
                list-style: none;
                color: var(--title_color);
                font: 400 18px/22px 'Open Sans', san-serif;
                text-transform: capitalize;
            }
            .activitiesListView .item .active_phone_view_box li.visite {
                text-transform: capitalize;
            }
            .activitiesListView .item .active_phone_view_box li:not(:first-child) {
                margin-left: 12px;
            }
            .activitiesListView .item .active_phone_view_box a i {
                margin-right: 4px;
                color: rgba(20, 20, 20, 0.5);
                transition: 0.3s;
            }
            .activitiesListView .item .active_phone_view_box a i.fa-phone {
                transform: rotateZ(140deg);
                font-size: 12px;
            }
            .activitiesListView .item .active_phone_view_box a i.fa-arrow-circle-right {
                font-size: 14px;
            }
            .activitiesListView .item .active_phone_view_box a {
                color: #292929;
                text-transform: uppercase;
                font: 400 18px/22px 'Open Sans', san-serif;
                color: var(--title_color);
            }
            .activitiesListView .item .active_phone_view_box .item_phone {
                position: relative;
            }
            .activitiesListView .item .active_phone_view_box .item_phone i {
                top: -2px;
                position: relative
            }
            .activitiesListView .item .active_phone_view_box .visite a {
                text-transform: capitalize;
            }
            .activitiesListView .item .active_phone_view_box a:hover {
                color: var(--main_color);
            }
            .activitiesListView .item .active_phone_view_box a:hover i {
                color: var(--main_color);
            }
            .activitiesListView .showMore {
                text-align: center;
            }
            .activitiesListView .showMore span {
                display: inline-block;
                background: var(--second_color);
                color: #fff;
                transition: 0.3s;
                padding: 19px 50px;
                text-transform: uppercase;
                cursor: pointer;
                font: 400 16px/19px var(--paragraph_font) !important;
            }
            .activitiesListView .showMore span:hover {
                background: var(--main_color);
            }
            /****************** FIX activities ***********************/
            .page-id-2009 .container {
                max-width: 1530px;
            }
            .page-id-1401 .container {
                max-width: 1530px;
            }
            .activitiesListView .item h4 {
                font: 400 24px/28px var(--title_font);
                color: var(--title_color);
            }
            .activitiesListView .item .active_phone_view_box a {
                font: 600 16px/22px var(--paragraph_font);
                color: var(--title_color);
            }
            .activitiesListView .item .active_phone_view_box li {
                display: inline-block;
                list-style: none;
                color: var(--title_color);
                font: 600 16px/22px var(--paragraph_font);
                text-transform: capitalize;
            }
            .activitiesListView .item .itemText article {
                font: 400 16px/28px var(--paragraph_font);
                color: var(--paragraph_color);
            }
            .activitiesListView .item a.view {
                font: 600 16px/19px var(--paragraph_font);
                color: var(--title_color);
                text-transform: uppercase;
            }
            .activitiesListView .item a.view span.menu span:not(:last-child) {
                margin-bottom: 3px;
            }
            .activitiesListView .showMore span {
                padding: 18px 48px;
                font: 700 16px/19px var(--paragraph_font);
            }
            @media (max-width: 1199px) {
                .col-md-8 {
                    width: 100%;
                }
                .col-md-4 {
                    width: 100%;
                }
                .view-rentals-block {
                    margin-top: 30px;
                }
            }
            @media (max-width: 767px) {
                .activitiesListView .item h4, .activitiesListView .item .contact-info {
                    text-align: left;
                }
            }
            /*@media (max-width: 1500px) {*/
            /*    */
            /*    body > div.content > section > div > div.col-md-8.mainCont > section > div.list > div:nth-child(1) > div > div.itemText > div > ul > li.visite {*/
            /*        margin-left: 0;*/
            /*        display: block;*/
            /*    }*/
            /*}*/
            @media (max-width: 1500px) {

                .list .itemText ul li:last-child {
                    margin-left: 0 !important;
                    display: block;
                }
            }
            /****************** END FIX activities ***********************/
            /*Responsivness*//*Responsivness*//*Responsivness*/
            @media (min-width: 1200px) and (max-width: 1679px) {
                .activitiesListView .item .contact-info a {
                    padding-left: 15px;
                }
            }
            @media (max-width: 1460px) {
                .activitiesListView .item .active_phone_view_box li {
                    font-size: 14px;
                }
            }
            @media (max-width: 1199px) {
                .activitiesListView .item {
                    padding: 15px;
                }
            }
            @media (max-width: 767px) {
                .activitiesListView .item .itemImg {
                    position: static;
                }
                .activitiesListView .active_phone_view_box {
                    justify-content: flex-start;
                    align-content: center;
                }
                .activitiesListView .item h4,
                .activitiesListView .item .contact-info {
                    text-align: left;
                }
                .activitiesListView .item {
                    flex-direction: column;
                }
                .activitiesListView .item .itemImg,
                .activitiesListView .item .itemText {
                    width: 100%;
                }
                .activitiesListView .item .itemImg {
                    text-align: center;
                    height: auto;
                }
                .activitiesListView .item .itemImg img {
                    height: 300px;
                    width: 100%;
                    object-fit: cover;
                }
                .activitiesListView .item .itemText {
                    padding-left: 0;
                    padding-top: 25px;
                }
            }
            @media (max-width: 640px) {
                .activitiesListView .item .active_phone_view_box ul {
                    display: flex;
                    flex-direction: column;
                }
                .activitiesListView .item .active_phone_view_box li {
                    margin-bottom: 5px;
                }
                .activitiesListView .item .active_phone_view_box li:not(:first-child) {
                    margin-left: 0;
                }
            }
            @media (max-width: 500px) {
                .activitiesListView .item .contact-info {
                    display: flex;
                    flex-direction: column;
                    line-height: 22px;
                }
                .activitiesListView .item .contact-info a {
                    padding: 0 !important;
                }
                .activitiesListView .active_phone_view_box {
                    justify-content: center;
                    flex-direction: column;
                }
                .activitiesListView .activ_phone {
                    margin-bottom: 15px;
                    text-align: center;
                }
            }
        </style>
    </section><!--End activitiesListView-->
    <?php if (is_page('2509') ):?>
    </div>
    <?php endif; ?>
    <?php if (is_page('2509') ):?>
    <div class="col-md-4 rightSidebar">
        <?php include(get_theme_root().'/'.get_option('stylesheet').'/templates-parts/sidebar-parts/start-vacation.php');?>
        <?php include(get_theme_root().'/'.get_option('stylesheet').'/templates-parts/sidebar-parts/contact-us-form.php');?>
    </div><!--End rightSidebar-->
    <?php endif; ?>
<?php if (is_page('2509') ):?>
    </div>
</div>
<?php endif; ?>
    
<?php else: ?><!--Normal Activities Start-->
    <section class="activities_fav <?php echo get_sub_field('custom_class'); ?>">
        <?php if (get_sub_field('activities_list_layouts') == 'Standard'): ?>
            <section class="vacation-rentals-images
                <?php if (get_sub_field('activities_image_display') == 'Lazy Load'): ?>lazyLoad<?php elseif (get_sub_field('activities_image_display') == 'Load More Button'): ?>loadMore<?php endif; ?>
                <?php if (get_sub_field('activities_use_animation') == 'yes'): ?>animate<?php endif; ?>">
                <?php if (get_sub_field('activities_favorites_logic') == 'yes'): ?>
                    <div class="favoriteActivities">
                        <a href="<?php echo get_sub_field('link_to_favorite_activities'); ?>">Favorite Activities:
                            <span class="favoriteLong">(<span></span>)</span><i class="fa fa-heart"></i></a>
                    </div>
                <?php endif; ?>
                <div class="container-fluid">
                    <?php
                    $args = array(
                        'post_type' => 'page',
                        'post_parent' => $current_page_id,
                        'posts_per_page' => 9999,
                        'orderby' => 'menu_order',
                        'order' => 'ASC'
                    );
                    $query = new WP_Query($args);
                    $i = 1;
                    $display = get_sub_field('activities_to_display');
                    if ($query->have_posts()) :
                        while ($query->have_posts()): $query->the_post();
                            $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'post-thumbnails');
                            $unit_id = get_the_ID();
                            ?>
                            <?php if (get_sub_field('activities_image_display', $current_page_id) == 'Lazy Load'): ?>
                                <div class="col-lg-4 col-sm-6 item">
                                    <?php if (get_sub_field('activities_favorites_logic', $current_page_id) == 'yes'): ?>
                                        <div class="favoriteIcon">
                                                <span data-id="<?php echo $unit_id; ?>">
                                                    <i class="far fa-heart"></i>
                                                    <i class="fa fa-heart"></i>
                                                </span>
                                        </div>
                                    <?php endif; ?>
                                    <a href="<?php echo get_permalink(); ?>" target="_blank">
                                        <div class="box">
                                            <?php if (get_field('small_image_for_page_lists') == ''): ?>
                                                <?php
                                                if (get_field('small_image_for_page_lists') == '') {
                                                    if ($thumb[0] == '') {
                                                        echo '<img src="/wp-content/themes/BizcorLuxury/images/kanoe.jpg" alt="" title=""/>';
                                                    } else {
                                                        echo '<img src="' . $thumb[0] . '" alt="" title=""/>';
                                                    }
                                                }
                                                ?>
                                            <?php else: ?>
                                                <img src="<?php echo get_field('small_image_for_page_lists'); ?>" alt="" title=""/>
                                            <?php endif; ?>
                                            <div class="title">
                                                <?php if (get_field('custom_title') != ''): ?>
                                                    <h3><?php echo get_field('custom_title'); ?></h3>
                                                <?php else: ?>
                                                    <h3><?php the_title(); ?></h3>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <?php if (get_field('activities_custom_icon') == 'yes' && get_field('activitie_custom_icon_img') != ''): ?>
                                            <div class="journey">
                                                <div class="iconCont">
                                                    <img src="<?php echo get_field('activitie_custom_icon_img'); ?>" alt="custom-icon"/>
                                                </div>
                                                <?php if (get_field('activities_custom_icon_text') != ''): ?>
                                                    <div class="expCont">
                                                        <div class="iconExplain">
                                                            <?php echo get_field('activities_custom_icon_text'); ?>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    </a>
                                </div>
                            <?php elseif (get_sub_field('activities_image_display', $current_page_id) == 'Load More Button'): ?>
                                <div class="col-lg-4 col-sm-6 item <?php if ($i > $display): ?>hidenItem<?php endif; ?>">
                                    <?php if (get_sub_field('activities_favorites_logic', $current_page_id) == 'yes'): ?>
                                        <div class="favoriteIcon">
                                                <span data-id="<?php echo $unit_id; ?>">
                                                    <i class="far fa-heart"></i>
                                                    <i class="fa fa-heart"></i>
                                                </span>
                                        </div>
                                    <?php endif; ?>
                                    <a href="<?php echo get_permalink(); ?>" target="_blank">
                                        <div class="box">
                                            <?php if (get_field('small_image_for_page_lists') == ''): ?>
                                                <?php
                                                if (get_field('small_image_for_page_lists') == '') {
                                                    if ($thumb[0] == '') {
                                                        echo '<img src="/wp-content/themes/BizcorLuxury/images/kanoe.jpg" alt="" title=""/>';
                                                    } else {
                                                        echo '<img src="' . $thumb[0] . '" alt="" title=""/>';
                                                    }
                                                }
                                                ?>
                                            <?php else: ?>
                                                <img src="<?php echo get_field('small_image_for_page_lists'); ?>" alt="" title=""/>
                                            <?php endif; ?>
                                            <div class="title">
                                                <?php if (get_field('custom_title') != ''): ?>
                                                    <h3><?php echo get_field('custom_title'); ?></h3>
                                                <?php else: ?>
                                                    <h3><?php the_title(); ?></h3>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <?php if (get_field('activities_custom_icon') == 'yes' && get_field('activitie_custom_icon_img') != ''): ?>
                                            <div class="journey">
                                                <div class="iconCont">
                                                    <img src="<?php echo get_field('activitie_custom_icon_img'); ?>" alt="custom-icon"/>
                                                </div>
                                                <?php if (get_field('activities_custom_icon_text') != ''): ?>
                                                    <div class="expCont">
                                                        <div class="iconExplain">
                                                            <?php echo get_field('activities_custom_icon_text'); ?>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    </a>
                                </div>
                            <?php else: ?>
                                <div class="col-lg-4 col-sm-6 item">
                                    <?php if (get_sub_field('activities_favorites_logic', $current_page_id) == 'yes'): ?>
                                        <div class="favoriteIcon">
                                                <span data-id="<?php echo $unit_id; ?>">
                                                    <i class="far fa-heart"></i>
                                                    <i class="fa fa-heart"></i>
                                                </span>
                                        </div>
                                    <?php endif; ?>
                                    <a href="<?php echo get_permalink(); ?>" target="_blank">
                                        <div class="box">
                                            <?php if (get_field('small_image_for_page_lists') == ''): ?>
                                                <?php
                                                if (get_field('small_image_for_page_lists') == '') {
                                                    if ($thumb[0] == '') {
                                                        echo '<img src="/wp-content/themes/BizcorLuxury/images/kanoe.jpg" alt="" title=""/>';
                                                    } else {
                                                        echo '<img src="' . $thumb[0] . '" alt="" title=""/>';
                                                    }
                                                }
                                                ?>
                                            <?php else: ?>
                                                <img src="<?php echo get_field('small_image_for_page_lists'); ?>" alt="" title=""/>
                                            <?php endif; ?>
                                            <div class="title">
                                                <?php if (get_field('custom_title') != ''): ?>
                                                    <h3><?php echo get_field('custom_title'); ?></h3>
                                                <?php else: ?>
                                                    <h3><?php the_title(); ?></h3>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <?php if (get_field('activities_custom_icon') == 'yes' && get_field('activitie_custom_icon_img') != ''): ?>
                                            <div class="journey">
                                                <div class="iconCont">
                                                    <img src="<?php echo get_field('activitie_custom_icon_img'); ?>" alt="custom-icon"/>
                                                </div>
                                                <?php if (get_field('activities_custom_icon_text') != ''): ?>
                                                    <div class="expCont">
                                                        <div class="iconExplain">
                                                            <?php echo get_field('activities_custom_icon_text'); ?>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php $i++; ?>
                        <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                    <?php if (get_sub_field('activities_image_display', $current_page_id) == 'Load More Button'): ?>
                        <div class="col-sm-12 buttonLine">
                            <a class="button" href="#<?php echo $display; ?>">Load More</a>
                        </div>
                    <?php endif; ?>
                </div><!--End container-fluid-->
                <style>
                    .vacation-rentals-images {
                        padding-bottom: 30px;
                    }
                    .vacation-rentals-images .container-fluid {
                        padding: 6px 3px 0;
                    }
                    .vacation-rentals-images .item .box {
                        overflow: hidden;
                        background: #141414 none repeat scroll 0 0;
                        position: relative;
                    }
                    .vacation-rentals-images .item {
                        overflow: hidden;
                        padding: 0 3px;
                        margin-bottom: 6px;
                        position: relative;
                    }
                    .vacation-rentals-images .item a, .item .box {
                        height: 100%;
                    }
                    .vacation-rentals-images .item a:focus {
                        text-decoration: none;
                    }
                    .vacation-rentals-images .item .box img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        transition: all 0.3s linear 0s;
                        opacity: .8;
                    }
                    .vacation-rentals-images .item .box:hover img {
                        transform: scale(1.1);
                        opacity: 0.9;
                    }
                    .vacation-rentals-images .item .box .title {
                        padding-left: 10px;
                        padding-right: 10px;
                        position: absolute;
                        width: 100%;
                        left: 50%;
                        top: 50%;
                        transform: translate(-50%, -50%);
                        text-align: center;
                    }
                    .vacation-rentals-images .item .box .title h3 {
                        color: #fff;
                        margin: 0;
                        text-shadow: 0 3px 12px rgba(0, 0, 0, 0.65);
                        font: 400 40px/46px var(--title_font);
                    }
                    .vacation-rentals-images .item a {
                        color: #fff;
                    }
                    /*Load More Variant*/
                    .vacation-rentals-images.loadMore .item.hidenItem {
                        display: none;
                    }
                    .vacation-rentals-images.loadMore .buttonLine {
                        text-align: center;
                        padding: 20px 0 0;
                    }
                    .vacation-rentals-images.loadMore .buttonLine a.button {
                        background: var(--second_color);
                        color: #fff;
                        padding: 15px;
                        border-radius: 0;
                        text-transform: uppercase;
                        width: 200px;
                        font: 400 16px/19px var(--paragraph_font);
                    }
                    .vacation-rentals-images.loadMore .buttonLine a.button:hover {
                        background: var(--main_color);
                    }
                    /*animation*/
                    .vacation-rentals-images.animate .item {
                        opacity: 0;
                        transition: all 0.7s ease-out;
                        /**********scroll animation****************/
                        /*transform: translate3d(0px, 200px, 0px);*/
                        backface-visibility: hidden;
                    }
                    .vacation-rentals-images.animate .item.active {
                        transform: translate3d(0px, 0px, 0px);
                        opacity: 1;
                    }
                    /*Favorite Logic*/
                    .vacation-rentals-images .favoriteActivities {
                        padding: 10px 6px 5px;
                        text-align: right;
                        font-size: 16px;
                    }
                    .vacation-rentals-images .favoriteActivities a {
                        color: var(--title_color);
                        text-transform: uppercase;
                        font: 600 16px/19px var(--paragraph_font);
                    }
                    .vacation-rentals-images .favoriteActivities a i {
                        color: var(--second_color);
                        font-size: 16px;
                        transition: all 0.3s;
                    }
                    .vacation-rentals-images .favoriteActivities a:focus {
                        text-decoration: none;
                    }
                    .vacation-rentals-images .favoriteActivities .favoriteLong {
                        margin: 0 3px 0 3px;
                    }
                    .vacation-rentals-images .favoriteActivities a:hover,
                    .vacation-rentals-images .favoriteActivities a:hover i {
                        color: var(--main_color);
                    }
                    .vacation-rentals-images .favoriteIcon {
                        position: absolute;
                        z-index: 2;
                        top: 15px;
                        right: 15px;
                    }
                    .vacation-rentals-images .favoriteIcon span.active i:first-child {
                        display: none;
                    }
                    .vacation-rentals-images .favoriteIcon span.active i:nth-child(2) {
                        display: inline;
                    }
                    .vacation-rentals-images .favoriteIcon i {
                        color: #fff;
                        font-size: 30px;
                        cursor: pointer;
                        transition: all 0.3s;
                    }
                    .vacation-rentals-images .favoriteIcon i:hover {
                        color: var(--main_color);
                    }
                    .vacation-rentals-images .favoriteIcon i:nth-child(2) {
                        display: none;
                        color: var(--main_color);
                    }
                    /*Custom Icon*/
                    .vacation-rentals-images .journey {
                        position: absolute;
                        right: 10px;
                        bottom: 12px;
                        width: 32px;
                        height: 32px;
                        background: var(--main_color);
                        border-radius: 50%;
                        padding: 5px 6px 9px 3px;
                        text-align: center;
                    }
                    .vacation-rentals-images .journey:hover .expCont {
                        height: 80%;
                    }
                    .vacation-rentals-images .journey .expCont {
                        height: 0%;
                        transition: 0.3s;
                        top: 10%;
                        position: absolute;
                        right: 100%;
                        padding-right: 12px;
                        overflow: hidden;
                    }
                    .vacation-rentals-images .journey .iconExplain {
                        background: var(--second_color);
                        width: auto !important;
                        white-space: nowrap;
                        text-transform: uppercase;
                        height: 100%;
                        padding: 1px 2px 0 7px;
                        font-size: 10px;
                        color: #fff;
                        position: relative;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    }
                    .vacation-rentals-images .iconExplain:after {
                        content: '';
                        width: 0;
                        height: 0;
                        border-top: 13px solid transparent;
                        border-bottom: 13px solid transparent;
                        border-left: 12px solid var(--second_color);
                        left: 100%;
                        top: 0;
                        position: absolute;
                    }
                    .vacation-rentals-images .journey img {
                        height: 100%;
                        width: 100%;
                        object-fit: contain;
                        overflow: hidden;
                    }
                    .vacation-rentals-images .journey > .iconCont {
                        height: 100%;
                        width: 100%;
                    }
                    /*Responsivness*//*Responsivness*//*Responsivness*/
                    @media (max-width: 991px) {
                        .item .box .title h3 {
                            font-size: 16px;
                        }
                        .vacation-rentals-images .item .box .title h3 {
                            font-size: 30px;
                        }
                    }
                    @media (max-width: 767px) {
                        .item .box .title h3 {
                            font-size: 38px;
                        }
                        .vacation-rentals-images .favoriteActivities {
                            text-align: center;
                        }
                    }
                    @media (max-width: 551px) {
                        .item .box .title h3 {
                            font-size: 28px;
                        }
                        /*.vacation-rentals-images .favoriteActivities{
                            font-size: 20px;
                        }
                        .vacation-rentals-images .favoriteActivities a i{
                            font-size: 23px;
                        }*/
                    }
                    @media (max-width: 400px) {
                        .item .box .title h3 {
                            font-size: 22px;
                        }
                    }
                    /*************** FIX ******************/
                    /*.vacation-rentals-images {*/
                    /*    max-width: 1335px;*/
                    /*    margin: 0 auto;*/
                    /*}*/
                    /*.vacation-rentals-images .item {*/
                    /*    padding: 5px;*/
                    /*    margin-bottom: 0;*/
                    /*}*/
                    /*.vacation-rentals-images.animate .item.active {*/
                    /*    height: 433px !important;*/
                    /*}*/
                    /*************** END FIX ******************/
                </style>
            </section><!--End vacation-rentals-images-->
        <?php elseif (get_sub_field('activities_list_layouts', $current_page_id) == 'Favorites'): ?> <!--Display Favorites List-->
            <section class="favorite_activities <?php echo get_sub_field('custom_class'); ?>">
                <div class="flex_wrapper">
                    <div class="noFound"><?php echo get_sub_field('text_if_no_favorite_activities', $current_page_id); ?></div>
                </div>
                <div class="back_btn">
                    <a href="/amenities/">Back to Services & Amenities</a>
                </div><!-- END .back_btn -->
            </section><!--End favorite_activities-->
            <script>
                favoriteActivities = localStorage.favoritAct.split(',');
                var favorites_string = localStorage.favoritAct;

                jQuery.ajax({
                    url: '<?php echo admin_url("admin-ajax.php") ?>',
                    type: 'POST',
                    data: 'action=filter_fav_cp' +
                        '&favorites_string=' + favorites_string,
                    success: function (data) {
                        if (data) {
                            jQuery('.favorite_activities .flex_wrapper').empty().append(data);
                        } else {
                            jQuery('.favorite_activities .flex_wrapper .noFound').css('display', 'block');
                        }
                    },
                    error: function (errormessage) {
                        alert(JSON.stringify(errormessage, null, 4));
                    }
                });

                jQuery(document).on('click', '.favorite_activities .item span.idButton', function (e) {
                    e.preventDefault();
                    var hzID = jQuery(this).attr('data-id');
                    var hzCL = jQuery(this).hasClass('active');
                    var favoriteActivitiesLG = favoriteActivities.length;
                    if (hzCL == true) {
                        jQuery(this).removeClass('active');
                        i = 0;
                        do {
                            if (favoriteActivities[i] == hzID) {
                                favoriteActivities.splice(i, 1);
                                i = favoriteActivitiesLG;
                                localStorage.favoritAct = favoriteActivities;
                            }
                            i++;
                        } while (i < favoriteActivitiesLG);
                    } else {
                        jQuery(this).addClass('active');
                        favoriteActivities.push(hzID);
                        localStorage.favoritAct = favoriteActivities;
                    }
                });
            </script>
            <style>
                .favorite_activities {
                    padding: 90px 35px 60px;
                }
                .favorite_activities .flex_wrapper {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: space-between;
                }
                .favorite_activities .item {
                    display: flex;
                    width: 46%;
                    margin-bottom: 90px;
                    padding: 10px;
                    background: #fff;
                    box-shadow: 0 0 10px rgba(0, 0, 0, .6);
                }
                .favorite_activities .item_wrap {
                    width: 100%;
                    position: relative;
                    border: 1px solid #ccc;
                    padding: 15px;
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                    align-items: flex-start;
                }
                .favorite_activities .item_wrap > span.active i:first-child {
                    display: none;
                }
                .favorite_activities .item_wrap > span:not(.active) i:last-child {
                    display: none;
                }
                .favorite_activities .item_wrap > span:not(.read_more) {
                    position: absolute;
                    top: 0;
                    right: 0;
                    width: 55px;
                    height: 55px;
                    transform: translate(50%, -50%);
                    border-radius: 50%;
                    overflow: hidden;
                    background: #fff;
                    display: inline-flex;
                    justify-content: center;
                    align-items: center;
                    color: var(--main_color);
                    box-shadow: 0 0 5px rgba(0, 0, 0, .6);
                    font-size: 28px;
                }
                .favorite_activities .item_wrap > span:not(.read_more):hover {
                    background: var(--main_color);
                    color: #fff;
                }
                .favorite_activities .item_wrap .img_box {
                    position: absolute;
                    top: 0;
                    left: 50%;
                    width: 80%;
                    height: 150px;
                    overflow: hidden;
                    transform: translate(-50%, -40%);
                    background: #292929;
                }
                .favorite_activities .item_wrap .img_box img {
                    display: block;
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    z-index: 0;
                }
                .favorite_activities .item_wrap .img_box h3 {
                    display: block;
                    position: absolute;
                    left: 0;
                    bottom: 0;
                    width: 100%;
                    margin: 0;
                    padding: 5px 10px;
                    text-align: center;
                    background: rgba(0, 0, 0, .7);
                    color: #fff;
                    z-index: 1;
                    white-space: nowrap;
                    text-overflow: ellipsis;
                    overflow: hidden;
                }
                .favorite_activities .item_wrap .text_box {
                    padding-top: 100px;
                    margin-bottom: 20px;
                }
                .favorite_activities .item_wrap .read_more {
                    display: inline-flex;
                    justify-content: center;
                    align-items: center;
                    padding: 10px 15px;
                    color: var(--main_color);
                    border: 1px solid var(--main_color);
                }
                .favorite_activities .item_wrap .read_more:hover {
                    background: var(--main_color);
                    color: #fff;
                }
                .favorite_activities .flex_wrapper > h3,
                .favorite_activities .flex_wrapper > p {
                    width: 100%;
                    text-align: center;
                }
                .favorite_activities .noFound {
                    display: none;
                    text-align: center;
                    width: 100%;
                }
                .favorite_activities .noFound > p a {
                    color: var(--main_color);
                }
                .favorite_activities .noFound > p a:hover {
                    color: var(--hover_color);
                }
                @media (max-width: 767px) {
                    .favorite_activities .item {
                        width: 100%;
                    }
                    .favorite_activities .item_wrap > span:not(.read_more) {
                        width: 40px;
                        height: 40px;
                        font-size: 20px;
                    }
                }
                /**************************** FIX  ********************************/
                .favorite_activities .flex_wrapper {
                    max-width: 1600px;
                    margin: 0 auto;
                }
                .favorite_activities .item {
                    width: 48%;
                    margin-bottom: 0;
                    margin-top: 200px;
                }
                .favorite_activities {
                    padding: 0px 35px 60px;
                }
                .favorite_activities .item_wrap .img_box {
                    position: absolute;
                    top: -65px;
                    left: 50%;
                    width: 80%;
                    height: 270px;
                    overflow: hidden;
                    transform: translate(-50%, -40%);
                    background: #292929;
                }
                .favorite_activities .back_btn {
                    text-align: center;
                    margin-top: 40px;
                }
                .favorite_activities .back_btn a {
                    font: 700 16px/19px var(--paragraph_font);
                    color: #FFF;
                    text-transform: uppercase;
                    padding: 18px 10px;
                    position: relative;
                    border: 0;
                    font-size: 16px;
                    background: var(--main_color);
                    animation-iteration-count: infinite;
                    animation-duration: 1s;
                    display: inline-block;
                }
                .favorite_activities .back_btn a:hover {
                    background: var(--hover_color);
                }
                @media (max-width: 991px) {
                    .favorite_activities .item {
                        width: 100%;
                    }
                }
                /**************************** END  FIX  ****************************/
            </style>
        <?php endif; ?>
        <script>
            /*bigger items*/
            function childItems() {
                var bI = jQuery('.vacation-rentals-images .item').width() / 490 * 300;
                jQuery('.vacation-rentals-images .item').height(bI);
            }

            childItems();

            jQuery(window).resize(function () {
                childItems();
            });/*End resize function*/

            function animateAppear(unit, waitTime) {
                setTimeout(function () {
                    jQuery(unit).addClass('active');
                }, waitTime);
            }

            var hzLazy = jQuery('.vacation-rentals-images').hasClass('lazyLoad');
            var hzAnime = jQuery('.vacation-rentals-images').hasClass('animate');
            var loadMore = jQuery('.vacation-rentals-images').hasClass('loadMore');
            if (hzLazy == true || hzAnime == true && loadMore == false) {
                var actItems = jQuery('.vacation-rentals-images .item');
                var actItems = jQuery.makeArray(actItems);
                var calcActivities = actItems.length;

                function loadImgAct() {
                    var startLoad = jQuery(window).scrollTop() + window.innerHeight;
                    tempArray = [];//use to collect items and load them with animation
                    var i = 0;
                    do {
                        var hzTop = jQuery(actItems[i]).offset().top;
                        var hzCL = jQuery(actItems[i]).hasClass('active');
                        var hzLoad = jQuery(actItems[i]).hasClass('imageLoaded');
                        if (hzTop < startLoad && hzCL == false) {
                            //jQuery(actItems[i]).addClass('active');
                            if (hzLazy == true && hzLoad == false) {
                                var takeSrc = jQuery(actItems[i]).find('.box img').attr('data-src');
                                jQuery(actItems[i]).find('.box img').attr('src', takeSrc);
                            }
                            tempArray.push(actItems[i]);
                            tempArrayLG = tempArray.length;
                            if (tempArrayLG > 5) {
                                i = calcActivities;
                            }
                        }
                        i++;
                    } while (i < calcActivities);
                    tempArrayLG = tempArray.length;
                    var loadTime = 1300 / tempArrayLG;
                    var addTime = loadTime / tempArrayLG;
                    if (addTime > 200) {
                        addTime = 200;
                    }
                    if (loadTime > 200) {
                        loadTime = 200;
                    }
                    var i = 0;
                    do {
                        var waitTime = loadTime + addTime * i;
                        var unit = jQuery(tempArray[i]);
                        animateAppear(unit, waitTime);
                        i++;
                    } while (i < tempArrayLG);
                    if (tempArrayLG > 5) {
                        setTimeout(function () {
                            loadImgAct();
                        }, 50);
                    }
                }

                loadImgAct();

                var scrtTimer;
                jQuery(window).scroll(function () {
                    if (scrtTimer) {
                        window.clearTimeout(scrtTimer);
                    }
                    scrtTimer = window.setTimeout(function () {
                        loadImgAct();
                    }, 70);
                });

                /*Check image on Load and add new*/
                function loadMoreAct() {
                    onegoes = 1;
                    i = 0;
                    do {
                        if (jQuery(actItems[i]).hasClass('active') == false && jQuery(actItems[i]).hasClass('imageLoaded') == false && onegoes == 1) {
                            var showIMG = jQuery(actItems[i]).find('.box img').attr('data-src');
                            jQuery(actItems[i]).addClass('imageLoaded').find('.box img').attr('src', showIMG);
                            onegoes = 0;
                            i = calcActivities;
                        }
                        i++;
                    } while (i < calcActivities);
                    if (onegoes == 0) {
                        imageCheker();
                    }
                }

                function imageCheker() {
                    jQuery('.vacation-rentals-images').imagesLoaded(function () {
                        setTimeout(function () {
                            loadMoreAct();
                        }, 50);
                    });
                }

                setTimeout(function () {
                    imageCheker();
                }, 2000);
            } else if (loadMore == true) {
                if (hzAnime == true) {
                    var takeItems = jQuery('.vacation-rentals-images .item').not('.hidenItem');
                    var takeItems = jQuery.makeArray(takeItems);
                    var takeItemsLG = takeItems.length;
                    var loadTime = 1000 / takeItemsLG;
                    var i = 0;
                    do {
                        var waitTime = loadTime * i;
                        var unit = jQuery(takeItems[i]);
                        animateAppear(unit, waitTime)
                        i++;
                    } while (i < takeItemsLG);
                }

                jQuery('.vacation-rentals-images .buttonLine a.button').click(function (e) {
                    e.preventDefault();
                    var takeItems = jQuery('.vacation-rentals-images .item.hidenItem');
                    var takeItems = jQuery.makeArray(takeItems);
                    var howMuchLoad = jQuery(this).attr('href');
                    var howMuchLoad = +howMuchLoad[1];
                    var loadTime = 1000 / howMuchLoad;
                    var i = 0;
                    do {
                        var waitTime = loadTime * i;
                        var unit = jQuery(takeItems[i]);
                        jQuery(takeItems[i]).removeClass('hidenItem');
                        animateAppear(unit, waitTime);
                        i++;
                    } while (i < howMuchLoad);

                    /*Check on more to show*/
                    var takeItems = jQuery('.vacation-rentals-images .item.hidenItem');
                    var takeItemsLG = takeItems.length;
                    if (takeItemsLG < 1) {
                        jQuery('.vacation-rentals-images.loadMore .buttonLine').css('display', 'none');
                    }
                });
            } /*End Load Types*/

            /*Activities Functionality*/

            //localStorage;
            if (localStorage.favoritAct) {
                favoriteActivities = localStorage.favoritAct.split(',');
                var favoriteActivitiesLG = favoriteActivities.length;
                jQuery('.favoriteActivities .favoriteLong span').text(favoriteActivitiesLG);

                jQuery('.vacation-rentals-images .favoriteIcon span').each(function () {
                    i = 0;
                    do {
                        var hzID = jQuery(this).attr('data-id');
                        if (hzID == favoriteActivities[i]) {
                            jQuery(this).addClass('active');
                            i = favoriteActivitiesLG;
                        }
                        i++;
                    } while (i < favoriteActivitiesLG);
                })
            } else {
                favoriteActivities = [];
                jQuery('.favoriteActivities .favoriteLong span').text('0');
            }

            jQuery('.vacation-rentals-images .favoriteIcon span').click(function (e) {
                e.preventDefault();
                var hzID = jQuery(this).attr('data-id');
                var hzCL = jQuery(this).hasClass('active');
                var favoriteActivitiesLG = favoriteActivities.length;
                if (hzCL == true) {
                    jQuery(this).removeClass('active');
                    i = 0;
                    do {
                        if (favoriteActivities[i] == hzID) {
                            favoriteActivities.splice(i, 1);
                            i = favoriteActivitiesLG;
                            localStorage.favoritAct = favoriteActivities;
                        }
                        i++;
                    } while (i < favoriteActivitiesLG);
                } else {
                    jQuery(this).addClass('active');
                    favoriteActivities.push(hzID);
                    localStorage.favoritAct = favoriteActivities;
                }
                var favoriteActivitiesLG = favoriteActivities.length;
                jQuery('.favoriteActivities .favoriteLong span').text(favoriteActivitiesLG);

                //alert(JSON.stringify(favoriteActivities, null, 4));
            });
        </script>
    </section><!--End vacation-rentals-images-->
<?php endif; ?>