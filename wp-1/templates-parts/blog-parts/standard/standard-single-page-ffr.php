<?php
$banner_img_url = $default_banner_img_url;
$default_unit_img_url = $default_banner_img_url;
?>
<style>
    .banner{
        max-height: 375px;
        background: #000;
        overflow: hidden;
        position: relative;
    }
    .banner .banner-img{
        width: 100%;
        opacity: 0.8;
    }
    .banner h1 {
        color: #fff;
        text-align: center;
        position: absolute;
        text-align: center;
        width: 100%;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        text-transform: capitalize;
        text-shadow: 0px 0px 10px #00000099;
        font: 400 66px/86px var(--title_font);
    }
    .main-content {
        padding: 30px 0 50px;
        min-height: 500px;
        background: #FAFAFA;
    }
    .container_wrap {
        padding: 0 15px;
        margin: 0 auto;
        max-width: 1510px;
        width: 100%;
    }
    .blogMainContent {
        width: calc(100% - 510px);
    }
    .blogMainContent article h4 {
        font: 400 24px/28px var(--title_font);
    }
    .blogMainContent article {
        padding: 50px;
        background: #fff;
        border: 1px solid #DFDFDF;
        font: 400 16px/28px var(--paragraph_font);
        line-height:28px;
        color: #292929BF;
    }
    .blogMainContent article h2 {
        /*letter-spacing:2.4px;*/
        margin-top: 0;
        margin-bottom: 20px;
        color:var(--title_color);
        text-transform:capitalize;
        font: 600 22px/28px var(--title_font);
    }
    /*Sidebar Blog*/
    .sidebarBlog{
        padding: 0 15px 40px;
        width: 510px;
        float: right;
    }
    .sidebarBlog h2 {
        margin: 0;
        padding: 15px 0;
        letter-spacing: 0;
        text-align: center;
        text-transform: capitalize;
        border-bottom: 1px solid #D6D6D6;
        font: 400 24px/28px var(--title_font);
        color: var(--title_color);
    }
    .sidebarBlog .cat-list{
        margin: 0;
        padding: 25px;
        list-style: none;
    }
    .sidebarBlog .cat-list li{
        font-size: 16px;
        font-weight: 500;
        line-height: 18px;
        margin-bottom:10px;
        display: inline-block;
    }
    .sidebarBlog .cat-list li:last-child {
        margin-bottom: 0;
    }
    .sidebarBlog .cat-list li a{
        font: 500 16px/36px Montserrat;
        letter-spacing: 0;
        color: rgba(41, 41, 41, .75);
        text-transform: capitalize;
    }
    .sidebarBlog .cat-list li a:hover{
        color: var(--main_color);
        text-decoration: none;
    }
    .sidebarBlog form{
        overflow: hidden;
    }
    .sidebarBlog form+h2{
        margin-top: 0;
    }
    .sidebarBlog .imageIn{
        margin-right: 15px;
        width: 130px;
        height: 100px;
        overflow: hidden;
    }
    .sidebarBlog .imageIn img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .sidebarBlog .singlePost h4{
        margin-top:0;
        max-height: 70px;
        overflow: hidden;
        font-weight: 700;
        font-size:20px;
    }
    .sidebarBlog .singlePost h4:before{
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        height: 100%;
        width: 161px;
        background: linear-gradient(to right, rgba(255,255,255,0), rgba(255,255,255,1));
    }
    .sidebarBlog .singlePost h4 a {
        color: var(--title_color);
        text-transform: capitalize;
        font: 500 20px/22px var(--title_font);
        overflow: hidden;
        /*white-space: nowrap;
        text-overflow: ellipsis;*/
    }
    .sidebarBlog .singlePost h4 a:hover{
        color: var(--main_color);
        text-decoration: none;
    }
    .sidebarBlog .singlePost .star-rating {
        list-style: none;
        margin: 0;
        font-size: 12px;
        color: var(--second_color);
    }
    .sidebarBlog .singlePost .star-rating li {
        display: inline-block;
    }
    /*singlePostCont*/
    .leftFloat {
        float: left;
    }
    .popularPost {
        padding: 10px 10px 0;
    }
    .popularPost:not(:last-child){
        margin-bottom: 0px;
        padding-bottom: 10px;
        border-bottom: 1px solid #D6D6D6;
    }
    .popularPost h4{
        font-size: 16px;
        font-weight: 500;
        line-height: 18px;
        color: <?=$main_color?>;
        padding-right: 10px;
    }
    /*singlePost*/
    .searchPost{
        margin: 30px 0;
    }
    .searchPost input:first-child{
        height: 60px;
        border: 1px solid var(--main_color);
        border-right: none;
        font-size:16px;
    }
    .searchPost input:first-child::-moz-placeholder{
        color: #292929;
        font-size: 16px;
        text-transform: uppercase;
        font-weight: 400;
        line-height: 1.4;
        opacity: .5;
    }
    .searchPost input:first-child::-webkit-input-placeholder {
        color: #292929;
        font-size: 16px;
        text-transform: uppercase;
        font-weight: 400;
        line-height: 1.4;
        opacity: .5;
    }
    .searchPost input:last-child{
        height: 60px;
        background: var(--second_color) url('/wp-content/themes/BizcorLuxury/images/search_white.svg') no-repeat;
        background-size: auto 50%;
        background-position: center center;
        border: none;
        width: 75px;
    }
    .searchPost input:last-child:hover{
        background-color: var(--main_color);
    }
    .popularPost span{
        color: <?=$main_color?>;
        font-size: 14px;
    }
    .sideBarReadMore {
        color: <?=$main_color?>;
    }
    .sideBarReadMore:hover {
        color: #43c3ff;
    }
    .sidebarBlog .singlePost{
        margin-top: 0;
        padding-bottom: 10px;
    }
    .box-white {
        background: #fff;
        margin-bottom: 30px;
        border: 1px solid #D6D6D6;
    }
    .sidebar-featured h3 {
        text-align: center;
        margin: 20px auto;
        font-size: 24px;
        line-height: 38px;
        display: none;
    }
    .sidebar-featured-block {
        position: relative;
        height: 525px;
        transition: box-shadow .4s;
    }
    .sidebar-featured-block-item {
        text-align: center;
        max-width: 550px;
        max-height: 500px;
        cursor: default;
    }
    .sidebar-featured-block-item:hover .sidebar-featured-img img {
        transform: scale(1.1);
    }
    .sidebar-featured-block .sidebar-featured-img {
        position: relative;
        overflow: hidden;
        background: #000;
        height: 100%;
    }
    .sidebar-featured-block .sidebar-featured-img::before {
        content: '';
        position: absolute;
        top: 15px;
        left: 15px;
        right: 15px;
        bottom: 15px;
        border: 1px solid #fff;
        transition: .4s;
        z-index: 1;
    }
    /*.sidebar-featured-block:hover .sidebar-featured-img::before {
        top: 23px;
        left: 23px;
        right: 23px;
        bottom: 23px;
    }*/
    .sidebar-featured-block .sidebar-featured-img::after {
        /*content: '';*/
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border: 15px solid rgba(255,255,255,.25);
    }
    .sidebar-featured-block .sidebar-featured-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: .4s;
        opacity: .9;
    }
    .sidebar-featured-block .sidebar-featured-txt {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        z-index: 10;
        text-align: center;
    }
    .sidebar-featured-block .sidebar-featured-txt h3 {
        display: block;
        font-size: 32px;
        margin: 0 auto 20px;
        color: #fff;
        text-shadow: 0 0 10px rgba(0,0,0,.6);
        text-transform: capitalize;
    }
    .sidebar-featured-block .sidebar-featured-txt span {
        display: inline-block;
        width: 225px;
        height: 55px;
        padding: 14px 18px;
        border: 2px solid #fff;
        color: #fff;
        font-size: 16px;
        font-weight:600;
        text-transform: uppercase;
        cursor: pointer;
        transition: .4s;
    }
    .sidebar-featured-block .sidebar-featured-txt span:hover {
        background: var(--main_color);
    }
    .sidebar-featured-block .sidebar-featured-txt ul {
        margin: 0;
        padding: 0;
    }
    .sidebar-featured-block .sidebar-featured-txt ul li {
        text-transform: uppercase;
        display: inline-block;
        font-size: 12px;
        color: #000000;
        line-height: 19px;
    }
    .sidebar-featured-block .sidebar-featured-txt ul li:after {
        content: " | ";
    }
    .sidebar-featured-block .sidebar-featured-txt ul li:last-child:after {
        content: " ";
    }
    .c-search-widget__item .form-control.is-focused,
    .c-search-widget__item .form-control:focus {
        border-color: #ccc;
    }
    /******************* FIX RIGHT SIDEBAR *************************/
    .sidebarBlog h2 {
        margin: 0;
        padding: 15px 0;
        letter-spacing: 0;
        text-align: center;
        text-transform: capitalize;
        border-bottom: 1px solid #D6D6D6;
        font: 700 24px/28px var(--title_font);
        color: var(--title_color);
    }
    .sidebarBlog .singlePost h4 a {
        color: var(--title_color);
        text-transform: capitalize;
        font: 500 20px/23px var(--paragraph_font);
        overflow: hidden;
        /*white-space: nowrap;
        text-overflow: ellipsis;*/
    }
    .sidebarBlog .singlePost h4 {
        margin-top: 24px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: clip;
        position: relative;
    }
    .sidebarBlog .singlePost h4::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        height: 100%;
        width: 150px;
        background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1));
    }
    .sidebarBlog .start-your-vacation-box h3 {
        font: 30px/36px 'Playfair Display';
        color: #FFFFFF;
        text-transform: uppercase;
    }
    .sidebarBlog .start-your-vacation-box a {
        font: 600 16px/25px 'Poppins';
        color: #FFFFFF;
        background: transparent;
        border: 2px solid #FFFFFF;
    }
    .sidebarBlog .start-your-vacation-box a:hover {
        background: var(--hover_color);
    }
    .sidebarBlog .cat-list li a {
        font: 500 16px/36px var(--paragraph_font);
        letter-spacing: 0;
        color:var(--paragraph_color);
        text-transform: uppercase;
    }
    .sidebarBlog .cat-list li {
        display: block;
    }
    .blogMainContent article > h1,
    .blogMainContent article > h2,
    .blogMainContent article > h3,
    .blogMainContent article > h4,
    .blogMainContent article > h5,
    .blogMainContent article > h6 {
        color: #292929;
    }
    .searchPost input:first-child {
        height: 60px;
        border: 1px solid var(--second_color);
        border-right: none;
        padding-left: 29px;
        width: calc(100% - 75px);
        font: 400 18px/28px var(--paragraph_font);
    }
    .searchPost input:first-child::-moz-placeholder {
        color: var(--paragraph_color);
        text-transform: uppercase;
        opacity: .5;
        font: 400 18px/28px var(--paragraph_font);
    }
    .searchPost input:first-child::-webkit-input-placeholder {
        color: var(--paragraph_color);
        text-transform: uppercase;
        opacity: .5;
        font: 400 18px/28px var(--paragraph_font);
    }
    /******************* END FIX RIGHT SIDEBAR *************************/

    /***Responsive**Responsive**Responsive***/
    @media(max-width: 1199px) {
        .blogMainContent, .sidebarBlog {
            width: 100%;
        }
        .blogMainContent {
            margin-bottom: 30px;
        }
        .main-content, .sidebarBlog {
            padding-bottom: 0;
        }
        .blogMainContent article {
            padding: 20px;
        }
    }
    @media (max-width:991px) {
        .banner h1 {
            font-size: 44px;
            padding: 0 15px;
        }
    }
    @media(max-width:767px){
        .banner h1{
            font-size:30px;
        }
    }
