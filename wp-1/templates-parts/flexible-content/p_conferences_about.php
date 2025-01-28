<?php global $confAbout;
$confAbout++; ?>
<?php
$bgImage = get_sub_field('section_background');
?>
<section
        class="p_conferences_about p_conferences_about-<?php echo $confAbout; ?> <?php echo get_sub_field('custom_class'); ?>"
        style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_conferences_about__content">
        <h2 class="_anim-items _anim-no-hide"><?php echo get_sub_field('title'); ?></h2>

        <ul class="list">
            <?php if (have_rows('list')): ?>
                <?php while (have_rows('list')):
                    the_row(); ?>
                    <li class="list-item _anim-items _anim-no-hide">
                        <h3><?php echo get_sub_field('list_title'); ?></h3>
                        <hr>
                        <?php echo get_sub_field('list_text'); ?>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>

    </div>
    <div class="section-image _anim-items _anim-no-hide">
        <?php $image = get_sub_field('image'); ?>
        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
    </div>
    <?php if (get_sub_field('show_divider') != 'no'): ?>
        <?php
        $bgDivider = get_sub_field('divider_background');
        ?>
        <div class="divider" style="background-image:url('<?php echo $bgDivider['url']; ?>');">
        </div>
    <?php endif; ?>

    <?php if ($confAbout < 2): ?>
        <style>
            .p_conferences_about {
                position: relative;
            }

            .p_conferences_about__content {
                max-width: 1288px;
                width: 100%;
                margin: 0 auto;
                padding: 100px 20px 0;
                position: relative;
                z-index: 10;
            }

            .p_conferences_about h2 {
                color: #FFF;
                text-align: center;
                text-shadow: 8px 4px 1px #101010;
                font-family: 'Montserrat', sans-serif;
                font-size: 48px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4.8px;
                text-transform: uppercase;
                max-width: 900px;
                margin: 0 auto 100px;

                opacity: 0;
                transform: translate( 0%, -100%);
                transition: all 0.8s ease 0s;
            }

            .p_conferences_about h2._active{
                opacity: 1;
                transform: translate(0, 0);
            }

            .p_conferences_about p {

            }

            .p_conferences_about .list {
                display: grid;
                grid-template-areas:
                    'el-1 el-2'
                    'el-4 el-3';
                grid-gap: 50px 20px;
                padding-bottom: 518px;
                position: relative;
                z-index: 10;
                justify-content: space-between;
            }

            @media only screen and (max-width: 991px) {
                .p_conferences_about .list {
                    grid-template-areas:
                        'el-1'
                        'el-2'
                        'el-3';
                    justify-content: center;
                    grid-template-columns: auto;
                    padding-bottom: 60px;
                }
            }


            .p_conferences_about .list-item {
                border: 3px solid #231F20;
                background: #FFFCE9;
                display: flex;
                padding: 25px 15px;
                flex-direction: column;
                /*justify-content: flex-start;*/
                gap: 15px;
                width: 100%;
                position: relative;
                max-width: 594px;
                min-height: 270px;

                opacity: 0;
                transition: all 0.8s ease 0s;
            }

            .p_conferences_about .list-item:nth-child(1) {
                grid-area: el-1;
                box-shadow: -15px 10px #231F20;
                transform: translate(-150%, 0%);
            }

            .p_conferences_about .list-item._active:nth-child(1) {
                opacity: 1;
                transform: translate(0, 0);
            }

            .p_conferences_about .list-item:nth-child(2) {
                grid-area: el-2;
                box-shadow: 15px 10px #231F20;
                transform: translate(150%, 0%);
            }
            .p_conferences_about .list-item._active:nth-child(2) {
                opacity: 1;
                transform: translate(0, 0);
            }

            .p_conferences_about .list-item:nth-child(3) {
                grid-area: el-3;
                box-shadow: 15px 10px #231F20;
                transform: translate(150%, 0%);
            }
            .p_conferences_about .list-item._active:nth-child(3) {
                opacity: 1;
                transform: translate(0, 0);
            }

            .p_conferences_about .list-item h3 {
                color: #231F20;
                font-family: 'Montserrat', sans-serif;
                font-size: 45px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 9px;
                text-transform: uppercase;
                margin: 0;
            }

            @media only screen and (max-width: 991px) {
                .p_conferences_about .list-item h3 {
                    font-size: 36px;
                    font-style: normal;
                    font-weight: 900;
                    line-height: normal;
                    letter-spacing: 3.6px;
                }
            }
            @media only screen and (max-width: 360px) {
                .p_conferences_about .list-item h3 {
                    font-size: 28px;
                    font-style: normal;
                    font-weight: 900;
                    line-height: normal;
                    letter-spacing: 2.8px;
                }
            }

            .p_conferences_about .list-item hr {
                max-width: 200px;
                margin: 0 auto 0 0;
                height: 1px;
                background-color: #231F20;
                width: 100%;
            }

            .p_conferences_about .list-item p {
                color: #231F20;
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;
                letter-spacing: 2px;
            }

            .p_conferences_about .section-image {
                margin: 0 auto;
                max-width: 1920px;
                width: 100%;
                position: absolute;
                bottom: 0;
                left: 50%;
                transform: translate(-50%, 0);

                opacity: 0;
                transition: all 0.8s ease 0s;
            }

            .p_conferences_about .section-image._active{
                opacity: 1;
            }

            @media only screen and (max-width: 991px) {
                .p_conferences_about .section-image {
                    position: static;
                    transform: none;
                }
            }

            @media only screen and (max-width: 480px) {
                .p_conferences_about .section-image img {
                    left: 50%;
                    max-width: 561px;
                    height: auto;
                    width: 561px;
                    transform: translate(-50%, 0);
                    position: relative;
                }
            }

            .p_conferences_about .divider {
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