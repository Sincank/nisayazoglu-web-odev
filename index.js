let currentSlide = 1;

function yanSayfa(slideNum) {
  const slider = document.querySelector(".slider");
  currentSlide = slideNum;
  slider.style.transform = `translateX(-${(slideNum - 1) * 100}vw)`;
}

function anaSayfayaGit() {
    const slider = document.querySelector('.slider');
    slider.style.transform = 'translateX(0vw)';
}
