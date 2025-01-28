<div class="body-content" style="overflow: hidden">

    <?php get_header(); ?>
    <div class="content popup">
        <?php include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/main-flexible-content-include.php'); ?>
        <!--    --><?php //include( 'templates-parts/css-parts/home-css.php' ); ?>

    </div>
    <div class="container-btn">
        <button class="scrollToTopBtn" onclick="scrollToTop()">
            <img class="footer-img" src="<?php echo get_stylesheet_directory_uri() ?>/images/btn-top.svg" alt="#">
            <img class="animated-big" src="<?php echo get_stylesheet_directory_uri() ?>/images/animated-big.svg"
                 alt="#">
            <img class="animated-small" src="<?php echo get_stylesheet_directory_uri() ?>/images/animated-small.svg"
                 alt="#">

        </button>
        <style>

            .container-btn {
                display: block;
                max-width: 1278px;
                width: 100%;
                margin: 0 auto;
                height: 88px;
                position: fixed;
                bottom: 55px;
                left: 50%;
                transform: translate(-50%, 0);
                z-index: 999999;
                transition: transform 1s;
            }

            @media only screen and (max-width: 991px) {
                .container-btn {
                    bottom: 25px;
                }
            }

            .scrollToTopBtn {
                display: none;
                position: absolute;
                right: 0;
                background-color: transparent;
                color: #fff;
                border: none;
                padding: 10px 20px;
                cursor: pointer;
            }

            img.animated-big {
                position: absolute;
                left: 50%;
                transform: translate(-50%, -50%);
                top: 50%;
                transition: all 0.8s ease 0s;
            }

            .scrollToTopBtn:hover img.animated-big {
                transform: translate(-50%, -100%);
            }

            img.animated-small {
                position: absolute;
                left: 50%;
                transform: translate(-50%, -50%);
                bottom: 15%;
                transition: all 0.8s ease 0s;
            }

            .scrollToTopBtn:hover img.animated-small {
                bottom: 60%;
            }

        </style>
        <script>
            // Функція для плавного скролу вверх сторінки
            function scrollToTop() {
                const scrollDuration = 700; // тривалість анімації в мілісекундах
                const scrollStep = -window.scrollY / (scrollDuration / 15);

                const scrollInterval = setInterval(function () {
                    if (window.scrollY !== 0) {
                        window.scrollBy(0, scrollStep);
                    } else {
                        clearInterval(scrollInterval);
                    }
                }, 15);
            }

            // Показує або ховає кнопку "прокрутити вгору" згідно з положенням сторінки
            function handleScroll() {
                const scrollToTopBtn = document.querySelector('.scrollToTopBtn');
                if (window.scrollY > 300) {
                    scrollToTopBtn.style.display = 'block';
                } else {
                    scrollToTopBtn.style.display = 'none';
                }

                // Виклик функції перевірки видимості кнопки відносно футера
                checkFooterVisibility();
            }

            // Функція для показу або ховання кнопки "прокрутити вгору" згідно з положенням сторінки
            const scrollFunction = () => {
                const btn = document.querySelector('.scrollToTopBtn');
                const scrollOffset = 55;

                btn.style.display = (document.body.scrollTop > scrollOffset || document.documentElement.scrollTop > scrollOffset)
                    ? 'block'
                    : 'none';
            };

            // Функція для перевірки видимості кнопки відносно футера
            const checkFooterVisibility = () => {
                const btnContainer = document.querySelector('.container-btn');
                const footer = document.querySelector('footer');
                const footerOffset = footer.offsetTop - window.innerHeight;

                btnContainer.style.position = (window.pageYOffset > footerOffset) ? 'absolute' : 'fixed';
            };

            // Викликати handleScroll та scrollFunction при прокрутці сторінки
            window.addEventListener('scroll', function () {
                handleScroll();
                scrollFunction();
            });
        </script>


    </div>

