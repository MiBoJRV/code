<?php global $ensureDelivering;
$ensureDelivering++; ?>

<section
        class="p_ensure_delivering p_ensure_delivering-<?php echo $ensureDelivering; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="p_ensure_delivering__content-wrap">
        <div class="p_ensure_delivering__content">
            <div class="list">
                <?php if (have_rows('list')): ?>
                    <?php while (have_rows('list')):
                        the_row(); ?>
                        <div class="list-item _anim-items _anim-no-hide">
                            <h3><?php echo get_sub_field('title'); ?></h3>
                            <hr>

                            <?php echo get_sub_field('text'); ?>

                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php $image = get_sub_field('section_background'); ?>

            </div>
        </div>
        <img class="image-bg" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
    </div>

    <?php if ($ensureDelivering < 2): ?>
        <style>
            .p_ensure_delivering {
                background-image: url("<?php echo get_stylesheet_directory_uri() ?>/images/backstage-6.png");
                position: relative;

            }

            .p_ensure_delivering .p_ensure_delivering__content-wrap {
                position: relative;
                /*max-width: 1920px;*/
                margin: 0 auto;
                width: 100%;
            }

            .p_ensure_delivering .p_ensure_delivering__content {
                height: 1041px;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 0 20px;
            }

            @media only screen and (max-width: 991px) {
                .p_ensure_delivering .p_ensure_delivering__content {
                    padding: 150px 20px 40px;
                    height: 100%;
                }
            }

            .p_ensure_delivering .list {
                position: relative;
                z-index: 9;
                display: flex;
                flex-direction: column;
                gap: 50px;
            }

            .p_ensure_delivering .list-item {
                border: 3px solid #231F20;
                background: #FFFCE9;
                max-width: 1086px;
                width: 100%;
                box-shadow: 23px 23px #231F20;
                padding: 20px;
                display: flex;
                flex-direction: column;
                gap: 25px;
                text-align: center;
            }
            .p_ensure_delivering .list-item:nth-child(1) {
                opacity: 0;
                transform: translate(150%, 0%);
                transition: all 0.8s ease 0s;
            }



            .p_ensure_delivering .list-item:nth-child(2) {
                opacity: 0;
                transform: translate(-150%, 0%);
                transition: all 0.8s ease 0s;
            }

            .p_ensure_delivering .list-item._active{
                opacity: 1;
                transform: translate(0, 0);
            }
            .p_ensure_delivering .list-item h3 {
                color: #231F20;
                text-align: center;
                font-family: 'Montserrat', sans-serif;
                font-size: 24px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4.8px;
                text-transform: uppercase;
                max-width: 900px;
                margin: 0 auto;
            }
            
            @media only screen and (max-width: 991px) {
                .p_ensure_delivering .list-item h3 {
                    font-size: 20px;
                    letter-spacing: 4px;
                }
            }

            .p_ensure_delivering .list-item p {
                color:  #231F20;
                text-align: center;
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;
                letter-spacing: 2px;
            }
            @media only screen and (max-width: 991px) {
                .p_ensure_delivering .list-item p {
                    font-size: 16px;
                    letter-spacing: 1.6px;
                }
            }

            .p_ensure_delivering .list-item hr {
                max-width: 200px;
                margin: 0 auto;
                height: 1px;
                background-color: #231F20;
                width: 100%;
            }

            .p_ensure_delivering .list-item:nth-child(2) {
                box-shadow: -23px 23px #231F20;
            }

            .p_ensure_delivering .image-bg {
                position: absolute;
                top: 0;
                left: 0;
                height: 1041px;
                width: 100%;
                object-fit: cover;
            }
            @media only screen and (max-width: 991px) {
                .p_ensure_delivering .image-bg {
                    height: 100%;
                }
            }


        </style>
    <?php endif; ?>
</section>