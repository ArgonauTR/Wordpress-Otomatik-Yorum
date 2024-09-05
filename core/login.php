<?php
// Varsayılan gerekli bilgiler getiriliyor.
include("../codex.php");

// login isteği kontrol ediliyor.
if (isset($_POST["login"])) {

    // Gelen veri temizleniyor.
    $password_form = htmlspecialchars(strip_tags($_POST["password"]));

    // şifre kıyaslaması yapılıyor.
    if ($password_form == $password) {
        $_SESSION["password"] = $password;
        header("Location: ../index.php?alert=login-success");
        exit;
    } else {
        header("Location: ../index.php?alert=pass-failed");
        exit;
    }
}
