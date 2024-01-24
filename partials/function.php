<?php
function randomPassword($lenght) {
    if($lenght < 8){
        return "<span class='d-block text-center' style='color : red'>La password deve contenere almeno 8 caratteri</span>";
    }
    $alphabetCaracters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*<>?/.-_';
    $newPsw = array();
    $alphaLength = strlen($alphabetCaracters) - 1;
    for ($i = 0; $i < $lenght ; $i++) {
        $n = rand(0, $alphaLength);
        $newPsw[] = $alphabetCaracters[$n];
    }
    return implode($newPsw); 
}

?>