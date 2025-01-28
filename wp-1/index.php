<?php get_header(); ?>
    <div class="content">
        <div class="container">
            <?php
                if( have_posts() ){ while( have_posts() ){ the_post();
                	the_content();
                	}
                }
            ?>
        </div>

    </div><!--End Content-->
<?php get_footer(); ?>