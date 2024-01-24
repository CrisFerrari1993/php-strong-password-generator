<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php

    ?>
    <title>Strong Password Generator</title>
</head>
<body>
    <div class="container">
        <h1 class="my-3 text-center"><strong>Welcome to Strong Password generator</strong></h1>
        <p class="text-center">Inserisci la lunghezza della password desiderata e verra generata una con standard di sicurezza moderni</p>
        <div class="row mt-5">
            <div class="col-12">
                <form class="d-flex justify-content-center">
                    <input type="number" name= "password">
                    <input type="submit" value='Genera Password'>
                </form>
            </div>
        </div>
    </div>
    <?php

    $userData = $_GET['password'];

    
    

    function randomPassword($lenght) {
        if($lenght <= 8){
            return "<span class='d-block text-center' style='color : red'>La password deve contenere almeno 8 caratteri</span>";
        }
        $alphabetCaracters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*<>?/.-_';
        $newPsw = array();
        $alphaLength = strlen($alphabetCaracters) - 1;
        for ($i = 0; $i < $lenght ; $i++) {
            $n = rand(0, $alphaLength);
            $newPsw[] = $alphabetCaracters[$n];
        }
        return implode($newPsw); //turn the array into a string
    }

    ?>
</body>
</html>