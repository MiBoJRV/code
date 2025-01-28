<?php

//$default_banner_img_url = get_stylesheet_directory_uri() . '/wp-content/themes/BizcorLuxury/images/ffr/post.png';
$default_banner_img_url = get_stylesheet_directory_uri() . '/images/post_default.png';


$default_unit_img_url = $default_banner_img_url;
if (is_category()) {
    $category = get_queried_object();
    $blog_sub_title = 'Category - ' . single_term_title('', 0);
    $category_slug = $category->slug;
} elseif (is_search()) {
    $blog_sub_title = 'You searched - ' . get_search_query();
    $search_keyword = get_search_query();
} else {
    $blog_sub_title = "company name Blog";
}
?>
<style>

    .blog {
        /*background: radial-gradient(70.71% 70.71% at 50% 50%, #3202AA 0%, #1E0475 100%);*/

        background-image: url("<?php echo get_stylesheet_directory_uri() ?>/images/backstage-6.png");
        margin: 0;
        padding: 0;
        position: relative;
    }

    section.blog {
        padding: 0;
    }

    .line-center {
        margin-left: 9px;
        margin-right: 9px;
    }

    .calendarItem {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .calendar {
        width: 15px !important;
        height: 16px !important;
        margin-right: 8px;
        object-fit: contain !important;
    }

    .box-white {
        /*background: #fff;*/
        /*margin-top: 31px;*/
        /*margin-bottom: 30px;*/
        /*border: 1px solid #D6D6D6;*/
        /*padding: 155px 60px;*/
        position: relative;
    }

    .box-white .content {
        padding: 155px 15px;
        background-repeat: no-repeat;
        width: 100%;
        height: auto;
        background-size: cover;
        background-position: center;
        background-image: url('<?php echo get_stylesheet_directory_uri() ?>/images/blog_categry.png');
    }

    @media only screen and (max-width: 991px) {
        .box-white .content {
            background-image: url('<?php echo get_stylesheet_directory_uri() ?>/images/blog_categry_m.png');
        }
    }

    .box-white h2 {
        padding: 27px 0;
        font-size: 22px;
        color: #4A2F62;
        letter-spacing: .1em;
        text-transform: uppercase;
        font-weight: 700;
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
        text-shadow: 0 0 10px rgba(0, 0, 0, .6);
        text-transform: capitalize;
        font-weight: 400;
    }

    .sidebar-featured-block .sidebar-featured-txt span {
        width: 225px;
        height: 55px;
        display: inline-block;
        padding: 14px 18px;
        border: 2px solid #fff;
        font: 500 17px/23px Montserrat;
        letter-spacing: 0.85px;
        color: #FFFFFF;
        text-transform: uppercase;
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

    /*general settings*/
    .leftFloat {
        float: left;
    }

    .rightFloat {
        float: right;
    }

    a, button, input[type="submit"], .itemHover img {
        transition: all 0.4s;
    }

    .customClear:before, .customClear:after {
        content: "";
        display: block;
        height: 0;
        overflow: hidden;
        clear: both;
    }

    input::-moz-placeholder, textarea::-moz-placeholder {
        opacity: 1 !important;
    }

    select {
        -webkit-appearance: none;
        -moz-appearance: none;
        position: relative;
        z-index: 2;
    }

    .form-group {
        position: relative;
    }

    .form-group .caret {
        position: absolute;
    }

    /*general settings*/
    #content-wrapper .blog {
        padding-bottom: 30px;
    }

    .headerItem {
        height: 375px;
        overflow: hidden;
        position: relative;
        padding: 0;
        background: #141414;
    }

    .headerItem img {
        width: 100%;
        display: block;
        opacity: 1;
        height: 100%;
        object-fit: cover;
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

    /*section.blog {*/
    /*    padding-bottom: 70px;*/
    /*}*/

    .blogItem {
        max-width: 1795px;
        padding: 45px 15px 0;
        margin: 0 auto;
    }

    @media only screen and (max-width: 991px) {
        .blogItem {
            padding: 15px 0 0;
        }
    }

    /*blogMainContent*/
    .blogMainContent {
        display: flex;
        flex-wrap: wrap;
        padding: 50px 30px;
        background: #FCF9EB;
        /*box-shadow: 0px 2px 18px 0px rgba(0, 0, 0, 0.30);*/
        border: 3px solid #231F20;
    }

    .blogMainContent .resent.post {
        max-width: 1274px;
        width: 100%;
        margin: 0 auto;
    }

    }

    .categories {
        height: 70px;
        padding-bottom: 15px;
        margin-bottom: 15px;
        /*border-bottom: 2px solid*/
    <?php //=$main_color?> /*;*/
        position: relative;
        width: 100%;
        display: none;
    }

    .sidebarBlog .singlePost {
        margin-top: 0;
        padding-bottom: 10px;
    }

    .categories ul li a,
    .categories ul li i {
        /*color: */
    <?php //=$main_color?> /*;*/
        transition: .3s;
    }

    .categories ul li:hover a,
    .categories ul li:hover i {
        color: #43c3ff;
    }

    .categories img {
        margin-right: 10px;
        display: inline-block;
        width: 18px;
        position: relative;
        top: -1px;
    }

    .categories ul {
        margin: 0;
        position: absolute;
        left: 0;
        width: 100%;
        bottom: 15px;
    }

    .categories ul li {
        font-size: 20px;
        font-weight: 500;
        padding: 0;
        display: inline-block;
        /*font: 500 20px 'Work Sans', sans-serif;*/
        /*color: */
    <?php //=$second_color?> /*;*/
        text-transform: uppercase;
        line-height: 16px;
        margin-top: 10px;
    }

    .categories ul li:not(:last-child) {
        /*border-right: 2px solid*/
    <?php //=$main_color?> /*;*/
    }

    .blogMainContent .singlePost {
        /*padding: 25px;*/
        background: #FCF9EB;
        /*box-shadow: 0 3px 30px #0000001F;*/
        /*margin-bottom: 20px;*/
        /*width: 50%;*/
        /*box-shadow: 0 0 0 1px rgba(217, 217, 217, 1);*/
        /*max-width: 595px;*/
        display: flex;
        flex-wrap: wrap;
        gap: 50px 30px;
    }

    .blogMainContent .singlePost a {
        display: flex;
        flex-wrap: wrap;
        gap: 50px 30px;
    }

    .blogMainContent .singlePost .popularPost {
        display: flex;
        flex-direction: column;
        /*gap: 20px;*/
        width: calc(50% - 15px);
        /*min-height: 419px;*/
        background: #FCF9EB;
        cursor: pointer;
    }

    .blogMainContent .singlePost .popularPost:hover {
        box-shadow: 15px 10px 1px 0px #045E2F;

    }

    .blogMainContent .singlePost .popularPost .post_date {
        color: #231F20;
        font-family: 'Roboto', sans-serif;
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        letter-spacing: 3.2px;
        text-transform: uppercase;
        margin-bottom: 30px;
    }

    @media only screen and (max-width: 991px) {
        .blogMainContent .singlePost .popularPost .post_date {
            margin-bottom: 13px;
        }
    }

    .blogMainContent .popularPost .imageIn {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        /*max-height: 255px;*/
    }

    .blogMainContent .popularPost .imageIn img {
        max-height: 255px;
        max-width: 622px;
        width: 100%;
        /*object-fit: cover;*/
        object-fit: contain;
    }

    @media only screen and (max-width: 991px) {
        .blogMainContent .popularPost .imageIn img {
            max-height: 170px;
        }
    }

    .postContainer {
        position: relative;
        display: flex;
        align-items: center;
        flex-direction: column;
    }

    .singlePostImg {
        position: relative;
        overflow: hidden;
        /*width: 42%;*/
        height: 270px;
        background: #000;
    }

    .singlePostImg img {
        display: block;
        max-width: none;
        margin-top: 0;
        transition: opacity 0.4s;
        width: 100%;
        object-fit: cover;
        height: 100%;
    }

    .singlePostImg > a img:hover {
        opacity: 0.7;
    }

    .singlePostCalendar {
        width: calc(100% + 1px);
        position: absolute;
        top: 0;
    }

    .calendarItem {
        line-height: 35px;
        float: left;
        width: 125px;
        height: 35px;
        background: rgba(109, 147, 171, .9);
    }

    .calendarItem i {
        color: #fff;
        font-size: 14px;
        margin: 0 5px 0 10px;
    }

    .calendarItem span {
        /*font-size: 16px;*/
        color: #fff;
        font-weight: 400;
    }

    .calendarCategories {
        float: left;
        width: calc(100% - 125px);
        height: 35px;
        line-height: 35px;
        text-align: center;
        background: rgba(8, 57, 95, 0.75);
    }

    .calendarCategories span {
        /*font-size: 16px;*/
        font-weight: 600;
        color: #fff;
        text-transform: uppercase;
    }

    /*Single Post*/
    .singlePostCont {
        /*width: 58%;*/
        /*padding-left: 30px;*/
    }

    /*.singlePostCont h3{
        overflow: hidden;
        margin: 0;
        line-height: 1;
    }*/
    .singlePostCont h3 a {
        display: inline-block;
        color: #292929;
    }

    .singlePostCont h3 a:hover {
        text-decoration: none;
    }

    .singlePostCont h3 span {
        font: 400 24px/28px var(--title_font);
        letter-spacing: 0;
        color: var(--title_color);
        text-transform: capitalize;
        transition: .3s;
        display: inline-block;
        margin-top: 20px;
    }

    .singlePostCont h3 span:hover {
        color: var(--main_color);
    }

    .singlePostCont span.post_date {
        font: 400 16px/28px Montserrat;
        letter-spacing: 0;
        color: #292929BF;
        display: none;
    }

    .singlePostCont span + hr {
        border-color: #C8C8C8;
        margin: 13px 0 30px;
    }

    .singlePostCont article {
        max-height: 108px;
        overflow: hidden;
        font-size: 16px;
        line-height: 26px;
        min-height: 75px;
        font-weight: 400;
        margin-bottom: 30px;
        color: #031623BF;
    }

    .singlePostCont article p {
        margin: 0;
        font: 400 16px/28px var(--paragraph_font);
        letter-spacing: 0;
        color: var(--paragraph_color);
    }

    .singlePostCont article p.singlePostCont article p {
        font: 400 18px/22px 'Open Sans', san-serif;
    }

    .post_bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .post_bottom .social a {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        width: 24px;
        height: 24px;
        margin-right: 4px;
        border-radius: 50%;
        border: 1px solid #1A181C;
        overflow: hidden;
        color: #1A181C;
        font-size: 12px;
        transition: .4s;
    }

    .post_bottom .social a:hover {
        background: var(--main_color);
        border-color: var(--main_color);
        color: #fff;
    }

    .post_bottom .social a:last-child {
        margin: 0;
    }

    .moreArticle {
        display: inline-block;
        text-align: center;
        font: 500 16px/16px var(--paragraph_font);
        color: #fff;
        text-transform: uppercase;
        padding: 17px 31px;
        background: var(--second_color);
    }

    .moreArticle:hover {
        color: #fff;
        border-color: var(--main_color);
        background: var(--hover_color);
    }

    .singlePostCont .social p {
        font: 500 16px/22px var(--paragraph_font);
        display: inline-block;
        padding-right: 10px;
        color: var(--title_color);
    }

    .singlePostCont .social i {
        color: rgba(37, 37, 37, .55);
        margin-right: 10px;
        font-family: "Font Awesome 5 Brands";
        width: 14px;
        height: 18px;
    }

    i.fas.fa-bars {
        display: none;
    }

    .socialAuthor {
        margin: 10px 0;
    }

    .socialAuthor img {
        position: relative;
        top: -1px;
    }

    .socialAuthor span:nth-child(2) {
        padding: 0 10px;
        /*border-right: 2px solid*/
    <?php //=$main_color?> /*;*/
    }

    .socialAuthor span + span {
        padding: 0 10px 0 8px;
    }

    .socialAuthor a:not(:first-child) {
        margin-right: 5px;
    }

    .socialAuthor i {
        color: rgba(26, 26, 26, .7);
        font-size: 15px;
        transition: all 0.4s;
        opacity: .75;
    }

    .socialAuthor i:hover {
        color: #43c3ff;
    }

    .views {
        bottom: 0;
        right: 0;
        background: #fff;
    }

    .views span {
        margin: 0 5px 0 5px;
        position: relative;
        top: -4px;
        /*color: rgba(4, 12, 20, 0.7);*/
        /*font-size: 16px;*/
        /*font-family: 'Poppins';*/
        /*letter-spacing: 0;*/
        font: 400 18px/28px var(--paragraph_font);
        color: var(--paragraph_color);
        text-transform: capitalize;
    }

    .viewsViews.leftFloat {
        margin-bottom: 15px;
    }

    .viewsItem {
        margin-top: 11px;
        opacity: .5;
    }

    .viewsItem i {
        color: #1A1A1A;
        font-size: 27px;
        transition: all 0.4s;
        /*padding-right: 8px;*/
    }

    /*singlePostCont*/
    /*.popularPost {*/
    /*    padding: 10px 10px 0;*/
    /*}*/

    /*.popularPost:not(:last-child) {*/
    /*    margin-bottom: 0px;*/
    /*    padding-bottom: 10px;*/
    /*    border-bottom: 1px solid #D6D6D6;*/
    /*}*/


    @media only screen and (max-width: 991px) {
        .popularPost h4 {
            margin-top: 15px;
        }
    }

    .popularPost h4 {
        margin: 20px 0 98px;
    }

    @media only screen and (max-width: 991px) {
        .popularPost h4 {
            margin: 15px 0 56px;
        }
    }

    .popularPost h4 a {
        margin: 0;
        max-height: 90px;
        overflow: hidden;
        height: 100%;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;

        color: #231F20;
        font-family: 'Roboto', sans-serif;
        font-size: 20px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        letter-spacing: 2px;
        max-width: 431px;
    }

    .popularPost p {
        margin: 0;
        max-height: 90px;
        overflow: hidden;
        height: 100%;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        color: #666;
        font-size: 13px;
        font-style: normal;
        font-weight: 400;
        line-height: 25.2px; /* 193.846% */
    }

    /*singlePost*/
    .searchPost {
        margin: 30px 0;
    }

    .searchPost input:first-child {
        height: 60px;
        border: 1px solid var(--second_color);
        border-right: none;
        padding-left: 29px;
        width: calc(100% - 75px);
        font: 400 18px/28px var(--paragraph_font);
        color: var(--paragraph_color);
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

    .searchPost input:last-child {
        height: 60px;
        /*background: var(--second_color) url('/wp-content/themes/BizcorLuxury/images/search_white.svg') no-repeat;*/
        background-size: auto 50%;
        background-position: center center;
        border: none;
        width: 75px;
    }

    .searchPost input:last-child:hover {
        background-color: var(--main_color);
    }

    .popularPost span {
        /*color: */
    <?php //=$main_color?> /*;*/
        font-size: 14px;
    }

    .sideBarReadMore {
        /*color: */
    <?php //=$main_color?> /*;*/
    }

    .sideBarReadMore:hover {
        color: #43c3ff;
    }

    /*pagination*/
    nav.pagination {
        margin-top: 30px;
        width: 100%;
        border-radius: 0;
        text-align: right;
        margin: 0 0 auto 0;
    }

    nav.pagination .nav-links {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        gap: 50px;
    }

    @media only screen and (max-width: 991px) {
        nav.pagination .nav-links {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 50px;
            /*margin-bottom: 50px;*/
        }
    }

    nav.pagination span, nav.pagination a.page-numbers {
        cursor: pointer;


        /*display: inline-block;*/
        /*width: 35px;*/
        /*height: 35px;*/
        /*text-align: center;*/

        /*color: #000;*/
        /*font-size: 13px;*/
        /*font-style: normal;*/
        /*font-weight: 400;*/
        /*line-height: 34.8px; !* 267.692% *!*/

        text-align: center;
        font-family: 'Montserrat', sans-serif;
        font-size: 56px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        text-transform: uppercase;
        background: #FF7A00;
        border-radius: 50%;
        width: 64px;
        height: 64px;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        padding: 0;
    }

    nav.pagination span, nav.pagination a.page-numbers {
        display: none;
    }

    nav.pagination span, nav.pagination a.page-numbers.next {
        display: inline-flex;
    }

    nav.pagination span, nav.pagination a.page-numbers.prev {
        display: inline-flex;
    }


    nav.pagination .next.page-numbers, nav.pagination .next.page-numbers span,
    nav.pagination .prev.page-numbers, nav.pagination .prev.page-numbers span {
        border: none;
        width: auto;
        /*color: */
    <?php //=$main_color?> /* !important;*/
        /*color: */
    <?php //=$main_color?> /* !important;*/
        background: none !important;
        /*display: none;*/
    }

    /*nav.pagination .next.page-numbers {*/
    /*    margin-left: 10px;*/
    /*}*/

    /*nav.pagination .prev.page-numbers {*/
    /*    margin-right: 10px;*/
    /*}*/

    nav.pagination .prev.page-numbers:hover span, nav.pagination .next.page-numbers:hover span {
        /*color: */
    <?php //=$main_color?> /* !important;*/
    }

    nav.pagination .page-numbers.current, nav.pagination .page-numbers:hover {
        /*background: */
    <?php //=$main_color?> /*;*/
        color: #ffffFF;
        font-weight: 600;
    }

    /*Sidebar Blog*/
    .sidebarBlog {
        /*padding: 0 15px 40px;*/
        padding: 0 0px 40px 15px;
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

    .sidebarBlog .cat-list {
        margin: 0;
        padding: 25px;
        list-style: none;
    }

    .sidebarBlog .cat-list li {
        font-size: 16px;
        font-weight: 500;
        line-height: 18px;
        margin-bottom: 10px;
        display: block;
        text-transform: uppercase;
    }

    .sidebarBlog .cat-list li:last-child {
        margin-bottom: 0;
    }

    .sidebarBlog .cat-list li a {
        font: 400 16px/36px var(--paragraph_font);
        letter-spacing: 0;
        color: var(--paragraph_color);
        text-transform: uppercase;
    }

    .sidebarBlog .cat-list li a:hover {
        color: var(--main_color);
        text-decoration: none;
    }

    .sidebarBlog form {
        overflow: hidden;
    }

    .sidebarBlog form + h2 {
        margin-top: 0;
    }

    .sidebarBlog .imageIn {
        margin-right: 15px;
        width: 130px;
        height: 100px;
        overflow: hidden;
    }

    .sidebarBlog .imageIn img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .sidebarBlog .singlePost h4 {
        margin-top: 23px;
        margin-bottom: 3px;
        max-height: 70px;
        overflow: hidden;
        text-transform: capitalize;
        font-weight: 700;
        font: ;
        overflow: hidden;
        /*white-space: nowrap;
        text-overflow: ellipsis;*/
        position: relative;
    }

    .sidebarBlog .singlePost h4:before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        height: 100%;
        width: 161px;
        background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1));
    }

    .sidebarBlog .singlePost h4 a {
        color: var(--title_color);
        text-transform: capitalize;
        font: 500 20px/22px var(--paragraph_font);
        overflow: hidden;
        /*white-space: nowrap;
        text-overflow: ellipsis;*/
    }

    .sidebarBlog .singlePost h4 a:hover {
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

    .sidebarBlog .start-your-vacation-box {
        position: relative;
        background: #000;
        height: 525px;
        width: 100%;
        overflow: hidden;
        margin-bottom: 35px;
    }

    .sidebarBlog .start-your-vacation-box:before {
        display: block;
        content: '';
        width: calc(100% - 30px);
        height: calc(100% - 30px);
        left: 10px;
        top: 15px;
        margin: 0 6px;
        position: absolute;
        z-index: 2;
        border: 1px solid #fff;
    }

    .sidebarBlog .start-your-vacation-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: 0.3s;
        opacity: 0.9;
    }

    .sidebarBlog .start-your-vacation-box:hover img {
        transform: scale(1.1);
    }

    .sidebarBlog .start-your-vacation-box h3 {
        text-align: center;
        text-transform: capitalize;
        color: #fff;
        font-size: 32px;
        position: relative;
        text-shadow: 0px 0px 10px #00000099;
        margin-bottom: 15px;
        line-height: 36px;
        font-size: 32px;
        font-family: 'Playfair Display SC';
    }

    .sidebarBlog .start-your-vacation-box a {
        width: 225px;
        height: 65px;
        background: var(--second_color);
        color: #fff;
        text-transform: uppercase;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: 0.3s;
        position: relative;
        font-size: 16px;
        font-weight: 500;
        font-family: 'Poppins';
        margin: 0 auto;
        border: 2px solid #fff;
    }

    .sidebarBlog .start-your-vacation-box a:hover {
        background: var(--main_color);
    }

    .sidebarBlog .start-your-vacation-box .box-link {
        position: absolute;
        width: 100%;
        left: 50%;
        top: 50%;
        z-index: 3;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    /***Responsivness**Responsivness**Responsivness***/
    /*@media(min-width:992px){
        .singlePostCont h3{
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    }*/
    /*@media (max-width: 1650px) {*/
    /*    .blogMainContent .singlePost {*/
    /*        width: 50%;*/
    /*    }*/
    /*}*/

    @media (max-width: 1400px) {
        .views {
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        .sidebarBlog {
            width: 350px;
        }

        /*.blogMainContent {*/
        /*    width: calc(100% - 350px);*/
        /*}*/
        /*.popularPost h4 {*/
        /*    margin-top: 0;*/
        /*}*/
    }

    @media (max-width: 1455px) {
        .views span {
            top: -3px;
            margin: 0 3px 0 3px;
        }

        .viewsItem i {
            font-size: 22px;
            margin: 0;
        }

        .viewsItem {
            margin-top: 11px;
        }

        /*.blogMainContent .singlePost {*/
        /*    padding: 10px;*/
        /*}*/
        .viewsItem {
            /*margin-top: 18px;*/
        }
    }

    /*@media (max-width: 1250px) {*/
    /*    .blogMainContent .singlePost {*/
    /*        padding: 7px;*/
    /*    }*/
    /*}*/

    @media (max-width: 1199px) {
        /*.blogMainContent .singlePost {*/
        /*    width: 33.333%;*/
        /*}*/
        .viewsViews.leftFloat {
            margin-bottom: 0;
        }

        .headerItem {
            height: 200px;
        }

        /*.sidebarBlog, .blogMainContent {*/
        /*    float: none;*/
        /*    width: 100%;*/
        /*    padding-left: 0;*/
        /*}*/
        /*.popularPost h4 {*/
        /*    font-size: 22px;*/
        /*}*/
        .categories {
            height: auto;
        }

        .categories ul {
            position: static;
            padding-top: 20px;
        }

        /*.blogMainContent .singlePost {*/
        /*    padding: 20px;*/
        /*}*/
        .sidebarBlog .singlePost {
            padding: 15px;
        }

        section.blog {
            padding-bottom: 0;
        }
    }

    @media (max-width: 991px) {
        /*.blogMainContent .singlePost {*/
        /*    width: 50%;*/
        /*}*/
        .blogItem {
            /*padding-left: 15px;*/
            /*padding-right: 15px;*/
            /*padding-bottom: 0;*/

        }


        .box-white.box-categories {
            margin-bottom: 0;
        }

        .sidebarBlog {
            padding-bottom: 15px;
        }

        .blogMainContent {
            margin-top: 0;
            border: none;
            padding: 10px 10px 50px;
        }

        .postContainer {
            flex-wrap: wrap;
        }

        .singlePostImg {
            width: 100%;
            max-height: 400px;
            float: none;
            overflow: hidden;
            background: black;
            margin: 0 auto 10px;
        }

        .singlePostImg img {
            margin-top: 0;
        }

        .singlePostImg > img {
            width: 100%;
            opacity: 0.7;
        }

        .singlePostCont h3 {
            margin-top: 10px;
        }

        .socialAuthor {
            margin: 15px auto 15px auto;
            max-width: 320px;
            width: 100%;
        }

        .views {
            position: relative;
            width: 100%;
        }

        .singlePostImg img {
            width: 100%;
        }

        .singlePostCont {
            position: relative;
            width: 100%;
            padding: 0;
        }
    }

    @media (max-width: 768px) {
        .blogMainContent .singlePost {
            flex-direction: column;
        }

        .blogMainContent .singlePost .popularPost {
            width: 100%;
        }

        .blogMainContent .popularPost .imageIn {
            text-align: center;
        }

        .blogMainContent .popularPost .imageIn img {
            /*max-width: 100%;*/
            /*height: 197px;*/
            width: 100%;
            /*max-width: 350px;*/
            min-height: inherit;
            /*max-height: 200px;*/
            /*object-fit: cover;*/
        }


        .blogMainContent {
            padding: 50px 10px 50px;
            border: none;
        }

        .categories {
            margin-top: 20px;
        }

        .popularPost h4 {
            line-height: 28px;
        }

        .categories ul li {
            font-size: 16px;
        }

        .categories img {
            margin-bottom: 0;
            position: relative;
            top: 1px;
        }

        .categories ul {
            padding-top: 0;
        }

        .blog {
            padding-top: 0;
        }

        .banner h1 {
            font-size: 46px;
        }
    }

    @media (max-width: 767px) {
        .singlePostCont article {
            min-height: auto;
        }

        .singlePostCont h3 {
            max-height: none;
        }

        /*.blogMainContent .singlePost {*/
        /*    padding: 0;*/
        /*}*/
        .singlePostCont {
            padding: 0 20px 20px 20px;
        }
    }

    @media (max-width: 600px) {
        /*.blogMainContent .singlePost {*/
        /*    box-shadow: none;*/
        /*}*/
        .categories, .singlePost {
            margin-top: 0;
        }

        .categories ul {
            padding: 0;
        }

        .categories img {
            margin-bottom: 0;
            position: relative;
            top: -1px;
        }

        .categories ul li {
            border-right: none !important;
            display: block;
        }

        .categories ul li:not(:last-child) {
            margin-bottom: 10px;
        }

        .viewsComments, .viewsViews {
            width: 100%;
        }

        .sidebarBlog .singlePost h4 a {
            font-size: 16px;
        }

        .sidebarBlog .singlePost h4 {
            line-height: 20px;
            margin-bottom: 2px;
        }

        .banner h1 {
            font-size: 30px;
        }

        .singlePost {
            float: none !important;
            width: 100% !important
        }

        .moreArticle {
            font-size: 13px;
        }
    }

    @media (max-width: 450px) {
        .views span {
            margin-right: 0;
        }

        /*.singlePost {*/
        /*    padding: 13px;*/
        /*}*/
        .socialAuthor > span {
            padding: 0 10px 0 5px;
        }

        .calendarItem, .calendarCategories {
            width: 50%;
        }

        .sidebarBlog .imageIn {
            margin-right: 15px;
            height: 92px;
            width: 100px;
        }
    }
</style>
<section class="blog">

    <?php global $blogMain;
    $blogMain++;
    ?>

    <?php
    $bgImage = get_sub_field('section_background');
    ?>

    <section
            class="p_blog_main "
            style="background-image:url('<?php echo get_stylesheet_directory_uri() ?>/images/backstage-6.png');">
        <div class="p_blog_main__content">
            <div class="text-content">
                <div class="text-content-left _anim-items _anim-no-hide">
                    <h1 class="title">Pablo. Partner’s Blog</h1>
                </div>
                <div class="text-content-right _anim-items _anim-no-hide">
                    <a class="" href="#">
                        Join!
                    </a>
                </div>
            </div>
            <div class="image-content _anim-items _anim-no-hide">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/blog_main.png" alt="#">
            </div>
        </div>
        <div class="divider"
             style="background-image:url('<?php echo get_stylesheet_directory_uri() ?>/images/divider.png');">
        </div>
        <?php if ($blogMain < 2): ?>
            <style>
                .p_blog_main {
                    padding: 258px 0 180px;
                    position: relative;
                    overflow: hidden;
                }

                @media only screen and (max-width: 991px) {
                    .p_blog_main {
                        padding: 160px 0 0;
                    }
                }

                .p_blog_main .p_blog_main__content {
                    max-width: 1278px;
                    /*padding: 0 20px;*/
                    margin: 0 auto;
                    position: relative;
                }

                @media only screen and (max-width: 991px) {
                    .p_blog_main .p_blog_main__content {
                        display: flex;
                        flex-direction: column;
                    }
                }

                .p_blog_main .text-content {
                    display: flex;
                    position: relative;
                    z-index: 10;

                    flex-direction: column;
                    justify-content: flex-start;
                    align-items: flex-start;
                    padding: 0 20px;
                }

                @media only screen and (max-width: 991px) {
                    .p_blog_main .text-content {
                        position: static;
                        margin-bottom: 10px;
                    }
                }

                .p_blog_main .text-content-right {
                    /*margin-bottom: -110px;*/
                    /*margin-right: 134px;*/

                    transform: translateY(250%);
                    opacity: 0;
                    transition: all 0.3s ease 0s;
                }

                .p_blog_main .text-content-right._active {
                    transform: translateY(0);
                    opacity: 1;
                }

                @media only screen and (max-width: 991px) {
                    .p_blog_main .text-content-right._active {
                        position: absolute;
                        bottom: 76px;
                        left: 50%;
                        transform: translate(-50%, 0);
                    }
                }

                .p_blog_main .text-content-right a {
                    display: flex;
                    width: 159px;
                    height: 63px;
                    padding: 20px 50px;
                    justify-content: center;
                    align-items: center;
                    gap: 10px;
                    flex-shrink: 0;
                    color: #FFFCE9;
                    text-align: center;
                    text-shadow: 0px 4px 14px rgba(251, 254, 255, 0.45);
                    font-family: 'Roboto', sans-serif;
                    font-size: 20px;
                    font-style: normal;
                    font-weight: 900;
                    line-height: normal;
                    letter-spacing: 2px;
                    text-transform: uppercase;
                    border-radius: 30px;
                    background: #FF7A00;
                    box-shadow: 8px 4px 1px 0px #000;
                }

                .p_blog_main .text-content-right a:hover {
                    background-color: #FF983A;
                }

                .p_blog_main .text-content-right a:active {
                    background-color: #307847;
                }

                .p_blog_main .image-content {
                    position: absolute;
                    right: 0;
                    bottom: -201px;

                    transform: translate(150%, 0);
                    opacity: 0;
                    transition: all 0.8s ease 0s;
                }

                @media only screen and (max-width: 991px) {
                    .p_blog_main .image-content {
                        margin-bottom: -22px;
                    }
                }

                .p_blog_main .image-content._active {
                    transform: translate(0, -57px);
                    opacity: 1;
                    right: 0;
                }

                @media only screen and (max-width: 1400px) {
                    .p_blog_main .image-content._active {
                        right: 0;
                    }

                }

                @media only screen and (max-width: 1100px) {
                    .p_blog_main .image-content._active {
                        transform: translate(0, -57px);
                        opacity: 1;
                    }
                }

                @media only screen and (max-width: 991px) {
                    .p_blog_main .image-content._active {
                        position: static;
                        margin-top: 50px;
                        text-align: center;
                        padding-left: 20px;
                    }
                }

                @media only screen and (max-width: 480px) {
                    .p_blog_main .image-content._active {
                        padding: 0;
                        overflow: hidden;
                        margin-left: 20px;
                    }
                }

                .p_blog_main .image-content img {
                    max-width: 767px;
                    width: 100%;
                    /*max-height: 631px;*/
                    min-height: 255px;
                }

                @media only screen and (max-width: 480px) {
                    .p_blog_main .image-content img {
                        transform: translate(0, 0);
                        max-width: 100%;
                        max-height: 240px;
                        min-height: 240px;
                    }
                }

                @media only screen and (max-width: 389px) {
                    .p_blog_main .image-content._active img {
                        width: 495px;
                        transform: translate(-60px, 0);
                    }
                }


                .p_blog_main .text-content-left {
                    max-width: 900px;
                    width: 100%;
                    transform: translate(0, -150%);
                    opacity: 0;
                    transition: all 0.8s ease 0s;
                }

                .p_blog_main .text-content-left > h2:last-of-type {
                    margin-bottom: 0;
                }

                .p_blog_main .text-content-left._active {
                    transform: translate(0, 0);
                    opacity: 1;
                }

                @media only screen and (max-width: 991px) {
                    .p_blog_main .text-content-left._active {
                        display: flex;
                        flex-direction: column;
                        gap: 15px;
                    }
                }

                .p_blog_main .sub-title {
                    color: #FFF;
                    text-shadow: 8px 4px 1px #1F1D1D;
                    font-size: 48px;
                    font-style: normal;
                    font-weight: 900;
                    line-height: normal;
                    letter-spacing: 4.8px;
                    text-transform: uppercase;
                }

                @media only screen and (max-width: 991px) {
                    .p_blog_main .sub-title {
                        font-size: 32px;
                        letter-spacing: 3.2px;
                    }
                }

                .p_blog_main .title {
                    color: #FFFCE9;
                    /*text-shadow: 8px 4px 1px #101010;*/
                    font-family: 'Montserrat', sans-serif;
                    font-size: 48px;
                    font-style: normal;
                    font-weight: 900;
                    line-height: normal;
                    letter-spacing: 4.8px;
                    text-transform: uppercase;
                    margin-bottom: 164px;
                    /*-webkit-text-stroke: 2px #000;*/
                    /*text-stroke: 2px #000;*/
                    text-shadow: 8px 8px 0 #000, 0 -3px 0 #000, 3px -3px 0 #000, 3px 0 0 #000, 3px 8px 0 #000, 0 3px 0 #000, -3px 3px 0 #000, -3px 0 0 #000;
                }

                @media only screen and (max-width: 991px) {
                    .p_blog_main .title {
                        font-size: 36px;
                        letter-spacing: 3.6px;
                        margin-bottom: 32px;
                    }
                }

                @media only screen and (max-width: 389px) {
                    .p_blog_main .title {
                        font-size: 35px;
                    }
                }

                .p_blog_main h2 {
                    color: #FFFCE9;
                    text-shadow: 3px 2px 0px #101010;
                    font-family: 'Roboto', sans-serif;
                    font-size: 24px;
                    font-style: normal;
                    font-weight: 900;
                    line-height: normal;
                    letter-spacing: 4.8px;
                    text-transform: uppercase;
                    margin-bottom: 30px;
                    max-width: 603px;
                    width: 100%;

                }

                @media only screen and (max-width: 991px) {
                    .p_blog_main h2 {
                        font-size: 24px;
                        letter-spacing: 4.8px;
                    }
                }

                .p_blog_main p {
                    color: #FFFCE9;
                    font-family: 'Roboto', sans-serif;
                    font-size: 16px;
                    font-style: normal;
                    font-weight: 700;
                    line-height: normal;
                    letter-spacing: 3.2px;
                    max-width: 605px;
                    margin-bottom: 30px;
                }

                @media only screen and (max-width: 991px) {
                    .p_blog_main p.big_text {
                        font-size: 20px;
                        letter-spacing: 2px;
                    }
                }

                .p_blog_main .divider {
                    height: 36px;
                    width: 100%;
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    z-index: 100;
                }
            </style>
        <?php endif; ?>
    </section>

    <section class="box-white box-categories">
        <div class="content">
            <ul class="cat-list">
                <?php wp_list_categories(array(
                    'orderby' => 'name',
                    'title_li' => '',
                )); ?>
            </ul>
        </div>
        <div class="divider"
             style="background-image:url('<?php echo get_stylesheet_directory_uri() ?>/images/divider.png');">
        </div>
        <style>
            .box-categories .cat-list {
                max-width: 1280px;
                width: 100%;
                margin: 0 auto;
                display: flex;
                flex-wrap: wrap;
                gap: 30px 55px;
                justify-content: center;
                position: relative;
                z-index: 9;
            }

            @media only screen and (max-width: 991px) {
                .box-categories .cat-list {
                    margin: 0;
                    justify-content: center;
                    gap: 50px;
                    /*padding: 40px 15px;*/
                }
            }

            .box-categories .cat-list .cat-item {
                /*border-radius: 100px;*/
                /*background: radial-gradient(70.71% 70.71% at 50% 50%, #3601AD 0%, #170463 100%);*/
                /*display: flex;*/
                /*max-width: 390px;*/
                /*width: 100%;*/
                /*height: 70px;*/
                /*justify-content: center;*/
                /*align-items: center;*/
                /*padding: 0 15px;*/

                max-width: 390px;
                width: 100%;
                height: 88px;
                border-radius: 70px;
                border: 4px solid #FFFCE9;
                background: #155634;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 20px;
                cursor: pointer;
            }

            .box-categories .cat-list .cat-item:hover {
                background: #0D3F25;
            }

            .box-categories .cat-list .cat-item:has(a:active) {
                background: #177C47;;
            }


            @media only screen and (max-width: 991px) {
                .box-categories .cat-list .cat-item {
                    height: 112px;
                }
            }

            .box-categories .cat-list .cat-item.current-cat {
                background: #FF7A00;
            }


            .box-categories .cat-list .cat-item a {
                color: #FFFCE9;
                text-align: center;
                font-family: 'Montserrat', sans-serif;
                font-size: 20px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4px;
                text-transform: uppercase;

            }


            .box-categories .divider {
                height: 36px;
                width: 100%;
                /*position: absolute;*/
                /*bottom: 0;*/
                /*left: 0;*/
                z-index: 100;
            }
        </style>
    </section>
    <section class="blogItem ">
        <div class="blogMainContent">
            <!-- Resent Post-->

            <div class="resent post ">
                <?php
                $paginationLeft = get_stylesheet_directory_uri() . '/images/chevron-left.svg'
                ?>

                <div class="singlePost">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 6,
                    );


                    $query = new WP_Query($args);
                    if (have_posts()) :
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        query_posts('post_type=post&paged=' . $paged . '&category_name=' . $category_slug . '&s=' . $search_keyword);
                        while (have_posts()) : the_post();
                            $img_url = (get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : $default_unit_img_url;

                            ?>


                            <div class="popularPost">
                                <span class="post_date"><?php the_time('j.m.Y'); ?></span>

                                <div class="imageIn ">
                                    <a href="<?= get_permalink() ?>">
                                        <img src="<?= $img_url ?>" alt="<?php the_title(); ?>"
                                             title="<?php the_title(); ?>"/>
                                    </a>
                                </div>
                                <h4>
                                    <a href="<?= get_permalink() ?>"><?php the_title(); ?></a>
                                </h4>
                                <!--                                <p>--><?php //echo get_the_excerpt(); ?><!--</p>-->
                            </div>

                        <?php
                        endwhile;
                        // Get the theme directory URI
                        $theme_directory_uri = get_template_directory_uri();
                        the_posts_pagination(array(
                            'screen_reader_text' => ' ',
                            'prev_next' => true,
                            'prev_text' => '<span><img src="' . $theme_directory_uri . '/images/chevron-left.svg" alt="Previous"></span>',
                            'next_text' => '<span><img src="' . $theme_directory_uri . '/images/chevron-right.svg" alt="Next"></span>',
                        ));
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>


            </div>

        </div>
    </section>

</section>

<div class="container-btn">
    <button class="scrollToTopBtn" onclick="scrollToTop()">
        <img class="footer-img" src="<?php echo get_stylesheet_directory_uri() ?>/images/btn-top.svg" alt="#">
        <img class="animated-big" src="<?php echo get_stylesheet_directory_uri() ?>/images/animated-big.svg"
             alt="#">
        <img class="animated-small" src="<?php echo get_stylesheet_directory_uri() ?>/images/animated-small.svg"
             alt="#">

    </button>
    <style>

        .container-btn {
            display: block;
            max-width: 1278px;
            width: 100%;
            margin: 0 auto;
            height: 88px;
            position: fixed;
            bottom: 55px;
            left: 50%;
            transform: translate(-50%, 0);
            z-index: 999999;
            transition: transform 1s;
        }

        @media only screen and (max-width: 991px) {
            .container-btn {
                bottom: 25px;
            }
        }

        .scrollToTopBtn {
            display: none;
            position: absolute;
            right: 0;
            background-color: transparent;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        img.animated-big {
            position: absolute;
            left: 50%;
            transform: translate(-50%, -50%);
            top: 50%;
            transition: all 0.8s ease 0s;
        }

        .scrollToTopBtn:hover img.animated-big {
            transform: translate(-50%, -100%);
        }

        img.animated-small {
            position: absolute;
            left: 50%;
            transform: translate(-50%, -50%);
            bottom: 15%;
            transition: all 0.8s ease 0s;
        }

        .scrollToTopBtn:hover img.animated-small {
            bottom: 60%;
        }

    </style>
    <script>
        // Функція для плавного скролу вверх сторінки
        function scrollToTop() {
            const scrollDuration = 700; // тривалість анімації в мілісекундах
            const scrollStep = -window.scrollY / (scrollDuration / 15);

            const scrollInterval = setInterval(function () {
                if (window.scrollY !== 0) {
                    window.scrollBy(0, scrollStep);
                } else {
                    clearInterval(scrollInterval);
                }
            }, 15);
        }

        // Показує або ховає кнопку "прокрутити вгору" згідно з положенням сторінки
        function handleScroll() {
            const scrollToTopBtn = document.querySelector('.scrollToTopBtn');
            if (window.scrollY > 300) {
                scrollToTopBtn.style.display = 'block';
            } else {
                scrollToTopBtn.style.display = 'none';
            }

            // Виклик функції перевірки видимості кнопки відносно футера
            checkFooterVisibility();
        }

        // Функція для показу або ховання кнопки "прокрутити вгору" згідно з положенням сторінки
        const scrollFunction = () => {
            const btn = document.querySelector('.scrollToTopBtn');
            const scrollOffset = 55;

            btn.style.display = (document.body.scrollTop > scrollOffset || document.documentElement.scrollTop > scrollOffset)
                ? 'block'
                : 'none';
        };

        // Функція для перевірки видимості кнопки відносно футера
        const checkFooterVisibility = () => {
            const btnContainer = document.querySelector('.container-btn');
            const footer = document.querySelector('footer');
            const footerOffset = footer.offsetTop - window.innerHeight;

            btnContainer.style.position = (window.pageYOffset > footerOffset) ? 'absolute' : 'fixed';
        };

        // Викликати handleScroll та scrollFunction при прокрутці сторінки
        window.addEventListener('scroll', function () {
            handleScroll();
            scrollFunction();
        });
    </script>


</div>


<!--dsf?-->