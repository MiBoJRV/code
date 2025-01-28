<?php get_header(); ?>
<?php 
    if(get_field('blog_variants', get_blogPageId()) == 'One Screen'):
   	    include(get_theme_root().'/'.get_option('stylesheet').'/templates-parts/blog-parts/one-screen/one-screen-single-page.php');
    else:
        include(get_theme_root().'/'.get_option('stylesheet').'/templates-parts/blog-parts/standard/standard-single-page.php');
    endif;
?>
<?php get_footer(); ?>