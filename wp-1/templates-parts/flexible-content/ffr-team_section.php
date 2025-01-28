<?php global $teamFFR;
$teamFFR++; ?>

<section class="ffr-team_section ffr-team_section-<?php echo $teamFFR; ?> <?php echo get_sub_field('custom_class'); ?><?php echo get_sub_field('background_color'); ?>">
    <div class="ffr-team_section__content">
        <h2><?php echo get_sub_field('section_title'); ?></h2>
        <ul class="team-list">
            <?php if (have_rows('team_list')): ?>
                <?php while (have_rows('team_list')):
                    the_row(); ?>
                    <li class="team-list-item">
                        <div class="avatar">
                            <?php $image = get_sub_field('avatar'); ?>
                            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
                        </div>
                        <div class="text">
                            <h3><?php echo get_sub_field('name'); ?></h3>
                            <p><?php echo get_sub_field('text'); ?></p>
                        </div>

                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>
    <?php if ($teamFFR < 2): ?>
        <style>
            .ffr-team_section {
                position: relative;
                z-index: 9;
                padding-top: 115px;
            }

            .ffr-team_section.white {
                background: #FFFFFF;
            }

            .ffr-team_section.blue {
                background: radial-gradient(70.71% 70.71% at 50% 50%, #3202AA 0%, #1E0475 100%);
            }

            .ffr-team_section__content {
                max-width: 1230px;
                margin: 0 auto;
            }

            .ffr-team_section h2 {
                margin: 0 auto 40px 30px;
                color: #333;
                font-size: 55px;
                font-style: normal;
                font-weight: 700;
                line-height: 61.6px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-team_section h2 {
                    font-size: 40px;
                    line-height: 61.6px;
                }

            }

            .ffr-team_section .team-list {
                display: flex;
                flex-direction: column;
                gap: 30px;
                padding: 0 15px;
            }

            .ffr-team_section .team-list-item {
                border-radius: 20px;
                background: #FFF;
                box-shadow: 0px 10px 60px 0px rgba(10, 45, 97, 0.10);
                padding: 27px 41px;
                display: flex;
                justify-content: space-between;
                column-gap: 52px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-team_section .team-list-item {
                    flex-direction: column;
                    align-items: center;
                    padding: 45px 25px;

                }
            }

            .ffr-team_section .team-list-item h3 {
                color: #333;
                font-size: 32px;
                font-style: normal;
                font-weight: 700;
                line-height: 37px;
                margin-bottom: 14px;
            }

            @media only screen and (max-width: 991px) {
                .ffr-team_section .team-list-item h3 {
                    text-align: center;
                    font-size: 32px;
                    line-height: 41.6px;
                    margin: 0;
                    padding: 30px 0;
                }
            }

            .ffr-team_section .team-list-item p {
                color: #333;
                font-size: 20px;
                font-style: normal;
                font-weight: 400;
                line-height: 30px;
            }


            .ffr-team_section .team-list-item .text {
                padding: 27px 0;
            }

            .ffr-team_section .team-list-item img {
                width: 308px;
                height: 308px;
                min-width: 308px;
            }
        </style>
    <?php endif; ?>
</section>