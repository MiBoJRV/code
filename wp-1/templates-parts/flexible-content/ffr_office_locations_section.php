<?php global $ourOfficeFFR;
$ourOfficeFFR++; ?>
<section class="our-office our-office-ffr-<?php echo $ourOfficeFFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="our-office-content">
        <h3 class="title">Our Office Locations</h3>
        <div class="our-office__locations">
            <ul class="our-office-list">
                <?php if (have_rows('office_locations_block_repeater')): ?>
                    <?php while (have_rows('office_locations_block_repeater')): the_row(); ?>
                        <li class="our-office-list__item">
                            <?php $image = get_sub_field('icon'); ?>
                            <img class="item-icon" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                            <h4 class="our-office-title"><?php echo get_sub_field('location'); ?></h4>
                            <h5><?php echo get_sub_field('about_location'); ?></h5>
                            <p>
                                <?php echo get_sub_field('address'); ?>
                                <br>
                                <?php echo get_sub_field('address_#2'); ?>
                            </p>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <?php if ($ourOfficeFFR < 2): ?>
        <style>
			.our-office {
				position: relative;
				max-width: 1920px;
				margin: 155px auto 178px auto;
			}

            @media only screen and (max-width: 991px) {
                .our-office {
                    margin-top: 65px;
                }
            }
			.our-office-content {
				width: 100%;
				margin: 0 auto;
				display: flex;
				position: relative;
				z-index: 9;
				flex-direction: column;
				max-width: 1440px;
				padding: 0 60px;
			}
			@media only screen and (max-width: 991px) {
				.our-office-content {
					padding: 0 15px;
				}
			}
			.our-office .title {
				color: #1C1066;
				text-align: center;
				font-size: 39px;
				font-weight: 700;
				line-height: 40px;
			}
			@media only screen and (max-width: 991px) {
				.our-office .title {
					font-size: 40px;
				}
			}
			.our-office-list {
				display: flex;
				gap: 43px;
				align-items: center;
				justify-content: center;
				margin-top: 162px;
			}
			@media only screen and (max-width: 991px) {
				.our-office-list {
					flex-direction: column;
					gap: 30px;
					margin-top: 28px;
				}
			}
			.our-office-list__item {
				display: flex;
				flex-direction: column;
				align-items: center;
				justify-content: center;
				text-align: center;
				border-radius: 20px;
				background: #FFF;
				box-shadow: 0 2px 21px 0 #0C71C3;
				width: 391.59px;
				height: 324px;
				padding: 40px;
				/*box-sizing: content-box;*/
			}
			@media only screen and (max-width: 991px) {
				.our-office-list__item {
					padding: 20px;
					max-width: 360px;
					width: 100%;
					height: 324px;
				}
			}
			.our-office-list__item:nth-child(2) {
				margin-top: -55px;
			}
			@media only screen and (max-width: 991px) {
				.our-office-list__item:nth-child(2) {
					margin-top: 0;
				}
			}
			.our-office-list__item img {
				margin-bottom: 29px;
			}
			.our-office-list__item h4 {
				font-size: 18px;
				font-weight: 700;
				line-height: 18px;
				margin-bottom: 12px;
				color: #333;
			}
			.our-office-list__item h5 {
				font-size: 14px;
				font-style: normal;
				font-weight: 700;
				line-height: 23.8px;
				margin-bottom: 22px;
				color: #333;
			}
			.our-office-list__item p {
				color: #666;
			}
        </style>
    <?php endif; ?>
</section>