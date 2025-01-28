<?php 
/**
 * Template Name: Boxed Banner
 */
get_header(); ?>
<style>
.wpContent .container{
    padding: 30px 15px;
}
.boxed > .container{
    padding: 0;
}
body > .content {
    background: #F3F3F3 !important;
}
.positionedCrumbs{
    position: absolute;
    left: 0;
    top: 0;
    padding: 20px 0;
    z-index: 2;
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

h1.topTitle {
    margin: 0;
    padding: 20px;
    text-align: center;
    color: #fff;
    background: #fff!important;
    color: var(--main_color);
}
.topBanner {
    background: #000;
    position: relative;
    overflow: hidden;
    width: 100%;
}
.topBanner > img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0.8;
}
.topBanner h1 {
    margin: 0;
    padding: 20px;
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
    margin: 2% auto;
}
.questionCat{
    padding: 30px 0;
}
/*shortcode*/
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
/*end shortcode*/

/*End Testimonials*/
/* Forms */ 
.gform_wrapper .field_sublabel_above .ginput_complex.ginput_container label, .gform_wrapper .field_sublabel_above div[class*=gfield_date_].ginput_container label, .gform_wrapper .field_sublabel_above div[class*=gfield_time_].ginput_container label, .gform_wrapper .field_sublabel_below .ginput_complex.ginput_container label, .gform_wrapper .field_sublabel_below div[class*=gfield_date_].ginput_container label, .gform_wrapper .field_sublabel_below div[class*=gfield_time_].ginput_container label, form#gform_13 .gform_wrapper .gform_body label {
    display: block!important;
}
form#gform_13 label {
    display:block!important;
}
input, textarea, select, .customView input, .customView textarea, .customView select {
    border: 1px solid!important;
}
form#gform_13 .gform_footer input {
    background: var(--main_color)!important;
    color:#fff!important;
}
.gform_wrapper form {
    margin-bottom:5%;
}
/* End Forms */
/*Responsivness*//*Responsivness*//*Responsivness*/
@media(max-width: 1199px) {
.topBanner{
    height: 250px;
}    
}

@media(max-width: 991px) {
.topBanner h1 {
    font-size: 42px;
}
}

</style>
<div class="content">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post() ?>
            <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'post-thumbnails'); ?>            
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
                    <?php if(get_field('display_breadcrumbs')!='no' && get_field('add_breadcrumbs', get_homePageId())=='yes' || get_field('display_breadcrumbs') == 'yes' && get_field('add_breadcrumbs', get_homePageId())=='no'): ?>
                            <?php echo '<div class="positionedCrumbs">';?>
                                <?php
                                    if(function_exists('yoast_breadcrumb')) {
                                        echo crumb_nav(get_crumb_array());
                                    }
                                ?>
                            <?php echo '</div>';?>                        
                    <?php endif; ?>                                
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
            <?php if(get_the_content()): ?>
                    <section class="wpContent">
                        <div class="container">
                            <article>
                                <?php the_content(); ?> 
                            </article>                    
                        </div>           
                    </section><!--End wpContent-->
                    <div class="boxed">
                        <div class="container">
                            <?php include(get_theme_root().'/'.get_option('stylesheet').'/templates-parts/main-flexible-content-include.php');?>                    
                        </div>
                    </div>
                <?php else: ?>
                    <div class="boxed">
                        <div class="container">
                            <?php include(get_theme_root().'/'.get_option('stylesheet').'/templates-parts/main-flexible-content-include.php');?>                    
                        </div>
                    </div>                          
            <?php endif; ?>
                       
        <?php endwhile; ?>
    <?php endif; ?>
</div><!--End content-->
<?php get_footer(); ?>


<script>
    jQuery('.page-id-4952 .row-review').slice(0,24).show(100);
    if(jQuery('.page-id-4952 .row-review').length > 25) {
        jQuery('.page-id-4952 .wpContent .container').append('<a href="#" class="show_more">Show More</a>');
    }
    jQuery('.page-id-4952 .show_more').click(function(e) {
        e.preventDefault();
        jQuery('.page-id-4952 .row-review').show(300);
        jQuery(this).hide(100);
    })
</script>