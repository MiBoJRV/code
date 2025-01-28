<?php $consultationFFR++; ?>
<section class="consultation consultation-ffr-<?php echo $consultationFFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="consultation-content">
        <div class="consultation-text">
            <h1 class="title">
                <?php echo get_sub_field('title'); ?>
            </h1>
            <p>
                <?php echo get_sub_field('text'); ?>
            </p>
            
        </div>
        <div class="consultation-image">
            <?php $image = get_sub_field('main_image');?>
            <img src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>" />
        </div>
    </div>
    <div class="bg-image">
        <img class="desktop" src="<?php echo get_stylesheet_directory_uri() ?>/images/ffr/consult_bg_bot.webp" alt="#">
    </div>
    <?php if ($consultationFFR < 2): ?>
        <style>
			.consultation {
                background-image: url('<?php echo get_template_directory_uri(); ?>/images/ffr/consult_bg.webp');
				background-repeat: no-repeat;
				background-size: cover;
				position: relative;
				height: 1014px;
				max-width: 1920px;
				margin: 0 auto;
				overflow: hidden;
			}
			@media only screen and (max-width: 1200px) {
				.consultation {
					align-items: center;
				}
			}
			@media only screen and (max-width: 991px) {
				.consultation {
					height: auto;
				}
			}
			.consultation-content {
				width: 100%;
				margin: 0 auto 0 auto;
				display: flex;
				align-items: flex-end;
				position: relative;
				z-index: 9;
				gap: 40px;
				padding: 112px 65px 0;
				max-width: 1440px;
			}
			@media only screen and (max-width: 991px) {
				.consultation-content {
					flex-direction: column;
					padding: 95px 15px 140px 15px;
					align-items: center;
					gap: 99px;
				}
			}
			.consultation-text {
				margin-bottom: 18px;
				margin-left: 20px;
			}
			.consultation-text .title {
				font-size: 55px;
				font-style: normal;
				font-weight: 700;
				line-height: 61.6px;
				color: #ffffff;
				padding: 11px 0 36px;
				position: relative;
			}
			@media only screen and (max-width: 991px) {
				.consultation-text .title {
					font-size: 56px;
					line-height: 52px;
				}
			}
			.consultation-text p {
				font-size: 16px;
				font-style: normal;
				font-weight: 400;
				line-height: 30.6px;
				color: #ffffff;
				max-width: 566px;
			}
			@media only screen and (max-width: 991px) {
				.consultation-text p {
					font-size: 13px;
					line-height: 23.8px;
					max-width: 100%;
				}
			}
			.consultation-image {
				max-width: 700px;
				width: 100%;
			}
			.consultation-image img {
				width: 100%;
				height: auto;
			}
			.consultation .bg-image {
				position: absolute;
				overflow: hidden;
				z-index: 1;
				transform: translate(-50%, 0px);
				left: 50%;
				bottom: -7px;
				width: 100%;
				height: auto;
				min-width: 1922px;
			}
			@media only screen and (max-width: 991px) {
				.consultation .bg-image {
					display: none;
				}
			}
			.consultation .bg-image img {
				width: 100%;
				height: auto;
			}
        </style>
    <?php endif; ?>
</section>