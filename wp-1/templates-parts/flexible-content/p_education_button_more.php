<?php global $btnMore;
$btnMore++; ?>
<?php
$bgImage = get_sub_field('section_background');
?>
<section
        class="p_education_button_more p_education_button_more-<?php echo $btnMore; ?> <?php echo get_sub_field('custom_class'); ?>"
        style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_education_button_more__content">
        <a class="_anim-items _anim-no-hide" href="<?php echo get_sub_field('button_link'); ?>"><?php echo get_sub_field('button_text'); ?></a>
    </div>
    <?php if ($btnMore < 2): ?>
        <style>
            .p_education_button_more {
                padding: 100px 15px;
            }

            .p_education_button_more .p_education_button_more__content {
                margin: 0 auto;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .p_education_button_more a {
                border-radius: 220px;
                background: #FF7A00;
                box-shadow: 15px 10px 1px 0px #202020;
                color: #FFFCE9;
                text-align: center;
                font-family: 'Montserrat', sans-serif;
                font-size: 32px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 3.2px;
                text-transform: uppercase;
                padding: 30px 90px;
                max-width: 587px;
                width: 100%;

                opacity: 0;
                transform: translate(0%, 100%);
                transition: all 0.8s ease 0s;
            }

            .p_education_button_more a:hover {
                background-color: #FF983A;;
            }

            .p_education_button_more a:active {
                background-color: #307847;;
            }

            .p_education_button_more a._active{
                opacity: 1;
                transform: translate(0, 0);
            }

            @media only screen and (max-width: 991px) {
                .p_education_button_more a {
                    font-size: 24px;
                    letter-spacing: 2.4px;
                    padding: 20px;
                    max-width: 363px;
                }
            }
        </style>
    <?php endif; ?>
</section>