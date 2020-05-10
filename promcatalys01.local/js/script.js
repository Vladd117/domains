window.addEventListener('DOMContentLoaded',
    function() {
        'use strict';
        let product = document.querySelectorAll('.product'),
            listImg = document.querySelectorAll('.list-img'),
            prodText = document.querySelectorAll('.prod-text'),
            prodlist = document.querySelector('.prodlist'),
            cards = document.querySelectorAll('.card');


        function hideProdContent(a) {
            for (let i = a; i < product.length; i++) {
                product[i].classList.remove('show-product');
                product[i].classList.add('hide-product');
                listImg[i].style.borderColor = 'rgb(0, 174, 255)';
                product[i].style.backgroundColor = 'rgb(195, 236, 255)';

            }
        }
        hideProdContent(0);

        function showProdContent(i) {
            console.log(product[i].classList);
            product[i].classList.remove('hide-product');
            product[i].classList.add('show-product');
            prodText[i].classList.remove('hide-text');
            prodText[i].classList.add('show-text');
            product[i].style.backgroundColor = 'white';
            listImg[i].style.borderColor = 'rgb(255, 100, 0)';
            document.documentElement.scrollTop = cards[i].offsetTop;
        }

        prodlist.addEventListener('click', function(event) {

            for (let i = 0; i < product.length; i++) {
                if (event.target == product[i]) {

                    event.target.style.transform = 'rotate(0)';
                    event.target.style.transition = 'none';
                    listImg[i].style.transform = 'scale(1)';

                    event.target.style.borderColor = 'rgb(21, 110, 184)';
                    event.target.style.backgroundColor = 'rgb(195, 236, 255)';
                    console.log(event.target.parentNode.offsetTop);
                    console.log(event.target.style.transition);

                    hideProdContent(0);
                    showProdContent(i);

                    break;
                }
            }
        }, true);

        prodlist.addEventListener('mousemove', function(event) {
            let target = event.target;
            if (target && target.classList.contains('hide-product')) {
                for (let i = 0; i < product.length; i++) {
                    if (target == product[i]) {
                        startRotate(event);
                        break;
                    }
                }
            } else { return; }

        }, true);

        prodlist.addEventListener('mouseover', function(event) {
            let target = event.target;
            if (target && target.classList.contains('hide-product')) {

                for (let i = 0; i < product.length; i++) {
                    if (target == product[i] && target.classList.contains('hide-product')) {
                        listImg[i].style.transform = 'scale(1.1)';
                        listImg[i].style.borderColor = 'rgb(255, 100, 0)';
                        target.style.borderColor = 'rgb(255, 100, 0)';
                        target.style.backgroundColor = 'rgb(149, 222, 255)';
                        break;
                    }
                }
            }

        }, true);

        prodlist.addEventListener('mouseout', function(event) {
            let target = event.target;
            if (target && target.classList.contains('hide-product')) {
                for (let i = 0; i < product.length; i++) {
                    if (target == product[i]) {
                        listImg[i].style.transform = 'scale(1)';
                        listImg[i].style.borderColor = 'rgb(0, 174, 255)';
                        target.style.borderColor = 'rgb(21, 110, 184)';
                        target.style.backgroundColor = 'rgb(195, 236, 255)';
                        stopRotate(event);
                        break;
                    }
                }
            }

        }, true);


        const halfHeight = document.querySelector('.card').offsetHeight / 2;
        const halfWidth = document.querySelector('.card').offsetWidth / 2;

        function startRotate(event) {
            if (event.target.classList.contains('hide-product')) {
                event.target.zIndex = '1000';
                event.target.style.transition = 'transform 0.1s';
                event.target.style.transform = 'rotateX(' + -
                    (event.offsetY - halfHeight) / 7 + 'deg) rotateY(' +
                    (event.offsetX - halfWidth) / 7 + 'deg) scale(1.05) translateZ(10px)';
            } else { event.target.style.transition = '0s'; }
        }

        function stopRotate(event) {
            if (!event.target.classList.contains('show-product')) {
                event.target.zIndex = '100';
                event.target.style.transition = 'borderColor 0.5s, transform 0.5s';
                event.target.style.transform = 'rotate(0) translateZ(0px) scale(1)';
            }
        }
    });