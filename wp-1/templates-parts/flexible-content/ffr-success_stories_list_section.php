<?php global $successListFFR;
$successListFFR++; ?>

<section
        class="ffr-success_stories_list_section ffr-success_stories_list_section-<?php echo $successListFFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="ffr-success_stories_list_section__content">
        <ul class="stories_list">
            <?php if (have_rows('stories_list')): ?>
                <?php while (have_rows('stories_list')):
                    the_row(); ?>
                    <li class="stories_list-item">

                        <div class="icon-text">
                            <?php $image = get_sub_field('icon'); ?>
                            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
                            <div class="text">
                                <h2><?php echo get_sub_field('title'); ?></h2>
                               <?php echo get_sub_field('text_#1'); ?>
                            </div>

                        </div>
                       <?php echo get_sub_field('text_#2'); ?>

                        <a class="dialog_btn" href="<?php echo get_sub_field('button_link'); ?>">
                            <?php echo get_sub_field('button_text'); ?>
                        </a>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>
    <?php if ($successListFFR < 2): ?>
        <style>
            .ffr-success_stories_list_section {

            }

            .ffr-success_stories_list_section__content {

            }

            .ffr-success_stories_list_section .stories_list {
                max-width: 1200px;
                margin: 0 auto;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                gap: 100px 30px;
                border-radius: 20px;
                background: #FFF;
                box-shadow: 0px 10px 60px 0px rgba(10, 45, 97, 0.10);
                padding: 50px 40px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-success_stories_list_section .stories_list {
                    flex-direction: column;
                    align-items: center;
                    padding: 50px 15px;
                }
            }
            .ffr-success_stories_list_section .text {
                display: flex;
                flex-direction: column;
                gap: 15px;
            }

            .ffr-success_stories_list_section .stories_list-item {
                background: #FFF;
                box-shadow: 0px 12px 60px 0px rgba(10, 45, 97, 0.10);
                padding: 50px 35px;
                display: flex;
                flex-direction: column;
                max-width: 901px;
                /*width: calc(50% - 15px);*/
                gap: 20px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-success_stories_list_section .stories_list-item {
                    width: 100%;
                    padding: 30px 5px;
                }
            }

            .ffr-success_stories_list_section .icon-text {
                display: flex;
                column-gap: 14px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-success_stories_list_section .icon-text {
                    column-gap: 14px;
                    flex-direction: column;
                    gap: 30px;
                }
            }

            .ffr-success_stories_list_section img {
                max-width: 200px;
                max-height: 160px;
                margin: 0 auto;
            }

            .ffr-success_stories_list_section h2 {
                color: #333;
                font-size: 18px;
                font-style: normal;
                font-weight: 700;
                line-height: 25.2px;
                /*text-align: center;*/
            }

            .ffr-success_stories_list_section p {
                color: #666;
                font-size: 13px;
                font-style: normal;
                font-weight: 400;
                line-height: 18.2px; /* 140% */
            }

            .ffr-success_stories_list_section .dialog_btn {
                color: #FE0E42;
                font-size: 13px;
                font-style: normal;
                font-weight: 400;
                line-height: 18.2px;
                border: 1px solid #FE0E42;
                background: #FFF;
                width: 148px;
                height: 26px;
                display: flex;
                align-items: center;
                justify-content: center;
                align-self: end;
                margin: 0 0 auto;
            }

            @media only screen and (max-width: 991px) {
                .ffr-success_stories_list_section .dialog_btn {
                    margin: 0 auto;
                }
            }

            .ffr-success_stories_list_section .dialog_btn:hover {
                color: #D5141D;
                border-color: #D5141D;
            }
        </style>
    <?php endif; ?>
</section>