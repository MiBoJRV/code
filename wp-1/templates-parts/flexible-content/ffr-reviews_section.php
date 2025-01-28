<?php global $reviewsFFR;
$reviewsFFR++; ?>

<section
        class="ffr-reviews_section ffr-reviews_section-<?php echo $reviewsFFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="ffr-reviews_section__content">
        <ul class="reviews_list">
            <?php if (have_rows('reviews_list')): ?>
                <?php while (have_rows('reviews_list')):
                    the_row(); ?>
                    <li class="reviews_list-item">
                        <div class="avatar">
                            <?php $image = get_sub_field('avatar'); ?>
                            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
                        </div>
                        <div class="text">
                            <h3><?php echo get_sub_field('name'); ?></h3>
                            <p><?php echo get_sub_field('text'); ?></p>
                        </div>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>
    <?php if ($reviewsFFR < 2): ?>
        <style>
            .ffr-reviews_section {

            }

            .ffr-reviews_section__content {
                max-width: 1230px;
                margin: 0 auto;
                padding: 0 15px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-reviews_section__content {
                    padding: 0;
                }
            }


            .ffr-reviews_section .reviews_list {
                display: flex;
                gap: 30px;
                border-radius: 20px;
                background: #FFF;
                box-shadow: 0px 10px 60px 0px rgba(10, 45, 97, 0.10);
                padding: 100px 27px;
                max-width: 1200px;
                margin: 0 auto;
                flex-wrap: wrap;
            }

            @media only screen and (max-width: 768px) {
                .ffr-reviews_section .reviews_list {
                    flex-direction: column;
                    align-items: center;
                    padding: 100px 15px;
                }
            }

            .ffr-reviews_section .reviews_list-item {
                background: #FFF;
                box-shadow: 0px 12px 60px 0px rgba(10, 45, 97, 0.10);
                padding: 30px;
                display: flex;
                justify-content: space-between;
                column-gap: 30px;
                row-gap: 30px;
                max-width: 558px;
                width: calc(50% - 15px);
            }

            @media only screen and (max-width: 768px) {
                .ffr-reviews_section .reviews_list-item {
                    width: 100%;
                    max-width: 360px;
                    padding: 23px 29px 23px 20px;
                }
            }

            .ffr-reviews_section .reviews_list-item .text {
                padding: 20px 0;
            }

            @media only screen and (max-width: 991px) {
                .ffr-reviews_section .reviews_list-item .text {
                    padding: 0;
                }
            }

            .ffr-reviews_section .reviews_list-item h3 {
                color: #333;
                font-size: 20px;
                font-style: normal;
                font-weight: 700;
                line-height: 28px;
                margin: 0;
            }

            .ffr-reviews_section .reviews_list-item p {
                color: #333;
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: 24px;
                max-width: 252px;
                margin: 0;
            }

            .ffr-reviews_section .reviews_list-item img {
                width: 182px;
                height: 192px;
                min-width: 182px;
                margin-top: 20px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-reviews_section .reviews_list-item img {
                    width: 120px;
                    height: 120px;
                    min-width: 120px;
                }
            }

        </style>
    <?php endif; ?>
</section>