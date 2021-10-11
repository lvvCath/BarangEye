<?php

    include('dbconnect.php');
    $email = $decodedData['email'];
    $complainant = $decodedData['complainant'];
    $c_address = $decodedData['c_address'];
    $respondent = $decodedData['respondent'];
    $r_address = $decodedData['r_address'];
    $complain = $decodedData['complain'];

    $SQL = "INSERT INTO complain (complainant, c_address, respondent, r_address, complain, account_id)
            VALUES ('$complainant', '$c_address', '$respondent', '$r_address', '$complain',
            (SELECT id
             FROM account
             WHERE email = '$email'))";

    if(mysqli_query($conn, $SQL)){
        $MSG = 'Report has been submitted! Use Web Version to Check Status';

        $json = json_encode($MSG);
        echo $json;
    }else{
        echo 'There seem to be a problem. Please Try Again.';
    }
    mysqli_close($conn);

?>