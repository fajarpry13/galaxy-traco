import './bootstrap';
import './splide.js';
import scrollSpy from 'simple-scrollspy'

console.log(scrollSpy);
    scrollSpy('#navbar-scrollspy', {
        sectionClass: '.scrollspy',
        menuActiveTarget: '.nav-link',
        offset: 100,
        onActive: (el) => {
            el.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
        }
    });

console.log('Hello, GalaxyT!');

// import Alpine from 'alpinejs'
 
// window.Alpine = Alpine
 
// Alpine.start()