<?php
require './config/database.php';

if (isset($_POST['usersname'])) {
    $username = filter_var($_POST['usersname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = strtoupper($username);

    if(!$username) {
        $_SESSION['forgotpass'] = "Enter your username";
    } else {
        // check if username exist in the database
        $admincheck_query = "SELECT * FROM admins WHERE username = '$username'";
        $admincheck_result = mysqli_query($dbconnect, $admincheck_query);

        //check if participant already registered
        $user_check_query = "SELECT * FROM participant WHERE username = '$username'";
        $user_check_result = mysqli_query($dbconnect, $user_check_query);


        if (mysqli_num_rows($admincheck_result) > 0 || mysqli_num_rows($user_check_result) > 0) {

            header('location: ' . ROOT_URL . 'createpassword.php');
            die();
        } else {
            $_SESSION['forgotpass'] = "User Account doesn't exist";
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>forgot passsord</title>


    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">



    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>

    <section class="form-section text-center">
        <main class="form-signin w-100 m-auto">
            <a class="navbar-brand" href="index.php"><img class="brand" src="<?= ROOT_URL ?>/img/logo.png" alt="Sevenskies"></a>
            <h3 class="h3 my-4 mt-5 fw-normal">Confirm User Account</h3>
            <?php if (isset($_SESSION['forgotpass-success'])) : ?>
                <div class="alert_message success">
                    <p> <?= $_SESSION['forgotpass-success'];
                    unset($_SESSION['forgotpass-success']);
                    ?>
                    </p>
                </div>
                <?php elseif (isset($_SESSION['forgotpass'])) : ?>
                    <div class="alert_message error">
                        <p> <?= $_SESSION['forgotpass'];
                    unset($_SESSION['forgotpass']);
                    ?>
                        </p>
                    </div>
                    <?php endif ?>
            <form action="forgetpassword.php" method="POST">
                <div class="form-floating">
                    <input type="text" class="form-control" name="usersname" id="usersname" placeholder="User Name">
                    <label for="usersname">User Name:</label>
                </div>
                <input class="w-100 btn btn-lg btn-primary" type="submit" value="Submit">

                <p class="text-muted mt-3">
                    <a href="signin.php">Back</a>
                </p>
                <p class="mt-4 mb-3 text-muted">&copy; 2023 Sevenskies International School</p>
            </form>
        </main>
    </section>

</body>

</html>