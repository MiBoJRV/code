<?php

//Detect IOS
$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");

//do something with this information
if( $iPod || $iPhone ){
    $version = preg_replace("/(.*) OS ([0-9]*)_(.*)/","$2", $_SERVER['HTTP_USER_AGENT']);
    if($version < 8){
        $iosDevice = 1;    
    }else{
        $iosDevice = 0;    
    }    
}else if($iPad){
    $version = preg_replace("/(.*) OS ([0-9]*)_(.*)/","$2", $_SERVER['HTTP_USER_AGENT']);
    if($version < 8){
        $iosDevice = 1;    
    }else{
        $iosDevice = 0;    
    } 
}else{
    $iosDevice = 0;
}

define("THEME_DIR", get_template_directory_uri());

function get_homePageId(){
    return $home_id = (int)get_option( 'page_on_front' );
}

function get_blogPageId(){
    return $blog_id = (int)get_option( 'page_for_posts' );
}

$default_banner_img_url = '/wp-content/uploads/2020/01/1920x250.jpg';
/*--- REMOVE GENERATOR META TAG ---*/
remove_action('wp_head', 'wp_generator');
 
//title tag support
add_theme_support( 'title-tag' );

// ENQUEUE STYLES
     
function enqueue_styles() {

    if ( !is_front_page() ) {
        wp_register_style('bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
        wp_enqueue_style('bootstrap_css');
    }
    
    wp_register_style('style', THEME_DIR . '/style.css');
    wp_enqueue_style('style');
         
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
     
// ENQUEUE SCRIPTS

function enqueue_scripts() {    
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js');
    wp_enqueue_script( 'jquery' );

    if ( !is_front_page() ) {

        wp_register_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), null, true );
        wp_enqueue_script( 'bootstrap_js' );

    }
    wp_register_script( 'scroll_js', THEME_DIR . '/js/scroll.js', array(), null, true );
    wp_enqueue_script( 'scroll_js' );

    wp_register_script( 'custom_js', THEME_DIR . '/js/custom.js', array(), null, true );
    wp_enqueue_script( 'custom_js' );

    wp_register_script( 'script_js', THEME_DIR . '/js/script.js', array(), null, true );
    wp_enqueue_script( 'script_js' );

    wp_register_script( 'formValidation_js', THEME_DIR . '/js/formValidation.js', array(), null, true );
    wp_enqueue_script( 'formValidation_js' );

    wp_register_script( 'redirectToHomePage_js', THEME_DIR . '/js/redirectToHomePage.js', array(), null, true );
    wp_enqueue_script( 'redirectToHomePage_js' );

}

add_action('wp_enqueue_scripts', 'enqueue_scripts', 11);

if ( function_exists('register_sidebar') )
    register_sidebar(
        array(
            'id' => 'home-banner-widgets',
            'name' => 'Home Banner Widgets',
            'before_widget' => '',
			'after_widget' => '',
        )
    );
    register_sidebar(
        array(
            'id' => 'map_view',
            'name' => 'Map View',
            'before_widget' => '',
			'after_widget' => '',
        )
    );
    register_sidebar(
        array(
            'id' => 'header-unit-search',
            'name' => 'Header Unit Search',
            'before_widget' => '',
			'after_widget' => '',
        )
    );
    register_sidebar(
        array(
            'id' => 'sidebar-widget',
            'name' => 'Sidebar Widget',
            'before_widget' => '',
			'after_widget' => '',
        )
    );
    register_sidebar(
        array(
            'id' => 'search-sidebar-widget-2',
            'name' => 'Search Sidebar Widget 2',
            'before_widget' => '',
            'after_widget' => '',
        )
    );
    register_sidebar(
        array(
            'id' => 'search-tabs-widget',
            'name' => 'Tabs Widget',
            'before_widget' => '',
            'after_widget' => '',
        )
    );
    register_sidebar(
        array(
            'id' => 'toggle-map-widget',
            'name' => 'Toggle Map Widget',
            'before_widget' => '',
            'after_widget' => '',
        )
    );
    register_sidebar(
        array(
            'id' => 'go-to-property',
            'name' => 'Go To Property Widget',
            'before_widget' => '',
			'after_widget' => '',
        )
    );
