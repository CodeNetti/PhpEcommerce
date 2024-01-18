const slider = document.querySelectorAll('.slider');
const numSlides = slider.length;
let currentSlide = 0;

function hideSlider() {
  slider.forEach(item => item.classList.remove('active'));
}

function showSlider() {
  slider[currentSlide].classList.add('active');
}

function nextSlider() {
  hideSlider();
  currentSlide = (currentSlide + 1) % numSlides;
  showSlider();
}

// Função para iniciar o temporizador
function startSlider() {
  showSlider(); // Exibe o primeiro slide ao carregar a página
 
  setInterval(nextSlider, 4000);
}

// Inicia o temporizador
startSlider();