</div><!--End Content-->
<?php get_footer(); ?>
<!--<div class="take-survey">
    <div class="content-wrap">
        <div class="btn-close">
            <img src="<?php /*echo get_stylesheet_directory_uri() */ ?>/images/close_popup.svg" alt="close">
        </div>
        <div class="content-wrap-text">
            <h2>
                Join
                <span class="orange">
                 Pablo Partners
            </span>
                community in social media
            </h2>
            <ul class="popup-social">
                <li>
                    <a href="<?php /*the_sub_field('social_link', get_homePageId()); */ ?>"
                       target="_blank">

                        <img src="<?php /*echo get_stylesheet_directory_uri() */ ?>/images/in.svg" alt="close">
                    </a>
                </li>
                <li>
                    <a href="<?php /*the_sub_field('social_link', get_homePageId()); */ ?>"
                       target="_blank">

                        <img src="<?php /*echo get_stylesheet_directory_uri() */ ?>/images/tg.svg" alt="close">
                    </a>
                </li>
            </ul>
        </div>
        <img class="popup-img" src="<?php /*echo get_stylesheet_directory_uri() */ ?>/images/popup-img.png" alt="img">
        <script>
            const takeSurvey = document.querySelector(".take-survey");
            const btnClose = document.querySelector(".btn-close");
            // const takeSurveyButton = document.querySelector(".take-survey .button-survey a");
            // const reserveButton = document.querySelector(".buttons .reserve");
            // const rejectButton = document.querySelector(".buttons .reject");
            const bodyContent = document.querySelector(".body-content");

            btnClose.addEventListener("click", function () {
                closePopup();
            })

            // takeSurveyButton.addEventListener("click", function () {
            //     closePopup();
            // })

            function openPopup() {
                takeSurvey.style.display = "flex";
                document.body.style.overflow = "hidden";
                bodyContent.style.filter = 'blur(7px)';
                bodyContent.style.background = 'rgba(0, 0, 0, 0.30)';
            }

            function closePopup() {
                takeSurvey.style.display = "none";
                document.body.style.overflow = "auto";
                bodyContent.style.filter = 'none'
                bodyContent.style.background = 'transparent';
            }

            setTimeout(openPopup, 1000);
            // setTimeout(closePopup, 15000);
            // openPopup();

            // reserveButton.addEventListener("click", closePopup);
            //
            // rejectButton.addEventListener("click", closePopup);


        </script>
        <style>
            .take-survey {
                width: 100%;
                height: 100vh;
                position: fixed;
                z-index: 999;
                top: 0;
                left: 0;
                display: none;
                align-items: center;
                justify-content: center;
                padding: 30px;
            }

            @media only screen and (max-width: 991px) {
                .take-survey {
                    padding: 10px;
                }
            }

            .take-survey .btn-close {
                position: absolute;
                right: 16px;
                top: 22px;
                cursor: pointer;
            }

            .take-survey .btn-close img {
                width: 30px;
                height: 30px;
            }

            @media only screen and (max-width: 991px) {
                .take-survey .btn-close img {
                    width: 24px;
                    height: 24px;
                }
            }

            .take-survey h2 {
                color: #FFF;
                text-align: center;
                text-shadow: 8px 4px 1px #1F1D1D;
                /*font-family: Montserrat;*/
                font-family: Montserrat, system-ui;
                font-size: 36px;
                font-style: normal;
                font-weight: 900;
                line-height: 34px;
                letter-spacing: 3.6px;
                text-transform: uppercase;
            }

            .take-survey h2 .orange {
                color: #FF7A00;
                font-family: Montserrat, system-ui;

            }

            .take-survey .popup-social {
                display: flex;
                justify-content: center;
                gap: 60px;
                margin-top: 85px;
            }

            .take-survey p {
                color: #FFF;
                text-align: center;
                font-size: 18px;
                font-style: normal;
                font-weight: 300;
                line-height: 27px;
                padding-bottom: 40px;
                border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            }

            @media only screen and (max-width: 991px) {
                .take-survey p {
                    font-size: 16px;
                    font-style: normal;
                    font-weight: 300;
                    line-height: 27px;
                    padding-bottom: 26px;
                }
            }

            .take-survey .button-survey a {
                margin: 40px auto 0;
                border-radius: 4px;
                padding: 10px 24px;
                width: 265px;
                height: 60px;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 2px 2px 0 0 rgba(15, 21, 27, 0.2);
                background: #e2a328;
                color: #1F3143;
                font-size: 20px;
                font-style: normal;
                font-weight: 700;
                line-height: 20px;
            }

            @media only screen and (max-width: 991px) {
                .take-survey .button-survey a {
                    margin: 26px auto 0;
                }
            }

            .take-survey .button-survey a:hover {
                box-shadow: 4px 4px 0 0 rgba(15, 21, 27, 0.5);
                background: #f7b433;
            }

            .take-survey .button-survey a:active {
                background: #cc901b;
                box-shadow: none;
            }

            .content-wrap-text {
                position: relative;
                z-index: 10;
            }

            .take-survey .content-wrap {
                max-width: 560px;
                width: 100%;
                padding: 136px 15px 202px;
                z-index: 1000;
                /*background: #1F3143;*/
                overflow: hidden;
                position: relative;
                height: auto;
                background-image: url("<?php /*echo get_stylesheet_directory_uri() */ ?>/images/popup_bg.png");
            }

            @media only screen and (max-width: 991px) {
                .take-survey .content-wrap {
                    padding: 66px 20px 40px;
                }
            }

            .popup-img {
                position: absolute;
                right: 0;
                bottom: 0;
                z-index: 1;
            }
        </style>
    </div>-->