function register_my_menus(){
    register_nav_menus (
        array('header-menu' => 'header-menu1', 'footer-menu' => 'footer-menu1', 'blog-menu' => 'blog-menu')
    );
}

if (function_exists('register_nav_menus')) {
    add_action( 'init', 'register_my_menus' );
}

function function_that_uses_conditional_tags() {
    if(is_front_page()){

        function enqueue_styles_fp() {
            wp_dequeue_script( 'date-format-js' );
            wp_dequeue_script( 'googlemaps-js' );
            wp_dequeue_script( 'richMarker' );
            wp_dequeue_script( 'waitme-js' );
            wp_dequeue_script( 'frontend-js' );
            wp_dequeue_script( 'angularjs' );
            wp_dequeue_script( 'angularcookies' );
            wp_dequeue_script( 'ng-map-js' );
            wp_dequeue_script( 'jquery-sticky-js' );
            wp_dequeue_script( 'custom-quote-js' );
            wp_dequeue_script( 'ng-map.min.js' );
            wp_dequeue_script( 'jquery.sticky.min.js' );;
            wp_dequeue_script( 'jquery.json.min.js' );
            wp_dequeue_script( 'widget.min.js' );
            wp_dequeue_script( 'sticky.min.js' );
            wp_dequeue_script( 'imagesloaded.pkgd.min.js' );
            wp_dequeue_script( 'slider.min.js');
            wp_dequeue_script( 'masonry.min.js');
            wp_dequeue_script( 'custom-images.js');
            wp_dequeue_script( 'jquery.maskedinput.min.js');
            wp_dequeue_script( 'moment.min.js');
            wp_dequeue_script( 'daterangepicker.min.js');
            wp_dequeue_script( 'slider.min.js');
            wp_dequeue_script( 'resortpro' );
            wp_dequeue_style( 'jquery-ui-css' );
            wp_dequeue_style( 'fontawesome' );
            wp_dequeue_style( 'font-awesome' );
            wp_dequeue_style( 'jquery-ui.min.css' );
            wp_dequeue_style( 'waitme-css' );
            wp_dequeue_style( 'resortpro-css' );
            wp_dequeue_style( 'daterangepicker.css' );
            wp_dequeue_style( 'streamline-core' );
        }
        add_action( 'wp_enqueue_scripts', 'enqueue_styles_fp' );
    } 
}
add_action('wp', 'function_that_uses_conditional_tags');


add_action( 'gform_enqueue_scripts', 'gform_dequeue_script_list' );
function gform_dequeue_script_list() { 
    global $wp_styles; 
    if( isset($wp_styles->registered['gforms_datepicker_css']) ) {
        unset( $wp_styles->registered['gforms_datepicker_css'] );
    } 
}

function new_excerpt_length($length) {
    return 70;
}
add_filter('excerpt_length', 'new_excerpt_length');

add_theme_support('post-thumbnails');
set_post_thumbnail_size(9999,9999,TRUE);

remove_filter( 'the_excerpt', 'wpautop' );

add_filter('excerpt_more', function($more) {
 return '...';
});


function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function wpb_get_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return 'Views '.$count;
}

// crumb start //
function get_crumb_array(){
    $crumb = array();

    //Get all preceding links before the current page
    $dom = new DOMDocument();
    $dom->loadHTML(yoast_breadcrumb('', '', false));
    $items = $dom->getElementsByTagName('a');

    foreach ($items as $tag)
        $crumb[] =  array('text' => $tag->nodeValue, 'href' => $tag->getAttribute('href'));

    //Get the current page text and href
    $items = new DOMXpath($dom);
    $dom = $items->query('//*[contains(@class, "breadcrumb_last")]');
    $crumb[] = array('text' => $dom->item(0)->nodeValue, 'href' => trailingslashit(home_url($wp->request)));
    return $crumb;
}

