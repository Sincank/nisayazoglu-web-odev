  function kontrolEt() {
    // Form alanlarını al
    const ad = document.getElementById("name").value.trim();
    const email = document.getElementById("mail").value.trim();
    const telefon = document.getElementById("telefon").value.trim();
    const konu = document.getElementById("konu").value;
    const mesaj = document.getElementById("mesaj").value.trim();

    // Ad kontrolü
    if (ad === "") {
      alert("Ad Soyad boş olamaz.");
      return;
    }

    // E-posta kontrolü (regex ile)
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      alert("Geçerli bir e-posta adresi girin.");
      return;
    }

    // Telefon kontrolü (sadece rakam, en az 10 karakter)
    const telefonRegex = /^[0-9]{10,15}$/;
    if (!telefonRegex.test(telefon)) {
      alert("Geçerli bir telefon numarası girin.");
      return;
    }

    // Konu seçilmiş mi
    if (konu === "") {
      alert("Lütfen bir konu seçin.");
      return;
    }

    // Mesaj uzunluğu kontrolü
    if (mesaj.length < 10) {
      alert("Mesaj en az 10 karakter olmalı.");
      return;
    }

    // Her şey doğruysa
    alert("Mesajınız gönderildi. En kısa zamanda geri dönüt yapılacaktır.");
  }