<?php global $careersFFR;
$careersFFR++; ?>

<section
        class="ffr-careers_section ffr-careers_section-<?php echo $careersFFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="ffr-careers_section__content">
        <h2><?php echo get_sub_field('role_title'); ?></h2>
        <h3><?php echo get_sub_field('role_description_title'); ?></h3>
        <p class="description_text"><?php echo get_sub_field('description'); ?></p>
        <div class="requirements">
            <h3><?php echo get_sub_field('requirements_title'); ?></h3>
            <ul class="requirements_list">
                <?php if (have_rows('requirements_list')): ?>
                    <?php while (have_rows('requirements_list')):
                        the_row(); ?>
                        <li class="requirements_list-item">
                            <?php echo get_sub_field('requirements_item'); ?>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <p><?php echo get_sub_field('requirements_text'); ?></p>
        </div>

    </div>
    <?php if ($careersFFR < 2): ?>
        <style>
            .ffr-careers_section {
                padding: 50px 0;
            }

            .ffr-careers_section-1 {
                padding-top: 100px;
            }

            .ffr-careers_section__content {
                max-width: 1300px;
                margin: 0 auto;
                padding: 0 15px;
            }

            .ffr-careers_section h2 {
                color: #333;
                font-size: 55px;
                font-style: normal;
                font-weight: 700;
                line-height: 61.6px;
                position: relative;
                padding: 0 0 32px;
                margin: 0;
            }

            @media only screen and (max-width: 991px) {
                .ffr-careers_section h2 {
                    font-size: 40px;
                    line-height: 41.6px;
                }
            }

            .ffr-careers_section h2:after {
                content: "";
                position: absolute;
                left: 0;
                bottom: 14px;
                height: 2px;
                width: 100px;
                background-color: #FF4B38;;
            }

            .ffr-careers_section h3 {
                color: #333;
                font-size: 20px;
                font-style: normal;
                font-weight: 700;
                line-height: 31.6px;
            }

            .ffr-careers_section .description_text {
                color: #333;
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: 31.6px;
                max-width: 900px;
            }

            .ffr-careers_section .requirements {

            }

            .ffr-careers_section .requirements h3 {
                color: #333;
                font-size: 20px;
                font-style: normal;
                font-weight: 700;
                line-height: 31.6px;
                padding: 32px 0 57px;
            }

            .ffr-careers_section .requirements_list {
                display: flex;
                column-gap: 15px;
                margin-bottom: 50px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-careers_section .requirements_list {
                    flex-wrap: wrap;
                    row-gap: 15px;
                }
            }

            @media only screen and (max-width: 768px) {
                .ffr-careers_section .requirements_list {

                    justify-content: center;
                }

            }

            .ffr-careers_section .requirements_list-item {
                color: #666;
                text-align: center;
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: 30.6px;
                border-radius: 20px;
                background: #FFF;
                box-shadow: 0px 10px 60px 0px rgba(10, 45, 97, 0.10);
                padding: 15px 6px;
                max-width: 200px;
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 153px;
            }

            .ffr-careers_section p {
                color: #333;
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: 31.6px;
            }

        </style>
    <?php endif; ?>
</section>