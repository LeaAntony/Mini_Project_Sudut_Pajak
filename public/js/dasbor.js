// animasi counting untuk section counter
function animateCounting(targetElement, start, end, duration) {
    let current = start;
    const increment = (end - start) / (duration / 1000 * 60);
    const timer = setInterval(() => {
        current += increment;
        targetElement.textContent = Math.round(current);
        if (current >= end) {
            clearInterval(timer);
            targetElement.textContent = end;
        }
    }, 16.7);
}

// animasi counting untuk counter1
document.addEventListener("DOMContentLoaded", function () {
    const counterElement = document.getElementById("counter1");
    const startValue = 0;
    const endValue = 100;
    const animationDuration = 2000;
    animateCounting(counterElement, startValue, endValue, animationDuration);
});

// animasi counting untuk counter2
document.addEventListener("DOMContentLoaded", function () {
    const counterElement = document.getElementById("counter2");
    const startValue = 0;
    const endValue = 200;
    const animationDuration = 2000;
    animateCounting(counterElement, startValue, endValue, animationDuration);
});

// animasi counting untuk counter3
document.addEventListener("DOMContentLoaded", function () {
    const counterElement = document.getElementById("counter3");
    const startValue = 0;
    const endValue = 250;
    const animationDuration = 2000;
    animateCounting(counterElement, startValue, endValue, animationDuration);
});

// animasi counting untuk counter4
document.addEventListener("DOMContentLoaded", function () {
    const counterElement = document.getElementById("counter4");
    const startValue = 0;
    const endValue = 150;
    const animationDuration = 2000;
    animateCounting(counterElement, startValue, endValue, animationDuration);
});

// slick carousel untuk section layanan
$(document).ready(function(){
    $('.autoplay').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        swipeToSlide: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        speed: 3000
    });
});
