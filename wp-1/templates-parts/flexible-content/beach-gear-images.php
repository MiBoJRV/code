<?php $beachGearImagesSection++; ?>
<section class="beach-gear-images BG-<?php echo $beachGearImagesSection; ?>">       
    <?php if (get_sub_field('beach_gear_images_section_title') != ''): ?>
    <h2><?php echo get_sub_field('beach_gear_images_section_title'); ?></h2>
    <?php endif; ?>        
    <div class="items">
    <?php if (have_rows('beach_gear_images_repeater')): ?>
        <?php while (have_rows('beach_gear_images_repeater')): the_row(); ?>
        <div class="item">
            <a href="<?php the_sub_field('beach_gear_images_repeater_link'); ?>">
                <img src="<?php the_sub_field('beach_gear_images_repeater_image'); ?>" title="" alt="">
                <h4><?php the_sub_field('beach_gear_images_repeater_title'); ?></h4>
            </a>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>        
    </div>
    <style>
    <?php if($beachGearImagesSection < 2):?>
    .beach-gear-images {
    	padding: 70px 0;
    }
    .beach-gear-images h2 {
    	text-align: center;
    	font: 700 35px/47px Enriqueta;
    	letter-spacing: 0px;
    	color: #001F48;
    	text-transform: uppercase;
    	padding: 0 15px;
    	margin-bottom: 50px;
    }
    .beach-gear-images .items{
    	max-width: 1490px;
    	margin: 0 auto;
    	padding: 0 15px;
    	display: flex;
        flex-wrap: wrap;
    } 
    .beach-gear-images .items .item {
    	width: 25%;
        padding: 15px;
    }
    .beach-gear-images .items .item a{
    	display: block;
    	background: #FFFFFF 0% 0% no-repeat padding-box;
    	box-shadow: 0px 3px 35px #00000017;
    	border: 1px solid #DBEAFF;
    	border-radius: 4px;
    	padding: 50px 15px 30px;
        transition: all 0.3s linear;
        height: 100%;
    }
    .beach-gear-images .items .item a:hover {
    	transform: scale(1.05);
    	transition: all 0.3s linear;
    }
    .beach-gear-images .items .item a img{
        width: 100%;
        height: 232px;
        object-fit: contain;    
    }
    .beach-gear-images .items .item a h4 {
    	text-align: center;
    	font: 700 25px/34px Enriqueta;
    	letter-spacing: 0px;
    	color: #292929;
    }   
    /*Responsive*//*Responsive*//*Responsive*/
    @media (max-width: 1199px) {
        .beach-gear-images .items .item {
        	width: calc(100%/3);
            padding: 10px;
        }
    }
    @media (max-width: 991px) {
        .beach-gear-images .items .item {
        	width: 50%;          
        }
    }
    @media (max-width: 767px) {
        .beach-gear-images .items .item {
        	width: 100%;  
            padding: 10px 5px;        
        }
        .beach-gear-images {
        	padding: 50px 0;
        }
    }
    <?php endif ?>
    </style>    
</section>
