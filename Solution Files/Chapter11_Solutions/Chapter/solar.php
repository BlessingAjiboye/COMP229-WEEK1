<?php
/* To make this app work, you must replace the text "apikey" in the following statement with a valid API key */
$WeatherSource = "https://api.forecast.io/forecast/b687df83df2d9ff75b66927e23f72ce4/" . $_GET["lat"] . "," . $_GET["lng"];
header("Content-Type: application/json");
header("Cache-Control: no-cache");
readfile($WeatherSource);
?>