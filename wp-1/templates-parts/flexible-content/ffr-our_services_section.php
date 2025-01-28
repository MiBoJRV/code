<?php global $ourServices;
$ourServices++; ?>

    <section
            class="ffr-our_services_section ffr-our_services_section-<?php echo $ourServices; ?> <?php echo get_sub_field('custom_class'); ?>">
        <div class="ffr-our_services_section__content">
            <h2 class="title">
                <?php echo get_sub_field('section_title'); ?>
            </h2>
            <?php echo get_sub_field('section_text'); ?>
            <ul class="block-list">
                <?php
                $services = get_sub_field('services_list_repeater');
                if ($services):
                    foreach ($services as $service):
                        ?>
                        <li>
                            <div>
                                <img src="<?= $service['icon'] ?>" alt="<?= $service['alt'] ?>"/>
                            </div>
                            <div>
                                <h3><?= $service['title'] ?></h3>
                                <ul class="text-list">
                                    <?php
                                    $items = $service['text_list']; /* наступний репітер філд */
                                    if ($items):
                                        foreach ($items as $item):
                                            ?>
                                            <li>
                                                <?= $item['text_list_item'] ?>
                                            </li>

                                        <?php
                                        endforeach;
                                    endif;
                                    ?>
                                </ul>
                                <a class="block-list-btn" href="<?= $service['button_link'] ?>">
                                    <?= $service['button_text'] ?>
                                </a>
                            </div>
                        </li>
                    <?php
                    endforeach;
                endif;
                ?>
            </ul>
        </div>
        <?php if ($ourServices < 2): ?>
            <style>
                .ffr-our_services_section {
                    position: relative;
                    z-index: 9;
                    margin-top: -260px;
                    padding: 0 15px;
                }

                @media only screen and (max-width: 991px) {
                    .ffr-our_services_section {
                        margin: 100px 0 0;
                        padding: 0 10px;
                    }
                }

                .ffr-our_services_section__content {
                    max-width: 1200px;
                    width: 100%;
                    margin: 0 auto;
                    padding: 50px 30px 90px;
                    border-radius: 20px;
                    background: #FFF;
                    box-shadow: 0px 10px 60px 0px rgba(10, 45, 97, 0.10);
                }

                @media only screen and (max-width: 991px) {
                    .ffr-our_services_section__content {
                        padding: 50px 5px 70px;
                    }
                }

                .ffr-our_services_section h2 {
                    color: #333;
                    text-align: center;
                    font-size: 55px;
                    font-style: normal;
                    font-weight: 700;
                    line-height: 61.6px;
                    margin-bottom: 12px;
                }

                @media only screen and (max-width: 991px) {
                    .ffr-our_services_section h2 {
                        font-size: 40px;
                        line-height: 61.6px;
                        padding: 0 30px;
                    }
                }

                .ffr-our_services_section p {
                    color: #333;
                    text-align: center;
                    font-size: 20px;
                    font-style: normal;
                    font-weight: 400;
                    line-height: 30px;
                    max-width: 970px;
                    margin: 0 auto 20px auto;
                }

                @media only screen and (max-width: 991px) {
                    .ffr-our_services_section p {
                        padding: 0 30px;
                        font-size: 13px;
                        line-height: 30px;
                    }
                }

                .ffr-our_services_section .block-list {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    column-gap: 30px;
                    row-gap: 100px;
                    margin-top: 60px;
                }

                @media only screen and (max-width: 991px) {
                    .ffr-our_services_section .block-list {
                        flex-direction: column;
                        align-items: center;
                        gap: 30px;
                    }
                }

                .ffr-our_services_section .block-list h3 {
                    color: #333;
                    font-size: 18px;
                    font-style: normal;
                    font-weight: 700;
                    line-height: 25.2px;
                    margin-bottom: 15px;
                }

                .ffr-our_services_section .block-list img {
                    max-width: 200px;
                    min-width: 115px;
                }

                @media only screen and (max-width: 1199px) {
                    .ffr-our_services_section .block-list img {
                        max-width: 150px;
                    }
                }

                @media only screen and (max-width: 1199px) {
                    .ffr-our_services_section .block-list img {
                        max-width: 115px;
                    }
                }

                .ffr-our_services_section .block-list > li {
                    color: #666;
                    font-size: 13px;
                    font-style: normal;
                    font-weight: 400;
                    line-height: 18.2px;
                    background: #FFF;
                    box-shadow: 0px 12px 60px 0px rgba(10, 45, 97, 0.10);
                    max-width: 558px;
                    padding: 20px;
                    display: flex;
                    gap: 34px;
                    width: calc(50% - 17px);
                }

                @media only screen and (max-width: 991px) {
                    .ffr-our_services_section .block-list > li {
                        width: 100%;
                        gap: 20px;

                    }
                }

                @media only screen and (max-width: 480px) {
                    .ffr-our_services_section .block-list > li {
                        padding: 20px 5px;
                    }

                }

                .ffr-our_services_section .block-list > li div:nth-of-type(2) {
                    display: flex;
                    flex-direction: column;
                }

                .ffr-our_services_section .block-list-btn {
                    color: #FE0E42;
                    font-size: 13px;
                    font-style: normal;
                    font-weight: 400;
                    line-height: 18.2px;
                    border: 1px solid #FE4B2B;
                    background: #FFF;
                    width: 121px;
                    height: 26px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    margin-top: 27px;
                    align-self: end;
                    margin-right: 20px;
                }

                .ffr-our_services_section .text-list li {
                    list-style: disc;
                    margin-left: 20px;
                }
            </style>
        <?php endif; ?>
    </section>

<?php
