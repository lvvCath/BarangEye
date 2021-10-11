<?php
    /*To update a record (update.php)*/
    header('Content-Type: application/json');
    include("../db.php"); //DB connection script

    $id = $_POST['id_u'];
    $first_name = $_POST['first_name_u'];
    $middle_name = $_POST['middle_name_u'];
    $last_name= $_POST['last_name_u'];
    $gender= $_POST['gender_u'];
    $age= $_POST['age_u'];
    $bdate= $_POST['birth_date_u'];
    $address= $_POST['address_u'];
    $contact_no= $_POST['contact_no_u'];
    $marital_status= $_POST['marital_status_u'];
    $voter_status= $_POST['voter_status_u'];


    $stmt = $db->prepare("UPDATE resident SET first_name = ?, middle_name = ?, last_name=?, gender=?, age = ?, bdate=?, address=?, contact_no = ?, marital_status=?, voter_status = ? WHERE id = ?");
    $result = $stmt->execute([$first_name,$middle_name,$last_name,$gender,$age,$bdate,$address,$contact_no,$marital_status,$voter_status,$id]);
    
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