<?php
$array = array(
    "Gerard" => "Mu wapo muchas gracias",
    "Pascual" => "Como lo haces?",
    "Reyes" => "Doy dinero gratis a mis amigos"
);

uasort($array, function($a, $b) {
    return strlen($a) <=> strlen($b);
});


foreach ($array as $nombre => $descripcion) {
    echo $nombre . ": " . $descripcion . "\n";
}
?>