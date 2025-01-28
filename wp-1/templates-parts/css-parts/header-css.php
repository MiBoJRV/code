<style>
    .dialog {
        position: fixed;
        z-index: 999;
        width: 100%;
        height: 100vh;
        justify-content: center;
        align-items: center;
        top: 0;
        background: rgba(0, 0, 0, 0.5);
        display: none;
        overflow: scroll;
    }

    .dialog__wrap {
        padding: 64px 0;
        position: absolute;
        top: 0;
        left: 50%;
        transform: translate(-50%, 0%);
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        width: 100%;
    }

    .dialog h2 {
        color: #1A181E;
        text-align: center;
        font-family: "Roboto", sans-serif;
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        max-width: 273px;
        margin: 24px auto 47px;
    }

    .dialog__close {
        position: absolute;
        top: -64px;
        right: -34px;
        height: 34px;
        cursor: pointer;
    }

    @media only screen and (max-width: 991px) {
        .dialog__close {
            right: 0;
        }
    }

    .dialog__content {
        background: #fff;
        width: 494px;
        position: relative;
    }

    @media only screen and (max-width: 991px) {
        .dialog__content {
            max-width: 360px;
            width: 100%;
        }
    }

    .dialog form {
        max-width: 273px;
        width: 100%;
        margin: 0 auto;
        gap: 14px;
        display: flex;
        flex-direction: column;
    }

    .dialog form .form__field {
        position: relative;
    }

    .dialog form .form__field .error-message {
        position: absolute;
        color: red;
        font-weight: 700;
        bottom: -12px;
        left: 4px;
        font-size: 9px;
    }

    .dialog form .form__field.form_submit {
        margin-top: 77px;
        position: relative;
    }

    .dialog form .form__field.form_submit input {
        color: #FAF9F9;
        background: #FF646B;
        text-align: center;
        font-size: 20px;
        font-style: normal;
        font-weight: 900;
        line-height: normal;
        letter-spacing: 2px;
        text-transform: uppercase;
        border-radius: 7px;
        padding: 0;
        cursor: pointer;
    }

    .dialog form .form__field.form_submit input:hover {
        background: #FF2731;
    }

    .dialog form .form__field.form_submit input:active {
        background: #D5141D;
    }

    .dialog form .form__field.form_submit:after {
        content: "";
        position: absolute;
        background: #403A4B;
        width: 100%;
        height: 0.5px;
        left: 0;
        bottom: -21px;
    }

    .dialog form .form__field span {
        color: rgba(64, 58, 75, 0.6);
        font-family: "Roboto", sans-serif;
        font-size: 10px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        position: absolute;
        left: 16px;
        top: 3px;
        z-index: 999;
    }

    .dialog form input {
        width: 100%;
        background: #FCF1FF;
        height: 40px;
        border: none;
        padding: 16px 16px 8px;
        color: #403A4B;
        font-family: "Roboto", sans-serif;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }

    .dialog form input.error {
        outline: 0.5px solid red;
    }

    .dialog form select {
        margin-bottom: 18px;
        border: none;
        outline: none;
        width: 90px;
        background: #FCF1FF;
        height: 40px;
        padding: 16px 16px 8px;
    }

    .dialog form select option {
        position: relative;
    }

    .dialog form select option:before {
        content: "";
        width: 20px;
        height: 14px;
        background-image: url("../images/ca.svg");
        position: absolute;
        top: 0;
        left: 0;
    }

    .dialog form .phone-input {
        display: flex;
    }

    .dialog form .phone-input.error {
        outline: 0.5px solid red;
    }

    .dialog__image {
        margin: 0 auto 44px auto;
    }

    .dialog__image img {
        min-width: 444px;
        min-height: 345px;
        display: flex;
        justify-content: center;
        margin: 0 auto;
    }

    @media only screen and (max-width: 991px) {
        .dialog__image img {
            margin-top: 42px;
            margin-bottom: 34px;
            min-width: 284px;
            min-height: 219px;
            width: 100%;
            height: auto;
            padding: 0 38px;
        }
    }


    .select-box {
        position: relative;
        display: block;
        width: 90px;
        margin: 0 auto;
        font-family: "Open Sans", "Helvetica Neue", "Segoe UI", "Calibri", "Arial", sans-serif;
        font-size: 18px;
        color: #60666d;
        z-index: 9;
    }

    .select-box__current {
        position: relative;
        box-shadow: 0 15px 30px -10px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        outline: none;
    }

    .select-box__current:focus + .select-box__list {
        opacity: 1;
        animation-name: none;
    }

    .select-box__current:focus + .select-box__list .select-box__option {
        cursor: pointer;
    }

    .select-box__current:focus .select-box__icon {
        transform: translateY(-50%) rotate(180deg);
    }

    .select-box__icon {
        position: absolute;
        top: 50%;
        right: 15px;
        transform: translateY(-50%);
        width: 20px;
        opacity: 0.3;
        transition: 0.2s ease;
    }

    .select-box__value {
        display: flex;
        width: 90px;
    }

    .select-box__input {
        display: none;
    }

    .select-box__input:checked + .select-box__input-text {
        display: flex;
        justify-content: flex-start;
    }

    .select-box__input-text {
        display: none;
        margin: 0;
        background: rgba(0, 0, 0, 0.05);
        height: 40px;
        width: 90px;
        border: none;
        padding: 16px 16px 8px 16px;
        font-family: "Roboto", sans-serif;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        position: relative;
    }

    .select-box__input-text img {
        margin-right: 6px;
    }

    .select-box__list {
        position: absolute;
        top: 0;
        width: 100%;
        padding: 0;
        list-style: none;
        opacity: 0;
        background: #FCF1FF;
        animation-name: HideList;
        animation-duration: 0.5s;
        animation-delay: 0.5s;
        animation-fill-mode: forwards;
        animation-timing-function: step-start;
        box-shadow: 0 15px 30px -10px rgba(0, 0, 0, 0.1);
    }

    .select-box__list li {
        height: 40px;
        padding: 16px 16px 8px 16px;
        position: relative;
    }

    .select-box__list li:hover {
        background-color: rgba(0, 0, 0, 0.05);
    }

    .select-box__list li:hover label {
        background-color: rgba(0, 0, 0, 0.01);
    }

    .select-box__option {
        background-color: #FCF1FF;
        font-family: "Roboto", sans-serif;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        display: flex;
        justify-content: flex-start;
    }

    .select-box__option img {
        margin-right: 6px;
    }

    @keyframes HideList {
        from {
            transform: scaleY(1);
        }
        to {
            transform: scaleY(0);
        }
    }

    @font-face {
        font-family: "Liberation Sans";
        src: url('<?php echo get_template_directory_uri(); ?>/fonts/LiberationSans-Regular.ttf');
        font-weight: 400;
        font-display: swap;
    }

    @font-face {
        font-family: "Liberation Sans";
        src: url('<?php echo get_template_directory_uri(); ?>/fonts/LiberationSans-Bold.ttf');
        font-weight: 700;
        font-display: swap;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Liberation Sans', sans-serif;
        list-style: none;
        text-decoration: none;
    }

    /*header css*/
    /*body {*/
    /*    color: #2a2a2a;*/
    /*    margin: 0;*/
    /*    background: #FFF;*/
    <?php //if (get_field('global_font_family', get_homePageId())=='Custom'): ?> /* font-family: */
    <?php //=get_post_meta( get_homePageId(), "_gfonts_name_value_key_7")[0]?> /*;*/
    /*    font-size: */
    <?php //=get_post_meta( get_homePageId(), "_gfonts_size_value_key_7")[0]?> /*;*/
    /*    font-weight: */
    <?php //=get_post_meta( get_homePageId(), "_gfonts_weight_value_key_7")[0]?> /*;*/
    <?php //else: ?> /* font-family: 'Poppins';*/
    /*    font-size: 16px;*/
    /*    font-weight: 400;*/
    <?php //endif ?>
    /*}*/

    *, :after, :before {
        box-sizing: border-box;
        text-rendering: optimizeLegibility;
    }

    html:root {
        --main_color: <?php the_field('main_color', get_homePageId()); ?>;
        --second_color: <?php the_field('second_color', get_homePageId()); ?>;
        --hover_color: <?php the_field('hover_color', get_homePageId()); ?>;
        --hover_color2: <?php the_field('hover_color2', get_homePageId()); ?>;
        --original_font: "Liberation Sans";
        --body_font: 'Poppins';
        --title_color: #292929;
        --paragraph_color: rgba(41, 41, 41, 0.75);
        --title_font: 'Enriqueta';
        --paragraph_font: 'Poppins';
    }

    .customClear:before, .customClear:after,
    .container-fluid-custom:before, .container-fluid-custom:after,
    .container-custom:before, .container-custom:after {
        content: "";
        display: block;
        height: 0;
        overflow: hidden;
        clear: both;
    }

    p, ul, li {
        margin: 0;
    }

    footer ul, header ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    h1, h2, h3, h4, h5, h6 {
        font-weight: 400;
        margin-top: 0;
        line-height: inherit;
    }

    <?php if (get_field('global_font_family', get_homePageId())=='Custom'): ?>
    h1 {
        font-family: <?=get_post_meta( get_homePageId(), "_gfonts_name_value_key_1")[0]?>;
        font-size: <?=get_post_meta( get_homePageId(), "_gfonts_size_value_key_1")[0]?>;
        font-weight: <?=get_post_meta( get_homePageId(), "_gfonts_weight_value_key_1")[0]?>;
        line-height: 1.4;
    <?php if(get_post_meta( get_homePageId(), "_gfonts_type_value_key_1")[0] != ''):?> font-style: <?=get_post_meta( get_homePageId(), "_gfonts_type_value_key_1")[0]?>;
    <?php endif; ?>
    }

    h2 {
        font-family: <?=get_post_meta( get_homePageId(), "_gfonts_name_value_key_2")[0]?>;
        font-size: <?=get_post_meta( get_homePageId(), "_gfonts_size_value_key_2")[0]?>;
        font-weight: <?=get_post_meta( get_homePageId(), "_gfonts_weight_value_key_2")[0]?>;
        line-height: 1.4;
    <?php if(get_post_meta( get_homePageId(), "_gfonts_type_value_key_2")[0] != ''):?> font-style: <?=get_post_meta( get_homePageId(), "_gfonts_type_value_key_2")[0]?>;
    <?php endif; ?>
    }

    h3 {
        font-family: <?=get_post_meta( get_homePageId(), "_gfonts_name_value_key_3")[0]?>;
        font-size: <?=get_post_meta( get_homePageId(), "_gfonts_size_value_key_3")[0]?>;
        font-weight: <?=get_post_meta( get_homePageId(), "_gfonts_weight_value_key_3")[0]?>;
        line-height: 1.4;
    <?php if(get_post_meta( get_homePageId(), "_gfonts_type_value_key_3")[0] != ''):?> font-style: <?=get_post_meta( get_homePageId(), "_gfonts_type_value_key_3")[0]?>;
    <?php endif; ?>
    }

    h4 {
        font-family: <?=get_post_meta( get_homePageId(), "_gfonts_name_value_key_4")[0]?>;
        font-size: <?=get_post_meta( get_homePageId(), "_gfonts_size_value_key_4")[0]?>;
        font-weight: <?=get_post_meta( get_homePageId(), "_gfonts_weight_value_key_4")[0]?>;
        line-height: 1.4;
    <?php if(get_post_meta( get_homePageId(), "_gfonts_type_value_key_4")[0] != ''):?> font-style: <?=get_post_meta( get_homePageId(), "_gfonts_type_value_key_4")[0]?>;
    <?php endif; ?>
    }

    h5 {
        font-family: <?=get_post_meta( get_homePageId(), "_gfonts_name_value_key_5")[0]?>;
        font-size: <?=get_post_meta( get_homePageId(), "_gfonts_size_value_key_5")[0]?>;
        font-weight: <?=get_post_meta( get_homePageId(), "_gfonts_weight_value_key_5")[0]?>;
        line-height: 1.4;
    <?php if(get_post_meta( get_homePageId(), "_gfonts_type_value_key_5")[0] != ''):?> font-style: <?=get_post_meta( get_homePageId(), "_gfonts_type_value_key_5")[0]?>;
    <?php endif; ?>
    }

    h6 {
        font-family: <?=get_post_meta( get_homePageId(), "_gfonts_name_value_key_6")[0]?>;
        font-size: <?=get_post_meta( get_homePageId(), "_gfonts_size_value_key_6")[0]?>;
        font-weight: <?=get_post_meta( get_homePageId(), "_gfonts_weight_value_key_6")[0]?>;
        line-height: 1.4;
    <?php if(get_post_meta( get_homePageId(), "_gfonts_type_value_key_6")[0] != ''):?> font-style: <?=get_post_meta( get_homePageId(), "_gfonts_type_value_key_6")[0]?>;
    <?php endif; ?>
    }

    <?php else: ?>
    h1, h2, h3, h4, h5, h6 {
        font-family: var(--original_font);
    }

    h1 {
        font-size: 60px;
    }

    h2 {
        font-size: 42px;
    }

    h3 {
        font-size: 32px;
    }

    h4 {
        font-size: 24px;
    }

    h5 {
        font-size: 18px;
    }

    h6 {
        font-size: 14px;
    }

    <?php endif ?>
    /*Fly Out Form*/
    .CustomMobileMenu {
        position: absolute;
        width: 0px;
        background: #fff;
        transition: all 0.4s;
        z-index: 9;
        top: 100%;
        overflow-y: auto;
        overflow-x: hidden;
        right: 0;
        box-shadow: 0 10px 50px rgba(0, 0, 0, 0.12);
    }

    .CustomMobileMenu.open {
        width: 375px;
    }

    .CustomMobileMenu .counter {
        padding: 0;
        width: 375px;
    }

    .CustomMobileMenu .topM {
        position: relative;
        padding: 15px 10px;
        margin-bottom: 40px;
        text-align: center;
        background: var(--second_color);
        margin-top: 0;
    }

    .CustomMobileMenu .topM a {
        display: block;
        position: relative;
        color: #fff;
        font-size: 22px;
        font-weight: 300;
    }

    .wpContent article h3 {
        text-transform: capitalize !important;
    }

    .wpContent article p {
        font-size: 18px !important;
    }

    .CustomMobileMenu .topM a:hover img {
        opacity: 0.8;
    }

    .CustomMobileMenu .topM a img {
        width: 100%;
        max-width: 274px;
        transition: 0.3s;
        height: 120px;
    }

    .CustomMobileMenu .gform_wrapper .gform_body .ginput_container_checkbox label {
        display: inline-block !important;
    }

    .CustomMobileMenu .gform_wrapper .gform_body .ginput_container_checkbox {
        margin-top: 40px;
    }

    .CustomMobileMenu .gform_wrapper .gform_body li.gchoice_7_6_1 input {
        height: 13px;
        border: 1px solid var(--main_color);
        background: none;
        width: 13px !important;
        margin-top: 2px !important;
    }

    .CustomMobileMenu .gform_wrapper .gform_body li.gchoice_7_6_1 label {
        color: #141414;
        font-size: 11px;
        font-family: 'Montserrat';
        font-weight: 400;
    }

    .CustomMobileMenu .gform_wrapper .gform_body li.gchoice_7_6_1 label a {
        color: var(--second_color);
    }

    .CustomMobileMenu .gform_wrapper .gform_body li.gchoice_7_6_1 label a:hover {
        text-decoration: underline;
    }

    .CustomMobileMenu .gform_wrapper {
        padding: 0 50px 50px;
    }

    .CustomMobileMenu .gform_wrapper .gform_body li input::-webkit-input-placeholder,
    .CustomMobileMenu .gform_wrapper .gform_body li textarea::-webkit-input-placeholder {
        color: #A2A2A2;
        font-size: 14px;
    }

    .CustomMobileMenu .gform_wrapper .gform_body li input::-moz-placeholder,
    .CustomMobileMenu .gform_wrapper .gform_body li textarea::-moz-placeholder {
        color: #A2A2A2;
        font-size: 14px;
        opacity: 1;
    }

    .mobileMenuClose i {
        transition: 0.3s;
        color: #fff;
        font-size: 30px;
        color: #fff;
        display: none;
    }

    .mobileMenuClose i:hover {
        opacity: 0.5;
    }

    .mobileMenuClose {
        position: absolute;
        top: 5px;
        right: 10px;
        cursor: pointer;
        z-index: 9;
        padding: 3px;
        color: #fff;
    }

    .gform_wrapper .gform_body li input, .gform_wrapper .gform_body li textarea {
        border-bottom: 1px solid #C5C5C5;
        color: #000;
        font-size: 14px;
        cursor: pointer;
    }

    .moxie-shim .moxie-shim-html5 {
        top: 25px;

    }

    .gform_wrapper .gform_body li input::-webkit-input-placeholder,
    .gform_wrapper .gform_body li textarea::-webkit-input-placeholder {
        color: #000;
        font-size: 14px;
    }

    .gform_wrapper .gform_body li input::-moz-placeholder,
    .gform_wrapper .gform_body li textarea::-moz-placeholder {
        color: #000;
        font-size: 14px;
        opacity: 1;
    }

    .CustomMobileMenu .gform_wrapper .gform_footer input {
        background: var(--second_color) !important;
        color: #fff;
        font: 600 16px/25px var(--paragraph_font);
        text-transform: uppercase;
    }

    .CustomMobileMenu .gform_wrapper .gform_footer input:hover {
        background: var(--main_color) !important;
        color: #fff;
    }

    .CustomMobileMenu .gform_wrapper .gform_body li .policy {
        padding-left: 20px;
    }

    .CustomMobileMenu .gform_wrapper .gform_body li .policy label {
        display: inline-block !important;
    }

    .gform_wrapper .gform_body li input[type="checkbox"] {
        display: none;
    }

    .CustomMobileMenu .gform_wrapper .gform_body li .policy label span {
        position: relative;
        font-size: 10px;
        font-weight: 300;
    }

    .CustomMobileMenu .gform_wrapper .gform_body li .policy label span::before {
        content: '';
        position: absolute;
        top: 0;
        left: -20px;
        width: 13px;
        height: 13px;
        border: 1px solid var(--main_color);
        color: var(--main_color);
        display: inline-flex;
        justify-content: center;
        align-items: center;
        font-size: 14px;
    }

    .CustomMobileMenu .gform_wrapper .gform_body li input[type="checkbox"]:checked ~ span::before {
        content: '✓';
    }

    .CustomMobileMenu .gform_wrapper .gform_body li .policy > a {
        color: var(--main_color);
        text-decoration: underline;
        text-transform: uppercase;
        font-size: 10px;
        font-weight: 300;
    }

    .CustomMobileMenu .gform_wrapper.gform_validation_error .gform_body ul li.gfield.gfield_error:not(.gf_left_half):not(.gf_right_half) {
        max-width: 100% !important;
    }

    .CustomMobileMenu .gform_wrapper li.gfield.gfield_error.gfield_contains_required div.ginput_container,
    .CustomMobileMenu .gform_wrapper li.gfield.gfield_error.gfield_contains_required label.gfield_label {
        margin-top: 0;
    }

    .CustomMobileMenu .gform_confirmation_message {
        color: #2a2a2a;
        padding-bottom: 25px;
    }

    /*Header Search Modal*/
    .modal_search {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(7, 8, 8, 0.8);
        z-index: 999999;
    }

    .modal_search form {
        position: absolute;
        top: 40%;
        left: 50%;
        width: 50%;
        max-width: 519px;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .modal_search form input[type="text"], .modal_search form select {
        padding: 20.5px;
        width: 100%;
        color: rgba(41, 41, 41, 0.5);
        border-radius: 3px 0px 0px 3px;
        height: auto;
        margin: 0;
        font: 500 16px/24px var(--paragraph_font);
        border-radius: 3px;
    }

    .modal_search .form-control:after {
        content: "";
        display: block;
        border-top: 6px solid #7D7D7D;
        border-left: 5px solid transparent;
        border-right: 6px solid transparent;
        position: absolute;
        right: 79px;
        top: 31px;
        pointer-events: none;
    }

    .modal_search form .form-control {
        height: auto;
    }

    .modal_search form button {
        position: absolute;
        top: 0;
        right: -15px;
        height: 100%;
        width: 65px;
        background-color: var(--second_color);
        border: none;
        border-radius: 0px 3px 3px 0px;
        text-align: center;
        cursor: pointer;
        box-sizing: border-box;
    }

    .home .modal_search form button {
        right: 0;
    }

    .modal_search form button img {
        width: 50%;
    }

    .modal_search form button:hover {
        color: #fff;
        background: var(--main_color);
    }

    .modal_search .close_modal {
        color: #fff;
        font-size: 34px;
        position: absolute;
        top: 15%;
        right: 20%;
        cursor: pointer;
    }

    .modal_btn {
        position: relative;
        color: #4A4A4A;
        padding-left: 20px;
        margin-left: 20px;
        border-left: 1px solid rgba(14, 12, 13, .25);
    }

    .modal_btn:hover {
        color: var(--main_color);
    }

    .modal_btn svg path {
        transition: .3s;
    }

    .modal_btn:hover svg path {
        fill: var(--main_color);
    }

    /*End modul*//*End modul*/


    /*header*//*header*//*header*/
    .home header {
        position: absolute;
        /*top: auto;*/
        /*top: 32px;*/
    }

    header {
        position: absolute;
        /*top: auto;*/
        /*top: 32px;*/
    }

    header {
        /*position: relative;*/
        width: 100%;
        top: 0;
        line-height: 1.2;
        z-index: 9999;
        /*background: #333;*/
    <?php if (get_field('global_font_family', get_homePageId())=='Custom'): ?> font-family: <?=get_post_meta( get_homePageId(), "_gfonts_name_value_key_8")[0]?>;
        font-size: <?=get_post_meta( get_homePageId(), "_gfonts_size_value_key_8")[0]?>;
        font-weight: <?=get_post_meta( get_homePageId(), "_gfonts_weight_value_key_8")[0]?>;
    <?php else: ?> font-family: 'Poppins', sans-serif;
        font-size: 16px;
        font-weight: 400;
    <?php endif ?>
    }

    .home header {
        background: transparent;

    }

    .mobileMenu {
        display: none;
    }

    .menu-item-has-children {
        padding-right: 15px;
    }

    .menu-item-has-children ul {
        position: absolute;
        top: 100%;
        display: none;
        min-width: 100%;
        left: -22px;
        /*padding-top: 43px;*/
    }

    .menu-item-has-children ul li {
        display: block;
        margin-right: 0 !important;
        position: relative;
    }

    .menu-item-has-children ul li a {
        padding: 10px 22px;
        display: block;
        text-align: left;
        /*background: #fff;*/
        /*background: rgba(4, 5, 31, 0.5);*/
    }

    .menu-item-has-children ul ul {
        top: 0;
        left: 100%;
        padding-top: 0;
    }

    .header-nav .caret {
        color: #fff;
    }

    .menu-item-has-children ul .caret {
        right: 5px;
    }

    .openMenu {
        display: block !important;
    }

    .sub-menu .sub-menu {
        padding-top: 0 !important;
    }

    .fixing > .container-fluid, .topPart > .container-fluid {
        padding: 0;
    }

    header nav {
        text-align: center;
        display: flex;
        align-items: center;
        gap: 27px;
        /*margin-left: 20px;*/
    }

    header nav ul {
        display: flex;
        align-items: center;
        gap: 27px;
    }

    @media only screen and (max-width: 1280px) {
        header nav ul {
            gap: 17px;
        }
    }

    @media only screen and (max-width: 1200px) {
        header nav ul {
            gap: 10px;
        }
    }

    header nav li {
        position: relative;
    }

    header nav li a:hover {
        color: #FF7A00 !important;
    }

    header nav li a::before {
        content: '';
        position: absolute;
        bottom: -5px;
        width: 0;
        height: 1px;
        background: #FF7A00;
        -webkit-transition: .5s;
        -o-transition: .5s;
        transition: .3s;
    }
    header nav li a:hover:before{
        width: 100%;
    }

    .wpml-ls-legacy-list-horizontal a {
        padding: 0;
    }

    .wpml-ls-legacy-list-horizontal a:hover {
        color: #FF7A00;
    }

    .wpml-ls-sidebars-translation a {
        color: #d8ded0;
    }

    @media only screen and (max-width: 991px) {
        .wpml-ls-legacy-list-horizontal {
            border: none;
            padding: 0;
        }
    }

    .wpml-ls-current-language a span {
        font-weight: 700;
    }

    .wpml-ls-slot-translation a span {
        font-weight: 700;
        /*color: #ffffff;*/
    }

    .wpml-ls-sidebars-translation ul {
        /*padding: 0 35px 45px;*/
        display: flex;
        flex-direction: row;
        gap: 20px;
    }

    @media only screen and (max-width: 991px) {
        .wpml-ls-sidebars-translation ul {
            padding: 18px 35px 45px;
        }
    }

    .wpml-ls-sidebars-translation li:first-of-type {
        position: relative;
    }

    .wpml-ls-sidebars-translation li:first-of-type:after {
        content: '|';
        position: absolute;
        color: #fff;
        top: 0;
        right: -11px;
    }

    @media only screen and (max-width: 1280px) {
        .wpml-ls-sidebars-translation li:first-of-type:after {
            right: -10px;
            /*top: -2px;*/
        }
    }

    @media only screen and (max-width: 1200px) {
        .wpml-ls-sidebars-translation li:first-of-type:after {
            right: -12px;
            top: -2px;
        }
    }

    @media only screen and (max-width: 991px) {
        .wpml-ls-sidebars-translation li:first-of-type:after {
            content: '';
            top: 2px;
            right: -8px;
            border-right: 2px solid;
            width: 2px;
            height: 22px;
        }
    }

    header nav li a {
        position: relative;
        white-space: nowrap;
        display: block;
        text-decoration: none !important;

        color: #FFF;
        text-align: center;
        font-family: 'Roboto', sans-serif;
        font-size: 14px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        letter-spacing: 2.8px;
        text-transform: uppercase;
    }

    @media only screen and (max-width: 1200px) {
        header nav li a {
            font-size: 12px;
        }
    }

    @media only screen and (max-width: 991px) {
        header nav li a {
            color: #FFFCE9;
            font-size: 24px;
            font-weight: 900;
            letter-spacing: 4.8px;
        }
    }

    header nav .sub-menu li {
        width: auto;
        min-width: 100%;
    }

    .sub-menu {
        left: 0;
        position: absolute;
        top: 0;
        width: auto;
    }

    header nav > .menu-header-menu-container > ul > li {
        display: inline-block;
    }

    /*header nav > .menu-header-menu-container > ul > li > a {*/
    /*    text-transform: uppercase;*/
    /*}*/


    header nav > .menu-header-menu-container > ul > li > a:hover {
        /*text-shadow: 0 0 8px white;*/
        color: #FF7A00;
    }

    header nav > .menu-header-menu-container > ul > li > a.hover {
        color: #FF7A00;
    }

    header nav > .menu-header-menu-container > ul > li > a:focus {
        /*text-shadow: 0 0 8px white;*/
        color: #FF7A00;
    }

    /*header nav > .menu-header-menu-container > ul >:last-child > li a {*/
    /*    text-align: right;*/
    /*}*/
    /*header nav > .menu-header-menu-container > ul > li:last-child > a {*/
    /*    color: #FE8275;*/
    /*    font-size: 14px;*/
    /*    font-weight: 700;*/
    /*    padding: 12px 16px;*/
    /*    border: 2px solid #FE8275;*/
    /*    display: flex;*/
    /*    align-items: center;*/
    /*    justify-content: center;*/
    /*    white-space: nowrap;*/
    /*    margin-right: 0;*/
    /*}*/

    header .caret {
        border-top: 4px solid #FFFFFF;
        border-left: 4px solid transparent;
        border-right: 4px solid transparent;
        position: absolute;
        right: -10px;
        top: 55%;
        transform: translateY(-50%);
    }


    /*header nav > .menu-header-menu-container > ul > li:last-child > a:hover {*/
    /*    text-shadow: none;*/
    /*    color: #FF4E3C;*/
    /*    border-color: #FF4E3C;*/
    /*}*/

    .rightCaret, .leftCaret {
        display: none;
    }

    .logo a {
        line-height: 1;
    }

    .home header .rightSide {
        /*display: flex;*/
        align-items: center;
        display: none;
    }

    header .mobile-menu {
        display: none;
    }

    @media only screen and (max-width: 991px) {
        header .mobile-menu {
            display: block;
        }
    }

    header .rightSide {
        /*display: flex;*/
        align-items: center;
        padding-top: 21px;
        display: none;
    }

    header nav > .menu-header-menu-container > ul > li > a::before {
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
        -webkit-transition: .5s;
        -o-transition: .5s;
        transition: .5s;
    }

    header nav > .menu-header-menu-container > ul > li > a:hover::before {
        width: 100%;
    }

    .mobileMenu {
        background: transparent !important;
    }

    .fixing.activated {
        background: #fff;
    }

    .fixing.activated nav li a {
        color: #000 !important;
    }

    .fixing.activated nav .sub-menu li a {
        color: #2A2A2A !important;
    }

    .fixing.activated .contact a {
        color: #000;
        border: 1px solid #000;
    }

    .fixing.activated .contact a:hover {
        color: var(--main_color);
        border-color: var(--main_color);
        background: transparent;
    }

    .fixing.activated .headerSearch {
        color: #000;
    }

    .fixing.activated .headerSearch:hover {
        color: var(--main_color) !important;
    }

    /*sticky header*/
    .fixing {
        top: -70px;
        transition: top 0.3s;
        /*background: #fff;*/

        /*background: #170463;*/
    }

    .home .fixing {
        background: transparent;
    }

    .fixing {
        background: transparent;
    }

    /*@media only screen and (max-width: 991px) {*/
    /*    .home .fixing {*/
    /*        background: #0C0445;*/
    /*    }*/
    /*}*/

    .fixing.activated {
        /*position: fixed;*/
        width: 100%;
        left: 0;
        background: #fff;
    }

    /*Mobile Menu*/
    .mobileMenu {
        display: none;
        cursor: pointer;
        background: #0C683D;
        float: right;
        height: auto;
        padding-left: 30px;
        width: auto;
    }

    .iconAnime {
        position: relative;
        width: 50px;
        height: 28px;
        display: inline-block;
        top: 0px;
    }

    .iconAnime span {
        height: 5px;
        width: 100%;
        border-radius: 3px;
        background: #FFFFFF;
        display: inline-block;
        float: left;
        position: absolute;
        left: 0;
    }

    .iconAnime span:first-child {
        top: 0;
        transition: all 0.25s;
    }

    .iconAnime span:nth-child(2) {
        top: calc(50% - 3px);
        transition: all 0.25s;
    }

    .iconAnime span:last-child {
        bottom: 0;
        transition: all 0.25s;
    }

    .mobileMenuOpen .iconAnime span:first-child {
        /*top: calc(50% - 4.5px);*/

        /*top: 50%;*/
        /*top: 10px;*/
        top: 14px;
        transform: rotate(225deg);
    }

    @media only screen and (max-width: 767px) {
        .mobileMenuOpen .iconAnime span:first-child {
            top: 10px;
        }
    }

    .mobileMenuOpen .iconAnime span:nth-child(2) {
        top: calc(50% - 2px);
        display: none;
    }

    .mobileMenuOpen .iconAnime span:last-child {
        top: 14px;
        transform: rotate(135deg);
    }

    .menu-item-has-children .thereCaret.active img {
        transform: rotate(270deg);
    }

    .menu-item-has-children .menu-item-has-children .thereCaret {
        top: 0;
    }

    /*.container-fluid-custom {*/
    /*    display: flex;*/
    /*    justify-content: space-between;*/
    /*}*/

    /*header . .flex_wrapper {*/
    /*    display: flex;*/
    /*    justify-content: space-between;*/
    /*    align-items: center;*/
    /*    !*border-bottom: 8px solid #F1F1F1;*!*/
    /*    padding: 34px 20px 34px 0;*/
    /*    max-width: 1320px;*/
    /*    margin: 0 auto;*/
    /*    position: relative;*/
    /*}*/

    .menu-item-has-children .thereCaret {
        /*padding: 0px 10px;*/
        /*position: absolute;*/
        /*top: 10px;*/
        /*right: 0;*/
        /*cursor: pointer;*/
        /*display: block;*/
        /*z-index: 2;*/

        padding: 0px 10px;
        position: absolute;
        top: 15px;
        right: -20px;
        cursor: pointer;
        display: block;
        z-index: 2;
        display: none;
    }

    header .flex_wrapper {
        display: flex;
        /*justify-content: space-between;*/
        justify-content: flex-end;
        align-items: center;
        /*border-bottom: 8px solid #F1F1F1;*/
        padding: 64px 20px 42px 0;
        max-width: 1278px;
        margin: 0 auto;
        position: relative;
    }


    .menu-item-has-children .thereCaret.active {
        right: 8px;
    }

    @media only screen and (max-width: 991px) {
        .menu-item-has-children .thereCaret {
            display: block;
        }

        .thereCaret img {
            /*height: 10px;*/
            /*transform: rotate(90deg);*/
            /*transition: all 0.3s;*/
            height: 4px;
            width: 8px;
            transition: all 0.3s;
        }

        header .caret {
            border-top: 4px solid #FFFFFF;
            border-left: 4px solid transparent;
            border-right: 4px solid transparent;
            position: absolute;
            right: 0px;
            top: 55%;
            transform: translateY(-50%);
        }

        @media only screen and (max-width: 991px) {
            header .caret {
                display: none;
            }
        }

        /*Header Custom*/
        header .rightSide {
            padding: 0;
        }

        header .headerSearch {
            color: #4A4A4A;
            font-size: 22px;
            cursor: pointer;
            -webkit-transition: .3s;
            -o-transition: .3s;
            transition: .3s;
            padding-left: 20px;
            margin-left: 20px;
            border-left: 1px solid rgba(42, 42, 42, .5);
        }

        header .headerSearch:hover {
            color: var(--main_color);
        }

        header .headerSearch span .icon-search {
            position: absolute;
            transition: .3s;
        }

        /*header .contact {*/
        /*    margin-right: 25px;*/
        /*}*/
        header .contact a {
            /*display: block;*/
            /*border: 1px solid #2A2A2A;*/
            /*color: #2A2A2A;*/
            /*white-space: nowrap;*/

            color: #FE8275;
            /*line-height: 23.8px;*/
            font-size: 14px;
            font-weight: 700;
            padding: 11px 16px;
            border: 2px solid #FE8275;
            display: flex;
            align-items: center;
            justify-content: center;
            white-space: nowrap;
        }

        header .contact a:hover {
            text-shadow: none;
            color: #FF4E3C;
            border-color: #FF4E3C;
        }

        header .phone_number {
            color: var(--main_color);
        }

        header .phone_number:hover {
            color: var(--hover_color);
        }

        header .phone i {
            display: none;
        }

        header .phone_number svg {
            height: 24px;
            width: 24px;
            display: none;
        }

        .home header .phone_number i {
            display: none;
        }

        .fixing.activated .fa-search {
            color: #4A4A4A !important;
        }

        .fixing.activated .fa-search:hover {
            color: var(--main_color) !important;
        }

        header .flex_wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            /*border-bottom: 8px solid #F1F1F1;*/
            padding: 34px 20px 34px 0;
            max-width: 1320px;
            margin: 0 auto;
            position: relative;
        }

        header .flex_wrapper::before,
        header .flex_wrapper::after {
            display: none !important;
        }

        header .mail {
            position: relative;
            padding-left: 20px;
            cursor: pointer;
        }

        header .mail svg path {
            transition: .3s;
        }

        header .mail:hover svg path {
            fill: var(--main_color);
        }

    /*end header*//*end header*/
</style>

<style>
    /*Responsivness*//*Responsivness*//*Responsivness*/
    @media (min-width: 1200px) {
        .back_submenu,
        .thereCaret,
        .new_caret {
            display: none !important;
        }
    }

    @media (min-width: 1025px) {
        .menu-item-has-children ul li a:hover {
            /*background: var(--main_color) !important;*/
            color: #fff !important;
        }

        .fixing.activated .menu-item-has-children ul li a:hover {
            color: #fff !important;
        }

        /*.logo:hover img {*/
        /*    opacity: .6;*/
        /*}*/
    }

    @media (max-width: 1400px) {
        /*header .contact a {*/
        /*    padding: 10px 5px;*/
        /*	text-align: center;*/
        /*}*/
        header nav > .menu-header-menu-container > ul > li > a {
            /*padding: 5px;*/
            /*margin-right: 14px;*/
        }

        header nav > .menu-header-menu-container > ul > li:last-child > a {
            margin: 0;
        }

        /*header .caret {*/
        /*    right: -2px;*/
        /*}*/
        .sub-menu .caret {
            right: 3px;
        }

        header .phone_number span {
            display: none;
        }

        header .phone_number i {
            display: inline-block;
        }

        .home header .phone_number i {
            display: none;
        }

        header .phone_number svg {
            display: block;
        }
    }

    @media (max-width: 1300px) {
        /*header .contact {*/
        /*    margin-right: 15px;*/
        /*}*/
        /*header .caret {*/
        /*    right: -5px;*/
        /*}*/
        /*header nav > .menu-header-menu-container > ul > li.menu-item > a {*/
        /*    font-size: 12px;*/
        /*}*/

    }

    @media (max-width: 991px) {
        .home header {
            top: 0;
        }

        /*header .fixing {*/
        /*    background: #0C0445;*/
        /*}*/
        header .flex_wrapper {
            padding: 45px 40px 30px 20px;
        }

        header nav {
            background: #fff;
            padding: 0;
        }

        header nav ul {
            flex-direction: column;
            background-image: url('<?php echo get_template_directory_uri(); ?>/images/burger.png');

            gap: 0;
            padding: 150px 35px 0 35px;
            align-items: flex-start;
        }

        /*header .contact a {*/
        /*    display: none;*/
        /*}*/
        .fixing nav {
            display: none;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }

        @media only screen and (max-width: 991px) {
            .fixing nav.main_nav {
                /*height: 100vh !important;*/
                max-height: 1000px !important;
            }


        }

        .mobileMenu {
            display: block;
            float: right;
        }

        header .mail {
            padding: 5px 20px 5px 0;
            border-right: 1px solid #C9C9C9;
            margin-left: 5px;
        }

        .home header .rightSide {
            display: flex;
        }

        header .rightSide {
            display: flex;
        }

        header .rightSide .modal_btn {
            border: 0;
            margin: 0 20px 0 0;
        }

        header nav > .menu-header-menu-container > ul > li.menu-item > a {
            color: #FFFFFF !important;
            padding: 18px 18px 18px 0;
            margin: 0;
            display: inline-block;
        }

        header nav > .menu-header-menu-container > ul > li.menu-item > a.hover {
            color: #FF7A00 !important;
            padding-right: 0;
        }

        header nav > .menu-header-menu-container > ul > li.menu-item > a::before {
            content: '';
            position: absolute;
            bottom: 15px;
            width: 0;
            height: 1px;
            background: #FF7A00;
            -webkit-transition: all .3s ease;
            -o-transition: all .3s ease;
            transition: all .3s ease;
        }

        header nav > .menu-header-menu-container > ul > li.menu-item > a.hover::before {

            width: 100%;

        }

        header nav > .menu-header-menu-container > ul > li:last-child > a {
            border: none;
        }

        header nav > .menu-header-menu-container > ul > li {
            /*border-bottom: 1px solid rgba(255, 255, 255, 0.5);*/
            /*width: 100%;*/
            /*text-align: center;*/
            width: auto;
            text-align: center;
            display: inline-block !important;
        }

        header nav > .menu-header-menu-container > ul > li:last-child {
            border: none;
        }

        header nav li {
            float: none !important;
            display: block !important;
            text-align: left;
        }

        header nav li a {
            /*color: #292929 !important;*/
            background: none !important;
        }

        @media only screen and (max-width: 991px) {
            header nav li a {
                color: #fff;
            }

        }

        header nav li a {
            display: block;
        }

        .fixing nav > div > ul > li:last-child a {
            background: none !important;
        }

        .menu-item-has-children ul li a {
            padding: 5px 15px;
            color: #FFFFFF !important;
            padding: 18px;
            margin: 0;
            text-align: center;
        }

        .sub-menu, .sub-menu .sub-menu {
            background: none !important;
            position: static;
            box-shadow: none !important;
        }

        .header-nav .menu-header-menu-container > ul > li {
            margin-right: 0 !important;
        }

        .header-nav .menu-header-menu-container > ul > li > a {
            text-transform: uppercase;
            padding: 10px 15px !important;
            border-bottom: 1px solid #F3C45C !important;
        }

        .header-right-part {
            margin-top: 20px;
        }

        .sub-menu, .sub-menu .sub-menu {
            background: none !important;
            position: static !important;
            box-shadow: none !important;
        }

        .sub-menu {
            text-transform: capitalize;
            font-size: 16px;
        }

        header nav {
            overflow: auto;
        }

        .fixing .logo a .logo-white {
            height: 80px;
            display: none;
        }

        .fixing .logo a .logo-black {
            display: block;
            height: 87px;
            width: 87px;
        }

        .logo img {
            max-width: 200px;
        }

        .mobileMenu {
            padding-top: 0;
            padding-bottom: 0;
        }

        /*.caret {*/
        /*    display: none !important;*/
        /*}*/
    }

    @media (max-width: 991px) {
        .modal_search form {
            width: 80%;
        }

        .modal_search .close_modal {
            top: 15px;
            right: 15px;
        }

        .menu-item-has-children ul {
            padding-top: 0;
        }

        /*.home header {*/
        /*    position: relative;*/
        /*}*/
    }

    @media (max-width: 767px) {
        /*.fixing .logo a .logo-white {*/
        /*    height: 65px;*/
        /*}*/
        /*.fixing .logo a .logo-black {*/
        /*    height: 65px;*/
        /*}*/
        /*.iconAnime {*/
        /*    height: 25px;*/
        /*    width: 35px;*/
        /*    top: 1px;*/
        /*}*/
        .mobileMenu {
            padding: 0;
            margin-left: 20px;
        }

        .mobileMenuOpen .iconAnime span:last-child {
            top: 10px;
        }

        /*.home header .rightSide {*/
        /*    padding: 16px;*/
        /*}*/
        /*header .rightSide {*/
        /*    padding: 10px;*/
        /*}*/
        /*header .flex_wrapper {*/
        /*    padding: 5px 10px;*/
        /*}*/
        .modal_search form input[type="text"] {
            padding: 15px;
        }

        .modal_search .fa-times {
            right: 5%;
        }
    }

    @media (max-width: 600px) {
        header .rightSide .contact {
            display: none;
        }

        .fixing.activated {
            top: 0 !important;
        }

        #headerSearchModal input {
            font-size: 13px !important;
        }

        #headerSearchModal .modalSearch {
            height: 40px !important;
        }

        #headerSearchModal .buttonRight button {
            font-size: 20px;
        }

        #headerSearchModal .modalSearch .buttonRight {
            width: 40px;
        }

        #headerSearchModal .modalSearch .inputLeft {
            width: calc(100% - 40px);
        }

        /*.fixing .logo a .logo-black {*/
        /*    width: 150px;*/
        /*    height: auto;*/
        /*}*/
        header .rightSide .modal_btn {
            order: -1;
            border: 0;
            margin: 0 20px 0 0;
            padding: 0;
        }

        .CustomMobileMenu .counter, .CustomMobileMenu.open {
            width: 100%;
        }

        .CustomMobileMenu {
            height: calc(100vh - 80px);
        }

        header .mail {
            margin-left: 20px;
        }
    }

    @media (max-width: 400px) {
        /*.mobileMenu {
            margin-left: 15px;
        }
        header .mail {
            padding-left: 15px;
        }
        .modal_btn {
            padding-left: 15px;
            margin-left: 15px;
        }*/
        header .headerSearch {
            border: 0;
            margin: 0;
            padding-left: 15px;
        }

        .home header .rightSide {
            padding-right: 0;
        }

        header .rightSide {
            padding-right: 0;
        }

        .CustomMobileMenu {
            height: calc(100vh - 72px);
        }

        .fixing .logo a .logo-black {
            width: 87px;
            height: 87px;
        }
    }
