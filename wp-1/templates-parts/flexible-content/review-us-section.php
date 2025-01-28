<?php echo $revieUS++;?>
<section class="review_us_section RU-<?php echo $revieUS;?> <?php echo get_sub_field('custom_class'); ?>">
<style>
<?php if(get_sub_field('customize_font_size')=='yes'): ?>
.review_us_section.RU-<?php echo $revieUS;?> h2 {
    font-size: <?php the_sub_field('stars_title_font_size'); ?>;
}
.review_us_section.RU-<?php echo $revieUS;?> .satisfaction-text h2 {
    font-size: <?php the_sub_field('smiles_title_font_size'); ?>;
}
.review_us_section.RU-<?php echo $revieUS;?> .satisfaction-text p {
    font-size: <?php the_sub_field('smiles_under_title_text_font_size'); ?>;
}
.review_us_section.RU-<?php echo $revieUS;?> .review_modal .modal_title {
    font-size: <?php the_sub_field('modal_title_font_size'); ?>;
}
<?php endif; ?>

.review_us_section {
	background: <?php the_sub_field('review_us_section_background'); ?>;
}
<?php if($revieUS < 2):?>
/*Basic Styles*/
/*pop up form*/
.review_modal {
	display: none;
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: rgba(0,0,0,.7);
	z-index: 999;
    overflow: auto;
    padding-bottom: 10px;
}
.review_modal .modal_content {
	position: relative;
	max-width: 600px;
	margin: 0 auto;
	background: #fff;
	border-radius: 6px;
	margin-top: 150px;
	overflow: hidden;
}
.review_modal .modal_title {
	background: var(--main_color);
	padding: 20px;
	margin: 0;
    border-bottom: 1px solid #e9e9e9;
    color: #fff;
}
.review_modal .modal_body {
	padding: 20px;
}
.review_modal button.close {
	position: absolute;
	top: 0;
	right: 3px;
	color: #fff;
	text-shadow: none;
	opacity: 1;
}
.review_modal button.close:hover {
	color: var(--second_color);
}
.review_us_section .name_first input + label{
    display: none !important;
}
.review_us_section .gform_wrapper .top_label .gfield_label {
    margin: 0;
    font-size: 14px;
    color: #004566;
    font-weight: bold;
    text-align: left;
    margin: 0;
}
.review_us_section #gform_wrapper_1.gform_validation_error .gform_body ul li.gfield.gfield_error:not(.gf_left_half):not(.gf_right_half) {
    max-width: 100% !important;
}
#modal_form input{
    height: 40px;
    width: 100%;
    border: 1px solid var(--main_color);
    box-shadow: none;
}
#modal_form textarea{
    height: 100px;
    border: 1px solid var(--main_color);
    box-shadow: none;
    outline: none;
}
#modal_form .gform_footer{
    padding: 0;
}
#modal_form .gform_footer input{
    background: var(--main_color) !important;
    max-width: 250px;
    transition: all 0.4s;
    border: none!important;
    color: #fff;
    margin: 0 auto !important;
    display: block;
    outline: none;
}
#modal_form .gform_footer input:hover{
    background: var(--hover_color) !important;
}
#modal_form .ginput_container_checkbox label{
    display: inline-block;
}
#modal_form input::-moz-placeholder, #example-popup textarea::-moz-placeholder{
    color: #383838!important;
    opacity: 1!important;
    <?php if (get_field('global_font_family', get_homePageId())=='Custom'): ?>
        font-family: <?=get_post_meta( get_homePageId(), "_gfonts_name_value_key_7")[0]?>;
    <?php else: ?>
        font-family: 'Montserrat';
    <?php endif ?>
}
#modal_form input::-webkit-input-placeholder, #example-popup textarea::-webkit-input-placeholder{
    color: #383838!important;
    <?php if (get_field('global_font_family', get_homePageId())=='Custom'): ?>
        font-family: <?=get_post_meta( get_homePageId(), "_gfonts_name_value_key_7")[0]?>;
    <?php else: ?>
        font-family: 'Montserrat';
    <?php endif ?>
}
/*End pop up form*/
/*Pop Up Two*/
#social{
    padding: 0;
    list-style: none;
}
#social a{
    display: block;
    border: 1px solid #ccc;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    transition: background-color 0.3s;
}
#social a:hover{
    background: #F6D87F;
}
#social li:not(:last-child){
    margin-bottom: 15px;
}

