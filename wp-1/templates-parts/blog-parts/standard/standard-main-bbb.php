<?php
$blog_title = "Blog by Financial Fraud Recovery";
$banner_img_url = '/wp-content/uploads/2020/10/pawleys-island-beach-and-sky.jpg';
$default_unit_img_url = $default_banner_img_url;
$main_color = 'var(--main_color)';
$second_color = '#70BE43';
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
        background: #fff;
        margin-top: 31px;
        margin-bottom: 30px;
        border: 1px solid #D6D6D6;
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

    section.blog {
        padding-bottom: 70px;
    }

    .blogItem {
        max-width: 1920px;
        padding-bottom: 30px;
        padding-left: 41px;
        padding-right: 41px;
    }

    /*blogMainContent*/
    .blogMainContent {
        /*padding: 0 15px;*/
        width: calc(100% - 510px);
        float: left;
        display: flex;
        flex-wrap: wrap;
        margin-top: 30px;
    }

    .categories {
        height: 70px;
        padding-bottom: 15px;
        margin-bottom: 15px;
        border-bottom: 2px solid<?=$main_color?>;
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
        color: <?=$main_color?>;
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
        color: <?=$second_color?>;
        text-transform: uppercase;
        line-height: 16px;
        margin-top: 10px;
    }

    .categories ul li:not(:last-child) {
        border-right: 2px solid<?=$main_color?>;
    }

    .blogMainContent .singlePost {
        padding: 25px;
        background: #fff;
        /*box-shadow: 0 3px 30px #0000001F;*/
        /*margin-bottom: 20px;*/
        width: 33%;
        box-shadow: 0 0 0 1px rgba(217, 217, 217, 1);
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
        border-right: 2px solid<?=$main_color?>;
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
    .popularPost {
        padding: 10px 10px 0;
    }

    .popularPost:not(:last-child) {
        margin-bottom: 0px;
        padding-bottom: 10px;
        border-bottom: 1px solid #D6D6D6;
    }

    .popularPost h4 {
        font-size: 16px;
        font-weight: 500;
        /*line-height: 18px;*/
        color: <?=$main_color?>;
        padding-right: 10px;
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
        background: var(--second_color) url('/wp-content/themes/BizcorLuxury/images/search_white.svg') no-repeat;
        background-size: auto 50%;
        background-position: center center;
        border: none;
        width: 75px;
    }

    .searchPost input:last-child:hover {
        background-color: var(--main_color);
    }

    .popularPost span {
        color: <?=$main_color?>;
        font-size: 14px;
    }

    .sideBarReadMore {
        color: <?=$main_color?>;
    }

    .sideBarReadMore:hover {
        color: #43c3ff;
    }

    /*pagination*/
    nav.pagination {
        margin-top: 30px;
        border-top: 2px solid<?=$main_color?>;
        width: 100%;
        border-radius: 0;
    }

    nav.pagination span, nav.pagination a.page-numbers {
        cursor: pointer;
        font-size: 14px;
        font-weight: 500;
        color: <?=$main_color?>;
        border: 2px solid<?=$main_color?>;
        display: inline-block;
        line-height: 30px;
        width: 35px;
        height: 35px;
        text-align: center;
    }

    nav.pagination .next.page-numbers, nav.pagination .next.page-numbers span,
    nav.pagination .prev.page-numbers, nav.pagination .prev.page-numbers span {
        border: none;
        width: auto;
        color: <?=$main_color?> !important;
        background: none !important;
    }

    nav.pagination .next.page-numbers {
        margin-left: 10px;
    }

    nav.pagination .prev.page-numbers {
        margin-right: 10px;
    }

    nav.pagination .prev.page-numbers:hover span, nav.pagination .next.page-numbers:hover span {
        color: <?=$main_color?> !important;
    }

    nav.pagination .page-numbers.current, nav.pagination .page-numbers:hover {
        background: <?=$main_color?>;
        color: #fff;
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
    @media (max-width: 1650px) {
        .blogMainContent .singlePost {
            width: 50%;
        }
    }

    @media (max-width: 1400px) {
        .views {
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        .sidebarBlog {
            width: 350px;
        }

        .blogMainContent {
            width: calc(100% - 350px);
        }

        .popularPost h4 {
            margin-top: 0;
        }
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

        .blogMainContent .singlePost {
            padding: 10px;
        }

        .viewsItem {
            /*margin-top: 18px;*/
        }
    }

    @media (max-width: 1250px) {
        .blogMainContent .singlePost {
            padding: 7px;
        }
    }

    @media (max-width: 1199px) {
        .blogMainContent .singlePost {
            width: 33.333%;
        }

        .viewsViews.leftFloat {
            margin-bottom: 0;
        }

        .headerItem {
            height: 200px;
        }

        .sidebarBlog, .blogMainContent {
            float: none;
            width: 100%;
            padding-left: 0;
        }

        .popularPost h4 {
            font-size: 22px;
        }

        .categories {
            height: auto;
        }

        .categories ul {
            position: static;
            padding-top: 20px;
        }

        .blogMainContent .singlePost {
            padding: 20px;
        }

        .sidebarBlog .singlePost {
            padding: 15px;
        }

        section.blog {
            padding-bottom: 0;
        }
    }

    @media (max-width: 991px) {
        .blogMainContent .singlePost {
            width: 50%;
        }

        .blogItem {
            padding-left: 15px;
            padding-right: 15px;
            padding-bottom: 0;
        }

        .box-white.box-categories {
            margin-bottom: 0;
        }

        .sidebarBlog {
            padding-bottom: 15px;
        }

        .blogMainContent {
            margin-top: 0;
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
        .categories, .singlePost {
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

        .blogMainContent .singlePost {
            padding: 0;
        }

        .singlePostCont {
            padding: 0 20px 20px 20px;
        }
    }

    @media (max-width: 600px) {
        .blogMainContent .singlePost {
            box-shadow: none;
        }

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

        .singlePost {
            padding: 13px;
        }

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
    <section
            class="page-banner_2 ">
        <div class="page-banner_2-content">
            <div class="page-banner_2-text">
                <h1 class="title">
                    Blog by Financial Fraud Recovery
                </h1>
            </div>
            <div class="page-banner_2-image">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/ffr/succ_main.webp" alt="#">
            </div>
        </div>
        <div class="bg-image">
            <img class="desktop" src="<?php echo get_stylesheet_directory_uri() ?>/images/ffr/consult_bg_bot.webp"
                 alt="#">
        </div>
        <style>
            .page-banner_2 {
                background: url('<?php echo get_template_directory_uri(); ?>/images/ffr/consult_bg.webp');
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
                /*height: 1014px;*/
                height: 872px;
                max-width: 1920px;
            <?php if(get_sub_field('hide_background_image') == 'Yes'):?> max-width: 100%;
            <?php endif; ?> margin: 0 auto;
                overflow: hidden;
            }

            @media only screen and (max-width: 1200px) {
                .page-banner_2 {
                    align-items: center;
                }
            }

            @media only screen and (max-width: 991px) {
                .page-banner_2 {
                    height: auto;
                }
            }

            .page-banner_2-content {
                width: 100%;
                margin: 0 auto 0 auto;
                display: flex;
                align-items: flex-start;
                position: relative;
                z-index: 9;
                gap: 40px;
                padding: 170px 15px 0;
                max-width: 1295px;
            }

            @media only screen and (max-width: 991px) {
                .page-banner_2-content {
                    flex-direction: column;
                    padding: 95px 15px 40px 15px;
                    align-items: center;
                    gap: 99px;
                }
            }

            .page-banner_2-text {
                /*margin-bottom: 18px;*/
                /*margin-left: 20px;*/
            }

            .page-banner_2-text .title {
                font-size: 81px;
            <?php if(get_sub_field('title_font_size') != ''):?> font-size: <?php echo get_sub_field('title_font_size'); ?>px;
            <?php endif; ?> font-style: normal;
                font-weight: 700;
                line-height: 82px;
                color: #ffffff;
                padding: 0 0 36px;
                position: relative;
                margin: 0;
                max-width: 720px;
            <?php if(get_sub_field('title_max_width') != ''):?> max-width: <?php echo get_sub_field('title_max_width'); ?>px;
            <?php endif; ?>
            }

            @media only screen and (max-width: 991px) {
                .page-banner_2-text .title {
                    font-size: 40px;
                    line-height: 62px;
                }
            }

            .page-banner_2-text p {
                font-size: 13px;
                font-style: normal;
                font-weight: 400;
                line-height: 23.8px;
                color: #ffffff;
                max-width: 604px;
                margin: 0;
            }

            @media only screen and (max-width: 991px) {
                .page-banner_2-text p {
                    font-size: 13px;
                    line-height: 23.8px;
                    max-width: 100%;
                }
            }

            .page-banner_2 .dialog_btn {
                background: #FF7277;
                max-width: 296px;
                padding: 20px 29px 20px 29px;
                border-radius: 100px;
                box-shadow: 0 20px 40px -10px rgba(0, 65, 131, 0.4);
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                color: #ffffff;
                font-size: 14px;
                font-weight: 700;
                line-height: 23.8px;
                text-transform: uppercase;
                margin-top: 192px;
            }

            @media only screen and (max-width: 991px) {
                .page-banner_2 .dialog_btn {
                    margin: 139px auto 0;
                }
            }

            .page-banner_2-image {
                max-width: 700px;
                /*width: 100%;*/
                position: absolute;
                top: 201px;
            <?php if(get_sub_field('top_position_image') != ''):?> top: <?php echo get_sub_field('top_position_image'); ?>px;
            <?php endif; ?> right: 13px;
                width: calc(100% - 600px);
            }

            @media only screen and (max-width: 1200px) {
                .page-banner_2-image {
                    margin-top: 50px;
                }
            }

            @media only screen and (max-width: 991px) {
                .page-banner_2-image {
                    margin: 0;
                    position: static;
                    width: 100%;
                }
            }

            .page-banner_2-image img {
                width: 100%;
                height: auto;
            }

            .page-banner_2 .bg-image {
                position: absolute;
                overflow: hidden;
                z-index: 1;
                transform: translate(-50%, 0px);
                left: 50%;
                /*bottom: -7px;*/
                top: 110px;
                width: 100%;
                height: auto;
                min-width: 1922px;
            }

            @media only screen and (max-width: 991px) {
                .page-banner_2 .bg-image {
                    display: none;
                }
            }

            .page-banner_2 .bg-image img {
                width: 100%;
                height: auto;
            }
        </style>
    </section>
    <section class="categories">
        <div class="categories-content">
            <ul class="categories-list">
                <li class="categories-list-item">

                </li>
            </ul>
        </div>
        <ul class="cat-list">
            <?php wp_list_categories(array(
                'orderby' => 'name',
                'title_li' => '',
            )); ?>
        </ul>
    </section>
    <div class="banner">
        <div class="headerItem">
            <img src="<?= $banner_img_url ?>" alt="" title="">
            <h1><?= $blog_title ?></h1>
        </div>
    </div>
    <div class="blogItem container-fluid">
        <div class="row">
            <div class="blogMainContent">
                <div class="categories customClear">
                    <ul class="leftFloat">
                        <li>
                            <i class="fa fa-list" aria-hidden="true"></i>
                            <a href="/blog/"><?= $blog_sub_title ?></a>
                        </li>
                    </ul>
                </div>
                <?php
                if (have_posts()) :
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    query_posts('post_type=post&paged=' . $paged . '&category_name=' . $category_slug . '&s=' . $search_keyword);
                    while (have_posts()) : the_post();
                        $img_url = (get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : $default_unit_img_url;
                        ?>
                        <div class="singlePost col-md-12 col-sm-12 col-xs-12"><!--Single Post-->
                            <div class="postContainer">
                                <div class="singlePostImg">
                                    <a href="<?= get_permalink() ?>">
                                        <img src="<?= $img_url ?>" alt="" title=""/>
                                    </a>
                                    <!-- <div class="singlePostCalendar">
                                        <div class="calendarItem">
                                            <img class="calendar" src="/wp-content/themes/BizcorLuxury/images/calendar-1.svg" alt="">
                                            <span><?php the_time('m/j/y'); ?></span>
                                        </div>
                                        <div class="calendarCategories">
                                            <span>
                                                <?= get_the_category()[0]->name ?>
                                            </span>
                                        </div>
                                    </div> -->
                                </div><!--End singlePostImg-->
                                <div class="singlePostCont">
                                    <h3><a href="<?= get_permalink() ?>"><span><?php the_title(); ?></span></a></h3>
                                    <span class="post_date">
                                        <img class="calendar" src="/wp-content/themes/BizcorLuxury/images/calendar.svg"
                                             alt="">
                                        <?php the_time('m/j/Y'); ?>
                                        <span class="line-center">|</span>
                                        <span>
                                            <?= get_the_category()[0]->name ?>
                                        </span>

                                    </span>
                                    <div class="social">
                                        <p>Share:</p>
                                        <!--										<a href="https://www.facebook.com/sharer/sharer.php?u=-->
                                        <?//= get_permalink() ?><!--"><i-->
                                        <!--													class="fab fa-facebook-f"></i></a>-->
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?= get_permalink() ?>">
                                            <i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                                        <a href="https://twitter.com/home?status=<?= get_permalink() ?>"><i
                                                    class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>
                                    </div>
                                    <!--									<hr>-->
                                    <article>
                                        <p><?php echo get_the_excerpt(); ?></p>
                                    </article>
                                    <div class="views">
                                        <div class="viewsItem rightFloat">
                                            <div class="viewsViews leftFloat">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                <span><?= wpb_get_post_views(get_the_ID()) ?></span>
                                            </div>
                                        </div>
                                        <a class="moreArticle leftFloat" href="<?= get_permalink() ?>">Read more</a>
                                    </div>
                                </div><!--End singlePostCont-->
                            </div><!--End postContainer-->
                        </div><!--End Single Post-->
                    <?php
                    endwhile;
                    echo '<div class="clearfix"></div>';
                    the_posts_pagination(array(
                        'screen_reader_text' => ' ',
                        'prev_text' => '<span>< Prev</span>',
                        'next_text' => '<span>Next ></span>',
                    ));
                endif;
                ?>
            </div><!--end of blogItemLeft-->

        </div><!--end of row-->
    </div><!--end of container-fluid-->
</section>
