<?php global $p_shares;
$p_shares++; ?>

<?php
$bgImage = get_sub_field('cpl_background');
?>
<section class="p_shares p_shares-<?php echo $p_shares; ?> <?php echo get_sub_field('custom_class'); ?>"
         style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_shares__content _anim-items _anim-no-hide">
        <div class="p_shares-wrap">
            <?php if (have_rows('list')): ?>
                <?php while (have_rows('list')):
                    the_row(); ?>
                    <div class="list-item">
                        <div class="p_shares-1">
                            <?php echo get_sub_field('item'); ?>
                        </div>
                        <div class="p_shares-2">
                            <?php echo get_sub_field('price'); ?>
                        </div>

                    </div>
                    <div class="p_shares-divider"></div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <?php if ($p_shares < 2): ?>
        <style>
            .p_shares {
                color: #121212;
                font-family: 'Roboto', sans-serif;
                font-size: 24px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4.8px;
                text-transform: uppercase;
                position: relative;
                z-index: 10;
            }

            .p_shares__content {
                max-width: 1084px;
                margin: 0 auto;

                opacity: 0;
                transition: all 0.8s ease 0.2s;
            }

            .p_shares__content._active{
                opacity: 1;
            }

            .p_shares .list-item {
                display: flex;
                gap: 20px;
            }

            @media only screen and (max-width: 991px) {
                .p_shares .list-item {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    max-width: 416px;
                    width: 100%;
                }
            }
            @media only screen and (max-width: 480px) {
                .p_shares .list-item {
                    max-width: 416px;
                }
            }

            .p_shares .p_shares-divider:last-of-type {
                display: none;
            }

            .p_shares .p_shares-wrap {
                width: 100%;
                /*max-width: 1084px;*/
                display: flex;
                justify-content: space-between;
                gap: 20px;
                padding: 43px 20px;
                margin: 0 auto;
            }

            .p_shares .list-item > div {
                color: #121212;
                font-family: 'Roboto', sans-serif;
                font-size: 24px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4.8px;
                text-transform: uppercase;
            }

            @media only screen and (max-width: 991px) {
                .p_shares .list-item > div {
                    font-size: 20px;
                    letter-spacing: 4px;
                }
            }

            .p_shares .p_shares-2 {
                white-space: nowrap;
            }

            @media only screen and (max-width: 991px) {
                .p_shares .p_shares-wrap {
                    padding: 26px 20px;
                    flex-direction: column;
                }
            }

            .p_shares .p_shares-divider {
                position: relative;
                border-right: 2px solid #FF7A00;
                width: 2px;
                height: 28px;
            }

            @media only screen and (max-width: 991px) {
                .p_shares .p_shares-divider {
                    display: none;
                }
            }

        </style>
    <?php endif; ?>
</section>