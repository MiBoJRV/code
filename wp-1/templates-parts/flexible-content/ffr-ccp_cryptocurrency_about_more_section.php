<?php $cryptocurrencyAboutMoreFFR++; ?>
<section class="cryptocurrency-more cryptocurrency-about-more-ffr-<?php echo $cryptocurrencyAboutMoreFFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="cryptocurrency-more__content">
        <div class="cryptocurrency-more__image">
            <?php $image = get_sub_field('image');?>
            <img src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>" />
        </div>
        <div class="cryptocurrency-more__text">
        <span class="sub-title">
       <?php echo get_sub_field('subtitle'); ?>
        </span>
            <h3 class="title">
                <?php echo get_sub_field('title'); ?>
            </h3>
            <p>
                <?php echo get_sub_field('text'); ?>
            </p>
        </div>
    </div>
    <?php if ($cryptocurrencyAboutMoreFFR < 2): ?>
        <style>
			.cryptocurrency-more {
				position: relative;
				padding: 250px 0 215px;
				height: 1076px;
				margin: 0 auto;
                background-image: url('<?php echo get_template_directory_uri(); ?>/images/ffr/cryptocurrency_bg_bot_2.webp');
				background-repeat: no-repeat;
				background-size: cover;
			}
			@media only screen and (max-width: 991px) {
				.cryptocurrency-more {
					overflow: hidden;
					padding: 0 15px 149px;
					background-image: url('<?php echo get_template_directory_uri(); ?>/images/ffr/cryptocurrency_bgb.webp');
					height: auto;
				}
			}
			.cryptocurrency-more .bg-image {
				position: absolute;
				top: 0;
				overflow: hidden;
				z-index: 1;
				transform: translate(-50%, 0px);
				left: 50%;
				width: 100%;
			}
			@media only screen and (max-width: 991px) {
				.cryptocurrency-more .bg-image {
					display: none;
				}
			}
			.cryptocurrency-more .bg-image__mobile {
				position: absolute;
				top: 0;
				overflow: hidden;
				z-index: 1;
				transform: translate(-50%, 0px);
				left: 50%;
				width: 100%;
				width: 100%;
				display: none;
			}
			@media only screen and (max-width: 991px) {
				.cryptocurrency-more .bg-image__mobile {
					display: block;
				}
			}
			.cryptocurrency-more .bg-image__mobile img {
				width: 100%;
				height: auto;
			}
			.cryptocurrency-more__content {
				max-width: 1320px;
				width: 100%;
				margin: 0 auto;
				display: flex;
				position: relative;
				z-index: 9;
				gap: 10px;
			}
			@media only screen and (max-width: 991px) {
				.cryptocurrency-more__content {
					flex-direction: column;
					align-items: center;
				}
			}
			.cryptocurrency-more__image {
				padding: 0 0 54px 41px;
				width: 50%;
			}
			@media only screen and (max-width: 991px) {
				.cryptocurrency-more__image {
					width: 100%;
					padding: 0;
				}
			}
			.cryptocurrency-more__image img {
				width: 100%;
				height: auto;
			}
			.cryptocurrency-more__text {
				padding: 227px 41px 0 0;
				width: 50%;
			}
			@media only screen and (max-width: 991px) {
				.cryptocurrency-more__text {
					width: 100%;
					padding: 0;
					margin-top: -46px;
				}
			}
			.cryptocurrency-more__text .sub-title {
				color: #ffffff;
				font-size: 22px;
				font-weight: 400;
				line-height: 22px;
				margin-bottom: 7px;
				display: inline-block;
			}
			.cryptocurrency-more__text .title {
				color: #ffffff;
				font-size: 26px;
				font-weight: 400;
				line-height: 26px;
				position: relative;
				padding-bottom: 70px;
			}
			.cryptocurrency-more__text .title:after {
				content: "";
				position: absolute;
				left: 0;
				bottom: 34px;
				height: 2px;
				width: 100px;
				background-color: #FE8275;
			}
			@media only screen and (max-width: 991px) {
				.cryptocurrency-more__text .title:after {
					bottom: 33px;
				}
			}
			.cryptocurrency-more__text p {
				max-width: 623px;
				width: 100%;
				color: #ffffff;
				font-size: 13px;
				font-weight: 400;
				line-height: 23.8px;
			}
			.cryptocurrency-more__text p:nth-of-type(2) {
				margin-top: 22px;
			}
			.cryptocurrency-more__text .about-btn {
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
				margin-top: 43px;
			}
			.cryptocurrency-more__text .about-btn:hover {
				background-color: rgba(255, 255, 255, 0.15);
			}
			.cryptocurrency-more__text .about-btn:active {
				border-color: #BB1123;
				background-color: transparent;
			}
			.cryptocurrency-more .bottom-image {
				position: absolute;
				right: 0;
				bottom: -210px;
				z-index: 2;
			}
			@media only screen and (max-width: 991px) {
				.cryptocurrency-more .bottom-image {
					bottom: 0;
				}
			}
			.cryptocurrency-more .bottom-image img {
				width: 100%;
				height: auto;
			}
			@media only screen and (max-width: 1440px) {
				.cryptocurrency-more .bottom-image img {
					max-width: 500px;
				}
			}
			@media only screen and (max-width: 991px) {
				.cryptocurrency-more .bottom-image img.desktop {
					display: none;
				}
			}
			.cryptocurrency-more .bottom-image img.mobile {
				display: none;
			}
			@media only screen and (max-width: 991px) {
				.cryptocurrency-more .bottom-image img.mobile {
					display: block;
				}
			}
        </style>
    <?php endif; ?>
</section>