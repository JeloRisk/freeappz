import "./bootstrap";

const carouselWrapper = document.querySelector(".carousel-wrapper");
const slides = document.querySelectorAll(".carousel-slide");
const slideWidth = slides[0].clientWidth;
let currentIndex = 0;

setInterval(() => {
    currentIndex = (currentIndex + 1) % slides.length;
    const offset = -1 * currentIndex * slideWidth;
    carouselWrapper.style.transform = `translateX(${offset}px)`;
}, 3000);
