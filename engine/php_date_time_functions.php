<?php

//Date Time Functions



echo date("Y-m-d H:i:s", time()) . "<br>";

date_default_timezone_set("Europe/Tallinn");

echo date("Y-m-d H:i:s", time() - 60 * 60 * 24) . "<br>";

//кількість секунд в добі 60 * 60 * 24

// echo phpinfo() . '<br>'; 

echo time() . "<br>";
$start = microtime(true);

for ($i = 0; $i < 1000; $i++) {
}

$end = microtime(true);

echo $end - $start;
