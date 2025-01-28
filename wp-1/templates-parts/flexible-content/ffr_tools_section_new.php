<?php global $toolsFFR;
$toolsFFR++; ?>

<?php global $listTitle;
$listTitle++; ?>
<section class="tools tools-ffr-<?php echo $toolsFFR; ?>" <?php echo get_sub_field('custom_class'); ?>>
    <div class="tools-content">
        <div class="tools-content__box">
            <div class="tools-text">
                <span class="sub-title">
                    <?php if (get_sub_field('sub_title') != ''): ?>
                        <?php echo get_sub_field('sub_title'); ?>
                    <?php endif; ?>
                </span>
                <h3 class="title"><?php echo get_sub_field('title'); ?></h3>
                <div class="tools-text-content">
                    <div class="tools-text-desc">
                        <div class="tools-text-desc-p">
                            <?php echo get_sub_field('text'); ?>
                            <?php if (get_sub_field('list_title') != ''): ?>
                                <h3> <?php echo get_sub_field('list_title'); ?></h3>
                            <?php endif; ?>
                        </div>


                        <?php if (have_rows('list_block_repeater')): ?>
                            <?php $counter = 1; ?>
                            <?php while (have_rows('list_block_repeater')): the_row(); ?>
                                <div class="tools-state__list-item">
                                    <?php
                                    // Отримуємо значення підполя "list_title"
                                    $listTitle = get_sub_field('list_title');

                                    // Перевіряємо, чи list_title не є пустим
                                    if (!empty($listTitle)) {
                                        // Якщо list_title не є пустим, то створюємо клас з лічильником
                                        $elementClass = 'title-' . $counter;
                                    } else {
                                        // Якщо list_title пустий, то додаємо стилі background: transparent;
                                        $elementClass = 'title-empty';
                                    }
                                    ?>

                                    <h3 class="<?php echo esc_attr($elementClass); ?>"> <?php echo esc_html($listTitle); ?></h3>
                                    <p><?php echo esc_html(get_sub_field('list_text')); ?></p>
                                </div>
                                <?php $counter++; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>


                    </div>
                    <?php if (get_sub_field('button_text') != ''): ?>
                        <div class="section_btn">
                            <a class="dialog_btn" href="<?php echo get_sub_field('button_link'); ?>">
                                <?php echo get_sub_field('button_text'); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php if ($toolsFFR < 2): ?>
        <style>
            .tools {
                position: relative;
                padding-bottom: 125px;
                overflow: hidden;
            }

            @media only screen and (max-width: 991px) {
                .tools {
                    /*margin-bottom: 34px;*/
                    padding-bottom: 100px;
                }
            }

            .tools-content {
                /*max-width: 1320px;*/
                width: 100%;
                margin: 0 auto;
                display: flex;
                position: relative;
                z-index: 9;
                max-width: 1440px;
                /*padding: 135px 0 0 0;*/
                flex-direction: column;
                box-sizing: border-box;
            }

            @media only screen and (max-width: 991px) {
                .tools-content {
                    padding: 50px 0 0;
                }
            }

            .tools-content__box {
                z-index: 9;
                padding: 60px 0 0 0;
                width: 100%;
            }

            @media only screen and (max-width: 991px) {
                .tools-content__box {
                    padding: 0;
                }
            }

            .tools-text {
                padding: 0 60px;
                /*max-width: 725px;*/
            }

            @media only screen and (max-width: 991px) {
                .tools-text {
                    padding: 0 15px;
                }
            }

            .tools-text-content {
                position: relative;
            }

            .tools-text-desc {
                display: grid;
                grid-template-areas: 'el-1 el-1 el-2' 'el-3 el-4 el-5' 'el-6 el-7 el-8';
                row-gap: 30px;
                column-gap: 32px;
                justify-content: space-between;
            }

            @media only screen and (max-width: 991px) {
                .tools-text-desc {
                    /*display: flex;*/
                    /*flex-direction: column;*/
                    grid-template-areas: 'el-1 el-1 ' 'el-2 el-3' 'el-4 el-5' 'el-6 el-7' 'el-8 el-8';
                }
            }

            @media only screen and (max-width: 575.98px) {
                .tools-text-desc {
                    display: flex;
                    flex-direction: column;
                    gap: 50px;
                }

            }

            .tools-text-desc-p {
                grid-area: el-1;
                max-width: 546px;
            }

            .tools-text-desc-p h3 {
                color: #333;
                font-size: 24px;
                font-style: normal;
                font-weight: 700;
                line-height: 51.6px;
                margin: 0;
            }


            @media only screen and (max-width: 991px) {
                .tools-text-desc-p {
                    max-width: 100%;
                }
            }

            .tools-state__list-item:nth-child(2) {
                grid-area: el-2;
            }

            .tools-state__list-item:nth-child(3) {
                grid-area: el-3;
            }

            .tools-state__list-item:nth-child(4) {
                grid-area: el-4;
            }

            .tools-state__list-item:nth-child(5) {
                grid-area: el-5;
            }
            
            .tools-state__list-item:nth-child(6) {
                grid-area: el-6;
            }

            .tools-state__list-item:nth-child(7) {
                grid-area: el-7;
            }

            .tools-state__list-item:nth-child(8) {
                grid-area: el-8;
            }

            /*.tools-text-desc-p > p {*/
            /*    margin-bottom: 50px;*/
            /*}*/

            .tools-text-desc > p {
                margin-bottom: 50px;
                max-width: 546px;
                width: 70%;
            }

            @media only screen and (max-width: 991px) {
                margin-bottom: 30px;
            }

            .tools .sub-title {
                font-size: 30px;
                font-style: normal;
                font-weight: 700;
                line-height: 36px;
                color: #FF4B38;;
            }


            .tools .title {
                font-size: 55px;
                font-style: normal;
                font-weight: 700;
                line-height: 61.6px;
                color: #ffffff;
                padding: 11px 0 74px;
                position: relative;
            }

            @media only screen and (max-width: 991px) {
                .tools .title {
                    font-size: 40px;
                    padding: 11px 0 66px;
                }
            }

            .tools .title:after {
                content: "";
                position: absolute;
                left: 0;
                bottom: 46px;
                height: 2px;
                width: 100px;
                background-color: #FF4B38;;
            }

            @media only screen and (max-width: 991px) {
                .tools .title:after {
                    bottom: 33px;
                }
            }

            .tools p {
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: 30.6px;
                color: #ffffff;
            }

            @media only screen and (max-width: 991px) {
                .tools p {
                    font-size: 13px;
                    line-height: 25.2px;
                }
            }

            .tools .title {
                color: #333;
            }

            .tools p {
                /*max-width: 725px;*/
                color: #666;
                margin-bottom: auto;
            }

            .tools-text-desc-p > p {
                margin-bottom: 50px;
            }

            @media only screen and (max-width: 991px) {
                .tools-text-desc-p > p {
                    margin-bottom: 30px;
                }

                .tools-text-desc-p > p:last-of-type {
                    margin-bottom: 0;
                }

                .tools-text-desc-p > p:not(:last-child) {
                    margin-bottom: 30px;
                }
            }

            .tools-state {
                margin-top: 50px;
                /*padding: 0 60px;*/
            }

            @media only screen and (max-width: 991px) {
                .tools-state {
                    padding: 0 15px;
                }
            }

            .tools-state__list {
                display: flex;
                justify-content: space-between;
                /*align-items: center;*/
                gap: 27px;
                /*flex-wrap: wrap;*/
                padding: 0;
            }

            @media only screen and (max-width: 768px) {
                .tools-state__list {
                    justify-content: center;
                    gap: 10px;
                }
            }

            .tools-state__list-item {
                max-width: 392px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                gap: 40px;
                border-radius: 20px;
                background: #FFF;
                box-shadow: 0px 10px 60px 0px rgba(10, 45, 97, 0.10);
                padding: 50px 35px;
                flex: 1;
            }

            /*.tools-state__list-item:first-of-type{*/
            /*    position: absolute;*/
            /*    top: 0;*/
            /*    right: 0;*/
            /*}*/
            .tools-state__list-item h3 {
                height: 55px;
                padding: 18px 15.05px 18px 15.95px;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-shrink: 0;
                border-radius: 100px;
        /*    <?php if(get_sub_field('list_title') == ''):?>
                background: transparent;
            <?php endif; ?>
            <?php if(get_sub_field('list_title') != ''):?>
                background: radial-gradient(70.71% 70.71% at 50% 50%, #160070 0%, #34004C 100%);
            <?php endif; ?>*/
                background: radial-gradient(70.71% 70.71% at 50% 50%, #160070 0%, #34004C 100%);
                font-size: 11px;
                font-style: normal;
                font-weight: 700;
                line-height: 18.7px;
                text-transform: uppercase;
                color: #ffffff;
                box-sizing: border-box;
                /*max-width: 190px;*/
                width: 100%;
                text-align: center;
            }

            .tools-state__list-item h3.title-empty {
                background: transparent;
                display: none;
            }

            .tools-state__list-item h3.title-empty + p {
                margin: 0;
            }
            .tools-state__list-item p {
                text-align: center;
            }

            @media only screen and (max-width: 991px) {
                .tools-state__list-item {
                    /*max-width: 280px;*/
                    max-width: none;
                }
            }

            @media only screen and (max-width: 575.98px) {
                max-width: 280px;
            }

            .tools .dialog_btn {
                background: #FF7277;
                max-width: 296px;
                padding: 20px 29px 20px 29px;
                border-radius: 100px;
                box-shadow: 0 20px 40px -10px rgba(0, 65, 131, 0.4);
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                color: #ffffff;
                font-size: 14px;
                font-weight: 700;
                line-height: 23.8px;
                text-transform: uppercase;
                margin: 80px 0 0 auto;
            }

            @media only screen and (max-width: 991px) {
                .tools .dialog_btn {
                    margin: 80px auto 0 auto;
                }
            }

            .tools .dialog_btn:hover {
                background-color: #FF263D;
            }

        </style>
    <?php endif; ?>
</section>


