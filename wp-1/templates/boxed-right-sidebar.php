<?php 
/**
 * Template Name: Boxed Right Sidebar
 */
get_header(); ?>
<style>
.wpContent article {
	padding: 20px 50px;
	background: #fff;
	box-shadow: 0 3px 30px rgba(0,0,0,.12);
	margin-bottom: 30px;
}
.wpContent article h3 {
	font-size: 24px;
	margin-bottom: 15px;
	color: #292929;
	text-transform: uppercase;
}
.wpContent article p {
	color: rgba(41, 41, 41, 0.75);
	line-height: 28px;
    font-size:16px;
}
.wpContent article > .row{
    margin: 5% auto;
}
.positionedCrumbs{
    position: absolute;
    left: 0;
    top: 0;
    padding: 20px 0;
    z-index: 2;
}
.content{
    background: #FAFAFA !important;
	padding-bottom: 40px;
}

/*Top Banner*/
/*Banner Font Size*/
<?php if(get_field('customize_font_size')=='yes'): ?>
    h1.topTitle {
        font-size: <?php the_field('banner_title_font_size'); ?>;
    }
    .topBanner h1 {
        font-size: <?php the_field('banner_title_font_size'); ?>;
    }
<?php endif; ?>

/*Banner Height*/
<?php if(get_field('banner_height')!='Half Height'): ?>
    .topBanner {
        height: 450px;
    }
    <?php elseif(get_field('banner_height')=='Half Height'): ?>
    .topBanner {
        height: 250px;
    }
<?php endif; ?>
.reviews{
    padding:0!important;
}
.page-id-3133 h1.topTitle {
    color:#000;
    text-align:left;
    margin-left:60px;
}
h1.topTitle{
    margin: 0;
    padding: 20px;
    text-align: center;
    color: #fff;
    background: #fff!important;
    color: var(--main_color);
}
.topBanner{
    background: #000;
    position: relative;
    overflow: hidden;
    width: 100%;
}
.topBanner > img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    /*opacity: 0.8;*/
}
.topBanner h1 {
	margin: 0;
	text-align: center;
	color: #fff;
}
.topBanner .positioned{
    position: absolute;
    width: 100%;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    padding: 0 15px;
}
/*End Top Banner*/
body {
    background: #F3F3F3;
}
.textSeasons{
    background: #FAFAFA;    
}

/*change default container width*/
.container {
    max-width: 1411px;
    width: 100%;
    padding-top: 50px;
}
#main .container {
    padding: 0;
}
#main .listings_wrapper_box {
    padding: 0;
}
#main .listings_wrapper_box > div:nth-child(odd) .listing {
    padding-left: 0;
}
#main .listings_wrapper_box > div:nth-child(even) .listing {
    padding-right: 0;
}
#main .search_results_filter_area .flex_wrapper {
    padding: 10px 0 15px;
}
#main .sorting {
    padding-left: 0;
}
.c-filter-widget__inner > .col-md-12 > .row > div {
    width: 100%;
}
.c-filter-widget__inner > .col-md-12 > .row > div .col-xs-12 {
    width: 50%;
}
.c-filter-widget__inner > .col-md-12 > .row > .col-md-5 {
    margin-top: 15px;
}


/*sidebar featured*/
.sidebar-featured {
    padding: 11px 0;
    border-top: 1px solid #D5D5D5;
}
.sidebar-featured h3 {
    text-align: center;
    margin: 20px auto;
    font-size: 24px;
    line-height: 38px;
}
.sidebar-featured-block {
    box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.2);
    transition: all linear .5s;
}
.sidebar-featured-block:hover{
    box-shadow: 0px 0px 21px 7px rgba(0,0,0,0.5);
}
.sidebar-featured-block-item {
    text-align: center;
    max-width: 550px;
    max-height: 450px;
}
.sidebar-featured-block-item:hover .sidebar-featured-img img {
    transform: scale(1.1);
}
.sidebar-featured-block  .sidebar-featured-img {
    overflow: hidden;
}
.sidebar-featured-block .sidebar-featured-img img {
    width: 100%;
    max-height: 300px;
    object-fit: cover;
}
.sidebar-featured-block .sidebar-featured-txt {
    background: #fff;
    position: relative;
    z-index: 10;
    transition: all linear .5s;
    padding: 20px 0;
}
.sidebar-featured-block-item:hover .sidebar-featured-txt {
    background-color: var(--main_color);
}
.sidebar-featured-block-item:hover .sidebar-featured-txt h3 {
    color: #fff;
}
.sidebar-featured-block-item:hover .sidebar-featured-txt ul li {
    color: #fff;
}
.sidebar-featured-block .sidebar-featured-txt h3 {
    display: block;
    font-size: 32px;
    line-height: 36px;
    margin: 0 auto 20px;
    color:#fff;
    text-shadow: 0 0 10px rgba(0,0,0,.6);
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
/*datepicker*/
.ui-datepicker-next:before, .ui-datepicker-prev:before {
  padding-top: 8px;
}
#ui-datepicker-div a.ui-state-default {
  background: var(--main_color);
}
.slash_logic #ui-datepicker-div .ui-datepicker-unselectable span.ui-state-default {
  background: #333 !important;
}
#ui-datepicker-div a.ui-state-default:hover {
  background: #70BE43 !important;
}
.ui-datepicker th {
    color: #333;
}
/*end datepicker*/



