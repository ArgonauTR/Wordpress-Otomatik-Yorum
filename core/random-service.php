<?php
function randomservice()
{
    // Rasgele mail uzantısı üreticisi
    $list = array("@gmail.com", "@yahoo.com", "@yandex.com", "@bing.com", "@outlook.com", "@hotmail.com", "@mail.com");
    $service_key = array_rand($list, 1);
    return $list[$service_key];
}
