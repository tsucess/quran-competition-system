<?php
require "../config/database.php";



if (isset($_POST['selectedValue']) && isset($_POST['questionId'])) {

    $is_selected = $_POST['selectedValue'];
    $id = $_POST['questionId'];

    $update_question_query = "UPDATE question SET is_selected = $is_selected WHERE id = $id LIMIT 1";
    $insert_question_result = mysqli_query($dbconnect, $update_question_query);


    echo "success";
} else{

    echo $is_selected, $id;
}
