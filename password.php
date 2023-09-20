<?php

function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2) {
    $password = '';
    

    for ($i = 0; $i < $upper; $i++) {
        $password .= chr(rand(65, 90));
    }
    
    for ($i = 0; $i < $lower; $i++) {
        $password .= chr(rand(97, 122));
    }
    
    for ($i = 0; $i < $numeric; $i++) {
        $password .= chr(rand(48, 57));
    }
    
    $otherChars = array('!', '@', '#', '$', '%', '&', '*');
    shuffle($otherChars);
    for ($i = 0; $i < $other; $i++) {
        $password .= $otherChars[$i];
    }
    
    $password = str_shuffle($password);
    
    return $password;
}

$randomPassword = rand_Pass();
echo $randomPassword;
?>