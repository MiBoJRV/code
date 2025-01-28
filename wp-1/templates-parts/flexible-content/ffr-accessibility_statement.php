<?php global $accessibilityFFR;
$accessibilityFFR++; ?>

<section class="accessibility_statement accessibility_statement-ffr-<?php echo $accessibilityFFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="accessibility_statement__content">
        <?php echo get_sub_field('accessibility_statement'); ?>
    </div>
    <?php if ($accessibilityFFR < 2): ?>
        <style>
			.accessibility_statement__content {
				max-width: 1380px;
				margin: 0 auto;
				padding: 55px 60px 47px;
			}
			@media only screen and (max-width: 991px) {
				.accessibility_statement__content {
					padding: 17px 15px 74px;
				}
			}
			.accessibility_statement__content h1 {
				margin-bottom: 9px;
				color: #333;
				font-size: 47px;
				font-weight: 700;
				line-height: 48px;
			}
			@media only screen and (max-width: 991px) {
				.accessibility_statement__content h1 {
					font-size: 36px;
					line-height: 28px;
					margin-bottom: 18px;
				}
			}
            .accessibility_statement__content h2{
                color: #333;
                font-size: 26px;
                font-style: normal;
                font-weight: 400;
                line-height: 26px;
                margin-top: 100px;
            }
			.accessibility_statement__content h3 {
				color: #333;
                font-size: 26px;
				font-style: normal;
				font-weight: 400;
				line-height: 26px;
                margin-bottom: 20px;
			}
			@media only screen and (max-width: 991px) {
				.accessibility_statement__content h3 {
					font-size: 27px;
					line-height: 27px;
					margin-bottom: 20px;
				}
			}
            .accessibility_statement__content h3.mt {
                margin-top: 100px;
            }

            .accessibility_statement__content h4 {
                color: #666;
                font-size: 15px;
                font-style: normal;
                font-weight: 400;
                line-height: 23.8px;
                margin-bottom: 8px;
            }

            .accessibility_statement__content h5 {
                color: #666;
                font-size: 10px;
                font-style: normal;
                font-weight: 400;
                line-height: 23.8px;
                margin-bottom: 8px;
            }

            .accessibility_statement__content h6 {
                color: #666;
                font-size: 15px;
                font-style: normal;
                font-weight: 400;
                line-height: 23.8px;
                margin-bottom: 8px;
            }
			.accessibility_statement__content p {
				color: #666;
				font-size: 13px;
				font-weight: 400;
				line-height: 23.8px;
				margin-bottom: 20px;
			}
			.accessibility_statement__content ul {
				margin-bottom: 20px;
			}
			.accessibility_statement ul li {
				color: #666;
				font-size: 13px;
				font-weight: 400;
				line-height: 23.8px;
                padding-left: 0;
                list-style: disc;
                margin-left: 14px;
			}
            .accessibility_statement__content ul.list li {
                list-style: none;
                margin-left: 0;
            }
			.accessibility_statement__content a {
				color: #2EA3F2;
			}
        </style>
    <?php endif; ?>
</section>
