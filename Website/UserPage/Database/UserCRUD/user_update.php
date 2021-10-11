<?php
    /*To update a record (update.php)*/
    header('Content-Type: application/json');
    include("../Database/db.php"); //DB connection script

    $id_account = $_POST['id_account_v'];
    $username = $_POST['username_v'];
    $email = $_POST['email_v'];
    $password= $_POST['password_v'];
    $user_type= $_POST['user_type_v'];


    $stmt = $db->prepare("UPDATE account SET username=?, email = ?, password=?, user_type = ? WHERE id = ?");
    $result = $stmt->execute([$username,$email,$password,$user_type,$id_account]);
    
    if($result){
        echo json_encode([
            
            'code' => '201'
        ]);
    }else{
        echo json_encode([
            'code' => '400'
        ]);
    }

?>