// slider.js

function moveSlider(direction) {
    const container = document.querySelector('.container-category');
    const scrollAmount = direction * (container.offsetWidth / 2);
    container.scrollBy({
        left: scrollAmount,
        behavior: 'smooth'
    });
}
