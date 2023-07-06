<?php
    require "../config/database.php";

        if(isset($_SESSION['user_id'])){
      
            $fetch_question_query = "SELECT * FROM question";
            $fetch_question_result = mysqli_query($dbconnect, $fetch_question_query);

            if(mysqli_num_rows($fetch_question_result) > 0){
                $question_data = array();
                while($question = mysqli_fetch_assoc($fetch_question_result)){
                    $question_data[] = $question;
                }
                header('Content-Type: application/json');
                echo json_encode($question_data);
            }
            

        }