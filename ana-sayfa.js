let currentPage = 0;
    const slider = document.getElementById('slider');

    function goToPage(index) {
      currentPage = index;
      slider.style.transform = `translateX(-${index * 100}vw)`;
    }