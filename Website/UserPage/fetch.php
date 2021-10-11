<?php 
 session_start();
    if(isset($_SESSION['id'])){
        $id = $_SESSION['id'];
    }
$query = "SELECT * FROM account INNER JOIN image INNER JOIN resident ON resident.id = account.resident_id AND image.resident_id = resident.id WHERE account.id = $id";
$sql= mysqli_query($conn, $query);
$row = mysqli_fetch_array($sql);


    
 ?>

