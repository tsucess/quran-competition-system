<?php
require "../config/database.php";

    $is_selected = 0;
    
    $update_question_query = "UPDATE question SET is_selected = $is_selected";
    $insert_question_result = mysqli_query($dbconnect, $update_question_query);

if($insert_question_result){
    header('location: ' . ROOT_URL . 'backend/index.php');
            die();
    echo "success";
}

