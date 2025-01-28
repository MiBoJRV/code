<?php $locationsMapFFRLP++; ?>
<section class="location location-ffr-<?php echo $locationsMapFFRLP; ?>" <?php echo get_sub_field('custom_class'); ?>>
    <div class="location__content">
        <?php if (have_rows('map_locations_block_repeater')): ?>
            <?php while (have_rows('map_locations_block_repeater')): the_row(); ?>
                <div class="location__text-content">
                    <h3 class="location__title"><?php echo get_sub_field('location'); ?></h3>
                    <h5 class="location__sub"><?php echo get_sub_field('about_location'); ?></h5>
                </div>
                <div class="location__map">
                    <?php $image = get_sub_field('map_location'); ?>
                    <img class="item-icon" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <?php if ($locationsMapFFRLP < 2): ?>
    <style>
		.location {
			color: #ffffff;
			background: #15045C;
			padding-top: 40px;
		}
		@media only screen and (max-width: 991px) {
			.location {
				padding-top: 0;
			}
		}
		.location__content {
			max-width: 1440px;
			margin: 0 auto;
		}
		.location__text-content {
			max-width: 1080px;
			margin: 0 auto;
		}
		@media only screen and (max-width: 1200px) {
			.location__text-content {
				padding: 80px 45px;
			}
		}
		.location h3 {
			font-size: 30px;
			font-weight: 400;
			line-height: 30px;
			padding-top: 50px;
		}
		@media only screen and (max-width: 991px) {
			.location h3 {
				padding: 0;
			}
		}
		.location h5 {
			font-size: 14px;
			font-weight: 400;
			line-height: 23.8px;
			margin-top: 12px;
		}
		.location p {
			font-size: 13px;
			font-weight: 400;
			line-height: 23.8px;
			margin-top: 28px;
			max-width: 955px;
		}
		.location__map {
			margin-top: 50px;
			display: flex;
			justify-content: center;
			max-width: 1440px;
			width: 100%;
		}
		@media only screen and (max-width: 991px) {
			.location__map {
				padding: 0;
			}
		}
		@media only screen and (max-width: 991px) {
			.location__map {
				margin-bottom: 0;
			}
		}
		.location__map img {
			width: 100%;
			height: auto;
		}
		@media only screen and (max-width: 991px) {
			.location__map img {
				min-height: 450px;
				object-fit: cover;
			}
		}
		.location__map .map__content {
			width: 1400px;
			height: 500px;
		}
    </style>
    <?php endif; ?>
</section>