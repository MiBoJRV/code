<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RH98JB13XR"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-RH98JB13XR');
    </script>
    <!-- Google tag (gtag.js) -->

    <!-- Google Tag Manager 1-->
 <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-W8MHTJ3F');</script>
    <!-- End Google Tag Manager -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W8MHTJ3F"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--=== LINK TAGS ===-->
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed"
          href="<?php bloginfo('rss2_url'); ?>"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <!--=== WP_HEAD() ===-->
    <?php wp_head(); ?>
    <?php
 /*   if (!is_front_page()) {
        echo '<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">';
    }
    */?>
</head>
<body <?php body_class(); ?>>
<?php include('templates-parts/css-parts/header-css.php'); ?>
<header>
    <div class="fixing">
        <div class="container-fluid-custom flex_wrapper">
            <div class="logo">
                <a href="<?php echo get_option('home'); ?>/">
                    <?php $image = get_field('header_logo', 268); ?>
                    <img class="logo-black mainLogo" src="<?php echo $image['url']; ?>" style="max-width: none;"
                         title="" alt="<?php echo $image['alt']; ?>"/>
                    <?php if (get_field('header_variants', 268) == 'Logo Center'): ?>
                        <?php if (get_field('header_shapes', 268) == 'Classic'): ?>
                            <span class="leftCaret"></span>
                            <span class="rightCaret"></span>
                        <?php elseif (get_field('header_shapes', 268) == 'Trapeze'): ?>
                            <img class="trapeze"
                                 src="<?php echo get_template_directory_uri(); ?>/images/header/trapetion-big.svg"/>
                        <?php elseif (get_field('header_shapes', 268) == 'Ellipse'): ?>
                            <img class="ellipse"
                                 src="<?php echo get_template_directory_uri(); ?>/images/header/ellipse.svg"/>
                        <?php elseif (get_field('header_shapes', 268) == 'Circle'): ?>
                            <img class="circle"
                                 src="<?php echo get_template_directory_uri(); ?>/images/header/circle.svg"/>
                        <?php elseif (get_field('header_shapes', 268) == 'SmallTrapetion'): ?>
                            <img class="trapezeSmall"
                                 src="<?php echo get_template_directory_uri(); ?>/images/header/trapetion-small.svg"/>
                        <?php endif; ?>
                    <?php endif; ?>
                </a>
            </div>
            <nav class="main_nav">
                <?php wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'items_wrap' => '<ul>%3$s</ul>',
                )); ?>
                <?php dynamic_sidebar( 'translation' ); ?>
                <div class="rightSide" style="display: none">
                    <div class="contact">
                        <a href="#" target="_blank" rel="nofollow">Contact Us</a>
                    </div>
                    <?php if (get_field('header_variants', get_homePageId()) != 'ILV Simple'): ?>

                        <div class="CustomMobileMenu">
                            <div class="counter">
                                <p class="topM">
                                    <a href="<?php echo home_url('/') ?>">
