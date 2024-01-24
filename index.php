<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php

        require_once __DIR__ . "/partials/function.php";

        session_start();
        
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
                <?php

                    $userData = $_GET['password'];
                    if($userData === null){
                        echo'';
                    } elseif($userData < 8) {
                        echo '<span class="d-block text-center" style="color : red">La password deve contenere almeno 8 caratteri</span>';
                    } else {
                        $_SESSION['password'] = $userData;
                        header('Location: ./redirec.php');
                        echo randomPassword($userData);
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>