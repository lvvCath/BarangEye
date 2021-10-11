<?php
    include('dbconnect.php');

    $email = $decodedData['email'];
    $no_of_year = $decodedData['no_of_year'];
    $category = $decodedData['category'];
    $message = $decodedData['message'];

    $SQL = "INSERT INTO certificate (no_of_year, category, message, account_id)
            VALUES ('$no_of_year', '$category', '$message',
            (SELECT id
             FROM account
             WHERE email = '$email'))";

    if(mysqli_query($conn, $SQL)){
        $MSG = 'Request has been submitted! Use Web Version to Check Status';

        $json = json_encode($MSG);
        echo $json;
    }else{
        echo 'There seem to be a problem. Please Try Again.';
    }
    mysqli_close($conn);

?>