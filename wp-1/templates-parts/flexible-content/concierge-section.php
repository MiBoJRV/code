<?php $services++; ?>
<section class="services services1 CS-<?php echo $services; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="containerService">
        <!--Packages are editable from admin, there you can change content and their places-->
        <?php if (have_rows('concierge_services')): ?>
            <?php while (have_rows('concierge_services')): the_row(); ?>
                <div class="servicesCategory">
                    <h3><?php the_sub_field('service_type_name'); ?></h3>
                    <div class="itemList customClear">
                        <?php if (have_rows('service_type_list')): ?>
                            <?php while (have_rows('service_type_list')): the_row(); ?>
                                <div class="item <?php if (get_sub_field('item_link') != ''): ?>withLink<?php endif; ?>">
                                    <div class="imaged">
                                        <img src="<?php if (get_sub_field('service_image') != ''): ?><?php echo get_sub_field('service_image'); ?><?php else: ?>/wp-content/uploads/2018/09/test-image.jpg<?php endif; ?>" title="" alt=""/>
                                    </div>
                                    <div class="border-box hh1"></div>
                                    <div class="positioned centered textPart">
                                        <h4><?php echo get_sub_field('service_title'); ?></h4>
                                    </div>
                                    <div class="custom-text">
                                        <?php if (get_sub_field('text_on_hover') != ''): ?>
                                            <p class="hoverAppear"><?php echo get_sub_field('text_on_hover'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="requestLine">
                                        <?php if (get_sub_field('item_link') == ''): ?>
                                            <span class="acceptRequest">
                                                    <span><i class="fa fa-check"></i></span>
                                                </span>
                                            <span class="button requestPack">Request For My Stay</span>
                                        <?php else: ?>
                                            <a href="<?php echo get_sub_field('item_link'); ?>" class="button learnMore" target="_blank"><?php echo get_sub_field('item_link_text'); ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div><!--End Item-->
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div><!--End itemList-->
                </div><!--End servicesCategory-->
            <?php endwhile; ?>
        <?php endif; ?>
    </div><!--End container-->
    <div class="fixedRequestButton">Request Service Info</div>
    <div class="modal fade conciergeModals" id="formModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">request service information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="requestList customClear">
                    <div class="customClear"></div>
                </div>
                <div class="modal-body">
                    <?php echo do_shortcode('[gravityform id=14 title=false description=false ajax=true tabindex=49]'); ?>
                </div><!--modal-body-->
            </div><!--modal-content-->
        </div><!--End modal-dialog-->
    </div><!--End modal-->
    <style>
        <?php if($services < 2):?>
        /*Basic Styles*/
        /*services*/
        .services .containerService {
            padding: 0 15px;
            max-width: 1200px;
            margin: 0 auto;
        }
       
        .services .containerService:before,
        .services .containerService:after {
            content: "";
            display: block;
            height: 0;
            overflow: hidden;
            clear: both;
        }
        .services .imaged {
            background: #302D2D;
            transition: all 0.3s;
            width: 100% !important;
        }
        .services .item {
            background: #fff;
        }
        .services .item:hover .imaged {
            background: #000 !important;
        }
        .services .item .custom-text {
            position: absolute;
            left: 30px;
            right: 30px;
            text-align: center;
            color: #000;
            top: calc(50% + 5px);
        }
        .services .servicesCategory .item:hover h4 {
            /*transform: scale(0.7);*/
            /*background: #fff;*/
            color: #FFF;
            width: 100%;
            margin: 0 auto;
        }
        .services .item:hover .border-box {
            top: 15px;
            left: 15px;
            right: 15px;
            bottom: 15px;
            /*border: 1px solid rgba(0, 0, 0, 1);*/
        }
        /*.services .border-box {*/
        /*    border: 1px solid rgba(0, 0, 0, 0);*/
        /*    position: absolute;*/
        /*    top: 0;*/
        /*    left: 0;*/
        /*    right: 0;*/
        /*    bottom: 0;*/
        /*    transition: 0.3s;*/
        /*}*/
        .services .servicesCategory {
            padding: 20px 0 40px;
            width: 100%;
        }
        .services .imaged img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            opacity: 0.8;
            transition: opacity 0.3s;
        }
        .services .servicesCategory h3 {
            text-align: center;
            padding: 15px;
            background-size: cover;
            width: calc(100% - 30px);
            margin-left: auto;
            margin-right: auto;
        }
        .services .servicesCategory .item {
            float: left;
            width: calc(33.333% - 30px);
            margin: 15px;
            position: relative;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .services .servicesCategory .item:hover .imaged,
        .services .servicesCategory .item.active .imaged {
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.3);
        }
        .services .servicesCategory .item:hover .imaged img,
        .services .servicesCategory .item.active .imaged img {
            opacity: 0.4;
        }
        .services .servicesCategory .item .hoverAppear {
            opacity: 0;
            text-align: center;
            transition: opacity 0.4s;
            margin-top: 10px;
            padding: 0 10px;
            font-family: 'Poppins';
            max-height: 60px !important;
            overflow: hidden;
            color: #fff;
        }
        .services .servicesCategory .item .requestLine {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            transition: background-color 0.3s;
            padding: 0px 18px 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .services .servicesCategory .item h4 {
            text-align: center;
            font-size: 28px;
            font-family: 'Montserrat';
            text-transform: uppercase;
            color: #fff;
            top: calc(50% - 20px) !important;
            padding: 10px;
            transition: 0.3s;
        }
        .services .servicesCategory .item.active h4 {
            /*text-shadow: 0 0 5px rgba(0, 0, 0, 0.7);*/
        }
        .services .acceptRequest {
            height: 45px;
            width: 45px;
            display: inline-block;
            border: 3px solid #fff;
            transition: background-color 0.3s;
            border-radius: 50%;
            overflow: hidden;
            color: #fff;
        }
        .services .requestLine a.button,
        .services .requestLine span.button {
            color: #fff;
            font: 16px 'Montserrat';
            padding: 15px 18px;
        }
        .services .servicesCategory .requestLine a.button,
        .services .servicesCategory .requestLine span.button.requestPack {
            background: rgba(255, 255, 255, 0.6);
            color: #000;
            text-transform: uppercase;
        }
        .services .item a.button:hover,
        .services .item span.button:hover {
            background: var(--main_color) !important;
            border-color: var(--main_color) !important;
            color: #fff !important;
            cursor: pointer;
        }
        .services .requestLine .learnMore {
            margin-right: 5px;
        }
        .services .acceptRequest {
            margin-right: 10px;
            position: relative;
            cursor: pointer;
        }
        .services .acceptRequest span {
            height: 100%;
            width: 100%;
            font-size: 24px;
            display: flex;
            height: 100%;
            width: 100%;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: 0.3s;
        }
        .services .active .acceptRequest,
        .services .acceptRequest:hover {
            background: var(--main_color) !important;
        }
        .services .active .acceptRequest span,
        .services .acceptRequest:hover span {
            opacity: 1 !important;
        }
        .services .fixedRequestButton {
            cursor: pointer;
            background: var(--main_color);
            color: #fff;
            font-weight: 500;
            font-size: 16px;
            text-align: center;
            padding: 18px 0;
            width: 275px;
            max-width: 90%;
            position: fixed;
            bottom: -200px;
            transition: all 0.3s;
            left: calc((100% - 275px) / 2);
            z-index: 999;
        }
        .services .fixedRequestButton.active {
            bottom: 80px;
        }
        .services .fixedRequestButton:hover {
            background: var(--main_color);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        .services .servicesCategory .item.withLink .requestLine {
            justify-content: flex-end;
        }
        .services .servicesCategory .item.withLink .requestLine .learnMore {
            position: relative;
            top: -5px;
            margin-right: 0;
        }
        .services .bottom-concierge-area {
            margin-top: 40px;
        }
        .services .bottom-concierge-area .flex-container {
            display: flex;
            display: -webkit-flex;
            justify-content: space-between;
            align-items: center;
            padding: 60px 0 80px 0;
            border-top: 1px solid #E4E4E4;
        }
        .services .bottom-concierge-area h5 {
            font: 500 36px 'Montserrat';
            color: #363636;
            text-transform: uppercase;
            margin-bottom: 30px;
        }
        .services .bottom-concierge-area article {
            max-width: 700px;
            text-align: left;
        }
        .services .bottom-concierge-area article p {
            font-size: 16px;
            line-height: 1.9;
        }
        .services .bottom-concierge-area article a {
            display: inline-block;
            color: #fff;
            text-transform: uppercase;
            padding: 14px 40px;
            background: var(--main_color);
            font-size: 16px !important;
            font-family: Montserrat;
            font-weight: 600;
            letter-spacing: 0.1em;
            margin-top: 30px;
        }
        .services .bottom-concierge-area article a:hover {
            background: var(--second_color);
        }
        /*Responsivness*//*Responsivness*//*Responsivness*/
        @media (max-width: 1199px) {
            .services .requestLine a.button {
                padding-right: 5px;
                padding-left: 5px;
                font-size: 12px;
            }
            .services .servicesCategory .item .requestLine {
                padding-left: 10px;
                padding-right: 10px;
            }
        }
        @media (max-width: 991px) {
            .services .servicesCategory .item {
                width: 100%;
            }
            .services .servicesCategory h3 {
                width: 100%;
            }
            .services .requestLine a.button {
                padding-right: 15px;
                padding-left: 15px;
                font-size: 15px;
            }
            .services .imaged {
                height: 350px !important;
            }
            .services .servicesCategory .item .requestLine {
                padding-left: 15px;
                padding-right: 15px;
                text-align: center;
            }
            .services .servicesCategory {
                padding-bottom: 10px;
            }
            .services .servicesCategory .item {
                margin: 15px 0;
            }
            .services .topDescript {
                margin-top: 20px;
            }
            .services .item .custom-text {
                top: calc(50% + 20px);
            }
        }
        @media (max-width: 767px) {
            .services .servicesCategory .item .hoverAppear {
                font-size: 13px;
            }
            .services #formModal .requestList li {
                width: 100% !important;
            }
            .services .topDescript h2 + p {
                font-size: 18px;
            }
            .services #formModal .modal-content {
                padding: 10px 15px;
            }
            .services .fixedRequestButton {
                display: none;
            }
        }
        @media (max-width: 640px) {
            body .gform_wrapper li.field_sublabel_below .ginput_complex {
                margin-top: 8px !important;
            }
            body #gform_wrapper_14 form .gform_body ul li {
                width: 100% !important;
                max-width: calc(100% - 7.5px) !important;
            }
            .services #formModal .gform_body ul li input {
                height: 70px !important;
            }
        }
        @media (max-width: 500px) {
            .services .requestLine a.button {
                font-size: 12px;
            }
            .services .servicesCategory .item h4 {
                font-size: 26px;
            }
        }
        /*formModal*/
        .services #formModal .gform_wrapper.gform_validation_error .gform_body ul li.gfield.gfield_error:not(.gf_left_half):not(.gf_right_half) {
            max-width: none !important;
        }
        .services #formModal .gform_confirmation_message {
            color: #000;
        }
        .services #formModal .gform_body label {
            display: none !important;
        }
        .services #formModal .gform_body input,
        .services #formModal .gform_body textarea {
            border: 1px solid #DEDEDE;
            border-radius: 3px;
            height: 50px;
            border-radius: 0;
            padding-left: 10px;
            background: #fff;
        }
        .services #formModal .modal-content .modal-body {
            padding-top: 0;
        }
        .services #formModal .gform_body textarea {
            height: 150px;
        }
        .services #formModal .gform_wrapper ul.gform_fields li.gfield {
            padding-right: 0;
        }
        .services #formModal .gform_wrapper ul.gform_fields li.gfield#field_27_1,
        .services #formModal .gform_wrapper ul.gform_fields li.gfield#field_27_2,
        .services #formModal .gform_wrapper ul.gform_fields li.gfield#field_27_3,
        .services #formModal .gform_wrapper ul.gform_fields li.gfield#field_27_5 {
            width: 50%;
            float: left;
            clear: none;
        }
        .services #formModal .gform_wrapper ul.gform_fields li.gfield#field_27_1,
        .services #formModal .gform_wrapper ul.gform_fields li.gfield#field_27_3 {
            padding-right: 6px;
        }
        .services #formModal .gform_wrapper ul.gform_fields li.gfield#field_27_2,
        .services #formModal .gform_wrapper ul.gform_fields li.gfield#field_27_5 {
            padding-left: 6px;
        }
        .services #formModal .gform_wrapper ul.gform_fields li.gfield#field_27_3,
        .services #formModal .gform_wrapper ul.gform_fields li.gfield#field_27_5 {
            margin-bottom: 12px;
        }
        .services #formModal .ginput_complex {
            width: 100%;
        }
        .services #formModal .gform_wrapper ul.gform_fields li.gfield span.name_first {
            padding-top: 0;
            padding-right: 0;
        }
        .services #formModal .requestList ul {
            padding: 0 2px !important;
            margin-bottom: 0;
            margin-top: 10px;
            font-size: 16px;
        }
        .services #formModal .gform_wrapper {
            margin: 0;
            max-width: none !important;
        }
        body .services .gform_wrapper ul li.gfield {
            margin-top: 5px !important;
        }
        body .services .gform_wrapper .gform_footer {
            margin-top: 5px !important;
        }
        .services #formModal .gform_body input::-moz-placeholder,
        .services #formModal .gform_body textarea::-moz-placeholder {
            font: 400 16px 'Poppins' !important;
            color: rgba(41, 41, 41, 0.5);
            opacity: 1 !important;
        }
        .gform_wrapper .gform_body li input, .gform_wrapper .gform_body li textarea {
            border-bottom: 1px solid #C5C5C5;
            color: rgba(41, 41, 41, 0.5);
            font-size: 500 16px/24px var(--paragraph_font) !important;
        }
        .services #formModal .gform_body textarea {
            max-height: 170px;
            font: 400 16px 'Poppins' !important;
            background: #F5F5F5;
        }
        .services #formModal .gform_body input::-webkit-input-placeholder,
        .services #formModal .gform_body textarea::-webkit-input-placeholder {
            font: 400 16px 'Poppins' !important;
            color: rgba(41, 41, 41, 0.5);
        }
        .services #formModal .gform_footer {
            padding-bottom: 0;
            padding-top: 0;
            margin-top: 0 !important;
            text-align: center;
        }
        .services #formModal .gform_footer input {
            background: var(--main_color) !important;
            border: 0;
            color: #fff;
            display: block;
            padding: 10px;
            width: 200px !important;
            font-size: 16px;
            font-family: 'Futura PT Demi';
            font-weight: 500;
            text-transform: uppercase;
            height: 55px;
            margin: 15px auto 0 !important;
        }
        .services #formModal .gform_footer input:hover {
            background: var(--hover_color) !important;
            transition: .4s;
        }
        .services #formModal h5 {
            margin-top: 0;
            text-align: center;
            font-size: 30px;
        }
        /*.services #formModal h5::after {*/
        /*    content: "";*/
        /*    display: block;*/
        /*    width: 60px;*/
        /*    height: 2px;*/
        /*    background: var(--main_color);*/
        /*    margin: 10px auto 0 auto;*/
        /*}*/
        .services #formModal h2 {
            text-align: center;
            margin: 0;
            color: #002245;
            font-size: 18px;
            font-weight: 400;
        }
        .services #formModal .requestList {
            /*padding: 5px 20px 20px 20px;*/
            /*border: 1px solid #DEDEDE;*/
            padding: 0;
            /*margin: 0 50px 15px 50px;*/
            /*width: calc(100% - 100px);*/
            width: 100%;
            background: #fff;
        }
        .services #formModal .requestList .bigLine {
            float: left;
            width: 33.333%;
        }
        .services #formModal .requestList .bigLine h3 {
            font-size: 18px;
            font-weight: 400;
            margin-top: 15px;
            margin-bottom: 5px;
            color: #363636;
            margin-bottom: 4px !important;
        }
        body .gform_wrapper .top_label div.ginput_container {
            margin-top: 3px !important;
        }
        .services #formModal .requestList li {
            list-style: none;
            cursor: pointer;
            font-size: 10px;
            display: flex;
            align-items: center;
            margin: 5px 0;
            font-size: 14px;
        }
        .services #formModal .requestList li.remove {
            text-decoration: line-through;
        }
        .services #formModal .requestList li span {
            color: var(--second_color);
        }
        .services #formModal .requestList li i {
            display: none;
        }
        .services #formModal .active .acceptRequest,
        .services #formModal .acceptRequest:hover {
            background: var(--main_color) !important;
        }
        .services #formModal .requestList li span + span {
            width: calc(100% - 25px);
            color: #818181;
            position: relative;
            top: 1px;
            font-family: var(--body_font);
            font-size: 14px;
        }
        .services #formModal .requestList li.bigLine {
            width: 100%;
        }
        .services #formModal .requestList li.bigLine h3 {
            font-size: 13px;
            font-weight: 400;
            margin: 0;
            margin-top: 5px;
        }
        .services #formModal .acceptRequest {
            height: 14px;
            width: 14px;
            top: 0px;
        }
        .services #formModal .acceptRequest span {
            font-size: 14px;
        }
        .services #formModal .acceptRequest {
            border: 2px solid #C8C8C8 !important;
        }
        .services #formModal .acceptRequest:hover span {
            opacity: 0 !important;
        }
        .services #formModal .active .acceptRequest:hover span {
            opacity: 1 !important;
        }
        .services #gform_submit_button_6 {
            background: #002245 !important;
        }
        .services #gform_submit_button_6:hover {
            background: #000 !important;
        }
        .services #formModal .modal-dialog {
            width: 830px;
        }
        .services #formModal .modal-content {
            border: 0;
            border-radius: 3px;
            background: #FAFAFA;
        }
        .services #formModal .modal-body {
            padding: 0 50px 50px 50px;
        }
        .services #formModal .requestList .customClear {
            display: flex;
            display: -webkit-flex;
            flex-wrap: wrap;
        }
        .services #formModal .requestList .customClear .bigLine {
            width: 33.333%;
        }
        .services .conciergeModals .modal-header {
            border: none !important;
        }
        /*FIX*/
        h1.topTitle {
            display: none;
        }
        section.wpContent {
            display: none;
        }
        .services {
            background: #FAFAFA;
        }
        .services .servicesCategory h3 {
            text-transform: capitalize;
            letter-spacing: 0;
            text-align: center;
            margin-bottom: 30px;
            font: 400 40px/46px var(--title_font);
            color: var(--title_color);
        }
        .services .active .acceptRequest,
        .services .acceptRequest:hover {
            background-color: var(--main_color) !important
        }
        .services .imaged img {
            opacity: 0.6;
        }
        .services .item {
            margin: 10px;
        }
        .services .servicesCategory .item h4 {
            text-align: center;
            font-family: var(--original_font);
            text-transform: capitalize;
            color: #fff;
            padding: 10px;
            transition: 0.3s;
            margin: 0;
            text-shadow: 0px 3px 10px rgba(0, 0, 0, 0.35);
            font: 400 24px/28px var(--title_font);
        }
        .services .active .acceptRequest,
        .services .acceptRequest:hover {
            background-color: var(--main_color) !important
        }
        .services #formModal .modal-content {
            background: rgba(255, 255, 255, 1);
        }
        .services .conciergeModals .modal-header {
            padding: 0;
        }
        .services #formModal .modal-content {
            padding: 40px 50px;
        }
        .services #formModal h5 {
            letter-spacing: 0px;
            text-transform: capitalize;
            color: var(--title_color);
            font: 400 32px/36px var(--title_font);
        }
        .services .servicesCategory .requestLine span.button.requestPack {
            transition: 0.4s;
            background-color: #fff;
            font: 600 16px/21px 'Poppins';
            text-transform: uppercase;
            color: #292929;
            padding: 15px 18px;
        }
        .services .servicesCategory .item .hoverAppear {
            font: 400 16px 'Poppins';
            line-height: 1.3;
            /*max-height: 295px !important;*/
            max-height: 158px !important;
        }
        .services .servicesCategory .item:hover .hoverAppear {
            opacity: 1;
        }
        /*.services .fixedRequestButton {*/
        /*    padding: 18px 60px;*/
        /*}*/
        .services .fixedRequestButton.active {
            font: 600 16px 'Poppins';
            /*border: 2px solid #fff;*/
            text-transform: uppercase;
            color: #fff;
            background-color: var(--second_color);
            border: 2px solid #fff;
        }
        .services .fixedRequestButton.active:after {
            /*content: '';*/
            position: absolute;
            top: -4px;
            bottom: -4px;
            left: -4px;
            right: -4px;
            border: 2px solid var(--main_color);
            transition: 0.4s;
        }
        .positioned.centered {
            transition: 0.3s;
        }
        .item:hover .positioned.centered {
            transform: translate(-50%, -90%);
        }
        /*Form*/
        .services #formModal .modal-dialog {
            margin-top: 7vh;
        }
        #formModal {
            background: rgba(7, 8, 8, 0.8);
            z-index: 9999;
        }
        .services #formModal .gform_wrapper .gform_body ul li label {
            display: inline-block !important;
            font-family: Poppins;
            font-weight: 600;
            font-size: 16px;
            text-transform: uppercase;
        }
        .services #formModal div.ginput_complex.ginput_container.gf_name_has_1 span label {
            display: none !important;
        }
        .gform_wrapper form .gform_body ul {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        #gform_wrapper_14 form .gform_body ul li {
            padding: 0 !important;
            width: calc(50% - 7.5px) !important;
            max-width: calc(50% - 7.5px) !important;
        }
        .gform_wrapper ul.gform_fields {
            display: flex;
        }
        .gform_wrapper form .gform_body ul li#field_14_5 {
            width: 100% !important;
            max-width: 100% !important;
        }
        .services #formModal .requestList .customClear {
            display: flex;
            flex-wrap: wrap;
        }
        .services #formModal .requestList .customClear .bigLine {
            width: 100%;
            /*margin-top: 30px;*/
        }
        .services #formModal .requestList ul {
            column-count: 3;
            margin-bottom: 0;
            margin-top: 3px;
            font-size: 16px;
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            display: flex;
            flex-wrap: wrap;
            background: #F5F5F5;
            border: 1px solid #DCDCDC;
            padding: 18px !important;
        }
        #formModal .modal-header .close {
            position: absolute;
            top: 0;
            right: 0;
            transform: translate(50%, -50%);
            width: 45px;
            height: 45px;
            background: var(--main_color);
            color: #fff;
            opacity: 1;
            border-radius: 50%;
            font-size: 36px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            transition: .4s;
            /*border: 2px solid #fff;*/
        }
        .services #formModal .requestList li span + span {
            font: 500 16px/22px var(--title_font);
            color: rgba(41, 41, 41, 0.65);
            text-transform: capitalize;
        }
        .services #formModal .requestList li.active span + span {
            color: rgba(41, 41, 41, 1);
        }
        .services #formModal .requestList li.active .acceptRequest {
            border: 2px solid #ffF !important;
            position: relative;
            box-shadow: 0 0 0 0px white, 0 0 0px 1px var(--main_color);
        }
        .services #formModal .requestList li.active .acceptRequest
        .services #formModal .requestList {
            width: 100%;
            margin: 0 auto;
            margin-bottom: 15px;
        }
        .services #formModal .modal-body {
            padding: 0 0px 50px 0px;
        }
        .services #formModal .requestList li {
            width: 33.33334%;
            list-style: none;
            cursor: pointer;
            font-size: 10px;
            display: flex;
            align-items: center;
            margin: 5px 0;
            font-size: 14px;
        }
        .services #formModal .gform_wrapper ul.gform_fields li.gfield {
            margin-bottom: 15px;
        }
        .services #formModal .gform_body ul li input {
            border: 1px solid #DCDCDC;
            height: 55px;
            background: #F5F5F5;
        }
        .services #formModal .gform_footer input {
            background-color: var(--second_color) !important;
            font: 500 16px 'Poppins';
            position: relative;
            transition: .4s;
        }
        .services #formModal .gform_footer input:hover {
            background-color: var(--main_color);
        }
        .services #formModal .modal-body {
            padding: 0px;
        }
        body .gform_wrapper .top_label div.ginput_container {
            margin-top: 3px;
        }
        .services #formModal .gform_wrapper .gform_body ul li label, .services #formModal .services_selected, .services #formModal .requestList .bigLine h3 {
            margin-top: 23px;
            margin-bottom: 0px;
            text-transform: uppercase;
            letter-spacing: 0;
            color: var(--title_color);
            font: 600 16px/25px var(--title_font);
        }
        body .services .gform_wrapper ul li.gfield {
            margin-top: 0px !important;
        }
        .services #formModal h5 {
            color: var(--title_color);
            font: 400 32px/36px var(--title_font);
            text-transform: capitalize;
            padding-bottom: 18px;
        }
        /*End Form*/
        /*END FIX*/
        /*Responsivness*//*Responsivness*/
        @media (max-width: 767px) {
            .simple-text-1 {
                padding-top: 60px;
                padding-bottom: 10px;
            }
            .services .servicesCategory h3 {
                font-size: 28px;
            }
            .services #formModal .modal-dialog {
                width: calc(100% - 30px);
            }
            .services #formModal .gform_wrapper ul.gform_fields li.gfield#field_27_1,
            .services #formModal .gform_wrapper ul.gform_fields li.gfield#field_27_2,
            .services #formModal .gform_wrapper ul.gform_fields li.gfield#field_27_3,
            .services #formModal .gform_wrapper ul.gform_fields li.gfield#field_27_5 {
                width: 100%;
                float: none;
            }
            .services #formModal .gform_wrapper ul.gform_fields li.gfield#field_27_1,
            .services #formModal .gform_wrapper ul.gform_fields li.gfield#field_27_3 {
                padding-right: 0;
            }
            .services #formModal .gform_wrapper ul.gform_fields li.gfield#field_27_2,
            .services #formModal .gform_wrapper ul.gform_fields li.gfield#field_27_5 {
                padding-left: 0;
            }
            .services .conciergeModals .modal-header {
                padding: 25px 15px 15px 15px;
            }
            .services #formModal .modal-body {
                padding: 0 15px 15px 15px;
            }
            .services #formModal .requestList .bigLine {
                width: 100% !important;
                margin-bottom: 15px;
            }
            .services #formModal .gform_footer {
                margin-top: 10px !important;
            }
            .services #formModal .requestList {
                width: calc(100% - 30px);
                margin: 0 15px 15px 15px;
                padding-bottom: 1px;
            }
            .services #formModal .gform_wrapper .gform_body ul li label,
            .services #formModal .services_selected,
            .services #formModal .requestList .bigLine h3 {
                margin-top: 9px;
                margin-bottom: 9px;
            }
            body .gform_wrapper .top_label div.ginput_container {
                margin-top: 0px !important;
            }
            .services #formModal .gform_wrapper ul.gform_fields li.gfield {
                margin-bottom: 0px !important;
            }
        }
        @media (max-width: 640px) {
            .services #formModal .gform_wrapper ul.gform_fields li.gfield {
                margin-bottom: 0 !important;
            }
            #field_14_2 > label {
                margin-top: 0px !important;
            }
        }
        @media (max-width: 520px) {
            .gform_wrapper form .gform_body ul li {
                width: 100% !important;
                max-width: 100% !important;
            }
            .services #formModal .modal-content {
                padding: 40px 15px;
            }
            .services .item:hover .border-box {
                top: 10px;
                left: 10px;
                right: 10px;
                bottom: 10px;
                border: 1px solid rgba(0, 0, 0, 1);
            }
        }
        <?php endif;?>
    </style>
    <script>
        /*Append Variants*/
        var packageRequest = []; //array for pakages
        jQuery('.servicesCategory').each(function (index) {
            requestServ = [];
            var nameCat = jQuery(this).find('h3').text();
            requestServ[0] = nameCat;
            var requested = jQuery(this).find('.item').not('.withLink');
            var requestedL = requested.length;
            if (requestedL > 0) {
                i = 0;
                k = 1;
                do {
                    var insertText = jQuery(requested[i]).find('h4').text();
                    requestServ[k] = insertText;
                    i++;
                    k++;
                } while (i < requestedL);
            }
            packageRequest[index] = requestServ;
        });
        //alert(JSON.stringify(packageRequest, null, 4));
        /*Append elements*/
        var packageRequestL = packageRequest.length;
        i = 0;
        do {
            var inThereL = packageRequest[i].length;
            r = 0;
            if (inThereL > 1) {
                k = 0;
                do {
                    if (k == 0) {
                        var classProvide = packageRequest[i][k].replace(/ /g, '');
                        classProvide = classProvide.replace(/'/g, '');
                        var appendEL = '<div class="bigLine ' + classProvide + '"><h3>' + packageRequest[i][k] + '</h3><ul></ul></div>';
                        jQuery('#formModal .requestList > div').append(appendEL);
                        classProvide = '#formModal .requestList .' + classProvide + ' ul';
                    } else {
                        var appendEL = '<li><span class="acceptRequest"><span><i class="fa fa-check"></i></span></span><span>' + packageRequest[i][k] + '</span></li>';
                        jQuery(classProvide).append(appendEL);
                    }
                    k++;
                } while (inThereL > k);
            }
            i++;
        } while (i < packageRequestL);
        /*End Append Variants*/

        jQuery('.services .fixedRequestButton, .services .servicesCategory .requestLine span.button.requestPack').click(function (e) {
            e.preventDefault();
            packageRequest = [];
            if (jQuery(this).hasClass('requestPack')) {
                jQuery(this).parents('.item').addClass('active');
            }
            jQuery('.services #formModal .requestList li').removeClass('active');
            jQuery('.services .servicesCategory .item.active').each(function (index) {
                var takeTitle = jQuery(this).find('h4').text();
                packageRequest.push(takeTitle);
                jQuery('.services #formModal .requestList li').each(function () {
                    var hzText = jQuery(this).text();
                    if (hzText == takeTitle) {
                        jQuery(this).addClass('active');
                    }
                })
            })
            jQuery('.services #formModal .requestData input').val(packageRequest);
            jQuery('.services #formModal').modal('show');
        });

        jQuery('.services .servicesCategory .acceptRequest').click(function (e) {
            e.preventDefault();
            jQuery(this).parent().parent().toggleClass("active");
            var hzMuch = jQuery('.services .item.active');
            var hzMuchL = hzMuch.length;
            if (hzMuchL > 0) {
                jQuery('.services .fixedRequestButton').addClass('active');
            } else {
                jQuery('.fixedRequestButton').removeClass('active');
            }
        });

        jQuery('.services #requestStay').click(function (e) {
            e.preventDefault();
            var hzItem = jQuery('#articleModal h5').text();
            jQuery('.services .servicesCategory h4').each(function () {
                var hzTx = jQuery(this).text();
                if (hzItem == hzTx) {
                    jQuery(this).parent().parent().addClass('active');
                }
            })
            jQuery('.services .fixedRequestButton').addClass('active');
        });

        jQuery('.services #formModal .requestList li').click(function () {
            var hzCL = jQuery(this).hasClass('active');
            var takeText = jQuery(this).text();
            if (hzCL == true) {
                i = 0;
                var longCalc = packageRequest.length;
                do {
                    if (packageRequest[i] == takeText) {
                        packageRequest.slice(i);
                    }
                    i++;
                } while (i < longCalc);
                jQuery(this).removeClass('active');
            } else {
                packageRequest.push(takeText);
                jQuery('.services #formModal .requestData input').val(packageRequest);
                jQuery(this).addClass('active');
            }
        })

        jQuery('.services #formModal').on('hidden.bs.modal', function (e) {
            packageRequest = [];
            jQuery('.services #formModal .requestList li').each(function () {
                if (jQuery(this).hasClass('active')) {
                    var takeText = jQuery(this).find('span:last').text();
                    packageRequest.push(takeText);
                }
            })
            i = 0;
            var longArr = packageRequest.length;
            jQuery('.services .servicesCategory .item').removeClass('active');
            do {
                jQuery('.services .servicesCategory h4').each(function () {
                    var hzText = jQuery(this).text();
                    if (hzText == packageRequest[i]) {
                        jQuery(this).parent().parent().addClass('active');
                    }
                })
                i++;
            } while (i < longArr);
        })

        /*forse image size*/
        function conciergeItems() {
            var bI = jQuery('.services .item').width() / 350 * 485;
            jQuery('.services .imaged').height(bI);
        }

        conciergeItems();

        jQuery(window).resize(function () {
            conciergeItems();
        });/*End resize function*/
    </script>
</section><!--End services-->





