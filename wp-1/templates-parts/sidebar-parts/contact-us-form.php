<div class="sidebarForm">
    <style>
        .sidebarForm {
            box-shadow: 0px 3px 30px #0000001F;
            margin-bottom: 30px;
        }
        .sidebarForm h3 {
            background-color: var(--hover_color);
            color: #fff;
            text-align: center;
            position: relative;
            margin-bottom: 0;
            padding: 32px 15px 38px;
            text-transform: capitalize;
            font: 400 32px/36px var(--title_font);
        }
        /*.sidebarForm h3::after{*/
        /*    content: "";*/
        /*    width: 42px;*/
        /*    background-color: var(--main_color);*/
        /*    height: 2px;*/
        /*    position: absolute;*/
        /*    left: 50%;*/
        /*    top: 70%;*/
        /*    transform: translateX(-50%);*/
        /*}*/
        .sidebarForm .gform_wrapper {
            padding: 25px 35px 35px;
            background-color: white;
        }
        .sidebarForm .gform_wrapper .gform_body li:nth-child(6) {
            padding-top: 10px !important;
            margin-top: 0;
        }
        .sidebarForm .gform_wrapper .gform_body li input, .sidebarForm .gform_wrapper .gform_body li textarea {
            border: 1px solid #C8C8C8;
            padding-left: 10px !important;
            height: 50px;
            font: 500 16px/24px var(--body_font);
            background: #F5F5F5;
        }
        .sidebarForm .gform_wrapper .gform_body li textarea {
            padding-top: 8px;
            height: 150px;
        }
        .sidebarForm .gform_wrapper .gform_body li input::-webkit-input-placeholder {
            color: rgba(41, 41, 41, 0.5);
            font: 500 16px/24px var(--body_font);
        }
        .sidebarForm .gform_wrapper .gform_body li input::-moz-placeholder {
            color: rgba(41, 41, 41, 0.5);
            opacity: 1;
            font-size: 16px !important;
            font-weight: 500;
            font-family: var(--body_font);
        }
        .sidebarForm .gform_wrapper .gform_body li textarea::-webkit-input-placeholder {
            color: #29292980;
            font-size: 16px !important;
            line-height: 26px;
            font-weight: 500;
        }
        .sidebarForm .gform_wrapper .gform_body li textarea::-moz-placeholder {
            color: #29292980;
            opacity: 1;
            font-size: 16px !important;
            font-weight: 500;
        }
        .sidebarForm .gform_wrapper .gform_footer input {
            background-color: var(--hover_color)!important;
            text-transform: uppercase;
            height: 65px;
            font: 600 16px/25px var(--paragraph_font) !important;
        }
        .sidebarForm .gform_wrapper .gform_footer input:hover {
            background: var(--main_color) !important;
            color: #fff;
        }
        body .sidebarForm .gform_wrapper ul li.gfield {
            margin-top: 10px;
        }
        body .sidebarForm .gform_wrapper .gform_footer {
            margin-top: 30px !important;
        }
        body .gform_wrapper .top_label div.ginput_container {
            margin-top: 0 !important;
        }
        .sidebarForm .gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield span.name_first {
            padding-top: 0;
        }
        /*Responsivnes/Responsivnes/Responsivnes/*/
        @media (min-width: 641px) {
            body .sidebarForm .gform_wrapper.gform_validation_error .gform_body ul li.gfield.gfield_error:not(.gf_left_half):not(.gf_right_half) {
                max-width: 100% !important;
            }
            .sidebarForm .gform_wrapper .gform_body li:nth-child(2),
            .sidebarForm .gform_wrapper .gform_body li:nth-child(3),
            .sidebarForm .gform_wrapper .gform_body li:nth-child(4),
            .sidebarForm .gform_wrapper .gform_body li:nth-child(5) {
                width: calc(50% - 5px) !important;
                float: left;
                clear: none !important;
            }
            .sidebarForm .gform_wrapper .gform_body li:nth-child(2),
            .sidebarForm .gform_wrapper .gform_body li:nth-child(4) {
                margin-right: 10px !important;
            }
        }
        @media (max-width: 1199px) and (min-width: 992px) {
            .sidebarForm .gform_wrapper .gform_body li:nth-child(2),
            .sidebarForm .gform_wrapper .gform_body li:nth-child(3),
            .sidebarForm .gform_wrapper .gform_body li:nth-child(4),
            .sidebarForm .gform_wrapper .gform_body li:nth-child(5) {
                width: 100% !important;
            }
        }
    </style>
    <h3>Contact Us</h3>
    <?php echo do_shortcode('[gravityform id=5 title=false description=false ajax=true tabindex=49]'); ?>
</div>