function crumb_nav($crumb){
    $html = '';
    if($crumb) {
        //var_dump($crumb);
        $items = count($crumb) - 1;
        $html = '<div class="paginationSection">';
        foreach($crumb as $k => $v){
            if($k == $items){
                $html .= '<span class="pageName lastcrumb">';
                $html .= get_the_title().'<span class="triangle-right"><span class="triangle-right-2"></span></span>';
            }else{
                $html .= '<span class="pageName">';
                $html .= sprintf('<a href="%s">%s<span class="triangle-right"><span class="triangle-right-2"></span></span></a>', $v['href'], get_the_title(url_to_postid($v['href'])));
            }
            $html .= '</span>';
        }
        $html .= '</div>';
    }
    return $html;
}
// crumb end //

//add_action('admin_head', 'custom_admin_styles');
//function custom_admin_styles() {
//    echo '
//        <script>
//            jQuery(window).ready(function(){
//                var hzAdmin = jQuery("#wp-admin-bar-my-account > a .display-name").text();
//                var hzEditor = jQuery("#wp-admin-bar-menu_id > div").text();
//                if(hzAdmin != "MiBo" && hzAdmin != "MiBo"){
//                    jQuery("#acf-group_5c472ccda051c, #acf-group_5c46ed6742cb0, #acf-group_5c44e67ec541f, #acf-group_5c4591aed9ed3, #acf-group_5c607bc9cbaa1").empty(); //delete prom pages
//                    jQuery("#the-list #post-post-341, #the-list #post-496, #the-list #post-338, #the-list #post-332, #the-list #post-335").empty(); //delete from ACF
//                    jQuery("#menu-plugins").remove();
//                    jQuery("#menu-appearance a").each( function(){
//                        if(jQuery(this).text() == "Theme Editor"){
//                            jQuery(this).remove();
//                        }
//                    })
//                    jQuery("#menu-settings a").each( function(){
//                        if(jQuery(this).text() == "StreamlineCore Settings"){
//                            jQuery(this).remove();
//                        }
//                    })
//                }
//
//                if(hzEditor == "editor" || hzEditor == "wpseo_editor"){
//                    jQuery(".acf-flexible-content > .acf-actions").empty();
//                    jQuery("#front-page-metabox-1").empty();
//                }
//
//                //remove flexible content from Search Page
//                var loc77 = window.location.href;
//                loc77 = loc77.split("/wp-admin/");
//                loc77 = loc77[1];
//                if(loc77 == "post.php?post=6&action=edit"){
//                    jQuery(".acf-admin-5-3 #acf-group_5c90b904341e2").empty();
//                }
//
//            });/*End ready function*/
//        </script>
//        <style>
//            .hideItem + input{
//                display: none!important;
//            }
//            #advanced-sortables .inside input, #advanced-sortables .inside select{
//                margin: 5px 0!important;
//                width: 180px!important;
//                height: 32px!important;
//            }
//            .titleFont:not(:nth-child(3)){
//                padding-top: 20px
//            }
//            #wp-admin-bar-menu_id{
//                display: none;
//            }
//        </style>
//    ';
//}

function wph_add_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'wph_add_mime_types');

include(get_theme_root().'/'.get_option('stylesheet').'/functions-fonts/function-pre-fonts.php');

