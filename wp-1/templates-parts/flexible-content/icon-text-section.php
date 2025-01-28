<?php global $bangIconText;
$bangIconText++; ?>
<section class="iconText IT-<?php echo $bangIconText; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="container-custom">
        <?php if (get_sub_field('section_title') != '' || get_sub_field('section_text') != ''): ?>
            <article class="topText">
                <?php if (get_sub_field('section_title') != ''): ?>
                    <h2><?php echo get_sub_field('section_title'); ?></h2>
                <?php endif; ?>
                <?php if (get_sub_field('section_text') != ''): ?>
                    <p><?php echo get_sub_field('section_text'); ?></p>
                <?php endif; ?>
            </article>
        <?php endif; ?>
        <div class="itemList customClear">
            <?php if (get_sub_field('content_type') == 'Icon'): ?>
                <?php if (have_rows('section_repeater')): ?>
                    <?php while (have_rows('section_repeater')): the_row(); ?>
                        <div class="itemIcon">
                            <div class="box">
                                <div class="imagePart">
                                    <?php $image = get_sub_field('item_image'); ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                                </div>
                                <article>
                                    <?php if (get_sub_field('item_title') != ''): ?>
                                        <h4><?php echo get_sub_field('item_title'); ?></h4>
                                    <?php endif; ?>
                                    <?php if (get_sub_field('item_text') != ''): ?>
                                        <p><?php echo get_sub_field('item_text'); ?></p>
                                    <?php endif; ?>
                                </article>
                            </div><!--end box-->
                        </div><!--end itemIcon-->
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php else: ?>
                <div class="column leftColumn">
                    <?php $float = 1; ?>
                    <?php if (have_rows('section_repeater')): ?>
                        <?php while (have_rows('section_repeater')): the_row(); ?>
                            <?php if ($float % 2 != 0): ?>
                                <div class="itemText">
                                    <div class="imagePart">
                                        <?php $image = get_sub_field('item_image'); ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                                    </div>
                                    <article>
                                        <?php if (get_sub_field('item_title') != ''): ?>
                                        <h5><?php echo get_sub_field('item_title'); ?></h5>
                                            <?php endif; ?>
                                            <?php if (get_sub_field('item_text') != ''): ?>
                                                <p><?php echo get_sub_field('item_text'); ?></p>
                                            <?php endif; ?>
                                    </article>
                                </div>
                            <?php endif; ?>
                            <?php $float++; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div><!--End leftColumn-->
                <div class="column rightColumn">
                    <?php $float = 1; ?>
                    <?php if (have_rows('section_repeater')): ?>
                        <?php while (have_rows('section_repeater')): the_row(); ?>
                            <?php if ($float % 2 == 0): ?>
                                <div class="itemText">
                                    <div class="imagePart">
                                        <?php $image = get_sub_field('item_image'); ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                                    </div>
                                    <article>
                                        <?php if (get_sub_field('item_title') != ''): ?>
                                        <h5><?php echo get_sub_field('item_title'); ?></h5>
                                            <?php endif; ?>
                                            <?php if (get_sub_field('item_text') != ''): ?>
                                                <p><?php echo get_sub_field('item_text'); ?></p>
                                            <?php endif; ?>
                                    </article>
                                </div>
                            <?php endif; ?>
                            <?php $float++; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div><!--End rightColumn-->
            <?php endif; ?>
        </div><!--end itemList-->
    </div><!--End container-->
    <style>
        .iconText.IT-<?php echo $bangIconText;?> {
            background-color: <?php if(get_sub_field('section_background')!=''):?> <?php echo get_sub_field('section_background'); ?> <?php else: ?> #fff<?php endif;?>;
        }
        /*.iconText.amenities{
            background-image: url('/wp-content/uploads/2020/06/stowe-mountain-rentals.png');
            background-size: cover;
            background-blend-mode: luminosity;
            background-repeat: no-repeat;
        }*/
        <?php if($bangIconText < 2):?>
        /*Basic Style*//*Basic Style*/
        .iconText .container-custom {
            margin: 0 auto;
            max-width: 1500px;
            padding: 90px 15px;
        }
        .iconText.pm-text .container-custom {
            max-width: 1210px;
            padding: 70px 15px;
        }
        .iconText article.topText {
            text-align: center;
        }
        .iconText article.topText h2 {
            margin-bottom: 50px;
            color: #FFFFFF;
            font: ;
        }
        .iconText.amenities article.topText h2 {
            color: #fff;
        }
        /*Icon Type*/
        .iconText .itemList .itemIcon {
            width: 33.333%;
            padding: 13px;
            float: left;
            transition: all 0.4s;
        }
        .iconText .itemList .itemIcon:hover {
            transform: scale(1.05);
        }
        .iconText .itemList .itemIcon .box {
            box-shadow: 0px 3px 30px rgba(0, 0, 0, 0.12);
            background: #fff;
            text-align: center;
            padding: 35px;
        }
        .iconText .itemList .itemIcon .imagePart {
            margin-bottom: 20px;
            height: 65px;
        }
        .iconText .itemList .itemIcon .imagePart img {
            height: 100%;
            width: 100%;
            object-fit: contain;
        }
        .iconText .itemList .itemIcon h4 {
            margin: 0 0 20px;
            font: 400 24px/28px var(--title_font);
            text-transform: capitalize;
            color: var(--title_color);
        }
        .iconText .itemList .itemIcon p {
            font: 400 16px/28px var(--title_font);
            color: var(--paragraph_color);
            text-align: center;
        }
        /*End Icon Type*/
        /*Text Type*/
        .iconText .column {
            width: 50%;
            float: left;
        }
        .iconText .leftColumn {
            border-right: 2px solid #EEE;
        }
        .iconText .itemText {
            padding: 0 50px;
            position: relative;
            margin-bottom: 35px;
            height: auto !important;
        }
        .iconText .itemText .imagePart {
            position: absolute;
            left: 10px;
            top: -4px;
            padding-right: 10px;
            width: 40px;
        }
        .iconText .itemText article h5 {
            font: 600 16px/25px var(--paragraph_font);
            color: var(--title_color);
            text-transform: uppercase;
        }
        .iconText .itemText article p {
            /*font: 400 16px/28px var(--title_font);*/
            color: var(--paragraph_color);
        }
        .iconText .rightColumn {
            padding-left: 50px;
        }
        .iconText .rightColumn .itemText {
            padding-right: 10px;
        }
        /*End Text Type*/
        /*Responsivness*//*Responsivness*//*Responsivness*/
        @media (max-width: 1000px) {
            .iconText .itemList .itemIcon,
            .iconText .itemList .itemText {
                width: 100%;
                float: none;
            }
            .iconText .column {
                border: none;
                float: none;
                width: 100%;
                padding: 0;
            }
            .iconText .itemText {
                padding: 0 0 0 60px !important;
                height: auto !important;
            }
            .iconText article.topText h2 {
                font-size: 32px;
            }
        }
        @media (max-width: 600px) {
            .iconText .container-custom {
                padding: 35px 15px 25px;
            }
            .iconText article.topText h2 {
                margin-bottom: 20px;
            }
        }
        @media (max-width: 400px) {
            .iconText .itemList .itemIcon .box {
                padding: 20px;
            }
            .iconText .itemText .imagePart {
                width: 100%;
                height: 60px;
                padding-bottom: 10px;
                position: static;
            }
            .iconText .itemText .imagePart img {
                height: 100%;
                width: 100%;
                object-fit: contain;
            }
            .iconText .itemText {
                padding: 20px !important;
                margin: 0;
            }
        }
        <?php endif;?>
        /**************************** FIX  ********************************/
        .iconText.IT-1 {
            background-color: #FAFAFA;
        }
        .iconText.img_border .itemList .itemIcon .imagePart img {
            height: 100%;
            width: 100%;
            border: 2px solid #0593A4;
            border-radius: 50%;
            display: inline-block;
            max-width: 65px;
            max-height: 65px;
            object-fit: none;
        }
        .iconText article.topText h2 {
            color: var(--title_color);
        }
        .iconText .itemList .itemIcon h4 {
            font: 400 24px/28px var(--title_font);
            text-transform: capitalize;
            color: var(--title_color);
        }
        .iconText .itemList .itemIcon p {
            font: 400 16px/28px var(--paragraph_font);
            color: var(--paragraph_color);
            margin-bottom: 0;
        }
        .itemList.customClear {
            display: flex;
            flex-wrap: wrap;
        }
        .iconText .itemList .itemIcon {
            display: flex;
        }
        .iconText .itemText article ul {
            list-style: none;
            padding-left: 0;
        }
        .iconText .itemText article ul li {
            /*margin: 14px 0;*/
            list-style: none;
            font: 400 16px/28px var(--paragraph_font);
            color: var(--paragraph_color);
        }
        @media (max-width: 1000px) {
            .iconText .itemList .itemIcon .box {
                width: 100%;
            }
        }
        /**************************** END  FIX  ****************************/
    </style>
    <script>
        <?php if(get_sub_field('content_type') == 'Icon'):?>
        /*lining functions*/
        //function iconTextLining<?php //echo $bangIconText;?>//(heiLine) {
        //    var highest = 0;
        //    jQuery(heiLine).each(function () {
        //        var currentHei = jQuery(this).height();
        //        if (currentHei > highest) {
        //            highest = currentHei;
        //        }
        //    });
        //    jQuery(heiLine).height(highest);
        //}
        //
        //iconTextLining<?php //echo $bangIconText;?>//('.iconText.IT-<?php //echo $bangIconText;?>// .itemIcon article');
        //
        //jQuery(window).resize(function () {
        //
        //    jQuery('.iconText.IT-<?php //echo $bangIconText;?>// .item article').attr('style', '');
        //    iconTextLining<?php //echo $bangIconText;?>//('.iconText.IT-<?php //echo $bangIconText;?>// .itemIcon article');
        //});/*End resize function*/
        <?php //else: ?>
        /*Compare Function*/
        function compareColumn<?php echo $bangIconText;?>() {
            jQuery('.iconText.IT-<?php echo $bangIconText;?> .leftColumn .itemText').each(function (index) {
                var hei = jQuery(this).height();
                var heiThat = jQuery('.iconText.IT-<?php echo $bangIconText;?> .rightColumn .itemText').eq(index).height();
                if (hei > heiThat) {
                    jQuery('.iconText.IT-<?php echo $bangIconText;?> .rightColumn .itemText').eq(index).height(hei);
                } else {
                    jQuery(this).height(heiThat);
                }
            })
        }

        compareColumn<?php echo $bangIconText;?>();

        jQuery(window).resize(function () {

            jQuery('.iconText.IT-<?php echo $bangIconText;?> .itemText').attr('style', '');
            compareColumn<?php echo $bangIconText;?>();
        });/*End resize function*/
        <?php endif;?>
    </script>
</section>
























