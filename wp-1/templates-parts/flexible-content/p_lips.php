<?php global $lips;
$lips++; ?>
<?php
$bgImage = get_sub_field('section_background');
?>
<section class="p_lips p_lips-<?php echo $lips; ?> <?php echo get_sub_field('custom_class'); ?>"
         style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="p_lips__content">
        <ul class="list">
            <?php if (have_rows('list')): ?>
                <?php while (have_rows('list')):
                    the_row(); ?>
                    <li class="list-item">
                        <?php $image = get_sub_field('image'); ?>
                        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
        <ul class="list"">
            <?php if (have_rows('list')): ?>
                <?php while (have_rows('list')):
                    the_row(); ?>
                    <li class="list-item">
                        <?php $image = get_sub_field('image'); ?>
                        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>
    <?php if ($lips < 2): ?>
        <style>
            .p_lips {
                height: 99px;
                position: relative;
                z-index: 100;
            }

            .p_lips .p_lips__content {
                display: flex;
                gap: 100px;
                -webkit-mask-image: linear-gradient(to right, rgba(0,0,0,0), rgba(0,0,0,1) 10%,rgba(0,0,0,1) 90%,rgba(0,0,0,0));
                mask-image: linear-gradient(to right, rgba(0,0,0,0), rgba(0,0,0,1) 10%,rgba(0,0,0,1) 90%,rgba(0,0,0,0));
            }

            .p_lips .list {
                display: flex;
                /*gap: 100px;*/
                width: 100%;
                overflow: hidden;
                min-width: 1920px;
                justify-content: space-between;

                animation: scrollList 10s linear infinite; /* Adjust the animation duration as needed */
                white-space: nowrap; /* Prevent items from wrapping to the next line */

                -ms-overflow-style: none;
                scrollbar-width: none;
            }

            .p_lips .list::-webkit-scrollbar {
                display: none;
            }

            .p_lips .list-item {
                padding: 25px -0px;
            }

            .p_lips .list-item img {
                height: 50px;
            }

            @keyframes scrollList {
                0% {
                    transform: translateX(calc(0 - 50px));
                }

                50% {
                    transform: translateX(calc(-50% - 50px));
                }
                100% {
                    transform: translateX(calc(-100% - 50px));
                }


            }

        </style>

    <?php endif; ?>
</section>