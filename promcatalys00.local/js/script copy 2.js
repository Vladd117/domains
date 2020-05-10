window.addEventListener('DOMContentLoaded',
    function() {
        'use strict';
        let product = document.querySelectorAll('.product'),
            //listImg = document.querySelector('.list-img'),
            prodText = document.querySelectorAll('.prod-text'),
            cards = document.querySelectorAll('.card');


        function hideProdContent(a) {
            for (let i = a; i < product.length; i++) {
                product[i].classList.remove('show-product');
                product[i].classList.add('hide-product');
                //product[i].classList.add('anim-product');
                product[i].style.backgroundColor = 'rgba(0, 174, 255, .1)';
                if (prodText[i].classList.contains('show-text')) {
                    prodText[i].classList.remove('show-text');
                }
                prodText[i].classList.add('hide-text');
            }
        }
        hideProdContent(0);

        function showProdContent(i) {
            //console.log(product[b].classList);
            product[i].classList.remove('hide-product');
            product[i].classList.add('show-product');
            prodText[i].classList.remove('hide-text');
            prodText[i].classList.add('show-text');
        }



        // prodlist.addEventListener('click', function(event) {
        //     let target = event.target.closest(".product");
        //     if (!target) {
        //         return;
        //     } else {
        //         for (let i = 0; i < product.length; i++) {
        //             if (target == product[i]) {
        //                 hideProdContent(0);
        //                 showProdContent(i);
        //                 break;
        //             }
        //         }
        //     }

        // }, true);




        for (let i = 0; i < cards.length; i++) {
            let card = cards[i];
            if (product[i].classList.contains('hide-product')) {
                card.addEventListener('click', function(event) {
                    console.log(event.target);
                    hideProdContent(0);
                    showProdContent(i);
                    event.target.style.transition = '0s';
                    card.style.transition = '0s';
                    document.documentElement.scrollTop = card.offsetTop;
                    console.log(card.offsetTop);
                    event.target.style.backgroundColor = 'rgb(255, 255, 255)';

                    event.target.style.transform = 'rotate(0)';

                });
                card.addEventListener('mousemove', startRotate, true);
                card.addEventListener('mouseout', stopRotate, true);

            }
            if (!product[i].classList.contains('hide-product')) {
                card.style.backgroundColor = 'rgba(0, 174, 255, 0)';
                product[i].style.backgroundColor = 'rgba(0, 174, 255, 0)';
                product[i].style.transform = 'rotate(0)';
                product[i].style.transition = '0s';
            }
        }
        const halfHeight = document.querySelector('.card').offsetHeight / 2;
        const halfWidth = document.querySelector('.card').offsetWidth / 2;

        // function showProduct(i) {
        //     hideProdContent(0);
        //     showProdContent(i);
        // }

        function startRotate(event) {

            if (event.target.classList.contains('hide-product')) {
                //console.log(event.target);
                event.target.style.transition = '0.1s';
                //event.target.style.borderColor = 'rgb(255, 100, 0)';
                event.target.style.backgroundColor = 'rgba(0, 174, 255, 0.4)';
                event.target.style.transform = 'rotateX(' + -
                    (event.offsetY - halfHeight) / 7 + 'deg) rotateY(' +
                    (event.offsetX - halfWidth) / 7 + 'deg) scale(1.1)';
            } else { event.target.style.transition = '0s'; }
        }

        function stopRotate(event) {
            if (!event.target.classList.contains('show-product')) {
                event.target.style.backgroundColor = 'rgba(0, 174, 255, .1)';
                event.target.style.transition = '0.5s';
                event.target.style.transform = 'rotate(0)';
                //event.target.style.borderColor = 'rgb(21, 110, 184)';
                //console.log(event.target);
            }
        }

    });