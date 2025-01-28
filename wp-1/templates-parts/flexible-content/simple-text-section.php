<?php $simText++; ?>
<div class="simple-text-<?php echo $simText; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="container">
        <article>
            <?php echo get_sub_field('simple_text_editor'); ?>
        </article>
    </div>
    <style>
        .simple-text-<?php echo $simText; ?> {
            background: <?php echo get_sub_field('simple_text_section_background_color'); ?>;
            padding-top: 100px;
        }        
        <?php if(get_sub_field('simple_text_section_width_size')!=''): ?>
        .simple-text-<?php echo $simText; ?> > .container {
            width: 100%;
            max-width: <?php echo get_sub_field('simple_text_section_width_size'); ?>;
            margin: 0 auto;
            padding: 0 15px;
            position: relative;
        }
        .simple-text-<?php echo $simText; ?> article p {
            text-align: center;
            font: 400 16px/28px var(--paragraph_font);
            color: var(--paragraph_color);
        }
        .simple-text-1 h2 {
            text-align: center;
        }
        <?php endif; ?>
        .page-id-1254 .simple-text-1 {
            padding-top: 100px;
        }
        .page-id-1254 .simple-text-1 article::after {
            content: "";
            display: block;
            width: 75px;
            height: 2px;
            background: var(--main_color);
            margin: 15px auto 0 auto;
        }
        /*beach-gear-text*/
        .beach-gear-text{
            padding: 60px 0;
        }
        .beach-gear-text h2 {
        	text-align: left;
        	font: 700 35px/47px Enriqueta;
        	letter-spacing: 0px;
        	color: #001F48;
        	text-transform: uppercase;
        }
        .beach-gear-text article p {
        	text-align: left;
        	font: 400 18px/28px var(--paragraph_font);
        	color: #292929;
        }
        .beach-gear-text .flex-box {
        	display: flex;
            align-items: center;
            margin: 25px 0;
        }
        .beach-gear-text .flex-box .box-img {
        	background: #FFFFFF;
        	box-shadow: 0px 3px 15px #00000017;
        	border-radius: 9px;
        	width: 317px;
        	text-align: center;
        	padding: 15px;
        }
        .beach-gear-text .flex-box .box-text {
        	width: calc(100% - 317px);
            padding-left: 25px;
        }
        @media screen and (max-width: 991px) {
            .beach-gear-text .flex-box{
                flex-wrap: wrap;
				justify-content: center;
            }
            .beach-gear-text .flex-box .box-img{
                margin: 0 auto 25px;
            }
            .beach-gear-text .flex-box .box-text{
                width: 100%;
                padding-left: 0;
				margin-top: 30px;
            }            
        }
        /*beach-gear-text*/
    </style>
</div>