<?php get_header() ?>

<?php
if(is_category()){
    $category = get_queried_object();
    $category_name  = $category->slug;
}elseif(is_search()){
    $search_keyword = get_search_query();
}
?>

<style>
strong, b {
    font-weight: bold;
}
header, footer {
    display: none;
}
/*mobile header*/
.header_top {
    background: var(--main_color);
    padding: 5px 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #fff;
    display: none;
}
.header_top a {
    color: #fff;
}
.header_top a:hover {
    color: #ff760a;
}
.header_top .header_top_links {
    font-size: 16px;
    text-transform: capitalize;
    display: flex;
    align-items: center;
    letter-spacing: 1px;
}
.header_top .header_top_links span {
    padding: 0 10px;
}
.header_top .header_top_phone img {
    height: 16px;
    transform: rotateY(180deg);
    margin-right: 5px;
}
/*end mobile header*/

.wrapper {
    display: flex;
    background-color: #F5F5F5;
    position: relative;
}
.wrapper .left_sidebar {
    width: 32%;
    height: 100vh;
    position: sticky;
    position: -webkit-sticky;
    top: 0;
    left: 0;
}
.wrapper .right_sidebar {
    width: 17%;
    height: 100vh;
    position: sticky;
    position: -webkit-sticky;
    right: 0;
    top: 0;
}
/*left sidebar*/
.wrapper .left_sidebar {
    background: url('/wp-content/themes/BizcorLuxury/images/footer-background.jpeg') right no-repeat;
    -webkit-background-size: cover;
    background-size: cover;
}
.wrapper .left_sidebar:before{
    content: "";
    display: block;
    height: 18vh;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    opacity: .5;
    background: linear-gradient(to bottom, rgba(0,0,0,1) 0%,rgba(0,0,0,0) 100%);
}
.wrapper .left_sidebar:after{
    content: "";
    display: block;
    height: 18vh;
    width: 100%;
    position: absolute;
    bottom: 0;
    left: 0;
    opacity: .5;
    background: linear-gradient(to top, rgba(0,0,0,1) 0%,rgba(0,0,0,0) 100%);
    z-index: -1;
}
.wrapper .left_sidebar .phones {
    text-align: right;
    font-weight: 300;
    font-size: 16px;
    color: #fff;
    text-transform: uppercase;
    padding: 5px 20px;
    background: #2A2A2A;
    display: none;
}
.wrapper .left_sidebar .phones a {
    color: #fff;
    font-size: 18px;
    text-decoration: none;
}
.wrapper .left_sidebar .phones span {
    padding: 0 5px;
}
.wrapper .left_sidebar .phones a:hover {
    color: #5AACA6;
}
.wrapper .left_sidebar .left_wrapper {
    height: 100%;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    background-color: rgba(0,0,0,.4);
    padding: 60px 20px 40px;
}
.wrapper .left_sidebar .left_wrapper .blog_logo {
    margin: 0;
    text-align: center;
}
.wrapper .left_sidebar .left_wrapper .blog_logo img {
    max-width: 330px;
    width: 100%;
}
.logo_black {
    display: none;
}
.wrapper .left_sidebar .left_wrapper .menu-blog-menu-container ul {
    list-style-type: none;
    padding: 0 20px;
}
.wrapper .left_sidebar .left_wrapper .menu-blog-menu-container ul li{
    text-align: left;
    position: relative;
    margin-bottom: 20px;
}
.wrapper .left_sidebar .left_wrapper .menu-blog-menu-container ul li:before{
    content: "";
    width: 12px;
    height: 12px;
    border: 1px solid #fff;
    border-radius: 50%;
    display: block;
    position: absolute;
    top: 50%;
    left: -24px;
    background: transparent;
    transition: 0.3s;
    transform: translateY(-50%);
}
.wrapper .left_sidebar .left_wrapper .menu-blog-menu-container ul li:hover:before{
    background: var(--main_color);
    border: 1px solid var(--main_color);
}
.wrapper .left_sidebar .left_wrapper .menu-blog-menu-container ul li:last-child {
    margin-bottom: 0;
}
.wrapper .left_sidebar .left_wrapper .menu-blog-menu-container ul li a {
    display: inline-block;
    color: #fff !important;
    font-size: 24px;
    transition: .3s;
}
.wrapper .left_sidebar .left_wrapper .menu-blog-menu-container ul li a:hover {
    color: var(--main_color) !important;
}
.wrapper .left_sidebar .left_wrapper .footer_bottom_links {
    margin: 0 auto;
    width: auto;
}
.wrapper .left_sidebar .left_wrapper .footer_bottom_links ul {
    margin-bottom: 30px;
    padding: 0;
    list-style: none;
}
.wrapper .left_sidebar .left_wrapper .footer_bottom_links ul li{
    display: inline-block;
}
.wrapper .left_sidebar .left_wrapper .footer_bottom_links ul li:not(:last-child){
    margin-right: 10px;
}
.wrapper .left_sidebar .left_wrapper .footer_bottom_links ul li a img {
    width: 42px;
    height: 42px;
    border-radius: 50%;
}
.wrapper .left_sidebar .left_wrapper .footer_bottom_links ul li a:hover img{
    background: var(--main_color);
}
.wrapper .left_sidebar .left_wrapper .copy {
    margin: 0 auto;
}
.wrapper .left_sidebar .blog_footer {
    text-align: center;
}
.wrapper .left_sidebar .left_wrapper .mobile_btn {
    display: none;
    font-size: 36px;
    -webkit-transition: .3s;
    -o-transition: .3s;
    transition: .3s;
}
.wrapper .left_sidebar .left_wrapper .mobile_btn.open {
    -webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    transform: rotate(180deg);
}
.wrapper .left_sidebar .left_wrapper .copy p{
    color: #fff;
    font-size: 14px;
}
.post-date{
    position: absolute;
    bottom: 0;
    left: 0;
    border-top-right-radius: 9px;
    background: var(--main_color);
    width: 106px;
    color: #fff;
    padding: 7px 12px;
    font-size: 16px;
    text-align: center;
}
.categories{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    background: rgba(51,51,51,.8);
    color: #fff;
    text-align: center;
    padding: 5px 0;
}
.categories a{
    color: #fff;
    text-transform: uppercase;
    font-size: 14px;
}
/*end left sidebar*/

