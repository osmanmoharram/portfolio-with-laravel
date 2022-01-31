require('./bootstrap');

import Alpine from 'alpinejs'
import axios from 'axios';

window.Alpine = Alpine

Alpine.start()

onbeforeunload = () => {
    if(document.getElementById('sender') !== undefined) {
        console.log('here');
        document.getElementById('sender').value = '';
        document.getElementById('email').value = '';
        document.getElementById('body').value = '';
    }
};

//Reach Me Form
Alpine.store('formSubmit', {
    visible: false,

    submit() {
        axios.post('/', {
            'sender': sender.value,
            'email': email.value,
            'body': body.value
        }).then((response) => {
            document.getElementById('preloader').style.display = 'none';
            document.getElementById('feedback').style.display = 'flex';

            sender.value = '';
            email.value = '';
            body.value = '';

        }).catch((errors) => {
            document.getElementById('preloader').style.display = 'none';

            if (errors.response.data.errors.sender !== undefined) {
                sender.classList.add('border', 'border-red-500')
                senderError.innerHTML = errors.response.data.errors.sender[0];
            }

            if (errors.response.data.errors.email !== undefined) {
                email.classList.add('border', 'border-red-500')
                emailError.innerHTML = errors.response.data.errors.email[0];
            }

            if (errors.response.data.errors.body !== undefined) {
                body.classList.add('border', 'border-red-500')
                bodyError.innerHTML = errors.response.data.errors.body[0];
            }
        });

        document.getElementById('preloader').style.display = 'flex';
    }
});

//Light-Dark Mode
Alpine.store('theme', {
    set(mode) {
        // Whenever the user explicitly chooses light mode
        if(mode === 'light') {
            localStorage.theme = 'light';
            window.updateTheme();
        }

        // Whenever the user explicitly chooses dark mode
        if(mode === 'dark') {
            localStorage.theme = 'dark';
            window.updateTheme();
        }

        // Whenever the user explicitly chooses to respect the OS preference
        if(mode === 'system') {
            localStorage.removeItem('theme');
            window.updateTheme();
        }
    },
});

// configure Swiper to use modules
Swiper.use([Navigation, Pagination]);

// init Swiper:
const mySwiper = new Swiper('.my-swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    autoplay: {
        delay: 2000
    }
});

const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});

/**
 * Carousel with Swiperjs
 */
// core version + navigation, pagination modules:
import Swiper, { Navigation, Pagination } from 'swiper';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