<!--                                        <img src="--><?php //echo get_template_directory_uri(); ?><!--/images/peace-vacations-logo-white.svg"-->
                                             alt="logo"/>
                                    </a>
                                    <span class="mobileMenuClose">&times</span>
                                </p>
                                <?php echo do_shortcode('[gravityform id=7 title=false description=false ajax=true tabindex=19]'); ?>
                            </div>
                        </div><!--End CustomMobileMenu -->
                    <?php else: ?>
                        <a href="#" class="for-widget-toggle">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.987 24">
                                <defs>
                                    <style>.a, .c {
                                            fill: #4a4a4a;
                                        }

                                        .a {
                                            fill-rule: evenodd;
                                        }

                                        .b, .c {
                                            stroke: none;
                                        }</style>
                                </defs>
                                <g class="a" transform="translate(-5 -4)">
                                    <path class="b"
                                          d="M 26.26399993896484 27.49999809265137 C 25.94297981262207 27.49999809265137 25.6413688659668 27.37517738342285 25.41471862792969 27.14851760864258 L 19.54499053955078 21.27878952026367 C 18.07468223571777 22.22756004333496 16.37864303588867 22.72697830200195 14.61349964141846 22.72697830200195 C 9.588299751281738 22.72697830200195 5.499999523162842 18.6386890411377 5.499999523162842 13.61348819732666 C 5.499999523162842 8.588288307189941 9.588299751281738 4.499998092651367 14.61349964141846 4.499998092651367 C 19.63869857788086 4.499998092651367 23.72698974609375 8.588288307189941 23.72698974609375 13.61348819732666 C 23.72698974609375 15.88033199310303 22.90485191345215 18.02094459533691 21.40177917480469 19.69467735290527 L 27.13516998291016 25.42806816101074 C 27.36537933349609 25.65826797485352 27.49036026000977 25.96401786804199 27.48707008361816 26.28897857666016 C 27.48382949829102 26.60938835144043 27.35604858398438 26.9118480682373 27.12726974487305 27.14061737060547 C 26.89552879333496 27.37236785888672 26.58893966674805 27.49999809265137 26.26399993896484 27.49999809265137 Z M 14.61349964141846 6.51334810256958 C 10.69845962524414 6.51334810256958 7.513349533081055 9.698458671569824 7.513349533081055 13.61348819732666 C 7.513349533081055 17.52851867675781 10.69845962524414 20.7136287689209 14.61349964141846 20.7136287689209 C 18.52853012084961 20.7136287689209 21.7136402130127 17.52851867675781 21.7136402130127 13.61348819732666 C 21.7136402130127 9.698458671569824 18.52853012084961 6.51334810256958 14.61349964141846 6.51334810256958 Z"/>
                                    <path class="c"
                                          d="M 26.26399421691895 26.99999809265137 C 26.44721603393555 26.99999809265137 26.63162803649902 26.92915916442871 26.77371978759766 26.78706741333008 C 27.05350875854492 26.50727844238281 27.06029891967773 26.06028747558594 26.78162002563477 25.78161811828613 L 20.70414924621582 19.70414733886719 C 22.26288032531738 18.14540863037109 23.22698974609375 15.99202823638916 23.22698974609375 13.61348819732666 C 23.22698974609375 8.856388092041016 19.37057876586914 4.999998092651367 14.61349964141846 4.999998092651367 C 9.856389045715332 4.999998092651367 5.999999523162842 8.856388092041016 5.999999523162842 13.61348819732666 C 5.999999523162842 18.37056732177734 9.856389045715332 22.22697830200195 14.61349964141846 22.22697830200195 C 16.4747200012207 22.22697830200195 18.19792938232422 21.6367073059082 19.60637855529785 20.63307762145996 L 25.76826858520508 26.79496765136719 C 25.90482521057129 26.93152236938477 26.08383369445801 26.99999809265137 26.26399421691895 26.99999809265137 M 14.61349964141846 6.01334810256958 C 18.81089973449707 6.01334810256958 22.2136402130127 9.416048049926758 22.2136402130127 13.61348819732666 C 22.2136402130127 17.81089782714844 18.81089973449707 21.2136287689209 14.61349964141846 21.2136287689209 C 10.41608905792236 21.2136287689209 7.013349533081055 17.81089782714844 7.013349533081055 13.61348819732666 C 7.013349533081055 9.416048049926758 10.41608905792236 6.01334810256958 14.61349964141846 6.01334810256958 M 26.26399993896484 27.99999809265137 C 25.80942916870117 27.99999809265137 25.38224983215332 27.82316780090332 25.06115913391113 27.50207901000977 L 19.47075271606445 21.91167068481445 C 18.00183296203613 22.77450752258301 16.3388729095459 23.22697830200195 14.61349964141846 23.22697830200195 C 9.312599182128906 23.22697830200195 4.999999523162842 18.91438865661621 4.999999523162842 13.61348819732666 C 4.999999523162842 8.312587738037109 9.312599182128906 3.999998092651367 14.61349964141846 3.999998092651367 C 19.91440010070801 3.999998092651367 24.22698974609375 8.312587738037109 24.22698974609375 13.61348819732666 C 24.22698974609375 15.84498882293701 23.47173500061035 17.96052551269531 22.08227157592773 19.66805076599121 L 27.48872947692871 25.07450866699219 C 27.81472015380859 25.40049743652344 27.99169921875 25.83360862731934 27.9870491027832 26.29403877258301 C 27.98246955871582 26.7460880279541 27.80268859863281 27.17230796813965 27.4808292388916 27.49417877197266 C 27.15464019775391 27.82035827636719 26.72249984741211 27.99999809265137 26.26399993896484 27.99999809265137 Z M 14.61349964141846 7.01334810256958 C 10.97415924072266 7.01334810256958 8.013349533081055 9.97415828704834 8.013349533081055 13.61348819732666 C 8.013349533081055 17.2528190612793 10.97415924072266 20.2136287689209 14.61349964141846 20.2136287689209 C 18.25282859802246 20.2136287689209 21.2136402130127 17.2528190612793 21.2136402130127 13.61348819732666 C 21.2136402130127 9.97415828704834 18.25282859802246 7.01334810256958 14.61349964141846 7.01334810256958 Z"/>
                                </g>
                            </svg>
                        </a>
                    <?php endif; ?>
                    <div class="mobileMenu">
                        <span class="iconAnime">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                </div>
            </nav> <div class="mobile-menu">
            <div class="rightSide" >
                <?php if (get_field('header_variants', get_homePageId()) != 'ILV Simple'): ?>

                    <div class="CustomMobileMenu">
                        <div class="counter">
                            <p class="topM">
                                <a href="<?php echo home_url('/') ?>">
