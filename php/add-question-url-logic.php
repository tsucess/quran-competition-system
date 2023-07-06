<?php
    require "../config/database.php";

    $question_url = mysqli_real_escape_string($dbconnect, $_POST['question-url']);
    if(isset($_POST['category'])){
        $category_id = mysqli_real_escape_string($dbconnect, $_POST['category']);
    }

    if(!empty($category_id) && !empty($question_url)){

                // let's insert all data inside table
                $insert_query = "INSERT INTO question (category_id, question, question_url, is_selected) VALUES ( '$category_id', 'NULL', '$question_url', 0)";
                $insert_sql = mysqli_query($dbconnect, $insert_query);
    
                if ($insert_sql) {
                        echo "success";
                } else {
                    echo "Something went wrong";
                }

    }else {
        echo "All input field are required"; 
    }
?>