let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active')
};

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active')
};

var swiper = new Swiper(".home-slider", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 2,
        slideShadows: true,
    },
    loop: true,
    autoplay:{
        delay: 3000,
        disableOnInteraction: false,
    }
});

var swiper = new Swiper(".service-slider", {
    slidesPerView: 2,
    grabCursor: true,
    loop:true,
    spaceBetween: 10,
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        700: {
            slidesPerView: 2,
        },
        1050: {
            slidesPerView: 3,
        },
    },
    autoplay:{
        delay: 2000,
        disableOnInteraction:false,
    }
});

var swiper = new Swiper(".review-slider", {
    slidesPerView: 1,
    grabCursor: true,
    loop:true,
    spaceBetween: 10,
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        700: {
            slidesPerView: 2,
        },
        1050: {
            slidesPerView: 3,
        },
    },
    autoplay:{
        delay: 5000,
        disableOnInteraction:false,
    }
});

const counters = document.querySelectorAll('.counter');
const speed = 20; // The lower the slower

counters.forEach(counter => {
    counter.innerText = '0';

    const updateCounter = () => {
        const target = counter.getAttribute('data-target');
        const c = +counter.innerText;
        const increment = target/ 200;

        if(c < target ){
            counter.innerText = `${Math.ceil(c + increment)}`;
            setTimeout(updateCounter, 1);
        }else{
            counter.innerText = target;
        }
    };

    updateCounter();
});
