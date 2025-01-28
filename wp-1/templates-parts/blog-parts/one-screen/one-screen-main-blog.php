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
    background: url('/wp-content/themes/BizcorLuxury/images/footer-background.jpeg') center no-repeat;
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

/*posts*/
.wrapper .posts {
    width: 51%;
    padding: 30px 35px 0;
    border-top: 1px solid rgba(159,159,159,.4);
    position: relative;
}
.wrapper .posts h1{
    margin-top: 0;
    margin-bottom: 25px;
    color: #2A2A2A;
    font-size: 42px;
    text-transform: capitalize;
    text-align: center;
}
.wrapper .posts h1:after{
    content:"";
    display:block;
    width:90px;
    height: 1px;
    background: #5AACA6;
    margin:20px auto 0 auto;
}
.posts .post {
    display: flex;
    margin-bottom: 30px;
    padding-bottom: 30px;
    border-bottom: 1px solid rgba(159,159,159,.4);
}
.posts .mobile_title {
    display: none;
    text-transform: uppercase;
    font-size: 42px;
    text-align: center;
    color: #2A2A2A;
    padding: 30px 0 20px;
    margin: 0;
    background: #fff;
}
.posts .mobile_title .line {
    display: block;
    height: 3px;
    width: 20%;
    background: #5AACA6;
    margin: 5px auto 0;
}
.posts .post a {
    text-decoration: none;
}
.posts .post .post_img {
    display: block;
    width: 40%;
    height: 270px;
    max-height: 243px;
    overflow: hidden;
    background: #000;
    position: relative;
}
.posts .post .post_img a:hover img{
    opacity: 0.5;
}
.posts .post .post_img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0.8;
}
.posts .post .post_img a{
    display: block;
    height: 100%;
}
.posts .post .post_img a:hover {
    color: var(--main_color);
}
.posts .post .info {
    width: 60%;
    padding-left: 30px;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.posts .post .info .author{
    margin-bottom: 15px!important;
    font-weight: 600;
}
.posts .post .info .author i{
    margin-right: 3px;
}
.posts .post .info a.author{
    color: #656565;
}
.posts .post .info a.author:hover{
    color: var(--main_color);
}
.posts .post .info > a {
    display: inline-block;
    margin-bottom: 30px;
}
.posts .post .info h4 {
    color: #656565;
    font-size: 26px;
    font-weight: 600;
    margin-top: 0;  
    transition: .3s;
    position: relative;
}
.posts .post .info h4:after{
    width: 100px;
    height: 1px;
    content: "";
    display: block;
    background: var(--main_color);
    position: absolute;
    bottom: -8px;
    left: 0;
}
.posts .post .info .categories {
    color: #5AACA6;
}
.posts .post .info h4:hover {
    color: var(--main_color);
}
.posts .post .info .category {
    color: #5AACA6;
    font-size: 13px;
    transition: .3s;
}
.posts .post .info .category:hover {
    color: #C7B200;
}
.posts .post .info p {
    font-size: 14px;
    line-height: 1.8;
    max-height: 80px;
    overflow: hidden;
    padding: 0;
    margin-bottom: 20px;
    color: #8F8F8F;
}
.posts .post .info .details {
    position: relative;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    font-size: 14px;
    font-weight: 600;
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    padding: 8px 50px 8px 40px;
    background-color: #656565;
    transition: .3s;
}
.posts .post .info .details:hover {
    background-color: var(--hover_color);
}
.posts.Safari .post .info .details {
    display: inline-block;
}
.posts .post .info .details .fa-bars {
    font-size: 16px;
    position: absolute;
    top: 50%;
    right: 17%;
    transform: translate(0, -50%);
}
.posts .post .info .links {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.posts .post .info .social_links {
    list-style-type: none;
    display: flex;
    margin: 0;
    padding: 0;
}
.posts .post .info .social_links li {
    margin-right: 10px;
    font-size: 16px;
}
.posts .post .info .social_links li:last-child {
    margin-right: 0;
}
.posts .post .info .social_links li a {
    display: inline-block;
    color: var(--title_color);
}
.posts .post .info .social_links li a:hover i {
    color: var(--main_color);
}
/*end posts*/

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
.posts .post .info .details {
    padding: 10px 35px 10px 25px;
}
.posts .post .info .details .fa-bars {
    right: 7%;
}
.posts .post .info .social_links li {
    margin-right: 5px;
}
.wrapper .left_sidebar .left_wrapper {
    padding: 60px 20px 0;
}
.wrapper .left_sidebar {
    width: 29%;
}
.wrapper .posts {
    width: 50%;
}
}

@media(max-width: 1199px) and (min-width: 991px) {
.posts .post .post_img {
    width: 40%;
}
.posts .post .info {
    width: 60%;
}
}

@media(max-width: 1199px) {
html #wpadminbar {
    display: none;
}
.posts .post {
    padding: 0 10px 10px 10px;
    -webkit-flex-wrap: wrap;
    -moz-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    -o-flex-wrap: wrap;
    flex-wrap: wrap;
}
.wrapper .posts {
    padding-top: 10px;
}
.posts .post .post_img {
    width: 100%;
    max-height: 250px;
    margin-bottom: 25px;
}
.posts .post .info {
    padding: 0;
    width: 100%;
}
.posts .post .info p {
    margin-top: 10px;
}
.wrapper .left_sidebar .left_wrapper .footer_bottom_links ul li a img {
    width: 32px;
    height: 32px;
}
.wrapper .left_sidebar .left_wrapper .footer_bottom_links ul li:not(:last-child) {
    margin-right: 5px;
}
.posts .post .info > a {
    margin-bottom: 0;
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
.wrapper .posts {
    order: 0;
    -webkit-transition: 0s;
    -o-transition: 0s;
    transition: 0s;
    width: 70%;
    padding: 30px 15px;
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
.wrapper .left_sidebar .left_wrapper .menu-blog-menu-container ul li a:hover {
    color: #fff !important;
}
.wrapper .left_sidebar .left_wrapper .menu-blog-menu-container ul li:hover::before {
    border-color: #fff;
}
.wrapper .left_sidebar .phones {
    display: block;
}
.wrapper .left_sidebar .left_wrapper .blog_logo img {
    max-width: 200px;
}
}

@media(max-width: 767px) {
.wrapper .posts {
    width: 100%;
}
.wrapper .left_sidebar .blog_footer {
    display: none;
}
}
</style>

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
<!--                        <img src="--><?php //echo get_template_directory_uri(); ?><!--/images/logo-white.svg" alt="" class="logo_white">-->
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
                                    <a href="https://www.youtube.com/">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog-images/youtube.svg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/Twitter.svg" alt="">
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
        <div class="posts">
            <?php
            if ( have_posts() ) :
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                query_posts('post_type=post&paged='.$paged.'&category_name='.$category_name.'&s='.$search_keyword);
                while ( have_posts() ) : the_post();
                    $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'post-thumbnails');
                    $img_url = (get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : get_template_directory_uri().'/wp-content/uploads/2018/12/marina-blog-photo.jpg';
                    ?>

                    <div class="post">
                        <div class="post_img">                            
                            <a href="<?=get_permalink()?>" >
                                <?php if($thumb[0]==''){?>
                                    <img src="/wp-content/themes/BizcorLuxury/images/home-banner.jpeg" alt="" title=""/>
                                <?php }else{ ?>
                                    <img src="<?php echo $thumb[0]; ?>" alt="" title=""/>
                                <?php }?>
                                <div class="post-date"><span class="date"><?php the_time('m/d/Y'); ?></span></div>
                            </a> 
                            <div class="categories">
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
                        </div>                               
                        <div class="info">
                            <a href="<?=get_permalink()?>">
                                <h4><?php the_title(); ?></h4>
                            </a>
                            <?php if(get_field('blog_author', 497)!=''): ?>
                                <?php if(get_field('blog_author_page_url', 497)!=''): ?>                            
                                        <a rel="author" class="author" target="_blank" href="<?php echo get_field('blog_author_page_url', 497); ?>">
                                            <i class="fa fa-user" aria-hidden="true"></i><span class="author"><?php echo get_field('blog_author', 497); ?></span>
                                        </a>
                                    <?php else: ?>
                                        <span class="author">
                                            <i class="fa fa-user" aria-hidden="true"></i><span class="author"><?php echo get_field('blog_author', 497); ?></span>
                                        </span>                                    
                                <?php endif; ?>
                            <?php endif; ?>                           
                            <p><?=wp_trim_words( get_the_content() , '35', ' ...' ); ?></p>
                            <div class="links">
                                <ul class="social_links">
                                    <li>Share:</li>
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?=get_permalink()?>"><i class="fab fa-facebook-square"></i></a></li>
                                    <li><a href="https://twitter.com/home?status=<?=get_permalink()?>"><i class="fab fa-twitter"></i></a></li>                       
                                    <!--<li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>-->
                                </ul>
                                <a href="<?=get_permalink()?>" class="details">read more<i class="fa fa-bars" aria-hidden="true"></i></a>                                
                            </div>
                        </div>
                    </div>


                    <?php
                endwhile;

                echo '<div class="clearfix"></div>';

                the_posts_pagination( array(
                    'screen_reader_text' => ' ',
                    'prev_text'          => '<span>< Prev</span>',
                    'next_text'          => '<span>Next ></span>',
                ) );
            endif;
            ?>
        </div>
        <aside class="right_sidebar">
            <?php include_once('one-screen-blog-sidebar.php'); ?>
        </aside>

    </div>


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