<!--                                    <img src="--><?php //echo get_template_directory_uri(); ?><!--/images/peace-vacations-logo-white.svg"-->
                                         alt="logo"/>
                                </a>
                                <span class="mobileMenuClose">&times</span>
                            </p>
                            <?php echo do_shortcode('[gravityform id=7 title=false description=false ajax=true tabindex=19]'); ?>
                        </div>
                    </div><!--End CustomMobileMenu -->
                <?php else: ?>
                    <a href="#" class="for-widget-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.987 24">
                            <defs>
                                <style>.a, .c {
                                        fill: #4a4a4a;
                                    }

                                    .a {
                                        fill-rule: evenodd;
                                    }

                                    .b, .c {
                                        stroke: none;
                                    }</style>
                            </defs>
                            <g class="a" transform="translate(-5 -4)">
                                <path class="b"
                                      d="M 26.26399993896484 27.49999809265137 C 25.94297981262207 27.49999809265137 25.6413688659668 27.37517738342285 25.41471862792969 27.14851760864258 L 19.54499053955078 21.27878952026367 C 18.07468223571777 22.22756004333496 16.37864303588867 22.72697830200195 14.61349964141846 22.72697830200195 C 9.588299751281738 22.72697830200195 5.499999523162842 18.6386890411377 5.499999523162842 13.61348819732666 C 5.499999523162842 8.588288307189941 9.588299751281738 4.499998092651367 14.61349964141846 4.499998092651367 C 19.63869857788086 4.499998092651367 23.72698974609375 8.588288307189941 23.72698974609375 13.61348819732666 C 23.72698974609375 15.88033199310303 22.90485191345215 18.02094459533691 21.40177917480469 19.69467735290527 L 27.13516998291016 25.42806816101074 C 27.36537933349609 25.65826797485352 27.49036026000977 25.96401786804199 27.48707008361816 26.28897857666016 C 27.48382949829102 26.60938835144043 27.35604858398438 26.9118480682373 27.12726974487305 27.14061737060547 C 26.89552879333496 27.37236785888672 26.58893966674805 27.49999809265137 26.26399993896484 27.49999809265137 Z M 14.61349964141846 6.51334810256958 C 10.69845962524414 6.51334810256958 7.513349533081055 9.698458671569824 7.513349533081055 13.61348819732666 C 7.513349533081055 17.52851867675781 10.69845962524414 20.7136287689209 14.61349964141846 20.7136287689209 C 18.52853012084961 20.7136287689209 21.7136402130127 17.52851867675781 21.7136402130127 13.61348819732666 C 21.7136402130127 9.698458671569824 18.52853012084961 6.51334810256958 14.61349964141846 6.51334810256958 Z"/>
                                <path class="c"
                                      d="M 26.26399421691895 26.99999809265137 C 26.44721603393555 26.99999809265137 26.63162803649902 26.92915916442871 26.77371978759766 26.78706741333008 C 27.05350875854492 26.50727844238281 27.06029891967773 26.06028747558594 26.78162002563477 25.78161811828613 L 20.70414924621582 19.70414733886719 C 22.26288032531738 18.14540863037109 23.22698974609375 15.99202823638916 23.22698974609375 13.61348819732666 C 23.22698974609375 8.856388092041016 19.37057876586914 4.999998092651367 14.61349964141846 4.999998092651367 C 9.856389045715332 4.999998092651367 5.999999523162842 8.856388092041016 5.999999523162842 13.61348819732666 C 5.999999523162842 18.37056732177734 9.856389045715332 22.22697830200195 14.61349964141846 22.22697830200195 C 16.4747200012207 22.22697830200195 18.19792938232422 21.6367073059082 19.60637855529785 20.63307762145996 L 25.76826858520508 26.79496765136719 C 25.90482521057129 26.93152236938477 26.08383369445801 26.99999809265137 26.26399421691895 26.99999809265137 M 14.61349964141846 6.01334810256958 C 18.81089973449707 6.01334810256958 22.2136402130127 9.416048049926758 22.2136402130127 13.61348819732666 C 22.2136402130127 17.81089782714844 18.81089973449707 21.2136287689209 14.61349964141846 21.2136287689209 C 10.41608905792236 21.2136287689209 7.013349533081055 17.81089782714844 7.013349533081055 13.61348819732666 C 7.013349533081055 9.416048049926758 10.41608905792236 6.01334810256958 14.61349964141846 6.01334810256958 M 26.26399993896484 27.99999809265137 C 25.80942916870117 27.99999809265137 25.38224983215332 27.82316780090332 25.06115913391113 27.50207901000977 L 19.47075271606445 21.91167068481445 C 18.00183296203613 22.77450752258301 16.3388729095459 23.22697830200195 14.61349964141846 23.22697830200195 C 9.312599182128906 23.22697830200195 4.999999523162842 18.91438865661621 4.999999523162842 13.61348819732666 C 4.999999523162842 8.312587738037109 9.312599182128906 3.999998092651367 14.61349964141846 3.999998092651367 C 19.91440010070801 3.999998092651367 24.22698974609375 8.312587738037109 24.22698974609375 13.61348819732666 C 24.22698974609375 15.84498882293701 23.47173500061035 17.96052551269531 22.08227157592773 19.66805076599121 L 27.48872947692871 25.07450866699219 C 27.81472015380859 25.40049743652344 27.99169921875 25.83360862731934 27.9870491027832 26.29403877258301 C 27.98246955871582 26.7460880279541 27.80268859863281 27.17230796813965 27.4808292388916 27.49417877197266 C 27.15464019775391 27.82035827636719 26.72249984741211 27.99999809265137 26.26399993896484 27.99999809265137 Z M 14.61349964141846 7.01334810256958 C 10.97415924072266 7.01334810256958 8.013349533081055 9.97415828704834 8.013349533081055 13.61348819732666 C 8.013349533081055 17.2528190612793 10.97415924072266 20.2136287689209 14.61349964141846 20.2136287689209 C 18.25282859802246 20.2136287689209 21.2136402130127 17.2528190612793 21.2136402130127 13.61348819732666 C 21.2136402130127 9.97415828704834 18.25282859802246 7.01334810256958 14.61349964141846 7.01334810256958 Z"/>
                            </g>
                        </svg>
                    </a>
                <?php endif; ?>
                <div class="mobileMenu">
                        <span class="iconAnime">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                </div>
            </div>
        </div><!--End container-fluid-->

    </div><!--End fixing-->
    <?php if (get_field('mobile_menu_variant', get_homePageId()) == 'Flyout'): ?>
        <div class="menu_bottom" style="display: none;">
            <a href="tel:877.736.4250" class="menu_bottom_phone">877.736.4250</a>
            <a href="mailto:info@bizcor.com" class="menu_bottom_mail">info@bizcor.com</a>
            <ul class="header_social">
                <li>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/Subtraction 22.svg" alt=""></a>
                </li>
                <li>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/Subtraction 23.svg" alt=""></a>
                </li>
                <li>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/Subtraction 24.svg" alt=""></a>
                </li>
                <li>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/Subtraction 25.svg" alt=""></a>
                </li>
                <li>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/Subtraction 26.svg" alt=""></a>
                </li>
            </ul>
        </div>
    <?php endif; ?>
        <div class="dialog">
            <div class="dialog__wrap">
                <div class="dialog__content">
                    <div class="dialog__close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
                            <circle cx="17" cy="17" r="17" fill="white"/>
                            <path d="M9 26L25.9706 9.02944" stroke="black" stroke-width="2" stroke-linecap="round"/>
                            <path d="M9 9L25.9706 25.9706" stroke="black" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h2>Write your details to get in touch with an expert</h2>
                    <form method="post" id="mypost" action="" class="dr-form">
                        <div class="form__field">
                            <span>Name</span>
                            <input type="text" class="dr-field-fname" placeholder="Your name">
                        </div>
                        <div class="form__field">
                            <span>Last Name</span>
                            <input type="text" class="dr-field-lname" placeholder="Your last name">
                        </div>
                        <div class="form__field">
                            <span>E-mail</span>
                            <input type="text" class="dr-field-email" placeholder="E-mail">
                        </div>
                        <div class="phone-input form__field">
                            <div class="select-box">
                                <div class="select-box__current" tabindex="1">
                                    <div class="select-box__value">
                                        <span>Phone number</span>
                                        <input class="select-box__input" type="radio" id="0" value="1" name="phone" checked="checked"/>
                                        <p class="select-box__input-text">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/ffr/ca.svg" alt="canada">
                                            +1
                                        </p>
                                    </div>
                                    <div class="select-box__value">
                                        <input class="select-box__input" type="radio" id="1" value="44" name="phone"/>
                                        <p class="select-box__input-text">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/ffr/uk.svg" alt="united kingdom">
                                            +44
                                        </p>
                                    </div>
                                    <div class="select-box__value">
                                        <input class="select-box__input" type="radio" id="2" value="61" name="phone"/>
                                        <p class="select-box__input-text">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/ffr/au.svg" alt="australia">
                                            +61
                                        </p>
                                    </div>
                                </div>
                                <ul class="select-box__list">
                                    <li>
                                        <label class="select-box__option" for="0" aria-hidden="aria-hidden">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/ffr/ca.svg" alt="canada">
                                            +1
                                        </label>
                                    </li>
                                    <li>
                                        <label class="select-box__option" for="1" aria-hidden="aria-hidden">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/ffr/uk.svg" alt="united kingdom">
                                            +44
                                        </label>
                                    </li>
                                    <li>
                                        <label class="select-box__option" for="2" aria-hidden="aria-hidden">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/ffr/au.svg" alt="australia">
                                            +61
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <input type="text" class="dr-field-phone" placeholder="(xxx) xxx-xxxx">
                            <div class="error-message dr-field-phone-error"></div>
                        </div>
                        <div class="form__field form_submit">
                            <input type="submit" class="dr-field-submit" id="submit_btn" value="Send">
                        </div>
                    </form>
                    <div class="dialog__image">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/ffr/dialog_img.webp" alt="dialog">
                    </div>
                </div>
            </div>
        </div>
