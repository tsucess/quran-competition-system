<?php
    require "../config/database.php";

    $question = mysqli_real_escape_string($dbconnect, $_POST['question']);
    if(isset($_POST['category'])){
        $category_id = mysqli_real_escape_string($dbconnect, $_POST['category']);
    }

    if(!empty($category_id) && !empty($question)){

                // let's insert all data inside table
                $insert_query = "INSERT INTO question (category_id, question, question_url, is_selected) VALUES ( '$category_id', '$question', 'NULL', 0)";
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