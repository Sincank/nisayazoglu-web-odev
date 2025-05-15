

  const sehirOgeleri = document.querySelectorAll('.sehir-item');
  const bilgiMetni = document.getElementById('bilgiMetni');

  sehirOgeleri.forEach(function (item) {
    item.addEventListener('mouseover', function () {
      const yeniYazi = item.getAttribute('data-info');
      bilgiMetni.textContent = yeniYazi;
    });

    item.addEventListener('mouseout', function () {
      bilgiMetni.innerHTML = "<strong>Bayburt, </strong> <br> Doğu Karadeniz'de bulunan ve Çoruh Nehri'ne yaslanan Türkiye'nin bir şehri ve Bayburt ilinin merkezidir.";
    });
  });

