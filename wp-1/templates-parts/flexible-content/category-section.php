<?php $categorySection++;?>
<div class="
        category 
        <?php if (get_sub_field('category_section_type')=='Slider'): ?>slidered<?php endif ?> 
        <?php echo get_sub_field('custom_class'); ?>
        category-<?php echo $categorySection; ?>
    ">
<style>
<?php if(get_sub_field('customize_font_size')=='yes'): ?>
.category.category-<?php echo $category; ?> h2.boxtitle {
    font-size: <?php the_sub_field('section_title_font_size'); ?>;
}
.category.category-<?php echo $category; ?> .category-box .category-block-txt .blocktitle {
    font-size: <?php the_sub_field('titles_font_size'); ?>;
}
.category.category-<?php echo $category; ?> .category-box .category-block-txt .blocktext {
    font-size: <?php the_sub_field('text_font_size'); ?>;
}
<?php endif; ?>

<?php if($categorySection < 2):?>
/*Basic Styles*/
.category {
    padding: 70px 0 120px;
    background: #F3F3F3;
}
.category h2.boxtitle {
    margin-bottom: 38px;
    text-align: center;
    color: #4A4A4A;
}
.category-box {
    display: flex;
    padding: 0 5px;
}
.category-box .category-block {
    height: 375px;
    width: calc(100% / 5);
    position: relative;
    overflow: hidden;
    display: block;
    z-index: 23;
    margin: 5px;
}
.category-block:hover .category-block-img img{
    transform: scale(1.1);
}
.category-box .category-block-img {
    background: #000;
    position: relative;
    height: 100%;
}
.category-box .category-block-img img {
    display: block;
    opacity: 0.7;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.category-box .category-block-txt {
    width: 100%;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    position: absolute;
    z-index: 22;
    text-align: center;
    color: #fff;
    padding: 0 10px;
}
.category-box .category-block-txt .blocktitle {
    margin: 0;
}
.category-box .category-block-txt .blocktext {
    line-height: 1.6;
}
.category-box .category-border {
    top: 10px;
    right: 10px;
    left: 10px;
    bottom: 10px;
    position: absolute;
    border: 1px solid #fff;
}
.category-box.big_arrows button.slick-prev {
    top: auto;
    bottom: 0;
    left: 50%;
    transform: translate(-80px, 100%);
}
.category-box.big_arrows button.slick-next {
    top: auto;
    bottom: 0;
    right: 50%;
    transform: translate(80px, 100%);
}
.category-box.round .slick-prev {
    top: auto;
    bottom: 0;
    left: calc(50% + 10px);
    transform: translate(-80px, 150%);
}
.category-box.round .slick-next {
    top: auto;
    bottom: 0;
    right:calc(50% + 10px);
    transform: translate(80px, 150%);
}
.category-box .slick-track{
    margin:0 auto;
}

/*Responsivness*//*Responsivness*/
@media screen and (max-width: 1200px) {
.category-box {
    flex-wrap: wrap;
}
.category-box .category-block {
    flex: 32%;
}    
}

@media screen and (max-width: 991px) {
.category h2.boxtitle {
    margin-bottom: 30px;
    font-size: 38px;
}
.category {
    padding: 50px 0 90px;
}    
}

@media screen and (max-width: 767px) {
.category-box .category-block {
    width: 300px;
}
.category-box .category-block {
    width: 300px;
}
}

@media screen and (max-width: 480px) {
.category-box .category-block {
    flex: 100%;
    height: 200px;
    margin: 5px 5px 0 5px;
}
.category-box {
    padding: 0;
}
}
<?php endif; ?>/*End Basic Styles*/
</style>
    <h2 class="boxtitle"><?php echo get_sub_field('category_section_title'); ?></h2>
    <?php if(get_sub_field('customize_category_section')=='yes'): ?>
        <?php if(get_sub_field('category_section_type')=='6 Blocks'): ?>
            <div class="category-box">
                <div class="category-block">
                    <a href="<?php echo get_sub_field('category_section_first_block_link'); ?>">
                        <div class="category-block-txt"><?php echo get_sub_field('category_section_first_block_text'); ?></div>
                        <div class="category-block-img">
                            <img src="<?php echo get_sub_field('category_section_first_block_image'); ?>" alt="#">
                        </div>
                        <div class="category-border"></div>
                    </a>
                </div><!--end category-block-->
                <div class="category-block">
                    <a href="<?php echo get_sub_field('category_section_second_block_link'); ?>">
                        <div class="category-block-txt"><?php echo get_sub_field('category_section_second_block_text'); ?></div>
                        <div class="category-block-img">
                            <img src="<?php echo get_sub_field('category_section_second_block_image'); ?>" alt="#">
                        </div>
                        <div class="category-border"></div>
                    </a>
                </div><!--end category-block-->
                <div class="category-block">
                    <a href="<?php echo get_sub_field('category_section_third_block_link'); ?>">
                        <div class="category-block-txt"><?php echo get_sub_field('category_section_third_block_text'); ?></div>
                        <div class="category-block-img">
                            <img src="<?php echo get_sub_field('category_section_third_block_image'); ?>" alt="#">
                        </div>
                        <div class="category-border"></div>
                    </a>
                </div><!--end category-block-->
                <div class="category-block">
                    <a href="<?php echo get_sub_field('category_section_four_block_link'); ?>">
                        <div class="category-block-txt"><?php echo get_sub_field('category_section_four_block_text'); ?></div>
                        <div class="category-block-img">
                            <img src="<?php echo get_sub_field('category_section_four_block_image'); ?>" alt="#">
                        </div>
                        <div class="category-border"></div>
                    </a>
                </div><!--end category-block-->
                <div class="category-block">
                    <a href="<?php echo get_sub_field('category_section_five_block_link'); ?>">
                        <div class="category-block-txt"><?php echo get_sub_field('category_section_five_block_text'); ?></div>
                        <div class="category-block-img">
                            <img src="<?php echo get_sub_field('category_section_five_block_image'); ?>" alt="#">
                        </div>
                        <div class="category-border"></div>
                    </a>
                </div><!--end category-block-->
                <div class="category-block">
                    <a href="<?php echo get_sub_field('category_section_six_block_link'); ?>">
                        <div class="category-block-txt"><?php echo get_sub_field('category_section_six_block_text'); ?></div>
                        <div class="category-block-img">
                            <img src="<?php echo get_sub_field('category_section_six_block_image'); ?>" alt="#">
                        </div>
                        <div class="category-border"></div>
                    </a>
                </div><!--end category-block-->
            </div><!--end category-box-->
        <?php elseif(get_sub_field('category_section_type')=='Slider'): ?>
            <?php if (get_field('global_sliders_arrows', get_homePageId()) == 'Round'): ?>
                    <div class="category-box round"> 
            <?php elseif(get_field('global_sliders_arrows', get_homePageId())=='Big Arrows'): ?>
                    <div class="category-box big_arrows"> 
            <?php endif ?>
                <?php if( have_rows('category_section_repeater') ): ?>
                    <?php while( have_rows('category_section_repeater') ): the_row(); ?>
                        <div class="category-block">
                            <a href="<?php echo get_sub_field('item_link'); ?>">
                                <div class="category-block-txt"><?php echo get_sub_field('item_text'); ?></div>
                                <div class="category-block-img">
                                    <img src="<?php echo get_sub_field('item_image'); ?>" alt="#">
                                </div>
                                <div class="category-border"></div>
                            </a>
                        </div><!--end category-block-->
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    <?php else: ?>
            <div class="category-box">
                <div class="category-block">
                    <a href="#">
                        <div class="category-block-txt">
                            <h3 class="blocktitle">Ocean View</h3>
                            <p class="blocktext">LEARN MORE</p>
                        </div>
                        <div class="category-block-img">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/home-page-images/image_152568008.jpeg" alt="#">
                        </div>
                        <div class="category-border"></div>
                    </a>
                </div><!--end category-block-->
                <div class="category-block">
                    <a href="#">
                        <div class="category-block-txt">
                            <h3 class="blocktitle">Private Homes</h3>
                            <p class="blocktext">LEARN MORE</p>
                        </div>
                        <div class="category-block-img">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/home-page-images/image_152568009.jpeg" alt="#">
                        </div>
                        <div class="category-border"></div>
                    </a>
                </div><!--end category-block-->
                <div class="category-block">
                    <a href="#">
                        <div class="category-block-txt">
                            <h3 class="blocktitle">Ocean Front</h3>
                            <p class="blocktext">LEARN MORE</p>
                        </div>
                        <div class="category-block-img">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/home-page-images/image_152568827.jpeg" alt="#">
                        </div>
                        <div class="category-border"></div>
                    </a>
                </div><!--end category-block-->
                <div class="category-block">
                    <a href="#">
                        <div class="category-block-txt">
                            <h3 class="blocktitle">1 Bedroom</h3>
                            <p class="blocktext">LEARN MORE</p>
                        </div>
                        <div class="category-block-img">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/home-page-images/image_152568007.jpeg" alt="#">
                        </div>
                        <div class="category-border"></div>
                    </a>
                </div><!--end category-block-->
                <div class="category-block">
                    <a href="#">
                        <div class="category-block-txt">
                            <h3 class="blocktitle">2 Bedrooms</h3>
                            <p class="blocktext">LEARN MORE</p>
                        </div>
                        <div class="category-block-img">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/home-page-images/image_152568011.jpeg" alt="#">
                        </div>
                        <div class="category-border"></div>
                    </a>
                </div><!--end category-block-->
                <div class="category-block">
                    <a href="#">
                        <div class="category-block-txt">
                            <h3 class="blocktitle">3 Bedrooms</h3>
                            <p class="blocktext">LEARN MORE</p>
                        </div>
                        <div class="category-block-img">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/home-page-images/image_152568014.jpeg" alt="#">
                        </div>
                        <div class="category-border"></div>
                    </a>
                </div><!--end category-block-->
            </div><!--end category-box-->        
    <?php endif; ?>
<?php if (get_sub_field('category_section_type')=='Slider'): ?>
    <?php if($slick < 2):?>
        <?php $slick++;?>
        <script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
    <?php endif;?>
    
<script>
if(jQuery('.category-<?php echo $categorySection; ?> .category-box').hasClass('round')) {
    var prevArr = '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button"><img style="transform: rotate(180deg);" src="/wp-content/themes/BizcorLuxury/images/home-page-images/down-arrow-white.png" alt="arrow"/></button>';
    var nextArr = '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><img src="/wp-content/themes/BizcorLuxury/images/home-page-images/down-arrow-white.png" alt="arrow"/></button>';       
} else if(jQuery('.category-<?php echo $categorySection; ?> .category-box').hasClass('big_arrows')) {
    var prevArr = '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button"><img style="transform: rotate(180deg);" src="/wp-content/themes/BizcorLuxury/images/down-arrow.png" alt="arrow"/></button>';
    var nextArr = '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><img src="/wp-content/themes/BizcorLuxury/images/down-arrow.png" alt="arrow"/></button>';
}

    jQuery('.slidered.category-<?php echo $categorySection; ?> .category-box').slick({
        centerMode: false,
        centerPadding: '60px',
        prevArrow: prevArr,
        nextArrow: nextArr,
        slidesToShow: 6,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 991,
                settings: {
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 767,
                settings: {
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });
</script>
<?php endif ?>
</div><!--End category-->