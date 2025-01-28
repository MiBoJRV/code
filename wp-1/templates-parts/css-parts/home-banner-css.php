<style>
/*Home banner css*/
.videoSearch h1 {
    <?php if (get_field('global_font_family', get_homePageId())=='Custom'): ?>
    font-size: <?=get_post_meta( get_homePageId(), "_gfonts_size_value_key_9")[0]?>;
    font-family: <?=get_post_meta( get_homePageId(), "_gfonts_name_value_key_9")[0]?>;
    font-weight: <?=get_post_meta( get_homePageId(), "_gfonts_weight_value_key_9")[0]?>;
    <?php else: ?>
    font-weight: 400;
    font-size: 72px;
    font-family: var(--original_font);
    margin-bottom: 15px !important;
    <?php endif ?>
}
.videoSearch h1 .sub_title {
    <?php if (get_field('banner_subtitle_font_size')!=''): ?>
    font-size: <?php the_field('banner_subtitle_font_size'); ?>;
    <?php else: ?>
    font-size: 20px;
    <?php endif ?>
    <?php if (get_field('global_font_family', get_homePageId())=='Custom'): ?>
        font-family: <?=get_post_meta( get_homePageId(), "_gfonts_name_value_key_7")[0]?>;
    <?php else: ?>
        font-family: 'var(--original_font)';
    <?php endif ?>
}
input#search_start_date,
input#search_end_date  {
    background-image: url("/wp-content/themes/BizcorLuxury/images/calendar.svg");
    background-size: 14px;
    background-repeat: no-repeat;
    background-position: right 10px center;
}
select#streamlinecore_sw_bedrooms_number {
    background-image: url("/wp-content/themes/BizcorLuxury/images/Path 2457.svg");
    background-size: 9px;
    background-repeat: no-repeat;
    background-position: right 10px center;
}
select#resortpro_sw_ra_id {
    background-image: url("/wp-content/themes/BizcorLuxury/images/Path 2457.svg");
    background-size: 9px;
    background-repeat: no-repeat;
    background-position: right 10px center;
}
.videoSearch #resortpro-widget-form .item .form-control-feedback.arrow {
    display: none;
}
#slider .beach-gear {
	position: absolute;
	top: 130px;
	right: 15px;
	display: block;
	line-height: 0;
}
.home #slider{
    width: 100%;
    /*overflow: hidden;*/
    position: relative;
    height: 800px;
}
.home #slider .home-banner{
    height: 100%;
    width: 100%;
    background: #161616;
    overflow: hidden;
}
.home #slider .home-banner > img{
    height: 100%;
    width: 100%;
    object-fit: cover;
    opacity: .65;
}
.home #slider .home-banner video{
    object-fit: cover;
    width: 100%;
    height: 100%;
}
.home #slider .home-banner .item{
    height: 100%;
    width: 100%;
}
.home #slider .home-banner .item img{
    height: 100%;
    width: 100%;
    object-fit: cover;
} 
#resortpro_sw_bedrooms_number option{
    color: #000!important;
}
.home #slider > img{
    width: 100%!important;
    height: 100%!important;
    object-fit: cover;
}
.videoSearch a.button{
    border: 2px solid #fff;
    color: #fff;
}
.videoSearch a.button:hover{
    background: #009EB7;
    border-color: #009EB7;
}
.videoSearch{
    position: absolute;
    width: 100%;
    left: 50%;
    top: 50%;
    z-index: 100;
    transform: translate(-50%, -50%);
    text-align: center;
}
.videoSearch .container-custom{
    max-width: 940px;
    margin: 0 auto;
}
.videoSearch h1 {
    color: #ffffff;
    text-shadow: 0 0 10px #000;
}
.videoSearch .form-group{
    margin-bottom: 0;
    position: relative;
}
.videoSearch input:not([type="checkbox"]), .videoSearch select, .videoSearch button{
    height: 46px!important;
    width: 100%;
    background: #fff;
}
.videoSearch #resortpro-widget-form .item .form-control-feedback.arrow {
    position: absolute;
    top: calc(50% - 5px);
    right: 15px;
    /*transform: translateY(-50%);*/
    width: 9px;
}
.videoSearch .widget_resortpro_search_widget{
    border: none;
    padding: 8px;
    background: rgba(24, 24, 24, 0.7);
}
.videoSearch #resortpro-widget-form{
    padding: 0;
}
.videoSearch button[type="submit"] {
    background: var(--main_color);
    border-radius: 0;
    border: none;
    color: #fff;
    font-weight: 100;
    text-transform: uppercase;
    font-size: 16px;
}
.videoSearch button[type="submit"]:hover {
    cursor: pointer;
    background: var(--hover_color) !important;
    box-shadow: none;
}
.videoSearch .search_widget:after {
    clear: both;
    content: '';
    display: block;
}
videoSearch
#slider #resortpro-widget-form label{
    display: none;
}
#slider #resortpro-widget-form > div.row > div{
    padding: 0 4px;
}
#slider #resortpro-widget-form input,
#slider #resortpro-widget-form select{
    border-radius: 0;
    border: none;
    font-size: 15px;
    padding: 5px 10px;
}
#slider #resortpro-widget-form .has-feedback label~.form-control-feedback{
    top: 7px;
    color: #ACACAC;
}
#slider #resortpro-widget-form input::-webkit-input-placeholder {
    font-size: 15px;
}
#slider #resortpro-widget-form input::-moz-placeholder {
    font-size: 15px;
}
.home #slider .mobileHB{
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    display: none;
}
.home #slider .mobileHB img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}
/*loading animation*/
.loading_animation {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,.6);
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 15px;
    display: none;
    z-index: 999;
}
.loading_animation svg {
    max-width: 200px;
    max-height: 200px;
    width: 100%;
    height: 100%;
    animation: loading 3s linear infinite;
}
.loading_animation svg path {
    fill: var(--main_color);
}

