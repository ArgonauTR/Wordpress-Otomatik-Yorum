<?php
if (isset($_GET["status"])) {
    $status = htmlspecialchars(strip_tags($_GET["status"]));
} else {
    $status = "home";
}

switch ($status) {
    case "home": // Anasayfayı çağrılıyor
        include("home.php");
        break;
    case "fast": // Hızlı yorum çağırlıyor.
        include("fast-comment.php");
        break;
    case "control": // Kontrollü yorum çağrılıyor.
        include("control-comment.php");
        break;
    case "guard": // Gözetimli yorum çağrılıyor.
        include("guard-comment.php");
        break;
    case "info": // Bilgi sayfası çağrılıyor.
        include("info.php");
        break;
}
