<?php global $thankYouFFR;
$thankYouFFR++; ?>
<section class="thank-you thank-you-ffr-<?php echo $thankYouFFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="thank-you__content">
        <h1 class="title">
            <?php echo get_sub_field('title'); ?>
        </h1>
        <div class="thank-you__image">
            <?php $image = get_sub_field('image');?>
            <img src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>" />
        </div>
        <div class="thank-you__btn">
            <a  href=" <?php echo get_sub_field('button_link'); ?>">
                <?php echo get_sub_field('button_text'); ?>
            </a>
        </div>
    </div>
    <?php if ($thankYouFFR < 2): ?>
        <style>
			.thank-you {
				height: 838px;
				position: relative;
			}
			@media only screen and (max-width: 991px) {
				.thank-you {
					height: auto;
				}
			}
			.thank-you__content {
				max-width: 1440px;
				margin: 0 auto;
				padding: 114px 60px 0 60px;
			}
			@media only screen and (max-width: 991px) {
				.thank-you__content {
					display: flex;
					flex-direction: column;
					padding: 96px 15px 58px 15px;
				}
			}
			.thank-you__content .title {
				max-width: 894px;
				width: 100%;
				color: #1A181E;
				font-size: 36px;
				font-weight: 700;
				line-height: normal;
				position: relative;
			}
			@media only screen and (max-width: 991px) {
				.thank-you__content .title {
					order: 1;
					text-align: center;
					font-size: 20px;
					line-height: 24px;
					max-width: none;
				}
			}
			.thank-you__image {
				margin-top: -113px;
				display: flex;
				justify-content: flex-end;
				margin-right: 100px;
			}
			@media only screen and (max-width: 1440px) {
				.thank-you__image {
					margin-right: 0;
					justify-content: center;
				}
			}
			@media only screen and (max-width: 991px) {
				.thank-you__image {
					order: 3;
					margin: 0;
				}
			}
			.thank-you__image img {
				width: 100%;
				height: auto;
				max-width: 1047px;
			}
			@media only screen and (max-width: 991px) {
				.thank-you__image img {
					max-width: 330px;
				}
			}
			.thank-you__btn {
				position: absolute;
				bottom: 97px;
			}
			@media only screen and (max-width: 991px) {
				.thank-you__btn {
					position: inherit;
					order: 2;
					margin: 27px auto 36px;
				}
			}
			.thank-you__btn a {
				color: #FAF9F9;
				text-align: center;
				font-size: 20px;
				font-weight: 900;
				line-height: normal;
				letter-spacing: 2px;
				text-transform: uppercase;
				border-radius: 7px;
				border: 2px solid #FFF;
				background: #FF646B;
				width: 273px;
				height: 40px;
				display: flex;
				justify-content: center;
				align-items: center;
			}
			.thank-you__btn a:hover {
				background: #FF2731;
			}
			.thank-you__btn a:active {
				background: #D5141D;
			}
        </style>
    <?php endif; ?>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const buttonOk = document.querySelector(".thank-you a");
            buttonOk.addEventListener('click', function() {
                window.location.href = "<?php echo esc_url(home_url('/')); ?>";

            });

        });
    </script>
</section>
