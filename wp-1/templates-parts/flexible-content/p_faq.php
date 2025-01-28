<?php global $faq;
$faq++; ?>
<?php
$bgImage = get_sub_field('section_background');
?>
<section class="p_faq p_faq-<?php echo $faq; ?> <?php echo get_sub_field('custom_class'); ?>"
         style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_faq__content _anim-items _anim-no-hide">
        <div class="faq-text">
            <img class="faq_img_left" src="<?php echo get_stylesheet_directory_uri() ?>/images/left1_1.png" alt="#">
            <h2><?php echo get_sub_field('title'); ?></h2>
            <div class="accordion list-wrap">

                <div class="accordion list">
                    <?php if (have_rows('list')): ?>
                        <?php while (have_rows('list')):
                            the_row(); ?>
                            <div class="accordion-item list-item">
                                <div class="accordion-header">
                                    <h3> <?php echo get_sub_field('faq_title'); ?></h3>
                                    <img class="accordion_arr"
                                         src="<?php echo get_stylesheet_directory_uri() ?>/images/arr.svg" alt="#">
                                </div>
                                <div class="accordion-content">
                                    <p><?php echo get_sub_field('faq_text'); ?></p>
                                </div>


                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <div class="bg-bot"></div>
            </div>
            <img class="faq_img_right" src="<?php echo get_stylesheet_directory_uri() ?>/images/right1_1.png" alt="#">
        </div>

        <?php if ($faq < 2): ?>
            <style>

                .p_faq .bg-bot {
                    border: 3px solid #231F20;
                    background: #FFFCE9;
                    border-top: none;
                    width: calc(100% + 6px);
                    position: absolute;
                    left: -3px;
                    bottom: -3px;
                    z-index: 19;
                    height: 262px;
                }

                .p_faq .accordion_arr {
                    position: absolute;
                    right: 10px;
                    top: 50%;
                    transform: translate(0, -50%);
                    display: none;
                    transition: all 0.3s ease;
                }

                @media only screen and (max-width: 991px) {
                    .p_faq .accordion_arr {
                        display: block;
                    }
                }

                .p_faq .list-item.active .accordion_arr {
                    top: 20px;
                    transform: none;
                }


                @media only screen and (max-width: 991px) {
                    .p_faq .bg-bot {
                        display: none;
                    }
                }

                .p_faq {
                    position: relative;
                    padding-top: 78px;
                    padding-bottom: 60px;
                    overflow: hidden;


                }

                @media only screen and (max-width: 991px) {
                    .p_faq {
                        /*background: #FFFCE9 !important;*/
                        padding: 50px 0 50px 0;
                    }
                }

                .p_faq .faq_img_left {
                    max-width: 330px;
                    position: absolute;
                    bottom: -85px;
                    left: -274px;
                }

                @media only screen and (max-width: 991px) {
                    .p_faq .faq_img_left,
                    .p_faq .faq_img_right {
                        display: none;
                    }
                }

                .p_faq .faq_img_right {
                    max-width: 330px;
                    position: absolute;
                    bottom: -63px;
                    right: -254px;
                }

                .p_faq .p_faq__content {
                    /*max-width: 1450px;*/
                    margin: 0 auto;
                    padding: 0 330px;
                    position: relative;

                    opacity: 0;
                    transition: all 0.8s ease 0.1s;
                }

                .p_faq .p_faq__content._active {
                    opacity: 1;
                }

                @media only screen and (max-width: 991px) {
                    .p_faq .p_faq__content {
                        padding: 0px;
                    }
                }

                .p_faq .faq-text {
                    max-width: 910px;
                    width: 100%;
                    margin: 0 auto;
                    border: 3px solid #231F20;
                    background: #FFFCE9;
                    position: relative;
                }

                @media only screen and (max-width: 991px) {
                    .p_faq .faq-text {
                        border: none;
                        max-width: 100%;
                    }
                }

                .p_faq h2 {
                    color: #231F20;
                    text-align: center;
                    font-family: 'Montserrat', sans-serif;
                    font-size: 48px;
                    font-style: normal;
                    font-weight: 900;
                    line-height: normal;
                    letter-spacing: 4.8px;
                    text-transform: uppercase;
                    margin-bottom: 35px;
                }

                @media only screen and (max-width: 991px) {
                    .p_faq h2 {
                        font-size: 36px;
                        margin-bottom: 30px;
                        padding-top: 30px;
                    }
                }

                .p_faq .list-wrap {
                    max-width: 798px;
                    width: 100%;
                    padding: 0 60px;
                    margin: 0 auto 60px;

                }

                @media only screen and (max-width: 991px) {
                    .p_faq .list-wrap {
                        display: flex;
                        justify-content: center;
                        margin: 0 auto;
                        width: 100%;
                        padding: 0;
                    }
                }


                .p_faq .list {
                    display: flex;
                    justify-content: space-between;
                    column-gap: 15px;
                    flex-wrap: wrap;
                    max-width: 691px;
                    position: relative;
                    z-index: 20;
                }

                @media only screen and (max-width: 1200px) {
                    .p_faq .list {
                        flex-direction: column;
                        margin-bottom: 10px;
                    }
                }

                @media only screen and (max-width: 991px) {
                    .p_faq .list {
                        width: 100%;
                        margin: 0 26px 10px;
                    }
                }

                .p_faq .list-item {
                    padding: 0;
                    margin: 0 0 30px 0;
                    max-width: 338px;
                    height: auto;
                    width: calc(50% - 15px);
                    position: relative;
                }

                @media only screen and (max-width: 1200px) {
                    .p_faq .list-item {
                        width: 100%;
                        max-width: none;
                    }
                }

                .p_faq h3 {
                    color: #231F20;
                    font-family: 'Roboto', sans-serif;
                    font-size: 15px;
                    font-style: normal;
                    font-weight: 700;
                    line-height: normal;
                    letter-spacing: 3px;
                    margin-bottom: 10px;
                }

                .p_faq p {
                    color: #231F20;
                    font-family: 'Roboto', sans-serif;
                    font-size: 12px;
                    font-style: normal;
                    font-weight: 400;
                    line-height: normal;
                    letter-spacing: 2.4px;
                }

                @media only screen and (max-width: 991px) {
                    .p_faq .list-item {
                        border: 2px solid #231F20;
                        background: #FFFCE9;
                        box-shadow: -4px -4px 0 0 #000;
                        min-height: 75px;
                        padding: 20px 0 20px 20px;

                        /*display: flex;*/
                        /*flex-direction: column;*/
                        /*justify-content: center;*/
                    }



                    .p_faq .accordion-content {
                        margin-top: 8px;
                        max-height: 0;
                        overflow: hidden;
                        transition: max-height 0.5s ease-out, opacity 0.5s ease-out, margin 0.5s ease-out;
                        opacity: 0;
                    }

                    .p_faq .list-item.open .accordion-content{
                        opacity: 1;
                    }

                    .p_faq .list-item.open .accordion_arr {
                        display: block;
                        transform: rotate(180deg) translate(0, -50%);
                        top: 0;
                    }

                    .p_faq h3 {
                        margin: 7px 0 0 0;
                        padding-right: 38px;
                    }

                    .p_faq .accordion-header {
                        padding: 0 ;
                        cursor: pointer;
                        position: relative;
                    }

                    .p_faq p {
                        padding-right: 38px;
                    }
                }

            </style>
        <?php endif; ?>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const accordionItems = document.querySelectorAll('.accordion-item');

            accordionItems.forEach(item => {
                const header = item.querySelector('.accordion-header');
                const content = item.querySelector('.accordion-content');

                header.addEventListener('click', function () {
                    const isOpen = item.classList.contains('open');

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