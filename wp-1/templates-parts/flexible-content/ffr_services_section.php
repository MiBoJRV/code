<?php global $servicesFFR;
$servicesFFR++; ?>

<section class="services services-ffr-<?php echo $servicesFFR; ?>" <?php echo get_sub_field('custom_class'); ?>>
    <h2><?php echo get_sub_field('section_title'); ?></h2>
    <ul class="services-list">
        <?php if (have_rows('icon_block_repeater')): ?>
            <?php while (have_rows('icon_block_repeater')): the_row(); ?>
                <li class="services-list__item">
                    <?php $image = get_sub_field('icon'); ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    <h3><?php echo get_sub_field('title'); ?></h3>
                    <p><?php echo get_sub_field('text'); ?></p>
                </li>
            <?php endwhile; ?>
        <?php endif; ?>
    </ul>
    <style>
        <?php if($servicesFFR < 2):?>
        .services {
            padding: 110px 30px;
        }

        .services h2 {
            color: #333;
            font-size: 55px;
            font-style: normal;
            font-weight: 700;
            line-height: 61.6px;
            margin-bottom: 50px;
            text-align: center;
        }

        @media only screen and (max-width: 991px) {
            .services h2 {
                padding: 30px 0 35px;
                font-size: 40px;
                font-style: normal;
                font-weight: 700;
                line-height: 61.6px;
                text-align: left;
            }
        }

        .services-list {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
            max-width: 1320px;
            margin: 0 auto;
        }

        @media only screen and (max-width: 1024px) {
            .services-list {
                flex-wrap: wrap;
                justify-content: center;
                row-gap: 80px;
            }
        }

        .services-list__item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            width: 25%;
        }

        @media only screen and (max-width: 1024px) {
            .services-list__item {
                width: calc(50% - 60px);
            }
        }

        @media only screen and (max-width: 991px) {
            .services-list__item {
                width: 100%;
            }
        }

        .services-list__item .item-icon {
            height: 105px;
        }

        .services-list__item h3 {
            margin: 40px 0 17px;
            font-size: 18px;
            font-style: normal;
            font-weight: 700;
            line-height: 25.2px;
            color: #333;
        }

        .services-list__item p {
            font-size: 13px;
            font-style: normal;
            font-weight: 400;
            line-height: 25.2px;
            color: #666;
            height: 92px;
            padding: 0 2px;
        }

        @media only screen and (max-width: 1199px) {
            .services-list__item p {
                height: 100px;
            }
        }

        <?php endif; ?>
    </style>
</section>

