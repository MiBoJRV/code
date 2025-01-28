<?php global $ourClientFFRSP;
$ourClientFFRSP++; ?>
<section class="our-client our-client-ffr-<?php echo $ourClientFFRSP; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="our-client__content">
        <div class="our-client-text">
        <span class="sub-title">
         <?php echo get_sub_field('sub_title'); ?>
        </span>
            <h3 class="title">
                <?php echo get_sub_field('title'); ?>
            </h3>
            <p>
                <?php echo get_sub_field('text'); ?>
            </p>
        </div>
        <ul class="our-client-list">
            <?php
            $clients = get_sub_field('list_repeater');
            if ($clients):
                foreach ($clients as $client):
                    ?>
                    <li class="our-client-list__item">
                        <img src="<?php echo $client['icon']['url']?>" alt="<?php echo $client['icon']['alt']?>" />
                        <h5>
                            <?= $client['title'] ?>
                        </h5>
                    </li>
                <?php
                endforeach;
            endif;
            ?>
            <!--<li class="our-client-list__item">-->
            <!--    <img class="item-icon" src="images/client_1.svg" alt="Online and Retail Stores">-->
            <!--    <h5>Online and Retail Stores</h5>-->
            <!--</li>-->
            <!--<li class="our-client-list__item">-->
            <!--    <img class="item-icon" src="images/client_2.svg" alt="Investment Funds">-->
            <!--    <h5>Investment Funds</h5>-->
            <!--</li>-->
            <!--<li class="our-client-list__item">-->
            <!--    <img class="item-icon" src="images/client_3.svg" alt="Law Firms">-->
            <!--    <h5>Law Firms</h5>-->
            <!--</li>-->
            <!--<li class="our-client-list__item">-->
            <!--    <img class="item-icon" src="images/client_4.svg" alt="Individual Clients">-->
            <!--    <h5>Individual Clients</h5>-->
            <!--</li>-->
        </ul>
    </div>
    <?php if ($ourClientFFRSP < 2): ?>
        <style>
			.our-client {
				background-image: url('<?php echo get_template_directory_uri(); ?>/images/ffr/our_client_bg.webp');
				background-repeat: no-repeat;
				background-size: cover;
				height: 2102px;
				margin-top: -633px;
				margin-bottom: -300px;
				position: relative;
				z-index: 2;
			}
			@media only screen and (max-width: 1200px) {
				.our-client {
					background-position: center;
				}
			}
			@media only screen and (max-width: 991px) {
				.our-client {
					background-image: url('<?php echo get_template_directory_uri(); ?>/images/ffr/our_client_bg_mob1.webp');
					height: auto;
					margin: 0;
					background-position: top;
					background-size: 100% 34%;
				}
			}
			.our-client__content {
				padding-top: 811px;
			}
			@media only screen and (max-width: 991px) {
				.our-client__content {
					padding: 0;
				}
			}
			.our-client-text {
				display: flex;
				flex-direction: column;
				align-items: center;
				text-align: center;
			}
			.our-client-text .sub-title {
				font-size: 30px;
				font-style: normal;
				font-weight: 700;
				line-height: 36px;
				color: #FE8275;
			}
			@media only screen and (max-width: 991px) {
				.our-client-text .sub-title {
					font-size: 18px;
					line-height: 21.6px;
				}
			}
			.our-client-text .title {
				font-size: 55px;
				font-style: normal;
				font-weight: 700;
				line-height: 61.6px;
				color: #ffffff;
				padding: 11px 0 74px;
				position: relative;
			}
			@media only screen and (max-width: 991px) {
				.our-client-text .title {
					font-size: 25px;
					line-height: 28.6px;
					padding: 11px 0 66px;
				}
			}
			.our-client-text .title:after {
				content: "";
				position: absolute;
				left: 0;
				bottom: 46px;
				height: 2px;
				width: 100px;
				background-color: #FE8275;
			}
			@media only screen and (max-width: 991px) {
				.our-client-text .title:after {
					bottom: 33px;
				}
			}
			.our-client-text p {
				font-size: 16px;
				font-style: normal;
				font-weight: 400;
				line-height: 30.6px;
				color: #ffffff;
			}
			@media only screen and (max-width: 991px) {
				.our-client-text p {
					font-size: 13px;
					line-height: 25.2px;
				}
			}
			@media only screen and (max-width: 991px) {
				.our-client-text {
					padding: 220px 30px;
					margin: 0;
				}
			}
			.our-client-text .title {
				max-width: 650px;
				padding: 11px 0 12px;
			}
			@media only screen and (max-width: 991px) {
				.our-client-text .title {
					padding-bottom: 43px;
				}
			}
			.our-client-text .title:after {
				content: none;
			}
			.our-client-text p {
				max-width: 622px;
			}
			.our-client-list {
				display: flex;
				justify-content: space-between;
				gap: 40px;
				max-width: 1320px;
				margin: 37px auto 0;
				padding: 0 15px;
			}
			@media only screen and (max-width: 991px) {
				.our-client-list {
					flex-direction: column;
					background: white;
					gap: 0;
					padding: 0;
					margin: 0;
				}
			}
			.our-client-list__item {
				display: flex;
				flex-direction: column;
				align-items: center;
				text-align: center;
				width: 25%;
				border-radius: 10px;
				background: #ffffff;
				box-shadow: 0 10px 60px 0 rgba(10, 45, 97, 0.1);
				padding: 24px 20px 59px 20px;
				height: 276px;
				justify-content: center;
			}
			.our-client-list__item:nth-of-type(1) {
				margin-top: 240px;
			}
			@media only screen and (max-width: 991px) {
				.our-client-list__item:nth-of-type(1) {
					margin: 0;
				}
			}
			.our-client-list__item:nth-of-type(2) {
				margin-top: 160px;
			}
			@media only screen and (max-width: 991px) {
				.our-client-list__item:nth-of-type(2) {
					margin: 0;
				}
			}
			.our-client-list__item:nth-of-type(3) {
				margin-top: 80px;
			}
			@media only screen and (max-width: 991px) {
				.our-client-list__item:nth-of-type(3) {
					margin: 0;
				}
			}
			@media only screen and (max-width: 1024px) {
				.our-client-list__item {
					width: calc(50% - 60px);
				}
			}
			@media only screen and (max-width: 991px) {
				.our-client-list__item {
					width: 100%;
				}
			}
			.our-client-list__item .item-icon {
				height: 105px;
			}
			.our-client-list__item h5 {
				text-align: center;
				font-size: 18px;
				font-weight: 400;
				line-height: 18px;
				color: #333;
				margin-top: 25px;
			}
			.our-client-list__item p {
				font-size: 13px;
				font-style: normal;
				font-weight: 400;
				line-height: 25.2px;
				color: #666;
				height: 92px;
			}
			@media only screen and (max-width: 1199px) {
				.our-client-list__item p {
					height: 100px;
				}
			}
        </style>
    <?php endif; ?>
</section>

