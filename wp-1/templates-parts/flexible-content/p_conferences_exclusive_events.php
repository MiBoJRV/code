<?php global $exclusiveEvents;
$exclusiveEvents++; ?>
<?php
$bgImage = get_sub_field('section_background');
?>
<section
        class="p_conferences_exclusive_events p_conferences_exclusive_events-<?php echo $exclusiveEvents; ?> <?php echo get_sub_field('custom_class'); ?>"
        style="background-image:url('<?php echo $bgImage['url']; ?>');">

    <div class="p_conferences_exclusive_events__content">
        <div class="title _anim-items _anim-no-hide">
            <h2><?php echo get_sub_field('title'); ?></h2>
        </div>
        <div class="text _anim-items _anim-no-hide">
            <p><?php echo get_sub_field('text'); ?></p>
        </div>
        <ul class="list">
            <?php if (have_rows('list')): ?>
                <?php while (have_rows('list')):
                    the_row(); ?>
                    <li class="list-item _anim-items _anim-no-hide">
                        <h3> <?php echo get_sub_field('name_of_event'); ?></h3>
                        <hr>
                        <p><?php echo get_sub_field('about_event'); ?></p>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
        <div class="image">
            <?php $image = get_sub_field('image'); ?>
            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
        </div>
    </div>


    <?php if (get_sub_field('show_divider') != 'no'): ?>
        <?php
        $bgDivider = get_sub_field('divider_background');
        ?>
        <div class="divider" style="background-image:url('<?php echo $bgDivider['url']; ?>');">
        </div>
    <?php endif; ?>
    <?php if ($exclusiveEvents < 2): ?>
        <style>
            .p_conferences_exclusive_events {
                position: relative;
            }

            .p_conferences_exclusive_events .p_conferences_exclusive_events__content > div,
            .p_conferences_exclusive_events .p_conferences_exclusive_events__content > ul {
                position: relative;
                z-index: 10;
            }

            .p_conferences_exclusive_events .p_conferences_exclusive_events__content {
                max-width: 1270px;
                width: 100%;
                margin: 0 auto;
                padding: 0 20px;
                display: flex;
                flex-direction: column;
            }

            @media only screen and (max-width: 991px) {
                .p_conferences_exclusive_events .title {
                    order: 1;
                }

                .p_conferences_exclusive_events .text {
                    order: 2;
                }

                .p_conferences_exclusive_events .image {
                    order: 3;
                }

                .p_conferences_exclusive_events .list {
                    order: 4;
                }
            }
            .p_conferences_exclusive_events .title {
                opacity: 0;
                transform: translate(0%, -70%);
                transition: all 0.8s ease 0s;
            }

            .p_conferences_exclusive_events .title._active{
                opacity: 1;
                transform: translate(0, 0);
            }
            .p_conferences_exclusive_events h2 {
                color: #FFFCE9;
                text-align: center;
                text-shadow: 9px 7px 0px #000;
                font-family: 'Montserrat', sans-serif;
                font-size: 74px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 14.8px;
                text-transform: uppercase;
                margin: 0 0 155px;
                padding-top: 60px;
            }

            @media only screen and (max-width: 991px) {
                .p_conferences_exclusive_events h2 {
                    font-size: 36px;
                    letter-spacing: 3.6px;
                    padding-top: 100px;
                    margin-bottom: 50px;
                }
            }

            .p_conferences_exclusive_events .text {
                border: 3px solid #231F20;
                background: #FFFCE9;
                box-shadow: -15px 10px #231F20;
                max-width: 699px;
                width: 100%;
                padding: 40px 30px;
                margin-bottom: 120px;

                opacity: 0;
                transform: translate(-150%, 0%);
                transition: all 0.8s ease 0s;
            }

            .p_conferences_exclusive_events .text._active {
                opacity: 1;
                transform: translate(0, 0);
            }

            @media only screen and (max-width: 991px) {
                .p_conferences_exclusive_events .text {
                    margin-bottom: 20px;
                }
            }

            .p_conferences_exclusive_events p {
                color: #231F20;
                font-family: 'Roboto', sans-serif;
                font-size: 24px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4.8px;
            }

            @media only screen and (max-width: 991px) {
                .p_conferences_exclusive_events p {
                    font-size: 20px;
                    letter-spacing: 4px;
                }
            }

            .p_conferences_exclusive_events .list {
                display: flex;
                justify-content: space-between;
                gap: 10px;
                flex-wrap: wrap;
                padding-bottom: 43px;
            }

            @media only screen and (max-width: 991px) {
                .p_conferences_exclusive_events .list {
                    flex-direction: column;
                    align-items: center;
                    gap: 50px;
                    margin-bottom: 50px;
                    margin-top: 20px;
                }
            }

            .p_conferences_exclusive_events .list-item {
                border: 1px solid #231F20;
                background: #FFFCE9;
                max-width: 350px;
                width: 100%;
                min-height: 219px;
                display: flex;
                flex-direction: column;
                gap: 20px;
                padding: 20px 10px;

                opacity: 0;
                transform: translate(0%, 150%);
                transition: all 0.8s ease 0s;
            }

            .p_conferences_exclusive_events .list-item._active{
                opacity: 1;
                transform: translate(0, 0);
            }


            .p_conferences_exclusive_events .list-item h3 {
                color: #231F20;
                text-align: center;
                font-family: 'Roboto', sans-serif;
                font-size: 24px;
                font-style: normal;
                font-weight: 600;
                line-height: normal;
                letter-spacing: 2.4px;
            }

            .p_conferences_exclusive_events hr {
                max-width: 330px;
                margin: 0 auto;
                height: 1px;
                background-color: #231F20;
                width: 100%;
            }

            .p_conferences_exclusive_events .list-item p {
                color: #231F20;
                text-align: center;
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-style: normal;
                font-weight: 700;
                line-height: normal;
                letter-spacing: 4px;
            }

            .p_conferences_exclusive_events .image {
                position: absolute !important;
                left: 50%;
                top: 0;
                transform: translate(-50%, 0);
                height: 100%;
                margin: 0 auto;
                max-width: 1920px;
                width: 100%;
                z-index: 1 !important;
            }

            @media only screen and (max-width: 991px) {
                .p_conferences_exclusive_events .image {
                    position: relative !important;
                    z-index: 10 !important;
                    margin-left: -20px;
                }
            }

            .p_conferences_exclusive_events .image img {
                height: 100%;
                width: 100%;
                margin: 0 auto;
                text-align: center;
                position: relative;
                left: 50%;
                display: block;
                transform: translate(-50%, 0);
                object-fit: cover;
            }


            .p_conferences_exclusive_events .divider {
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