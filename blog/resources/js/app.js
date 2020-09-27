require('./bootstrap');
let page = document.querySelector('.page');
        let themeButton = document.querySelector('.theme-button');

        themeButton.onclick = function () {
            page.classList.toggle('light-theme');
            page.classList.toggle('dark-theme');
        };

        let upButton = document.querySelector('.up-button');

        window.onscroll = function () {
            if (window.pageYOffset > 200) {
                upButton.classList.add('shown');
            } else {
                upButton.classList.remove('shown');
            }
        };

        upButton.onclick = function () {
            window.scrollTo(0, 0);
        };

        let downButton = document.querySelector('.down-button')

        downButton.onclick = function() {
            window.scrollTo(0, 1000000000);
        }
