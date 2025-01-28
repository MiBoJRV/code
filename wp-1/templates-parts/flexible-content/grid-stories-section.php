<?php $gridStories++;?>
<section class="stories GS-<?php echo $gridStories;?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="stories-container">
        <?php $grid_section_type = get_sub_field('grid_stories_section_type'); ?>
        <?php if(get_sub_field('grid_stories_section_customize')=='yes'): ?> 
            <h2 class="boxtitle"><?php echo get_sub_field('grid_stories_section_title'); ?></h2>
            <?php if (get_field('global_sliders_arrows', get_homePageId())=='Round'): ?>
                    <div class="grid round <?php if ($grid_section_type == 'Masonry'): ?>masonry<?php else: ?>not_masonry<?php endif ?>"> 
                <?php elseif(get_field('global_sliders_arrows', get_homePageId())=='Big Arrows'): ?>
                    <div class="grid big_arrows <?php if ($grid_section_type == 'Masonry'): ?>masonry<?php else: ?>not_masonry<?php endif ?>"> 
            <?php endif ?>            
                <?php if( have_rows('grid_repeater') ): ?>
                    <?php $item_count = 1; ?>
                    <?php while( have_rows('grid_repeater') ): the_row(); ?>
                        <?php if ($grid_section_type == '10 Items'): ?>
                            <?php if ($item_count < 11): ?>
                                <div class="grid-item <?php if (get_sub_field('select_items') != ''): ?>selected<?php endif ?>">
                                    <div class="img_box">
                                        <img src="<?php the_sub_field('item_image'); ?>" alt="">
                                    </div>
                                    <div class="text_box">
                                        <h4><?php the_sub_field('item_title'); ?></h4>
                                        <div><?php the_sub_field('item_text'); ?></div>
                                        <div class="author_date">
                                            <span class="author"><?php the_sub_field('item_author'); ?></span> | 
                                            <span class="date"><?php the_sub_field('item_date'); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php $item_count++ ?>
                            <?php endif ?>
                        <?php else: ?>
                            <div class="grid-item">
                                <div class="img_box">
                                    <img src="<?php the_sub_field('item_image'); ?>" alt="">
                                </div>
                                <div class="text_box">
                                    <h4><?php the_sub_field('item_title'); ?></h4>
                                    <p><?php the_sub_field('item_text'); ?></p>
                                    <div class="author_date">
                                        <span class="author"><?php the_sub_field('item_author'); ?></span> | 
                                        <span class="date"><?php the_sub_field('item_date'); ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endif ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div><!--End grid-->
            <?php if (get_sub_field('show_modal_button') == 'yes'): ?>
                <a href="#" class="stories_form_btn">Send Story</a>
                <div class="story_modal">
                    <?=do_shortcode('[gravityform id=13 title=false description=false ajax=true tabindex=49]')?>
                    <button class="close_story_modal">&times;</button>
                </div>
            <?php endif ?>
            <?php if ($grid_section_type == '10 Items'): ?>
                <script>
                    jQuery('.stories .grid-item:not(".selected")').remove();
                </script>
            <?php endif ?>
        <?php else: ?>
            <?php
                if( have_rows('global_content', get_homePageId()) ):
                    while ( have_rows('global_content', get_homePageId()) ) : the_row();
                        if( get_row_layout() == 'global_grid_stories_section' ):
                        ?>
                            <h2 class="boxtitle"><?php echo get_sub_field('global_grid_stories_section_title'); ?></h2>
                            <?php if (get_field('global_sliders_arrows', get_homePageId())=='Round'): ?>
                                <div class="grid round <?php if ($grid_section_type == 'Masonry'): ?>masonry<?php else: ?>not_masonry<?php endif ?>"> 
                            <?php elseif(get_field('global_sliders_arrows', get_homePageId())=='Big Arrows'): ?>
                                <div class="grid big_arrows <?php if ($grid_section_type == 'Masonry'): ?>masonry<?php else: ?>not_masonry<?php endif ?>"> 
                            <?php endif ?>
                            <?php if( have_rows('global_grid_repeater') ): ?>
                                <?php $item_count = 1; ?>
                                <?php while( have_rows('global_grid_repeater') ): the_row(); ?>
                                    <?php if ($grid_section_type == '10 Items'): ?>
                                        <?php if ($item_count < 11): ?>
                                            <div class="grid-item <?php if (get_sub_field('select_items') != ''): ?>selected<?php endif ?>">
                                                <div class="img_box">
                                                    <img src="<?php the_sub_field('item_image'); ?>" alt="">
                                                </div>
                                                <div class="text_box">
                                                    <h4><?php the_sub_field('item_title'); ?></h4>
                                                    <div><?php the_sub_field('item_text'); ?></div>
                                                    <div class="author_date">
                                                        <span class="author"><?php the_sub_field('item_author'); ?></span> | 
                                                        <span class="date"><?php the_sub_field('item_date'); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php $item_count++ ?>
                                        <?php endif ?>
                                    <?php else: ?>
                                        <div class="grid-item">
                                            <div class="img_box">
                                                <img src="<?php the_sub_field('item_image'); ?>" alt="">
                                            </div>
                                            <div class="text_box">
                                                <h4><?php the_sub_field('item_title'); ?></h4>
                                                <p><?php the_sub_field('item_text'); ?></p>
                                                <div class="author_date">
                                                    <span class="author"><?php the_sub_field('item_author'); ?></span> | 
                                                    <span class="date"><?php the_sub_field('item_date'); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            </div><!--End stories-box-->
                            <?php if (get_sub_field('show_modal_button') == 'yes'): ?>
                                <a href="#" class="stories_form_btn">Send Story</a>
                                <div class="story_modal">
                                    <?=do_shortcode('[gravityform id=13 title=false description=false ajax=true tabindex=49]')?>
                                    <button class="close_story_modal">&times;</button>
                                </div>
                            <?php endif ?>
                            <?php if ($grid_section_type == '10 Items'): ?>
                                <script>
                                    jQuery('.stories .grid-item:not(".selected")').remove();
                                </script>
                            <?php endif ?>
                        <?php endif;
                    endwhile;
                endif; ?>
        <?php endif; ?>
    </div><!--End stories-container-->
