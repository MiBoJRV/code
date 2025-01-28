<?php
/**
 * Template Name: Full Width Template
 */
get_header(); ?>
    <style>
        .wpContent .container {
            padding: 30px 15px;
        }

        .positionedCrumbs {
            position: absolute;
            left: 0;
            top: 0;
            padding: 20px 0;
            z-index: 2;
        }

        /*Top Banner*/
        /*Banner Font Size*/
        <?php if(get_field('customize_font_size')=='yes'): ?>
        h1.topTitle {
            font-size: <?php the_field('banner_title_font_size'); ?>;
        }

        .topBanner h1 {
            font-size: <?php the_field('banner_title_font_size'); ?>;
        }

        <?php endif; ?>

        /*Banner Height*/
        <?php if(get_field('banner_height')!='Half Height'): ?>
        .topBanner {
            height: 450px;
        }

        <?php elseif(get_field('banner_height')=='Half Height'): ?>
        .topBanner {
            height: 250px;
        }

        <?php endif; ?>

        h1.topTitle {
            margin: 0;
            padding: 20px;
            text-align: center;
            color: #fff;
            background: #fff !important;
            color: var(--main_color);
        }

        .topBanner {
            background: #000;
            position: relative;
            overflow: hidden;
            width: 100%;
        }

        .topBanner > img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.65;
        }

        .topBanner h1 {
            margin: 0;
            padding: 20px;
            text-align: center;
            color: #fff;
        }

        .topBanner .positioned {
            position: absolute;
            width: 100%;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        /*End Top Banner*/
        .wpContent article h3 {
            font-size: 24px;
            margin-bottom: 15px;
            color: #292929;
            text-transform: uppercase;
        }

        .wpContent article p {
            color: rgba(41, 41, 41, 0.75);
            line-height: 28px;
            font-size: 16px;
        }

        .wpContent article > .row {
            margin: 2% auto;
        }

        .questionCat {
            padding: 30px 0;
        }

        /*Responsivness*//*Responsivness*//*Responsivness*/
        @media (max-width: 1199px) {
            .topBanner {
                height: 250px;
            }
        }

        @media (max-width: 991px) {
            .topBanner h1 {
                font-size: 42px;
            }
        }
    </style>
    <div class="content">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post() ?>
                <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'post-thumbnails'); ?>
                <?php $current_page_id = get_the_ID(); ?>
                <?php if (get_the_content()): ?>
                    <section class="wpContent">
                        <div class="container">
                            <article>
                                <?php the_content(); ?>
                            </article>
                        </div>
                    </section><!--End wpContent-->
                <?php endif; ?>
                <?php include(get_theme_root() . '/' . get_option('stylesheet') . '/templates-parts/main-flexible-content-include.php'); ?>

            <?php endwhile; ?>
        <?php endif; ?>
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

                    }
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

                @media only screen and (max-width: 991px) {
                    .scrollToTopBtn:hover img.animated-big {
                        transform: translate(-50%, -50%);
                    }
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

                @media only screen and (max-width: 991px) {
                    .scrollToTopBtn:hover img.animated-small {
                        bottom: 15%;
                    }
                }

                .scrollToTopBtn.hover img.animated-big {
                    transform: translate(-50%, -100%);
                }

                .scrollToTopBtn.hover img.animated-small {
                    bottom: 60%;
                }

            </style>
            <script>
                // Функція для плавного скролу вверх сторінки
                function scrollToTop() {
                    console.log('click');
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
                        scrollToTopBtn.style.opacity = '1';
                    } else {
                        scrollToTopBtn.style.opacity = '0';
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

                //hover
                const scrollToTopBtnHover = document.querySelector('.scrollToTopBtn');
                scrollToTopBtnHover.addEventListener('touchstart', function() {
                    this.classList.add('hover');

                });

                scrollToTopBtnHover.addEventListener('touchend', function() {

                    setTimeout(() => {
                        this.classList.remove('hover');
                    }, 400);
                });
            </script>


        </div>
    </div><!--End content-->

<?php get_footer(); ?>