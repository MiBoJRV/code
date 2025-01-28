<?php global $toolsFFR;
$toolsFFR++; ?>
<section class="tools tools-ffr-<?php echo $toolsFFR; ?>" <?php echo get_sub_field('custom_class'); ?>>
    <div class="tools-content">
        <div class="bg-image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ffr/about_section_bottom_bg.webp" alt="#">
        </div>
        <div class="tools-content__box">
            <div class="tools-text">
          <span class="sub-title">
               <?php echo get_sub_field('sub_title'); ?>
          </span>
                <h3 class="title"><?php echo get_sub_field('title'); ?></h3>
                <p><?php echo get_sub_field('text'); ?></p>
            </div>
            <div class="tools-state">
                <ul class="tools-state__list">
                    <?php if (have_rows('list_block_repeater')): ?>
                        <?php while (have_rows('list_block_repeater')): the_row(); ?>
                            <li class="tools-state__list-item">
                                <?php echo get_sub_field('list_text'); ?>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
    <?php if ($toolsFFR < 2): ?>
        <style>
			.tools {
				position: relative;
				margin-bottom: 125px;
				overflow: hidden;
			}
			@media only screen and (max-width: 991px) {
				.tools {
					margin-bottom: 34px;
				}
			}
			.tools .bg-image {
				position: absolute;
				top: 0;
				overflow: hidden;
				z-index: 1;
				transform: translate(-50%, 0px);
				left: 50%;
				width: auto;
			}
			.tools .bg-image img {
				min-width: 1925px;
			}
			.tools .bg-image-mobile {
				position: absolute;
				top: 0;
				overflow: hidden;
				z-index: 1;
				transform: translate(-50%, 0px);
				left: 50%;
				width: 100%;
				display: none;
			}
			@media only screen and (max-width: 991px) {
				.tools .bg-image-mobile {
					display: block;
				}
			}
			.tools-content {
				/*max-width: 1320px;*/
				width: 100%;
				margin: 0 auto;
				display: flex;
				position: relative;
				z-index: 9;
				max-width: 1440px;
				padding: 135px 0 0 0;
				width: 100%;
				flex-direction: column;
				box-sizing: border-box;
			}
			@media only screen and (max-width: 991px) {
				.tools-content {
					padding: 94px 0 0;
				}
			}
			.tools-content__box {
				z-index: 9;
				padding: 135px 0 0 0;
				width: 100%;
			}
			@media only screen and (max-width: 991px) {
				.tools-content__box {
					padding: 0;
				}
			}
			.tools-text {
				padding: 0 60px;
				max-width: 725px;
			}
			@media only screen and (max-width: 991px) {
				.tools-text {
					padding: 0 15px;
				}
			}
			.tools .sub-title {
				font-size: 30px;
				font-style: normal;
				font-weight: 700;
				line-height: 36px;
				color: #FE8275;
			}
			@media only screen and (max-width: 991px) {
				.tools .sub-title {
					font-size: 18px;
					line-height: 21.6px;
				}
			}
			.tools .title {
				font-size: 55px;
				font-style: normal;
				font-weight: 700;
				line-height: 61.6px;
				color: #ffffff;
				padding: 11px 0 74px;
				position: relative;
			}
			@media only screen and (max-width: 991px) {
				.tools .title {
					font-size: 25px;
					line-height: 28.6px;
					padding: 11px 0 66px;
				}
			}
			.tools .title:after {
				content: "";
				position: absolute;
				left: 0;
				bottom: 46px;
				height: 2px;
				width: 100px;
				background-color: #FE8275;
			}
			@media only screen and (max-width: 991px) {
				.tools .title:after {
					bottom: 33px;
				}
			}
			.tools p {
				font-size: 16px;
				font-style: normal;
				font-weight: 400;
				line-height: 30.6px;
				color: #ffffff;
			}
			@media only screen and (max-width: 991px) {
				.tools p {
					font-size: 13px;
					line-height: 25.2px;
				}
			}
			.tools .sub-title {
				color: #FE8275;
			}
			@media only screen and (max-width: 991px) {
				.tools .sub-title {
					color: #00B4FF;
				}
			}
			.tools .title {
				color: #333;
			}
			.tools p {
				max-width: 725px;
				color: #666;
			}
			.tools-state {
				margin-top: 50px;
				padding: 0 60px;
			}
			@media only screen and (max-width: 991px) {
				.tools-state {
					padding: 0 15px;
				}
			}
			.tools-state__list {
				display: flex;
				justify-content: flex-start;
				align-items: center;
				gap: 27px;
				flex-wrap: wrap;
				padding: 0;
			}
			@media only screen and (max-width: 768px) {
				.tools-state__list {
					justify-content: center;
					gap: 10px;
				}
			}
			.tools-state__list-item {
				height: 55px;
				padding: 18px 15.05px 18px 15.95px;
				display: flex;
				justify-content: center;
				align-items: center;
				flex-shrink: 0;
				border-radius: 100px;
				background: radial-gradient(70.71% 70.71% at 50% 50%, #160070 0%, #34004C 100%);
				font-size: 11px;
				font-style: normal;
				font-weight: 700;
				line-height: 18.7px;
				text-transform: uppercase;
				color: #ffffff;
				box-sizing: border-box;
				max-width: 190px;
				width: 100%;
				text-align: center;
			}
			@media only screen and (max-width: 991px) {
				.tools-state__list-item {
					max-width: 280px;
				}
			}
        </style>
    <?php endif; ?>
</section>


