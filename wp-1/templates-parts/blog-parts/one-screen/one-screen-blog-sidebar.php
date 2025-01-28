<style>
.right_sidebar .searchPost {
    position: relative;
    margin-bottom: 50px;
}
.right_sidebar .searchPost input[type="text"] {
    width: 100%;
    padding: 11px 20px;
    border: 1px solid #CBCBCB;
    float: none;
}
.Safari .right_sidebar .searchPost input[type="text"] {
    padding-bottom: 12px;
}
.right_sidebar .searchPost input[type="submit"] {
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    width: 52px;
    background: #8F8F8F url(/wp-content/themes/BizcorLuxury/images/searchWhite.svg) center no-repeat;
    background-size: auto 50%;
    color: #fff;
    font-size: 25px;
    border: none;
    cursor: pointer;
    transition: .3s;
}
.right_sidebar .searchPost input[type="submit"]:hover {
    background-color: var(--main_color);
}
.right_sidebar .searchPost input[type="text"]::-moz-placeholder{
    opacity: 1!important;
    color: #9F9F9F;
    font-size: 14px;
}
.right_sidebar .searchPost input::-webkit-input-placeholder{
    color: #9F9F9F;
    font-size: 14px;
}
.right_sidebar {
    position: relative;
    padding: 30px;
    border-left: 1px solid rgba(159,159,159,.4);
    border-top: 1px solid rgba(159,159,159,.4);
    background-color: #F5F5F5;
}
.right_sidebar .c-search-widget {
    margin-bottom: 50px;
}
.right_sidebar .c-search-widget .c-search-widget__item {
    width: 100%;
    padding: 0;
    margin: 0;
}
.right_sidebar .c-search-widget .c-search-widget__item label {
    display: none;
}
.right_sidebar .c-search-widget .row {
    position: relative;
}
.right_sidebar .c-search-widget .c-search-widget__item:nth-child(2) {
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    width: 15%;
}
.right_sidebar .c-search-widget .c-search-widget__item .resortpro-search-submit-button-block,
.right_sidebar .c-search-widget .c-search-widget__item .resortpro-search-unit-block {
    margin: 0;
    padding: 0;
    height: 100%;
}
.right_sidebar .c-search-widget .c-search-widget__item .resortpro-search-unit-block input {
    border: 1px solid #5AACA6;
    background-color: #fff;
    border-radius: 0;
    padding: 15px;
    height: auto;
}
.right_sidebar .c-search-widget .c-search-widget__item .resortpro-search-submit-button-block button {
    width: 100%;
    height: 100%;
    border: none;
    background-color: #5AACA6;
    color: #fff;
    font-size: 25px;
    cursor: pointer;
    -webkit-transition: .3s;
    -o-transition: .3s;
    transition: .3s;
}
.right_sidebar .c-search-widget .c-search-widget__item .resortpro-search-submit-button-block button:hover {
    background-color: #C7B200;
}
.right_sidebar h2 {
    color: #656565;
    text-transform: uppercase;
    font-size: 28px;
    letter-spacing: 1px;
    margin-top: 0;
    margin-bottom: 20px;
    display: inline-block;
    padding-bottom: 3px;
    position: relative;
}
.right_sidebar h2 span{
    font: 400 28px 'Playball_Regular';
    text-transform: capitalize;
}
.right_sidebar h2:after{
    width: 100px;
    height: 1px;
    background: var(--main_color);
    content: "";
    display: block;
    position: absolute;
    bottom: -4px;
    left: 0;
}
.right_sidebar > ul {
    list-style-type: none;
    margin-bottom: 80px;
    padding: 0;
}
.right_sidebar > ul li:not(:last-child) {
    margin-bottom: 15px;
}
.right_sidebar > ul li a {
    color: #656565;
    text-transform: uppercase;
    font-size: 14px;
    font-weight: bold;
    -webkit-transition: .3s;
    -o-transition: .3s;
    transition: .3s;
}
.right_sidebar > ul li a:hover {
    color: var(--main_color);
}
.right_sidebar .rentals {
    display: block;
    text-align: center;
    font-size: 16px;
    text-transform: uppercase;
    color: #fff;
    padding: 10px 15px;
    width: 100%;
    border: none;
    background-color: var(--main_color);
    outline: none;
    transition: .3s;
    letter-spacing: 0.1em;
}
.right_sidebar .rentals:hover {
    background-color: var(--hover_color);
}
.header_social_links {
    display: none;
}
.right_btn .fa-bars {
    font-size: 24px;
    color: #404040;
}
.right_btn {
    display: none;
}
.recent-posts{
    margin-bottom: 60px;
}
.recent-posts h4 {
    margin-top: 0;
    margin-bottom: 20px;
}
.recent-posts h4 a {
    color: var(--title_color);
}
.recent-posts h4 a:hover{
    color: var(--main_color);
}
.right_sidebar > ul li:not(:last-child){
    margin-bottom: 20px;
}

/*RESPONSIVENESS*//*RESPONSIVENESS*//*RESPONSIVENESS*/
@media(max-width: 1600px) {
.right_sidebar {
    padding: 30px 15px;
}
}

@media(max-width: 1400px) {
.wrapper .right_sidebar {
    padding: 30px 20px;
    width: 21%;
}
}

@media(max-width: 1199px) {
.right_sidebar h2 {
    font-size: 20px;
}
.right_sidebar h2 span {
    font-size: 24px;
}
.right_sidebar .rentals {
    padding: 10px 5px;
}
}

@media(max-width: 991px) {
.wrapper .right_sidebar {
    width: 30%;
    height: auto;
}
}

@media(max-width: 767px) {
.wrapper .right_sidebar {
    width: 100%;
}
}
</style>
<div class="right_btn">
    <i class="fa fa-bars" aria-hidden="true"></i>
</div>
<?php get_search_form(); ?>
<?php //include_once('events-sidebar.php'); ?>
<h2>Blog <span>Categories</span></h2>
<ul id="menu-things_to_do_categories" class="menu">
    <?php
    $terms = get_categories();
    foreach($terms as $term){
        echo '<li><a href="/category/'.$term->slug.'">'.$term->name.'</a></li>';
    }
    ?>
</ul>
<div class="recent-posts">
    <h2>Recent <span>Posts</span></h2>
    <div class="recent-post">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
        );

        $query = new WP_Query($args);
        if ($query->have_posts()) :
            while ($query->have_posts()): $query->the_post();
                $img_url = (get_the_post_thumbnail_url()) ? get_the_post_thumbnail_url() : $default_unit_img_url;
                ?>
                <h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>
</div>

<a href="/search-results/" class="rentals">FIND MY RENTAL!</a>