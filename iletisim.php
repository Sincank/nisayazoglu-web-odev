<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $ad = $_POST['name'] ?? '';
    $email = $_POST['mail'] ?? '';
    $telefon = $_POST['telefon'] ?? '';
    $cinsiyet = $_POST['cinsiyet'] ?? '';
    $konu = $_POST['konu'] ?? '';
    $mesaj = $_POST['mesaj'] ?? '';
    $kvkk = isset($_POST['kvkk']);

    if (!$kvkk) {
        $_SESSION['form_hata'] = "KVKK onayı gerekli.";
        header("Location: iletisim-sonuc.php");
        exit;
    }

    // Doğru dizi tanımı burada
    $_SESSION['form_data'] = [
        'ad' => $ad,
        'email' => $email,
        'telefon' => $telefon,
        'cinsiyet' => $cinsiyet,
        'konu' => $konu,
        'mesaj' => $mesaj
    ];

    header("Location: iletisim-sonuc.php");
    exit;
}
?>
