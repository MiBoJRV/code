<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
get_header(); ?>
<div class="content">
    <div class="flex-box">
        <article>
            <h1>404</h1>
            <h2>Page Not Found</h2>
            <p>The Page that you're looking for appears to have been moved or deleted. If you're pretty sure something
               should be here, please <a href="/contact-us/">Contact Us</a>, or head back to home by clicking below.</p>
        </article>
        <div class="buttons-box">
            <a class="buttons find-rental" href="/">Take Me Home</a>
        </div>
    </div>
</div><!--End Content-->
<style>
    .content {
        min-height: 650px !important;
        /*background: #000 url('/wp-content/uploads/2020/04/body-of-water-3281906_1920-Default-Banner-Image-min.jpg') no-repeat!important;*/
        background: rgba(5, 35, 72, 1) url(<?php echo get_field('404_background_image', 268)?>) no-repeat !important;
        width: 100%;
        background-size: cover !important;
        height: calc(100vh - 95px);
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }
    .content:before {
        content: "";
        display: block;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        /*background:rgba(0,0,0,0.6); */
        background: rgba(5, 35, 72, .75);
    }
    .content > .flex-box {
        max-width: 600px;
        color: #fff;
        padding: 0 15px;
        position: relative;
        z-index: 2;
    }
    .flex-box article h1 {
        text-align: center;
        letter-spacing: 0;
        color: #fff;
        text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        text-transform: uppercase;
        margin-bottom: 0;
        font: 400 200px/267px var(--title_font);
        line-height: 1;
    }
    .flex-box article h2 {
        color: #fff;
        text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        text-align: center;
        margin-bottom: 0;
        font: 400 40px/50px var(--title_font);
        text-transform: capitalize;
        margin: 30px 0 0;
    }
    .flex-box article p {
        font: 400 16px/28px var(--title_font);
        letter-spacing: 0;
        color: rgba(255, 255, 255, 0.75);
        margin: 50px 0;
    }
    .flex-box article p a {
        /*text-decoration: underline;*/
        color: rgba(255, 255, 255, 0.75);
    }
    .flex-box article p a:hover {
        color: var(--main_color);
    }
    .flex-box .buttons-box {
        display: flex;
        margin: 0 -10px;
    }
    .flex-box .buttons-box .buttons {
        display: block;
        margin: 0 10px;
        /* line-height: 26px; */
        color: #fff;
        padding: 23.5px 16px 20px;
        text-align: center;
        width: 100%;
        font: 600 16px/25px var(--paragraph_font);
        text-transform: uppercase;
    }
    .flex-box .buttons-box .buttons.find-rental {
        border: 1px solid #fff;
    }
    .flex-box .buttons-box .buttons.take-home {
        background: var(--second_color);
        border: 1px solid var(--second_color);
    }
    .flex-box .buttons-box .buttons:hover {
        background: var(--main_color);
        border-color: #fff;
    }
    /*.content svg{
        max-width: 90%;
        margin-top: 15px;
        margin-bottom: 15px;
    }
    .homeBack{
        color: var(--main_color);
    }
    .homeBack:hover{
        color: var(--hover_color);
    }
    .buttonHolder a:hover{
        color: #fff!important;
        background:
    <?php the_field('hover_color', 268); ?>
    !important;
        border-color:
    <?php the_field('hover_color', 268); ?>
    !important;
    }*/
    /**************************** FIX  ********************************/
    .flex-box article h1 {
        text-align: center;
        letter-spacing: 0;
        color: #fff;
        text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        text-transform: uppercase;
        margin-bottom: 0;
        font: 400 200px var(--title_font);
        line-height: 1;
    }
    .flex-box article h2 {
        color: #fff;
        text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        text-align: center;
        margin-bottom: 0;
        font: 400 40px/46px var(--paragraph_font);
        text-transform: capitalize;
    }
    .flex-box article p{
        font: 400 16px/28px var(--paragraph_font);
        letter-spacing: 0;
        color: rgba(255, 255, 255, 0.75);
        margin: 50px 0;
    }
    .flex-box article p a{
        /*text-decoration: underline;*/
        color: rgba(255, 255, 255, 0.75);
    }
    /**************************** END  FIX  ****************************/
    /*Responsivness*//*Responsivness*//*Responsivness*/
    @media (max-width: 600px) {
        .flex-box .buttons-box {
            flex-direction: column;
            margin: 0;
        }
        .flex-box .buttons-box .buttons {
            margin: 5px 0;
        }
        .flex-box article h1 {
            font-size: 170px;
        }
        .flex-box article h2 {
            font-size: 30px;
        }
    }
</style>
<?php get_footer(); ?>
