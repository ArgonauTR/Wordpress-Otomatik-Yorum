<?php
// Varsayılan gerekli bilgiler getiriliyor.
include("codex.php");

// head dosyası dahil ediliyor.
include("default/head.php");

// Şifre sorgusu yapılıyor.
if (isset($_SESSION["password"])) {
    //Arayüz tercihi ayarlanıyor.
    if ($type == "classic") {
        //classic görünüm.
        include("classic/index.php");
    } elseif ($type == "professional") {
        // professional görünüm.
        include("professional/nav.php");
        include("professional/index.php");
    } else {
        echo "Görünüşe göre arayüz tercihini yanlış bir şekilde yaptınız.";
    }
} else {
    include("login/index.php");
}

// footer dosyası dahil ediliyor.
include("default/footer.php");
