<?php global $WelcomeAff;
$WelcomeAff++; ?>
<?php
$bgImage = get_sub_field('section_background');
?>
<section
        class="p_affiliates_welcome p_affiliates_welcome-<?php echo $WelcomeAff; ?> <?php echo get_sub_field('custom_class'); ?>"
        style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_affiliates_welcome__content">
        <div class="title _anim-items _anim-no-hide">
            <h2><?php echo get_sub_field('section_title'); ?></h2>
            <p><?php echo get_sub_field('section_text'); ?></p>
        </div>
        <ul class="list">
            <?php if (have_rows('list')): ?>
                <?php while (have_rows('list')):
                    the_row(); ?>
                    <li class="list-item_wrap _anim-items _anim-no-hide">
                        <?php $image = get_sub_field('list_image'); ?>
                        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
                        <div class="list-item-block">
                            <div class="list-item">
                                <h3><?php echo get_sub_field('list_title'); ?></h3>
                                <p><?php echo get_sub_field('list_text'); ?></p>
                            </div>
                        </div>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
        <div class="bottom_text _anim-items _anim-no-hide">
            <p><?php echo get_sub_field('bottom_text'); ?></p>
            <a href="<?php echo get_sub_field('button_link'); ?>" class="button">
                <?php echo get_sub_field('button_text'); ?>
            </a>
        </div>

    </div>
    <?php if (get_sub_field('show_divider') != 'no'): ?>
        <?php
        $bgDivider = get_sub_field('divider_background');
        ?>
        <div class="divider" style="background-image:url('<?php echo $bgDivider['url']; ?>');">
        </div>
    <?php endif; ?>
    <?php if ($WelcomeAff < 2): ?>
        <style>
            .p_affiliates_welcome {
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                position: relative;
            }

            .p_affiliates_welcome .p_affiliates_welcome__content {
                max-width: 1316px;
                width: 100%;
                margin: 0 auto;
                padding: 94px 20px 108px 20px;
            }

            @media only screen and (max-width: 991px) {
                .p_affiliates_welcome .p_affiliates_welcome__content {
                    padding: 50px 10px 100px;
                }
            }

            .p_affiliates_welcome .title {
                opacity: 0;
                transform: translate(0%, -150%);
                transition: all 0.8s ease 0s;
            }

            .p_affiliates_welcome .title._active {
                opacity: 1;
                transform: translate(0, 0);
            }

            .p_affiliates_welcome h2 {
                color: #231F20;
                text-align: center;
                font-family: 'Montserrat', system-ui;
                font-size: 48px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4.8px;
                text-transform: uppercase;
                max-width: 982px;
                margin: 0 auto 15px;
                text-shadow: 8px 8px 0 #FFFCE9, 0 -3px 0 #FFFCE9, 3px -3px 0 #FFFCE9, 3px 0 0 #FFFCE9, 3px 8px 0 #FFFCE9, 0 3px 0 #FFFCE9, -3px 3px 0 #FFFCE9, -3px 0 0 #FFFCE9;
            }

            @media only screen and (max-width: 991px) {
                .p_affiliates_welcome h2 {
                    font-size: 32px;
                    letter-spacing: 3.2px;
                    margin-bottom: 30px;
                }

                *:lang(ua-UA) .p_affiliates_welcome h2{
                    font-size: 24px;
                    letter-spacing: 2.4px;
                }
            }


            .p_affiliates_welcome .title p {
                color: #231F20;
                text-align: center;
                font-family: 'Roboto', sans-serif;
                font-size: 24px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4.8px;
                text-transform: uppercase;
                background: #FFFCE9;

                width: 100%;
                max-width: 633px;
                margin: 0 auto 55px;
            }

            *:lang(ua-UA) .p_affiliates_welcome .title p {
                max-width: 670px;
            }

            .p_affiliates_welcome .bottom_text p {
                max-width: 903px;
                margin: 0 auto;
                color: #FFFCE9;
                text-align: center;
                font-family: 'Roboto', sans-serif;
                font-size: 24px;
                font-style: normal;
                font-weight: 900;
                line-height: 38px;
                letter-spacing: 4.8px;
                text-transform: uppercase;
                text-shadow: 0 -5px 0 #000000, 0 -5px 0 #000000, 0 5px 0 #000000, 0 5px 0 #000000, -5px 0 0 #000000, 5px 0 0 #000000, -5px 0 0 #000000, 5px 0 0 #000000, -1px -5px 0 #000000, 1px -5px 0 #000000, -1px 5px 0 #000000, 1px 5px 0 #000000, -5px -1px 0 #000000, 5px -1px 0 #000000, -5px 1px 0 #000000, 5px 1px 0 #000000, -2px -5px 0 #000000, 2px -5px 0 #000000, -2px 5px 0 #000000, 2px 5px 0 #000000, -5px -2px 0 #000000, 5px -2px 0 #000000, -5px 2px 0 #000000, 5px 2px 0 #000000, -3px -5px 0 #000000, 3px -5px 0 #000000, -3px 5px 0 #000000, 3px 5px 0 #000000, -5px -3px 0 #000000, 5px -3px 0 #000000, -5px 3px 0 #000000, 5px 3px 0 #000000, -4px -5px 0 #000000, 4px -5px 0 #000000, -4px 5px 0 #000000, 4px 5px 0 #000000, -5px -4px 0 #000000, 5px -4px 0 #000000, -5px 4px 0 #000000, 5px 4px 0 #000000, -5px -5px 0 #000000, 5px -5px 0 #000000, -5px 5px 0 #000000, 5px 5px 0 #000000, -5px -5px 0 #000000, 5px -5px 0 #000000, -5px 5px 0 #000000, 5px 5px 0 #000000;
            }


            @media only screen and (max-width: 991px) {
                .p_affiliates_welcome .title p {
                    margin-bottom: 30px;
                }
            }

            .p_affiliates_welcome .title p {
                margin-bottom: 55px;
            }

            .p_affiliates_welcome .list {
                display: grid;
                grid-template-areas:
                    'el-1 el-2'
                    'el-3 el-4'
                    'el-5 el-5';
                column-gap: 12px;
                grid-template-columns: 50% 50%;
            }

            @media only screen and (max-width: 991px) {
                .p_affiliates_welcome .list {
                    grid-template-areas:
                        'el-1'
                        'el-2'
                        'el-3'
                        'el-4'
                        'el-5';
                    justify-content: center;
                    grid-template-columns: auto;
                }
            }

            .p_affiliates_welcome .list-item_wrap {
                display: flex;
                gap: 30px;
                align-items: flex-start;

            }

            .p_affiliates_welcome .list-item_wrap:nth-child(even) {
                flex-direction: row-reverse;
                opacity: 0;
                transform: translate(150%, 57%);
                transition: all 0.8s ease 0s;

            }

            .p_affiliates_welcome .list-item_wrap:nth-child(even)._active {
                opacity: 1;
                transform: translate(0, 57%);

            }

            @media only screen and (max-width: 991px) {
                .p_affiliates_welcome .list-item_wrap:nth-child(even)._active {
                    transform: translate(0, 0) !important;

                }
            }

            .p_affiliates_welcome .list-item_wrap:nth-child(odd) {
                opacity: 0;
                transform: translate(-150%, 0);
                transition: all 0.8s ease 0s;

            }

            .p_affiliates_welcome .list-item_wrap:nth-child(odd)._active {
                opacity: 1;
                transform: translate(0, 0);

            }

            @media only screen and (max-width: 991px) {
                gap: 0;
            }

            /*.p_affiliates_welcome .list-item_wrap:nth-child(even) {*/
            /*    flex-direction: row-reverse;*/
            /*    transform: translate(0, 57%);*/
            /*}*/

            @media only screen and (max-width: 991px) {
                .p_affiliates_welcome .list-item_wrap:nth-child(even) {
                    transform: translate(150%,0);
                }
            }

            @media only screen and (max-width: 991px) {
                .p_affiliates_welcome .list-item_wrap:nth-child(even) .list-item-block {
                    padding: 4px 4px 15px 10px;
                }
            }

            @media only screen and (max-width: 991px) {
                .p_affiliates_welcome .list-item_wrap img {
                    display: none;
                }
            }


            .p_affiliates_welcome .list-item-block {
                padding: 15px 10px 4px 4px;
                background: #231F20;
                max-width: 461px;
                width: 100%;
                min-height: 280px;
                margin-bottom: 50px;
            }

            @media only screen and (max-width: 1250px) {
                .p_affiliates_welcome .list-item-block {
                    min-height: 360px;
                }
            }

            @media only screen and (max-width: 1050px) {
                .p_affiliates_welcome .list-item-block {
                    min-height: 380px;
                }
            }

            @media only screen and (max-width: 991px) {
                .p_affiliates_welcome .list-item-block {
                    min-height: auto;
                }
            }

            .p_affiliates_welcome .list-item {
                background: #FFFCE9;
                border: 3px solid #231F20;
                display: flex;
                padding: 12px 20px;
                flex-direction: column;
                justify-content: flex-start;
                gap: 20px;
                position: relative;
                min-height: 261px;
            }

            @media only screen and (max-width: 1250px) {
                .p_affiliates_welcome .list-item {
                    min-height: 341px;
                }
            }

            @media only screen and (max-width: 1050px) {
                .p_affiliates_welcome .list-item {
                    min-height: 361px;
                }
            }

            @media only screen and (max-width: 991px) {
                .p_affiliates_welcome .list-item {
                    min-height: auto;
                }
            }

            .p_affiliates_welcome .list-item h3 {
                color: #231F20;
                font-family: 'Roboto', sans-serif;
                font-size: 24px;
                font-style: normal;
                font-weight: 800;
                line-height: normal;
                letter-spacing: 2.4px;
            }

            @media only screen and (max-width: 991px) {
                .p_affiliates_welcome .list-item h3 {
                    font-weight: 600;
                    letter-spacing: 2.4px;
                }
            }

            .p_affiliates_welcome .list-item p {
                color: #231F20;
                font-family: 'Roboto', sans-serif;
                font-size: 15px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;
                letter-spacing: 1.5px;
            }

            .p_affiliates_welcome .button {
                display: flex;
                width: 196px;
                height: 63px;
                justify-content: center;
                align-items: center;
                gap: 10px;
                flex-shrink: 0;
                color: #FFFCE9;
                text-align: center;
                text-shadow: 0px 4px 14px rgba(251, 254, 255, 0.45);
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 2px;
                text-transform: uppercase;
                border-radius: 30px;
                background: #FF7A00;
                box-shadow: 8px 4px 1px 0px #000;
                margin: 55px auto 0;
            }

            *:lang(ua-UA) .p_affiliates_welcome .button {
                max-width: 252px;
                width: auto;
            }

            .p_affiliates_welcome .button:hover {
                background-color: #FF983A;;
            }

            .p_affiliates_welcome .button:active {
                background-color: #307847;;
            }

            .p_affiliates_welcome .divider {
                height: 36px;
                width: 100%;
                position: absolute;
                bottom: 0;
                left: 0;
                z-index: 100;
            }

            .p_affiliates_welcome .bottom_text {
                opacity: 0;
                transform: translate(0, 150%);
                transition: all 0.8s ease 0s;
            }

            .p_affiliates_welcome .bottom_text._active {
                opacity: 1;
                transform: translate(0, 0);
            }
        </style>
    <?php endif; ?>
</section>