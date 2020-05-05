function paralax(event) {

    this.querySelectorAll('.paralax').forEach(paralax => {
        let speed = paralax.getAttribute('data-speed');
        //console.log(speed);
        paralax.style.transform = 'translateX(' + event.clientX * speed / 100 + 'px)';
    });
}
document.addEventListener('mousemove', paralax);