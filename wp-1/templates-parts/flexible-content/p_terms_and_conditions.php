<?php global $termsCond;
$termsCond++; ?>
<?php
$bgImage = get_sub_field('section_background');
?>
<section
        class="p_terms_and_conditions p_terms_and_conditions-<?php echo $termsCond; ?> <?php echo get_sub_field('custom_class'); ?>"
        style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_terms_and_conditions__content">
        <div class="main_content">
            <?php echo get_sub_field('content'); ?>
        </div>
    </div>
    <?php if ($termsCond < 2): ?>
        <style>
            .p_terms_and_conditions h1,
            .p_terms_and_conditions h2,
            .p_terms_and_conditions h3,
            .p_terms_and_conditions p {
                margin: 0;
            }

            .p_terms_and_conditions {
                padding: 200px 20px 0;
            }

            .p_terms_and_conditions .p_terms_and_conditions__content {
                max-width: 1795px;
                width: 100%;
                margin: 0 auto;
                border: 3px solid #231F20;
                background-color: #FCF9EB;
            }

            .p_terms_and_conditions .main_content {
                max-width: 1402px;
                width: 100%;
                margin: 0 auto;
                padding: 70px 15px 100px;
            }

            .p_terms_and_conditions .main_content .block {
                /*display: flex;*/
                /*flex-direction: column;*/
                /*gap: 20px;*/
            }

            .p_terms_and_conditions .title {
                margin-bottom: 75px;
            }

            @media only screen and (max-width: 991px) {
                .p_terms_and_conditions .title {
                    margin-bottom: 35px;
                }
            }

            .text_content {
                display: flex;
                flex-direction: column;
                gap: 20px;
            }

            .p_terms_and_conditions h1 {
                color: #000;
                font-family: 'Montserrat', sans-serif;
                font-size: 48px;
                font-style: normal;
                font-weight: 900;
                line-height: 48px;
                letter-spacing: 4.8px;
                text-transform: uppercase;
                margin-bottom: 20px;
            }

            @media only screen and (max-width: 991px) {
                .p_terms_and_conditions h1 {
                    font-size: 36px;
                    letter-spacing: 3.6px;
                }
            }
            @media only screen and (max-width: 389px) {
                .p_terms_and_conditions h1 {
                    font-size: 30px;
                    letter-spacing: 3.6px;
                }
            }

            .p_terms_and_conditions h1 br {
                display: block;
            }

            .p_terms_and_conditions h1 br:nth-child(2) {
                display: none;
            }

            .p_terms_and_conditions br {
                display: none;
            }

            @media only screen and (max-width: 991px) {
                font-size: 36px;
                letter-spacing: 3.6px;
                margin-bottom: 10px;
            }

            .p_terms_and_conditions .updated {
                color: #000;
                font-family: 'Roboto', sans-serif;
                font-size: 16px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 3.2px;
                text-transform: uppercase;
            }

            @media only screen and (max-width: 991px) {
                .p_terms_and_conditions .updated {
                    font-size: 10px;
                    letter-spacing: 2px;
                }
            }

            .p_terms_and_conditions h2 {
                color: #000;
                font-family: 'Roboto', sans-serif;
                font-size: 24px;
                font-style: normal;
                font-weight: 900;
                line-height: normal;
                letter-spacing: 4.8px;
                text-transform: uppercase;
                margin-top: 30px;
            }

            @media only screen and (max-width: 991px) {
                .p_terms_and_conditions h2 {
                    margin: 0;
                }
            }


            .p_terms_and_conditions h3 {
                color: #000;
                font-family: 'Roboto', sans-serif;
                font-size: 24px;
                font-style: normal;
                font-weight: 700;
                line-height: normal;
                letter-spacing: 4.8px;
            }

            .p_terms_and_conditions p {
                color: #000;
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-style: normal;
                font-weight: 400;
                line-height: normal;
                letter-spacing: 4px;
            }

            .p_terms_and_conditions p .bold {
                font-weight: 700;
            }

            .p_terms_and_conditions p .italic {
                font-style: italic;
            }
        </style>
    <?php endif; ?>
</section>