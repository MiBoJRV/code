<?php global $coocPol;
$coocPol++; ?>
<?php
$bgImage = get_sub_field('section_background');
?>
<section
        class="p_cookies_policy p_cookies_policy-<?php echo $coocPol; ?> <?php echo get_sub_field('custom_class'); ?>"
        style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_cookies_policy__content">
        <div class="main_content">
            <?php echo get_sub_field('content'); ?>

        </div>
        <?php if ($coocPol < 2): ?>
            <style>
                .p_cookies_policy h1,
                .p_cookies_policy h2,
                .p_cookies_policy h3,
                .p_cookies_policy p {
                    margin: 0;
                }

                .p_cookies_policy .contact-in {
                    display: block;
                }

                .p_cookies_policy {
                    padding: 200px 20px 0;
                }

                .p_cookies_policy .p_cookies_policy__content {
                    max-width: 1795px;
                    width: 100%;
                    margin: 0 auto;
                    border: 3px solid #231F20;
                    background-color: #FCF9EB;
                }

                .p_cookies_policy .main_content {
                    max-width: 1402px;
                    width: 100%;
                    margin: 0 auto;
                    padding: 70px 15px 100px;
                }

                .p_cookies_policy .main_content .block {
                    /*display: flex;*/
                    /*flex-direction: column;*/
                    /*gap: 20px;*/
                }

                .p_cookies_policy .title {
                    margin-bottom: 75px;
                }

                @media only screen and (max-width: 991px) {
                    .p_cookies_policy .title {
                        margin-bottom: 35px;
                    }
                }

                .text_content {
                    display: flex;
                    flex-direction: column;
                    gap: 20px;
                }

                .p_cookies_policy h1 {
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
                    .p_cookies_policy h1 {
                        font-size: 36px;
                        letter-spacing: 3.6px;
                    }
                }

                @media only screen and (max-width: 389px) {
                    .p_cookies_policy h1 {
                        font-size: 30px;
                        letter-spacing: 3.6px;
                    }
                }

                .p_cookies_policy h1 br {
                    display: block;
                }

                .p_cookies_policy h1 br:nth-child(2) {
                    display: none;
                }

                .p_cookies_policy br {
                    display: none;
                }

                @media only screen and (max-width: 991px) {
                    font-size: 36px;
                    letter-spacing: 3.6px;
                    margin-bottom: 10px;
                }

                .p_cookies_policy .updated {
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
                    .p_cookies_policy .updated {
                        font-size: 10px;
                        letter-spacing: 2px;
                    }
                }

                .p_cookies_policy h2 {
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
                    .p_cookies_policy h2 {
                        margin: 0;
                    }
                }

                @media only screen and (max-width: 389px) {
                    .p_cookies_policy h2 {
                        font-size: 20px;
                    }
                }


                .p_cookies_policy h3 {
                    color: #000;
                    font-family: 'Roboto', sans-serif;
                    font-size: 24px;
                    font-style: normal;
                    font-weight: 700;
                    line-height: normal;
                    letter-spacing: 4.8px;
                }

                @media only screen and (max-width: 389px) {
                    .p_cookies_policy h3 {
                        font-size: 20px;
                    }
                }

                .p_cookies_policy p {
                    color: #000;
                    font-family: 'Roboto', sans-serif;
                    font-size: 20px;
                    font-style: normal;
                    font-weight: 400;
                    line-height: normal;
                    letter-spacing: 4px;
                }

                /*.p_cookies_policy p br {*/
                /*    display: block;*/
                /*}*/

                .p_cookies_policy p .bold {
                    font-weight: 700;
                }

                .p_cookies_policy p .italic {
                    font-style: italic;
                }

                .p_cookies_policy ul {
                    display: flex;
                    flex-direction: column;
                    gap: 20px;
                }

                .p_cookies_policy li {
                    color: #000;
                    font-family: 'Roboto', sans-serif;
                    font-size: 20px;
                    font-style: normal;
                    font-weight: 400;
                    line-height: normal;
                    letter-spacing: 4px;
                    list-style: disc outside;
                    margin-left: 20px;
                }

                .p_cookies_policy li .bold {
                    font-weight: 700;
                }
            </style>
        <?php endif; ?>
</section>