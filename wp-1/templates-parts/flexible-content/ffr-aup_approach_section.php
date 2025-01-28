<?php global $approachFFR;
$approachFFR++; ?>

<section class="approach approach-ffr-<?php echo $approachFFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="top-bg">
       <img src="<?php echo get_stylesheet_directory_uri() ?>/images/ffr/about_us_page_top.webp" alt="#">
    </div>
    <div class="approach-content">
        <div class="approach-text">
        <span class="sub-title">
         <?php echo get_sub_field('subtitle'); ?>
        </span>
            <h3 class="title">
                <?php echo get_sub_field('title'); ?>
            </h3>
            <p>
                <?php echo get_sub_field('text'); ?>
            </p>
            <a class="approach-btn dialog_btn" href=" <?php echo get_sub_field('button_link'); ?>">
                <?php echo get_sub_field('button_text'); ?>
            </a>
        </div>
        <div class="approach-image">
            <?php $image = get_sub_field('main_desktop_image');?>
            <img class="desktop" src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>" />
            <?php $image = get_sub_field('main_mobile_image');?>
            <img class="mobile" src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>" />
        </div>
    </div>
    <?php if ($approachFFR < 2): ?>
        <style>
			.approach {
				position: relative;
				margin: 0 auto;
				height: 960px;
				background-size: cover;
				background-image: url('<?php echo get_template_directory_uri(); ?>/images/ffr/about_us_page_aproach_bg.webp');
				background-position: bottom;
				background-repeat: no-repeat;
			}
			@media only screen and (max-width: 991px) {
				.approach {
                    background-image: url('<?php echo get_template_directory_uri(); ?>/images/ffr/about_us_page_aproach_bg_mob1.webp');
					background-size: 100% 860px;
					background-repeat: no-repeat;
					background-position: top;
				}
			}
			@media only screen and (max-width: 991px) {
				.approach {
					height: auto;
				}
			}
			.approach .top-bg {
				display: none;
			}
			@media only screen and (max-width: 991px) {
				.approach .top-bg {
					display: block;
					position: absolute;
					width: 100%;
					top: 0;
				}
			}
			.approach .top-bg img {
				width: 100%;
				height: auto;
			}
			.approach-content {
				max-width: 1320px;
				width: 100%;
				margin: 0 auto;
				display: flex;
				position: relative;
				z-index: 9;
				gap: 36px;
				padding: 207px 60px 0;
				max-width: 1440px;
			}
			@media only screen and (max-width: 991px) {
				.approach-content {
					flex-direction: column;
					gap: 0;
					padding: 0 15px 36px;
				}
			}
			.approach-text {
				margin-top: 27px;
			}
			.approach-text .sub-title {
				font-size: 30px;
				font-style: normal;
				font-weight: 700;
				line-height: 36px;
				color: #FE8275;
			}
			@media only screen and (max-width: 991px) {
				.approach-text .sub-title {
					font-size: 18px;
					line-height: 21.6px;
				}
			}
			.approach-text .title {
				font-size: 55px;
				font-style: normal;
				font-weight: 700;
				line-height: 61.6px;
				color: #ffffff;
				padding: 11px 0 74px;
				position: relative;
			}
			@media only screen and (max-width: 991px) {
				.approach-text .title {
					font-size: 25px;
					line-height: 28.6px;
					padding: 11px 0 66px;
				}
			}
			.approach-text .title:after {
				content: "";
				position: absolute;
				left: 0;
				bottom: 46px;
				height: 2px;
				width: 100px;
				background-color: #FE8275;
			}
			@media only screen and (max-width: 991px) {
				.approach-text .title:after {
					bottom: 33px;
				}
			}
			.approach-text p {
				font-size: 16px;
				font-style: normal;
				font-weight: 400;
				line-height: 30.6px;
				color: #ffffff;
			}
			@media only screen and (max-width: 991px) {
				.approach-text p {
					font-size: 13px;
					line-height: 25.2px;
				}
			}
			@media only screen and (max-width: 991px) {
				.approach-text {
					margin-top: 87px;
				}
			}
			.approach-text .sub-title {
				font-size: 30px;
				font-weight: 700;
				line-height: 36px;
			}
			.approach-text .title {
				max-width: 624px;
				padding-bottom: 51px;
				font-size: 31px;
				font-weight: 700;
				line-height: 35.2px;
			}
			@media only screen and (max-width: 991px) {
				.approach-text .title {
					padding-bottom: 43px;
				}
			}
			.approach-text .title:after {
				content: none;
			}
			.approach-text p {
				max-width: 622px;
			}
			@media only screen and (max-width: 991px) {
				.approach-text p {
					max-width: 100%;
					font-weight: 700;
				}
			}
			@media only screen and (max-width: 991px) {
				.approach-image {
					margin-top: 42px;
					display: flex;
					justify-content: center;
				}
			}
			.approach-image img {
				width: 100%;
				height: auto;
				max-width: 576px;
			}
			@media only screen and (max-width: 991px) {
				.approach-image img.desktop {
					display: none;
				}
			}
			.approach-image img.mobile {
				display: none;
			}
			@media only screen and (max-width: 991px) {
				.approach-image img.mobile {
					display: block;
					object-fit: contain;
					max-width: 400px;
				}
			}
			@media only screen and (max-width: 480px) {
				.approach-image img.mobile {
					max-width: 100%;
				}
			}
			.approach-btn {
				padding: 13px 0 14.8px 0;
				font-size: 14px;
				font-weight: 700;
				line-height: 23.8px;
				text-transform: uppercase;
				color: #FF4B38;
				border: 2px solid #FF4B38;
				border-radius: 100px;
				display: flex;
				align-items: center;
				justify-content: center;
				max-width: 305px;
				height: 52px;
				box-sizing: border-box;
				margin-top: 60px;
				max-width: 290px;
				padding: 0;
			}
			.approach-btn:hover {
				background-color: rgba(255, 255, 255, 0.15);
			}
			.approach-btn:active {
				border-color: #BB1123;
				background-color: transparent;
			}
			.approach-btn:hover {
				background-color: rgba(255, 255, 255, 0.15);
			}
			.approach-btn:active {
				border-color: #BB1123;
				background-color: transparent;
			}
			@media only screen and (max-width: 991px) {
				.approach-btn {
					margin: 34px auto 0;
				}
			}
        </style>
    <?php endif; ?>
</section>