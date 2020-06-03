window.addEventListener('DOMContentLoaded',
    function() {
        let lsbutton = document.querySelectorAll('.lbtn-container'),
            leftside = document.querySelector('.leftside'),
            rotate = document.querySelectorAll('.lbtn-rotate-450'),
            before = document.querySelectorAll('.lbtn-button-icon'),
            text = document.querySelectorAll('.lbtext'),
            circle = document.querySelectorAll('.lbtn-circle');

        function closeBar() {
            for (let i = 0; i < lsbutton.length; i++) {
                lsbutton[i].style.maxHeight = '2.6em';
                before[i].style.left = '1em';
            }
        }

        function openedBar() {
            for (let i = 0; i < lsbutton.length; i++) {
                if (lsbutton[i].style.maxHeight == '30em') {
                    circle[i].style.width = '9.5em';

                }
            }
        }

        function openBar(i) {
            console.log(lsbutton[i].style.maxHeight);
            if (lsbutton[i].style.maxHeight == '2.6em') {
                lsbutton[i].style.maxHeight = '30em';
                rotate[i].style.transform = 'rotate(450deg)';

            } else {
                lsbutton[i].style.maxHeight = '2.6em';
                rotate[i].style.transform = 'rotate(360deg)';
            }
        }

        closeBar();

        leftside.addEventListener('click', function(event) {
            let target = event.target.closest('.lbtn-container');
            for (let i = 0; i < lsbutton.length; i++) {
                if (target == lsbutton[i]) {
                    //closeBar();
                    openBar(i);
                }
            }

        });
        leftside.addEventListener('mouseover', function(event) {
            let target = event.target.closest('.lbtn-container');
            for (let i = 0; i < lsbutton.length; i++) {
                if (target == lsbutton[i] && lsbutton[i].style.maxHeight == '2.6em') {
                    rotate[i].style.transform = 'rotate(360deg)';
                    circle[i].style.width = '9.5em';
                    text[i].style.color = 'white';
                    before[i].dataset.before = '>';
                    before[i].style.left = '1em';
                }
                if (lsbutton[i].style.maxHeight == '30em') {
                    text[i].style.color = 'white';
                    circle[i].style.width = '9.5em';
                    before[i].style.left = '1em';

                }
            }
            openedBar();
        });
        leftside.addEventListener('mouseout', function(event) {
            let target = event.target.closest('.lbtn-container');
            for (let i = 0; i < lsbutton.length; i++) {
                if (target == lsbutton[i] && lsbutton[i].style.maxHeight == '30em') {
                    rotate[i].style.transform = 'rotate(450deg)';
                    circle[i].style.width = '9.5em';
                    before[i].dataset.before = '>';
                    before[i].style.left = '0.6em';
                    text[i].style.color = 'white';

                } else {
                    if (lsbutton[i].style.maxHeight != '30em') {
                        rotate[i].style.transform = 'rotate(0deg)';
                        circle[i].style.width = '2.5em';
                        text[i].style.color = 'rgb(0,36,77)';
                        before[i].dataset.before = '';
                        before[i].style.left = '1em';
                    }
                }
            }
        });
        openedBar();
    });