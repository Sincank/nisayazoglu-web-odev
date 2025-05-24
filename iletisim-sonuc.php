<?php
session_start();

// Eğer bir hata varsa onu göster ve çık
if (isset($_SESSION['form_hata'])) {
    $hata = $_SESSION['form_hata'];
    unset($_SESSION['form_hata']);
    echo "<h2 style='color:red;'>$hata</h2>";
    exit;
}

// Eğer form verisi yoksa kullanıcıyı bilgilendir
if (!isset($_SESSION['form_data'])) {
    echo "<h2 style='color:orange;'>Henüz bir form gönderilmedi.</h2>";
    exit;
}

$form = $_SESSION['form_data'];
?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Form Sonucu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white p-5">
  <div class="container">
    <h1 class="mb-4">Form Bilgileriniz</h1>
    <ul class="list-group">
      <li class="list-group-item text-dark"><strong>Ad Soyad:</strong> <?= htmlspecialchars($form['ad']) ?></li>
      <li class="list-group-item text-dark"><strong>E-posta:</strong> <?= htmlspecialchars($form['email']) ?></li>
      <li class="list-group-item text-dark"><strong>Telefon:</strong> <?= htmlspecialchars($form['telefon']) ?></li>
      <li class="list-group-item text-dark"><strong>Cinsiyet:</strong> <?= htmlspecialchars($form['cinsiyet']) ?></li>
      <li class="list-group-item text-dark"><strong>Konu:</strong> <?= htmlspecialchars($form['konu']) ?></li>
      <li class="list-group-item text-dark"><strong>Mesaj:</strong> <?= nl2br(htmlspecialchars($form['mesaj'])) ?></li>
    </ul>
  </div>
</body>
</html>
