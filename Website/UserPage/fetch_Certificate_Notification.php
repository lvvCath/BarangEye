<?php
 session_start();
    if(isset( $_SESSION['id'])){ // isset is empty it will go to login. && all all caps are global variable.

        $certid = $_SESSION['id']; 
     }
        $queryCert = "SELECT * FROM account INNER JOIN  certificate ON certificate.account_id = account.id
         WHERE account.id = $certid";
        $sqlCert= mysqli_query($conn, $queryCert);
        $row = mysqli_fetch_array($sqlCert);


$query_2 =  "SELECT count(certificate.id) AS total FROM certificate INNER JOIN account ON account.id = certificate.account_id WHERE account.id = $certid"; 
$sql_2= mysqli_query($conn, $query_2);
$result = mysqli_fetch_array($sql_2);
$cert = $result['total'];

        
?>