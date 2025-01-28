<?php global $provide;
$provide++; ?>
<?php
$bgImage = get_sub_field('section_background');
?>
<section
        class="p_education_provide p_education_provide-<?php echo $provide; ?> <?php echo get_sub_field('custom_class'); ?>"
        style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_education_provide__content">
        <h2 class="_anim-items _anim-no-hide"><?php echo get_sub_field('title'); ?></h2>
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
    <div class="section-image">
        <?php $image = get_sub_field('section_image'); ?>
        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
    </div>
    <?php if ($provide < 2): ?>
        <style>
            .p_education_provide {
                position: relative;
                z-index: 100;
            }

            .p_education_provide__content {
                max-width: 1290px;
                width: 100%;
                margin: 0 auto;
                padding: 200px 0 300px;
                position: relative;
                z-index: 10;
            }

            @media only screen and (max-width: 991px) {
                .p_education_provide__content {
                    padding: 100px 0;
                }
            }

            .p_education_provide h2 {
                color: #231F20;
                text-align: center;
                font-family: 'Montserrat', sans-serif;
                font-size: 84px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 8.4px;
                text-transform: uppercase;
                margin-bottom: 100px;
                text-shadow: -5px -5px 0 #fff, 0 -5px 0 #fff, 5px -5px 0 #fff, 5px 0 0 #fff, 5px 5px 0 #fff, 0 5px 0 #fff, -5px 5px 0 #fff, -5px 0 0 #fff;

                opacity: 0;
                transform: translate(0%, -260%);
                transition: all 0.8s ease 0s;
            }

            .p_education_provide h2._active {
                opacity: 1;
                transform: translate(0, 0);
            }

            @media only screen and (max-width: 991px) {
                .p_education_provide h2 {
                    font-size: 36px;
                    letter-spacing: 3.6px;
                    margin-bottom: 50px;
                }
            }

            .p_education_provide .list {
                display: flex;
                flex-direction: column;
                gap: 30px;
                align-items: flex-end;
                padding: 0 20px;
            }

            @media only screen and (max-width: 768px) {
                .p_education_provide .list {
                    padding: 0;
                }
            }

            .p_education_provide .list-item {
                border: 1px solid #307847;
                background: #FFFCE9;
                box-shadow: 15px 10px 1px 0 #101010;
                padding: 20px;
                min-height: 200px;
                gap: 20px;
                display: flex;
                flex-direction: column;

                opacity: 0;
                transition: all 0.8s ease 0s;
            }

            @media only screen and (max-width: 991px) {
                .p_education_provide .list-item {
                    gap: 30px;
                }
            }

            .p_education_provide .list-item:nth-child(1) {
                max-width: 1250px;
                width: 100%;
                transform: translate(-150%, 0%);
            }

            .p_education_provide .list-item._active:nth-child(1) {
                transform: translate(0, 0%);
                opacity: 1;
            }

            .p_education_provide .list-item:nth-child(2) {
                max-width: 1130px;
                width: 100%;
                transform: translate(-150%, 0%);
            }

            .p_education_provide .list-item._active:nth-child(2) {
                transform: translate(0, 0%);
                opacity: 1;
            }

            .p_education_provide .list-item:nth-child(3) {
                max-width: 1026px;
                width: 100%;
                transform: translate(-150%, 0%);
            }

            .p_education_provide .list-item._active:nth-child(3) {
                transform: translate(0, 0%);
                opacity: 1;
            }

            .p_education_provide .list-item:nth-child(4) {
                max-width: 853px;
                width: 100%;
                transform: translate(-150%, 0%);
            }

            .p_education_provide .list-item._active:nth-child(4) {
                transform: translate(0, 0%);
                opacity: 1;
            }

            .p_education_provide .list-item:nth-child(5) {
                max-width: 1026px;
                width: 100%;
                transform: translate(-150%, 0%);
            }

            .p_education_provide .list-item._active:nth-child(5) {
                transform: translate(0, 0%);
                opacity: 1;
            }

            .p_education_provide .list-item:nth-child(6) {
                max-width: 1130px;
                width: 100%;
                transform: translate(-150%, 0%);
            }

            .p_education_provide .list-item._active:nth-child(6) {
                transform: translate(0, 0%);
                opacity: 1;
            }

            .p_education_provide .list-item:nth-child(7) {
                max-width: 1250px;
                width: 100%;
                transform: translate(-150%, 0%);
            }

            .p_education_provide .list-item._active:nth-child(7) {
                transform: translate(0, 0%);
                opacity: 1;
            }

            .p_education_provide .list h3 {
                color: #231F20;
                font-family: 'Montserrat', sans-serif;
                font-size: 24px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 2.4px;
                text-transform: uppercase;
            }

            .p_education_provide .list p {
                color: #231F20;
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-style: normal;
                font-weight: 700;
                line-height: normal;
                letter-spacing: 4px;
            }

            .p_education_provide .list hr {
                /*max-width: 200px;*/
                margin: 0 auto;
                height: 1px;
                background: #307847;
                width: 100%;
            }

            .p_education_provide .section-image {
                position: absolute;
                top: 0;
                left: 50%;
                transform: translate(-50%, 0);
                z-index: 1;
                max-width: 1920px;
                width: 100%;
                height: 100%;
            }

            .p_education_provide .section-image img {
                height: 100%;
                width: 100%;
                object-fit: cover;
            }
        </style>
    <?php endif; ?>
</section>