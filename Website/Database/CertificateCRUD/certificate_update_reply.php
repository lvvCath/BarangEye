<?php
    /*To update a record (update.php)*/
    header('Content-Type: application/json');
    include("../db.php"); //DB connection script

    $id = $_POST['id'];
    $status = $_POST['status'];
    $reply = $_POST['reply'];

    $stmt = $db->prepare("UPDATE certificate SET status=?, reply=? WHERE id = ?");
    $result = $stmt->execute([$status, $reply, $id]);

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