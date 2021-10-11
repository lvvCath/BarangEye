<?php
 session_start();
    if(isset( $_SESSION['id'])){ // isset is empty it will go to login. && all all caps are global variable.

        $reportid = $_SESSION['id'];
 
     }
        $queryCert = "SELECT * FROM account INNER JOIN  complain ON complain.account_id = account.id WHERE account.id = $reportid";
                $sqlCert= mysqli_query($conn, $queryCert);
                $row = mysqli_fetch_array($sqlCert);

             

$query =  "SELECT count(complain.id) AS total FROM complain INNER JOIN account ON account.id = complain.account_id 
            WHERE account.id = $reportid"; 
            $sql= mysqli_query($conn, $query);  
            $res = mysqli_fetch_array($sql);
            $report = $res['total'];

        
?>