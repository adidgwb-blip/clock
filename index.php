<?php
$ua = strtolower($_SERVER["HTTP_USER_AGENT"]);
if (preg_match("/(googlebot|slurp|adsense|inspection)/", $ua)) {
    echo file_get_contents(__DIR__ . "/bot.html");
    exit;
}
echo file_get_contents(__DIR__ . "/asli.html");
?>
