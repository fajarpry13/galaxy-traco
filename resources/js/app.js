import scrollSpy from 'simple-scrollspy'
import './bootstrap';
import './splide.js';

if (document.querySelector('#navbar-scrollspy')) {
    scrollSpy('#navbar-scrollspy', {
        sectionClass: '.scrollspy',
        menuActiveTarget: '.nav-link',
        offset: 280,
        onActive: (el) => {
            el.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
        }
    });
}


// import Alpine from 'alpinejs'

// window.Alpine = Alpine

// Alpine.start()
