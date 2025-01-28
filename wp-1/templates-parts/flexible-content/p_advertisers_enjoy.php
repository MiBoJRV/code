<?php global $enjoyAd;
$enjoyAd++; ?>
<?php
$bgImage = get_sub_field('section_background');
?>
<?php
$bgImageTop = get_sub_field('top_image_background');
?>
<?php
$bgImageBottom = get_sub_field('bottom_image_background');
?>
<section
        class="p_advertisers_enjoy p_advertisers_enjoy-<?php echo $enjoyAd; ?> <?php echo get_sub_field('custom_class'); ?>"
        style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_advertisers_enjoy-wrap">
        <div class="top-img">
            <?php $imageTop = get_sub_field('top_image'); ?>
            <img src="<?php echo $imageTop ['url'] ?>" alt="<?php echo $imageTop['alt'] ?>"/>
        </div>
        <div class="p_advertisers_enjoy__content">
            <h2 class="_anim-items _anim-no-hide"><?php echo get_sub_field('title'); ?></h2>
            <ul class="list">
                <?php if (have_rows('list')): ?>
                    <?php while (have_rows('list')):
                        the_row(); ?>
                        <li class="list-item _anim-items _anim-no-hide">
                            <div class="list-item-block">
                                <h3><?php echo get_sub_field('list_title'); ?></h3>
                                <p><?php echo get_sub_field('list_text'); ?></p>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
        <div class="bottom-img">

            <?php $imageBot = get_sub_field('bottom_image'); ?>
            <img src="<?php echo $imageBot['url'] ?>" alt="<?php echo $imageBot['alt'] ?>"/>
        </div>
    </div>
    <?php if ($enjoyAd < 2): ?>
        <style>
            .p_advertisers_enjoy {
                position: relative;
            }

            .p_advertisers_enjoy .top-img {
                position: absolute;
                left: 0;
                top: 250px;
            }

            @media only screen and (max-width: 1600px) {
                .p_advertisers_enjoy .top-img {
                    left: -300px;
                }
            }
            @media only screen and (max-width: 1200px) {
                .p_advertisers_enjoy .top-img {
                    left: -500px;
                }
            }

            @media only screen and (max-width: 991px) {
                .p_advertisers_enjoy .top-img {
                    background-repeat: no-repeat;
                    /*width: 1921px;*/
                    /*height: 1435px;*/
                    background-image: url("<?php echo $bgImageTop['url']; ?>");
                    width: 100%;
                    height: 100%;
                    background-size: contain;
                    background-position: top center;
                    left: 0;
                }
            }

            @media only screen and (max-width: 991px) {
                .p_advertisers_enjoy .top-img img {
                    display: none;
                }
            }

            .p_advertisers_enjoy .bottom-img {
                position: absolute;
                right: 0;
                bottom: 0;
            }

            @media only screen and (max-width: 1600px) {
                .p_advertisers_enjoy .bottom-img {
                    right: -300px;
                }
            }
            @media only screen and (max-width: 1200px) {
                .p_advertisers_enjoy .bottom-img {
                    right: -400px;
                }
            }

            @media only screen and (max-width: 991px) {
                .p_advertisers_enjoy .bottom-img {
                    background-repeat: no-repeat;
                    /*width: 1214px;*/
                    /*height: 860px;*/
                    right: 0;
                    background-image: url("<?php echo $bgImageBottom['url']; ?>");
                    width: 100%;
                    height: 100%;
                    background-size: contain;
                    background-position: bottom center;
                }
            }

            @media only screen and (max-width: 991px) {
                .p_advertisers_enjoy .bottom-img img {
                    display: none;
                }
            }

            .p_advertisers_enjoy-wrap {
                position: relative;
                /*max-width: 1920px;*/
                width: 100%;
                margin: 0 auto;
                overflow: hidden;
            }

            .p_advertisers_enjoy .p_advertisers_enjoy__content {
                max-width: 1297px;
                width: 100%;
                margin: 0 auto;
                padding: 100px 20px 120px;
                position: relative;
                z-index: 10;
            }

            *:lang(ua-UA) .p_advertisers_enjoy .p_advertisers_enjoy__content {
                max-width: 1461px;
            }

            @media only screen and (max-width: 991px) {
                .p_advertisers_enjoy .p_advertisers_enjoy__content {
                    padding: 50px 20px 100px;
                }
            }

            .p_advertisers_enjoy h2 {
                color: #FFFCE9;
                text-align: center;
                /*text-shadow: 9px 7px 0px #000;*/
                font-family: 'Montserrat', sans-serif;
                font-size: 74px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 7.4px;
                text-transform: uppercase;
                margin-bottom: 50px;
                text-shadow: 8px 8px 0 #000, 0 -3px 0 #000, 3px -3px 0 #000, 3px 0 0 #000, 3px 8px 0 #000, 0 3px 0 #000, -3px 3px 0 #000, -3px 0 0 #000;

                opacity: 0;
                transform: translate(0, -100%);
                transition: all 0.8s ease 0s;
            }

            .p_advertisers_enjoy h2._active{
                opacity: 1;
                transform: translate(0, 0);
            }



            @media only screen and (max-width: 991px) {
                .p_advertisers_enjoy h2 {
                    font-size: 36px;
                    letter-spacing: 3.6px;
                    text-shadow: none;
                    font-weight: 900;
                    font-family: 'Montserrat', system-ui;
                }

                *:lang(ua-UA) .p_advertisers_enjoy h2 {
                    font-size: 27px;
                    letter-spacing: 2.7px;
                }
            }

            @media only screen and (max-width: 389px) {
                *:lang(ua-UA) .p_advertisers_enjoy h2 {
                    font-size: 21px;
                    letter-spacing: 2.1px;
                }
            }

            .p_advertisers_enjoy .list {
                display: flex;
                flex-direction: column;
                align-items: center;
                max-width: 1297px;
                margin: 0 auto;
            }

            .p_advertisers_enjoy .list-item {
                padding: 16px 16px 5px 6px;
                background: #231F20;
                max-width: 760px;
                width: 100%;
                min-height: 318px;
                margin-bottom: 50px;
                transition: all 0.8s ease 0s;
            }


            @media only screen and (max-width: 991px) {
                .p_advertisers_enjoy .list-item {
                    padding: 20px 8px 6px 3px;
                }

            }
            .p_advertisers_enjoy .list-item._active {
                opacity: 1;
                transform: translate(0, 0%);
            }

            .p_advertisers_enjoy .list-item:last-of-type {
                margin-bottom: 0;
            }


            .p_advertisers_enjoy .list-item:nth-child(1) {
                align-self: flex-end;
                transform: translate(150%, 0%);
            }
            .p_advertisers_enjoy .list-item._active:nth-child(1) {
                transform: translate(0, 0%);
            }

            .p_advertisers_enjoy .list-item:nth-child(2) {
                align-self: flex-end;
                transform: translate(150%, 0%);
            }
            .p_advertisers_enjoy .list-item._active:nth-child(2) {
                transform: translate(0, 0%);
            }

            .p_advertisers_enjoy .list-item:nth-child(3) {
                align-self: flex-end;
                transform: translate(150%, 0%);
            }
            .p_advertisers_enjoy .list-item._active:nth-child(3) {
                transform: translate(0, 0%);
            }

            .p_advertisers_enjoy .list-item:nth-child(4) {
                align-self: flex-start;
                transform: translate(-150%, 0%);
            }
            .p_advertisers_enjoy .list-item._active:nth-child(4) {
                transform: translate(0, 0%);
            }

            .p_advertisers_enjoy .list-item:nth-child(5) {
                align-self: flex-start;
                transform: translate(-150%, 0%);
            }
            .p_advertisers_enjoy .list-item._active:nth-child(5) {
                transform: translate(0, 0%);
            }

            .p_advertisers_enjoy .list-item-block {
                background: #FFFCE9;
                border: 3px solid #231F20;
                display: flex;
                padding: 12px 20px;
                flex-direction: column;
                justify-content: flex-start;
                gap: 30px;
                position: relative;
                min-height: 299px;
            }

            .p_advertisers_enjoy .list h3 {
                color: #231F20;
                font-family: 'Roboto', system-ui;
                font-size: 32px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 6.4px;
                text-transform: uppercase;
            }

            @media only screen and (max-width: 991px) {
                .p_advertisers_enjoy .list h3 {
                    font-size: 24px;
                    letter-spacing: 4.8px;
                }
            }

            .p_advertisers_enjoy .list p {
                color: #231F20;
                font-family: 'Roboto', system-ui;
                font-size: 24px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;
                letter-spacing: 2.4px;
            }

            @media only screen and (max-width: 991px) {
                .p_advertisers_enjoy .list p {
                    font-size: 20px;
                    letter-spacing: 2px;
                }
            }
        </style>
    <?php endif; ?>
</section>