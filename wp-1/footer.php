<footer>
    <?php if (get_field('footer_variants', get_homePageId()) == 'Standard'): ?>
        <div class="footer-container-wrap">
            <div class="big_text">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/Pablo_Partners.png" alt="#">
            </div>
            <div class="footer-container">
                <div class="footer-left">
                    <div class="footer-terms">
                        <div class="footer-terms-links">
                            <?php if (have_rows('terms_and_conditions_links', get_homePageId())): ?>
                                <?php while (have_rows('terms_and_conditions_links', get_homePageId())): the_row(); ?>
                                    <h3>
                                        <a href="<?php the_sub_field('link_url', get_homePageId()); ?>">
                                            <?php the_sub_field('link_text', get_homePageId()); ?>
                                        </a>
                                    </h3>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="footer-nav-block">
                        <div class="footer-quick-links">
                            <h3 class="link-title"><?php the_field('section_title', get_homePageId()); ?></h3>
                            <ul>
                                <?php if (have_rows('menu_links_#1', get_homePageId())): ?>
                                    <?php while (have_rows('menu_links_#1', get_homePageId())): the_row(); ?>
                                        <li class="<?php the_sub_field('menu', get_homePageId()); ?>">
                                            <a href="<?php the_sub_field('link_url', get_homePageId()); ?>"><?php the_sub_field('link_text', get_homePageId()); ?></a>
                                        </li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>

                        <style>
                            .footer-quick-links a,
                            .footer-terms-links a,
                            .footer-terms-links a.hover,
                            .footer-quick-links a.hover {
                                transition: color 0.2s ease, all 0.2s ease;
                            }

                            .footer-quick-links a.hover,
                            .footer-terms-links a.hover {
                                color: #FF7A00!important;
                                transition: color 0.2s ease, all 0.2s ease;
                            }

                            .footer-quick-links a.hover::before,
                            .footer-terms-links a.hover::before {
                                content: '';
                                position: absolute;
                                bottom: -5px;
                                width: 100% !important;
                                height: 1px;
                                background: #FF7A00;
                                -webkit-transition: all .2s ease;
                                -o-transition: all .2s ease;
                                transition: all .2s ease;

                            }

                            @media only screen and (max-width: 991px) {
                                .footer-quick-links a:hover::before,
                                .footer-terms-links a:hover:before {
                                    /*width: 0 !important;*/
                                }
                            }

                        </style>
                        <script>
                            const linksGr = document.querySelectorAll('.footer-quick-links ul li a');
                            const linksTermsGr = document.querySelectorAll('.footer-terms-links a');

                            linksGr.forEach(otherLink => otherLink.addEventListener('touchstart', function() {
                                event.preventDefault();
                                this.classList.add('hover');

                                setTimeout(() => {
                                    const href = this.getAttribute('href');
                                    if (href) {
                                        window.location.href = href;
                                    }
                                }, 400);
                            }));

                            linksGr.forEach(otherLink => otherLink.addEventListener('touchend', function() {

                                setTimeout(() => {
                                    this.classList.remove('hover');
                                }, 1000);
                            }));



                            linksTermsGr.forEach(otherLink => otherLink.addEventListener('touchstart', function() {
                                event.preventDefault();
                                this.classList.add('hover');

                                setTimeout(() => {
                                    const href = this.getAttribute('href');
                                    if (href) {
                                        window.location.href = href;
                                    }
                                },400);
                            }));

                            linksTermsGr.forEach(otherLink => otherLink.addEventListener('touchend', function() {

                                setTimeout(() => {
                                    this.classList.remove('hover');
                                }, 1000);
                            }));
                        </script>


                        <div class="footer-contacts">
                            <?php if (have_rows('contact_us', get_homePageId())): ?>
                                <?php while (have_rows('contact_us', get_homePageId())): the_row(); ?>
                                    <h3 class="link-title"><?php the_sub_field('section_title', get_homePageId()); ?></h3>
                                    <a href="tel: <?php the_sub_field('phone_#1', get_homePageId()); ?>">
                                        <?php the_sub_field('phone_#1', get_homePageId()); ?>
                                    </a>
                                    <a href="tel: <?php the_sub_field('phone_#2', get_homePageId()); ?>">
                                        <?php the_sub_field('phone_#2', get_homePageId()); ?>
                                    </a>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>

                        <div class="footer-location">
                            <?php if (have_rows('location', get_homePageId())): ?>
                                <?php while (have_rows('location', get_homePageId())): the_row(); ?>
                                    <h3 class="link-title"><?php the_sub_field('section_title', get_homePageId()); ?></h3>
                                    <p> <?php the_sub_field('location_address', get_homePageId()); ?></p>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="footer-description">
                        <?php if (have_rows('footer_description', get_homePageId())): ?>
                            <?php while (have_rows('footer_description', get_homePageId())): the_row(); ?>
                                <?php the_sub_field('description', get_homePageId()); ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="footer-copyright">
                        <p>
                            Copyright © <?php echo date("Y"); ?> Pablo Partners. All rights reserved.
                        </p>
                    </div>
                </div>
                <div class="footer-right">
                    <div class="footer-logo">
                        <?php $image = get_field('footer_logo', 268); ?>
                        <img src="<?php echo $image['url']; ?>" title="" alt="<?php echo $image['alt']; ?>"/>
                    </div>
                    <div class="footer-logo-trust">
                        <?php if (have_rows('logo_trust', get_homePageId())): ?>
                            <?php while (have_rows('logo_trust', get_homePageId())): the_row(); ?>
                                <?php $image = get_sub_field('logo_trust_image', get_homePageId()); ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" alt="logo">
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="footer-terms-socials">
                        <ul>
                            <?php if (have_rows('social_links', get_homePageId())): ?>
                                <?php while (have_rows('social_links', get_homePageId())): the_row(); ?>
                                    <li>
                                        <a href="<?php the_sub_field('social_link', get_homePageId()); ?>"
                                           target="_blank">
                                            <?php $image = get_sub_field('social_icon', get_homePageId()); ?>
                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="footer-description mobile">
                        <?php if (have_rows('footer_description', get_homePageId())): ?>
                            <?php while (have_rows('footer_description', get_homePageId())): the_row(); ?>
                                <?php the_sub_field('description', get_homePageId()); ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="footer-copyright mobile">
                        <p>
                            Copyright © <?php echo date("Y"); ?> Pablo Partners. All rights reserved.
                        </p>
                    </div>
                </div>
            </div><!--end footer-container-->
        </div>

    <?php elseif (get_field('footer_variants', get_homePageId()) == 'Contact&Menus'): ?>
        <div class="footer-container">
            <div class="footer-logo">
                <span class="line left"></span>
                <!--<a href="#"><img src="<?php /*echo get_stylesheet_directory_uri() */ ?>/images/logo-white.svg"
                                 alt="logo"></a>-->
                <span class="line right"></span>
            </div>
            <div class="footer-box mt">
                <div class="footer-contact footer-block">
                    <ul>
                        <li>
                            <h3>Our Address</h3>
                            <p>5580 W Chandler Blvd.</p>
                            <p>Chandler, Arizona 85226</p>
                        </li>
                        <li>
                            <h3>Give Us A Call</h3>
                            <?php $phone = preg_replace('/[^0-9.]/', '', get_field('tel_number', 268)); ?>
                            <p><a href="tel:<?php echo $phone; ?>"><?php echo get_field('tel_number', 268); ?></a></p>
                        </li>
                        <li>
                            <ul class="social">
                                <li>
                                    <a href="#" target="_blank"><img
                                                src="<?php echo get_stylesheet_directory_uri() ?>/images/icon-facebook.png"
                                                alt="#"></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><img
                                                src="<?php echo get_stylesheet_directory_uri() ?>/images/icon-linkedin.png"
                                                alt="#"></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><img
                                                src="<?php echo get_stylesheet_directory_uri() ?>/images/icon-twitter.png"
                                                alt="#"></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><img
                                                src="<?php echo get_stylesheet_directory_uri() ?>/images/icon-pinteres.png"
                                                alt="#"></a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"><img
                                                src="<?php echo get_stylesheet_directory_uri() ?>/images/icon-instagram.png"
                                                alt="#"></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div><!--end footer-contact-->
                <div class="center-menu footer-block">
                    <h3>Menu
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas"
                             data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img"
                             viewBox="0 0 320 512">
                            <path fill="currentColor"
                                  d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/>
                        </svg>
                    </h3>
                    <ul>
                        <?php if (have_rows('center_menu', get_homePageId())): ?>
                            <?php while (have_rows('center_menu', get_homePageId())): the_row(); ?>
                                <li>
                                    <a href="<?php the_sub_field('link', get_homePageId()); ?>"><?php the_sub_field('link_text', get_homePageId()); ?></a>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div><!--end footer-contact-->
                <div class="footer-links footer-block">
                    <div class="innerCont">
                        <h3>Quick Links
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"
                                 data-prefix="fas" data-icon="chevron-right"
                                 class="svg-inline--fa fa-chevron-right fa-w-10" role="img" viewBox="0 0 320 512">
                                <path fill="currentColor"
                                      d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/>
                            </svg>
                        </h3>
                        <ul>
                            <?php if (have_rows('quick_links', get_homePageId())): ?>
                                <?php while (have_rows('quick_links', get_homePageId())): the_row(); ?>
                                    <li>
                                        <a href="<?php the_sub_field('link', get_homePageId()); ?>"><?php the_sub_field('link_text', get_homePageId()); ?></a>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div><!--End innerCont-->
                </div><!--end footer-links-->
            </div>
        </div>
    <?php endif; ?>

    <img class="footer-img" src="<?php echo get_stylesheet_directory_uri() ?>/images/Footer-b.png" alt="#">


