<?php global $servicesAllFFR;
$servicesAllFFR++; ?>
<section class="services__all services__all-ffr-<?php echo $servicesAllFFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <ul class="services__all-list">
        <?php
        $lists = get_sub_field('services_list_repeater');
        if ($lists):
            foreach ($lists as $list):
                ?>
                <li class="services__all-list__item">
                    <img src="<?php echo $list['icon']['url']?>" alt="<?php echo $list['icon']['alt']?>" />
                    <h5><?= $list['title'] ?></h5>
                    <p>
                        <?= $list['text'] ?>
                    </p>
                </li>
            <?php
            endforeach;
        endif;
        ?>
    </ul>
    <?php if ($servicesAllFFR < 2): ?>
        <style>
			.services__all {
				margin: 110px 0;
				position: relative;
				z-index: 1;
			}
			@media only screen and (max-width: 1200px) {
				.services__all {
					z-index: 3;
				}
			}
			@media only screen and (max-width: 991px) {
				.services__all {
					margin-top: 60px;
					margin-bottom: 0;
				}
			}
			.services__all-list {
				max-width: 1274px;
				margin: 0 auto;
				padding: 60px;
				border-radius: 10px;
				background: #FFF;
				box-shadow: 0 10px 60px 0 rgba(10, 45, 97, 0.1);
				display: grid;
				grid-template-columns: 1fr 1fr 1fr;
				grid-template-rows: 1fr 1fr;
				gap: 33px;
			}
			@media only screen and (max-width: 1024px) {
				.services__all-list {
					display: flex;
					flex-wrap: wrap;
					justify-content: center;
					row-gap: 40px;
				}
			}
			.services__all-list__item {
				display: flex;
				flex-direction: column;
				align-items: center;
				text-align: center;
				max-width: 356px;
				width: 100%;
				padding: 0 10px;
			}
			@media only screen and (max-width: 1024px) {
				.services__all-list__item {
					width: calc(50% - 60px);
				}
			}
			@media only screen and (max-width: 991px) {
				.services__all-list__item {
					width: 100%;
					padding: 0;
				}
			}
			.services__all-list__item .item-icon {
				height: 100px;
			}
			.services__all-list__item h5 {
				margin: 25px 0 13px;
				font-size: 18px;
				font-style: normal;
				font-weight: 700;
				line-height: 25.2px;
				color: #333;
			}
			.services__all-list__item p {
				font-size: 13px;
				font-style: normal;
				font-weight: 400;
				line-height: 25.2px;
				color: #666;
				height: 92px;
			}
			@media only screen and (max-width: 1199px) {
				.services__all-list__item p {
					height: 100px;
				}
			}
			@media only screen and (max-width: 991px) {
				.services__all-list__item p {
					height: 100%;
				}
			}
        </style>
    <?php endif; ?>
</section>

