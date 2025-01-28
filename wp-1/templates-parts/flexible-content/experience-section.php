<?php $experienceSec++;?>
<section class="experience <?php echo get_sub_field('custom_class'); ?> experience-<?php echo $experienceSec;?>">
    <h2 class="boxtitle"><?php echo get_sub_field('experience_section_title'); ?></h2>
    <?php if(get_sub_field('customize_experience_section')=='yes'): ?>    
            <div class="experience-box">
                <div class="experience-block">
                    <a href="<?php echo get_sub_field('experience_section_first_block_link'); ?>">
                        <div class="experience-img">
                            <img src="<?php echo get_sub_field('experience_section_first_block_image'); ?>" alt="#">
                        </div>
                        <div class="experience-txt positioned centered"><?php echo get_sub_field('experience_section_first_block_text'); ?></div>
                        <div class="experience-block-border"></div>
                    </a>
                </div><!--End experience-block-item -->
                <div class="experience-block">
                    <a href="<?php echo get_sub_field('experience_section_second_block_link'); ?>">
                        <div class="experience-img">
                            <img src="<?php echo get_sub_field('experience_section_second_block_image'); ?>" alt="#">
                        </div>
                        <div class="experience-txt positioned centered"><?php echo get_sub_field('experience_section_second_block_text'); ?></div>
                        <div class="experience-block-border"></div>
                    </a>
                </div><!--End experience-block-item -->
                <div class="experience-block">
                    <a href="<?php echo get_sub_field('experience_section_third_block_link'); ?>">
                        <div class="experience-img">
                            <img src="<?php echo get_sub_field('experience_section_third_block_image'); ?>" alt="#">
                        </div>
                        <div class="experience-txt positioned centered"><?php echo get_sub_field('experience_section_third_block_text'); ?></div>
                        <div class="experience-block-border"></div>
                    </a>
                </div><!--End experience-block-item -->
                <div class="experience-block">
                    <a href="<?php echo get_sub_field('experience_section_four_block_link'); ?>">
                        <div class="experience-img">
                            <img src="<?php echo get_sub_field('experience_section_four_block_image'); ?>" alt="#">
                        </div>
                        <div class="experience-txt positioned centered"><?php echo get_sub_field('experience_section_four_block_text'); ?></div>
                        <div class="experience-block-border"></div>
                    </a>
                </div><!--End experience-block -->
            </div>
        <?php else: ?>
            <div class="experience-box">
                <div class="experience-block">
                    <a href="#">
                        <div class="experience-img">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/home-page-images/mussels-500x500.jpg" alt="#">
                        </div>
                        <div class="experience-txt positioned centered">
                            <h3 class="blocktitle">Dining</h3>
                            <p class="blocktext">LEARN MORE</p>
                        </div>
                        <div class="experience-block-border"></div>
                    </a>
                </div><!--End experience-block-item -->
                <div class="experience-block">
                    <a href="#">
                        <div class="experience-img">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/home-page-images/maria-12-500x500.jpeg" alt="#">
                        </div>
                        <div class="experience-txt positioned centered">
                            <h3 class="blocktitle">Explore</h3>
                            <p class="blocktext">LEARN MORE</p>
                        </div>
                        <div class="experience-block-border"></div>
                    </a>
                </div><!--End experience-block-item -->
                <div class="experience-block">
                    <a href="#">
                        <div class="experience-img">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/home-page-images/img4.jpg" alt="#">
                        </div>
                        <div class="experience-txt positioned centered">
                            <h3 class="blocktitle">Golf</h3>
                            <p class="blocktext">LEARN MORE</p>
                        </div>
                        <div class="experience-block-border"></div>
                    </a>
                </div><!--End experience-block-item -->
                <div class="experience-block">
                    <a href="#">
                        <div class="experience-img">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/home-page-images/Big-Island-Harbor-at-Sunset-500x500.jpg" alt="#">
                        </div>
                        <div class="experience-txt positioned centered">
                            <h3 class="blocktitle">Concierge</h3>
                            <p class="blocktext">LEARN MORE</p>
                        </div>
                        <div class="experience-block-border"></div>
                    </a>
                </div><!--End experience-block -->
            </div>    
    <?php endif; ?>
