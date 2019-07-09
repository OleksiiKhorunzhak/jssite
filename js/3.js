var slide = document.querySelectorAll('.slide'),
    firstSlide = slide[0],
    totalSlides = slide.length,
    slideIndex = 1,
    i;

firstSlide.className += ' active';

document.querySelector('.prev_arrow').onclick = function () {
    slideAction(-1)
};

document.querySelector('.next_arrow').onclick = function () {
    slideAction(1)
};

function slideAction(n) {
    InitSlide(slideIndex += n);
}

function InitSlide(n) {
    if (n > totalSlides) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = totalSlides
    }

    for (i = 0; i < totalSlides; i++) {
        slide[i].classList.remove('active');
    }
    slide[slideIndex - 1].className += " active";
}