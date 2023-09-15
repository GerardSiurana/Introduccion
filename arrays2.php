<?php
    $meteors = array(
        'Hoba' => 60000000, 
        'Cape York' => 58200000,
        'Campo del Cielo' => 50000000,
        'Cañon Diablo' => 30000000
    );
    print_r($meteors);
    echo "<hr>";
    foreach($meteors as $meteor) {
        echo $meteor . "<br>";
    }

?>