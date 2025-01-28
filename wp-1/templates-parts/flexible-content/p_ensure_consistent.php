<?php global $ensureConsistent;
$ensureConsistent++; ?>
<?php
$bgImage = get_sub_field('section_background');
?>
<section
        class="p_ensure_consistent p_ensure_consistent-<?php echo $ensureConsistent; ?> <?php echo get_sub_field('custom_class'); ?>"
        style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_ensure_consistent__content_wrap">
        <div class="p_ensure_consistent__content _anim-items _anim-no-hide">
            <div class="list-wrap">
                <h3><?php echo get_sub_field('title'); ?></h3>
                <hr>
                <ol class="list">
                    <?php if (have_rows('list')): ?>
                        <?php while (have_rows('list')):
                            the_row(); ?>
                            <li class="list-item">
                                <?php echo get_sub_field('list_item'); ?>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ol>
            </div>
            <div class="main_img">
                <?php $image = get_sub_field('main_image'); ?>
                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
            </div>
        </div>
    </div>
    <?php if (get_sub_field('show_divider') != 'no'): ?>
        <?php
        $bgDivider = get_sub_field('divider_background');
        ?>
        <div class="divider" style="background-image:url('<?php echo $bgDivider['url']; ?>');">
        </div>
    <?php endif; ?>
    <?php if ($ensureConsistent < 2): ?>
        <style>
            .p_ensure_consistent {
                position: relative;
            }

            .p_ensure_consistent .p_ensure_consistent__content_wrap {
                position: relative;
                /*max-width: 1920px;*/
                margin: 0 auto;
                width: 100%;
            }

            @media only screen and (max-width: 991px) {
                .p_ensure_consistent .p_ensure_consistent__content_wrap {
                    padding: 100px 20px 0;
                }
            }

            .p_ensure_consistent .p_ensure_consistent__content {
                height: 1100px;
                display: flex;
                align-items: center;

                opacity: 0;
                transition: all 0.8s ease 0.2s;
            }

            .p_ensure_consistent .p_ensure_consistent__content._active{
                opacity: 1;
            }

            @media only screen and (max-width: 1920px) {
                .p_ensure_consistent .p_ensure_consistent__content {
                    height: 854px;
                }
            }

            @media only screen and (max-width: 991px) {
                .p_ensure_consistent .p_ensure_consistent__content {
                    flex-direction: column;
                    height: 100%;
                }
            }


            .p_ensure_consistent h3 {
                color: #231F20;
                font-family: 'Montserrat', system-ui;
                font-size: 24px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4.8px;
                text-transform: uppercase;
            }

            .p_ensure_consistent hr {
                max-width: 500px;
                margin: 0;
                height: 1px;
                background-color: #231F20;
                width: 100%;
            }

            .p_ensure_consistent .list {
                display: flex;
                flex-direction: column;
                gap: 25px;
            }

            .p_ensure_consistent .list-wrap {
                border: 3px solid #231F20;
                background: #FFFCE9;
                max-width: 699px;
                width: 100%;
                box-shadow: -23px 23px #231F20;
                padding: 20px;
                display: flex;
                flex-direction: column;
                gap: 25px;
                position: relative;
                z-index: 10;
                left: 344px;
            }

            @media only screen and (max-width: 1800px) {
                .p_ensure_consistent .list-wrap {
                    left: 10%;
                }
            }

            @media only screen and (max-width: 1500px) {
                .p_ensure_consistent .list-wrap {
                    left: 20px;
                }
            }

            @media only screen and (max-width: 991px) {
                .p_ensure_consistent .list-wrap {
                    left: 0;
                }
            }

            .p_ensure_consistent .list-item {
                color: #231F20;
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;
                letter-spacing: 2px;
                margin-left: 30px;
                list-style: auto;
            }

            .p_ensure_consistent .main_img {
                position: absolute;
                bottom: 0;
                /*max-width: 1920px;*/
                left: 50%;
                transform: translate(-50%, 0);
                width: 100%;
                overflow: hidden;
            }

            @media only screen and (max-width: 991px) {
                .p_ensure_consistent .main_img {
                    position: static;
                    overflow: unset;
                    transform: none;
                }
            }

            @media only screen and (max-width: 991px) {
                .p_ensure_consistent .main_img {
                    position: relative;
                    overflow: hidden;
                    transform: none;
                    left: 0;
                    z-index: 100;
                    width: calc(100% + 40px);
                    min-height: 228px;
                }
            }

            .p_ensure_consistent .main_img img {
                /*.p_ensure_consistent .main_img img*/

                height: auto;
                position: relative;
                width: 1920px;
                max-width: 1920px;
            }

            @media only screen and (min-width: 1920px) {
                .p_ensure_consistent .main_img img {
                    width: 100%;
                    max-width: 100%;
                }

            }

            @media only screen and (max-width: 1400px) {
                .p_ensure_consistent .main_img img {
                    /*transform: translate(-10%, 0);*/
                }
            }

            @media only screen and (max-width: 1200px) {
                .p_ensure_consistent .main_img img {
                    transform: translate(-15%, 0);
                }
            }

            @media only screen and (max-width: 991px) {
                .p_ensure_consistent .main_img img {
                    width: 100%;
                    height: auto;
                    transform: none;
                    /*margin-top: -20px;*/
                    z-index: 10;
                }
            }

            @media only screen and (max-width: 480px) {
                .p_ensure_consistent .main_img img {
                    width: 600px;
                    transform: translate(-20%, 0);
                }
            }

            .p_ensure_consistent .divider {
                height: 36px;
                width: 100%;
                position: absolute;
                bottom: 0;
                left: 0;
                z-index: 100;
            }
        </style>
    <?php endif; ?>
</section>