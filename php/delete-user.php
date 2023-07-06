<?php
include "../config/database.php";

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    // fetch form from the database  in order to delete form from images folder
    $query = "SELECT * FROM participant WHERE id = $id";
    $result = mysqli_query($dbconnect, $query);

    
 
    //make sure we got back only one user 
    if (mysqli_num_rows($result) == 1) {
        $participant = mysqli_fetch_assoc($result);
        $participant_thumbnail_name = $participant['avatar'];
        $participant_thumbnail_path = '../img/users-img/'.$participant_thumbnail_name;

        // delete image if available
        if ($participant_thumbnail_path) {
            unlink($participant_thumbnail_path);
        
            // delete category from database;
            $delete_participant_query = "DELETE FROM participant WHERE id=$id LIMIT 1";
            $delete_participant_result = mysqli_query($dbconnect, $delete_participant_query);

            $query_result = "DELETE FROM results WHERE participant_id = $id LIMIT 1";
            $delete_result = mysqli_query($dbconnect, $query_result);

            if (!mysqli_errno($dbconnect)) {
                $_SESSION['delete-form-success'] = "User Deleted successfully";
        }
    }
    }
}

header('location: ' . ROOT_URL . 'backend/manage-users.php');
die();