<style>
<?php if(get_sub_field('customize_font_size')=='yes'): ?>
.stories.GS-<?php echo $gridStories;?> h2.boxtitle {
    font-size: <?php the_sub_field('section_title_font_size'); ?>;
}
.stories.GS-<?php echo $gridStories;?> .stories-block-txt h4 {
    font-size: <?php the_sub_field('item_title_font_size'); ?>;
}
.stories.GS-<?php echo $gridStories;?> .stories-block-txt p {
    font-size: <?php the_sub_field('item_text_font_size'); ?>;
}
<?php endif; ?>
<?php if($gridStories < 2):?>
/*Basic Styles*/
.stories {
    padding: 70px 0;
    background-color: #F3F3F3;
    text-align: center;
}
.stories h2.boxtitle {
    margin-bottom: 50px;
    color: #4A4A4A;
}
.stories .grid {
    text-align: left;
    position: relative;
    padding: 0 20px;
    margin-bottom: 50px;
}
.stories .grid:after {
    content: '';
    display: block;
    clear: both;
}
.stories .grid.not_masonry {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    grid-auto-rows: auto;
    grid-gap: 20px;
}
.stories .grid.not_masonry .grid-item {
    position: relative;
    width: 100%;
    cursor: pointer;
    overflow: hidden;
}
.stories .grid.not_masonry .grid-item:nth-child(1) {
    grid-row: 1 / 3;
    height: 500px;
}
.stories .grid.not_masonry .grid-item:nth-child(2) {
    grid-row: 3;
    height: 200px;
}
.stories .grid.not_masonry .grid-item:nth-child(3) {
    grid-column: 2;
    grid-row: 1;
    height: 200px;
}
.stories .grid.not_masonry .grid-item:nth-child(4) {
    grid-row: 2 / 4;
    grid-column: 2;
    height: 500px;
}
.stories .grid.not_masonry .grid-item:nth-child(5) {
    grid-row: 1 / 3;
    grid-column: 3;
    height: 500px;
}
.stories .grid.not_masonry .grid-item:nth-child(6) {
    grid-row: 3;
    grid-column: 3;
    height: 200px;
}
.stories .grid.not_masonry .grid-item:nth-child(7) {
    grid-row: 1;
    grid-column: 4;
    height: 200px;
}
.stories .grid.not_masonry .grid-item:nth-child(8) {
    grid-row: 2 / 4;
    grid-column: 4;
    height: 500px;
}
.stories .grid.not_masonry .grid-item:nth-child(9) {
    grid-row: 1 / 3;
    grid-column: 5;
    height: 500px;
}
.stories .grid.not_masonry .grid-item:nth-child(10) {
    grid-row: 3;
    grid-column: 5;
    height: 200px;
}
.stories .grid.masonry .grid-item {
    width: calc(20% - 25px);
    cursor: pointer;
    margin-bottom: 20px;
    overflow: hidden;
}
.stories .grid-item .img_box {
    width: 100%;
    height: 100%;
    overflow: hidden;
}
.stories .grid-item img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s;
}
.stories .grid-item:hover .img_box img{
    transform: scale(1.2);
}
.stories .grid-item .text_box {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    transform: translateY(105%);
    max-height: 100%;
    overflow: auto;
    background: rgba(0,0,0,.6);
    padding: 20px;
    color: #fff;
    border-bottom: 10px solid var(--main_color);
    transition: .4s;
}
.stories .grid-item:hover .text_box {
    transform: translateY(0%);
}
.stories .grid-item .text_box h4 {
    margin-top: 0;
    margin-bottom: 20px;
}
.stories .grid-item .text_box .author_date {
    margin-top: 20px;
}
.stories .grid-item .text_box .author_date .author {
    font-weight: bold;
    text-transform: uppercase;
}
.stories .stories_form_btn {
    width: 30%;
    display: inline-block;
    padding: 20px 5px;
    color: #fff;
    font-size: 18px;
    font-weight: bold;
    text-transform: uppercase;
    background: var(--main_color);
    border-radius: 80px;
}
.stories .stories_form_btn:hover {
    background: var(--hover_color);
}