@keyframes loading {
    from {
        transform: rotateZ(0deg);
    }
    to {
        transform: rotateZ(360deg);
    }
}
/*end loading animation*/

.drop-overflow {
    overflow: visible !important;
}
.drop-index {
    z-index: -1 !important;
}
p.btn-amenities {
    float: left;
    padding: 14px 0;
    color: #fff;
    width: 100%;
    background: var(--second_color);
    height: 46px;
    font-size: 16px;
    text-transform: uppercase;
    transition: .3s;
    -webkit-touch-callout: none; 
    -webkit-user-select: none; 
    -khtml-user-select: none; 
    -moz-user-select: none; 
    -ms-user-select: none; 
    user-select: none; 
    margin: 0;  
}
p.btn-amenities:hover {
    cursor: pointer;
    background: var(--hover_color2);
}

.form-group.amenities-box {
    width: 100%;
}
.wrap-advensing {
    overflow: hidden;
    display: none;
    position: absolute;
    top: 100%;
    color: #fff;
    font: 0;
    right: 0;
    z-index: 22;
    background: rgba(0, 0, 0, .2);
    width: 100%;
}
.wrap-advensing > .wrap-amenities > .form-group {
	text-align: left;
	width: 100%;
	display: flex;
	flex-wrap: wrap;
	line-height: 1.42;
    text-shadow: 0 0 10px #000;
}
.amenities-box .amenity_group{
    margin: 0!important;
    padding: 5px;
}
/*Responsivness*//*Responsivness*//*Responsivness*/
@media(max-width:1199px){
.home #slider{
    height: 600px;
}
.videoSearch h1{
    font-size: 54px;    
}
#slider .videoSearch h4{
  font-size:22px; 
}
.trust-logo img {
    max-height: 100px;
}
}

@media(max-width:991px){
.videoSearch #resortpro-widget-form .item .form-control-feedback.arrow{
    right: 15px;
}
.videoSearch h1{
    font-size: 44px;   
}
#slider .videoSearch h4{
    font-size: 20px;
}
.amenities-wrap > .form-group > p.btn-amenities{
    width: 100%;
}
.resortpro-search-submit-button-block{
    width: 50%;
}
#slider .beach-gear{
    position: absolute;
    top: 25px;
    right: 15px;
    display: block;
    line-height: 1;
    z-index: 109;
}
}