</header>

<script>
    const linksHead = document.querySelectorAll('header nav > .menu-header-menu-container > ul > li > a');

    linksHead.forEach(otherLink => otherLink.addEventListener('touchstart', function() {
        event.preventDefault();
        this.classList.add('hover');

        setTimeout(() => {
            const href = this.getAttribute('href');
            if (href) {
                window.location.href = href;
            }
        }, 400);
    }));

    linksHead.forEach(otherLink => otherLink.addEventListener('touchend', function() {

        setTimeout(() => {
            this.classList.remove('hover');
        }, 1000);
    }));


    <?php if(get_field('mobile_menu_variant', get_homePageId()) == 'Standard'): ?>
    jQuery(document).ready(function () {
        /*Open mobile Menu*/
        jQuery('.mobileMenu').click(function () {
            var hzcl = jQuery(this).hasClass('mobileMenuOpen');
            if (hzcl == false) {
                jQuery('header nav').slideDown(400);
                jQuery(this).addClass('mobileMenuOpen');
            } else {
                jQuery('header nav').slideUp(300);
                jQuery(this).removeClass('mobileMenuOpen');
            }
        })
    })
    <?php elseif(get_field('mobile_menu_variant', get_homePageId()) == 'Flyout'): ?>
    jQuery(document).ready(function () {
        /*Open mobile Menu*/
        jQuery('.mobileMenu').click(function () {
            var hzcl = jQuery(this).hasClass('mobileMenuOpen');
            if (hzcl == false) {
                jQuery('header nav').addClass('open_menu');
                jQuery(this).addClass('mobileMenuOpen');
            } else {
                jQuery('header nav').removeClass('open_menu');
                jQuery(this).removeClass('mobileMenuOpen');
            }
        })

        jQuery('header nav > .menu-header-menu-container').prepend('<span class="back_submenu"><img src="<?php echo get_template_directory_uri(); ?>/images/Path 2499.svg" alt="">back</span>');
        jQuery('header nav > .menu-header-menu-container .back_submenu').height(jQuery('header .menu-header-menu-container').css('padding-top'));
        header_bottom = jQuery('header > .menu_bottom').clone();
        jQuery('header nav > .menu-header-menu-container').append(header_bottom);
        jQuery('header nav .menu-item-has-children > a').append('<span class="new_caret"><img src="<?php echo get_template_directory_uri(); ?>/images/Path 2500.svg" alt=""></span>');

        jQuery(window).resize(function () {
            jQuery('header nav > .menu-header-menu-container .back_submenu').height(jQuery('header .menu-header-menu-container').css('padding-top'));
        });/*End ready function*/

        jQuery('header nav .menu-item-has-children a .new_caret').click(function (e) {
            e.preventDefault();
            jQuery(this).parent().next('.sub-menu').addClass('open_submenu');
            jQuery('header nav > .menu-header-menu-container').addClass('open_submenu');
        })

        jQuery('header nav > .menu-header-menu-container .back_submenu').click(function () {
            jQuery(this).parent().find('ul.open_submenu').last().removeClass('open_submenu');
            submenu_count = jQuery(this).parent().find('ul.open_submenu').length;
            if (submenu_count < 1) {
                jQuery(this).parent().removeClass('open_submenu');
            }
        })
    })
    <?php endif; ?>
</script>