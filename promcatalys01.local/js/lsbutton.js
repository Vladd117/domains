alert('ok');
window.addEventListener('DOMContentLoaded',
    function() {
        let lsbutton = document.querySelectorAll('.lbtn-container'),
            leftside = document.querySelector('.leftside'),
            rotate = document.querySelectorAll('.lbtn-rotate-450'),
            before = document.querySelectorAll('.lbtn-button-icon');

        function closeBar() {
            for (let i = 0; i < lsbutton.length; i++) {

                lsbutton[i].style.maxHeight = '2.6em';
                before[i].style.left = '1em';
            }
        }


        function openBar(i) {
            console.log(lsbutton[i].style.maxHeight);
            if (lsbutton[i].style.maxHeight == '2.6em') {
                lsbutton[i].style.maxHeight = '25em';
                rotate[i].style.transform = 'rotate(450deg)';

            } else {
                lsbutton[i].style.maxHeight = '2.6em';
                rotate[i].style.transform = 'rotate(360deg)';
            }
        }

        closeBar();

        leftside.addEventListener('click', (event) => {
            let target = event.target.closest('.lbtn-container');
            for (let i = 0; i < lsbutton.length; i++) {
                if (target == lsbutton[i]) {
                    //closeBar();
                    openBar(i);
                }
            }

        });
        leftside.addEventListener('mouseover', (event) => {
            let target = event.target.closest('.lbtn-container');
            for (let i = 0; i < lsbutton.length; i++) {
                if (target == lsbutton[i] && lsbutton[i].style.maxHeight == '2.6em') {
                    rotate[i].style.transform = 'rotate(360deg)';
                    before[i].dataset.before = '>';
                    before[i].style.left = '1em';
                } else {
                    if (target == lsbutton[i]) {
                        before[i].style.left = '1em';
                    }
                }
            }
        });
        leftside.addEventListener('mouseout', (event) => {
            let target = event.target.closest('.lbtn-container');
            for (let i = 0; i < lsbutton.length; i++) {
                if (target == lsbutton[i] && lsbutton[i].style.maxHeight == '25em') {
                    rotate[i].style.transform = 'rotate(450deg)';
                    before[i].dataset.before = '>';
                    before[i].style.left = '0.6em';
                } else {
                    rotate[i].style.transform = 'rotate(0deg)';
                    before[i].dataset.before = '';
                    before[i].style.left = '1em';
                }
            }
        });
    });