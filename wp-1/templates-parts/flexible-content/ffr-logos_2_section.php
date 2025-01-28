<?php global $logos2FFR;
$logos2FFR++; ?>

<section
    class="ffr-logos_2_section logos_2_section-<?php echo $logos2FFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="ffr-logos_2_section__content">
        <ul class="logos-list">
            <?php if (have_rows('logos_list')): ?>
                <?php while (have_rows('logos_list')):
                    the_row(); ?>
                    <li class="logos-list-item">
                        <?php $image = get_sub_field('icon');?>
                        <img src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>" />
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>
    <?php if ($logos2FFR < 2): ?>
        <style>
            .ffr-logos_2_section {
                padding: 100px 0;
                background: radial-gradient(70.71% 70.71% at 50% 50%, #4910C1 0%, #1204A1 0.01%, #050226 100%);
                margin: 100px 0;
            }

            .ffr-logos_2_section__content {
                max-width: 1373px;
                margin: 0 auto;
                padding: 0 15px;
            }
            @media only screen and (max-width: 991px) {
                .ffr-logos_2_section__content {
                    padding: 0 10px;
                }
            }
            .ffr-logos_2_section .logos-list {
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
                gap: 100px 50px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-logos_2_section .logos-list {
                    gap: 50px 25px;
                }
            }

            .ffr-logos_2_section .logos-list-item {
                display: flex;
                flex-direction: column;
                align-items: center;
                /*max-width: 171px;*/
            }
            .ffr-logos_2_section .logos-list-item img {
                height: 80px;
            }

        </style>
    <?php endif; ?>
</section>