</footer><!--end footer-->
<?php include('templates-parts/css-parts/footer-css.php'); ?>

<?php wp_footer(); ?>

<?php if (get_field('global_font_family', get_homePageId()) == 'Original'): ?>
    <link href="https://fonts.googleapis.com/css2?family=Enriqueta&family=Poppins:wght@400;500;600&display=swap"
          rel="stylesheet">
<?php else:
    $gfont_url_new = [];
    for ($i = 1; $i <= 9; $i++) {
        $gfont_url = '_gfonts_url_value_key_' . $i;
        $gfont_url_full = explode(':', get_post_meta(get_homePageId(), "$gfont_url")[0]);
        if (!$gfont_url_full[1]) $gfont_url_full[1] = '400';
        $gfont_url_new[$gfont_url_full[0]][$gfont_url_full[1]] = 1;
    }
    foreach ($gfont_url_new as $key => $gfont_url_sigle) {
        echo '<link href="https://fonts.googleapis.com/css?family=' . $key . ':' . implode(',', array_keys($gfont_url_sigle)) . '&display=swap" rel="stylesheet">';
    }
    ?>
<?php endif; ?>
<?php
if (!is_front_page()) {
    echo '</body>';
    echo '</html>';
}
?>
<?php /*if (get_field('header_variants', get_homePageId()) != 'ILV Simple'): */ ?><!--
    <div class="modal_search">
        <?php /*dynamic_sidebar('header-unit-search'); */ ?>
        <span class="close_modal">&times</span>
    </div>
--><?php /*endif; */ ?>