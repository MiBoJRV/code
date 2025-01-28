<?php global $howItFFR;
$howItFFR++; ?>

<section
        class="ffr_how_it_works_section ffr_how_it_works_section-<?php echo $howItFFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="ffr_how_it_works_section__content">
        <h2 class="title"><?php echo get_sub_field('section_title'); ?></h2>
        <?php if (get_sub_field('section_text') != ''): ?>
            <p class="section_text"> <?php echo get_sub_field('section_text'); ?></p>
        <?php endif; ?>
        <?php if (get_sub_field('list_title') != ''): ?>
            <h3 class="list_title"> <?php echo get_sub_field('list_title'); ?></h3>
        <?php endif; ?>
        <div class="how_it_works_list">
            <?php if (have_rows('list_block_repeater')): ?>
                <?php while (have_rows('list_block_repeater')):
                    the_row(); ?>
                    <div class="how_it_works_lis-item">
                        <h3> <?php echo get_sub_field('list_title'); ?></h3>
                        <p><?php echo get_sub_field('list_text'); ?></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php if(get_sub_field('button_text') != ''):?>
                <div class="section_btn">
                    <a class="dialog_btn" href="<?php echo get_sub_field('button_link'); ?>">
                        <?php echo get_sub_field('button_text'); ?>
                    </a>
                </div>
            <?php endif; ?>

        </div>
    </div>
    <?php if ($howItFFR < 2): ?>
        <style>
            .ffr_how_it_works_section {
                padding: 70px 0;
                position: relative;
                z-index: 9;
            }

            .ffr_how_it_works_section__content {
                max-width: 1278px;
                width: 100%;
                margin: 0 auto;
                padding: 29px 24px 0;

            }

            .ffr_how_it_works_section .title {
                color: #FF4B38;
                font-size: 48px;
                font-style: normal;
                font-weight: 700;
                line-height: 36px;
            }

            .ffr_how_it_works_section .section_text {
                color: #333;
                font-size: 20px;
                font-style: normal;
                font-weight: 700;
                line-height: 21.6px;
                max-width: 576px;
                margin-top: 50px;
            }

            .ffr_how_it_works_section .list_title {
                color: #333;
                font-size: 24px;
                font-style: normal;
                font-weight: 700;
                line-height: 51.6px;
                margin-top: 50px;
            }

            @media only screen and (max-width: 991px) {
                .ffr_how_it_works_section .title {
                    margin-bottom: 50px;
                    font-size: 40px;
                }
            }

            .ffr_how_it_works_section .how_it_works_list {
                /*display: flex;*/
                /*flex-wrap: wrap;*/
                /*justify-content: flex-start;*/
                display: grid;
                grid-template-areas: 'top-1 top-2 top-3' 'bot-1 bot-2 bot-3';
                row-gap: 50px;
                column-gap: 30px;
                justify-content: space-between;
                grid-template-columns: 1fr 1fr 1fr;
                margin-top: 106px;
            }

            @media only screen and (max-width: 991px) {
                .ffr_how_it_works_section .how_it_works_list {
                    grid-template-areas: 'top-1 top-2' 'top-3 bot-1' 'bot-2 bot-3';
                    grid-template-columns: 1fr 1fr;
                }
            }

            @media only screen and (max-width: 768px) {
                .ffr_how_it_works_section .how_it_works_list {
                    grid-template-areas: 'top-1' 'top-2' 'top-3' 'bot-1' 'bot-2' 'bot-3';
                    row-gap: 30px;
                    grid-template-columns: 1fr;
                }
            }

            .how_it_works_lis-item:nth-child(1) {
                grid-area: top-1;
            }

            .how_it_works_lis-item:nth-child(2) {
                grid-area: top-2;
            }

            .how_it_works_lis-item:nth-child(3) {
                grid-area: top-3;
            }

            .how_it_works_lis-item:nth-child(4) {
                grid-area: bot-1;
            }

            .how_it_works_lis-item:nth-child(5) {
                grid-area: bot-2;
            }

            .how_it_works_list .section_btn {
                grid-area: bot-3;
            }

            .how_it_works_list .section_btn {
                margin-top: auto;
            }

            .how_it_works_list .section_btn .dialog_btn {
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
                /* margin-top: auto; */
                /* margin-left: 157px; */
                margin: auto auto 0 auto;
            }

            .ffr_how_it_works_section .how_it_works_lis-item {
                max-width: 390px;
                width: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                gap: 40px;
                border-radius: 20px;
                background: #FFF;
                box-shadow: 0px 10px 60px 0px rgba(10, 45, 97, 0.10);
                padding: 50px 35px;
            }

            @media only screen and (max-width: 991px) {
                .ffr_how_it_works_section .how_it_works_lis-item {
                    max-width: 100%;
                }
            }

            .ffr_how_it_works_section .how_it_works_lis-item h3 {
                height: 55px;
                padding: 18px 15.05px 18px 15.95px;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-shrink: 0;
                border-radius: 100px;
                background: radial-gradient(70.71% 70.71% at 50% 50%, #3A0C9C 0%, #230E7B 100%);
                font-size: 16px;
                font-style: normal;
                font-weight: 700;
                line-height: 18.7px;
                text-transform: uppercase;
                color: #ffffff;
                box-sizing: border-box;
                /* max-width: 190px; */
                width: 100%;
                text-align: center;
            }

            .ffr_how_it_works_section .how_it_works_lis-item p {
                color: #666;
                text-align: center;
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: 30.6px; /* 191.25% */
            }
        </style>
    <?php endif; ?>
</section>