add_action( 'wp_ajax_filter_fav_cp', 'filter_fav_cp_function' );
add_action( 'wp_ajax_nopriv_filter_fav_cp', 'filter_fav_cp_function' );
function filter_fav_cp_function(){

    $items_array = explode(',', $_POST['favorites_string']);

    $args = array(
        'post_type'         => 'page',
        'post_status'       => 'publish',
        'orderby'           => 'post_title',
        'posts_per_page'    => -1,
        'order'             => 'ASC',
        'post__in'          => $items_array
    );

    $query = new WP_Query($args);
    if ($query->have_posts()) :
        while ($query->have_posts()): $query->the_post();
            $unit_id = get_the_ID();
            //if(strpos($_POST['favorites_string'], "$unit_id")!==false):?>
                <?php $img_url = (get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : '/wp-content/themes/MiBoLuxury/images/kanoe.jpg'; ?>
                    <?php if(get_field('small_image_for_page_lists')!=''): ?>
                        <?php $img_url = get_field('small_image_for_page_lists'); ?>
                    <?php endif; ?>
                    <div class="item">
                        <div class="item_wrap">
                            <span class="active idButton" data-id="<?=$unit_id?>" class="fav_btn">
                                <i class="far fa-heart"></i>
                                <i class="fa fa-heart"></i>
                            </span>
                            <div class="img_box">
                                <img src="<?php echo $img_url;?>" alt="">
                                <?php if(get_field('custom_title')!=''): ?>
                                    <h3><?php echo get_field('custom_title');?></h3>
                                <?php else: ?>
                                    <h3><?php the_title(); ?></h3>
                                <?php endif; ?>
                            </div>
                            <div class="text_box"><?php echo wp_trim_words( get_the_content(), '25', ' ...' ); ?></div>
                            <a href="<?=get_permalink()?>" class="read_more">Read More</a>
                        </div>
                    </div>
                <?php
            //endif;
        endwhile;
    endif;
    wp_reset_postdata();

    wp_die();
    }


add_action( 'admin_bar_menu', 'my_admin_bar_menu', 30 );
function my_admin_bar_menu( $wp_admin_bar ) {

    $user = wp_get_current_user();

    $wp_admin_bar->add_menu( array(
        'id'    => 'menu_id',
        'title' => $user->roles[0]
    ) );
}

function react_app_shortcode() {
    ob_start();
    include 'backoffice/index.html'; // Update the path accordingly
    return ob_get_clean();
}

add_shortcode('react_app', 'react_app_shortcode');

function custom_widgets_init() {
    register_sidebar( array(
        'name'          => 'Translation',
        'id'            => 'translation',
        'description'   => 'Add widgets here to appear right sidebar on Boxed Right Sidebar template',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'custom_widgets_init' );

//add_filter('gform_get_form_filter', function($form_string, $form) {
//
//    $form_string = str_replace( "replaceWith", "append", $form_string );
//
//    return $form_string;
//}, 10, 2);

add_action( 'gform_after_submission_17', 'mysite_gform_after_submission_17', 17, 2 ); function mysite_gform_after_submission_17 ( $entry, $form ) {
    GFAPI::delete_entry( $entry['id'] );
}



add_filter( 'gform_upload_button_text_18', 'custom_upload_button_text' );
function custom_upload_button_text( $text ) {
    return 'Upload the File';
}


function get_breadcrumb() {
    $breadcrumbs = array();

    // Добавляем домашнюю страницу
    $breadcrumbs[] = '<a href="' . home_url() . '">Home Page</a>';

    // Добавляем ссылку на страницу Blog
    $blog_page = get_option('page_for_posts');
    if ($blog_page) {
        $breadcrumbs[] = '<a href="' . get_permalink($blog_page) . '">Blog</a>';
    }

    // Получаем текущий пост
    $post = get_queried_object();

    // Добавляем категории, если они есть
    if (is_category() || is_single()) {
        $categories = get_the_category($post->ID);
        foreach ($categories as $category) {
            $breadcrumbs[] = '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
        }
    }

    // Добавляем заголовок поста
    if (is_single()) {
        $breadcrumbs[] = '<a href="' . get_permalink() . '">' . get_the_title() . '</a>';
    }

    return $breadcrumbs;
}

// Ваша функция get_related_posts() в functions.php
function get_related_posts() {
    $tags = wp_get_post_tags(get_the_ID());

    if ($tags) {
        $tag_ids = array();
        foreach ($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;

        $args = array(
            'tag__in' => $tag_ids,
            'post__not_in' => array(get_the_ID()),
            'posts_per_page' => 2,
            'ignore_sticky_posts' => 1,
            'orderby' => 'rand' // Вы можете изменить сортировку по своему усмотрению
        );

        $query = new WP_Query($args);

        return $query->posts;
    }

    return array();
}









