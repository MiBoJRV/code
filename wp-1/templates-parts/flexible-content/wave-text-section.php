<?php $waveSection++; ?>
<div class="wave-section WS-<?php echo $waveSection; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="lets-talk-box">
        <?php if (get_sub_field('customize_wave_text_section') == 'yes'): ?>
            <h2><?php echo get_sub_field('wave_text_section_title'); ?></h2>
            <?php echo get_sub_field('wave_text_section_text'); ?>
            <?php if (get_sub_field('wave_text_section_button_text') != ''): ?>
                <div class="lets-talk-btn">
                    <a href="<?php echo get_sub_field('wave_text_section_button_link'); ?>"><?php echo get_sub_field('wave_text_section_button_text'); ?>
                        <i class="fas fa-arrow-right"></i></a>
                </div>
            <?php endif; ?>
        <?php else: ?>
            <h2>Interested? Let's Talk</h2>
            <p>Interested in the Bizcor Vacations Difference? The more we know about you and your property, the better
               we’ll be able to tailor a solution to your needs. However, we also
               understand if you’re in the “just looking” or “exploration” phase. We will try our best to provide you
               with information, experiences and some industry best practices.</p>
            <p>This form allows you to give us as much or as little as you’d like; the only required fields are your
               contact info and the type of property. Once you click submit, we’ll be
               in touch as soon as possible. Thank you for choosing our Bizcor Property Management Services!</p>
            <div class="lets-talk-btn">
                <a href="#">Tell Us About Your Property <i class="fas fa-arrow-right"></i></a>
            </div>
        <?php endif; ?>
    </div>
    <style>
        /*wave-section*/
        <?php if(get_sub_field('customize_font_size')=='yes'): ?>
        .wave-section.WS-<?php echo $waveSection;?> .lets-talk-box h2 {
            font-size: <?php the_sub_field('title_font_size'); ?>;
        }
        .wave-section.WS-<?php echo $waveSection;?> .lets-talk-box p {
            font-size: <?php the_sub_field('text_font_size'); ?>;
        }
        .wave-section.WS-<?php echo $waveSection;?> .lets-talk a {
            font-size: <?php the_sub_field('button_font_size'); ?>;
        }
        <?php endif; ?>
        .wave-section.WS-<?php echo $waveSection;?>::before {
            background-image: url('<?php the_sub_field('wave_text_section_background'); ?>');
        }
        <?php if($waveSection < 2):?>
        .wave-section {
            position: relative;
            padding: 115px 0;
            z-index: 0;
            color: #fff;
        }
        /*.page-id-299 .wave-section{
            padding: 75px 100px;    
        }
        .page-id-299 .wave-section.WS-1{
            background: #FAFAFA;
        }*/
        .wave-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-background-size: cover;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            z-index: -1;
            /*opacity: .1;*/
        }
        .wave-section .lets-talk-box h2 {
            text-align: center;
            margin: 0 auto 40px;
            color: #292929;
            position: relative;
        }
        /*.page-id-299 .wave-section .lets-talk-box{
            max-width: 980px;
        }
        .page-id-299 .wave-section .lets-talk-box h2{
            color: #1D345D;
        }
        .wave-section .lets-talk-box h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 130px;
            height: 2px;
            background: var(--main_color);
        }*/
        .wave-section .lets-talk-box h2 span {
            font: 500 20px/22px var(--body_font);
            letter-spacing: 0px;
            color: rgba(255, 255, 255, 0.75);
            text-transform: uppercase;
            display: block;
            margin-bottom: 6px;
        }
        /*.page-id-299 .wave-section .lets-talk-box h2 span{
            color: rgba(29, 52, 93, 0.75);
        }*/
        .wave-section .lets-talk-box {
            max-width: 930px;
            margin: 0 auto;
            padding: 0 15px;
        }
        .wave-section .lets-talk-box ul {
            column-count: 3;
            padding-left: 15px;
            margin-bottom: 0;
            list-style-position: outside;
        }
        .wave-section .lets-talk-box ul li {
            font: 500 16px/28px var(--body_font);
            letter-spacing: 0px;
            color: #FFFFFF;
        }
        .wave-section .lets-talk-btn {
            text-align: center;
        }
        .wave-section a {
            display: inline-block;
            background-color: var(--second_color);
            color: #fff;
            padding: 20px 40px;
            box-sizing: border-box;
            text-transform: uppercase;
            font: 500 16px/25px var(--paragraph_font);
            min-width: 200px;
            margin-top: 15px;
        }
        .wave-section a i {
            display: none;
        }
        .wave-section a:hover {
            background: var(--main_color);
        }
        .wave-section .lets-talk-box p {
            color: rgba(41, 41, 41, 0.75);
            margin-bottom: 25px;
            font: 400 16px/28px var(--paragraph_font);
            text-align: center;
        }
        /*.page-id-299 .wave-section .lets-talk-box p{
            color: rgba(41, 41, 41, 0.7);
        }
        .page-id-299 .wave-section .lets-talk-box ul{
            margin-bottom: 25px;
        }
        .page-id-299 .wave-section .lets-talk-box ul li{
            color: #292929;
        }*/
        /*Responsivness*//*Responsivness*//*Responsivness*/
        @media (max-width: 1200px) {
            .wave-section {
                padding: 50px 15px;
            }
        }
        @media screen and (max-width: 991px) {
            .wave-section .lets-talk-box h2 {
                font-size: 32px;
            }
        }
        @media screen and (max-width: 767px) {
            .wave-section {
                padding: 50px 30px 70px !important;
            }
            .wave-section .lets-talk-box ul {
                column-count: 2;
            }
        }
        @media screen and (max-width: 500px) {
            .wave-section .lets-talk-box ul {
                column-count: 1;
            }
        }
        <?php endif; ?>
    </style>
    <script type="text/javascript">
        jQuery('.wave-section a').click(function (e) {
            e.preventDefault();
            jQuery('html, body').animate({scrollTop: 0}, 800);
        });
    </script>
</div><!--End lets-talk-->



