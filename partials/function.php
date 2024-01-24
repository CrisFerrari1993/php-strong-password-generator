<?php

// Password generator Funtion

function randomPassword($lenght) {
    // string with numbers, symbols, and carachter
    $alphabetCaracters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*<>?/.-_';
    // password array
    $newPsw = array();
    // length of alphabet array
    $alphaLength = strlen($alphabetCaracters) - 1;
    //for i element of array length push in the array a random carachter taked from string
    for ($i = 0; $i < $lenght ; $i++) {
        $n = rand(0, $alphaLength);
        $newPsw[] = $alphabetCaracters[$n];
    }
    return implode($newPsw); 
}

?>