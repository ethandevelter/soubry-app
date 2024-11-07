import './bootstrap';
import Alpine from 'alpinejs';

document.addEventListener("alpine:init", () => {
    Alpine.data("scrollAnimation", () => ({
      elements: null,
  
      // Initialize by selecting elements
      init() {
        this.elements = document.querySelectorAll('.fade-target');
      },
  
      // Function to animate elements when they enter the viewport
      animate(animation) {
        this.elements.forEach((element) => {
          if (element.classList.contains('animate-' + animation)) return;
          element.classList.add('animate-' + animation);
        });
      },
    }));
  });
  
  
  // Make sure to load Alpine if you haven't already
  document.addEventListener('alpine:init', () => {
    Alpine.data('scrollAnimation', scrollAnimation);
  });
  