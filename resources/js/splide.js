import Splide from '@splidejs/splide';
import '@splidejs/splide/css';

const OPTIONS_SINGLE_FULL = {
    type: 'loop',
    perPage: 1,
    perMove: 1,
    pagination: false,
    autoplay: false,
    interval: 2500,
    pauseOnHover: true,
    arrows: true,
    autoHeight: true,
    classes: {
    arrow: 'splide__arrow',
    prev: 'splide__arrow--prev top-1/2 -left-4! md:-left-16! flex! justify-center items-center size-10! rounded-full! border-2! border-white! bg-transparent! opacity-100! hover:bg-white/20! z-10 [&_svg]:fill-white! [&_svg]:size-4!',
    next: 'splide__arrow--next top-1/2 -right-4! md:-right-16! flex! justify-center items-center size-10! rounded-full! border-2! border-white! bg-transparent! opacity-100! hover:bg-white/20! z-10 [&_svg]:fill-white! [&_svg]:size-4!',
},
    breakpoints: {
        640: {
            gap: '1rem',
            padding: '1rem',
        },
        768: {
            gap: '2rem',
            padding: '2rem',
        },
    }
};

function initializeSplide(element) {
    let splide = new Splide(element, OPTIONS_SINGLE_FULL);
    splide.mount();
}

document.addEventListener('DOMContentLoaded', function () {
    const splides = document.querySelectorAll('.splide');
    splides.forEach(function (element) {
        initializeSplide(element);
    });
});