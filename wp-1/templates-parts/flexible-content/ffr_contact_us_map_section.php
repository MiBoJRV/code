<?php $mapFFR++; ?>

<section class="map map-ffr-<?php echo $mapFFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <?php if (get_sub_field('show_title') != 'No' ): ?>
    <div class="map__title">
        <h3>Our Domestic Location</h3>
    </div>
    <?php endif ?>
    <div class="map__content">
        <?php $image = get_sub_field('map_image');?>
        <img src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>" />
    </div>
    <?php if ($mapFFR < 2): ?>
        <style>
			.map {
				display: flex;
				flex-direction: column;
			}
			.map__title {
				background: #1A0165;
				padding: 58px 0 69px 0;
			}
			@media only screen and (max-width: 991px) {
				.map__title {
					height: 234px;
					display: flex;
					align-items: center;
					justify-content: center;
				}
			}
			.map__title h3 {
				color: #FFF;
				text-align: center;
				font-size: 30px;
				font-weight: 700;
				line-height: 30px;
				padding: 0 20px;
			}
			@media only screen and (max-width: 991px) {
				.map__title h3 {
					font-size: 32px;
					line-height: 32px;
				}
			}
			.map__content {
				display: flex;
				justify-content: center;
				margin: 0 auto 18px auto;
				max-width: 1440px;
				width: 100%;
			}
			@media only screen and (max-width: 991px) {
				.map__content {
					margin-bottom: 0;
				}
			}
			.map img {
				width: 100%;
				height: auto;
			}
			@media only screen and (max-width: 991px) {
				.map img {
					min-height: 450px;
					object-fit: cover;
				}
			}
        </style>
    <?php endif; ?>
</section>