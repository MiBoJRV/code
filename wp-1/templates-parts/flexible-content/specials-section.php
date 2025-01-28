<div class="specials-promotional <?php echo get_sub_field('specials_section_custom_class'); ?>">
<style>
/*specials-promotional*/
<?php if(get_sub_field('customize_font_size')=='yes'): ?>
.specials-promotional-block h3 {
    font-size: <?php the_sub_field('item_title_font_size'); ?>;
}
.specials-promotional-code p {
    font-size: <?php the_sub_field('item_promotional_code_font_size'); ?>;
}
.specials-promotional .infoPart > ul li {
    font-size: <?php the_sub_field('item_info_font_size'); ?>;
}
.specials-promotional-text p {
    font-size: <?php the_sub_field('item_info_font_size'); ?>;
}
.specials-promotional-button ul li a {
    font-size: <?php the_sub_field('item_buttons_font_size'); ?>;
}
<?php else: ?>
.specials-promotional-block h3 {
    font-size: 32px;
}
.specials-promotional-code p {
    font-size: 24px;
}
.specials-promotional-button ul li a {
    font-size: 16px;
}
<?php endif; ?>

.specials-promotional {
    background-color: #FAFAFA;
    padding-bottom: 40px
}
.specials-promotional-box {
    display: flex;
    flex-wrap: wrap;
    max-width: 1580px;
    margin: 0 auto;
    padding: 30px 10px;
    position: relative;
}
.specials-promotional-margin {
    width: 33.33334%;
    padding: 10px;
}
.specials-promotional-block {
    position: relative;
    box-shadow: 0px 3px 30px rgba(0, 0, 0, 0.12);
    min-height: max-content;
    background-color: #ffffff;
    padding: 0px 20px 20px;
    /*max-width: 500px;*/
    text-align: center;
    border-radius: 5px;
    overflow: hidden;
}
.specials-promotional-block h3 {
	color: #fff;
	text-align: center;
	margin: 0 -20px 20px;
	padding: 20px 0 30px;
	width: calc(100% + 40px);
	background: var(--second_color);
	position: relative;
}
.specials-promotional-block h3::after{
    content: '';
    position: absolute;
    height: 3px;
    border-radius: 1px;
    width: 75px;
    background: var(--main_color);
    bottom: 23px;
    left: calc(50% - 35px);
}
.specials-promotional-image .imaged{
    width: 100%;
}
.specials-promotional-image .imaged img{
    height: 100%;
    width: 100%;
    object-fit: cover;
}
.specials-promotional .infoPart {
    padding: 20px 0;
}
.specials-promotional .infoPart > ul {
    list-style-type: none;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0;
}
.specials-promotional .infoPart > ul li {
    position: relative;
    font-weight: 500;
}
.specials-promotional .infoPart > ul li:not(:last-child) {
    padding-right: 8px;
    margin-right: 8px;
}
.specials-promotional .infoPart > ul li:not(:last-child)::before {
    content: '';
    position: absolute;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    height: 100%;
    width: 1px;
    background: #2a2a2a;
}
.specials-promotional .specials-promotional-code{
    padding-bottom: 10px;
    position: relative;
}
.specials-promotional .specials-promotional-code::after{
    content: '';
    position: absolute;
    bottom: 10px;
    left: calc(50% - 30px);
    width: 42px;
    height: 2px;
    border-radius: 1px;
    background: var(--main_color);
}
.specials-promotional-code p {
	text-align: center;
	font: 400 24px/28px var(--original_font);
	letter-spacing: 0px;
	color: #292929;
	text-transform: uppercase;
}
.specials-promotional-block > ul {
    margin-bottom: 17px;
}
.specials-promotional-block > ul > li {
    line-height: 26px;
    text-align: center;
    color: #000000;
    position: relative;
    display: inline-block;
    padding: 0 5px;
}
.specials-promotional-block > ul > li::after {
    position: absolute;
    content: " |";
    margin-left: 5px;
}
.specials-promotional-block > ul > li:last-child::after {
    content: "";
}
.specials-promotional .specials-promotional-text{
    margin-top: 25px;
}
.specials-promotional-text p {
    color: rgba(41, 41, 41, 0.75);
    margin-bottom: 5px;
}
.specials-promotional-button ul {
    line-height: 0;
    font-size: 0;
    padding: 0;
    margin: 0;
}
.specials-promotional-button ul li {
    padding: 0 3px;
    display: inline-block;
    list-style: none;
    width: 50%;
}
.specials-promotional-button ul li a {
	color: #ffffff;
	display: block;
	padding: 14px;
	transition: all linear .3s;
	white-space: nowrap;
	border: 1px solid var(--main_color);
	font: 600 16px/25px var(--body_font);
	text-transform: uppercase;
}
.specials-promotional-button ul li:first-child a:hover {
    background-color: var(--hover_color);
    border-color: var(--hover_color);
}
.specials-promotional-button ul li:first-child a {
    background-color: var(--main_color);
}
.specials-promotional-button ul li:last-child a:hover {
    background-color: var(--second_color);
    border-color: var(--second_color);
    color: #fff;
}
.specials-promotional-button ul li:last-child a {
    background-color: transparent;
    color: #292929;
    border-color: #292929;
}

