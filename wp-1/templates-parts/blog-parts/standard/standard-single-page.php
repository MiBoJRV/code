<section
        class="post-banner_2">


    <div class="post-banner_2-content">
        <?php
        $breadcrumbs = get_breadcrumb();

        if (!empty($breadcrumbs)) {
            echo '<p id="breadcrumbs">' . implode(' / ', $breadcrumbs) . '</p>';
        }

        // Выводим дату создания поста
        if (is_single()) {
            echo '<p id="post-date">' . get_the_time('d.m.Y') . '</p>';
        }
        ?>
        <div class="post-banner_2-text">
            <h2 class="title">
                <?php echo get_field('title'); ?>
            </h2>
        </div>
        <div class="list-wrap">
            <?php if (have_rows('author_list')): ?>
                <?php while (have_rows('author_list')):
                    the_row(); ?>
                    <div class="author_list">
                        <div class="avatar">
                            <?php $image = get_sub_field('author_image'); ?>
                            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
                        </div>
                        <div class="info">
                            <p class="author_name"><?php echo get_sub_field('author_name'); ?></p>
                            <p class="author_role"><?php echo get_sub_field('author_role'); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="post-banner_2-image">
        <?php $image = get_field('main_image'); ?>
        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
    </div>
    <style>
        .post-banner_2 {
            padding: 160px 0 50px;
            position: relative;
            min-height: 839px;
        }

        @media only screen and (max-width: 991px) {
            .post-banner_2 {
                padding: 143px 0 28px;
                min-height: auto;
            }
        }

        .post-banner_2 #breadcrumbs {
            color: #FFFCE9;
            font-family: 'Roboto', sans-serif;
            font-size: 10px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 25px;
            position: relative;
            z-index: 10;
        }

        @media only screen and (max-width: 991px) {
            .post-banner_2 #breadcrumbs {
                margin-bottom: 30px;
            }
        }

        .post-banner_2 #breadcrumbs a {
            color: #FFFCE9;
            font-family: 'Roboto', sans-serif;
            font-size: 10px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 25px;
            position: relative;
            z-index: 10;
        }

        .post-banner_2 #post-date {
            color: #FFFCE9;
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
            font-style: normal;
            font-weight: 900;
            line-height: normal;
            letter-spacing: 2.8px;
            text-transform: uppercase;
            margin-bottom: 57px;
            position: relative;
            z-index: 10;
        }

        @media only screen and (max-width: 991px) {
            .post-banner_2 #post-date {
                mb30
            }
        }

        .post-banner_2 .post-banner_2-content {
            position: relative;
            z-index: 10;
            max-width: 1318px;
            width: 100%;
            margin: 0 auto;
            padding: 0 20px;

            display: flex;
            flex-direction: column;
            height: 100%;
            min-height: 633px;
        }

        .post-banner_2 .title {
            color: #FFF;
            font-family: 'Montserrat', sans-serif;
            font-size: 48px;
            font-style: normal;
            font-weight: 900;
            line-height: normal;
            letter-spacing: 4.8px;
            text-transform: uppercase;
            text-shadow: 8px 8px 0 #000, 0 -3px 0 #000, 3px -3px 0 #000, 3px 0 0 #000, 3px 8px 0 #000, 0 3px 0 #000, -3px 3px 0 #000, -3px 0 0 #000;
            max-width: 766px;
            width: 100%;
            margin-bottom: 103px;
        }

        @media only screen and (max-width: 991px) {
            .post-banner_2 .title {
                font-size: 36px;
                letter-spacing: 3.6px;
                mb155
            }
        }

        @media only screen and (max-width: 389px) {
            .post-banner_2 .title {
                font-size: 28px;
                letter-spacing: 3.6px;
            }
        }

        .post-banner_2 .list-wrap {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: auto;
        }

        .post-banner_2 .author_list {
            display: flex;
            gap: 19px;
        }

        .post-banner_2 .author_list .info {
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding: 15px 0;
        }

        .post-banner_2 .author_list .author_name {
            color: #FFFCE9;
            font-family: 'Roboto', sans-serif;
            font-size: 15px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .post-banner_2 .author_list .author_role {
            color: #FFFCE9;
            font-family: 'Roboto', sans-serif;
            font-size: 10px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
            letter-spacing: 2px;
        }

        .post-banner_2 .post-banner_2-image {
            top: 0;
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            left: 50%;
            transform: translate(-50%, 0);
            margin: 0 auto;
        }

        .post-banner_2 .post-banner_2-image img {
            height: 100%;
            width: auto;
            object-fit: cover;
            left: 50%;
            transform: translate(-50%, 0);
            position: relative;
        }

        .post-banner_2 .post-banner_2-image:after {
            content: '';
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            position: absolute;
            background: linear-gradient(0deg, rgba(0, 0, 0, 0.30) 0%, rgba(0, 0, 0, 0.30) 100%), url("<?php echo $image['url']; ?>"), lightgray 50% / cover no-repeat;
            background-repeat: no-repeat;
            background-position: top center;
            background-size: cover;
            max-width: 1920px;
            left: 50%;
            transform: translate(-50%, 0);
        }
    </style>

</section>

<section class="main-content">
    <div class="col-md-12 blogMainContent">

        <div class="content-wrap">
            <div class="post_content">
                <div class="main_post_content">
                    <div class="table_of_contents">
                        <h5 class="content_title"><?php echo get_field('title_post_table_of_contents'); ?></h5>
                        <ul class="list">

                            <?php if (have_rows('post_table_of_contents')): ?>
                                <?php while (have_rows('post_table_of_contents')):
                                    the_row(); ?>
                                    <li class="list-item">
                                        <a href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('text'); ?></a>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <article>
                        <?php the_content(); ?>
                    </article>
                </div>
                <div class="post_info">
                    <div class="list-wrap">
                        <?php if (have_rows('author_list')): ?>
                            <?php while (have_rows('author_list')):
                                the_row(); ?>
                                <div class="author_list">
                                    <div class="avatar">
                                        <?php $image = get_sub_field('author_image'); ?>
                                        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
                                    </div>
                                    <div class="info">
                                        <p class="author_name"><?php echo get_sub_field('author_name'); ?></p>
                                        <p class="author_role"><?php echo get_sub_field('author_role'); ?></p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="recent_posts">
                        <div class="recent_posts_block">
                            <?php
                            $recent_posts = wp_get_recent_posts(array(
                                'numberposts' => 2,
                                'post_status' => 'publish'
                            ));

                            foreach ($recent_posts as $post_item) :
                                $default_post_img_url = get_stylesheet_directory_uri() . '/images/post_default_big.png';
                                $post_img_url = has_post_thumbnail($post_item['ID']) ? get_the_post_thumbnail_url($post_item['ID'], 'full') : $default_post_img_url;
                                ?>
                                <div class="recent_post">
                                    <div class="post-date">
                                        <?php
                                        if (is_single()) {
                                            echo '<p id="post-date">' . get_the_time('d.m.Y') . '</p>';
                                        } ?>
                                    </div>
                                    <a href="<?php echo get_permalink($post_item['ID']) ?>">
                                        <img src="<?php echo esc_url($post_img_url); ?>"
                                             alt="<?php echo esc_attr($post_item['post_title']); ?>">
                                        <h4><?php echo $post_item['post_title'] ?></h4>
                                    </a>
                                </div>
                            <?php endforeach;
                            wp_reset_postdata();
                            ?>
                        </div>
                        <div class="all-post">
                            <a href="blog">Read other <br> articles </a>
                        </div>
                        <style>
                            .recent_posts .all-post {
                                margin-top: 50px;
                            }

                            .recent_posts .all-post a {
                                border-radius: 70px;
                                border: 4px solid #FFFCE9;
                                background: #155634;
                                color: #FFFCE9;
                                text-align: center;
                                font-family: 'Montserrat', sans-serif;
                                font-size: 20px;
                                font-style: normal;
                                font-weight: 900;
                                line-height: normal;
                                letter-spacing: 4px;
                                text-transform: uppercase;
                                max-width: 390px;
                                width: 100%;
                                height: 88px;
                                padding: 20px;
                                margin: 0 auto;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                            }

                            .post_info {
                                max-width: 1120px;
                                margin: 0 auto;
                                width: 100%;
                                margin-top: 50px;
                            }


                            .recent_post .post-date {
                                color: #231F20;
                                font-family: 'Roboto', sans-serif;
                                font-size: 10px;
                                font-style: normal;
                                font-weight: 600;
                                line-height: normal;
                                letter-spacing: 1px;
                                margin-bottom: 25px;
                            }

                            .post_info .recent_post h4 {
                                color: #231F20;
                                font-family: 'Roboto', sans-serif;
                                font-size: 16px;
                                font-style: normal;
                                font-weight: 600;
                                line-height: normal;
                                letter-spacing: 1.6px;
                                margin-top: 25px;
                                text-align: left;
                            }

                            /*autor*/

                            .post_info .list-wrap {
                                display: flex;
                                flex-direction: column;
                                gap: 15px;
                                margin: 100px 0;

                            }

                            .post_info .author_list {
                                display: flex;
                                gap: 19px;
                            }

                            .post_info .author_list .info {
                                display: flex;
                                flex-direction: column;
                                gap: 10px;
                                padding: 15px 0;
                            }

                            .post_info .author_list .author_name {
                                color: #231F20;
                                font-family: 'Roboto', sans-serif;
                                font-size: 15px;
                                font-style: normal;
                                font-weight: 600;
                                line-height: normal;
                                letter-spacing: 3px;
                                text-transform: uppercase;
                            }

                            .post_info .author_list .author_role {
                                color: #231F20;
                                font-family: 'Roboto', sans-serif;
                                font-size: 10px;
                                font-style: normal;
                                font-weight: 600;
                                line-height: normal;
                                letter-spacing: 2px;
                            }

                            .recent_posts {

                            }

                            .recent_posts_block {
                                display: flex;
                                gap: 30px;
                            }
                            @media only screen and (max-width: 991px) {
                                .recent_posts_block {
                                    flex-direction: column;
                                    justify-content: center;
                                }
                            }

                            .recent_post {
                                width: calc(50% - 15px);
                            }

                            @media only screen and (max-width: 991px) {
                                .recent_post {
                                    width: 100%;
                                    text-align: center;
                                    max-width: 545px;
                                    margin: 0 auto;
                                }
                            }

                            .recent_post a img {
                                max-height: 305px;
                                min-height: 305px;
                                max-width: 545px;
                                width: 100%;
                                height: auto;
                                object-fit: cover;
                            }

                            @media only screen and (max-width: 991px) {
                                .recent_post a img {
                                    min-height: 189px;
                                }
                            }
                        </style>
                    </div>
                </div>

            </div>
        </div>
    </div><!--End col-md-12-->
    <div class="container-btn">
        <button class="scrollToTopBtn" onclick="scrollToTop()">
            <img class="footer-img" src="<?php echo get_stylesheet_directory_uri() ?>/images/btn-top.svg" alt="#">
            <img class="animated-big" src="<?php echo get_stylesheet_directory_uri() ?>/images/animated-big.svg"
                 alt="#">
            <img class="animated-small" src="<?php echo get_stylesheet_directory_uri() ?>/images/animated-small.svg"
                 alt="#">

        </button>
        <style>
            .container-btn {
                display: block;
                max-width: 1278px;
                width: 100%;
                margin: 0 auto;
                height: 88px;
                position: fixed;
                bottom: 55px;
                left: 50%;
                transform: translate(-50%, 0);
                z-index: 999999;
                transition: transform 1s;
            }

            @media only screen and (max-width: 991px) {
                .container-btn {
                    bottom: 25px;
                }
            }

            .scrollToTopBtn {
                display: none;
                position: absolute;
                right: 0;
                background-color: transparent;
                color: #fff;
                border: none;
                padding: 10px 20px;
                cursor: pointer;
            }

            img.animated-big {
                position: absolute;
                left: 50%;
                transform: translate(-50%, -50%);
                top: 50%;
                transition: all 0.8s ease 0s;
            }

            .scrollToTopBtn:hover img.animated-big {
                transform: translate(-50%, -100%);
            }

            img.animated-small {
                position: absolute;
                left: 50%;
                transform: translate(-50%, -50%);
                bottom: 15%;
                transition: all 0.8s ease 0s;
            }

            .scrollToTopBtn:hover img.animated-small {
                bottom: 60%;
            }

        </style>
        <script>
            // Функція для плавного скролу вверх сторінки
            function scrollToTop() {
                const scrollDuration = 700; // тривалість анімації в мілісекундах
                const scrollStep = -window.scrollY / (scrollDuration / 15);

                const scrollInterval = setInterval(function () {
                    if (window.scrollY !== 0) {
                        window.scrollBy(0, scrollStep);
                    } else {
                        clearInterval(scrollInterval);
                    }
                }, 15);
            }

            // Показує або ховає кнопку "прокрутити вгору" згідно з положенням сторінки
            function handleScroll() {
                const scrollToTopBtn = document.querySelector('.scrollToTopBtn');
                if (window.scrollY > 300) {
                    scrollToTopBtn.style.display = 'block';
                } else {
                    scrollToTopBtn.style.display = 'none';
                }

                // Виклик функції перевірки видимості кнопки відносно футера
                checkFooterVisibility();
            }

            // Функція для показу або ховання кнопки "прокрутити вгору" згідно з положенням сторінки
            const scrollFunction = () => {
                const btn = document.querySelector('.scrollToTopBtn');
                const scrollOffset = 55;

                btn.style.display = (document.body.scrollTop > scrollOffset || document.documentElement.scrollTop > scrollOffset)
                    ? 'block'
                    : 'none';
            };

            // Функція для перевірки видимості кнопки відносно футера
            const checkFooterVisibility = () => {
                const btnContainer = document.querySelector('.container-btn');
                const footer = document.querySelector('footer');
                const footerOffset = footer.offsetTop - window.innerHeight;

                btnContainer.style.position = (window.pageYOffset > footerOffset) ? 'absolute' : 'fixed';
            };

            // Викликати handleScroll та scrollFunction при прокрутці сторінки
            window.addEventListener('scroll', function () {
                handleScroll();
                scrollFunction();
            });
        </script>


    </div>
</section>

<style>

    .main-content .content-wrap {
        max-width: 1795px;
        width: 100%;
        margin: 0 auto;
        border: 3px solid #231F20;
        background-color: #FCF9EB;
        display: flex;
        gap: 20px;
        padding: 50px 25px 150px;
    }
    @media only screen and (max-width: 991px) {
        .main-content .content-wrap {
            padding: 50px 20px 70px;
        }
    }

    .main-content .post_content {
        margin: 0 auto;
    }

    .main_post_content {
        max-width: 1260px;
        width: 100%;
        margin: 0 auto;
        display: flex;
        gap: 20px;
    }

    @media only screen and (max-width: 991px) {
        .main_post_content {
            flex-direction: column;
        }
    }

    .table_of_contents {
        max-width: 265px;
        width: 100%;
    }

    .table_of_contents .content_title {
        color: #231F20;
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;
        letter-spacing: 1.6px;
        text-transform: uppercase;
        margin: 0 0 20px;
    }

    .table_of_contents .list {
        display: flex;
        flex-direction: column;
        gap: 20px;
        margin-left: 30px;
    }

    .table_of_contents .list-item {
        list-style: disc outside;
    }

    .table_of_contents .list a {
        color: #231F20;
        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        letter-spacing: 1.4px;
        text-decoration-line: underline;
    }


    td, th {
        border: 1px solid #000;
        padding: 10px 2px;
    }

    table {
        margin: 10px 0;
    }

    p img {

    }

    .banner {
        max-height: 375px;
        background: #000;
        overflow: hidden;
        position: relative;
    }

    .banner .banner-img {
        width: 100%;
        opacity: 0.8;
    }

    .banner h1 {
        color: #fff;
        text-align: center;
        position: absolute;
        text-align: center;
        width: 100%;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        text-transform: capitalize;
        text-shadow: 0px 0px 10px #00000099;
        font: 400 66px/86px var(--title_font);
    }

    .main-content {
        padding: 70px 0 0;
        min-height: 500px;
        background: #FAFAFA;
        display: flex;
        justify-content: center;
        background-image: url("<?php echo get_stylesheet_directory_uri() ?>/images/backstage-6.png");
    }

    .container_wrap {
        padding: 0 15px;
        margin: 0 auto;
        /*max-width: 1510px;*/
        width: 100%;
    }

    .blogMainContent {
        width: 100%;
        /*max-width: 1265px;*/
    }


    .blogMainContent article h4 {
        font: 400 24px/28px var(--title_font);
    }

    .blogMainContent article {
        max-width: 975px;
        width: 100%;
    }



    .blogMainContent article p {
        margin: 0 0 35px;
        color: #231F20;
        font-family: 'Roboto', sans-serif;
        font-size: 20px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        letter-spacing: 2px;
    }

    .blogMainContent article p:has(img) {
        margin: 50px 0;
    }

    .blogMainContent article h1 {
        color: #333;
        font-size: 55px;
        font-style: normal;
        font-weight: 700;
        line-height: 120%;
        margin-bottom: 35px;
    }

    .blogMainContent article h2 {
        color: #231F20;
        font-family: 'Montserrat', sans-serif;
        font-size: 24px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;
        letter-spacing: 2.4px;
        text-transform: uppercase;
        margin-bottom: 35px;
        margin-top: 50px;
    }

    @media only screen and (max-width: 991px) {
        .blogMainContent article h2 {
        }
    }

    .blogMainContent article h3 {
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: 148.75%;
        margin: 25px 0;
    }

    .blogMainContent article h4 {
        font-size: 20px;
        font-style: normal;
        font-weight: 700;
        line-height: 148.75%;
        margin: 25px 0;
    }

    .blogMainContent article ul {
        margin: 25px 0 25px 15px;
    }

    .blogMainContent article ul li {
        list-style: disc;
        margin-bottom: 20px;
        color: #231F20;
        font-family: 'Roboto', sans-serif;
        font-size: 20px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        letter-spacing: 2px;
    }

    .blogMainContent article ul li:last-of-type {
        margin: 0;
    }

    /*Sidebar Blog*/
    .sidebarBlog {
        padding: 0 15px 40px;
        width: 510px;
        float: right;
    }

    .sidebarBlog h2 {
        margin: 0;
        padding: 15px 0;
        letter-spacing: 0;
        text-align: center;
        text-transform: capitalize;
        border-bottom: 1px solid #D6D6D6;
        font: 400 24px/28px var(--title_font);
        color: var(--title_color);
    }

    .sidebarBlog .cat-list {
        margin: 0;
        padding: 25px;
        list-style: none;
    }

    .sidebarBlog .cat-list li {
        font-size: 16px;
        font-weight: 500;
        line-height: 18px;
        margin-bottom: 10px;
        display: inline-block;
    }

    .sidebarBlog .cat-list li:last-child {
        margin-bottom: 0;
    }

    .sidebarBlog .cat-list li a {
        font: 500 16px/36px Montserrat;
        letter-spacing: 0;
        color: rgba(41, 41, 41, .75);
        text-transform: capitalize;
    }

    .sidebarBlog .cat-list li a:hover {
        color: var(--main_color);
        text-decoration: none;
    }

    .sidebarBlog form {
        overflow: hidden;
    }

    .sidebarBlog form + h2 {
        margin-top: 0;
    }

    .sidebarBlog .imageIn {
        margin-right: 15px;
        width: 130px;
        height: 100px;
        overflow: hidden;
    }

    .sidebarBlog .imageIn img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .sidebarBlog .singlePost h4 {
        margin-top: 0;
        max-height: 70px;
        overflow: hidden;
        font-weight: 700;
        font-size: 20px;
    }

    .sidebarBlog .singlePost h4:before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        height: 100%;
        width: 161px;
        background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1));
    }

    .sidebarBlog .singlePost h4 a {
        color: var(--title_color);
        text-transform: capitalize;
        font: 500 20px/22px var(--title_font);
        overflow: hidden;
        /*white-space: nowrap;
        text-overflow: ellipsis;*/
    }

    .sidebarBlog .singlePost h4 a:hover {
        color: var(--main_color);
        text-decoration: none;
    }

    .sidebarBlog .singlePost .star-rating {
        list-style: none;
        margin: 0;
        font-size: 12px;
        color: var(--second_color);
    }

    .sidebarBlog .singlePost .star-rating li {
        display: inline-block;
    }

    /*singlePostCont*/
    .leftFloat {
        float: left;
    }

    .popularPost {
        padding: 10px 10px 0;
    }

    .popularPost:not(:last-child) {
        margin-bottom: 0px;
        padding-bottom: 10px;
        border-bottom: 1px solid #D6D6D6;
    }

    .popularPost h4 {
        font-size: 16px;
        font-weight: 500;
        line-height: 18px;
        /*color: */
    <?php //=$main_color?> /*;*/
        padding-right: 10px;
    }

    /*singlePost*/
    .searchPost {
        margin: 30px 0;
    }

    .searchPost input:first-child {
        height: 60px;
        border: 1px solid var(--main_color);
        border-right: none;
        font-size: 16px;
    }

    .searchPost input:first-child::-moz-placeholder {
        color: #292929;
        font-size: 16px;
        text-transform: uppercase;
        font-weight: 400;
        line-height: 1.4;
        opacity: .5;
    }

    .searchPost input:first-child::-webkit-input-placeholder {
        color: #292929;
        font-size: 16px;
        text-transform: uppercase;
        font-weight: 400;
        line-height: 1.4;
        opacity: .5;
    }

    .searchPost input:last-child {
        height: 60px;
        /*background: var(--second_color) url('/wp-content/themes/BizcorLuxury/images/search_white.svg') no-repeat;*/
        background-size: auto 50%;
        background-position: center center;
        border: none;
        width: 75px;
    }

    .searchPost input:last-child:hover {
        background-color: var(--main_color);
    }

    .popularPost span {
        /*color: */
    <?php //=$main_color?> /*;*/
        font-size: 14px;
    }

    .sideBarReadMore {
        /*color: */
    <?php //=$main_color?> /*;*/
    }

    .sideBarReadMore:hover {
        color: #43c3ff;
    }

    .sidebarBlog .singlePost {
        margin-top: 0;
        padding-bottom: 10px;
    }

    .box-white {
        background: #fff;
        margin-bottom: 30px;
        border: 1px solid #D6D6D6;
    }

    .sidebar-featured h3 {
        text-align: center;
        margin: 20px auto;
        font-size: 24px;
        line-height: 38px;
        display: none;
    }

    .sidebar-featured-block {
        position: relative;
        height: 525px;
        transition: box-shadow .4s;
    }

    .sidebar-featured-block-item {
        text-align: center;
        max-width: 550px;
        max-height: 500px;
        cursor: default;
    }

    .sidebar-featured-block-item:hover .sidebar-featured-img img {
        transform: scale(1.1);
    }

    .sidebar-featured-block .sidebar-featured-img {
        position: relative;
        overflow: hidden;
        background: #000;
        height: 100%;
    }

    .sidebar-featured-block .sidebar-featured-img::before {
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

    /*.sidebar-featured-block:hover .sidebar-featured-img::before {
        top: 23px;
        left: 23px;
        right: 23px;
        bottom: 23px;
    }*/
    .sidebar-featured-block .sidebar-featured-img::after {
        /*content: '';*/
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border: 15px solid rgba(255, 255, 255, .25);
    }

    .sidebar-featured-block .sidebar-featured-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: .4s;
        opacity: .9;
    }

    .sidebar-featured-block .sidebar-featured-txt {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        z-index: 10;
        text-align: center;
    }

    .sidebar-featured-block .sidebar-featured-txt h3 {
        display: block;
        font-size: 32px;
        margin: 0 auto 20px;
        color: #fff;
        text-shadow: 0 0 10px rgba(0, 0, 0, .6);
        text-transform: capitalize;
    }

    .sidebar-featured-block .sidebar-featured-txt span {
        display: inline-block;
        width: 225px;
        height: 55px;
        padding: 14px 18px;
        border: 2px solid #fff;
        color: #fff;
        font-size: 16px;
        font-weight: 600;
        text-transform: uppercase;
        cursor: pointer;
        transition: .4s;
    }

    .sidebar-featured-block .sidebar-featured-txt span:hover {
        background: var(--main_color);
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

    .c-search-widget__item .form-control.is-focused,
    .c-search-widget__item .form-control:focus {
        border-color: #ccc;
    }

    /******************* FIX RIGHT SIDEBAR *************************/
    .sidebarBlog h2 {
        margin: 0;
        padding: 15px 0;
        letter-spacing: 0;
        text-align: center;
        text-transform: capitalize;
        border-bottom: 1px solid #D6D6D6;
        font: 700 24px/28px var(--title_font);
        color: var(--title_color);
    }

    .sidebarBlog .singlePost h4 a {
        color: var(--title_color);
        text-transform: capitalize;
        font: 500 20px/23px var(--paragraph_font);
        overflow: hidden;
        /*white-space: nowrap;
        text-overflow: ellipsis;*/
    }

    .sidebarBlog .singlePost h4 {
        margin-top: 24px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: clip;
        position: relative;
    }

    .sidebarBlog .singlePost h4::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        height: 100%;
        width: 150px;
        background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1));
    }

    .sidebarBlog .start-your-vacation-box h3 {
        font: 30px/36px 'Playfair Display';
        color: #FFFFFF;
        text-transform: uppercase;
    }

    .sidebarBlog .start-your-vacation-box a {
        font: 600 16px/25px 'Poppins';
        color: #FFFFFF;
        background: transparent;
        border: 2px solid #FFFFFF;
    }

    .sidebarBlog .start-your-vacation-box a:hover {
        background: var(--hover_color);
    }

    .sidebarBlog .cat-list li a {
        font: 500 16px/36px var(--paragraph_font);
        letter-spacing: 0;
        color: var(--paragraph_color);
        text-transform: uppercase;
    }

    .sidebarBlog .cat-list li {
        display: block;
    }

    .blogMainContent article > h1,
    .blogMainContent article > h2,
    .blogMainContent article > h3,
    .blogMainContent article > h4,
    .blogMainContent article > h5,
    .blogMainContent article > h6 {
        color: #292929;
    }

    .searchPost input:first-child {
        height: 60px;
        border: 1px solid var(--second_color);
        border-right: none;
        padding-left: 29px;
        width: calc(100% - 75px);
        font: 400 18px/28px var(--paragraph_font);
    }

    .searchPost input:first-child::-moz-placeholder {
        color: var(--paragraph_color);
        text-transform: uppercase;
        opacity: .5;
        font: 400 18px/28px var(--paragraph_font);
    }

    .searchPost input:first-child::-webkit-input-placeholder {
        color: var(--paragraph_color);
        text-transform: uppercase;
        opacity: .5;
        font: 400 18px/28px var(--paragraph_font);
    }

    /******************* END FIX RIGHT SIDEBAR *************************/

    /***Responsive**Responsive**Responsive***/
    @media (max-width: 1199px) {
        .blogMainContent, .sidebarBlog {
            width: 100%;
        }

        .blogMainContent {
            margin-bottom: 30px;
        }

        .main-content, .sidebarBlog {
            padding-bottom: 0;
        }

        .blogMainContent article {
            padding: 0;
        }
    }

    @media (max-width: 991px) {
        .banner h1 {
            font-size: 44px;
            padding: 0 15px;
        }
    }

    @media (max-width: 767px) {
        .banner h1 {
            font-size: 30px;
        }
    }
</style>