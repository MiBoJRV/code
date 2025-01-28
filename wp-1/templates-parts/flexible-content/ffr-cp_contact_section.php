<?php global $contactFFRCP;
$contactFFRCP++; ?>

<section class="contact contact-ffrcp-<?php echo $contactFFRCP; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="contact__content">
        <div class="contact__text">
            <h1 class="title">
                <?php echo get_sub_field('title'); ?>
            </h1>
            <p class="text">
                <?php echo get_sub_field('text'); ?>
            </p>
            <address>
                <h5>
                    <?php echo get_sub_field('phone_number_text'); ?>
                </h5>
                <p>
                    <a href="tel: <?php echo get_sub_field('phone_number'); ?>">
                        <?php echo get_sub_field('phone_number'); ?>
                    </a>
                </p>
                <h5>
                    <?php echo get_sub_field('email_text'); ?>
                </h5>
                <p>
                    <a href="mailto:<?php echo get_sub_field('email'); ?>">
                        <?php echo get_sub_field('email'); ?>
                    </a>
                </p>
            </address>
        </div>
        <div class="contact__image">
            <?php $image = get_sub_field('image');?>
            <img src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>" />
        </div>
    </div>
    <?php if ($contactFFRCP < 2): ?>
        <style>
			.contact {
				background-image: url('<?php echo get_template_directory_uri(); ?>/images/ffr/contact-us_bg.png');
				background-repeat: no-repeat;
				background-size: cover;
				position: relative;
			}
			.contact__content {
				width: 100%;
				margin: 0 auto 0 auto;
				display: flex;
				align-items: flex-start;
				position: relative;
				z-index: 9;
				gap: 40px;
				padding: 130px 65px 80px;
				max-width: 1440px;
				justify-content: space-between;
			}
			@media only screen and (max-width: 991px) {
				.contact__content {
					padding: 58px 20px 19px;
				}
			}
			.contact__text {
				margin-left: 20px;
			}
			.contact__text .title {
				color: #ffffff;
				font-size: 83px;
				font-style: normal;
				font-weight: 700;
				line-height: 84px;
				margin-bottom: 44px;
				white-space: nowrap;
			}
			@media only screen and (max-width: 991px) {
				.contact__text .title {
					font-size: 32px;
					line-height: 32px;
					margin-bottom: 41px;
				}
			}
			.contact__text .text {
				color: #ffffff;
				font-size: 13px;
				font-style: normal;
				font-weight: 400;
				line-height: 23.8px;
				margin-bottom: 42px;
				max-width: 514px;
			}
			@media only screen and (max-width: 991px) {
				.contact__text .text {
					font-size: 13px;
					line-height: 23.8px;
					margin-bottom: 36px;
				}
			}
			.contact__text address h5 {
				color: #FF7277;
				font-size: 29px;
				font-weight: 700;
				line-height: 36px;
				font-style: normal;
				margin-bottom: 21px;
			}
			.contact__text address p {
				margin-bottom: 41px;
			}
			.contact__text address p a {
				color: #ffffff;
				font-size: 16px;
				font-style: normal;
				font-weight: 400;
				line-height: 16px;
			}
			@media only screen and (max-width: 991px) {
				.contact__image {
					display: none;
				}
			}
			.contact__image img {
				width: 100%;
				height: auto;
			}
        </style>
    <?php endif; ?>
</section>


