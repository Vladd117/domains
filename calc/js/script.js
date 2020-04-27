let inputRub = document.querySelector('#rub'),
    inputUsd = document.querySelector('#usd');

inputRub.addEventListener('input', () => {

    let request = new XMLHttpRequest();

    //request.open(meethod, url, async, login, pass);

    request.open('GET', './js/current.json');
    request.setRequestHeader('Content-type', 'application/json', 'charset=utf-8');
    request.send();

    request.addEventListener('readystatechange', () => {
        if (request.readyState === 4 && request.status == 200) {
            let data = JSON.parse(request.response);

            inputUsd.value = (inputRub.value / data.usd).toFixed(2);
        } else { inputUsd.value = "Server error"; }
    });
});