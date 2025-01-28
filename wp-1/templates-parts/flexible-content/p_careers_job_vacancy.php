<?php global $jobVacancy;
$jobVacancy++; ?>
<?php
$bgImage = get_sub_field('section_background');
?>


<section
        class="p_careers_job_vacancy p_careers_job_vacancy-<?php echo $jobVacancy; ?> <?php echo get_sub_field('custom_class'); ?>"
        style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_careers_job_vacancy__content">
        <div class="image _anim-items _anim-no-hide">
            <?php $image = get_sub_field('image'); ?>
            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
        </div>
        <div class="text _anim-items _anim-no-hide">
            <div class="title">
                <span><?php echo get_sub_field('job_vacancy_subtitle'); ?></span>
                <h3><?php echo get_sub_field('job_vacancy_title'); ?></h3>
            </div>
            <div class="description">
                <span class="description_title"> <?php echo get_sub_field('description_title'); ?></span>
                <p><?php echo get_sub_field('description'); ?></p>
            </div>
            <div class="accordion">
                <div class="accordion-item requirements list-block">
                    <div class="accordion-header list-block-title">
                        <div class="list-block-icon">
                            <img class="accordion_arr"
                                 src="<?php echo get_stylesheet_directory_uri() ?>/images/arr.svg"
                                 alt="#">
                        </div>
                        <h4><?php echo get_sub_field('requirements_title'); ?></h4>
                    </div>
                    <ul class="accordion-content list">
                        <?php if (have_rows('requirements_list')): ?>
                            <?php while (have_rows('requirements_list')):
                                the_row(); ?>
                                <li class="list-item">
                                    <?php echo get_sub_field('requirements_item'); ?>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="accordion-item benefits list-block">
                    <div class="accordion-header list-block-title">
                        <div class="list-block-icon">
                            <img class="accordion_arr"
                                 src="<?php echo get_stylesheet_directory_uri() ?>/images/arr.svg"
                                 alt="#">
                        </div>
                        <h4><?php echo get_sub_field('benefits_title'); ?></h4>
                    </div>
                    <ul class="accordion-content list">
                        <?php if (have_rows('benefits_list')): ?>
                            <?php while (have_rows('benefits_list')):
                                the_row(); ?>
                                <li class="list-item">
                                    <?php echo get_sub_field('benefits_item'); ?>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
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
    <style>
        <?php if(get_sub_field('image_position')=='right'): ?>
        @media (min-width: 992px) {
            .p_careers_job_vacancy.p_careers_job_vacancy-<?php echo $jobVacancy; ?> .p_careers_job_vacancy__content {
                flex-direction: row-reverse;
            }
        }

        .p_careers_job_vacancy.p_careers_job_vacancy-<?php echo $jobVacancy; ?> .image {
            transform: translate(150%, 0%);
            opacity: 0;
            transition: all 0.8s ease 0s;
        }

        .p_careers_job_vacancy.p_careers_job_vacancy-<?php echo $jobVacancy; ?> .image._active {
            transform: translate(0, 0%);
            opacity: 1;
        }

        .p_careers_job_vacancy.p_careers_job_vacancy-<?php echo $jobVacancy; ?> .text {
            transform: translate(-150%, 0%);
            opacity: 0;
            transition: all 0.8s ease 0s;
        }

        .p_careers_job_vacancy.p_careers_job_vacancy-<?php echo $jobVacancy; ?> .text._active {
            transform: translate(0, 0%);
            opacity: 1;
        }


        <?php endif; ?>

        <?php if(get_sub_field('show_divider')=='yes'): ?>
        .p_careers_job_vacancy.p_careers_job_vacancy-<?php echo $jobVacancy; ?> {
            position: relative;
            padding-bottom: 86px;
        }

        @media only screen and (max-width: 991px) {
            .p_careers_job_vacancy.p_careers_job_vacancy-<?php echo $jobVacancy; ?> {
                padding-bottom: 0;
            }
        }


        <?php endif; ?>

        <?php if ($jobVacancy < 2): ?>
        .p_careers_job_vacancy {
            position: relative;
            z-index: 101;
        }

        .p_careers_job_vacancy .p_careers_job_vacancy__content {
            max-width: 1318px;
            width: 100%;
            margin: 0 auto;
            padding: 50px 20px;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            gap: 25px;
        }

        @media only screen and (max-width: 991px) {
            .p_careers_job_vacancy .p_careers_job_vacancy__content {
                flex-direction: column-reverse;
                padding: 50px 20px 36px;
            }
        }

        .p_careers_job_vacancy .image {
            max-width: 600px;
            width: 100%;
            margin-bottom: -27px;
            opacity: 0;
            transform: translate(-150%, 0%);
            transition: all 0.8s ease 0s;
        }

        .p_careers_job_vacancy .image._active {
            opacity: 1;
            transform: translate(0, 0);
        }

        @media only screen and (max-width: 1200px) {
            .p_careers_job_vacancy .image {
                width: 50%;
            }
        }

        @media only screen and (max-width: 991px) {
            .p_careers_job_vacancy .image {
                width: 100%;
                margin: 40px auto 0;
            }
        }

        .p_careers_job_vacancy .text {
            width: calc(100% - 625px);
            opacity: 0;
            transform: translate(150%, 0%);
            transition: all 0.8s ease 0s;
        }

        .p_careers_job_vacancy .text._active {
            opacity: 1;
            transform: translate(0, 0);
        }


        @media only screen and (max-width: 1200px) {
            .p_careers_job_vacancy .text {
                width: 50%;
            }
        }

        @media only screen and (max-width: 991px) {
            .p_careers_job_vacancy .text {
                width: 100%;
            }
        }

        .p_careers_job_vacancy .text .title span {
            color: #231F20;
            font-family: 'Montserrat', system-ui;
            font-size: 32px;
            font-style: normal;
            font-weight: 800;
            line-height: normal;
            letter-spacing: 6.4px;
            text-transform: capitalize;
            display: block;
        }

        @media only screen and (max-width: 991px) {
            .p_careers_job_vacancy .text .title span {
                font-size: 24px;
                letter-spacing: 4.8px;
            }
        }

        .p_careers_job_vacancy .text .title h3 {
            color: #231F20;
            font-family: 'Montserrat', system-ui;
            font-size: 32px;
            font-style: normal;
            font-weight: 800;
            line-height: normal;
            letter-spacing: 6.4px;
            text-transform: capitalize;
            margin: 0;
        }

        @media only screen and (max-width: 991px) {
            .p_careers_job_vacancy .text .title h3 {
                font-size: 24px;
                letter-spacing: 4.8px;
            }
        }

        .p_careers_job_vacancy .text .description span {
            color: #231F20;
            text-align: justify;
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            letter-spacing: 3.2px;
            display: block;
            margin: 20px 0;
            display: none;
        }

        .p_careers_job_vacancy .text .description p {
            color: #231F20;
            font-family: 'Roboto', sans-serif;
            font-size: 24px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
            letter-spacing: 2.4px;
            max-width: 626px;
            width: 100%;
            margin-bottom: 50px;
            margin-top: 21px;
        }

        @media only screen and (max-width: 991px) {
            .p_careers_job_vacancy .text .description p {
                font-size: 20px;
                letter-spacing: 2px;
                max-width: 100%;
            }
        }

        .p_careers_job_vacancy .list-block-title {
            display: flex;
            align-items: center;
            gap: 30px;
            cursor: pointer;
        }

        .p_careers_job_vacancy .list-block {
            border: 2px solid #231F20;
            background: #FFFCE9;
            box-shadow: 15px 15px 0 0 #000;
            margin-bottom: 50px;
            min-height: 80px;
            padding: 0;
            /*transition: min-height 1s ease, opacity 1s ease, margin 1s ease;*/
        }

        @media only screen and (max-width: 991px) {
            .p_careers_job_vacancy .list-block {
                min-height: 65px;
                padding: 0 33px 0 0;
            }
        }

        .p_careers_job_vacancy .list-block {
            /*margin: 15px 0 18px 40px;*/
            /*min-height: 316px;*/
            /*transition: max-height 1s ease, opacity 1s ease, margin 1s ease;*/
        }

        @media only screen and (max-width: 991px) {
            .p_careers_job_vacancy .list-block.active {
                min-height: auto;
            }
        }

        .p_careers_job_vacancy .list-block.list-block-icon {
            border-bottom: 2px solid #231F20;
        }

        .p_careers_job_vacancy .list-block.active .list-block-icon {
            border-bottom: 2px solid #231F20;
        }

        .p_careers_job_vacancy .list-block-icon {
            width: 91px;
            height: 80px;
            border-right: 2px solid #231F20;
            display: flex;
            align-items: center;
            justify-content: center;
            border-top: none;
            border-left: none;
            border-bottom: 2px solid #231F20;
        }

        @media only screen and (max-width: 991px) {
            .p_careers_job_vacancy .list-block-icon {
                width: 66px;
                height: 65px;
            }
        }

        .p_careers_job_vacancy .list-block-icon img {
            width: 40px;
            height: 30px;
        }

        .p_careers_job_vacancy .list-block:last-of-type {
            margin: 0;
        }

        .p_careers_job_vacancy .list-block h4 {
            color: #231F20;
            font-family: 'Montserrat', system-ui;
            font-size: 24px;
            font-style: normal;
            font-weight: 800;
            line-height: normal;
            letter-spacing: 2.4px;
            text-transform: uppercase;
            margin: 0;
        }

        @media only screen and (max-width: 991px) {
            .p_careers_job_vacancy .list-block h4 {
                font-size: 20px;
                letter-spacing: 2px;
            }
        }

        .p_careers_job_vacancy .list-block .list {
            padding: 0px 0 0px 40px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease-out, opacity 0.5s ease-out, margin 0.5s ease-out;
            opacity: 0;
            /*display: none;*/

            /*opacity: 0;*/
            /*max-height: 0;*/
            /*transition: max-height 1s ease, opacity 1s ease, margin 1s ease;*/
        }

        .p_careers_job_vacancy .list-block.open .list {
            margin: 15px 0 18px 0px;
            padding-left: 40px;
            opacity: 1;
            /*display: block;*/
            /*opacity: 1;*/
            /*max-height: 100%;*/

            /*transition: max-height 1s ease, opacity 1s ease, margin 1s ease;*/
        }

        .p_careers_job_vacancy .list-block .list-item {
            color: #231F20;
            font-family: 'Roboto', sans-serif;
            font-size: 20px;
            font-style: normal;
            font-weight: 900;
            line-height: normal;
            letter-spacing: 4px;
            list-style: disc outside;
            /*list-style-position: outside;*/
            /*opacity: 0;*/
            /*transition: opacity 0.5s ease;*/
        }

        .p_careers_job_vacancy .list-block.active .list-item {
            /*opacity: 1;*/
        }

        @media only screen and (max-width: 991px) {
            .p_careers_job_vacancy .list-block .list-item {
                font-size: 16px;
                letter-spacing: 3.2px;
            }
        }

        .p_careers_job_vacancy .divider {
            height: 36px;
            width: 100%;
            position: absolute;
            bottom: 0;
            left: 0;
            z-index: 100;
        }

        <?php endif; ?>

    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const accordionItems = document.querySelectorAll('.accordion-item');

            accordionItems.forEach(item => {
                const header = item.querySelector('.accordion-header');
                const content = item.querySelector('.accordion-content');

                header.addEventListener('click', function () {
                    const isOpen = item.classList.contains('open');

                    // Закриття всіх інших відкритих секцій
                    // accordionItems.forEach(otherItem => {
                    //     if (otherItem !== item && otherItem.classList.contains('open')) {
                    //         otherItem.classList.remove('open');
                    //         otherItem.querySelector('.accordion-content').style.maxHeight = '0';
                    //     }
                    // });

                    if (!isOpen) {
                        // Відкриття поточної секції
                        item.classList.add('open');
                        content.style.maxHeight = content.scrollHeight + 'px';
                    } else {
                        // Закриття поточної секції
                        item.classList.remove('open');
                        content.style.maxHeight = '0';
                    }
                });
            });
        });

    </script>
</section>