document.addEventListener('DOMContentLoaded', function (){
    let moreInfoLink = document.querySelectorAll('.bonus-listing__card_content-payments-bottom a');

    if (moreInfoLink) {
        moreInfoLink.forEach(function (link) {
            link.addEventListener("click", function () {
                let cardWrapper = link.parentElement.parentElement.parentElement.parentElement;
                let svgArrow = link.querySelector('svg');
                let innerText = link.querySelectorAll('span');
                let hideContent = cardWrapper.querySelector('.bonus-listing__card_hide');
                svgArrow.classList.toggle('rotate');

                if (hideContent) {
                    hideContent.classList.toggle('show');
                }

                innerText.forEach(function (text) {

                    if (text.classList.contains('hide')) {
                        text.classList.remove('hide');
                    } else {
                        text.classList.add('hide');
                    }
                })
            });
        })
    }
})