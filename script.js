//menu bar
let menu=document.querySelector('#menu-btn');
let navbar=document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};
//scrollbar
window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

//slide
document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll(".home-slider .slide");
    const prevButton = document.querySelector(".prev");
    const nextButton = document.querySelector(".next");
    let currentSlide = 0;

    function showSlide(index) {
        const slider = document.querySelector(".home-slider");
        const totalSlides = slides.length;
        if (index >= totalSlides) {
            currentSlide = 0;
        } else if (index < 0) {
            currentSlide = totalSlides - 1;
        } else {
            currentSlide = index;
        }
        const offset = -currentSlide * 100;
        slider.style.transform = `translateX(${offset}%)`;
    }

    prevButton.addEventListener("click", function () {
        showSlide(currentSlide - 1);
    });

    nextButton.addEventListener("click", function () {
        showSlide(currentSlide + 1);
    });

    // Automatic slide change
    setInterval(function () {
        showSlide(currentSlide + 1);
    }, 2000);
});


//text
document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll(".home .slide");
    let currentIndex = 0;

    document.querySelector(".next").addEventListener("click", function () {
        slides[currentIndex].classList.remove("active");
        currentIndex = (currentIndex + 1) % slides.length;
        slides[currentIndex].classList.add("active");
    });

    document.querySelector(".prev").addEventListener("click", function () {
        slides[currentIndex].classList.remove("active");
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        slides[currentIndex].classList.add("active");
    });
});

//review sliper
var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
  