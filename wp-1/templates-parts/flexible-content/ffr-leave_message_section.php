<?php global $leaveMessageFFR;
$leaveMessageFFR++; ?>
<section class="leave-message leave-message-ffr-<?php echo $leaveMessageFFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="leave-message-content">
        <?php if (get_sub_field('section_title') != ''): ?>
            <h5 class="title">
                <?php echo get_sub_field('section_title'); ?>
            </h5>
        <?php endif; ?>
        <div class="leave-message__locations">
            <ul class="leave-message-list">
                <li class="leave-message-list__item">
                    <?php $image = get_sub_field('icon_block_1'); ?>
                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
                    <h3>
                        <?php echo get_sub_field('title_block_1'); ?>
                    </h3>
                    <p>
                        <?php echo get_sub_field('address'); ?>
                    </p>
                </li>
                <li class="leave-message-list__item">
                    <?php $image = get_sub_field('icon_block_2'); ?>
                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
                    <h3>
                        <?php echo get_sub_field('title_block_2'); ?>
                    </h3>
                    <p>
                        <a href="mailto:<?php echo get_sub_field('email'); ?>">
                            <?php echo get_sub_field('email'); ?>
                        </a>
                    </p>
                </li>
                <li class="leave-message-list__item">
                    <?php $image = get_sub_field('icon_block_3'); ?>
                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
                    <h3>
                        <?php echo get_sub_field('title_block_3'); ?>
                    </h3>
                    <p>
                        <?php if(get_sub_field('phone') != ''):?>
                        <span>International:</span>
                        <a href="tel:<?php echo get_sub_field('phone'); ?>">
                            <?php echo get_sub_field('phone'); ?>
                        </a>
                        <?php endif; ?>
                    </p>
                </li>
            </ul>
        </div>
    </div>
    <?php if ($leaveMessageFFR < 2): ?>
        <style>
			.leave-message {
				position: relative;
				max-width: 1920px;
				margin: -113px auto 131px auto;
                <?php if (get_sub_field('overlapping_the_section_above_q') != 'No'): ?>
                margin-top: <?php echo get_sub_field('overlapping_the_section_above_value'); ?>px;
				margin-bottom: 67px;
                <?php if(get_sub_field('section_margin_bottom') != ''):?>
                margin-bottom:<?php echo get_sub_field('section_margin_bottom'); ?>px;
                <?php endif; ?>
                <?php endif ?>
			}
			@media only screen and (max-width: 991px) {
				.leave-message {
					margin: 48px 0 0;
				}
			}
			.leave-message-content {
				width: 100%;
				margin: 0 auto;
				display: flex;
				position: relative;
				z-index: 9;
				flex-direction: column;
				max-width: 1440px;
				padding: 0 60px;
			}

            @media only screen and (max-width: 1200px) {
                .leave-message-content {
                    padding: 0 15px;
                }
            }
			@media only screen and (max-width: 991px) {
				.leave-message-content {
                    padding: 0 0 100px 0;
				}
			}
			.leave-message .title {
				color: #333;
				text-align: center;
				font-size: 39px;
                <?php if(get_sub_field('title_font_size') != ''):?>
                font-size:<?php echo get_sub_field('title_font_size'); ?>px;
                <?php endif; ?>
				font-weight: 700;
				line-height: 101.235%;
                margin-bottom: 162px;
                <?php if(get_sub_field('title_margin_bottom') != ''):?>
                margin-bottom: <?php echo get_sub_field('title_margin_bottom'); ?>px;
                <?php endif; ?>
			}
			@media only screen and (max-width: 991px) {
				.leave-message .title {
					font-size: 27px;
					line-height: 27px;
                    margin-bottom: 28px;
                    <?php if(get_sub_field('mobile_title_font_size') != ''):?>
                    font-size: <?php echo get_sub_field('mobile_title_font_size'); ?>px;
                    <?php endif; ?>
				}
			}
			.leave-message-list {
				display: flex;
				gap: 15px;
				align-items: center;
				justify-content: space-between;
				/*margin-top: 162px;*/
			}
			@media only screen and (max-width: 991px) {
				.leave-message-list {
					flex-direction: column;
					gap: 30px;
					/*margin-top: 28px;*/
                    padding: 0 10px;
				}
			}
			.leave-message-list__item {
				display: flex;
				flex-direction: column;
				align-items: center;
				justify-content: center;
				text-align: center;
				border-radius: 20px;
				background: #FFF;
				box-shadow: 0px 10px 60px 0px rgba(10, 45, 97, 0.1);
				width: 391.59px;
				height: 324px;
				padding: 40px;
                min-width: 300px;
                max-width: 391.59px;
			}
			@media only screen and (max-width: 991px) {
				.leave-message-list__item {
					padding: 20px;
					max-width: 360px;
					width: 100%;
					height: 324px;
				}
			}
			@media only screen and (max-width: 480px) {
				.leave-message-list__item {
					max-width: 100%;
				}
			}
			.leave-message-list__item:nth-child(2) {
				margin-top: -55px;
			}
			@media only screen and (max-width: 991px) {
				.leave-message-list__item:nth-child(2) {
					margin-top: 0;
				}
			}
			.leave-message-list__item img {
				margin-bottom: 29px;
			}
			.leave-message-list__item h3 {
				font-size: 18px;
				font-weight: 700;
				line-height: 18px;
				margin-bottom: 16px;
				color: #333;
			}
			.leave-message-list__item h5 {
				font-size: 14px;
				font-style: normal;
				font-weight: 700;
				line-height: 23.8px;
				margin-bottom: 22px;
				color: #333;
			}
			.leave-message-list__item p {
				font-size: 17px;
				font-weight: 700;
				line-height: 25.2px;
				color: #333;

			}
            .leave-message-list__item p {
                color: #666;
                font-size: 14px;
                font-style: normal;
                font-weight: 400;
                line-height: 25.2px;
            }
			.leave-message-list__item p a {
				color: #666;
                font-size: 14px;
                font-style: normal;
                font-weight: 400;
                line-height: 25.2px;
			}
        </style>
    <?php endif; ?>
</section>