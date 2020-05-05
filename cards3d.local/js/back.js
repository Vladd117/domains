function paralaxMove(event) {
    paralax[0].style.transform = 'translateX(' + event.clientX / 100 + 'px)';
    paralax[1].style.transform = 'translateX(' + event.clientX / 25 + 'px)';
    paralax[2].style.transform = 'translateX(' + event.clientX / 12 + 'px)';
}
let paralax = document.querySelectorAll('.paralax');
document.addEventListener('mousemove', paralaxMove);