<?php
    /*To update a record (update.php)*/
    header('Content-Type: application/json');
    include("../db.php"); //DB connection script

    $id = $_POST['id'];
    $status = $_POST['status'];
    $date_release = $_POST['date_release'];
    $date_claimed = $_POST['date_claimed'];

    $stmt = $db->prepare("UPDATE certificate SET status=?, date_release=?, date_claimed=? WHERE id = ?");
    $result = $stmt->execute([$status, $date_release, $date_claimed, $id]);

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