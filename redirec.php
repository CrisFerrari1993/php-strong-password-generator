<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php

            require_once __DIR__ . "/partials/function.php" ;

            session_start();
            $userData = $_SESSION['password'];
    ?>
    <title>Youre password is...</title>
</head>
<body>
    <div class="container text-center">
        <h1 class="my-2 mb-5">Thanks for using our service</h1>
        <p>Youre new Password is: <strong><? echo randomPassword($userData)?></strong></p>
    </div>
</body>
</html>