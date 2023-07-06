<?php
require "./config/database.php";

if (isset($_POST['username'])) {
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = strtoupper($username);
    $confirmpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);


    if (empty($username)) {
        $_SESSION['resetpassword'] = "Enter your username";
    } else {

        if ($confirmpassword !== $confirmpassword) {
            $_SESSION['resetpassword'] = "Passwords do not match";
        } else {
            // hash password 
            $hashed_password = password_hash($confirmpassword, PASSWORD_DEFAULT);

            //check if username exist in the admin table 
            $admincheck_query = "SELECT * FROM admins WHERE username = '$username'";
            $admincheck_result = mysqli_query($dbconnect, $admincheck_query);

            //check if username exist in the users table 
            $user_check_query = "SELECT * FROM participant WHERE username = '$username'";
            $user_check_result = mysqli_query($dbconnect, $user_check_query);


            if (mysqli_num_rows($user_check_result) > 0 || mysqli_num_rows($admincheck_result) > 0) {

                if (mysqli_num_rows($user_check_result) > 0) {

                    //update the new password of the User
                    $update_user_query = "UPDATE participant SET  userpassword= '$hashed_password' WHERE username = '$username' LIMIT 1";
                    $update_user_result = mysqli_query($dbconnect, $update_user_query);
                } else {
                    //update the new password of the Admin
                    $update_admin_query = "UPDATE admins SET  userpassword= '$hashed_password' WHERE username = '$username' LIMIT 1";
                    $update_admin_result = mysqli_query($dbconnect, $update_admin_query);
                }
            } else {
                $_SESSION['resetpassword'] = "User account does not exist";
            }
        }
        if (isset($_SESSION['resetpassword'])) {

            // pass form data back to resetpassword page
            $_SESSION['resetpassword-data'] = $_POST;
        } else {

            header('location: ' . ROOT_URL . 'signin.php');
            die();
        }
    }
}

$username = $_SESSION['resetpassword-data']['username'] ?? null;
$psword = $_SESSION['resetpassword-data']['createpassword'] ?? null;
$cpsword = $_SESSION['resetpassword-data']['confirmpassword'] ?? null;


unset($_SESSION['signin-data']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create new password</title>
    
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">



    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>

    <section class="form-section text-center">
        <main class="form-signin w-100 m-auto">
            <a class="navbar-brand" href="index.php"><img class="brand" src="<?= ROOT_URL ?>/img/logo.png" alt="Sevenskies"></a>
            <h3 class="h3 my-4 mt-5 fw-normal">Create New Password</h3>
            <?php if (isset($_SESSION['resetpassword'])) : ?>
                <div class="alert_message error">
                    <p> <?= $_SESSION['resetpassword'];
                        unset($_SESSION['resetpassword']);
                        ?>
                    </p>
                </div>
            <?php endif ?>
            <form class="signin-form" action="createpassword.php" method="POST">
            <div class="form-floating">
                    <div class="error-txt"></div>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="username" id="floatingUserName" value="<?= $username ?>"  placeholder="User Name">
                    <label for="floatingUserName">User Name:</label>
                </div>
                <div class="form-floating">
                    <input type="password"  class="form-control" name="createpassword" id="floatingPassword" value="<?=  $psword ?>" placeholder="Password">
                    <label for="floatingPassword">Password:</label>
                </div>
                <div class="form-floating">
                    <input type="password"  class="form-control" name="confirmpassword" id="floatingPassword" value="<?=  $cpsword ?>"placeholder="Password">
                    <label for="floatingPassword">Password:</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary signin-btn" type="submit">Create Password</button>
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-muted mt-3">
                            <a href="index.php">Cancel</a>
                        </p>
                    </div>
                    
                </div>
                <p class="mt-4 mb-3 text-muted">&copy; 2023 Sevenskies International School</p>
            </form>
        </main>
    </section>

</body>

</html>
