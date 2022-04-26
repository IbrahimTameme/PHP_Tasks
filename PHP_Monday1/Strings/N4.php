<?php
$url = 'www.orange.com/index.php';
$path = parse_url($url , PHP_URL_PATH);
echo basename($path)


?>