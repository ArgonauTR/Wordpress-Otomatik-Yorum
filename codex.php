<?php
// Veritabı bağlantısı kuruluyor.
include("config.php");

// Veritabı bağlantısı kuruluyor.
include("core/db.php");

// Session sınıfları başlatılıyor.
ob_start();
session_start();

// Saatler ayarlandı
date_default_timezone_set('Europe/Istanbul');

// Rastgele isim fonskiyonu ekleniyor.
include("core/random-name.php");

// Rastgele servis fonksiyonu ekleniyor.
include("core/random-service.php");

// Permalink fonskiyonu ekleniyor
include("core/permalink.php");

?>