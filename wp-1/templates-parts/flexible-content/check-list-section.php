<div class="check">
	<div class="check-list-section">
		<h2> <?php echo get_sub_field('check_list_section_title'); ?></h2>
		<ul class="box"> <!-- box -->
			<?php
			    $specials = get_sub_field('check_list');
			    if($specials):
			        foreach($specials as $special):
			    ?>    
			        <li><i class="fas fa-check-circle"></i>
                       <article>
                           <strong><?=$special['item_title']?></strong>
                           <span><?=$special['item_text']?></span>
                       </article>
                        
                   </li>      
			    <?php
			        endforeach;
			    endif;
			?>
		 </ul> <!-- end box -->
	</div>
</div>
<style>
.check {
	background:#fff;
}
.check-list-section {
	padding: 80px 15px;
}
.check-list-section h2 {
	margin-bottom: 50px;
	text-align: center;	
	font-size: 38px;
    text-align: center;
    color: #292929;   
    text-transform: uppercase; 
}
.check-list-section .box {
	column-count: 2;	
	column-gap: 100px;
	position: relative;
	max-width: 1030px;
	margin: 0 auto;
	padding: 0;
	list-style-type: none;
}
.check-list-section .box li {
	position: relative;
    margin-bottom: 30px;
    font-family: Montserrat;
    font-weight: 400;
    font-size: 14px;
    color: rgba(41, 41, 41, 0.75);
    line-height: 24px;
    /*overflow: hidden;*/
    display: inline-flex;
}
.check-list-section .box li strong{
    display:block;
    text-transform: uppercase;
    margin-bottom:5px;
}
.check-list-section .box li i {
	padding-right: 7px;
	color: var(--main_color);
	font-size: 30px;
}
.check-list-section .box:before {
	display: block;
	content: '';
	height: calc(100% - 8px);
	width: 1px;
	background: rgba(50,54,68,.25);
	position: absolute;
	left: 50%;
	top: 0; 
}
@media  screen and  (max-width: 767px) {
    .circle {
        column-count: 1;
    }
    .check-list-section h2 {
        font-size: 30px;
    }
    .check-list-section .box {
        column-count: 1;
    }
    .check-list-section .box:before {
        display: none;
    }
    .check-list-section{
        padding-top:0;
        padding-bottom:0;
    }
}
</style>