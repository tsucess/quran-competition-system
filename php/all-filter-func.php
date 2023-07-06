<?php



function connect()
{
    // connect to the database;
    $dbconnect =  new mysqli("localhost", 'success', 'Taofeeq1993@', 'quran_competition');

    if (mysqli_error($dbconnect)) {
        die(mysqli_error($dbconnect));
    } else {
        return $dbconnect;
    }
}



if (isset($_POST['filtervalue'])) {
    $filtervalue = $_POST['filtervalue'];
    $filter = $_POST['filters'];

    if ($filter === "all") {
        $participant = getAllData();
        echo json_encode($participant);
   
    } else if ($filter === "year") {
        $participant = getDataByYear($filtervalue);
        echo json_encode($participant);
        
    } else if ($filter === "yearcategory") {
        $filteryearvalue = $_POST['filteryearvalue'];
        $participant = getYearcategory($filtervalue, $filteryearvalue);
        echo json_encode($participant);
    }
}



function getAllData()
{
    $dbconnect = connect();

    //fetch all forms from database
    $query = "SELECT *  FROM participant";
    $participants_result = mysqli_query($dbconnect, $query);

    if (mysqli_num_rows($participants_result) > 0) {
        while ($participants = mysqli_fetch_assoc($participants_result)) {
            $participant[] = $participants;
        }
        return $participant;
    } else {
        return "success";
    }
}


function getDataByYear($filtervalue)
{
    $dbconnect = connect();
    //fetch all forms from database
    
        $query = "SELECT p.*, r.score, r.comments  FROM participant p, results r WHERE p.id = r.participant_id AND YEAR(datecreated) = $filtervalue";
        $participants_result = mysqli_query($dbconnect, $query);
    
        if (mysqli_num_rows($participants_result) > 0) {
            while ($participants = mysqli_fetch_assoc($participants_result)) {
                $participant[] = $participants;
            }
            return $participant;
        } else {
            return "success";
        }
             
}
// year = $filteryear

function getYearcategory($filtercategory, $filteryear)
{
    $dbconnect = connect();
    //fetch all forms from database     
    $query = "SELECT p.*, r.score, r.comments  FROM participant p, results r WHERE p.id = r.participant_id AND category_id = '$filtercategory' AND YEAR(datecreated) = $filteryear";
    $participants_result = mysqli_query($dbconnect, $query);

    if (mysqli_num_rows($participants_result) > 0) {
        while ($participants = mysqli_fetch_assoc($participants_result)) {
            $participant[] = $participants;
        }
        return $participant;
    } else {
        return "success";
    }
}