/*Responsive*//*Responsive*//*Responsive*/
@media(max-width: 767px) {
.review_modal .modal_content {
	width: 95%;
	margin-top: 100px;
}
.review_modal .modal_title {
	font-size: 18px;
}
}
<?php endif; ?>
</style>
<?php if(get_sub_field('review_page_variants')=='Smiles'): ?>
	<div class="content">
	    <div class="satisfaction-content">
	        <div class="satisfaction-box">
	            <div class="satisfaction-text">
	                <h2>Tell Us About Your Stay</h2>
	                <p>We always try to create an amazing guest experience. Please let us know how we did below:</p>
	            </div><!-- end satisfaction-text -->
	            <div class="satisfaction-mood">
	                <div class="satisfaction-margin">
	                    <a href="#" class="satisfaction-block open_list">
	                        <img src="<?php echo get_template_directory_uri(); ?>/images/review-images/smiley-face.png" alt="#">
	                        <p>I had an amazing stay with <?php echo get_bloginfo(); ?> Vacations.</p>
	                    </a>
	                </div><!-- end satisfaction-margin -->
	                <div class="satisfaction-margin">
	                    <a href="#" class="satisfaction-block open_form">
	                        <img src="<?php echo get_template_directory_uri(); ?>/images/review-images/sad-face.png" alt="#">
	                        <p>I had some issues during my stay.</p>
	                    </a>
	                </div><!-- end satisfaction-margin -->
	            </div><!-- end satisfaction-mood -->
	        </div><!-- end satisfaction-box -->
	    </div><!-- end satisfaction-content -->
	</div>
	<style>
        .satisfaction-box {
            max-width: 1026px;
            margin: 0 auto;
            width: 100%;
            text-align: center;
            padding: 50px 0 100px;
        }
        .satisfaction-text {
            padding: 0 15px;
            margin-bottom: 45px;
        }
        .satisfaction-text h2 {
            color: #29272f;
        }
        .satisfaction-text p {
            line-height: 24px;
            color: #29272f;
        }
        .satisfaction-mood {
            flex-wrap: wrap;
            display: flex;
        }
        .satisfaction-margin {
            flex: 50%;
            padding: 15px;
        }
        .satisfaction-margin a {
            text-align: center;
            display: block;
            height: 100%;
            background-color: #fff;
            padding: 60px 14px;
            color: #29272F;
            transition: .2s;
        }
        .satisfaction-margin a:hover {
            transform: scale(1.05);
            box-shadow: 0 0 15px rgba(0,0,0,.16)
        }
        .satisfaction-margin img {
            margin-bottom: 45px;
        }
        .satisfaction-margin p {
            line-height: 24px;
        }
        
        /*Responsivness*//*Responsivness*//*Responsivness*/
        @media screen and (max-width: 767px) {
        .satisfaction-margin {
            flex: 100%;
        }
        .satisfaction-text h2 {
            font-size: 36px;
            line-height: 40px;
        }
        .satisfaction-text p {
            font-size: 16px;
            line-height: 20px;
        }
        .satisfaction-margin a {
            height: auto;
            padding: 30px 14px;
        }
        }
    </style>
