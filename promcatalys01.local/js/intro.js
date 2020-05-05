let intro = {
    introImg: document.querySelectorAll('.intro-img'),
    prevSlide: 0,
    nextSlide: document.querySelectorAll('.intro-img').length - 1,
    slideUp: function() {
        setTimeout(function() {
            intro.prevSlide += 1;
            intro.nextSlide = intro.prevSlide - 1;
            if (intro.prevSlide > intro.introImg.length - 1) {
                intro.prevSlide = 0;
                intro.nextSlide = intro.introImg.length - 1;
            }
            intro.introImg[intro.prevSlide].style.transform = "scale(1)";
            intro.introImg[intro.prevSlide].style.opacity = 1;
            intro.introImg[intro.nextSlide].style.transform = "scale(2)";
            intro.introImg[intro.nextSlide].style.opacity = 0;
            intro.slideUp();
        }, 5000);
    },
};
window.addEventListener('DOMContentLoaded', function() {
    intro.introImg[0].style.transform = "scale(1)";
    intro.introImg[0].style.opacity = 1;
    intro.slideUp();
});