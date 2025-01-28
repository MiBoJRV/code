<?php global $manifesto;
$manifesto++; ?>
<?php
$bgImage = get_sub_field('section_background');
?>

<section class="p_our_manifesto p_our_manifesto-<?php echo $manifesto; ?> <?php echo get_sub_field('custom_class'); ?>"
         style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_our_manifesto__content ">
        <div class="title-content _anim-items _anim-no-hide">
            <h2 class="title"><?php echo get_sub_field('title'); ?></h2>
            <p class="text"><?php echo get_sub_field('text'); ?></p>
        </div>
        <div class="main-content">
            <div class="left-side">
                <ul class="list _anim-items _anim-no-hide">
                    <?php if (have_rows('list')): ?>
                        <?php while (have_rows('list')):
                            the_row(); ?>
                            <li class="list-item">
                                <h3><?php echo get_sub_field('list_title'); ?></h3>
                                <hr>
                                <p><?php echo get_sub_field('list_text'); ?></p>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="right-side">
                <?php $image = get_sub_field('image'); ?>
                <img class="_anim-items _anim-no-hide" src="<?php echo $image['url'] ?>"
                     alt="<?php echo $image['alt'] ?>"/>
                <a class="button _anim-items _anim-no-hide" href="<?php echo get_sub_field('button_link'); ?>">
                    <?php echo get_sub_field('button_text'); ?>
                </a>
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
    <?php if ($manifesto < 2): ?>
        <style>
            .p_our_manifesto {
                position: relative;
            }

            .p_our_manifesto .title-content {
                opacity: 0;
                transform: translate(0, -100%);
                transition: all 0.8s ease 0.1s;
            }

            .p_our_manifesto .title-content._active {
                transform: translate(0, 0);
                opacity: 1;
                position: relative;
                z-index: 10;
            }

            .p_our_manifesto .p_our_manifesto__content {
                max-width: 1278px;
                /*padding: 0 20px;*/
                margin: 0 auto;
                position: relative;
                padding: 100px 20px 133px;
            }

            @media only screen and (max-width: 991px) {
                .p_our_manifesto .p_our_manifesto__content {
                    padding: 50px 20px 59px;
                }
            }

            .p_our_manifesto .main-content {
                display: flex;
            }

            @media only screen and (max-width: 1200px) {
                .p_our_manifesto .main-content {
                    flex-direction: column;
                }
            }

            .p_our_manifesto .title {
                color: #231F20;
                font-family: 'Montserrat', system-ui;
                font-size: 48px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4.8px;
                text-transform: uppercase;
                max-width: 790px;
                width: 100%;
                margin-bottom: 36px;
            }

            @media only screen and (max-width: 991px) {
                .p_our_manifesto .title {
                    color: #231F20;
                    font-family: 'Montserrat', system-ui;
                    font-size: 36px;
                    font-style: normal;
                    font-weight: 900;
                    line-height: normal;
                    letter-spacing: 3.6px;
                    text-transform: uppercase;
                    margin-bottom: 50px;
                }
            }

            .p_our_manifesto .text {
                color: #231F20;
                font-family: 'Roboto', sans-serif;
                font-size: 24px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;
                letter-spacing: 2.4px;
                max-width: 730px;
                width: 100%;
                margin-bottom: 50px;
            }

            .p_our_manifesto .left-side {
                width: 100%;
                min-width: 730px;
            }

            @media only screen and (max-width: 991px) {
                .p_our_manifesto .left-side {
                    min-width: unset;

                }
            }

            .p_our_manifesto .right-side {
                position: absolute;
                transform: translate(84px, -277px);
                right: 0;
            }

            @media only screen and (max-width: 1200px) {
                .p_our_manifesto .right-side {
                    position: relative;
                    transform: none;
                    margin-top: 50px;
                    text-align: center;
                }
            }
            
            @media only screen and (max-width: 991px) {
                .p_our_manifesto .right-side {

                }
            }

            .p_our_manifesto .right-side img {
                max-width: 820px;
                opacity: 0;
                transform: translate(150%, 0);
                transition: all 0.8s ease 0s;
            }

            .p_our_manifesto .right-side img._active {
                opacity: 1;
                transform: translate(0, 0);
                width: 100%;
            }

            @media only screen and (max-width: 991px) {

            }

            .p_our_manifesto .list {
                display: grid;
                row-gap: 30px;
                column-gap: 30px;
                grid-template-areas:
                    'el-1 el-1'
                    'el-2 el-3'
                    'el-4 el-5';
                justify-content: space-between;
                position: relative;
                z-index: 10;
                max-width: 730px;
                width: 100%;

                opacity: 0;
                transform: translate(-150%, 0);
                transition: all 0.8s ease 0s;
            }

            @media only screen and (max-width: 768px) {
                .p_our_manifesto .list {
                    grid-template-areas:
                    'el-1'
                    'el-2'
                    'el-3'
                    'el-4'
                    'el-5';
                    justify-content: center;
                }
            }

            .p_our_manifesto .list._active {
                opacity: 1;
                transform: translate(0, 0);
            }

            .p_our_manifesto .list-item {
                display: inline-flex;
                min-height: 366px;
                max-width: 350px;
                width: 100%;
                padding: 20px 10px;
                flex-direction: column;
                align-items: center;
                gap: 20px;
                flex-shrink: 0;
                border: 1px solid #231F20;
            }

            @media only screen and (max-width: 991px) {
                .p_our_manifesto .list-item {
                    min-height: 310px;
                }
            }

            .p_our_manifesto .list-item:nth-child(1) {
                grid-area: el-1;
            }

            .p_our_manifesto .list-item:nth-child(2) {
                grid-area: el-2;
            }

            .p_our_manifesto .list-item:nth-child(3) {
                grid-area: el-3;
            }

            .p_our_manifesto .list-item:nth-child(4) {
                grid-area: el-4;
            }

            .p_our_manifesto .list-item:nth-child(5) {
                grid-area: el-5;
            }

            .p_our_manifesto .list-item hr {
                max-width: 330px;
                margin: 0 auto;
                height: 1px;
                background: #231F20;
                width: 100%;
            }

            .p_our_manifesto .list-item h3 {
                color: #231F20;
                text-align: center;
                font-family: 'Roboto', system-ui;
                font-size: 24px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;
                letter-spacing: 2.4px;
            }

            .p_our_manifesto .list-item p {
                color: #231F20;
                text-align: center;
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-style: normal;
                font-weight: 700;
                line-height: normal;
                letter-spacing: 4px;
            }

            @media only screen and (max-width: 768px) {
                .p_our_manifesto .list-item p {
                    font-size: 16px;
                    letter-spacing: 3.2px;
                }
            }

            .p_our_manifesto .button {
                display: flex;
                width: 159px;

                /*width: 100%;*/
                height: 63px;
                padding: 20px 50px;
                justify-content: center;
                align-items: center;
                gap: 10px;
                color: #FFFCE9;
                text-align: center;
                text-shadow: 0 4px 14px rgba(251, 254, 255, 0.45);
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 2px;
                text-transform: uppercase;
                border-radius: 30px;
                background: #FF7A00;
                box-shadow: 8px 4px 1px 0 #000;
                margin: auto 60px 0 auto;


                opacity: 0;
                transform: translate(0, 550%);
                transition: all 0.8s ease 0s;
            }

            *:lang(ua-UA) .p_our_manifesto .button {
                max-width: 252px;
                width: auto;
            }

            .p_our_manifesto .button:hover {
                background-color: #FF983A;;
            }

            .p_our_manifesto .button:active {
                background-color: #307847;;
            }

            .button._active {
                opacity: 1;
                transform: translate(-45px, 171px);
            }
            
            @media only screen and (max-width: 1200px) {
                .button._active {
                    position: absolute;
                    bottom: 124px;
                    left: 50%;
                    transform: translate(-50%, 0);
                }
            }

            .p_our_manifesto .divider {
                height: 36px;
                width: 100%;
                position: absolute;
                bottom: 0;
            }
        </style>
    <?php endif; ?>
</section>