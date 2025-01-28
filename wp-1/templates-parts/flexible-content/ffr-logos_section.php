<?php global $logosFFR;
$logosFFR++; ?>

<section
        class="ffr-logos_section ffr-logos_section-<?php echo $logosFFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="ffr-logos_section__content">
        <ul class="logos-list">
            <?php if (have_rows('logos_list')): ?>
                <?php while (have_rows('logos_list')):
                    the_row(); ?>
                    <li class="logos-list-item">
                        <?php $image = get_sub_field('icon'); ?>
                        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
                        <span><?php echo get_sub_field('year'); ?></span>
                        <h2><?php echo get_sub_field('title'); ?></h2>
                        <p><?php echo get_sub_field('text'); ?></p>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>
    <?php if ($logosFFR < 2): ?>
        <style>
            .ffr-logos_section {
                padding: 60px 0 150px 0;
            }

            .ffr-logos_section__content {
                max-width: 1085px;
                margin: 0 auto;
                padding: 0 15px;
            }
            .ffr-logos_section .logos-list {
                display: flex;
                justify-content: space-between;
            }

            .ffr-logos_section .logos-list-item {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 27px;
                max-width: 171px;
            }

            .ffr-logos_section .logos-list-item span {
                color: #333;
                font-size: 16px;
                font-style: normal;
                font-weight: 700;
                line-height: 23.8px;
            }

            .ffr-logos_section .logos-list-item h2 {
                color: #666;
                text-align: center;
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: 23.8px;
            }

            .ffr-logos_section .logos-list-item p {
                color: #666;
                text-align: center;
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: 23.8px;
            }
        </style>
    <?php endif; ?>
</section>