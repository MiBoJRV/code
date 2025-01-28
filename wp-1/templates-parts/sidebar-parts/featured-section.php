<div class="sidebar-featured">
<style>
/*sidebar featured*/
.sidebar-featured {
    padding: 11px 0 25px 0;
    border-top: 1px solid #D5D5D5;
}
.sidebar-featured h3 {
    text-align: center;
    margin: 20px auto;
    font-size: 24px;
    line-height: 38px;
}
.sidebar-featured-block {
    box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.2);
    transition: all linear .5s;
}
.sidebar-featured-block:not(:last-child){
    margin-bottom:30px;
}
.sidebar-featured-block:hover{
    box-shadow: 0px 0px 21px 7px rgba(0,0,0,0.5);
}
.sidebar-featured-block-item {
    text-align: center;
    max-width: 550px;
    max-height: 450px;
}
.sidebar-featured-block-item:hover .sidebar-featured-img img {
    transform: scale(1.1);
}
.sidebar-featured-block  .sidebar-featured-img {
    overflow: hidden;
}
.sidebar-featured-block .sidebar-featured-img img {
    width: 100%;
    max-height: 300px;
    object-fit: cover;
}
.sidebar-featured-block .sidebar-featured-txt {
    background: #fff;
    position: relative;
    z-index: 10;
    transition: all linear .5s;
    padding: 20px 0;
}
.sidebar-featured-block-item:hover .sidebar-featured-txt {
    background-color: var(--main_color);
}
.sidebar-featured-block-item:hover .sidebar-featured-txt h3 {
    color: #fff;
}
.sidebar-featured-block-item:hover .sidebar-featured-txt ul li {
    color: #fff;
}
.sidebar-featured-block .sidebar-featured-txt h3 {
    text-transform: uppercase;
    color: var(--main_color);
    font-size: 18px;
    line-height: 19px;
    letter-spacing: 1px;
    margin: 0 auto 5px;
    text-shadow:none;
}
.sidebar-featured-block .sidebar-featured-txt ul {
    margin: 0;
    padding: 0;
}
.sidebar-featured-block .sidebar-featured-txt ul li {
    text-transform: uppercase;
    display: inline-block;
    font-size: 12px;
    color: #000000;
    line-height: 19px;
}
.sidebar-featured-block .sidebar-featured-txt ul li:after {
    content: " | ";
}
.sidebar-featured-block .sidebar-featured-txt ul li:last-child:after {
    content: " ";
}


</style>

    <h3>Featured Vacation Rental</h3>
    
        <?php 
            if(get_field('customize_featured_section')!='Customize'){
                $idFS = 268;    
            }else{
                $idFS = $current_page_id;
            }
        ?>
        <?php if( have_rows('sidebar_rentals_repeater')):?>
          <?php  while ( have_rows('sidebar_rentals_repeater') ) : the_row();?>
            <div class="sidebar-featured-block">
            <a href="<?php the_sub_field('featured_rental_link', $idFS); ?>" class="sidebar-featured-block-item">
                <div class="sidebar-featured-img">
                    <?php if(get_sub_field('featured_rental_image', $idFS)!=''): ?>
                        <img src="<?php the_sub_field('featured_rental_image', $idFS); ?>" alt="">
                    <?php else: ?>
                        <img src="/wp-content/uploads/2019/02/unit4-1-min.jpg" alt="">
                    <?php endif; ?>
                </div>
                <div class="sidebar-featured-txt">
                    <h3><?php the_sub_field('featured_rental_title', $idFS); ?></h3>
                    <ul>
                        <li><?php the_sub_field('featured_rental_beds_number', $idFS); ?> Beds</li>
                        <li><?php the_sub_field('featured_rental_baths_number', $idFS); ?> Baths</li>
                        <li><?php the_sub_field('featured_rental_guests_number', $idFS); ?> Guests</li>
                    </ul>
                </div>
            </a><!--End sidebar-featured-block-item-->
        </div><!--End sidebar-featured-block-->
    <?php endwhile;?>
<?php endif; ?>
</div><!-- end sidebar-featured-block -->