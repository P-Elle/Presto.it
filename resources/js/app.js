import './bootstrap';
import 'bootstrap';

import '@nextapps-be/livewire-sortablejs';
import Alpine from 'alpinejs'
 
window.Alpine = Alpine
 
Alpine.start()

import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init(); 
console.log('collegato')


/*!
* Start Bootstrap - Agency v7.0.12 (https://startbootstrap.com/theme/agency)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-agency/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            navbarCollapsible.classList.add('shrink');
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink');
            navbarCollapsible.classList.add('shrink');
            
        } else {
            navbarCollapsible.classList.add('navbar-shrink');
            navbarCollapsible.classList.remove('shrink');
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    //  Activate Bootstrap scrollspy on the main nav element
    // const mainNav = document.body.querySelector('#mainNav');
    // if (mainNav) {
    //     new bootstrap.ScrollSpy(document.body, {
    //         target: '#mainNav',
    //         rootMargin: '0px 0px -40%',
    //     });
    // };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
        
            }
        });
    });

});

//toogle navbar opacity based on width
function myFunction(x) {
    if (x.matches) { // If media query matches
        document.body.querySelector('#mainNav').classList.remove('shrink');
    } else {
        document.body.querySelector('#mainNav').classList.add('shrink');

    }
  }
  
  var x = window.matchMedia("(max-width: 991px)")
  myFunction(x); // Call listener function at run time
  x.addListener(myFunction); // Attach listener function on state changes





 