/*post content*/
.wrapper .post_content {
    width: 50%;
    padding: 30px 0;
    border-top: 1px solid rgba(159,159,159,.4);
    background-color: #fff;
    position: relative;
}
.wrapper .post_content .post_content_wrapper {
    text-align: center;
    width: 90%;
    margin: 0 auto;
}
.wrapper .post_content .post_content_wrapper h1 {
    margin-top: 0;
    margin-bottom: 15px;
    color: #2A2A2A;
    font-size: 42px;
    text-transform: capitalize;
}
.wrapper .post_content .post_content_wrapper .category_wrap {
    color: var(--main_color);
}
.wrapper .post_content .post_content_wrapper .category {
    display: inline-block;
    font-size: 14px;
    margin-bottom: 10px;
    color: var(--main_color);
    -webkit-transition: .3s;
    -o-transition: .3s;
    transition: .3s;
}
.wrapper .post_content .post_content_wrapper .category:hover {
    color: var(--hover_color);
}
.wrapper .post_content .post_content_wrapper .author_date {
    color: #6B6B6B;
    font-size: 14px;
    margin-bottom: 20px;
    text-transform: capitalize;
}
.wrapper .post_content .post_content_wrapper .author_date a{
    color: var(--main_color);
}
.wrapper .post_content .post_content_wrapper .author_date a:hover{
    color: var(--hover_color);
}
.wrapper .post_content .post_content_wrapper .author_date span:first-of-type {
    margin-right: 15px;
}
.wrapper .post_content .post_content_wrapper .author_date span i {
    margin-right: 5px;
}
.wrapper .post_content .post_content_wrapper > img {
    width: 90%;
    margin-bottom: 20px;
    padding: 0 30px;
}
.wrapper .post_content .post_content_wrapper .line {
    display: block;
    width: 100%;
    height: 1px;
    background-color: #9F9F9F;
    margin-top: 5px;
    margin-bottom: 30px;
    opacity: .4;
}
.wrapper .post_content .post_content_wrapper p {
    text-align: left;
    font-size: 14px;
    line-height: 1.8;
    color: #8F8F8F;
    margin-bottom: 30px;
}
.wrapper .post_content .post_content_wrapper .links {
    margin: 0 auto;
}
.wrapper .post_content .post_content_wrapper .links > div {
    width: 100%;
    margin-bottom: 20px;
}
.wrapper .post_content .post_content_wrapper .links h3 {
    color: #2A2A2A;
    text-transform: uppercase;
    font-size: 20px;
    letter-spacing: 1px;
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    padding-bottom: 3px;
    border-bottom: 1px solid var(--main_color);
}
.wrapper .post_content .post_content_wrapper .links {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    margin-bottom: 30px;
}
.wrapper .post_content .post_content_wrapper .social_links {
    list-style-type: none;
    display: flex;
    margin: 0;
    padding: 0;
}
.wrapper .post_content .post_content_wrapper .social_links li {
    margin-right: 10px;
}
.wrapper .post_content .post_content_wrapper .social_links li:last-child {
    margin-right: 0;
}
.wrapper .post_content .post_content_wrapper .social_links li a {
    display: inline-block;
    color: var(--title_color);
}
.wrapper .post_content .post_content_wrapper .social_links li a:hover {
    color: var(--main_color);
}
.wrapper .post_content .post_content_wrapper .social_links li a img {
    width: 26px;
    height: 26px;
    -webkit-transition: .3s;
    -o-transition: .3s;
    transition: .3s;
}
.wrapper .post_content .post_content_wrapper .social_links li a:hover img {
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    -o-transform: scale(1.1);
    transform: scale(1.1);
}
.wrapper .post_content .comments {
    width: 70%;
    margin: 0 auto;
}
.wrapper .post_content .comments h2 {
    color: #2A2A2A;
    text-transform: uppercase;
    font-size: 20px;
    letter-spacing: 1px;
    display: inline-block;
    margin-top: 0;
    margin-bottom: 30px;
    padding-bottom: 3px;
    border-bottom: 1px solid #5AACA6;
}
.wrapper .post_content .comments .comments_wrapper .item {
    position: relative;
    padding-bottom: 15px;
    margin-bottom: 20px;
    border-bottom: 1px solid rgba(159,159,159,.4);
}
.wrapper .post_content .comments .comments_wrapper .item:nth-child(even) {
    padding-left: 50px;
}
.wrapper .post_content .comments .comments_wrapper .item > div {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}
.wrapper .post_content .comments .comments_wrapper .item .fa-user-circle {
    font-size: 52px;
    color: #BABABA;
}
.wrapper .post_content .comments .comments_wrapper .item .author_date {
    display: inline-block;
    padding-left: 10px;
}
.wrapper .post_content .comments .comments_wrapper .item .author {
    font-size: 16px;
    color: #212121;
    margin-top: 0;
    margin-bottom: 0;
    text-transform: uppercase;
}
.wrapper .post_content .comments .comments_wrapper .item .date {
    font-size: 12px;
}
.wrapper .post_content .comments .comments_wrapper .item p {
    max-height: 60px;
    overflow: hidden;
}
.wrapper .post_content .comments .comments_wrapper .item .reply {
    position: absolute;
    top: 0;
    right: 0;
    padding: 0 5px;
    color: #fff;
    background-color: #000;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 12px;
}
/*end post content*/

