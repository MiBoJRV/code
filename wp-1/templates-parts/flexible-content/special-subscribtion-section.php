<?php $specialFeedback++;?>
<div class="specials-feedback SF-<?php echo $specialFeedback;?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="specials-feedback-box">
        <?php if(get_sub_field('customize_special_subscribtion_section')=='yes'): ?>
                <?php if(get_sub_field('special_subscribtion_section_backgound_image')!=''): ?>
                <div class="specials-feedback-image">                    
                    <img src="<?php echo get_sub_field('special_subscribtion_section_backgound_image'); ?>" alt="#">                
                </div>
                <?php endif; ?>
                <div class="specials-feedback-block">
                    <div class="specials-feedback-text">
                        <?php echo get_sub_field('special_subscribtion_section_text'); ?>
                    </div>
                    <div class="specials-feedback-form">
                        <?php echo do_shortcode('[gravityform id=10 title=false description=false ajax=true tabindex=49]'); ?>
                    </div>
                </div>
            <?php else: ?>
                <div class="specials-feedback-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/paralaxes/seaWave.jpg" alt="#">
                </div>
                <div class="specials-feedback-block">
                    <div class="specials-feedback-text">
                        <h2>Don't Miss Future Specials!</h2>
                        <p>Add your email for a chance to win a free stay!</p>
                    </div>
                    <div class="specials-feedback-form">
                        <?php echo do_shortcode('[gravityform id=10 title=false description=false ajax=true tabindex=49]'); ?>
                    </div>
                </div>            
        <?php endif; ?>
    </div>
<style>
<?php if(get_sub_field('customize_font_size')=='yes'): ?>
.specials-feedback.SF-<?php echo $specialFeedback;?> .specials-feedback-text h2 {
    font-size: <?php the_sub_field('title_font_size'); ?>;
}
.specials-feedback.SF-<?php echo $specialFeedback;?> .specials-feedback-text p {
    font-size: <?php the_sub_field('subtitle_text_font_size'); ?>;
}
<?php endif; ?>
<?php if($specialFeedback < 2):?>
.specials-feedback {
    padding-bottom: 0 !important;
    position: relative;
    height: 415px;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
}
.specials-feedback-form {
	max-width: 550px;
	margin: 0 auto;
    width: 100%;
}
.specials-feedback-image {
    position: absolute;
    bottom: 0;
    right: 0;
    left: 0;
    top: 0;
    opacity: .3;
}
.specials-feedback-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.specials-feedback-block {
    padding: 0 15px;
    position: relative;
    z-index: 2;
    text-align: center;
}
.specials-feedback-text h2 {
	color: #292929;
}
.specials-feedback-text p {
    color: rgba(41, 41, 41, 0.75);
    margin-bottom: 25px;
}
#gform_10 {
    display: flex !important;
    flex-wrap: wrap;
}
#gform_10 .gform_footer {
    margin: 0 !important;
    width: 150px;
}
#gform_10 .gform_body {
    width: calc(100% - 150px) !important;
}
#gform_10 ul.gform_fields li.gfield {
    margin: 0 !important;
    max-width: 100% !important;
}
#gform_10 .ginput_container {
    margin: 0;
}
/*#gform_10 .ginput_container input {
    background: transparent;
    background-image: url('/wp-content/themes/BizcorLuxury/images/envelope-regular-grey.svg');
    padding: 5px 15px 5px 40px;
    background-repeat: no-repeat;
    background-position: 15px;
    background-size: 20px;
    border: 2px solid var(--main_color);
    color: #202020;
    font-size: 14px;
    height: 45px;
    line-height: 45px;
}
#gform_10 .gform_body input::-webkit-input-placeholder{
    color:#29292980;
    opacity:1;
}
#gform_10 .gform_body input::-moz-placeholder{
    color:#29292980;
    opacity:1;
}
#gform_submit_button_10 {
    background-color: var(--main_color) !important;
    color: #fff;
    font-size: 18px;
    text-transform: uppercase;
    font-weight: 700;
    padding: 10px;
    border: none;
    height: 45px;
    line-height: 1.4px;
    text-align: center;
    cursor: pointer;
    transition: .3s;
}
#gform_submit_button_10:hover {
    background: var(--hover_color) !important;
}
#gform_ajax_spinner_10 {
    position: absolute;
    left: 50%;
    bottom: -20px;
    transform: translateX(-50%);
}*/
#gform_10 .ginput_container input {
	background: transparent;
	background-image: url('/wp-content/themes/BizcorLuxury/images/envelope-regular-grey.svg');
	padding: 5px 15px 5px 40px;
	background-repeat: no-repeat;
	background-position: 15px;
	background-size: 18px;
    border: 2px solid var(--main_color);
	color: rgba(41, 41, 41, 1);
	font: 500 16px var(--body_font);
	height: 65px;
	line-height: 55px;
}
#gform_10 .ginput_container input::-webkit-input-placeholder{
    color:rgba(41, 41, 41, 0.5);
    font:500 16px var(--body_font);
}
#gform_10 .ginput_container input::-moz-placeholder{
    color:rgba(41, 41, 41, 0.5);
    font-weight:500;
    font-size:16px;
    font-family:var(--body_font);
    opacity: 1;
}
#gform_submit_button_10 {
    background-color: var(--main_color) !important;
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    padding: 10px;
    border: none;
    height: 65px;
    line-height: 1.4px;
    text-align: center;
    cursor: pointer;
    transition: .3s;
    font-family: var(--body_font);
    text-transform: uppercase;
}
#gform_submit_button_10:hover {
    background: var(--hover_color) !important;
}
#gform_ajax_spinner_10 {
    position: absolute;
    left: 50%;
    bottom: -20px;
    transform: translateX(-50%);
}

/*RESPONSIVNESS*//*RESPONSIVNESS*//*RESPONSIVNESS*/
@media screen and (max-width: 767px) {
.specials-feedback-image img {
    height: 100%;
}
.specials-feedback-text h2{
    font-size: 28px;
}
}
<?php endif; ?>
</style>
</div><!--End specials-feedback-->