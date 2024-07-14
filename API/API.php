<?php
    header('Access-Control-Allow-Origin: http://127.0.0.1:5500/displayData.html');
    header('Access-Control-Allow-Headers: Content-Type');
    header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
    $conn = mysqli_connect('localhost', 'root', '', 'api_db');

    if($conn){
        $SQL = "SELECT * FROM api_data";
        $result = mysqli_query($conn, $SQL);
        $response = array();
        if($result){
            header("Content-Type:JSON");
            $i = 0;
            while($row = mysqli_fetch_assoc($result)){
                $response[$i]['id'] = $row['student_ID'];
                $response[$i]['student_name'] = $row['student_name'];
                $response[$i]['student_email'] = $row['student_email'];
                $response[$i]['student_phone'] = $row['student_phone'];
                echo json_encode($response, JSON_PRETTY_PRINT);
            }
        }
    }
    else{
        echo 'Database connection failed!';
    }

?>