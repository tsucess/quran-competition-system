<?php
require "../config/database.php";



$id = filter_var($_POST['prev_id'], FILTER_SANITIZE_NUMBER_INT);
$prev_avatar = $_POST['prev_avatar'];
$prev_password = $_POST['prev_password'];
   
$firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$firstname = strtoupper($firstname);
$lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$lastname = strtoupper($lastname);
$school = filter_var($_POST['school'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$school = strtoupper($school);
$stdClass = filter_var($_POST['student-class'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$stdClass = strtoupper($stdClass);
$age = filter_var($_POST['age'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$age = strtoupper($age);
$gender = filter_var($_POST['gender'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
// $gender = strtoupper($gender);
$country = filter_var($_POST['country'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
// $country = strtoupper($country);
$riwayat = filter_var($_POST['riwayat'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
// $riwayat = strtoupper($riwayat);
$biography = filter_var($_POST['biography'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
// $biography = strtoupper($biography);
$username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$username = strtoupper($username);
$category = filter_var($_POST['category'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$avatar = $_FILES['avatar'];
 


    if(!empty($firstname) || !empty($lastname) || !empty($username) || !empty($school) 
    || !empty($stdClass) || !empty($age) || !empty($gender) || !empty($country) 
    || !empty($riwayat) || !empty($biography)){

    // check if the username already exist
    $query = "SELECT username FROM participant WHERE username = '$username' AND id != $id";
    $sql = mysqli_query($dbconnect, $query);

    if (mysqli_num_rows($sql) > 0) {
        echo "$username - This username already exist...";
    } else {

            //work on document
            //deleting existing document if new document is available
            if ($avatar['name']) {
            $prev_avatar_path = '../img/users-img/'.$prev_avatar;
            if ($prev_avatar_path) {
                unlink($prev_avatar_path);
            }
    
            // Checking Document Properties: size and file 
            $time = time();
            $avatar_name = $time . $avatar['name'];
            $avatar_tmp_name = $avatar['tmp_name'];
            $avatar_destination_path = '../img/users-img/'.$avatar_name;
    
            // image validation
            $image_format = ['jpeg', 'jpg', 'png'];
            $image_ext = explode('.', $avatar_name);
            $image_ext = end($image_ext);
    
            if (in_array($image_ext, $image_format)) {
                // chck document size 
                if ($avatar['size'] < 2000000) {
                    // upload Document
                    move_uploaded_file($avatar_tmp_name, $avatar_destination_path);
                } else {
                    echo "File size too big. should be less than 2mb";
                }
            } else {
                echo "please select an Image file - png, jpeg, or jpg!";
            }
        }

    $avatar_to_insert = $avatar_name ?? $prev_avatar;

    if (!empty($password)) {
        if ($password !== $confirmpassword) {
                echo "Passwords do not match";
            } else {
                    // hash password
                    $hashed_password = password_hash($confirmpassword, PASSWORD_DEFAULT);
                    $update_user_query = "UPDATE participant SET firstname='$firstname', lastname='$lastname', username='$username', 
                    avatar='$avatar_to_insert', school='$school', class='$stdClass', age='$age', country='$country', 
                    category_id='$category', riwayat='{$riwayat}', biography='$biography', userpassword='$hashed_password' WHERE id = $id LIMIT 1";
                    $insert_user_result = mysqli_query($dbconnect, $update_user_query);
                    echo "success";
            }
        } else{
                $hashed_password = $prev_password;
                $update_user_query = "UPDATE participant SET firstname='$firstname', lastname='$lastname', username='$username',
                avatar='$avatar_to_insert', school='$school', class='$stdClass', age='$age', country='$country', 
                category_id='$category', riwayat='{$riwayat}', biography='$biography', userpassword='$hashed_password' WHERE id = $id LIMIT 1";
                    $insert_user_result = mysqli_query($dbconnect, $update_user_query);
                    echo "success";
               
        }

}
    } else{
        echo "All inputs are required";
    }
