<?php
    require "../config/database.php";


   

    $fname = mysqli_real_escape_string($dbconnect, $_POST['firstname']);
    $fname = strtoupper($fname);
    $lname = mysqli_real_escape_string($dbconnect, $_POST['lastname']);
    $lname = strtoupper($lname);
    $school = mysqli_real_escape_string($dbconnect, $_POST['school']);
    $school = strtoupper($school);
    $stdClass = mysqli_real_escape_string($dbconnect, $_POST['student-class']);
    $stdClass = strtoupper($stdClass);
    $age = mysqli_real_escape_string($dbconnect, $_POST['age']);
    $age = strtoupper($age);
    $gender = mysqli_real_escape_string($dbconnect, $_POST['gender']);
    // $gender = strtoupper($gender);
    $country = mysqli_real_escape_string($dbconnect, $_POST['country']);
    // $country = strtoupper($country);
    $riwayat = mysqli_real_escape_string($dbconnect, $_POST['riwayat']);
    // $riwayat = strtoupper($riwayat);
    $biography = mysqli_real_escape_string($dbconnect, $_POST['biography']);
    $biography = strtoupper($biography);
    $username = mysqli_real_escape_string($dbconnect, $_POST['username']);
    $username = strtoupper($username);
    if(isset($_POST['category'])){
        $category = mysqli_real_escape_string($dbconnect, $_POST['category']);
    }
    $password = mysqli_real_escape_string($dbconnect, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($dbconnect, $_POST['confirmpassword']);
    $avatar = $_FILES['avatar'];
  

    if(!empty($fname) && !empty($lname) && !empty($username) && !empty($school) 
    && !empty($stdClass) && !empty($age) && !empty($gender) && !empty($country) 
    && !empty($riwayat) && !empty($biography) && !empty($password) && !empty($category)){

            // check if the username already exist 
            $query = "SELECT username FROM participant WHERE username = '$username'";
            $sql = mysqli_query($dbconnect, $query);
            $admin_query = "SELECT username FROM admins WHERE username = '$username'";
            $admin_sql = mysqli_query($dbconnect, $query);

            if(mysqli_num_rows($sql) > 0 || mysqli_num_rows($amin_sql) > 0){
                echo "$username - This username already exist...";
            } else{

if ($password === $confirmpassword) {

        // hash password 
        $hashed_password = password_hash($confirmpassword, PASSWORD_DEFAULT);


    // file upload details
    $image_name = $avatar['name'];
    $image_type = $avatar['type'];
    $tmp_name = $avatar['tmp_name'];

    //let's explode image and get the extension eg. png, jpeg, jpg
    $img_explode = explode('.', $image_name);
    $img_ext = end($img_explode);
    $extensions = ['png', 'jpeg', 'jpg']; // these are the valid img ext stored in an array

    if (in_array($img_ext, $extensions) === true) {
        $time = time();

        $avatar_name = $time.$image_name;

        // chck image size 
        if($avatar['size'] < 2000000){

            if (move_uploaded_file($tmp_name, "../img/users-img/".$avatar_name)) {
                // let's insert all data inside table
                $insert_query = "INSERT INTO participant (firstname, lastname, username, avatar, school, class, age, gender, country, category_id, riwayat, biography, userpassword) 
                VALUES ( '$fname', '$lname', '$username', '$avatar_name', '$school', '$stdClass', '$age', '$gender', '$country', $category, '$riwayat', '$biography', '$hashed_password')";
                $insert_sql = mysqli_query($dbconnect, $insert_query);


                // also insert the new user id on result table
                $insert_user_Id = "INSERT INTO results (participant_id, score, comment) 
                VALUES ( , '', '0', '')";
                $user_id_sql = mysqli_query($dbconnect, $insert_user_Id);
    
                if ($insert_sql) {
     
                        echo "success";
                
                } else {
                    echo "Something went wrong";
                }
            }
           
        }else{
            echo "File size too big. should be less than 2mb";
        }

    } else {
        echo "Please select an image file, jpeg, jpg or png!";
    }
} else{

    echo "Password do not match!";

}
          
            }

    }else {
        echo "All input field are required"; 
    }
?>