<?php else: ?>
	<h2>Please leave your feedback, it's very important for us</h2>
	<section class="reviewUs">
	    <div class="container" style="padding-bottom: 150px;">
	        <div class="starItem active">
	            <div class="show-1">
	                <img src="<?php echo get_template_directory_uri(); ?>/images/stargone.svg" title="" alt=""/>
	                <img src="<?php echo get_template_directory_uri(); ?>/images/star.svg" title="" alt=""/>        
	            </div>
	        </div><!--End starItem-->
	        <div class="starItem active">
	            <div class="show-2">
	                <img src="<?php echo get_template_directory_uri(); ?>/images/stargone.svg" title="" alt=""/>
	                <img src="<?php echo get_template_directory_uri(); ?>/images/star.svg" title="" alt=""/>        
	            </div>
	        </div><!--End starItem-->
	        <div class="starItem active">
	            <div class="show-3">
	                <img src="<?php echo get_template_directory_uri(); ?>/images/stargone.svg" title="" alt=""/>
	                <img src="<?php echo get_template_directory_uri(); ?>/images/star.svg" title="" alt=""/>        
	            </div>
	        </div><!--End starItem-->
	        <div class="starItem active">
	            <div class="show-4">
	                <img src="<?php echo get_template_directory_uri(); ?>/images/stargone.svg" title="" alt=""/>
	                <img src="<?php echo get_template_directory_uri(); ?>/images/star.svg" title="" alt=""/>        
	            </div>
	        </div><!--End starItem-->
	        <div class="starItem active">
	            <div class="show-5">
	                <img src="<?php echo get_template_directory_uri(); ?>/images/stargone.svg" title="" alt=""/>
	                <img src="<?php echo get_template_directory_uri(); ?>/images/star.svg" title="" alt=""/>        
	            </div>
	        </div><!--End starItem-->   
	    </div><!--End container-->              
	</section><!--End reviewUs-->
	<style>
		.review_us_section h2{
            text-align: center;
            color: #F29C1F;
            padding: 20px 0;
        }
        header.entry-header{
            display: none;
        }
        .starItem img{
            max-width: 100%;
        }
        .starItem{
            float: left;
            width: 20%;
            padding: 0 20px;
        }
        .starItem div{
            position: relative;
        }
        .starItem img:nth-child(2){
            position: absolute;
            left: 0;
            top: 0;
        }
        .starItem img:first-child{
            position: relative;
            z-index: 2;
            opacity: 1;
            transition: opacity 0.4s;
        }
        .starItem.active img:first-child{
            opacity: 0;
        }
        
        /*Responsivness*//*Responsivness*//*Responsivness*/
        @media(max-width:767px){
        .starItem{
            padding: 0 5px;
        }  
        }
    </style>
<?php endif; ?>

	<div id="modal_form" class="review_modal">
		<div class="modal_content">
			<h4 class="modal_title"><?php the_sub_field('form_modal_title'); ?></h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<div class="modal_body">
				<?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
			</div>
		</div>
	</div>

	<div id="modal_list" class="review_modal">
		<div class="modal_content">
			<h4 class="modal_title"><?php the_sub_field('social_modal_title'); ?></h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<div class="modal_body">
				<ul id="social">
                    <?php if(get_sub_field('social_facebook_link')!=''): ?>
	                <li class="facebook">
	                    <a href="<?php the_sub_field('social_facebook_link'); ?>" target="_blank">
	                        <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" title="" alt=""/>
	                    </a>
	                </li>
                    <?php endif; ?>
                    <?php if(get_sub_field('social_google_link')!=''): ?>
	                <li class="google">
	                    <a href="<?php the_sub_field('social_google_link'); ?>" target="_blank">
	                        <img src="<?php echo get_template_directory_uri(); ?>/images/googleplus.png" title="" alt=""/> 
	                    </a>
	                </li>
                    <?php endif; ?>
	            </ul>
			</div>
		</div>
	</div>
<script>
jQuery(window).load(function(){   
    /*stars hover*/
    jQuery('.starItem').hover( 
        function(){            
            var clFind = jQuery(this).find('div').attr('class');
            var clFind = clFind.split('-');
            var clFind = + clFind.pop();         
            jQuery('.starItem').each( function(){
                var clFindArray = jQuery(this).find('div').attr('class');
                var clFindArray = clFindArray.split('-');
                var clFindArray = + clFindArray.pop();           
                if(clFind < clFindArray){                                
                    jQuery(this).removeClass('active');                                                  
                }else{
                    jQuery(this).addClass('active'); 
                }
            })            
        },
        function(){
            jQuery('.starItem').addClass('active');
        }
    );           
})/*End window load*/

jQuery('.open_form').click(function(e) {
	e.preventDefault();
	jQuery('#modal_form').slideDown(300);
});

jQuery('.open_list').click(function(e) {
	e.preventDefault();
	window.open('<?php the_sub_field('social_google_link'); ?>','_blank');
});

jQuery('.starItem').click(function() {
	var star_index = jQuery(this).index();
	if(star_index < 3) {
		jQuery('#modal_form').slideDown(300);
	} else {
        window.open('<?php the_sub_field('social_google_link'); ?>','_blank');
	}
})

jQuery('.review_modal button.close').click(function() {
	jQuery('#modal_form').slideUp(300);
	jQuery('#modal_list').slideUp(300);
})

/*Hide element on click*/
jQuery(document).mouseup(function (e){ // событие клика по веб-документу
	var div = jQuery(".review_modal .modal_content"); // тут указываем ID элемента
	if (!div.is(e.target) // если клик был не по нашему блоку
	    && div.has(e.target).length === 0) { // и не по его дочерним элементам
		div.parent().slideUp(300); // скрываем его
	}
});
</script>
</section>
