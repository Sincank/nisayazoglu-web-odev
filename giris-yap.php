<?php

$dogruEmail = "g231210061@sakarya.edu.tr";
$dogruSifre = "g231210061";

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';


if (empty($email) || empty($password)) {
    echo "Lütfen tüm alanları doldurun.";
    header("refresh:2; url=login.html");
    exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Geçerli bir e-posta adresi giriniz.";
    header("refresh:2; url=login.html");
    exit();
}

if ($email === $dogruEmail && $password === $dogruSifre) {
    $ogrenciNumarasi = strstr($email, '@', true); 
    echo "Hoşgeldiniz $ogrenciNumarasi";
    header("Location: index.html");
    exit();
} else {
    echo "Kullanıcı adı veya şifre hatalı.";
    header("refresh:2; url=giris-yap.html");
    exit();
}
?>