/*pagination*/
.pagination {
    margin-top: 0;
    margin-left: 30px;
    margin-bottom: 30px;
}
.pagination h2 {
    margin: 0;
}
.page-numbers {
    font-size: 16px;
    font-weight: 600;
    color: #1968C3;
    padding: 5px 10px;
    border: 2px solid #1968C3;
    -webkit-transition: .3s;
    -o-transition: .3s;
    transition: .3s;
}
.page-numbers:hover {
    background-color: #1968C3;
    color: #fff;
}
.page-numbers.current {
    background-color: #1968C3;
    color: #fff;
}
/*end pagination*/

/*Safari Fixes*/
.Safari .page-numbers {
    padding: 5px 10px 2px;
}
.Safari .posts .post .info .details {
    padding-bottom: 7px;
}
.Safari .posts .post .info .details .fa-bars  {
    top: 49%;
}
/*End Safari Fixes*/

footer+.copyright{
    display: none;
}
/*RESPONSIVENESS*//*RESPONSIVENESS*//*RESPONSIVENESS*/
@media(max-width: 1440px) {
.wrapper .post_content .post_content_wrapper {
    width: 80%;
}
.wrapper .post_content .comments {
    width: 80%;
}
.wrapper .left_sidebar .left_wrapper .logo {
    padding-bottom: 20px;
}
.wrapper .left_sidebar .left_wrapper .menu-blog-menu-container ul li {
    margin-bottom: 10px;
}
}

