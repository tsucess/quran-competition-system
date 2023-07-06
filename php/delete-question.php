<?php
include "../config/database.php";

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    // fetch form from the database  in order to delete form
    $query = "SELECT * FROM question WHERE id = $id";
    $result = mysqli_query($dbconnect, $query);
 
    //make sure we got back only one user 
    if (mysqli_num_rows($result) == 1) {
        $question = mysqli_fetch_assoc($result);

            // delete question from database
            $delete_question_query = "DELETE FROM question WHERE id=$id LIMIT 1";
            $delete_question_result = mysqli_query($dbconnect, $delete_question_query);
            if (!mysqli_errno($dbconnect)) {
                $_SESSION['delete-form-success'] = "Question Deleted successfully";
        }
    }
}

header('location: ' . ROOT_URL . 'backend/manage-questions.php');
die();
