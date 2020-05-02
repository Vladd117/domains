window.addEventListener('DOMContentLoaded',
    function() {
        'use strict';
        let product = document.querySelectorAll('.product'),
            img = document.querySelectorAll('.list-img'),
            title = document.querySelectorAll('.prod-title'),
            prodlist = document.querySelector('.prodlist'),
            prodText = document.querySelectorAll('.prod-text');


        function hideProdContent(a) {
            // if (!product[a].classList.contains('hide-product')) {
            for (let i = a; i < product.length; i++) {
                product[i].classList.remove('show-product');
                product[i].classList.add('hide-product');
                product[i].classList.add('anim-product');
                if (prodText[i].classList.contains('show-text')) {
                    prodText[i].classList.remove('show-text');
                }
                prodText[i].classList.add('hide-text');
                //  }
            }
        }
        hideProdContent(0);

        function showProdContent(b) {
            //if (product[b].classList.contains('hide-product')) {
            product[b].classList.remove('hide-product');
            product[b].classList.remove('anim-product');
            product[b].classList.add('show-product');
            document.documentElement.scrollTop = product[b].offsetTop;
            //setTimeout(() => {
            prodText[b].classList.remove('hide-text');
            prodText[b].classList.add('show-text');
            //}, 100);
            console.log(product[b].classList);
            console.log('ok');
            // setTimeout(() => {
            scroll(product[b].offsetTop);
            // }, 600);
            // prodlist.classList.remove('hide');
            // prodlist.classList.add('show');
            // }
        }

        function scroll(b) {
            document.documentElement.scrollTop = b;
            // if (document.documentElement.scrollTop < b) {
            //     let scrl = setInterval(() => {
            //         let scs = (b - document.documentElement.scrollTop) / 50 + 1;
            //         document.documentElement.scrollTop += scs;
            //         if (document.documentElement.scrollTop >= b) { clearInterval(scrl); }
            //     }, 5);
            // }
            // if (document.documentElement.scrollTop > b) {
            //     let scrl = setInterval(() => {
            //         let scs = (document.documentElement.scrollTop - b) / 50 + 1;
            //         document.documentElement.scrollTop -= scs;
            //         if (document.documentElement.scrollTop <= b) { clearInterval(scrl); }
            //     }, 5);
            // }
        }

        prodlist.addEventListener('click', function(event) {
            let target = event.target.closest(".product");
            if (!target) {
                return;
            } else {
                for (let i = 0; i < product.length; i++) {
                    if (target == product[i]) {
                        hideProdContent(0);
                        showProdContent(i);
                        break;
                    }
                }
            }

        }, true);
        // prodlist.addEventListener('click', function(event) {
        //     let target = event.target;

        //     if (target && target.classList.contains('list-img')) {
        //         for (let i = 0; i < img.length; i++) {
        //             if (target == img[i]) {
        //                 console.log(i);
        //                 hideProdContent(0);
        //                 showProdContent(i);
        //                 break;
        //             }
        //         }
        //     }
        // }, true);
        // prodlist.addEventListener('click', function(event) {
        //     let target = event.target;

        //     if (target && target.classList.contains('prod-title')) {
        //         for (let i = 0; i < title.length; i++) {
        //             if (target == title[i]) {
        //                 console.log(i);
        //                 hideProdContent(0);
        //                 showProdContent(i);
        //                 break;
        //             }
        //         }
        //     }
        // }, true);
    });