@media(max-width: 1400px) {
.wrapper .left_sidebar .left_wrapper {
    padding: 60px 20px 0;
}
.wrapper .left_sidebar {
    width: 29%;
}
.wrapper .post_content {
    width: 50%;
}
}

@media(max-width: 1199px) {
html #wpadminbar {
    display: none;
}
.wrapper .left_sidebar .left_wrapper .footer_bottom_links ul li a img {
    width: 32px;
    height: 32px;
}
.wrapper .left_sidebar .left_wrapper .footer_bottom_links ul li:not(:last-child) {
    margin-right: 5px;
}
.wrapper .left_sidebar .left_wrapper .logo img {
    max-width: 200px;
}
.wrapper .left_sidebar .left_wrapper .menu-blog-menu-container ul li a {
    font-size: 20px;
}
}

@media(max-width: 991px) {
.wrapper .left_sidebar:before {
    display: none;
}
.header_top {
    display: flex;
}
.wrapper .left_sidebar {
    height: auto;
    width: 100%;
    background: #fff;
    transform: translateX(0);
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    left: 0;
    display: block;
    z-index: 9;
}
.wrapper .post_content {
    width: 70%;
}
.wrapper {
    flex-wrap: wrap;
}
.wrapper .left_sidebar .left_wrapper .footer_bottom_links ul {
    margin: 0;
}
.wrapper .left_sidebar .left_wrapper .footer_bottom_links ul li a img {
    background: #656565;
    box-shadow: 0 0 10px #656565;
}
.wrapper .left_sidebar .left_wrapper .copy {
    display: none;
}
.wrapper .left_sidebar .left_wrapper {
    padding: 10px 15px;
    background: #fff;
    justify-content: space-between !important;
    -webkit-flex-direction: row;
    -moz-flex-direction: row;
    -ms-flex-direction: row;
    -o-flex-direction: row;
    flex-direction: row;
    box-shadow: 0 3px 15px #ccc;
    height: auto;
}
.wrapper .left_sidebar .left_wrapper .logo {
    padding: 0;
}
.wrapper .left_sidebar .left_wrapper .menu-blog-menu-container {
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    display: none;
}
.wrapper .left_sidebar .left_wrapper .wrap {
    display: flex;
    align-items: center;
}
.wrapper .left_sidebar .blog_footer {
    margin-right: 25px;
}
.wrapper .left_sidebar .left_wrapper .mobile_btn {
    display: block;
}
.logo_black {
    display: block;
}
.logo_white {
    display: none;
}
.wrapper .left_sidebar .left_wrapper .menu-blog-menu-container ul {
    background: var(--main_color);
    padding-left: 40px;
    padding-top: 10px;
}
.wrapper .left_sidebar .left_wrapper .menu-blog-menu-container ul li {
    text-align: left;
}
.wrapper .left_sidebar .left_wrapper .menu-blog-menu-container ul li a {
    font-size: 16px;
}
.wrapper .left_sidebar .phones {
    display: block;
}
.wrapper .left_sidebar .left_wrapper .blog_logo img {
    max-width: 200px;
}
}

@media(max-width: 767px) {
.wrapper .post_content {
    width: 100%;
}
.wrapper .left_sidebar .blog_footer {
    display: none;
}
}
</style>

