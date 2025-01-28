<?php global $cookiesFFR;
$cookiesFFR++; ?>

<section class="cookies_policy cookies_policy-ffr-<?php echo $cookiesFFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="cookies_policy__content">
        <?php echo get_sub_field('cookies_policy'); ?>
    </div>
    <?php if ($cookiesFFR < 2): ?>
        <style>
			.cookies_policy__content {
				max-width: 1380px;
				margin: 0 auto;
				padding: 55px 60px 47px;
			}
			@media only screen and (max-width: 991px) {
				.cookies_policy__content {
					padding: 17px 15px 74px;
				}
			}
			.cookies_policy__content h1 {
				margin-bottom: 9px;
				color: #333;
				font-size: 47px;
				font-weight: 700;
				line-height: 48px;
			}
			@media only screen and (max-width: 991px) {
				.cookies_policy__content h1 {
					font-size: 36px;
					line-height: 28px;
					margin-bottom: 18px;
				}
			}
            .cookies_policy__content h2{
                color: #333;
                font-size: 26px;
                font-style: normal;
                font-weight: 400;
                line-height: 26px;
                margin-top: 100px;
            }
			.cookies_policy__content h3 {
				color: #333;
                font-size: 26px;
				font-style: normal;
				font-weight: 400;
				line-height: 26px;
				margin-bottom: 9px;
			}
			@media only screen and (max-width: 991px) {
				.cookies_policy__content h3 {
					font-size: 27px;
					line-height: 27px;
					margin-bottom: 8px;
				}
			}

            .cookies_policy__content h4 {
                color: #666;
                font-size: 15px;
                font-style: normal;
                font-weight: 400;
                line-height: 23.8px;
                margin-bottom: 8px;
            }

            .cookies_policy__content h5 {
                color: #666;
                font-size: 10px;
                font-style: normal;
                font-weight: 400;
                line-height: 23.8px;
                margin-bottom: 8px;
            }

            .cookies_policy__content h6 {
                color: #666;
                font-size: 15px;
                font-style: normal;
                font-weight: 400;
                line-height: 23.8px;
                margin-bottom: 8px;
            }
			.cookies_policy__content p {
				color: #666;
				font-size: 13px;
				font-weight: 400;
				line-height: 23.8px;
				margin-bottom: 13px;
			}

			.cookies_policy__content ul {
				margin-bottom: 13px;
			}
			.cookies_policy__content ul li {
				color: #666;
				font-size: 13px;
				font-weight: 400;
				line-height: 23.8px;
                padding-left: 0;
                list-style: disc;
                margin-left: 14px;
			}
			.cookies_policy__content a {
				color: #2EA3F2;
			}
        </style>
    <?php endif; ?>
</section>