@media(max-width:767px){
#slider #resortpro-widget-form > div.row > div:not(:last-child){
    margin-bottom: 5px;
}
.videoSearch h1 {
    line-height: 1;
}
.videoSearch h1,
.top-title h2{
    font-size: 36px;
}
.home #slider {
    height: auto;
}
.videoSearch {
    position:relative;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    transform: none;
    padding:0;
}
.wrap-advensing {
    position: static !important;
    background: none !important;
}
body.home #slider .mobileHB{
    position:relative;
    height:300px;
}
body.home #slider .mobileHB h2{
    position: absolute;
    bottom: 10px;
    left:0;
    right:0;
    padding:0 15px;
    text-align:center;
    text-shadow: none;
    color:#fff;
    font-size: 28px;
}
body.home #slider .mobileHB h2 .sub_title{
    font-size:14px;
    font-family:var(--body_font);
    display:block;
}
#slider #resortpro-widget-form input, #slider #resortpro-widget-form select{
    border:1px solid #CFCFCF;
    background-color:#F5F5F5;
}
.videoSearch h1{
    display:none;
}
.wrap-advensing{
    color:#777!important;
    text-shadow:none!important;
}
.wrap-advensing > .wrap-amenities > .form-group{
    text-shadow:none!important;
}
.videoSearch h1 {
    padding: 0 15px;
    font-size: 32px;
    line-height: 46px;
}
.videoSearch .form-group {
    width: 100%;
}
p.btn-amenities {
    width: 100%;
}
.videoSearch h1 .sub_title {
    font-size: 14px;
}
.blocktitle {
    font-size: 25px;
}
.blocktext {
    font-size: 14px;
}
.boxtitle {
    font-size: 32px;
}
#slider > div.mobileHB > h4{
    font-size:16px;
}
#slider .beach-gear{
	position: static;
	background: #052348;
	text-align: center;
	padding: 10px;
}
#slider .beach-gear img{
	height: 160px;
}
}

@media(max-width: 400px) {
.videoSearch h1 {
    padding: 0 5px;
    font-size: 28px;
    line-height: 36px;
}
}

/*different settings*//*different settings*/
/*Search Button*/
<?php if (get_field('banner_widget_variants') == 'Search Button'): ?>
.search_var_btn {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    padding: 15px 25px;
    background: var(--main_color);
    font-size: 16px;
    color: #fff;
    text-transform: uppercase;
}
.search_var_btn:hover {
    background: var(--hover_color);
}
.videoSearch h1 .sub_title {
    display: block;
}
<?php endif ?>

/*mobile image shoving*/
<?php if(get_field('home_banner_image_for_mobile')!=''): ?>   
    @media(max-width:<?php if(get_field('home_banner_mobile_start_showing')!=''): ?><?php echo get_field('home_banner_mobile_start_showing'); ?>px <?php else: ?> 767px<?php endif; ?>){
    .home #slider .mobileHB{
        display: block!important;
    }
    .home #slider .home-banner{
        display: none!important;
    }   
    }                     
<?php endif; ?>
/*End different settings*//*End different settings*/
</style>

<?php if(get_field('banner_widget_variants')=='White Background Widget'): ?>
    <?php include( get_theme_root().'/'.wp_get_theme().'/templates-parts/banner-variants/background-banner.php'); ?>
<?php elseif(get_field('banner_widget_variants')=='Transparent Widget'): ?>
    <?php include( get_theme_root().'/'.wp_get_theme().'/templates-parts/banner-variants/transparent-banner.php'); ?>
<?php elseif(get_field('banner_widget_variants')=='Two Columns Widget'): ?>
    <?php include( get_theme_root().'/'.wp_get_theme().'/templates-parts/banner-variants/two-columns-banner.php'); ?>
<?php elseif(get_field('banner_widget_variants')=='Rounded Widget'): ?>
    <?php include( get_theme_root().'/'.wp_get_theme().'/templates-parts/banner-variants/rounded-banner.php'); ?>
<?php endif; ?>