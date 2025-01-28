<div class="view-rentals">
<style>
.view-rentals{
    margin-bottom:30px;
}
.view-rentals h3 {
    text-align: center;
    margin: 20px auto;
    font-size: 24px;
    line-height: 38px;
    display: none;
}
.view-rentals-block {
    position: relative;
    height: 525px;
    transition: box-shadow .4s;
}
.view-rentals-block-item {
    text-align: center;
    max-width: 550px;
    max-height: 500px;
    cursor: default;
}
.view-rentals-block-item:hover .view-rentals-img img {
    transform: scale(1.1);
}
.view-rentals-block .view-rentals-img {
    position: relative;
    overflow: hidden;
    background: #000;
    height: 100%;
}
.view-rentals-block .view-rentals-img::before {
    content: '';
    position: absolute;
    top: 15px;
    left: 15px;
    right: 15px;
    bottom: 15px;
    border: 1px solid #fff;
    transition: .4s;
    z-index: 1;
}
.view-rentals-block .view-rentals-img::after {
    /*content: '';*/
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border: 15px solid rgba(255,255,255,.25);
}
.view-rentals-block .view-rentals-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: .4s;    
}
.view-rentals-block .view-rentals-txt {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    z-index: 10;
    text-align: center;
}
.view-rentals-block .view-rentals-txt h3 {
	display: block;
	margin: 0 auto 20px;
	color: #fff;
	text-shadow: 0 0 10px rgba(0,0,0,.6);
	text-transform: capitalize;
	font: 400 32px/36px var(--title_font);
	padding: 0 15px;
}
.view-rentals-block .view-rentals-txt span {
	display: inline-block;
	padding: 17px;
	background: var(--second_color);
	color: #fff;
	text-transform: uppercase;
	cursor: pointer;
	transition: .4s;
	font: 600 16px/25px var(--paragraph_font);
	width: 225px;
}
.view-rentals-block .view-rentals-txt span:hover {
    background: var(--main_color);
}
.view-rentals-block .view-rentals-txt ul {
    margin: 0;
    padding: 0;
}
.view-rentals-block .view-rentals-txt ul li {
    text-transform: uppercase;
    display: inline-block;
    font-size: 12px;
    color: #000000;
    line-height: 19px;
}
.view-rentals-block .view-rentals-txt ul li:after {
    content: " | ";
}
.view-rentals-block .view-rentals-txt ul li:last-child:after {
    content: " ";
}
</style>
    <?php 
        if(get_field('customize_start_your_vacation_section')!='Customize'){
            $idFS = 268;    
        }else{
            $idFS = $current_page_id;
        }
    ?>
    <div class="view-rentals-block">
        <a href="/search-results/" class="view-rentals-block-item">
            <div class="view-rentals-img">
                <img src="/wp-content/uploads/2020/10/sunset-at-pawleys-island-1.jpg" alt="">
            </div>
            <div class="view-rentals-txt">
                <h3>Start Your<br /> Vacation Now</h3>
                <span class="sidebar_btn">Browse Rentals</span>
            </div>
        </a><!--End view-rentals-block-item-->
    </div><!--End view-rentals-block-->
</div>