/*Modal*/
.stories .story_modal {
    position: fixed;
    top: 55%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 90%;
    max-width: 800px;
    background: #f2f2f2;
    box-shadow: 0 0 40px rgba(0, 0, 0, 0.17);
    z-index: 999;
    display: none;
}
.stories .story_modal .story_modal_title {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    margin: 0;
    padding: 20px 10px;
    text-align: center;
    color: #fff;
    background: var(--main_color);
}
.stories .story_modal .gform_wrapper {
    padding: 100px 40px 20px;
}
.stories .story_modal .gform_wrapper .gform_body > ul.gform_fields {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
.stories .story_modal .gform_wrapper .gform_body > ul.gform_fields li {
    width: 100%;
}
.stories .story_modal .gform_wrapper .gform_body > ul.gform_fields > li:nth-child(1),
.stories .story_modal .gform_wrapper .gform_body > ul.gform_fields > li:nth-child(2) {
    width: 49% !important;
    margin-top: 0;
}
.stories .story_modal .gform_wrapper .gform_body div.ginput_container {
    margin-top: 0 !important;
}
.stories .story_modal .gform_wrapper .gform_body > ul.gform_fields li input,
.stories .story_modal .gform_wrapper .gform_body > ul.gform_fields li textarea {
    background: none;
    border: 1px solid #ccc;
    padding-left: 10px !important;
}
.stories .story_modal .gform_body .gform_fields .gform_drop_area {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
}
.stories .story_modal .gform_drop_area .gform_drop_instructions {
    margin: 0;
    display: inline-block;
    color: #000;
    font-size: 18px;
    font-weight: bold;
}
.stories .story_modal .gform_drop_area .gform_button_select_files {
    width: auto !important;
    height: auto;
    padding: 6px 12px!important;
    font-size: 16px;
}
.stories .story_modal #field_13_6 {
    margin-top: 0;
}
.stories .story_modal .gfield_checkbox label {
    display: inline-block !important;
    color: #000;
}
.stories .story_modal .gfield_checkbox input {
    height: auto;
}
.stories .story_modal .gform_wrapper .gform_footer {
    text-align: center;
}
.stories .story_modal .gform_wrapper .gform_footer input {
    width: 50% !important;
    background: var(--main_color) !important;
    color: #fff;
    height: auto;
    font-size: 18px;
    padding: 15px 10px;
    border-radius: 40px;
    cursor: pointer;
}
.stories .story_modal .gform_wrapper .gform_footer input:hover {
    background: var(--hover_color) !important;
}
.stories .story_modal .gform_wrapper div.validation_error {
    display: none;
}
.stories .story_modal .gform_wrapper.gform_validation_error .gform_body ul li.gfield.gfield_error:not(.gf_left_half):not(.gf_right_half) {
    max-width: 100% !important;
}
.stories .story_modal .close_story_modal {
    position: absolute;
    top: 0;
    right: 0;
    transform: translate(50%, -50%);
    width: 40px;
    height: 40px;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    background: var(--main_color);
    color: #fff;
    font-size: 28px;
    border: 3px solid #fff;
    border-radius: 50%;
    box-shadow: 0 0 7px rgba(0, 0, 0, 0.13);
    transition: .3s;
    z-index: 1;
    cursor: pointer;
    outline: none;
    line-height: 1.2;
}
.stories .story_modal .close_story_modal:hover {
    color: #000;
    background: var(--hover_color);
}
.stories .story_modal .gform_confirmation_message {
    font-size: 24px;
    color: #2a2a2a;
    padding: 25px 10px;
}


