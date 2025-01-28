<?php global $newsFFR;
$newsFFR++; ?>

<section
        class="ffr-news_section ffr-news_section-<?php echo $newsFFR; ?> <?php echo get_sub_field('custom_class'); ?><?php echo get_sub_field('background_color'); ?>">
    <div class="ffr-news_section__content">
        <?php if(get_sub_field('section_title') != ''):?>
            <h2><?php echo get_sub_field('section_title'); ?></h2>
        <?php endif; ?>
        <ul class="news-list">
            <?php if (have_rows('news_list')): ?>
                <?php while (have_rows('news_list')):
                    the_row(); ?>
                    <li class="news-list-item">
                        <div class="image">
                            <?php $image = get_sub_field('avatar'); ?>
                            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
                        </div>
                        <div class="text">
                            <h3><?php echo get_sub_field('name'); ?></h3>
                           <?php echo get_sub_field('text'); ?>
                        </div>
                        <div class="news_btn">
                            <a href="<?php echo get_sub_field('button_link'); ?>">
                                <?php echo get_sub_field('button_text'); ?>
                            </a>
                        </div>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>
    <?php if ($newsFFR < 2): ?>
        <style>
            .ffr-news_section {
                position: relative;
                z-index: 9;
                padding-top: 115px;
                padding-bottom: 111px;
                <?php if(get_sub_field('padding_top') != ''):?>
                    padding-top:<?php echo get_sub_field('padding_top'); ?>px;
                <?php endif; ?>  
                <?php if(get_sub_field('padding_bottom') != ''):?>
                    padding-bottom:<?php echo get_sub_field('padding_bottom'); ?>px;
                <?php endif; ?>  

            }

            .ffr-news_section.white {
                background: #FFFFFF;
            }

            .ffr-news_section.blue {
                background: radial-gradient(70.71% 70.71% at 50% 50%, #3202AA 0%, #1E0475 100%);
            }

            .ffr-news_section__content {
                max-width: 1286px;
                margin: 0 auto;
            }

            .ffr-news_section h2 {
                margin: 0 auto 40px 30px;
                color: #333;
                font-size: 55px;
                font-style: normal;
                font-weight: 700;
                line-height: 61.6px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-news_section h2 {
                    font-size: 40px;
                    line-height: 61.6px;
                }

            }

            .ffr-news_section .news-list {
                display: flex;
                flex-direction: column;
                gap: 50px;
                padding: 0 15px;
            }

            .ffr-news_section .news-list-item {
                border-radius: 20px;
                background: #FFF;
                box-shadow: 0px 10px 60px 0px rgba(10, 45, 97, 0.10);
                padding: 52px 20px;
                display: flex;
                justify-content: space-between;
                column-gap: 33px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-news_section .news-list-item {
                    flex-direction: column;
                    align-items: center;
                    padding: 45px 25px;

                }
            }

            .news-list-item .image {
                display: flex;
                align-self: flex-end;
            }

            @media only screen and (max-width: 991px) {
                .news-list-item .image {
                    align-self: center;
                }
            }

            .ffr-news_section .news-list-item h3 {
                color: #333;
                font-size: 24px;
                font-style: normal;
                font-weight: 700;
                line-height: 30px;
                margin-bottom: 23px;
                max-width: 675px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-news_section .news-list-item h3 {
                    text-align: left;
                    font-size: 24px;
                    line-height: 30px;
                    /*padding: 30px 0;*/
                    margin-bottom: 14px;
                    padding-top: 45px;
                }
            }

            .ffr-news_section .news-list-item p {
                color: #333;
                font-size: 20px;
                font-style: normal;
                font-weight: 400;
                line-height: 30px;
            }


            .ffr-news_section .news-list-item .text {
                /*padding: 27px 0;*/
                max-width: 710px;
            }

            .ffr-news_section .news-list-item img {
                width: 324px;
                /*height: 308px;*/
                min-height: 250px;
                min-width: 308px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-news_section .news-list-item img {
                    max-height: 331px;
                }
            }

            .ffr-news_section .news_btn {
                display: flex;
                align-self: flex-end;
            }
            .ffr-news_section .news_btn a {
                white-space: nowrap;
                color: #878787;
                font-size: 20px;
                font-style: normal;
                font-weight: 400;
                line-height: 30px;
            }
        </style>
    <?php endif; ?>
</section>