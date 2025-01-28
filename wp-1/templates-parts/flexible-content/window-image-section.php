<?php $windowImage++;?>
<section class="window-image Wi-<?php echo $windowImage;?> <?php echo get_sub_field('image_side'); ?> <?php echo get_sub_field('custom_class'); ?>">
<style>
/*Specific Code*/
section.window-image.Wi-<?php echo $windowImage;?>{
    background: <?php echo get_sub_field('section_background'); ?>!important;
}
<?php if(get_sub_field('customize_font_size')=='yes'): ?>
    <?php if(get_sub_field('title_font_size')!=''): ?>
        .window-image.Wi-<?php echo $windowImage;?> .container-custom article h3{
            font-size: <?php echo get_sub_field('title_font_size'); ?>;
        }
    <?php endif; ?>
    <?php if(get_sub_field('section_text_font_size')!=''): ?>
        .window-image.Wi-<?php echo $windowImage;?> .container-custom article p{
            font-size: <?php echo get_sub_field('section_text_font_size'); ?>;
        }
    <?php endif; ?>
    <?php if(get_sub_field('button_font_size')!=''): ?>
        .window-image.Wi-<?php echo $windowImage;?> .container-custom article a.button{
            font-size: <?php echo get_sub_field('button_font_size'); ?>;
        }
    <?php endif; ?>    
<?php endif; ?>
<?php if($windowImage < 2):?>
/*Basic Style*/
.window-image{
    padding: 100px 40px 60px;
}
.window-image + .window-image{
    padding-top: 0;
}
.window-image .container-custom{
    display: flex;
    max-width: 1470px;
    margin: 0 auto;
    position: relative;
    min-height: 500px;
}
.window-image .container-custom > div{
    flex-shrink: 0;
    width: 50%;
}
.window-image .imagePart{
    position: relative;
    overflow: hidden;
}
.window-image .imagePart .imaged{
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
}
.window-image .imagePart .imaged img{
    height: 100%;
    width: 100%;
    object-fit: cover;
}
.window-image .imagePart .windowed{
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    object-fit: cover;
    transform: scale(1.04);
    z-index: 2;
}
.window-image .infoPart{
    display: flex;
    align-items: center;
    padding: 50px 50px 50px 100px;
}
.window-image article a.button {
    margin: 0 auto 0 0;
    color: 
    #fff;
    background: var(--main_color);
    padding: 15px 45px;
    font-size: 16px;
    font-weight: 600;
}
.window-image article a.button:hover{
    background: var(--hover_color);
}
.window-image .container-custom article h3 {
    font: 500 38px/1.4 var(--original_font);
    color: #292929;
    margin: 0;
}
.window-image .container-custom article p {
    font: 400 16px/1.55 var(--body_font);
    margin: 40px 0;
}
/*parallax*/
.window-image .imagePart .imaged.parallax{
    position: absolute;
    height: 150%;
    top: 0;
    left: 0;
    width: 100%;
}
/*Sides*/
.window-image.Right .container-custom {
    flex-direction: row-reverse;
}
.window-image.Right .infoPart {
    display: flex;
    align-items: center;
    padding: 50px 100px 50px 50px;
}

/*Responsivness*//*Responsivness*//*Responsivness*/
@media(max-width:1100px){
.window-image .container-custom{
    flex-direction: column-reverse!important;
}
.window-image {
    padding-top: 40px;
}
.window-image .container-custom{
    min-height: 0;
    max-width: 730px;
    margin: 0 auto;
}
.window-image .infoPart{
    padding: 20px 0!important;
    text-align: center;
    width: 100%!important;
}
.window-image .imagePart{
    width: 100%!important;
    margin-top: 20px;
}
.window-image .imagePart .windowed{
    position: relative;
    left: auto;
    top: auto;
}
}

@media(max-width:768px){
.window-image .container-custom article h3{
    font-size: 28px;
}
.window-image .container-custom article p {
    margin-top: 15px;
}   
}

@media(max-width:600px){
.window-image {
    padding: 30px 20px 40px;
}
}
<?php endif; ?>/*End Basic Style*/
</style>
    <div class="container-custom">
        <div class="imagePart">
            <div class="imaged <?php if(get_sub_field('image_type')!='Cover' && $iosDevice != 1):?>parallax<?php endif;?>">
                <?php $image = get_sub_field('image');?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </div>            
            <img class="windowed" src="<?php echo get_template_directory_uri(); ?>/images/window-image.svg" alt="" />
        </div>
        <div class="infoPart">
            <article>
                <h3><?php echo get_sub_field('section_title'); ?></h3>
                <p><?php echo get_sub_field('section_text'); ?></p>
                <?php if(get_sub_field('button_link') != ''):?>
                    <a href="<?php echo get_sub_field('button_link'); ?>" class="button"><?php echo get_sub_field('button_text'); ?></a>
                <?php endif;?>
            </article>     
        </div>
    </div><!--End container-custom-->
<?php if(get_sub_field('image_type')!='Cover' && $iosDevice != 1):?>
    <script>
    var currentWi<?php echo $windowImage;?> = jQuery('.window-image.Wi-<?php echo $windowImage;?> .imaged');    
    
    function amountscrolledWi<?php echo $windowImage;?>(top, heiUnit){
        var scrollTop = $(window).scrollTop() - top;
        heiWindow = 1.75 * window.innerHeight;
        
        var pctScrolled = Math.floor(scrollTop/heiWindow * 100);
        //alert(pctScrolled);    
        var posTop = -pctScrolled/2 + '%';
        //alert(posTop);
        currentWi<?php echo $windowImage;?>.css('top', posTop); 
    }
    
    jQuery(window).scroll(function(){
        if(jQuery(window).scrollTop() > 0){
            var stAppear = window.innerHeight - window.innerHeight / 4;                  
            var top = currentWi<?php echo $windowImage;?>.offset().top - stAppear;
            //alert(top)
            var top2 = top + 1.75 * window.innerHeight;
            if(jQuery(window).scrollTop() > top){             
                if(jQuery(window).scrollTop() < top2){
                    amountscrolledWi<?php echo $windowImage;?>(top);    
                } 
            }    
        }
    });                
    </script>
<?php endif;?>
</section>