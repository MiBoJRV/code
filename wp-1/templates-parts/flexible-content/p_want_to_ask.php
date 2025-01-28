<?php global $wantAsk;
$wantAsk++; ?>

<?php
$bgImage = get_sub_field('section_background');
?>

<section class="p_want_to_ask p_want_to_ask-<?php echo $wantAsk; ?> <?php echo get_sub_field('custom_class'); ?>"
         style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_want_to_ask__content">
        <h2 class="_anim-items _anim-no-hide">
            <?php echo get_sub_field('title'); ?>
        </h2>
        <ul class="list">
            <?php if (have_rows('list')): ?>
                <?php while (have_rows('list')):
                    the_row(); ?>
                    <li class="list-item _anim-items _anim-no-hide">
                        <h3><?php echo get_sub_field('list_title'); ?></h3>
                        <hr>
                        <p><?php echo get_sub_field('list_text'); ?></p>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>
    <?php $image = get_sub_field('image'); ?>
    <img class="main_img _anim-items _anim-no-hide" src="<?php echo $image['url'] ?>"
         alt="<?php echo $image['alt'] ?>"/>
    <?php if (get_sub_field('show_divider') != 'no'): ?>
        <?php
        $bgDivider = get_sub_field('divider_background');
        ?>
        <div class="divider" style="background-image:url('<?php echo $bgDivider['url']; ?>');">
        </div>
    <?php endif; ?>
    <?php if ($wantAsk < 2): ?>
        <style>
            .p_want_to_ask {
                padding-top: 64px;
                padding-bottom: 248px;
                position: relative;
            }

            @media only screen and (max-width: 991px) {
                .p_want_to_ask {
                    padding-bottom: 0;
                    padding-top: 50px;
                }
            }

            .p_want_to_ask .p_want_to_ask__content {
                max-width: 1278px;
                padding: 0 20px;
                margin: 0 auto;
                position: relative;
            }

            @media only screen and (max-width: 991px) {
                .p_want_to_ask .p_want_to_ask__content {
                    padding: 0 8px;
                }
            }

            .p_want_to_ask h2 {
                color: #FFFCE9;
                text-shadow: 8px 4px 1px #101010;
                font-family: 'Montserrat', system-ui;
                font-size: 48px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4.8px;
                text-transform: uppercase;
                margin: 0 auto 114px;
                text-align: center;

                transform: translateY(-250%);
                opacity: 0;
                transition: all 0.8s ease 0.5s;
            }

            .p_want_to_ask h2._active {
                transform: translateY(0);
                opacity: 1;
            }

            @media only screen and (max-width: 991px) {
                .p_want_to_ask h2 {
                    font-size: 36px;
                    letter-spacing: 3.6px;
                    margin-bottom: 50px;
                }
            }

            .p_want_to_ask .list {
                display: grid;
                row-gap: 40px;
                column-gap: 0;
                grid-template-areas:
                    'el-1 el-2'
                    'el-3 el-4'
                    'el-5 el-6';
                justify-content: space-between;
                position: relative;
                z-index: 10;
            }

            @media only screen and (max-width: 991px) {
                .p_want_to_ask .list {
                    grid-template-areas:
                    'el-1'
                    'el-2'
                    'el-3'
                    'el-4'
                    'el-5'
                    'el-6';
                    justify-content: center;
                    gap: 60px;
                }
            }

            .p_want_to_ask .list-item:nth-child(1) {
                grid-area: el-1;
                box-shadow: -10px 10px #231F20;

                opacity: 0;
                transform: translate(-150%, 0);
                transition: all 0.8s ease 0s;
            }

            .p_want_to_ask .list-item:nth-child(1)._active {
                opacity: 1;
                transform: translate(0, 0);
            }

            .p_want_to_ask .list-item:nth-child(2) {
                grid-area: el-3;
                box-shadow: -10px 10px #231F20;

                opacity: 0;
                transform: translate(-150%, 0);
                transition: all 0.8s ease 0s;
            }

            .p_want_to_ask .list-item:nth-child(2)._active {
                opacity: 1;
                transform: translate(0, 0);
            }

            .p_want_to_ask .list-item:nth-child(3) {
                grid-area: el-5;
                box-shadow: -10px 10px #231F20;

                opacity: 0;
                transform: translate(-150%, 0);
                transition: all 0.8s ease 0s;
            }

            .p_want_to_ask .list-item:nth-child(3)._active {
                opacity: 1;
                transform: translate(0, 0);
            }

            .p_want_to_ask .list-item:nth-child(4) {
                grid-area: el-2;
                box-shadow: 10px 10px #231F20;

                opacity: 0;
                transform: translate(150%, 0);
                transition: all 0.8s ease 0s;
            }

            .p_want_to_ask .list-item:nth-child(4)._active {
                opacity: 1;
                transform: translate(0, 0);
            }

            .p_want_to_ask .list-item:nth-child(5) {
                grid-area: el-4;
                box-shadow: 10px 10px #231F20;

                opacity: 0;
                transform: translate(150%, 0);
                transition: all 0.8s ease 0s;
            }

            .p_want_to_ask .list-item:nth-child(5)._active {
                opacity: 1;
                transform: translate(0, 0);
            }

            .p_want_to_ask .list-item:nth-child(6) {
                grid-area: el-6;
                box-shadow: 10px 10px #231F20;

                opacity: 0;
                transform: translate(150%, 0);
                transition: all 0.8s ease 0s;
            }

            .p_want_to_ask .list-item:nth-child(6)._active {
                opacity: 1;
                transform: translate(0, 0);
            }

            /*.p_want_to_ask .list-item:nth-child(1):before {*/
            /*    left: -10px;*/
            /*    bottom: -10px;*/
            /*}*/

            /*.p_want_to_ask .list-item:nth-child(2):before {*/
            /*    left: -10px;*/
            /*    bottom: -10px;*/
            /*}*/

            /*.p_want_to_ask .list-item:nth-child(3):before {*/
            /*    left: -10px;*/
            /*    bottom: -10px;*/
            /*}*/

            /*.p_want_to_ask .list-item:nth-child(4):before {*/
            /*    right: -10px;*/
            /*    bottom: -10px;*/
            /*}*/

            /*.p_want_to_ask .list-item:nth-child(5):before {*/
            /*    right: -10px;*/
            /*    bottom: -10px;*/
            /*}*/

            /*.p_want_to_ask .list-item:nth-child(6):before {*/
            /*    right: -10px;*/
            /*    bottom: -10px;*/
            /*}*/

            .p_want_to_ask .list-item {
                border: 3px solid #231F20;
                background: #FFFCE9;
                display: flex;
                padding: 20px 10px;
                flex-direction: column;
                justify-content: flex-start;
                align-items: center;
                gap: 25px;
                max-width: 379px;
                width: 100%;
                min-height: 300px;
                position: relative;
                /*transform-style: preserve-3d;*/
            }

            /*.p_want_to_ask .list-item:before {*/
            /*    content: '';*/
            /*    position: absolute;*/
            /*    width: 100%;*/
            /*    height: 100%;*/
            /*    flex-shrink: 0;*/
            /*    background-color: #231F20;*/
            /*    z-index: -1;*/
            /*    transform: translateZ(-1px);*/
            /*}*/

            .p_want_to_ask .list-item h3 {
                color: #231F20;
                text-align: center;
                font-family: 'Roboto', system-ui;
                font-size: 24px;
                font-style: normal;
                font-weight: 800;
                line-height: normal;
                letter-spacing: 4.8px;
                text-transform: capitalize;
            }

            .p_want_to_ask .list-item hr {
                max-width: 200px;
                margin: 0 auto;
                height: 1px;
                background-color: #231F20;
                width: 100%;
            }

            .p_want_to_ask .list-item p {
                color: #231F20;
                text-align: center;
                font-family: 'Roboto', system-ui;
                font-size: 20px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;
                letter-spacing: 2px;
            }

            @media only screen and (max-width: 991px) {
                .p_want_to_ask .list-item p {
                    font-size: 16px;
                    font-weight: 600;
                    line-height: normal;
                    letter-spacing: 1.6px;
                }
            }

            .p_want_to_ask .main_img {
                position: absolute;
                bottom: 32px;
                opacity: 0;
                transition: all 0.8s ease 0s;
                max-height: 1248px;
                left: 50%;
                transform: translate(-50%, 0);
            }

            .p_want_to_ask .main_img._active {
                opacity: 1;
                /*position: relative;*/
                margin-top: 90px;
            }

            @media only screen and (max-width: 991px) {
                .p_want_to_ask .main_img._active {
                    position: relative;
                }
            }

            .p_want_to_ask .divider {
                height: 36px;
                width: 100%;
                position: absolute;
                bottom: 0;
            }
        </style>
    <?php endif; ?>
</section>