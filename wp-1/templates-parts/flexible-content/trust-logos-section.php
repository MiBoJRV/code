<?php $trustLogos++; ?>
<?php $slick++?>
<section class="trust_logos TS-<?php echo $trustLogos;?>">
	<?php if(get_sub_field('customize_trust_logos_section')=='yes'): ?>
		<style>
			:root {
				--section_bg: <?php the_sub_field('section_background'); ?>;
			}
		</style>
		<div class="slider_wrap">
			<?php if( have_rows('custom_logos_slider') ): ?>
	    		<?php while( have_rows('custom_logos_slider') ): the_row(); ?>
	    			<a href="<?php the_sub_field('logo_link'); ?>" class="img_box" target="_blank">
						<img src="<?php the_sub_field('logo'); ?>" alt="">
					</a>
	    		<?php endwhile; ?>
			<?php endif; ?>
		</div>
	<?php else: ?>
		<?php if( have_rows('global_content', get_homePageId()) ):
	        while ( have_rows('global_content', get_homePageId()) ) : the_row(); ?>
	        	<?php if( get_row_layout() == 'trust_logos_section' ): ?>
	        		<style>
						:root {
							--section_bg: <?php the_sub_field('section_background', get_homePageId()); ?>;
						}
					</style>
	        		<div class="slider_wrap">
						<?php if( have_rows('logos_slider') ): ?>
	    					<?php while( have_rows('logos_slider') ): the_row(); ?>
								<a href="<?php the_sub_field('logo_link'); ?>" class="img_box" target="_blank">
									<img src="<?php the_sub_field('logo'); ?>" alt="">
								</a>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				<?php endif;
			endwhile;
	 	endif;
	endif;?>
</section>
<?php if($trustLogos < 2):?>
<style>
.trust_logos {
	padding: 30px 0;
	background: var(--section_bg);
}
.trust_logos .slider_wrap {
	display: flex;
	justify-content: space-around;
	align-items: center;
}
.trust_logos .img_box {
	padding: 0 25px;
	flex-grow: 1;
	text-align: center;
}
.trust_logos .img_box img {
	width: 200px;
	margin: 0 auto;
}
.trust_logos .slick-track {
	display: flex;
	align-items: center;
}

/*Responsive*//*Responsive*//*Responsive*/
@media(max-width: 991px) {
.trust_logos {
	padding: 15px 0;
}
.trust_logos .img_box {
	padding: 0 15px;
}
.trust_logos .img_box img {
	width: 120px;
}
}
</style>
<?php endif; ?>
<?php if($slick < 2):?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
<?php endif;?>
<script>	
	logos_length = jQuery('.trust_logos.TS-<?php echo $trustLogos;?> .img_box').length;
	if(logos_length > 5) {
		jQuery(this).addClass('slidered');
	}

if(jQuery(window).innerWidth() > 767) {
	jQuery('.trust_logos.TS-<?php echo $trustLogos;?>.slidered .slider_wrap').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        responsive: [
	    {
	      breakpoint: 1400,
	      settings: {
	        slidesToShow: 4
	      }
	    }
	    ]
    });
}

if(jQuery(window).innerWidth() < 768) {
	if(logos_length > 3) {
		jQuery('.trust_logos.TS-<?php echo $trustLogos;?> .slider_wrap').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 5000
        });
	}
}
</script>