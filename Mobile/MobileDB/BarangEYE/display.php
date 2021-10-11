<?php
    include 'dbconnect.php';
    
    if($conn -> connect_error){
        die('Connection Failed: ' . $conn->connect_error);
    }

    if($email = $decodedData['email']){
        $SQL = "SELECT first_name, middle_name, last_name, gender, age, bdate, address, contact_no, marital_status, voter_status
            FROM resident 
            WHERE id IN (SELECT resident_id
                         FROM account
                         WHERE email ='$email')";
    
        $result = $conn->query($SQL);

        if($result->num_rows>0){
            while($row[] = $result->fetch_assoc()){
                $item = $row;
                $json = json_encode($item);
            }
        }else{
            echo 'No Results Found';
        }
        echo $json;
    };
    
    $conn->close();

?>