<style>
<?php if(get_sub_field('customize_font_size')=='yes'): ?>
.experience.experience-<?php echo $experienceSec;?> h2.boxtitle {
    font-size: <?php the_sub_field('section_title_font_size'); ?>;
}
.experience.experience-<?php echo $experienceSec;?> .experience-txt .blocktitle {
    font-size: <?php the_sub_field('titles_font_size'); ?>;
}
.experience.experience-<?php echo $experienceSec;?> .experience-txt .blocktext {
    font-size: <?php the_sub_field('text_font_size'); ?>;
}
<?php endif; ?>
<?php if($experienceSec < 2):?>
/*Basic Styles*/
.experience{
    margin-bottom: 80px;
}
.experience h2.boxtitle {
    margin-bottom: 43px;
    text-align: center;
    color: #4A4A4A;
}
.experience-box {
    display: flex;
    justify-content: center;
}
.experience-box .experience-block {
    overflow: hidden;
    display: block;
    position: relative;
    max-height: 400px;
    max-width: 400px;
    width: 100%;
    margin: 10px;
}
.experience-txt {
    z-index: 1;
    text-align: center;
    color: #fff;
}
.experience-txt .blocktitle {
    margin-top: 0;
    margin-bottom: 10px;
}
.experience-block .experience-block-border {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(255,255,255, 0);
    transition: all linear .3s;
    border: 2px solid transparent;
}
.experience-box .experience-img {
    background: #000;
    position: relative;
    height: 100%;
}
.experience-box .experience-img img{
    display: block;
    opacity: 0.7;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.experience-box .experience-block:hover .experience-block-border {
    top: 10px;
    left: 10px;
    right: 10px;
    bottom: 10px;
    background: rgba(255,255,255, .6);
    border: 2px solid #fff;
}
.experience-box .experience-block:hover .blocktext {
    color: #000000;
}
.experience-box .experience-block:hover .blocktitle {
    color: #000000;
}
.experience-box .experience-block:hover .experience-img img{
    transform: scale(1.1);
}

/*Responsivness*//*Responsivness*//*Responsivness*/
@media screen and (max-width: 1200px){
.experience-box .experience-block {
    margin: 5px;
}
.experience-box .experience-block:first-child {
    margin-left: 10px;
}
.experience-box .experience-block:last-child {
    margin-right: 10px;
}    
}

@media screen and (max-width: 991px) {
.experience-box {
    padding: 0 10px;
    flex-wrap: wrap;
}
.experience {
    margin-bottom: 50px;
}
.experience-box .experience-block {
    flex: 50%;
    max-width: 350px;
    max-height: 350px;
}
.experience-box .experience-block:first-child {
    margin-left: 5px
}
.experience-box .experience-block:last-child {
    margin-right: 5px;
}    
}

@media screen and (max-width: 767px) {
.experience-box .experience-block:first-child {
    margin-left: 5px;
}
.experience-box .experience-block:first-child {
    margin-right: 5px;
}
.experience-box .experience-block {
    max-height: none;
    max-width: none;
    flex: 46%;
}
.experience h2.boxtitle{
    font-size: 32px;
    margin-bottom: 20px;
}   
}

@media screen and (max-width: 480px) {
.experience-box .experience-block {
    flex: 0 0 100%;
}    
}
<?php endif; ?>
</style>
<script>
    function expItems<?php echo $experienceSec;?>(){
        var bI = jQuery('.experience-box .experience-img').width()/469 * 471;
        jQuery('.experience-box .experience-img').height(bI);                     
    }
    expItems<?php echo $experienceSec;?>();

    jQuery(window).resize(function() {
        expItems<?php echo $experienceSec;?>();
    })
</script>
</section><!--End experience-->










