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
    <title>Your password is...</title>
</head>
<body>
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <h1 class="my-2 mb-5"><strong>Thanks for using our service</strong></h1>
                <p>Your new Password is: <br><strong><?php echo randomPassword($userData)?></strong></p>
            </div>
        </div>
    </div>
</body>
</html>