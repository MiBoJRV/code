<?php $cryptocurrencyAboutFFR++; ?>
<section class="cryptocurrency-about cryptocurrency-about-ffr-<?php echo $cryptocurrencyAboutFFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="cryptocurrency-about__content">
        <div class="cryptocurrency-about__title">
            <h3>
                <?php echo get_sub_field('section_title'); ?>
            </h3>
            <h5>
                <?php echo get_sub_field('section_subtitle'); ?>
            </h5>
            <p>
                <?php echo get_sub_field('section_text'); ?>
            </p>
        </div>
        <div class="cryptocurrency-about__boxes">
            <ul class="cryptocurrency-about__boxes-list">
                <li class="cryptocurrency-about__boxes-list__item">
                    <h5>
                        <?php echo get_sub_field('title_block_1'); ?>
                    </h5>
                    <p>
                        <?php echo get_sub_field('text_block_1'); ?>
                    </p>
                </li>
                <li class="cryptocurrency-about__boxes-list__item">
                    <h5>
                        <?php echo get_sub_field('title_block_2'); ?>
                    </h5>
                    <p>
                        <?php echo get_sub_field('text_block_2'); ?>
                    </p>
                </li>
                <li class="cryptocurrency-about__boxes-list__item">
                    <h5>
                        <?php echo get_sub_field('title_block_3'); ?>
                    </h5>
                    <p>
                        <?php echo get_sub_field('text_block_3'); ?>
                    </p>
                </li>
            </ul>
        </div>
    </div>
    <?php if ($cryptocurrencyAboutFFR < 2): ?>
        <style>
			.cryptocurrency-about__content {
				max-width: 1440px;
				margin: 0 auto 195px auto;
				padding: 0 60px;
			}
			@media only screen and (max-width: 991px) {
				.cryptocurrency-about__content {
					padding: 0 15px;
					margin: 0 auto;
				}
			}
			.cryptocurrency-about__title {
				margin: 62px 0 71px;
			}
			@media only screen and (max-width: 991px) {
				.cryptocurrency-about__title {
					margin: 32px 0 25px;
				}
			}
			.cryptocurrency-about__title h3 {
				color: #170463;
				text-align: center;
				font-size: 30px;
				font-weight: 700;
				line-height: 36px;
			}
			.cryptocurrency-about__title h5 {
				color: #333;
				text-align: center;
				font-size: 27.8px;
				font-weight: 700;
				line-height: 31.68px;
			}
			.cryptocurrency-about__title p {
				max-width: 703px;
				margin: 32px auto 0 auto;
			}
			.cryptocurrency-about p {
				color: #666;
				text-align: center;
				font-size: 13px;
				font-weight: 400;
				line-height: 25.2px;
			}
			.cryptocurrency-about__boxes-list {
				display: flex;
				justify-content: space-between;
				gap: 20px;
			}
			@media only screen and (max-width: 991px) {
				.cryptocurrency-about__boxes-list {
					flex-direction: column;
					align-items: center;
					gap: 55px;
				}
			}
			.cryptocurrency-about__boxes-list__item {
				max-width: 390px;
				width: 100%;
			}
			.cryptocurrency-about__boxes h5 {
				color: #333;
				text-align: center;
				font-size: 18px;
				font-style: normal;
				font-weight: 700;
				line-height: 25.2px;
				margin-bottom: 35px;
			}
        </style>
    <?php endif; ?>
</section>