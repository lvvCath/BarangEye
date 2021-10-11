<?php
include('../Database/db.php');
if(isset($_SESSION['id'])){

    $id = $_SESSION['id'];
//INSERT REQUEST
if(isset($_POST['createBtn'])){
     $no_of_year = $_POST['no_of_year'];
     $category = $_POST['category'];
     $message = $_POST['message'];
     $id =  $_POST['id'];

  $sql = "INSERT INTO complain (no_of_year, category, message, status, account_id) VALUES ('$no_of_year', '$category','$message','On-going',$id)"; 
  $result_FROM = mysqli_query($conn, $sql); 

if ($result_FROM === TRUE) {
    $_SESSION['success'] = "Record has been saved";
      header("Location: Certificate_User.php");
    exit();
    
} else {
    $_SESSION['error'] = "Failed to saved";
      header("Location: Certificate_User.php");
    exit();
}
}
}
  ?>