/*Responsivness*//*Responsivness*//*Responsivness*/
@media(max-width: 1199px) {
.topBanner{
    height: 250px;
} 
}

@media(max-width: 991px) {
.c-filter-widget__inner > .col-md-12 > .row > .col-md-5 .col-md-6 {
    width: 100%;
}
.container {
    padding: 30px 0 0;
}
.topBanner h1 {
    font-size: 42px;
}
.rightSidebar {
    margin-top: 30px;
}
}

@media(max-width: 767px) {
.c-filter-widget__inner > .col-md-12 > .row > div .col-xs-12 {
    width: 100%;
}
.wpContent article{
    padding:15px;
}
}

</style>
<div class="content">
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post() ?>
        <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'post-thumbnails'); ?>
        <?php $current_page_id = get_the_ID(); ?>
            <?php if(get_field('remove_banner')!='yes'): ?>
                <div style="width: 100%; overflow: hidden;" class="topBanner">
                    <?php
                    if($thumb[0]==''){
                        echo '<img style="width: 100%;" src="/wp-content/uploads/2019/04/napali-coast-91676_1920-Home-Parallax.jpg" alt="" class="banner-img"/>';
                    }else{
                        echo '<img style="width: 100%;" src="'.$thumb[0].'" alt="" class="banner-img"/>';
                    }
                    ?>
                    <div class="positioned">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <?php //if(get_field('display_breadcrumbs')!='no' && get_field('add_breadcrumbs', get_homePageId())=='yes' || get_field('display_breadcrumbs') == 'yes' && get_field('add_breadcrumbs', get_homePageId())=='no'): ?>
                            <?php //echo '<div class="positionedCrumbs">';?>
                                <?php
                                    /*if(function_exists('yoast_breadcrumb')) {
                                        echo crumb_nav(get_crumb_array());
                                    }*/
                                ?>
                            <?php //echo '</div>';?>                        
                    <?php //endif; ?>                                     
                </div>        
                <?php else: ?>
                    <?php if(get_field('display_breadcrumbs')!='no' && get_field('add_breadcrumbs', get_homePageId())=='yes' || get_field('display_breadcrumbs') == 'yes' && get_field('add_breadcrumbs', get_homePageId())=='no'): ?>
                            <?php echo '<div class="positionedCrumbs">';?>
                                <?php
                                    if(function_exists('yoast_breadcrumb')) {
                                        echo crumb_nav(get_crumb_array());
                                    }
                                ?>
                            <?php echo '</div>';?>                        
                    <?php endif; ?>               
                    <h1 class="topTitle"><?php the_title(); ?></h1>
            <?php endif; ?>     
            <section class="textSeasons">
                <div class="container">
                    <div class="col-md-8 mainCont">
                        <?php if(get_the_content()): ?>                       
                                <section class="wpContent">
                                    <article>
                                        <?php the_content(); ?> 
                                    </article>                              
                                </section><!--End wpContent-->
                                <?php include(get_theme_root().'/'.get_option('stylesheet').'/templates-parts/main-flexible-content-include.php');?>
                            <?php else: ?>                   
                                <?php include(get_theme_root().'/'.get_option('stylesheet').'/templates-parts/main-flexible-content-include.php');?>                        
                        <?php endif; ?>
                    </div>
                    <div class="col-md-4 rightSidebar">

                        <?php if(get_field('display_view_rental_block')!='no'):?>
                            <?php include(get_theme_root().'/'.get_option('stylesheet').'/templates-parts/sidebar-parts/start-vacation.php');?>
                        <?php endif; ?>
                        <?php if(get_field('display_contact_us_form')!='no'):?>
                            <?php include(get_theme_root().'/'.get_option('stylesheet').'/templates-parts/sidebar-parts/contact-us-form.php');?>
                        <?php endif; ?>                    
                    
                        <?php if(get_field('display_search_rentals_widget')!='no'):?>
                            <?php include(get_theme_root().'/'.get_option('stylesheet').'/templates-parts/sidebar-parts/search-widget.php');?>
                        <?php endif; ?>
                        
                        <?php if(get_field('display_featured_section')!='no'): ?>
                            <?php include(get_theme_root().'/'.get_option('stylesheet').'/templates-parts/sidebar-parts/featured-section.php');?>
                        <?php endif; ?>                          
                    </div><!--End rightSidebar-->
                </div><!--End container-->
            </section><!--End textSeasons-->
    <?php endwhile; ?>
<?php endif; ?>
</div><!--End Content-->
<?php get_footer(); ?>