</style>
<?php if (get_field('mobile_menu_variant', get_homePageId()) == 'Flyout'): ?>
    <style>
        @media (max-width: 1199px) {
            .mobileMenu.mobileMenuOpen {
                top: -7px !important;
                position: relative;
            }

            .iconAnime {
                height: 25px;
                width: 35px;
            }

            .mobileMenuOpen .iconAnime span:last-child {
                top: 10px;
            }

            header .fixing nav {
                width: 0;
                height: 100vh;
                left: auto;
                right: 0;
                top: 0;
                overflow: hidden;
                max-height: none !important;
                display: block;
                opacity: 0;
                transition-delay: .45s;
                background: none !important;
            }

            header .fixing nav.open_menu {
                width: 100%;
                opacity: 1;
                transition-delay: 0s;
            }

            header .fixing nav::before {
                content: '';
                position: fixed;
                top: 0;
                right: 0;
                width: 100vw;
                height: 100vh;
                background: rgba(6, 6, 6, .7);
                z-index: -1;
                transition: transform .4s;
                transform: translateX(100%);
            }

            header .fixing nav.open_menu::before {
                transform: translateX(0);
            }

            header .fixing nav > .menu-header-menu-container {
                position: relative;
                z-index: 1;
                width: 350px;
                height: 100%;
                transition: transform .4s, opacity .5s;
                background: #fff;
                padding: 80px 20px 30px;
                overflow: hidden;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                transform: translateX(120%);
                margin: 0 0 0 auto;
            }

            header .fixing nav.open_menu > .menu-header-menu-container {
                transform: translateX(0);
            }

            header nav > .menu-header-menu-container .back_submenu {
                position: absolute;
                top: 0;
                left: 100%;
                width: 50%;
                display: inline-flex;
                align-items: center;
                font-size: 14px !important;
                font-weight: bold;
                padding-left: 25px;
                color: #333 !important;
                text-align: left;
                text-transform: uppercase;
                opacity: 0;
                transition: left .4s, opacity .3s;
                z-index: 1;
            }

            header nav > .menu-header-menu-container .back_submenu img {
                width: 17px;
                height: 17px;
                display: block;
                margin-right: 7px;
            }

            header nav > .menu-header-menu-container.open_submenu .back_submenu {
                left: 0;
                opacity: 1;
            }

            header .fixing nav > .menu-header-menu-container > ul {
                position: relative;
                height: 100%;
                overflow: hidden;
                flex-grow: 1;
            }

            header .fixing nav .menu-header-menu-container li.menu-item {
                position: static;
                overflow: hidden;
            }

            header .fixing nav .menu-header-menu-container li.menu-item a {
                position: relative;
                font-size: 14px !important;
                font-weight: bold;
                padding: 20px 5px !important;
                color: #333 !important;
                border-top: 1px solid #DFDFDF;
            }

            header nav > .menu-header-menu-container > ul > li > a::before {
                /*display: none !important;*/
            }

            header nav .menu-item-has-children > a .new_caret {
                display: inline-block;
                position: absolute;
                top: 50%;
                right: 5px;
                width: 26px;
                padding: 3px 10px 7px;
                transform: translateY(-50%);
                opacity: 0;
                transition: opacity .2s;
            }


            header nav.open_menu .menu-item-has-children > a .new_caret {
                opacity: 1;
                transition-delay: .2s;
            }

            header nav .menu-item-has-children > a .new_caret img {
                width: 100%;
            }

            .thereCaret {
                display: none !important;
            }

            header nav > .menu-header-menu-container > ul > li.menu-item:last-child > a {
                border-bottom: 1px solid #DFDFDF;
            }

            header .fixing nav.open_menu + .rightSide > div:not(.mobileMenu),
            header .fixing nav.open_menu + .rightSide > a {
                display: none;
                opacity: 0;
            }

            .rightSide > div:not(.mobileMenu),
            .rightSide > a {
                transition: 2s;
                opacity: 1;
            }

            header .fixing nav > .menu-header-menu-container .sub-menu {
                display: block;
                position: absolute !important;
                top: 0;
                left: 130%;
                width: 100%;
                height: 100%;
                transition: .4s;
                padding: 0 !important;
                background: #fff !important;
                z-index: 1;
                overflow: auto;
                min-width: 0;
            }

            header .fixing nav > .menu-header-menu-container .sub-menu.open_submenu {
                left: 0;
            }

            header .fixing nav > .menu-header-menu-container .sub-menu .sub-menu {
                width: 0;
            }

            header .fixing nav > .menu-header-menu-container .sub-menu .sub-menu.open_submenu {
                width: 100%;
            }

            header .fixing nav > .menu-header-menu-container .menu_bottom {
                display: block !important;
                text-align: center;
                padding: 10px 0 50px;
                border-top: 1px solid #DFDFDF;
            }

            header .fixing nav > .menu-header-menu-container .menu_bottom .menu_bottom_phone {
                display: block;
                color: var(--second_color);
                font-size: 22px;
                margin-bottom: 5px;
            }

            header .fixing nav > .menu-header-menu-container .menu_bottom .menu_bottom_mail {
                color: #878787;
                font-family: 'Montserrat';
            }

            header .fixing nav > .menu-header-menu-container .menu_bottom .header_social {
                margin-top: 15px;
                display: flex;
                justify-content: center;
            }

            header .fixing nav > .menu-header-menu-container .menu_bottom .header_social li {
                display: inline-block;
                border-radius: 50%;
                overflow: hidden;
                width: 30px;
                height: 30px;
            }

            header .fixing nav > .menu-header-menu-container .menu_bottom .header_social li:not(:last-child) {
                margin-right: 7px;
            }

            header .fixing nav > .menu-header-menu-container .menu_bottom .header_social li a {
                padding: 0;
            }

            header .fixing nav > .menu-header-menu-container .menu_bottom .header_social li img {
                width: 100%;
                height: 100%;
            }
        }

        @media (max-width: 600px) {
            .mobileMenu.mobileMenuOpen {
                top: 0px !important;
            }
        }
    </style>

<?php endif; ?>

<?php if (get_field('header_variants', get_homePageId()) == 'Standard'): ?>
    <?php include(get_theme_root() . '/' . wp_get_theme() . '/templates-parts/header-variants/standart-logo-css.php'); ?>
<?php elseif (get_field('header_variants', get_homePageId()) == 'Big Logo'): ?>
    <?php include(get_theme_root() . '/' . wp_get_theme() . '/templates-parts/header-variants/big-logo-css.php'); ?>
<?php elseif (get_field('header_variants', get_homePageId()) == 'ILV Simple'): ?>
    <?php include(get_theme_root() . '/' . wp_get_theme() . '/templates-parts/header-variants/right-form-css.php'); ?>
<?php elseif (get_field('header_variants', get_homePageId()) == 'Logo Center'): ?>
    <?php include(get_theme_root() . '/' . wp_get_theme() . '/templates-parts/header-variants/logo-center-css.php'); ?>
<?php endif; ?>