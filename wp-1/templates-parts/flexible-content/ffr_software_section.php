<?php global $softwareFFR;
$softwareFFR++; ?>
<section class="software software-ffr-<?php echo $softwareFFR; ?>" <?php echo get_sub_field('custom_class'); ?>>
    <div class="software-content">
        <div class="software-text">
        <span class="sub-title">
          <?php echo get_sub_field('sub_title'); ?>
        </span>
            <h3 class="title"><?php echo get_sub_field('title'); ?></h3>
            <p><?php echo get_sub_field('text'); ?></p>
            <a class="software-btn dialog_btn" href="<?php echo get_sub_field('button_link'); ?>" class="button">
                <?php echo get_sub_field('button_text'); ?>
            </a>
        </div>
        <div class="software-image">
            <?php $image = get_sub_field('main_image'); ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        </div>
    </div>
    <?php if ($softwareFFR < 2): ?>
        <style>
			.software {
				position: relative;
				max-width: 1920px;
				margin: 0 auto;
				height: 795px;
				background-image: url('<?php echo get_template_directory_uri(); ?>/images/ffr/software_bg-tr.webp');
				background-position: center;
				background-repeat: no-repeat;
			}
			@media only screen and (max-width: 991px) {
				.software {
					background-image: url('<?php echo get_template_directory_uri(); ?>/images/ffr/software_bg_mob2.webp');
					background-size: cover;
					background-position: bottom;
				}
			}
			@media only screen and (max-width: 991px) {
				.software {
					height: auto;
				}
			}
			.software-content {
				max-width: 1320px;
				width: 100%;
				margin: 0 auto;
				display: flex;
				position: relative;
				z-index: 9;
				gap: 82px;
				padding: 0 60px;
				max-width: 1440px;
			}
			@media only screen and (max-width: 991px) {
				.software-content {
					flex-direction: column;
					gap: 0;
				}
			}
            @media only screen and (max-width: 575.98px) {
                .software-content {
                    margin-bottom: 50px;
                }
            }
			.software-text {
				margin-top: 100px;
			}
			.software-text .sub-title {
				font-size: 30px;
				font-style: normal;
				font-weight: 700;
				line-height: 36px;
                color: #FF4B38;
			}
			.software-text .title {
				font-size: 55px;
				font-style: normal;
				font-weight: 700;
				line-height: 61.6px;
				color: #ffffff;
				padding: 11px 0 74px;
				position: relative;
			}
			@media only screen and (max-width: 991px) {
				.software-text .title {
                    font-size: 40px;
                    line-height: 61.6px;
					padding: 11px 0 66px;
				}
			}
			.software-text .title:after {
				content: "";
				position: absolute;
				left: 0;
				bottom: 46px;
				height: 2px;
				width: 100px;
				background-color: #FF4B38;
			}
			@media only screen and (max-width: 991px) {
				.software-text .title:after {
					bottom: 33px;
				}
			}
			.software-text p {
				font-size: 16px;
				font-style: normal;
				font-weight: 400;
				line-height: 30.6px;
				color: #ffffff;
			}
			@media only screen and (max-width: 991px) {
				.software-text p {
					font-size: 13px;
					line-height: 25.2px;
				}
			}
			@media only screen and (max-width: 991px) {
				.software-text {
					margin-top: 44px;
				}
			}
			.software-text .title {
				max-width: 346px;
				/*padding-bottom: 51px;*/
                position: relative;
			}

			/*.software-text .title:after {*/
			/*	content: none;*/
			/*}*/
			.software-text p {
				max-width: 622px;
			}
			.software-image {
				margin-top: 182px;
			}
			@media only screen and (max-width: 1200px) {
				.software-image {
					margin-top: 100px;
				}
			}
			@media only screen and (max-width: 991px) {
				.software-image {
					margin-top: 58px;
					display: flex;
					justify-content: center;
				}
			}
			.software-image img {
				width: 100%;
				height: auto;
				max-width: 447px;
			}
			.software-btn {
				background: #FF7277;
				margin-top: 43px;
				max-width: 215px;
				padding: 20px 29px 20px 29px;
				border-radius: 100px;
				box-shadow: 0 20px 40px -10px rgba(0, 65, 131, 0.4);
				display: flex;
				align-items: center;
				justify-content: center;
				width: 100%;
				color: #ffffff;
				font-size: 14px;
				font-weight: 700;
				line-height: 23.8px;
				text-transform: uppercase;
			}
			.software-btn:hover {
				background-color: #FF263D;
			}
			.software-btn:active {
				background-color: #D5141D;
			}
			@media only screen and (max-width: 991px) {
				.software-btn {
					margin-top: 34px;
				}
			}
        </style>
    <?php endif; ?>
</section>