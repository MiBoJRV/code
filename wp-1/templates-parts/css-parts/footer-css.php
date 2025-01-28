<style>
    html {
        -moz-transform: scale(1); /* Firefox */
        -moz-transform-origin: 100% 0;
    }

    /*@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&family=Roboto:wght@400;500;700;800;900&display=swap');*/
    /*Footer css*/

    /*@font-face {*/
    /*    font-family: 'Futura Medium';*/
    /*    src: url('/wp-content/themes/BizcorLuxury/fonts/Futura Medium.eot');*/
    /*    src: local('Futura Medium'), local('Futura Medium'),*/
    /*    url('/wp-content/themes/BizcorLuxury/fonts/Futura Medium.svg') format('svg'),*/
    /*    url('/wp-content/themes/BizcorLuxury/fonts/Futura Medium.woff') format('woff'),*/
    /*    url('/wp-content/themes/BizcorLuxury/fonts/Futura Medium.ttf') format('truetype');*/
    /*    font-weight: normal;*/
    /*    font-style: normal;*/
    /*    font-display: swap;*/
    /*}*/

    @font-face {
        font-family: 'Roboto';
    url('/wp-content/themes/BizcorLuxury/Roboto/fonts/Roboto-Regular.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
        font-display: swap;
    }

    @font-face {
        font-family: 'Roboto';
    url('/wp-content/themes/BizcorLuxury/Roboto/fonts/Roboto-Medium.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
        font-display: swap;
    }


    @font-face {
        font-family: 'Roboto';
    url('/wp-content/themes/BizcorLuxury/Roboto/fonts/Roboto-Bold.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
        font-display: swap;
    }

    @font-face {
        font-family: 'Roboto';
    url('/wp-content/themes/BizcorLuxury/Roboto/fonts/Roboto-Black.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
        font-display: swap;
    }

    @font-face {
        font-family: 'Montserrat';
    url('/wp-content/themes/BizcorLuxury/Roboto/fonts/Montserrat-Regular.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
        font-display: swap;
    }

    @font-face {
        font-family: 'Montserrat';
    url('/wp-content/themes/BizcorLuxury/Roboto/fonts/Montserrat-Medium.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
        font-display: swap;
    }

    @font-face {
        font-family: 'Montserrat';
    url('/wp-content/themes/BizcorLuxury/Roboto/fonts/Montserrat-SemiBold.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
        font-display: swap;
    }

    @font-face {
        font-family: 'Montserrat';
    url('/wp-content/themes/BizcorLuxury/Roboto/fonts/Montserrat-Bold.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
        font-display: swap;
    }

    @font-face {
        font-family: 'Montserrat';
    url('/wp-content/themes/BizcorLuxury/Roboto/fonts/Montserrat-Black.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
        font-display: swap;
    }

    * {
        font-family: 'Montserrat', sans-serif;
        /*font-family: 'Roboto', sans-serif;*/
        box-sizing: border-box;
    }

    body > .content {
        min-height: 650px;
        background: #fff;
        overflow-x: hidden;
        position: relative;
    }

    /*@media only screen and (max-width: 991px) {*/
    /*    body > .content {*/
    /*        overflow-x: hidden;*/
    /*    }*/
    /*}*/

    ul {
        list-style-position: inside;
    }

    .floatLeft {
        float: left;
    }

    .floatRight {
        float: right;
    }

    .clear {
        clear: both;
    }

    a:hover, button, input[type="submit"], a img {
        transition: all 0.3s linear;
    }

    input.form-control::-moz-placeholder, textarea::-moz-placeholder {
        color: #7D7D7D;
        opacity: 1 !important;
    }

    input.form-control::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
        color: #7D7D7D;
    }

    input:not([type="checkbox"]):not([type="radio"]), select {
        -moz-appearance: none;
        -webkit-appearance: none;
    }

    select.form-control {
        color: #7D7D7D;
    }

    .mobileAppear {
        display: none;
    }

    a, a:hover, a:focus {
        text-decoration: none;
    }

    .header > .container-fluid {
        padding: 0;
    }

    iframe, img {
        max-width: 100%;
    }

    a img {
        border: none;
    }

    .forLink {
        display: none;
    }

    a.button {
        display: inline-block;
        padding: 10px 18px;
    }

    /*Bootstrap resets*/
    input, textarea, select,
    .customView input, .customView textarea, .customView select {
        border-radius: 0;
        border: none;
        box-shadow: none;
    }

    /*End Standart Settings*/
    /*modul*//*modul*//*modul*/
    /*positioned*/
    .positioned {
        position: absolute;
        width: 100%;
        left: 0;
    }

    .positioned.centered {
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    /*on a hover image*/
    .onAhover {
        position: relative;
        cursor: pointer;
    }

    .onAhover img {
        transition: opacity 0.3s;
    }

    .onAhover img:nth-child(2) {
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
    }

    .onAhover:hover img:nth-child(2) {
        opacity: 1;
    }

    .onAhover:hover img:first-child {
        opacity: 0;
    }

    /*-----------------------------------------------
    *** pagination *** pagination *** pagination ***
    -------------------------------------------------*/
    <?php if(get_field('breadcrumbs_variant', get_homePageId())=='Standard' && get_field('display_breadcrumbs')=='global' || get_field('breadcrumbs_variant')=='Standard' && get_field('display_breadcrumbs')=='yes'): ?>
    .paginationSection {
        padding: 0 10px;
        overflow: hidden;
    }

    .paginationSection span.pageName a {
        color: #fff;
        padding: 10px 20px 8px;
        display: inline-block;
        transition: all 0.4s;
        width: 100%;
    }

    .paginationSection span.pageName a:hover {
        background: var(--hover_color2);
    }

    .paginationSection span.pageName a:hover .triangle-right-2 {
        border-color: transparent transparent transparent var(--hover_color2);
    }

    .paginationSection span.pageName {
        color: #fff;
        position: relative;
        margin-right: 1px;
        display: inline-block;
        line-height: 1.42;
    }

    .paginationSection span.pageName:last-child {
        padding: 10px 20px 8px;
    }

    .paginationSection span.pageName:last-child .triangle-right {
        right: -13px;
    }

    .triangle-right {
        display: inline-block;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 21px 0 21px 12px;
        border-color: transparent transparent transparent #fff;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        right: -12px;
        padding: 0;
        z-index: 9;
    }

    .triangle-right-2 {
        display: inline-block;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 19px 0 19px 11px;
        border-color: transparent transparent transparent #F0A71A;
        padding: 0;
        position: absolute;
        top: -19px;
        right: 2px;
        transition: all 0.4s;
    }

    .paginationSection span.pageName.lastcrumb {
        background: var(--main_color);
    }

    .paginationSection span.pageName.lastcrumb .triangle-right {
        border-color: transparent;
    }

    .paginationSection span.pageName.lastcrumb .triangle-right-2 {
        border-color: transparent transparent transparent var(--main_color);
    }

    .paginationSection span.pageName:nth-child(1) {
        background: rgb(106, 216, 191);
    }

    .paginationSection span.pageName:nth-child(2) {
        background: rgb(73, 201, 172);
    }

    .paginationSection span.pageName:nth-child(3) {
        background: var(--main_color);
    }

    .paginationSection span.pageName:nth-child(1) .triangle-right-2 {
        border-color: transparent transparent transparent rgb(106, 216, 191);
    }

    .paginationSection span.pageName:nth-child(2) .triangle-right-2 {
        border-color: transparent transparent transparent rgb(73, 201, 172);
    }

    .paginationSection span.pageName:nth-child(3) .triangle-right-2 {
        border-color: transparent transparent transparent var(--main_color);
    }

    @media (max-width: 767px) {
        .paginationSection {
            display: none;
        }
    }

    <?php elseif(get_field('breadcrumbs_variant', get_homePageId())=='Without Styles' && get_field('display_breadcrumbs')=='global' || get_field('breadcrumbs_variant')=='Without Styles' && get_field('display_breadcrumbs')=='yes'): ?>
    .paginationSection span.pageName {
        position: relative;
        padding: 0 10px;
    }

    .paginationSection span.pageName::before {
        content: '>';
        position: absolute;
        top: 50%;
        right: 0;
        transform: translate(30%, -50%);
    }

    .paginationSection span.pageName.lastcrumb::before {
        display: none;
    }

    .paginationSection span.pageName a,
    .paginationSection span.pageName {
        display: inline-block;
        text-decoration: underline;
    <?php if(get_field('display_breadcrumbs')=='global'): ?> color: <?php the_field('breadcrumbs_text_color', get_homePageId()); ?>;
        font-size: <?php the_field('breadcrumbs_text_font_size', get_homePageId()); ?>;
    <?php elseif(get_field('display_breadcrumbs')=='yes'): ?> color: <?php the_field('breadcrumbs_text_color'); ?>;
        font-size: <?php the_field('breadcrumbs_text_font_size'); ?>;
    <?php endif; ?>
    }

    .paginationSection span.pageName a:hover {
        color: var(--main_color);
    }

    <?php endif; ?>
    /*-----------------------------------------------
    *** pagination *** pagination *** pagination ***
    -------------------------------------------------*/
    /*round arrows*/
    .round .slick-prev,
    .round .slick-next {
        width: 51px;
        height: 51px;
        border-radius: 50px;
        background-color: var(--main_color);
        display: flex !important;
        justify-content: center;
        align-items: center;
    }

    .reviews .round .slick-prev, .reviews .round .slick-next {
        background-color: var(--second_color) !important;
    }

    .round .slick-prev {
        left: 0;
        transform: translateX(-100%);
        padding: 0 5px 0 0;
    }

    .round .slick-next {
        right: 0;
        transform: translateX(100%);
        padding: 0 0 0 5px;
    }

    .round .slick-prev:hover,
    .round .slick-next:hover {
        cursor: pointer;
        background: var(--hover_color2);
    }

    .round .slick-prev:focus,
    .round .slick-next:focus {
        outline: none;
    }

    .round .slick-arrow img {
        opacity: 1;
    }

    /*end round arrows*/
    /*big arrows*/
    .big_arrows button.slick-prev:hover,
    .big_arrows button.slick-next:hover {
        cursor: pointer;
    }

    .big_arrows button.slick-prev {
        left: 0;
        top: 50%;
        transform: translate(-80%, -50%);
        outline: none;
    }

    .big_arrows button.slick-next {
        right: 0;
        top: 50%;
        transform: translate(80%, -50%);
        outline: none;
    }

    /*end big arrows*/
    @media (max-width: 1200px) {
        /*.round .slick-prev {
            left: -15px;
        }
        .round .slick-next {
            right: -15px;
        }*/
    }

    @media screen and (max-width: 767px) {
        .big_arrows .slick-prev, .big_arrows .slick-next {
            width: auto;
            height: auto;
            background: #fff;
            padding: 5px;
        }

        .big_arrows .slick-prev img, .big_arrows .slick-next img {
            opacity: 1;
        }

        .big_arrows .slick-arrow:focus,
        .round .slick-arrow:focus {
            outline: none;
        }

        .big_arrows button.slick-next,
        .big_arrows button.slick-prev {
            transform: translate(0, -50%);
        }

        .stories-box.round .slick-prev {
            transform: translateX(40%);
        }

        .stories-box.round .slick-next {
            transform: translateX(-40%);
        }
    }

    @media screen and (max-width: 480px) {
        .round .slick-prev {
            transform: translateX(-50%);
        }

        .round .slick-next {
            transform: translateX(50%);
        }
    }

    /*end slick arrows variants styles*/
    /*End General slick slider*//*End General slick slider*/


    <?php if(get_field('customize_font_size', get_homePageId())=='yes'): ?>
    footer .footer-box h3 {
        font-size: <?php the_field('titles_font_size', get_homePageId()); ?>;
    }

    .footer-block ul li a {
        font-size: <?php the_field('menu_links_font_size', get_homePageId()); ?>;
    }

    footer .footer-box p {
        font-size: <?php the_field('contact_info_fonf_size', get_homePageId()); ?>;
    }

    <?php endif; ?>

    /* Footer */
    footer {
        position: relative;
        z-index: 100;
        background-image: url("<?php echo get_stylesheet_directory_uri() ?>/images/backstage-6.png");
        padding-top: 100px;
    }

    .home footer {
        padding-top: 0;
    }

    @media only screen and (max-width: 991px) {
        /*.home footer {*/
        /*    padding-top: 50px;*/
        /*    border-top: 5px solid #000;*/
        /*}*/

        footer {
            padding-top: 50px;
        }
    }


    footer .footer-container-wrap {
        background: #FFFCE9;
        /*max-width: 1824px;*/
        margin: 0 auto -228px auto;
        border: 9px solid #000;
        border-radius: 80px;
        position: relative;
        overflow: hidden;
    }

    @media only screen and (max-width: 991px) {
        footer .footer-container-wrap {
            border: none;
            border-radius: inherit;
            border-top: 15px solid #000;
            border-bottom: 15px solid #000;

        }
    }

    footer .footer-container-wrap .big_text {
        position: absolute;
        right: 40px;
        top: 96px;
        /*max-width: 1509px;*/
        /*width: 100%;*/
        width: 1509px;
        margin: 0 auto;
    }

    @media only screen and (max-width: 1600px) {
        footer .footer-container-wrap .big_text {
            left: 0;
        }
    }

    @media only screen and (max-width: 991px) {
        footer .footer-container-wrap .big_text {
            top: 419px;
        }
    }

    footer .footer-container-wrap .big_text img {
        width: 100%;
        height: auto;
        padding: 20px;
    }

    @media only screen and (max-width: 991px) {
        footer .footer-container-wrap .big_text img {
            width: 1509px;
            left: 0;
            padding: 0;
        }
    }

    .footer-container {
        max-width: 1264px;
        padding: 75px 20px 230px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        gap: 50px;
        position: relative;
    }

    @media only screen and (max-width: 991px) {
        .footer-container {
            padding: 20px;
            flex-direction: column;
            position: relative;
        }
    }

    footer .footer-img {
        margin: 0 auto;
        text-align: center;
        display: flex;
        position: relative;
        width: 100%;
    }

    @media only screen and (max-width: 991px) {
        footer .footer-img {
            display: none;
        }
    }

    footer .footer-left {
        max-width: 806px;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    *:lang(ua-UA) footer .footer-left {
        max-width: 920px;
    }

    @media only screen and (max-width: 1200px) {
        *:lang(ua-UA) footer .footer-left {
            max-width: 806px;
        }
    }

    @media only screen and (max-width: 991px) {
        footer .footer-left, *:lang(ua-UA) footer .footer-left {
            max-width: 100%;
            margin-top: 117px;
        }
    }

    footer .footer-right {
        max-width: 250px;
        width: 100%;
    }

    @media only screen and (max-width: 991px) {
        footer .footer-right {
            max-width: 100%;
        }
    }

    .footer-links {
        display: flex;
        justify-content: space-between;
        gap: 20px;
    }

    @media only screen and (max-width: 991px) {
        .footer-links {
            flex-direction: column;
            gap: 50px;
        }
    }

    .footer-nav {
        max-width: 1080px;
        width: 1000%;
    }

    @media only screen and (max-width: 991px) {
        .footer-nav {
            width: auto;
        }
    }

    .footer-nav nav {
        display: flex;
        /*justify-content: flex-start;*/
        justify-content: space-between;
        row-gap: 50px;
        flex-wrap: wrap;
        column-gap: 14px;
        margin-left: 14px;
    }

    @media only screen and (max-width: 991px) {
        .footer-nav nav {
            flex-direction: column;
        }
    }

    .footer-nav .nav-col {
        min-width: 184px;
        gap: 14px;
        display: flex;
        flex-direction: column;
    }


    .footer-nav .col-3 {
        min-width: 255px;
    }

    .footer-nav .menu {
        position: relative;
        /*margin-left: 1em;*/
    }

    .footer-nav .menu:after {
        content: "•";
        color: #FF5A6B;
        font-weight: bold;
        display: inline-block;
        width: 1em;
        margin-left: -1em;
        left: 0;
        position: absolute;
    }

    /*.footer-nav .col-2 .menu:nth-child(1) {*/
    /*    margin-bottom: 61px;*/
    /*}*/

    /*.footer-nav .col-4 .menu:nth-child(1) {*/
    /*    margin-bottom: 61px;*/
    /*}*/

    .footer-nav .nav-col li:not(.menu) {
        margin-bottom: 11px;
    }


    .footer-nav-block {
        display: flex;
        justify-content: space-between;
        max-width: 760px;
        width: 100%;
        /*margin-bottom: 100px;*/
        flex-direction: column;
        gap: 40px;
    }

    @media only screen and (max-width: 991px) {
        .footer-nav-block {
            flex-direction: column;
            gap: 50px;
            margin: 50px 0 20px;
        }
    }

    .footer-nav-block .footer-quick-links li {
        margin-bottom: 20px;
        max-width: 150px;
    }

    .footer-nav-block .footer-quick-links li:nth-child(even) {
        text-align: right;
    }

    @media only screen and (max-width: 991px) {
        .footer-nav-block .footer-quick-links li:nth-child(even) {
            text-align: left;
        }
    }

    .footer-nav-block .footer-quick-links li:last-of-type {
        margin-bottom: 0;
        /*text-align: right;*/
    }


    .footer-nav h2 {
        font-size: 32px;
        font-weight: 400;
        line-height: 32px;
        color: #FF5A6B;
        margin-bottom: 11px;
    }

    .footer-nav ul {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .footer-nav ul li {
        margin-left: 1em;
        list-style: none;
    }

    .footer-nav ul li::before {
        content: "•";
        color: #FF5A6B;
        font-weight: bold;
        display: inline-block;
        width: 1em;
        margin-left: -1em;

    }

    .footer-nav a {
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        color: #ffffff;
    }

    .footer-nav a:hover {
        text-shadow: 0 0 8px white;
    }

    footer .footer-nav-block .link-title {
        color: #FF7A00;
        text-align: justify;
        font-family: 'Roboto', sans-serif;
        font-size: 20px;
        font-style: normal;
        font-weight: 900;
        line-height: normal;
        letter-spacing: 4px;
        margin-bottom: 20px;
    }

    footer .link-title {
        color: #231F20;
        text-align: justify;
        font-family: 'Roboto', sans-serif;
        font-size: 16px;
        font-style: normal;
        font-weight: 900;
        line-height: normal;
        letter-spacing: 3.2px;
    }


    .footer-contacts {
        display: none;
    }

    .footer-contacts a {
        display: block;
        color: #231F20;
        text-align: justify;
        font-family: 'Roboto', sans-serif;
        font-size: 16px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        letter-spacing: 3.2px;
    }

    .footer-nav-block p {
        display: block;
        color: #231F20;
        text-align: justify;
        font-family: 'Roboto', sans-serif;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        letter-spacing: 3.2px;
    }

    .footer-quick-links {
        max-width: 388px;
        width: 100%;
    }

    .footer-quick-links ul {

        max-width: 388px;
        width: 100%;
        /*-moz-column-count: 2;*/
        /*-webkit-column-count: 2;*/
        /*column-count: 2;*/
        /*display: flex;*/
        /*flex-wrap: wrap;*/
        /*justify-content: space-between;*/
        /*column-gap: 150px;*/

        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(2, 1fr);
    }

    *:lang(ua-UA) .footer-quick-links ul {
        column-gap: inherit;
    }

    @media only screen and (max-width: 991px) {
        .footer-quick-links ul {
            /*-moz-column-count: 1;*/
            /*-webkit-column-count: 1;*/
            /*column-count: 1;*/
            grid-template-columns: repeat(1, 1fr);
        }
    }

    .footer-quick-links a {
        display: inline;
        color: #231F20;
        text-align: justify;
        font-family: 'Roboto', sans-serif;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        letter-spacing: 3.2px;
        position: relative;
    }

    .footer-quick-links a::before {
        /* display: none; */
        content: '';
        position: absolute;
        bottom: -5px;
        /* left: 50%; */
        width: 0;
        /* -webkit-transform: translateX(-50%); */
        /* -ms-transform: translateX(-50%); */
        /* -o-transform: translateX(-50%); */
        /* transform: translateX(-50%); */
        height: 1px;
        background: #FF7A00;
        -webkit-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease;
    }

    .footer-quick-links a:hover {
        color: #FF7A00;
    }

    @media only screen and (max-width: 991px) {
        .footer-quick-links a:hover {
            color: #231F20;
        }
    }

    .footer-quick-links a:active {
        font-weight: 900;
        color: #231F20;
    }

    .footer-quick-links a:hover::before {
        width: 100%;
        -webkit-transition: all .5s ease;
        -o-transition: all .5s ease;
        transition: all .5s ease;
        /*width: -webkit-fill-available;*/
    }

    @media only screen and (max-width: 991px) {
        .footer-quick-links a:hover,
        .footer-terms-links a:hover, {
            color: #231F20;
        }

        .footer-quick-links a:hover::before,
        .footer-terms-links a:hover::before, {
            width: 0 !important;
        }
    }

    .footer-quick-links li:nth-child(3) a {
        text-align: right;
    }

    @media only screen and (max-width: 991px) {
        .footer-quick-links li:nth-child(3) a {
            text-align: left;
        }
    }

    .footer-quick-links li:nth-child(4) a {
        text-align: right;
    }

    .footer-quick-links li:nth-child(5) a {
        text-align: right;
    }

    .footer-quick-links li:nth-child(6) a {
        text-align: right;
    }

    @media only screen and (max-width: 991px) {
        .footer-quick-links li:nth-child(4) a {
            text-align: left;
        }

        .footer-quick-links li:nth-child(5) a {
            text-align: left;
        }

        .footer-quick-links li:nth-child(6) a {
            text-align: left;
        }
    }

    .footer-contacts a:first-of-type {
        margin-bottom: 20px;
    }

    .footer-terms {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
        /*margin-bottom: 60px;*/
    }

    @media only screen and (max-width: 991px) {
        .footer-terms {
            flex-direction: column;
            align-items: flex-start;
            gap: 70px;
            margin: 0;
        }
    }

    .footer-nav-block .footer_registration {
        max-width: 415px;
    }

    .footer-terms-links {
        display: flex;
        justify-content: space-between;
        width: 100%;
        gap: 20px;
    }

    @media only screen and (max-width: 1200px) {
        *:lang(ua-UA) .footer-terms-links {
            flex-direction: column-reverse;
        }
    }


    .footer-terms-links h3 {
        white-space: nowrap;

        font-size: 14px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        margin-bottom: 0;
    }

    @media only screen and (max-width: 991px) {
        .footer-terms-links h3 {
            width: calc(50% - 20px);
        }

    }


    .footer-terms-links h3 a {
        white-space: nowrap;
        color: #231F20;
        text-align: justify;
        font-family: 'Roboto', sans-serif;
        font-size: 20px;
        font-style: normal;
        font-weight: 900;
        line-height: normal;
        letter-spacing: 4px;
        position: relative;
    }

    .footer-terms-links h3 a::before {
        /*display: none;*/
        content: '';
        position: absolute;
        bottom: -5px;
        /*left: 50%;*/
        width: 0;
        /*-webkit-transform: translateX(-50%);*/
        /*-ms-transform: translateX(-50%);*/
        /*-o-transform: translateX(-50%);*/
        /*transform: translateX(-50%);*/
        height: 1px;
        background: #FF7A00;
        -webkit-transition: .3s;
        -o-transition: .3s;
        transition: .3s;
    }
    @media only screen and (max-width: 991px) {
        .footer-terms-links h3 a::before {
            width: 0;
        }
    }

    .footer-terms-links h3 a:active {
        color: #231F20 !important;;
    }

    .footer-terms-links h3 a:active::before {
        width: 0 !important;
    }

    .footer-terms-links h3 a:hover::before {
        width: 100%;
    }

    @media only screen and (max-width: 991px) {
        .footer-terms-links h3 a:hover::before {
            width:0;
        }
    }

    .footer-terms-links h3 a:hover {
        color: #FF7A00;
    }

    @media only screen and (max-width: 991px) {
        .footer-terms-links h3 a:hover {
            color: #231F20;
        }
    }

    *:lang(ua-UA) .footer-terms-links h3 a {
        font-size: 16px;
        letter-spacing: 3.2px;
    }


    @media only screen and (max-width: 389.98px) {
        .footer-terms-links h3 {
            width: 100%;
        }
    }

    @media only screen and (max-width: 991px) {
        .footer-terms-links {
            flex-wrap: wrap;
            flex-direction: column;
            gap: 30px;
        }
    }

    .footer-terms-socials {
        margin: 0 auto;
    }

    @media only screen and (max-width: 991px) {
        .footer-terms-socials {
            margin-bottom: 20px;
            max-width: 250px;
        }
    }

    .footer-terms-socials ul {
        display: flex;
        justify-content: space-between;
        gap: 30px;
    }

    .footer-logos {
        display: flex;
        gap: 50px;
        margin-top: 50px;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
    }

    @media only screen and (max-width: 991px) {
        .footer-logos {
            justify-content: center;
            /*flex-direction: column;*/
            gap: 20px;
        }
    }

    .footer-logos img {
        height: 50px;
    }

    @media only screen and (max-width: 400px) {
        .footer-logos {
            display: grid;
            grid-template-areas: 'el-1 el-2' 'el-3 el-3' 'el-4 el-5' 'el-6 el-7' 'el-8 el-8' 'el-9 el-9' 'el-10 el-10' 'el-11 el-11' 'el-12 el-12';
            justify-items: center;
        }

        .footer-logos img:nth-child(1) {
            grid-area: el-1;
        }

        .footer-logos img:nth-child(2) {
            grid-area: el-2;
        }

        .footer-logos img:nth-child(3) {
            grid-area: el-3;
        }

        .footer-logos img:nth-child(4) {
            grid-area: el-4;
        }

        .footer-logos img:nth-child(5) {
            grid-area: el-5;
        }

        .footer-logos img:nth-child(6) {
            grid-area: el-6;
        }

        .footer-logos img:nth-child(7) {
            grid-area: el-7;
        }

        .footer-logos img:nth-child(8) {
            grid-area: el-8;
        }

        .footer-logos img:nth-child(9) {
            grid-area: el-9;
        }

        .footer-logos img:nth-child(10) {
            grid-area: el-10;
        }

        .footer-logos img:nth-child(11) {
            grid-area: el-11;
        }

        .footer-logos img:nth-child(12) {
            grid-area: el-12;
        }
    }

    footer .footer-logo {
        /*max-width: 190px;*/
        width: 100%;
        margin-bottom: 104px;
        text-align: right;
    }

    footer .footer-logo img {
        max-width: 190px;
        width: 100%;
    }

    @media only screen and (max-width: 991px) {
        footer .footer-logo {
            text-align: left;
            position: absolute;
            top: 20px;
            max-width: 87px;
        }
    }

    footer .footer-logo-trust {
        text-align: right;
        margin-bottom: 80px;
    }

    @media only screen and (max-width: 991px) {
        footer .footer-logo-trust {
            text-align: center;
            margin-bottom: 30px;
        }
    }

    /** {*/
    /*    outline: 1px solid red;*/
    /*}*/


    .footer-description {
        /*margin-bottom: 30px;*/

        & p {
            color: #231F20;
            text-align: justify;
            font-family: 'Roboto', sans-serif;
            font-size: 10px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            letter-spacing: 2px;
        }
    }

    .footer-description.mobile {
        display: none;
    }

    @media only screen and (max-width: 991px) {
        .footer-description {
            /*margin-bottom: 90px;*/
            /*position: absolute;*/
            /*bottom: 0;*/
            /*max-width: calc(100% - 40px);*/
            display: none;
        }

        .footer-description.mobile {
            display: block;

        }
    }

    .footer-copyright {

        & p {
            color: #231F20;
            font-family: 'Roboto', sans-serif;
            font-size: 15px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
            letter-spacing: 3px;
        }
    }

    .footer-copyright.mobile {
        display: none;
    }

    @media only screen and (max-width: 991px) {
        .footer-copyright {
            /*position: absolute;*/
            /*bottom: 0;*/
            /*margin-bottom: 40px;*/
            display: none;
        }

        .footer-copyright.mobile {
            display: block;
            margin-top: 4px;
        }
    }


    /*Responsivness*//*Responsivness*//*Responsivness*/
    @media (max-width: 1700px) {
        footer::after {
            top: calc(-153px / 2 - 2px);
        }
    }

    @media (max-width: 1199px) {

    }

    @media (max-width: 991px) {

    }

    @media (max-width: 767px) {

    }

    @media (max-width: 600px) {

    }

    @media (max-width: 500px) {

    }

    /* End footer */

    footer #scrollToTopBtn {
        /*position: fixed;*/
        /*z-index: 99999999;*/
        /*bottom: 20px;*/
        /*right: 20px;*/
        /*display: none;*/
        /*background: transparent;*/
        /*border: none;*/
        /*cursor: pointer;*/
        /*background-color: #FFFCE9;*/
        /*color: #fff;*/
        /*border: 2px solid #000;*/
        /*padding: 10px;*/

        /*border-radius: 50%;*/
        /*width: 50px;*/
        /*height: 50px;*/
    }

    /*footer #scrollToTopBtn svg{*/
    /*    transform: rotate(180deg);*/
    /*}*/


    /*#scrollToTopBtn:hover svg path {*/
    /*    fill: #FF983A;*/
    /*}*/


    .gform_legacy_markup_wrapper li.gfield_error input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]), .gform_legacy_markup_wrapper li.gfield_error textarea {
        border-top: none !important;
        border-left: none !important;
        border-right: none !important;


    }

    .footer-quick-links ul li a.hover {
        color: #FF7A00;
    }

    .gfield_description.gform_fileupload_rules {
        display: none!important;
        opacity: 0;
    }
</style>