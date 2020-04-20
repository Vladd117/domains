window.addEventListener('DOMContentLoaded',
    function() {
        'use strict';
        let product = document.querySelectorAll('.product'),
            prodlist = document.querySelector('.prodlist'),
            prodText = document.querySelectorAll('.prod-text');


        function hideProdContent(a) {
            for (let i = a; i < product.length; i++) {
                product[i].classList.remove('show-product');
                product[i].classList.add('hide-product');
                product[i].classList.add('anim-product');
                if (prodText[i].classList.contains('show-text')) {
                    prodText[i].classList.remove('show-text');
                }
                prodText[i].classList.add('hide-text');
            }
        }
        hideProdContent(0);

        function showProdContent(b) {
            // if (product[b].classList.contains('hide-text')) {
            product[b].classList.remove('hide-product');
            product[b].classList.remove('anim-product');
            product[b].classList.add('show-product');
            setTimeout(() => {
                prodText[b].classList.remove('hide-text');
                prodText[b].classList.add('show-text');
            }, 100);
            console.log(product[b].classList);
            console.log('ok');
            // prodlist.classList.remove('hide');
            // prodlist.classList.add('show');
            // }
        }
        prodlist.addEventListener('click', function(event) {
            let target = event.target;

            if (target && target.classList.contains('product')) {
                for (let i = 0; i < product.length; i++) {
                    if (target == product[i]) {
                        console.log(i);
                        hideProdContent(0);
                        showProdContent(i);
                        break;
                    }
                }
            }
        }, true);
    });