/*Responsivness*//*Responsivness*//*Responsivness*/
@media(max-width: 1400px) {
.stories .grid.not_masonry .grid-item:nth-child(1),
.stories .grid.not_masonry .grid-item:nth-child(4),
.stories .grid.not_masonry .grid-item:nth-child(5),
.stories .grid.not_masonry .grid-item:nth-child(8),
.stories .grid.not_masonry .grid-item:nth-child(9) {
    height: 350px;
}
.stories .grid.not_masonry .grid-item:nth-child(2),
.stories .grid.not_masonry .grid-item:nth-child(3),
.stories .grid.not_masonry .grid-item:nth-child(6),
.stories .grid.not_masonry .grid-item:nth-child(7),
.stories .grid.not_masonry .grid-item:nth-child(10) {
    height: 150px;
}
.stories .grid.not_masonry .grid-item .text_box {
    padding: 10px 15px;
}
.stories .grid.not_masonry .grid-item .text_box h4 {
    margin-bottom: 10px;
}
.stories .grid.not_masonry .grid-item .text_box .author_date {
    margin-top: 10px;
}
}


@media(max-width: 1199px) and (min-width: 768px) {
.stories .grid.not_masonry .grid-item {
    height: 250px !important;
}
}
@media(max-width: 1199px) {
.stories .grid.not_masonry {
    grid-template-columns: 1fr 1fr 1fr;
}
.stories .grid.not_masonry .grid-item {
    width: 100%;
}
.stories .grid.not_masonry .grid-item:nth-child(1) {
    grid-row: 1;
    grid-column: 1 / 3;
}
.stories .grid.not_masonry .grid-item:nth-child(2) {
    grid-row: 1;
    grid-column: 3;
}
.stories .grid.not_masonry .grid-item:nth-child(3) {
    grid-column: 1;
    grid-row: 2;
}
.stories .grid.not_masonry .grid-item:nth-child(4) {
    grid-row: 2;
    grid-column: 2 / 4;
}
.stories .grid.not_masonry .grid-item:nth-child(5) {
    grid-row: 3;
    grid-column: 1 / 3;
}
.stories .grid.not_masonry .grid-item:nth-child(6) {
    grid-row: 3;
    grid-column: 3;
}
.stories .grid.not_masonry .grid-item:nth-child(7) {
    grid-row: 4;
    grid-column: 1;
}
.stories .grid.not_masonry .grid-item:nth-child(8) {
    grid-row: 4;
    grid-column: 2 / 4;
}
.stories .grid.not_masonry .grid-item:nth-child(9) {
    grid-row: 5;
    grid-column: 1 / 3;
}
.stories .grid.not_masonry .grid-item:nth-child(10) {
    grid-row: 5;
    grid-column: 3;
}
.stories .grid.masonry .grid-sizer, .stories .grid.masonry .grid-item {
    width: calc(25% - 25px);
}
}
@media(max-width: 1400px) {
.stories .grid.masonry .grid-item .text_box {
    padding: 10px 15px;
}
.stories .grid.masonry .grid-item .text_box h4 {
    margin-bottom: 10px;
}
.stories .grid.masonry .grid-item .text_box .author_date {
    margin-top: 10px;
}
}

