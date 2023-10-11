document.addEventListener("DOMContentLoaded", function () {
  const slides = document.querySelectorAll(".carousel-slide");
  const indicators = document.querySelectorAll(".indicator");
  let currentIndex = 0;

  function showSlide(index) {
      slides.forEach((slide) => (slide.style.display = "none"));
      indicators.forEach((indicator) =>
          indicator.classList.remove("active")
      );

      slides[index].style.display = "block";
      indicators[index].classList.add("active");
  }

  function nextSlide() {
      currentIndex = (currentIndex + 1) % slides.length;
      showSlide(currentIndex);
  }

  function prevSlide() {
      currentIndex = (currentIndex - 1 + slides.length) % slides.length;
      showSlide(currentIndex);
  }

  indicators.forEach((indicator, index) => {
      indicator.addEventListener("click", () => {
          showSlide(index);
          currentIndex = index;
      });
  });

  setInterval(nextSlide, 3000); // Troca de slide a cada 3 segundos

  showSlide(currentIndex);
});
