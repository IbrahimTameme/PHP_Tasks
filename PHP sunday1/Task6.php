<?php

$url = "https://www.w3schools.com/php/default.asp";

echo parse_url($url , PHP_URL_SCHEME) . "<br>";
echo parse_url($url, PHP_URL_USER);
echo parse_url($url, PHP_URL_PASS);
echo parse_url($url, PHP_URL_HOST);
echo parse_url($url, PHP_URL_PORT);
echo parse_url($url, PHP_URL_PATH);
echo parse_url($url, PHP_URL_QUERY);
echo parse_url($url, PHP_URL_FRAGMENT);

?>