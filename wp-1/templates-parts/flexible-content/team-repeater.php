<?php $teamList++; ?>
<section class="teamList TS-<?php echo $teamList; ?>">
    <?php if (have_rows('team_repeater_section')): ?>
        <?php while (have_rows('team_repeater_section')): the_row(); ?>
            <div class="reservation-team">
                <h2><?php the_sub_field('team_repeater_section_title'); ?></h2>
                <div class="team-box">
                    <?php if (have_rows('team_repeater_members')): ?>
                        <?php while (have_rows('team_repeater_members')): the_row(); ?>
                            <div class="team-block-margin">
                                <div class="team-block" data-toggle="modal" data-target="#teamModal">
                                    <div class="team-block-image">
                                        <img src="<?php the_sub_field('team_repeater_members_photo'); ?>" alt="#">
                                    </div>
                                    <div class="team-block-text">
                                        <h3><?php the_sub_field('team_repeater_members_name'); ?></h3>
                                        <div class="member_data">
                                            <p class="members_position"><?php the_sub_field('team_repeater_members_position'); ?> </p>
                                            <?php if (get_sub_field('team_repeater_members_email') != ''): ?>
                                                <a href="mailto:<?php the_sub_field('team_repeater_members_email'); ?>" class="members_mail"> <?php the_sub_field('team_repeater_members_email'); ?></a>
                                            <?php endif; ?>
                                            <?php if (get_sub_field('team_repeater_members_phone') != ''): ?>
                                                <a href="tel:<?php the_sub_field('team_repeater_members_phone'); ?>" class="members_phone"> <?php the_sub_field('team_repeater_members_phone'); ?></a>
                                            <?php endif; ?>
                                        </div>
                                        <p class="description"><?php the_sub_field('team_repeater_members_descr'); ?></p>
                                    </div>
                                </div><!-- end team-block -->
                            </div><!-- end team-block-margin -->
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div><!-- end team-box -->
            </div><!-- end reservation-team -->
        <?php endwhile; ?>
    <?php endif; ?>
    <style>
        /*team*/
        <?php if(get_sub_field('customize_font_size')=='yes'): ?>
        .TS-<?php echo $teamList;?> .reservation-team h2 {
            font-size: <?php the_sub_field('section_title_font_size'); ?>;
        }
        .TS-<?php echo $teamList;?> .team-block-text h3 {
            font-size: <?php the_sub_field('member_name_font_size'); ?>;
        }
        .TS-<?php echo $teamList;?> .team-block-text p {
            font-size: <?php the_sub_field('member_position_font_size'); ?>;
        }
        <?php else: ?>
        .team-block-text h3 {
            font-size: 28px;
        }
        <?php endif; ?>
        <?php if($teamList < 2):?>
        .team-block-margin .members_mail, .team-block-margin .members_phone {
            display: none;
            transition: 0.4s;
        }
        .teamList {
            padding-bottom: 80px;
            background-color: #F3F3F3;
        }
        .reservation-team {
            padding-top: 100px;
        }
        .reservation-team:last-child {
            padding-bottom: 70px;
        }
        .reservation-team h2 {
            margin: 0 auto 40px;
            text-align: center;
            color: #292929;
            text-transform: uppercase;
        }
        .team-box {
            text-align: center;
            max-width: 1206px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            padding: 0 10px;
        }
        .team-block {
            height: auto !important;
            position: relative;
            box-shadow: 1px 6px 10px 0px rgba(0, 0, 0, 0.16);
            transition: all linear .2s;
        }
        .team-block:hover {
            cursor: pointer;
            transform: scale(1.05);
            box-shadow: none;
            box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.16);
        }
        .team-block-margin {
            padding: 10px;
            flex: 0 0 33.3333%;
        }
        .team-block-image {
            background: #4A4A4A;
            overflow: hidden;
        }
        .team-block-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .team-block-text {
            padding: 15px;
            background-color: #fff;
        }
        .team-block-text h3 {
            margin: 0 auto 4px;
            color: #292929;
            text-transform: uppercase;
            font-size: 24px;
        }
        .team-block-text h3:after {
            content: "";
            display: block;
            width: 40px;
            height: 2px;
            margin: 7px auto 0 auto;
            background: var(--main_color);
        }
        .team-block-text p {
            margin-bottom: 0;
            color: rgba(41, 41, 41, 0.75);
            font-size: 16px;
            font-weight: 500;
        }
        .team-block-text .description {
            display: none;
        }
        /*modal*/
        #teamModal {
            background: rgba(7, 8, 8, 0.8);
        }
        #teamModal .member_data {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }
        #teamModal .member_data a {
            letter-spacing: 0;
            font-size: 16px;
            color: rgba(41, 41, 41, 0.75);
            text-decoration: none;
            font-weight: 500;
            padding-left: 5px;
            border-left: 1px solid rgba(41, 41, 41, 0.75);
            margin-left: 5px;
        }
        #teamModal .member_data a:hover {
            color: var(--main_color);
        }
        #teamModal .team-block-text .description {
            display: block;
        }
        #teamModal .team-block-text h3:after {
            margin: 7px 0 0 0;
        }
        #teamModal .modal-dialog {
            max-width: 1100px;
            width: 100%;
            margin: 140px auto 0 auto;
            padding: 15px;
        }
        .modal-open .modal {
            z-index: 99999;
        }
        #teamModal .flex-box {
            display: flex;
            align-items: center;
        }
        #teamModal .modal-body {
            padding: 50px;
        }
        #teamModal .modal-content {
            padding: 0;
        }
        #teamModal .team-block-image {
            width: 300px;
            max-height: 350px;
        }
        #teamModal .team-block-text {
            width: calc(100% - 300px);
            padding-left: 70px;
        }
        #teamModal .description {
            display: block;
            line-height: 28px;
            color: rgba(41, 41, 41, 0.75);
            text-transform: inherit;
            margin-top: 30px;
            letter-spacing: 0;
            font-weight: 400;
        }
        #teamModal .close {
            position: absolute;
            right: 0;
            top: 0;
            transform: translate(50%, -50%);
            width: 35px;
            height: 35px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            overflow: hidden;
            background: var(--main_color);
            color: #fff;
            font-size: 32px;
            transition: .4s;
            text-shadow: none;
            opacity: 1;
            outline: none;
        }
        #teamModal .close:hover {
            background: var(--hover_color);
        }
        #teamModal .team-block-image a {
            top: 65px;
            left: 77px;
        }
        /*end modal*/
        /*Responsive*//*Responsive*//*Responsive*/
        @media (max-width: 1199px) {
            #teamModal .modal-body {
                padding: 30px;
            }
            #teamModal .team-block-text {
                padding-left: 40px;
            }
        }
        @media screen and (max-width: 991px) {
            .reservation-team h2 {
                padding: 10px 15px;
                text-align: center;
            }
            .team-block-margin {
                flex: 50% 0 0;
            }
            .reservation-team {
                padding-top: 60px;
            }
            .teamList {
                padding-bottom: 50px;
            }
        }
        @media screen and  (max-width: 767px) {
            .reservation-team {
                padding-top: 30px;
            }
            .reservation-team h2 {
                font-size: 36px;
                margin-bottom: 20px;
            }
            .team-block-margin {
                flex: 100%;
            }
            .team-block {
                min-height: 200px;
            }
            #teamModal .flex-box {
                flex-wrap: wrap;
            }
            #teamModal .team-block-image {
                width: 100%;
                max-height: 250px;
                margin-bottom: 10px;
            }
            #teamModal .team-block-text {
                width: 100%;
                padding: 0;
            }
            #teamModal .description {
                margin-top: 10px;
                max-height: 250px;
                overflow: hidden;
            }
            #teamModal .modal-dialog {
                margin-top: 110px;
            }
        }
         /**************************** FIX 4 columns ********************************/
        @media only screen and (max-width: 1920px) and (min-width: 1200px) {
            .team-box {
                max-width: 1580px;
            }
            .team-block-margin {
                flex: 0 0 25%;
            }
        }

        .team-block-text h3 {
            font: 400 24px/28px var(--title_font);
            color: var(--title_color);
            text-transform: capitalize;
        }
        .team-block-text h3:after {
            background: var(--second_color);
        }
        .team-block-text p {
            font: 500 16px/22px var(--paragraph_font);
            color: var(--paragraph_color);
        }
        .team-box {
            justify-content: end;
        }
        /*@media (max-width:1199px) {*/
        /*    .team-block-margin {*/
        /*        flex: 0 0 33.3333%;*/
        /*    }*/
        /*}*/

          /**************************** END  FIX 4 columns ****************************/
        <?php endif; ?>
    </style>
    <script>
        function teamItems<?php echo $teamList;?>() {
            var bI = jQuery('.team-block .team-block-image').width() / 375 * 360;
            jQuery('.team-block .team-block-image').height(bI);
        }

        teamItems<?php echo $teamList;?>();

        jQuery('.team-block').click(function () {
            var htmlModal = jQuery(this).html();
            jQuery('#teamModal .flex-box').html(htmlModal);
        })
        jQuery(window).resize(function () {

            teamItems<?php echo $teamList;?>();
        });/*End resize function*/
    </script>
    <?php if (get_sub_field('members_modal') == 'on'): ?>
        <?php $membersModal++; ?>
        <?php if ($membersModal < 2): ?>
            <!-- Modal -->
            <div id="teamModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times</button>
                            <div class="flex-box"><?php the_sub_field('team_repeater_members_descr'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif ?>
    <?php endif ?>
</section>

