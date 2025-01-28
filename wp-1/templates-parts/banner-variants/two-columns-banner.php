<style>
/*Two Colums Banner*/
.videoSearch {
    top: 50%;
    left: 30%;
    width: auto;
}
.videoSearch .container-custom {
    max-width: 700px;
}
.videoSearch .search_widget {
    padding: 5px 0;
    clear: both;
    position: relative;
}
#slider #resortpro-widget-form input, #slider #resortpro-widget-form select {
    color: gray;
}
.videoSearch .form-group {
    width: auto;
    margin-bottom: 0;
    padding: 5px;
}
#slider .videoSearch h1 {
    line-height: 1.3;
    display: inline-block;
}
.videoSearch h1 .sub_title {
    display: none;
}
.videoSearch h1 span:not(.sub_title) {
    font-size: <?php the_field('banner_subtitle_font_size'); ?>;
    text-transform: uppercase;
    display: block;
}
.videoSearch #resortpro-widget-form .item {
    width: 50%;
}
.videoSearch #resortpro-widget-form .item.all_rentals {
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translate(-50%, 50%);
}
.videoSearch #resortpro-widget-form .item.all_rentals .btn {
    background: transparent;
    color: #fff;
    border: 2px solid #fff;
}
.videoSearch #resortpro-widget-form .item.amenities-wrap {
    order: 1;
}
#slider #resortpro-widget-form > div.row .customView {
	display: flex;
	flex-wrap: wrap;
    padding: 0 50px 30px;
}
.b_line {
    position: absolute;
    bottom: 0;
    display: inline-block;
    height: 2px;
    width: 50%;
    background: #fff;
}
.b_line.left {
    left: 0;
}
.b_line.right {
    right: 0;
}
.t_line {
    position: absolute;
    top: 72px;
    display: inline-block;
    height: 2px;
    width: 50%;
    background: #fff;
}
.t_line.left {
    left: 0;
}
.t_line.right {
    right: 0;
}
.l_line {
    position: absolute;
    bottom: 0;
    left: 0;
    display: inline-block;
    height: calc(100% - 72px);
    width: 2px;
    background: #fff;
}
.r_line {
    position: absolute;
    bottom: 0;
    right: 0;
    display: inline-block;
    height: calc(100% - 72px);
    width: 2px;
    background: #fff;
}
.videoSearch #resortpro-widget-form .item .form-control-feedback.arrow{
    right: 20px;
}

/*Responsivness*//*Responsivness*//*Responsivness*/
@media(max-width: 1199px) {
.videoSearch {
    left: 40%;
}
}

@media(max-width: 767px) {
.home .content #slider {
    height: auto !important;
    padding-top: 160px;
    padding-bottom: 80px;
}
.videoSearch {
    position: relative;
    top: 0;
    left: 0;
    width: 95%;
    margin: 0 auto;
    transform: none;
    padding: 0;
}
.home #slider .home-banner {
    position: absolute;
    top: 0;
    left: 0;
}
#slider #resortpro-widget-form > div.row .customView {
    padding: 0 30px 30px;
}
.videoSearch #resortpro-widget-form .item:not(:last-child) {
    width: 100%;
}
.videoSearch h1 span:not(.sub_title) {
    font-size: 24px;
}
.t_line {
    top: 36px;
}
.l_line, .r_line {
    height: calc(100% - 36px);
}
}
</style>


<script>
    jQuery(document).ready(function() {
        var all_rentals_width = jQuery('.videoSearch #resortpro-widget-form .item.all_rentals').innerWidth() / 2 - 15;
        var h1_width = jQuery('.videoSearch h1').innerWidth() / 2 + 15;
        jQuery('.b_line').width(all_rentals_width+'px');
        jQuery('.t_line').css('width', 'calc(50% - '+h1_width+'px');
    })
</script>