</style>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post() ?>
        <?php wpb_set_post_views(get_the_ID()); ?>
        <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'post-thumbnails'); ?>
        <section class="banner container-fluid">
            <div class="row">
                <?php
                if($thumb[0]==''){
                    echo '<img src="'.$default_banner_img_url.'" alt="" class="banner-img"/>';
                }else{
                    echo '<img src="'.$thumb[0].'" alt="" class="banner-img"/>';
                }
                ?>
                <h1><?php the_title(); ?></h1>
            </div>
        </section><!-- end banner -->
    <?php endwhile; ?>
<?php endif; ?>
<section class="main-content">
    <div class="container_wrap">
        <div class="row">
            <div class="col-md-12 blogMainContent">
                <article>
                    <?php the_content(); ?>
                </article>
            </div><!--End col-md-12-->
            <div class="sidebarBlog">
                <div class="box-white">
                    <h2>popular posts</h2>
                    <div class="singlePost">
                        <?php
                        $popularpost = new WP_Query( array( 'posts_per_page' => 3, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
                        while ($popularpost->have_posts()) : $popularpost->the_post();
                            $img_url = (get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : $default_unit_img_url;
                            ?>
                            <div class="popularPost customClear">
                                <div class="imageIn leftFloat">
                                    <img src="<?=$img_url?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
                                </div>
                                <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <!-- <a href="<?=get_permalink()?>" class="sideBarReadMore">Read More</a> -->
                                <ul class="star-rating">
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
                <?php include(get_theme_root().'/'.get_option('stylesheet').'/templates-parts/sidebar-parts/start-vacation.php');?>
                <?php get_search_form(); ?>
                <!-- <div class="box-white">
                    <h2>recent posts</h2>
                    <div class="singlePost">
                        <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    while ($query->have_posts()): $query->the_post();
                        $img_url = (get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : $default_unit_img_url;
                        ?>
                                <div class="popularPost customClear">
                                    <div class="imageIn leftFloat">
                                        <img src="<?=$img_url?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
                                    </div>
                                    <h4><a href="<?=get_permalink()?>"><?php the_title(); ?></a></h4>
                                    <span><?php the_time('m/j/Y'); ?></span>
                                </div>
                                <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
                    </div>
                </div> -->
                <div class="box-white">
                    <h2 class="catTitle">Browse Categories</h2>
                    <ul class="cat-list">
                        <?php wp_list_categories( array(
                            'orderby'  => 'name',
                            'title_li' => '',
                        ) ); ?>
                    </ul>
                </div>
            </div><!--end of blogItemRight-->
        </div>
    </div>
</section>
<div class="mobile-bar">
    <div class="flex-wrap">
        <a href="/contact-us/">contact us</a>
        <a href="/search-results/" class="rental">find your rental</a>
    </div>
</div>
<style>
    .mobile-bar{
        position:fixed;
        left:0;
        right:0;
        bottom:0;
        z-index:11;
        padding:10px 5px!important;
        background:#fff!important;
        box-shadow: 0 0 7px #777;
        display:none;
    }
    .mobile-bar .flex-wrap{
        display:flex;
        display:-webkit-flex;
        max-width:500px;
        margin:0 auto;
    }
    .mobile-bar .flex-wrap a{
        display:block;
        margin:0 3px;
        text-transform:uppercase;
        text-align:center;
        padding: 12px 8px;
        font-size: 16px;
        border:1px solid #C8C8C8;
        color: #999;
        width:40%;
    }
    .page-id-299 .mobile-bar .flex-wrap a{
        font-size:13px;
        width:35%;
    }
    .page-id-299 .mobile-bar .flex-wrap a.rental{
        width:65%;
    }
    .mobile-bar .flex-wrap a.rental{
        width:60%;
        border-color:var(--main_color);
        background:var(--main_color);
        color:#fff;
    }
    @media(max-width:1199px){
        body .footer-copyright{
            padding-bottom:90px;
        }
        .mobile-bar{
            display:block;
        }
    }
</style>
<script type="text/javascript">
    jQuery(window).load(function(){
        if(window.innerWidth > 767){
            var heiEntr = jQuery('.banner').height();
            var heiImg =  jQuery('.banner .banner-img').height();
            if(heiImg > heiEntr){
                var resHei = (heiImg - heiEntr)/2;
            }
            jQuery('.banner .banner-img').css({'margin-top' : -resHei});
        }
    });
</script>