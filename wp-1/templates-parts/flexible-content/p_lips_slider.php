<?php global $lipsSl;
$lipsSl++; ?>
<?php
$bgImage = get_sub_field('section_background');
?>
<section class="p_lips_slider p_lips_slider-<?php echo $lipsSl; ?> <?php echo get_sub_field('custom_class'); ?>"
         style="background-image:url('<?php echo $bgImage['url']; ?>');">
    <div class="scroller" data-speed="fast">
        <ul class="tag-list scroller__inner">
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


    <?php if ($lipsSl < 2): ?>
        <style>
            .p_lips_slider {
                height: 99px;
                display: flex;
                align-items: center;
            }

            @media only screen and (max-width: 480px) {
                .p_lips_slider {
                    height: 54px;
                }
            }
            .scroller {
                max-width: 1920px;
                width: 100%;
                margin: 0 auto;
            }

            .scroller__inner {
                padding-block: 1rem;
                display: flex;
                flex-wrap: wrap;
            }

            .scroller[data-animated="true"] {
                overflow: hidden;
                -webkit-mask: linear-gradient(
                        90deg,
                        transparent,
                        white 20%,
                        white 80%,
                        transparent
                );
                mask: linear-gradient(90deg, transparent, white 20%, white 80%, transparent);
            }

            .scroller[data-animated="true"] .scroller__inner {
                width: max-content;
                flex-wrap: nowrap;
                gap: 100px;
                animation: scroll var(--_animation-duration, 40s)
                var(--_animation-direction, forwards) linear infinite;
            }

            @media only screen and (max-width: 480px) {
                .scroller[data-animated="true"] .scroller__inner {
                    gap: 30px;
                    height: 54px;
                    display: flex;
                    align-items: center;
                }
            }

            .scroller[data-direction="right"] {
                --_animation-direction: reverse;
            }

            .scroller[data-direction="left"] {
                --_animation-direction: forwards;
            }

            .scroller[data-speed="fast"] {
                --_animation-duration: 20s;
            }

            .scroller[data-speed="slow"] {
                --_animation-duration: 60s;
            }

            @keyframes scroll {
                to {
                    transform: translate(calc(-50% - 50px));
                }
            }

            /* general styles */


            .tag-list {
                margin: 0;
                padding-inline: 0;
                list-style: none;
            }

            .tag-list li {
                padding: 25px 0;
            }

            @media only screen and (max-width: 480px) {
                .tag-list li {
                    padding: 19px 0;
                }
            }

            .tag-list li img{
                height: 50px;
            }

            @media only screen and (max-width: 480px) {
                .tag-list li img{
                    height: 15px;
                }
            }
            /* for testing purposed to ensure the animation lined up correctly */
            .test {
                background: red !important;
            }


        </style>

    <?php endif; ?>
    <script>
        const scrollers = document.querySelectorAll(".scroller");

        // Если пользователь не выбрал уменьшенное движение, добавляем анимацию
        if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
            addAnimation();
        }

        function addAnimation() {
            scrollers.forEach((scroller) => {
                // добавляем data-animated="true" ко всем элементам .scroller на странице
                scroller.setAttribute("data-animated", true);

                // создаем массив из элементов внутри .scroller-inner
                const scrollerInner = scroller.querySelector(".scroller__inner");
                const scrollerContent = Array.from(scrollerInner.children);

                // Для каждого элемента в массиве клонируем его и добавляем три копии
                scrollerContent.forEach((item) => {
                    const duplicatedItem = item.cloneNode(true);
                    duplicatedItem.setAttribute("aria-hidden", true);
                    scrollerInner.appendChild(duplicatedItem.cloneNode(true)); // первая копия
                    // scrollerInner.appendChild(duplicatedItem.cloneNode(true)); // вторая копия
                    // scrollerInner.appendChild(duplicatedItem.cloneNode(true)); // третья копия
                });
            });
        }

    </script>
</section>