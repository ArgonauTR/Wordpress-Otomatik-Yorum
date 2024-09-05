<?php
/*
    YorumBot-2.0 kullanmak için aşağıda ki aşamalaır tek tek tamamlayınız.
    Son güncelleme: 05.09.2024
    Geliştirici: Osman ÖZER
    mail: osmanozer4@gmail.com
    R10: https://www.r10.net/profil/128431-argonaut.html
*/

/*
    Wordpress Sitenizin veritabanı bilgilerini aşağıya eksikisiz bir biçimde giriniz.
*/
$db_name = "wordpress"; // Veritabanı Adı.
$db_user = "root"; // Veritabanı kullanıcı adı.
$db_password = ""; // Veritabanı şifresi

/*
    Sisteme erişebilmek için bir şifre belirleyiniz.
*/
$password="12345";

/*
    Wordpress sistenizin veritabnı tablo adlarını aşağıya giriniz.
    Genellikle tablo adları "wp_posts" ve "wp_comments" şeklindedir.
    Otamatik kurulumlarda ya da tercihe bağlı olarak bu değişken olabilir.
    Tablo adlarınızı veritabanından kontrol ediniz.
    Talbo adlarınız "wp_posts" ve "wp_comments" değilse aşğıdan düzeltiniz.
*/
$wp_posts = "wp_posts"; // Yazılar tablosu adı.
$wp_comments = "wp_comments"; // Yorumlar tablosu adı.

/*
    Yorumun yayın durumunu aşağıdan seçebilirsiniz.
*/
$publish = "1";  // Yayınlansın = 1  Taslak kaydesilsin = 0

/*
    YorumBot-2.0 programı arayüz tercihini aşağıdan yapabilirsiniz.
    "classic" eski görünüm. Sade bir arayüz.
    "professional" yeni görünüm. Gelişmiş senenekler.
*/
$type = "professional"; // "classic" ya da "professional" olarak değiştirebilirsiniz.

?>