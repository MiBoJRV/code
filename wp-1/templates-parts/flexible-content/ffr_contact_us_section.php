<?php $contactUsFFR++; ?>

<section class="contact-us contact-us-ffr-<?php echo $contactUsFFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="contact-us__content">
        <div class="contact-us__company">
            <h3><?php echo get_sub_field('title'); ?></h3>
            <div class="phone">
                <p class="phone-number">
                    International:
                    <a href="tel:<?php echo get_sub_field('phone'); ?>">
                        <?php echo get_sub_field('phone'); ?>
                    </a>
                    Canada: 
                    <a href="tel:<?php echo get_sub_field('phone_2'); ?>">
                        <?php echo get_sub_field('phone_2'); ?>
                    </a>
                </p>
            </div>
            <div class="address">
                <p>
                    <?php echo get_sub_field('address'); ?>
                </p>
            </div>
            <div class="work-schedule">
                <p><?php echo get_sub_field('work_schedule'); ?></p>
            </div>
        </div>
        <div class="contact-us__get-started">
            <h3><?php echo get_sub_field('title_#2'); ?></h3>
            <p><?php echo get_sub_field('slogan'); ?></p>
            <a class="contact-us__btn dialog_btn" href="<?php echo get_sub_field('button_link'); ?>">
                <?php echo get_sub_field('button_text'); ?>
            </a>
        </div>
    </div>
    <div class="bg-image">
        <img class="desktop" src="<?php echo get_template_directory_uri(); ?>/images/ffr/contact_bg_bottom.webp" alt="bg">
    </div>
    <?php if ($contactUsFFR < 2): ?>
    <style>
		.contact-us {
			position: relative;
			padding-bottom: 141px;
			overflow: hidden;
			z-index: 9;
		}
		@media only screen and (max-width: 991px) {
			.contact-us {
				padding-bottom: 36px;
			}
		}
		.contact-us__content {
			max-width: 1320px;
			width: 100%;
			margin: 0 auto;
			display: flex;
			position: relative;
			z-index: 9;
			max-width: 1260px;
			justify-content: space-between;
			position: relative;
			z-index: 9;
			background: #ffffff;
			border-radius: 10px;
			background: #FFF;
			box-shadow: 0 40px 60px -8px rgba(10, 45, 97, 0.48);
		}
		@media only screen and (max-width: 991px) {
			.contact-us__content {
				flex-direction: column;
			}
		}
		.contact-us h3 {
			font-size: 55px;
			font-weight: 700;
			line-height: 61.6px;
			color: #333;
			margin-top: 59px;
		}
		@media only screen and (max-width: 991px) {
			.contact-us h3 {
				font-size: 48px;
				line-height: 52.8px;
			}
		}
		.contact-us p {
			font-size: 14px;
			font-weight: 400;
			line-height: 25.2px;
			color: #666;
		}
		.contact-us__company {
			padding: 0 40px 40px 40px;
			border-radius: 10px 0 0 10px;
			min-width: 375px;
		}
		@media only screen and (max-width: 991px) {
			.contact-us__company {
				margin-bottom: 90px;
			}
		}
		.contact-us__company h3 {
			margin-bottom: 44px;
		}
		.contact-us__company .phone-number {
			margin-bottom: 34px;
			padding-left: 47px;
			position: relative;
		}
		.contact-us__company .phone-number:before {
			content: "";
			position: absolute;
			left: 0;
			width: 22px;
			height: 22px;
			background-image: url('<?php echo get_template_directory_uri(); ?>/images/ffr/phone.svg');
		}
		.contact-us__company .phone-number a {
			font-size: 14px;
			font-weight: 400;
			line-height: 25.2px;
			color: #666;
		}
		.contact-us__company .address {
			margin-bottom: 14px;
			padding-left: 47px;
			position: relative;
		}
		.contact-us__company .address p {
			font-size: 17px;
			font-weight: 700;
			line-height: 25.2px;
			color: #333;
		}
		.contact-us__company .address p:before {
			content: "";
			position: absolute;
			left: 0;
			width: 17px;
			height: 24px;
			background-image: url('<?php echo get_template_directory_uri(); ?>/images/ffr/location.svg');
		}
		.contact-us__company .work-schedule {
			padding-left: 47px;
		}
		.contact-us__get-started {
			background-image: url('<?php echo get_template_directory_uri(); ?>/images/ffr/contact_bg.webp');
			background-repeat: no-repeat;
			max-width: 703px;
			width: 100%;
			flex-direction: column;
			display: flex;
			justify-content: center;
			align-items: end;
			padding-right: 58px;
			border-radius: 0 10px 10px 0;
		}
		@media only screen and (max-width: 991px) {
			.contact-us__get-started {
				background-image: url('<?php echo get_template_directory_uri(); ?>/images/ffr/contact_bg_mob.webp');
				background-size: cover;
				max-width: 100%;
				display: flex;
				justify-content: center;
				align-items: center;
				padding: 0;
			}
		}
		.contact-us__get-started h3 {
			margin-bottom: 36px;
		}
		.contact-us__get-started p {
			margin-bottom: 44px;
		}
		.contact-us__btn {
			background: radial-gradient(70.71% 70.71% at 50% 50%, #160070 0%, #34004C 100%);
			color: #ffffff;
			margin-bottom: 73px;
			margin-top: 0;
			max-width: 207px;
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
		.contact-us__btn:hover {
			background: radial-gradient(70.71% 70.71% at 50% 50%, #640FA7 0%, #3C0058 100%);
			text-shadow: 0 0 14px #FFF;
		}
		.contact-us__btn:active {
			background: radial-gradient(70.71% 70.71% at 50% 50%, #432265 0%, #40005E 100%);
			text-shadow: none;
		}
		.contact-us .bg-image {
			position: absolute;
			top: 92px;
			z-index: 1;
			transform: translate(-50%, 0px);
			left: 50%;
		}
		.contact-us .bg-image img {
			max-width: initial;
        }
		@media only screen and (max-width: 991px) {
			.contact-us .bg-image {
				bottom: -37px;
				top: auto;
			}
		}

		.contact-us.not, .contact-us.bg {
			background: #15045C;
			padding-top: 18px;
		}
    </style>
    <?php endif; ?>
</section>