<?php
$bgDivider = get_field('popup_background_image');
?>
<div class="take-survey">
    <div class="content-wrap" style="background-image:url('<?php echo $bgDivider['url']; ?>');">
        <div class="btn-close">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/close_popup.svg" alt="close">
        </div>
        <div class="content-wrap-text">
            <h2>
                <?php echo get_field('popup_title'); ?>
                <!--      Join
                      <span class="orange">
                       Pablo Partners
                  </span>
                      community in social media-->
            </h2>
            <!--<ul class="popup-social">
                <?php /*if (have_rows('popup_social_links', get_homePageId())): */?>
                    <?php /*$index = 1; */?>
                    <?php /*while (have_rows('popup_social_links', get_homePageId())): the_row(); */?>
                        <li>
                            <a href="<?php /*the_sub_field('popup_social_link', get_homePageId()); */?>"
                               target="_blank" class="popup-social-link-<?php /*echo $index; */?>">
                                <?php /*$imagePop = get_sub_field('popup_social_icon', get_homePageId()); */?>
                                <img src="<?php /*echo $imagePop['url']; */?>" alt="<?php /*echo $imagePop['alt']; */?>">
                            </a>
                        </li>

                    <?php /*endwhile; */?>
                <?php /*endif; */?>
            </ul>-->

            <ul class="popup-social">
                <?php if (have_rows('popup_social_links', get_homePageId())): ?>
                    <?php while (have_rows('popup_social_links', get_homePageId())): the_row(); ?>
                        <?php $imagePop = get_sub_field('popup_social_icon', get_homePageId()); ?>
                        <li style="background-image: url('<?php echo $imagePop['url']; ?>');">
                            <a href="<?php the_sub_field('popup_social_link', get_homePageId()); ?>" target="_blank">
                            </a>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>

        </div>
        <?php $imagePopMain = get_field('popup_image', get_homePageId()); ?>
        <img class="popup-img" src="<?php echo $imagePopMain['url']; ?>" alt="<?php echo $imagePopMain['alt']; ?>">

        <?php echo get_field('popup_text'); ?>

        <script>
            const takeSurvey = document.querySelector(".take-survey");
            const btnClose = document.querySelector(".btn-close");
            // const takeSurveyButton = document.querySelector(".take-survey .button-survey a");
            // const reserveButton = document.querySelector(".buttons .reserve");
            // const rejectButton = document.querySelector(".buttons .reject");
            const bodyContent = document.querySelector(".body-content");

            btnClose.addEventListener("click", function () {
                closePopup();
            })

            // takeSurveyButton.addEventListener("click", function () {
            //     closePopup();
            // })

            function openPopup() {
                takeSurvey.style.display = "flex";
                document.body.style.overflow = "hidden";
                // bodyContent.style.filter = 'blur(7px)';
                bodyContent.style.background = 'rgba(0, 0, 0, 0.30)';
            }

            function closePopup() {
                takeSurvey.style.display = "none";
                document.body.style.overflow = "auto";
                // bodyContent.style.filter = 'none'
                bodyContent.style.background = 'transparent';
            }

            setTimeout(openPopup, 1000);
            // setTimeout(closePopup, 15000);
            // openPopup();

            // reserveButton.addEventListener("click", closePopup);
            //
            // rejectButton.addEventListener("click", closePopup);
        </script>
        <style>
            .take-survey {
                width: 100%;
                height: 100vh;
                position: fixed;
                z-index: 99999;
                top: 0;
                /*left: 0;*/
                display: none;
                align-items: center;
                justify-content: center;
                padding: 30px;
                left: 50%;
                transform: translateX(-50%);
                /*background: rgba(0, 0, 0, 0.4);*/
                background: linear-gradient(0deg, rgba(0, 0, 0, 0.40) 0%, rgba(0, 0, 0, 0.40) 100%);
                overflow-x: scroll;
            }

            @media only screen and (max-width: 768px) {
                .take-survey {
                    padding: 80px 15px 0;
                }
            }

            .take-survey .btn-close {
                position: absolute;
                right: 17px;
                top: 13px;
                cursor: pointer;
            }

            .take-survey .btn-close img {
                width: 30px;
                height: 30px;
            }

            @media only screen and (max-width: 991px) {
                .take-survey .btn-close img {
                    width: 33px;
                    height: 33px;
                }
            }

            .take-survey h2 {
                color: #FFF;
                text-align: right;
                text-shadow: 5px 2px 1px #1F1D1D;
                -webkit-text-stroke-width: 2;
                -webkit-text-stroke-color: #000;
                font-family: Montserrat, system-ui;
                font-size: 32px;
                font-style: normal;
                font-weight: 900;
                line-height: 40px;
                letter-spacing: 3.2px;
                text-transform: uppercase;
                margin: 80px 46px 17px auto;
                max-width: 550px;
                width: 100%;
            }

            @media only screen and (max-width: 768px) {
                .take-survey h2 {
                    text-align: center;
                    margin: 86px auto 21px;
                    font-size: 28px;
                    font-style: normal;
                    font-weight: 900;
                    line-height: 33px;
                    letter-spacing: 2.8px;
                    padding: 0 10px;
                }
            }

            .take-survey .popup-social {
                display: flex;
                justify-content: end;
                gap: 60px;
                margin: 0 46px 55px 0
            }

            .take-survey .popup-social li {
                width: 90px;
                height: 90px;
                display: block;
                background-repeat: no-repeat;
                background-size: 90px 90px;
            }

            .take-survey .popup-social li a {
                width: 90px;
                height: 90px;
                display: block;
            }

            @media only screen and (max-width: 768px) {
                .take-survey .popup-social {
                    justify-content: center;
                    margin: 0 auto 5px;
                }
            }

            .take-survey .popup-social img {
                width: 90px;
                height: 90px;
            }

            .take-survey p {
                padding: 10px;
                background: #231F20;
                color: #FFF;
                text-align: center;
                text-shadow: 8px 4px 1px #1F1D1D;
                -webkit-text-stroke-width: 2;
                -webkit-text-stroke-color: #000;
                font-family: Montserrat, system-ui;
                font-size: 20px;
                font-style: normal;
                font-weight: 900;
                line-height: 24px; /* 120% */
                letter-spacing: 2px;
                text-transform: uppercase;
                z-index: 10;
                position: relative;
            }

            @media only screen and (max-width: 991px) {
                .take-survey p {
                    font-size: 20px;
                    font-style: normal;
                    font-weight: 900;
                    line-height: 24px;
                    letter-spacing: 2px;
                }
            }

            .take-survey .button-survey a {
                margin: 40px auto 0;
                border-radius: 4px;
                padding: 10px 24px;
                width: 265px;
                height: 60px;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 2px 2px 0 0 rgba(15, 21, 27, 0.2);
                background: #e2a328;
                color: #1F3143;
                font-size: 20px;
                font-style: normal;
                font-weight: 700;
                line-height: 20px;
            }

            .take-survey .button-survey a:hover {
                box-shadow: 4px 4px 0 0 rgba(15, 21, 27, 0.5);
                background: #f7b433;
            }

            .take-survey .button-survey a:active {
                background: #cc901b;
                box-shadow: none;
            }

            .content-wrap-text {
                position: relative;
                z-index: 10;
            }

            .take-survey .content-wrap {
                max-width: 819px;
                width: 100%;
                /*padding: 80px 46px 0;*/
                z-index: 1000;
                /*background: #1F3143;*/
                overflow: hidden;
                position: relative;
                height: auto;

                background-repeat: no-repeat;
                background-size: cover;
            }

            .take-survey .popup-img {
                position: absolute;
                left: 0;
                bottom: 0;
                z-index: 1;
            }

            @media only screen and (max-width: 768px) {
                .take-survey .popup-img {
                    position: relative;
                    max-width: 327px;
                }
            }
        </style>
    </div>
</div>
</div>
</body>
</html>