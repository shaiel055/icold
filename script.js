let slideIndex = 0;
showSlide(slideIndex);

function showSlide(index) {
    const slides = document.querySelectorAll('.slide');
    
    if (index < 0) {
        slideIndex = slides.length - 1;
    } else if (index >= slides.length) {
        slideIndex = 0;
    }

    slides.forEach((slide, i) => {
        slide.style.transform = `translateX(${100 * (i - slideIndex)}%)`;
    });
}

document.querySelector('.prev').addEventListener('click', () => {
    showSlide(--slideIndex);
});

document.querySelector('.next').addEventListener('click', () => {
    showSlide(++slideIndex);
});