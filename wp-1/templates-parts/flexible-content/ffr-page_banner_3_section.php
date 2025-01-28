<?php global $aboutUsBannerFFR;
  $aboutUsBannerFFR++; ?>

<section
        class="about-us-banner about-us-banner-ffr-<?php echo $aboutUsBannerFFR; ?> <?php echo get_sub_field('custom_class'); ?>">
    <div class="about-us-banner-content">
        <div class="about-us-banner-image">
          <?php $image = get_sub_field('main_image'); ?>
            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
        </div>
        <div class="about-us-banner-text">
            <h1 class="title">
              <?php echo get_sub_field('title'); ?>
            </h1>
            <p>
              <?php echo get_sub_field('text'); ?>
            </p>
          <?php $image = get_sub_field('article_image_#1'); ?>
            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
          <?php $image = get_sub_field('article_image_#2'); ?>
            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>

        </div>

    </div>
  <?php if ($aboutUsBannerFFR < 2): ?>
      <style>
          .about-us-banner {
              background-image: url('<?php echo get_template_directory_uri(); ?>/images/ffr/about_us_page_bg.webp');
              background-repeat: no-repeat;
              background-size: contain;
              position: relative;
              margin: 0 auto;
              overflow: hidden;
          }

          @media only screen and (max-width: 1200px) {
              .about-us-banner {
                  align-items: center;
              }
          }

          @media only screen and (max-width: 991px) {
              .about-us-banner {
                  height: auto;
                  background-image: none;
              }
          }

          .about-us-banner-content {
              width: 100%;
              margin: 0 auto 0 auto;
              display: flex;
              position: relative;
              z-index: 9;
              gap: 33px;
              padding: 90px 60px 0;
              max-width: 1500px;
          }

          @media only screen and (max-width: 991px) {
              .about-us-banner-content {
                  flex-direction: column;
                  padding: 69px 0 0;
                  align-items: center;
                  gap: 99px;
              }
          }

          .about-us-banner-text {
              margin-bottom: 18px;
              max-width: 482px;
          }

          @media only screen and (max-width: 991px) {
              .about-us-banner-text {
                  padding: 0 15px;
              }
          }

          .about-us-banner-text .title {
              font-size: 55px;
              font-style: normal;
              font-weight: 700;
              line-height: 61.6px;
              color: #ffffff;
              padding: 11px 0 36px;
              position: relative;
              color: #333;
              padding-top: 17px;
          }

          @media only screen and (max-width: 991px) {
              .about-us-banner-text .title {
                  font-size: 32px;
                  line-height: 32px;
              }
          }

          .about-us-banner-text p {
              font-size: 16px;
              font-style: normal;
              font-weight: 400;
              line-height: 30.6px;
              color: #ffffff;
              color: #666;
              max-width: 482px;
              margin-bottom: 28px;
          }

          @media only screen and (max-width: 991px) {
              .about-us-banner-text p {
                  max-width: 100%;
                  font-size: 13px;
                  font-weight: 700;
                  line-height: 25.2px;
                  margin-bottom: 4px;
              }
          }

          .about-us-banner-text img {
              width: 100%;
              height: auto;
              max-width: 484px;
          }

          .about-us-banner-text img:nth-of-type(1) {
              margin-top: 26px;
              margin-bottom: 30px;
          }

          .about-us-banner-image {
              max-width: 862px;
              width: 100%;
          }

          @media only screen and (max-width: 991px) {
              .about-us-banner-image {
                  max-width: 100%;
              }
          }

          .about-us-banner-image img {
              width: 100%;
              height: auto;
          }
      </style>
  <?php endif; ?>
</section>


