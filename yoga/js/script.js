window.addEventListener('DOMContentLoaded',
    function() {

        // Tabs ------------------------------------->

        'use strict';
        let tab = document.querySelectorAll('.info-header-tab'),
            info = document.querySelector('.info-header'),
            tabContent = document.querySelectorAll('.info-tabcontent');

        function hideTabContent(a) {
            for (let i = a; i < tabContent.length; i++) {
                tabContent[i].classList.remove('show');
                tabContent[i].classList.add('hide');
            }
        }
        hideTabContent(1);

        function showTabContent(b) {
            if (tabContent[b].classList.contains('hide')) {
                tabContent[b].classList.remove('hide');
                tabContent[b].classList.add('show');
            }
        }
        info.addEventListener('click', function(event) {
            let target = event.target;
            if (target && target.classList.contains('info-header-tab')) {
                for (let i = 0; i < tab.length; i++) {
                    if (target == tab[i]) {
                        hideTabContent(0);
                        showTabContent(i);
                        break;
                    }
                }
            }
        });

        // Таймер! ---------------------------------->

        let deadline = '2020-05-3';

        function getTimeRemainig(endTime) {
            let t = Date.parse(endTime) - Date.parse(new Date()) - 3 * 60 * 60 * 1000,
                seconds = Math.floor((t / 1000) % 60),
                minutes = Math.floor((t / 1000 / 60) % 60),
                hours = Math.floor((t / 1000 / 60 / 60) % 24),
                deys = Math.floor(t / 1000 / 60 / 60 / 24);
            return {
                total: t,
                seconds: seconds,
                minutes: minutes,
                hours: hours,
                deys: deys,
            };
        }

        function setClock(id, endTime) {
            let timer = document.getElementById(id),
                deys = timer.querySelector('.deys'),
                hours = timer.querySelector('.hours'),
                minutes = timer.querySelector('.minutes'),
                seconds = timer.querySelector('.seconds'),
                timeInt = setInterval(updateClock, 1000);

            function updateClock() {
                let t = getTimeRemainig(endTime);
                deys.textContent = t.deys;
                hours.textContent = t.hours;
                if (t.minutes < 10) {
                    minutes.textContent = `0${t.minutes}`;
                } else { minutes.textContent = t.minutes; }
                if (t.seconds < 10) {
                    seconds.textContent = `0${t.seconds}`;
                } else { seconds.textContent = t.seconds; }
                if (t.total <= 0) {
                    clearInterval(timeInt);
                }
            }
        }
        setClock('timer', deadline);

        // Модальное окно ----------------------------->

        let more = document.querySelector('.more'),
            overlay = document.querySelector('.overlay'),
            close = document.querySelector('.popup-close');
        more.addEventListener('click', () => {
            overlay.style.display = "block";
            more.classList.add('more-splash');
            document.body.style.overflow = "hidden";
        });
        close.addEventListener('click', () => {
            overlay.style.display = "none";
            more.classList.remove('more-splash');
            document.body.style.overflow = "";
        });

        //Работа с формой ----------------------------->

        let massage = {
            loading: 'Загрузка...',
            success: 'Спасибо, мы скоро с Вами свяжемся.',
            failure: 'Что-то пошло не так...',
        };
        let form = document.querySelector('.main-form'),
            input = document.getElementsByTagName('input'),
            statusMassage = document.createElement('div');

        statusMassage.classList.add('status');

        form.addEventListener('submit', (event) => {
            event.preventDefault();
            form.appendChild(statusMassage);

            let request = new XMLHttpRequest();
            request.open('POST', 'server.php');
            request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            let formData = new FormData(form);
            request.send(formData);

            request.addEventListener('readystatechange', () => {
                if (request.readyState < 4) {
                    statusMassage.innerHTML = massage.loading;
                } else {
                    if (request.readyState === 4 && request.status == 200) {
                        statusMassage.innerHTML = massage.success;
                    } else {
                        statusMassage.innerHTML = massage.failure;
                    }

                }
            });
            for (let i = 0; i < input.length; i++) {
                input[i].value = '';
            }
        });

        //Слайдер -------------------------------------------------->

        let slideIndex = 1,
            slides = document.querySelectorAll('.slider-item'),
            prev = document.querySelector('.prev'),
            next = document.querySelector('.next'),
            dotsWrap = document.querySelector('.slider-dots'),
            dots = document.querySelectorAll('.dot');
        showSlides(slideIndex);

        function showSlides(n) {
            if (n > slides.length) { slideIndex = 1; }
            if (n < 1) { slideIndex = slides.length; }

            slides.forEach((item) => {
                item.style.display = 'none';
            });
            dots.forEach((item) => {
                item.classList.remove('dot-active');
            });
            slides[slideIndex - 1].style.display = 'block';
            dots[slideIndex - 1].classList.add('dot-active');
        }

        function plusSlide(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }
        prev.addEventListener('click', () => { plusSlide(-1); });
        next.addEventListener('click', () => { plusSlide(1); });

        dotsWrap.addEventListener('click', (event) => {
            for (let i = 0; i < dots.length; i++) {
                if (event.target.classList.contains('dot') && event.target == dots[i]) {
                    currentSlide(i + 1);
                }
            }
        });


    });