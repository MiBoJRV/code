<?php global $mostCommonFFR;
$mostCommonFFR++; ?>

<section
        class="ffr-most_common_types_section ffr-most_common_types_section-<?php echo $mostCommonFFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="ffr-most_common_types_section__content">
        <h2><?php echo get_sub_field('section_title'); ?></h2>
        <?php echo get_sub_field('section_text'); ?>
        <ul class="types_list">
            <?php if (have_rows('types_list')): ?>
                <?php while (have_rows('types_list')):
                    the_row(); ?>
                    <li class="types_list_item">
                        <div class="types_list_item_image">
                            <?php $image = get_sub_field('icon'); ?>
                            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
                        </div>
                        <div class="types_list_item_text">
                            <h3><?php echo get_sub_field('title'); ?></h3>
                            <?php if (get_sub_field('view_type_text') == 'Text'): ?>
                                <?php echo get_sub_field('text'); ?>
                            <?php endif; ?>

                            <?php if (get_sub_field('view_type_text') == 'List'): ?>
                                <ul class="list_type-list">
                                    <?php if (have_rows('text_list')): ?>
                                        <?php while (have_rows('text_list')):
                                            the_row(); ?>

                                            <li><?php echo get_sub_field('item'); ?></li>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>


    <div class="room_info_content">
        <?php if (have_rows('room_info_repeater')): ?>
            <?php while (have_rows('room_info_repeater')):
                the_row(); ?>
                <div class="room_comfort_box">
                    <?php if (have_rows('comfort_options')): ?>
                        <?php while (have_rows('comfort_options')):
                            the_row(); ?>
                            <?php $image = get_sub_field('box_image'); ?>
                            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
                            <p><?php echo get_sub_field('box_option'); ?></p>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div><!-- /.room_comfort_box -->
            <?php endwhile; ?>
        <?php endif; ?>
    </div><!-- /.room_info_content -->


    <?php if ($mostCommonFFR < 2): ?>
        <style>
            .ffr-most_common_types_section {
                padding: 70px 10px 140px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-most_common_types_section {
                    padding: 70px 10px 0;
                }
            }

            .ffr-most_common_types_section__content {
                max-width: 1200px;
                width: 100%;
                margin: 0 auto;
                padding: 50px 30px 90px;
                border-radius: 20px;
                background: #FFF;
                box-shadow: 0px 10px 60px 0px rgba(10, 45, 97, 0.10);
            }

            @media only screen and (max-width: 991px) {
                .ffr-most_common_types_section__content {
                    padding: 50px 5px 65px;
                }
            }

            .ffr-most_common_types_section h2 {
                color: #333;
                text-align: center;
                font-size: 55px;
                font-style: normal;
                font-weight: 700;
                line-height: 61.6px;
                max-width: 910px;
                margin: 0 auto 50px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-most_common_types_section h2 {
                    font-size: 40px;
                    text-align: left;
                }
            }

            .ffr-most_common_types_section .types_list {
                display: flex;
                flex-wrap: wrap;
                row-gap: 50px;
            }

            .ffr-most_common_types_section .types_list_item:nth-child(even) {
                margin-left: auto;
            }

            .ffr-most_common_types_section .types_list_item {
                background: #FFF;
                box-shadow: 0px 12px 60px 0px rgba(10, 45, 97, 0.10);
                padding: 25px 20px 15px 50px;
                max-width: 790px;
                display: flex;
                gap: 74px;
            }
            .ffr-most_common_types_section .list_type-list li {
                color: #666;
                font-size: 13px;
                font-style: normal;
                font-weight: 400;
                line-height: 18.2px;
                list-style: disc;
            }

            @media only screen and (max-width: 991px) {
                .ffr-most_common_types_section .types_list_item {
                    gap: 20px;
                    padding: 25px 20px 15px 25px;
                }
            }

            .ffr-most_common_types_section .types_list_item_image img {
                max-width: 110px;
                height: 90px;
            }

            .ffr-most_common_types_section .types_list_item h3 {
                color: #333;
                font-size: 18px;
                font-style: normal;
                font-weight: 700;
                line-height: 25.2px;
                margin-bottom: 15px;
            }

            .ffr-most_common_types_section .types_list_item p {
                color: #666;
                font-size: 13px;
                font-style: normal;
                font-weight: 400;
                line-height: 18.2px;
                margin: 0;
            }

            .ffr-most_common_types_section .types_list_item p:not(:last-of-type) {
                margin-bottom: 15px;
            }

            .ffr-most_common_types_section .types_list_item p:nth-of-type(2) {
                margin-left: 20px;
            }
        </style>
    <?php endif; ?>
</section>