@media(max-width: 1199px) {
.stories .story_modal {
    top: 60%;
}
.stories .story_modal .gform_wrapper {
    padding-top: 70px;
}
.stories .story_modal .story_modal_title {
    padding: 10px;
    font-size: 26px;
}
}
@media screen and (max-width: 991px) {
.stories h2.boxtitle {
    margin-bottom: 30px;
    font-size: 38px;
}
.stories {
    padding: 50px 0;
}    
}

@media(max-width: 767px) {
.stories .grid.not_masonry {
    margin-bottom: 0;
    display: block;
}
.stories .grid-item:nth-child(even),
.stories .grid-item:nth-child(odd) {
    height: 270px !important;
}
.stories .story_modal .story_modal_title {
    font-size: 22px;
}
.stories .story_modal .gform_wrapper .gform_footer input {
    width: 75% !important;
    padding: 10px;
}
.stories .story_modal .gform_wrapper {
    padding: 60px 20px 20px;
}
.stories .story_modal {
    top: 55%;
}
.stories .stories_form_btn {
    width: 65%;
    padding: 15px 5px;
}
.stories .round .slick-prev,
.stories .round .slick-next {
    transform: none;
}
}

@media(max-width: 400px) {
.stories .story_modal .story_modal_title {
    font-size: 20px;
}
}
<?php endif; ?>
</style>
<?php if($masonry < 2 && $grid_section_type == 'Masonry'):?>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <?php $masonry++;?>   
<?php endif; ?> 
<?php if($imageLoader < 2 && $grid_section_type == 'Masonry'):?>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <?php $imageLoader++;?>
<?php endif; ?> 
     
<?php if($grid_section_type == 'Masonry'):?>
    <script>
        function storyMasonry<?php echo $gridStories;?>(){
            // init Masonry
            var $storyGrid<?php echo $gridStories;?> = jQuery('.grid.masonry').masonry({
                itemSelector: '.grid-item',
                percentPosition: true,
                gutter: 20,
            });
            // layout Masonry after each image loads
            $storyGrid<?php echo $gridStories;?>.imagesLoaded().progress( function() {
                $storyGrid<?php echo $gridStories;?>.masonry();
            });
        }
        jQuery(document).ready(function() {
            if (jQuery(window).innerWidth() > 767){
                storyMasonry<?php echo $gridStories;?>();
            }
        })
    </script>
<?php endif;?>
<?php if($grid_section_type == '10 Items'):?>
    <script>
        jQuery(document).ready(function(){
            if (jQuery(window).innerWidth() < 768){
                jQuery('.stories.GS-<?php echo $gridStories;?> .grid-sizer').remove();
                jQuery('.stories.GS-<?php echo $gridStories;?> .grid').slick({
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    prevArrow: prevArr,
                    nextArrow: nextArr
                });
            }
        });/*End ready function*/
    
        jQuery('.stories.GS-<?php echo $gridStories;?> .stories_form_btn').click(function(e) {
            e.preventDefault();
            jQuery('.stories.GS-<?php echo $gridStories;?> .story_modal').show(500);
        })
    
        jQuery('.stories.GS-<?php echo $gridStories;?> .story_modal .close_story_modal').click(function() {
            jQuery('.stories.GS-<?php echo $gridStories;?> .story_modal').hide(300);
        })
    </script>
<?php endif;?>
</section><!--End stories-->