/*Responsivness*//*Responsivness*//*Responsivness*/
@media screen and (max-width: 1200px){
.specials-promotional-margin {
    width: 50%;
}
.specials-promotional-block {
    margin: 0 auto;
}
.specials-promotional-button ul li a {
    padding: 13px 9px;
}
.specials-promotional{
    padding-bottom: 0;
}
}

@media screen and (max-width: 767px) {
.specials-promotional-margin {
    width: 100%;
}    
}

/*@media screen and (max-width: 414px) {
.specials-promotional-button ul li {
    width: 100%;
    display: block;
    padding: 0;
}
.specials-promotional-button ul li.promo{
    margin-bottom: 10px;
}    
}*/

/*Custom Classes Customization*/
.specials-promotional.topUp .specials-promotional-box{
    top: -86px!important;
    padding-top: 0!important;
}
.specials-promotional.topUp{
    padding-bottom: 0;
}
</style>
    <div class="specials-promotional-box">
        <?php if( have_rows('specials_section_repeater') ): ?>             
            <?php while( have_rows('specials_section_repeater') ): the_row(); ?>
                <div class="specials-promotional-margin">
                    <div class="specials-promotional-block">
                        <h3><?php echo get_sub_field('specials_section_unit_extra_off'); ?></h3>
                        <div class="specials-promotional-image">
                            <div class="imaged">
                                <img src="<?php echo get_sub_field('specials_section_unit_image'); ?>" alt="#">                            
                            </div>
                        </div>
                        <div class="infoPart">
                            <?php if(get_sub_field('specials_section_promo_code')!=''): ?>
                                <div class="specials-promotional-code">
                                    <p>Promotional Code: <span class="prom_code"><?php echo get_sub_field('specials_section_promo_code'); ?></span></p>
                                </div>
                            <?php else: ?><?php endif; ?> 
                            <ul>
                                <?php if(get_sub_field('specials_section_unit_bedrooms')!=''): ?>
                                    <li><?php echo get_sub_field('specials_section_unit_bedrooms'); ?> Bedrooms</li>
                                <?php else: ?><?php endif; ?>
                                <?php if(get_sub_field('specials_section_unit_guests')!=''): ?>
                                    <li><?php echo get_sub_field('specials_section_unit_guests'); ?> Guests</li>
                                <?php else: ?><?php endif; ?>
                                <?php if(get_sub_field('unit_bathrooms')!=''): ?>
                                    <li><?php echo get_sub_field('unit_bathrooms'); ?> Baths</li>
                                <?php else: ?><?php endif; ?>                                                                                    
                            </ul>
                            <?php if(get_sub_field('specials_section_unit_description')!=''): ?>
                                <div class="specials-promotional-text">                            
                                    <?php echo get_sub_field('specials_section_unit_description'); ?>
                                </div>
                            <?php endif; ?>                                                                            
                        </div>
                        <div class="specials-promotional-button">
                            <ul>
                                <?php if(get_sub_field('specials_section_promo_code')!=''): ?>
                                    <li class="promo"><a href="#">Copy Code <i class="far fa-copy"></i></a></li>
                                <?php endif; ?>                                
                                <li><a href="<?php echo get_sub_field('specials_section_learn_more_link'); ?>">Learn More <i class="fas fa-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div><!--end specials-promotional-block -->
                </div><!-- end specials-promotional-margin -->
            <?php endwhile;?>               
        <?php endif;?>
    </div><!-- end specials-promotional-box -->
<script>

    function specialLining(heiLine){
        var highest = 0;
        jQuery(heiLine).each(function(){
            var currentHei = jQuery(this).height();
            if(currentHei > highest){
                highest = currentHei;
            }
        });
        jQuery(heiLine).height(highest);    
    }
    specialLining('.specials-promotional-block .infoPart');
    
    document.addEventListener("DOMContentLoaded", function(event) {
        function extraOff(){
            var eOff = jQuery('.specials-promotional-block .imaged').width()/460 * 280;
            jQuery('.specials-promotional-block .imaged').height(eOff);
        }
        extraOff();
        
        jQuery(window).resize(function(){
            
            jQuery('.specials-promotional-block .infoPart').attr('style', '');
            specialLining('.specials-promotional-block .infoPart');
            extraOff();
        });/*End resize function*/    

        jQuery('body').on("click", ".specials-promotional-button ul li.promo a", function(e) {
            e.preventDefault();
            var $temp = jQuery("<textarea>").css({'position': 'absolute', 'left': '-9999px'});
            jQuery("body").append($temp);
            $temp.val(jQuery(this).parent().parent().parent().parent().find('.prom_code').text()).select();
            document.execCommand("copy");
            // $temp.remove();
        });
    });
</script>
</div><!-- end specials-promotional -->