<?php
if( have_posts() ):
    while( have_posts() ): the_post();
        $feature_image = (get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : get_template_directory_uri().'/images/home-banner.jpeg';
        $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'post-thumbnails'); ?>

        <div class="wrapper">
            <aside class="left_sidebar">
                <div class="header_top">
                    <div class="header_top_links">
                        <a href="#">Specials</a>
                        <span>|</span>
                        <a href="#">Photos</a>
                    </div>
                    <div class="header_top_phone">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/phone-solid.svg" alt="">
                        <a href="tel:8669766518">866-976-6518</a>
                    </div>
                </div>
                <div class="left_wrapper">
                    <div class="blog_logo">
                        <a href="/">
<!--                            <img src="--><?php //echo get_template_directory_uri(); ?><!--/images/logo-white.svg" alt="" class="logo_white">-->
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="" class="logo_black">
                        </a>
                    </div>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'blog-menu',
                        'items_wrap' => '<ul>%3$s</ul>',
                    )); ?>
                    <div class="wrap">
                        <div class="blog_footer">
                            <div class="footer_bottom_links">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/blog-images/twitter-solid-circle.svg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/blog-images/youtube.svg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/instagram-solid-circle.svg" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="copy">
                                <p>© <?php echo date("Y"); ?> | <?php echo get_bloginfo(); ?> All Rights Reserved</p>
                            </div>
                        </div>
                        <div class="mobile_btn">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="post_content">
                <div class="post_content_wrapper">
                    <h1><?php the_title(); ?></h1>
                    <div class="category_wrap">
                        <?php
                        $categories = get_the_category();
                        $i = 0;
                        foreach($categories as $category){
                            if(++$i === count($categories)) {
                                echo '<a href="/category/'.$category->slug.'/" class="category">'.$category->name.'</a>';
                            }else{
                                echo '<a href="/category/'.$category->slug.'/" class="category">'.$category->name.'</a> | ';
                            }

                        }
                        ?>
                    </div>
                    <?php if(get_field('blog_author', 497)!=''): ?>
                        <div class="author_date">
                            <?php if(get_field('blog_author', 497)!=''): ?>
                                <span>
                                    <?php if(get_field('blog_author_page_url', 497)!=''): ?>                            
                                            <a  rel="author" target="_blank" href="<?php echo get_field('blog_author_page_url', 497); ?>">
                                                <i class="fa fa-user" aria-hidden="true"></i><span class="author"><?php echo get_field('blog_author', 497); ?></span>
                                            </a>
                                        <?php else: ?>
                                            <i class="fa fa-user" aria-hidden="true"></i><span class="author"><?php echo get_field('blog_author', 497); ?></span>
                                    <?php endif; ?>                          
                                </span>
                            <?php endif; ?>
                            <span><i class="fa fa-calendar" aria-hidden="true"></i><span class="date"><?php the_time('m-d-Y'); ?></span></span>
                        </div>
                    <?php endif; ?>
                    <?php if($thumb[0]==''){?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home-banner.jpeg" alt="" title=""/>
                    <?php }else{ ?>
                        <img src="<?php echo $thumb[0]; ?>" alt="" title=""/>
                    <?php }?>
                    <span class="line"></span>
                    <p><?php the_content(); ?></p>
                    <div class="links">
                        <div>
                            <h3>SHARE THIS POST</h3>
                        </div>
                        <div class="links">
                            <ul class="social_links">
                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?=get_permalink()?>"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="https://twitter.com/home?status=<?=get_permalink()?>"><i class="fab fa-twitter"></i></a></li>                      
                                <!--<li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
                            </ul>         
                        </div>
                    </div>
                </div>
            </div>
            <aside class="right_sidebar">
                <?php include_once('one-screen-blog-sidebar.php'); ?>
            </aside>
        </div>
        <?php 
    endwhile;
endif; ?>

<?php get_footer(); ?>

<script>
    jQuery('.mobile_btn').click(function() {
        jQuery('.wrapper .left_sidebar .left_wrapper .menu-blog-menu-container').slideToggle();
        jQuery(this).toggleClass('open');
        if(jQuery(this).hasClass('open')) {
            jQuery(this).html('<i class="fa fa-times" aria-hidden="true"></i>');
        } else {
            jQuery(this).html('<i class="fa fa-bars" aria-hidden="true"></i>');
        }
    })
</script>