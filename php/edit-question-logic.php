<?php
require "../config/database.php";



$id = filter_var($_POST['prev_id'], FILTER_SANITIZE_NUMBER_INT);
$question = filter_var($_POST['questionEdit'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$question_url = filter_var($_POST['question-url-edit'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$category = filter_var($_POST['categoryEdit'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);


if(!empty($question) || !empty($question_url) || !empty($category)){

    $update_question_query = "UPDATE question SET category_id ='$category', question ='$question', question_url ='$question_url'  WHERE id = $id LIMIT 1";
    $insert_question_result = mysqli_query($dbconnect, $update_question_query);
    echo "success";
} else{
    echo "Fill an inputs";
}
