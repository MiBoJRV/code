<?php get_header() ?>

<div class="container blitz">
	<h2>VRBO review</h2>
	<form name="blah_blah">
		<div style="overflow: hidden; position: relative; text-align: center;">
			<div class="op"></div>
			<select id="menu1" name="menu1">
				<option selected="selected" value="">Select Unit</option>
				<?php if( have_rows('options_list') ): ?>
				    <?php while( have_rows('options_list') ): the_row(); ?>
				        <option value="<?php the_sub_field('option_value'); ?>"><?php the_sub_field('option_name'); ?></option>
				    <?php endwhile; ?>
				<?php endif; ?>
				<!--<option value="http://www.vrbo.com/883761/reviews/write">Ailina House</option>--><!--OPTION EXAMPLE-->
			</select>
		</div>
	</form>
</div><!--End div container--> 

<style type="text/css">
	form {
		max-width: 550px;
	}
	.op{
		width:0; 
		height:0; 
		border:7px solid transparent; 
		border-top-color:var(--main_color); 
		position:absolute; 
		right:15px; 
		top:40%;
	} 
	#menu1{ 
		-moz-appearance:none; 
		-webkit-appearance: none; 
		border: 1px solid var(--main_color); 
		font-size:18px; 
		background:none; 
		position: relative; 
		z-index: 5; 
		padding: 10px 15px;
		width: 100%;
		outline: none;
	}  
	.blitz{
    	padding: 50px 0 150px;
	}
	.blitz h2 {
		margin-top: 0;
		margin-bottom: 30px;
	    font-size: 42px;
	    color: #4A4A4A;
	}

	@media(max-width:550px){ 
		#menu1{ 
			width:100%; 
		} 
		.op{ 
			left:auto; right:20px; 
		} 
	} 
</style>

<script type="text/javascript">
	var urlmenu = document.getElementById( 'menu1' );
	urlmenu.onchange = function() {
	window.open( this.options[ this.selectedIndex ].value, '_self');
	};
</script>

<?php get_footer(); ?>