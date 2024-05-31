'use strict';

// Wait for the DOM to be fully loaded before executing the code
document.addEventListener('DOMContentLoaded', () => {
  const testim = document.getElementById("testim");
  const testimDots = Array.from(document.getElementById("testim-dots").children);
  const testimContent = Array.from(document.getElementById("testim-content").children);
  const testimLeftArrow = document.getElementById("left-arrow");
  const testimRightArrow = document.getElementById("right-arrow");
  const testimSpeed = 6500;

  let currentIndex = 0;
  let isAnimating = false;

  function showSlide(index) {
    if (isAnimating) return;
    isAnimating = true;

    testimContent.forEach((slide, i) => {
      slide.classList.remove('active', 'inactive');
      testimDots[i].classList.remove('active');

      if (i === index) {
        slide.classList.add('active');
        testimDots[i].classList.add('active');
      } else if (i < index) {
        slide.classList.add('inactive');
      }
    });

    currentIndex = index;
    isAnimating = false;
  }

  function nextSlide() {
    showSlide((currentIndex + 1) % testimContent.length);
  }

  testimLeftArrow.addEventListener('click', () => {
    showSlide((currentIndex - 1 + testimContent.length) % testimContent.length);
  });

  testimRightArrow.addEventListener('click', nextSlide);

  testimDots.forEach((dot, i) => {
    dot.addEventListener('click', () => showSlide(i));
  });

  let timer = setInterval(nextSlide, testimSpeed);

  testim.addEventListener('mouseenter', () => clearInterval(timer));
  testim.addEventListener('mouseleave', () => {
    timer = setInterval(nextSlide, testimSpeed);
  });

  // Initially show the first slide
  showSlide(0);
});