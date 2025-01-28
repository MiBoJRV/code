<?php global $mainVideoFFR;
$mainVideoFFR++; ?>

<section class="main-video main-video-ffr-<?php echo $mainVideoFFR; ?>" <?php echo get_sub_field('custom_class'); ?>>
    <div class="video-container">
        <video class="video" autoplay loop muted>
            <source  src="<?php echo get_sub_field('banner_video'); ?>" type="video/mp4">
            Your browser does not support the format of this video
        </video>
        <div class="main-video__content">
            <h1 class="main-video__title">
                <?php echo get_sub_field('title'); ?>
            </h1>
            <div class="main-video__btn">
                <a class="dialog_btn" href="<?php echo get_sub_field('button_link'); ?>">
                    <?php echo get_sub_field('button_text'); ?>
                </a>
            </div>
        </div>
        <?php $image = get_sub_field('mobile_banner_image'); ?>
        <img class="mobile-image" width="390" height="221" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
    </div>
    <?php if ($mainVideoFFR < 2): ?>
    <style>
		.main-video {
			position: relative;
			/*margin-top: 89px;*/
			/*margin-top: -140px;*/
		}
		@media only screen and (max-width: 991px) {
			.main-video {
				padding-top: 100px;
				padding-bottom: 160px;
                background: radial-gradient(70.71% 70.71% at 50% 50%, #110452 0%, #080326 100%);
				margin-top: 0;
			}
		}
		.main-video .video-container {
			overflow: hidden;
		}
		.main-video .video {
			width: 100%;
			height: auto;
		}
		@media only screen and (max-width: 991px) {
			.main-video .video {
				display: none;
			}
		}
		.main-video .mobile-image {
			display: none;
			width: 100%;
			height: auto;
			margin-top: 59px;
		}
		@media only screen and (max-width: 991px) {
			.main-video .mobile-image {
				display: block;
			}
		}
		.main-video__content {
			display: flex;
			flex-direction: column;
			align-items: center;
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%);
			z-index: 9;
			max-width: 950px;
			width: 100%;
		}
		@media only screen and (max-width: 991px) {
			.main-video__content {
				height: 100%;
			}
		}
		.main-video__title {
			font-size: 83px;
			font-weight: 700;
			line-height: 84px;
			color: #ffffff;
			text-align: center;
			margin-bottom: 64px;
			padding: 0 20px;
		}
		@media only screen and (max-width: 1024px) {
			.main-video__title {
				font-size: 53px;
			}
		}
		@media only screen and (max-width: 991px) {
			.main-video__title {
				font-size: 31px;
				line-height: 32px;
				margin: 0;
				top: 12px;
				position: absolute;
			}
		}
		@media only screen and (min-width: 360px) {
			.main-video__title {
				top: 49px;
			}
		}
		.main-video__btn {
			max-width: 494px;
			width: 100%;
		}
		@media only screen and (max-width: 991px) {
			.main-video__btn {
				position: absolute;
				bottom: 59px;
				max-width: 257px;
			}
		}
		.main-video__btn a {
			font-size: 32.4px;
			font-style: normal;
			font-weight: 700;
			line-height: 51px;
			text-transform: uppercase;
			color: #000000;
			display: flex;
			align-items: center;
			justify-content: center;
			max-width: 494px;
			width: 100%;
			padding: 10px;
			box-sizing: border-box;
			border-radius: 30px;
			background: #FF4B38;
			box-shadow: 0 2px 18px 0 rgba(23, 102, 193, 0.46);
			text-align: center;
		}
		.main-video__btn a:hover {
			background-color: #FF7F72;
		}
		.main-video__btn a:active {
			background-color: #E82E1A;
		}
		@media only screen and (max-width: 1024px) {
			.main-video__btn a {
				font-size: 24px;
			}
		}
		@media only screen and (max-width: 991px) {
			.main-video__btn a {
				font-size: 18.36px;
				line-height: 28.9px;
			}
		}
    </style>
    <?php endif; ?>
</section>