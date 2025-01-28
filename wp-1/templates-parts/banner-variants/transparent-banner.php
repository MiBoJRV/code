<style>
    /*Transparent Banner*/
    .videoSearch .container-custom {
        max-width: 1000px;
    }
    .videoSearch .search_widget {
        padding: 5px 0;
        clear: both;
        position: relative;
    }
    #slider #resortpro-widget-form input, #slider #resortpro-widget-form select {
        color: #fff;
        background-color: rgba(0, 0, 0, .2);
        border: 1px solid #fff;
    }
    #slider #resortpro-widget-form input::-webkit-input-placeholder {
        color: #fff;
    }
    #slider #resortpro-widget-form input::-moz-placeholder {
        color: #fff;
        opacity: 1;
    }
    .videoSearch .form-group {
        width: auto;
        margin-bottom: 0;
        padding: 5px;
    }
    #slider .videoSearch h1 {
        margin-bottom: 5px !important;
    }
    .videoSearch h1 .sub_title {
        display: none;
    }
    .amenities-wrap {
        display: none;
    }
    .videoSearch #resortpro-widget-form .item {
        width: 25%;
    }
    .videoSearch #resortpro-widget-form .item.guests {
        display: none;
    }
    .videoSearch #resortpro-widget-form .item.all_rentals {
        display: none;
    }
    .videoSearch #resortpro-widget-form .item .caret {
        border-top-color: #fff;
    }
    .border_line {
        display: none;
    }
    #slider #resortpro-widget-form > div.row .customView {
        display: flex;
        flex-wrap: wrap;
    }
    /*Responsivness*//*Responsivness*//*Responsivness*/
    @media (max-width: 767px) {
        .videoSearch #resortpro-widget-form .item {
            width: 100%;
        }
    }
    /**************************** FIX peace-vacations ********************************/

    .amenities-wrap {
        display: block;
    }
    .videoSearch .container-custom {
        max-width: 1298px;
    }
    .videoSearch #resortpro-widget-form .item {
        width: calc(100% / 6);
    }
    .videoSearch .form-group {
        padding: 7.5px;
    }
    .videoSearch input:not([type="checkbox"]), .videoSearch select, .videoSearch button {
        height: 60px !important;
    }
    p.btn-amenities {
        height: 60px !important;
        padding: 22px 5px;
        background: var(--main_color);
    }
    p.btn-amenities:hover {
        background: ;
    }
    .videoSearch button[type="submit"] {
        background: var(--second_color);
    }
    .videoSearch button[type="submit"]:hover {
        background: var(--main_color) !important;;
    }
    .videoSearch button[type="submit"],
    p.btn-amenities {
        font: 500 16px/16px var(--paragraph_font);
        color: #FFF;
    }
    .slick-dots li button {
        height: 100%;
        width: 100%;
        display: block !important;
        -moz-appearance: none;
        -webkit-appearance: none;
        padding: 0 !important;
        box-shadow: none;
        border-radius: 0;
        background: none;
        border: none !important;
    }
    #slider .slick-dots li {
        width: 13px !important;
        height: 13px !important;
        border: 2px solid rgba(255, 255, 255, 0.5);
        background: transparent;
    }
    .slick-dots {
        bottom: 60px !important;
        z-index: 999
    }
    .slick-dots li {
        margin-right: 8px !important;
    }
    .slick-dots li:hover, .slick-dots li.slick-active {
        background: #FFF !important;
    }
    .home #slider .home-banner {
        background: #141414;
    }
    .home .slick-slider .slick-track, .home .slick-slider .slick-list {
        opacity: .7;
    }
    #slider #resortpro-widget-form input, #slider #resortpro-widget-form select {
        font: 400 16px/28px var(--paragraph_font);
        border: 2px solid #fff;
    }
    #slider #resortpro-widget-form select option {
        color: #292929;
        background: #FFF;
    }
    .videoSearch #resortpro-widget-form .item .form-control-feedback.arrow {
        right: 20px;
    }
    @media only screen and (max-width: 1920px) and (min-width: 767px) {
        .videoSearch {
            position: absolute;
            top: auto;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 165px 15px 54px 15px;
            text-align: center;
            transform: none;
        }
    }
    @media (max-width: 1199px) {
        .videoSearch #resortpro-widget-form .item {
            width: calc(100% / 4);
        }
        .videoSearch .item.ncst.search_btn {
            width: 50% !important;
        }
        .videoSearch .item.ncst.amenities-wrap {
            width: 50% !important;
        }
    }
    @media (max-width:767px) {
        .videoSearch #resortpro-widget-form .item {
            width: 100%;
        }
        .videoSearch .item.ncst.search_btn {
            width: 100% !important;
        }
        .videoSearch .item.ncst.amenities-wrap {
            width: 100% !important;
        }
        #slider #resortpro-widget-form input, #slider #resortpro-widget-form select, .videoSearch input:not([type="checkbox"]), .videoSearch select  {
            border: 1px solid #CFCFCF !important;
            background-color: #F5F5F5 !important;
            color: rgba(41, 41, 41, 0.5)!important;
        }
        #slider #resortpro-widget-form input::-webkit-input-placeholder {
            color: rgba(41, 41, 41, 0.5)!important;
        }
        #slider #resortpro-widget-form input::-moz-placeholder {
            color: rgba(41, 41, 41, 0.5)!important;
        }
        input#search_start_date, input#search_end_date {
            background-image: url("/wp-content/themes/BizcorLuxury/images/calendar-g.svg");
        }

        select#streamlinecore_sw_bedrooms_number {
            background-image: url("/wp-content/themes/BizcorLuxury/images/Path2457-g.svg");
            background-size: 9px;
            background-repeat: no-repeat;
            background-position: right 10px center;
        }
        select#resortpro_sw_ra_id {
            background-image: url("/wp-content/themes/BizcorLuxury/images/Path2457-g.svg");
            background-size: 9px;
            background-repeat: no-repeat;
            background-position: right 10px center;
        }
        .videoSearch #resortpro-widget-form .item .form-control-feedback.arrow {
            display: none;
        }
    }

    @media (max-width:767px) {
        #slider > div.container-fluid-custom.videoSearch > h4 {
            display: none;
        }
        #slider > div.mobileHB > h4 {
            position: absolute;
            bottom: 0px;
            left: 0;
            right: 0;
            text-align: center;
        }
        body.home #slider .mobileHB h2 {
            bottom: 42px;
        }
    }

    /**************************** END  FIX peace-vacations ****************************/
</style>