function paralaxMoveX(event) {
    paralax[0].style.transform = 'translateX(' + event.clientX / 120 + 'px) translateY(' + event.clientY / 120 + 'px)';
    paralax[1].style.transform = 'translateX(' + event.clientX / 40 + 'px) translateY(' + event.clientY / 80 + 'px)';
    paralax[2].style.transform = 'translateX(' + event.clientX / 20 + 'px) translateY(' + event.clientY / 20 + 'px)';
}

let paralax = document.querySelectorAll('.paralax');
document.addEventListener('mousemove', paralaxMoveX);