/*const animItems = document.querySelectorAll('._anim-items')

if (animItems.length > 0) {
    window.addEventListener('scroll', animOnScroll);

    function animOnScroll() {
        for (let index = 0; index < animItems.length; index++) {
            const animItem = animItems[index];
            const animItemHeight = animItem.offsetHeight;
            const animItemOffset = offset(animItem).top;
            const animStart = 5;

            let animItemPoint = window.innerHeight - animItemHeight / animStart;


            if (animItemHeight > window.innerHeight) {
                animItemPoint = window.innerHeight - window.innerHeight / animStart;
            }

            if ((pageYOffset > animItemOffset - animItemPoint) && pageYOffset < (animItemOffset + animItemHeight)) {
                animItem.classList.add('_active');

            } else {
                if (!animItem.classList.contains('_anim-no-hide')) {
                    animItem.classList.remove('_active');
                }
            }
        }
    }

    function offset(el) {
        const rect = el.getBoundingClientRect(),
            scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
            scrollTop = window.pageYoffset || document.documentElement.scrollTop;
        return {top: rect.top + scrollTop, left: rect.left + scrollLeft}
    }

    setTimeout(() => {
        animOnScroll();
        console.log('animOnScroll')
    }, 300);

}*/

const animItems = document.querySelectorAll('._anim-items');

if (animItems.length > 0) {
    window.addEventListener('scroll', animOnScroll);

    function animOnScroll() {
        for (let index = 0; index < animItems.length; index++) {
            const animItem = animItems[index];
            const animItemHeight = animItem.offsetHeight;
            const animItemOffset = offset(animItem).top;
            const animStart = 5;

            let animItemPoint = window.innerHeight - animItemHeight / animStart;

            if (animItemHeight > window.innerHeight) {
                animItemPoint = window.innerHeight - window.innerHeight / animStart;
            }

            if ((window.pageYOffset > animItemOffset - animItemPoint) && window.pageYOffset < (animItemOffset + animItemHeight)) {
                animItem.classList.add('_active');
            } else {
                if (!animItem.classList.contains('_anim-no-hide')) {
                    animItem.classList.remove('_active');
                }
            }
        }
    }

    function offset(el) {
        const rect = el.getBoundingClientRect(),
            scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
            scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        return {top: rect.top + scrollTop, left: rect.left + scrollLeft};
    }

    setTimeout(() => {
        animOnScroll();
        console.log('animOnScroll');
    }, 300);
}


/*hover*/
// const links = document.querySelectorAll('.footer-quick-links ul li a');
//
//
// links.forEach(link => {
//     link.addEventListener('touchstart', () => {
//         // Видаляємо клас 'hover' у всіх посилань перед додаванням його поточному
//         links.forEach(otherLink => otherLink.classList.remove('hover'));
//
//         // Додаємо клас 'hover' до поточного посилання
//         link.classList.add('hover');
//     });
// });


//     const links = document.querySelectorAll('.footer-quick-links ul li a');
//
//     // Функція для обробки події
//     const handleTouchStart = (event) => {
//     const targetLink = event.currentTarget;
//
//     // Видаляємо клас 'hover' у всіх посилань перед додаванням його поточному
//     links.forEach(otherLink => otherLink.classList.remove('hover'));
//
//     // Додаємо клас 'hover' до поточного посилання
//     targetLink.classList.add('hover');
// };
//
//     // Додаємо обробник події для кожного посилання
//     links.forEach(link => {
//     link.addEventListener('touchstart', handleTouchStart, { passive: true });
//     link.addEventListener('touchend', () => link.classList.remove('hover'), { passive: true });
// });


//     const links = document.querySelectorAll('.footer-quick-links ul li a');
//
//     // Функція для обробки події
//     const handleTouchStart = (event) => {
//     const targetLink = event.currentTarget;
//
//     // Видаляємо клас 'hover' у всіх посилань перед додаванням його поточному
//     links.forEach(otherLink => otherLink.classList.remove('hover'));
//
//     // Додаємо клас 'hover' до поточного посилання
//     targetLink.classList.add('hover');
//
//     // Відміна дії за замовчуванням та видалення класу після короткої затримки
//     event.preventDefault();
//     setTimeout(() => targetLink.classList.remove('hover'), 300);
// };
//
//     // Додаємо обробник події для кожного посилання
//     links.forEach(link => {
//     link.addEventListener('touchstart', handleTouchStart, { passive: false });
//     link.addEventListener('touchend', () => link.classList.remove('hover'), { passive: false });
//     // link.addEventListener('click', (event) => event.preventDefault());
// });


