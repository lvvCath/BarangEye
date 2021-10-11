<?php
/*To Delete Resident*/

    header('Content-Type: application/json');
    include "../db.php";

    $id = (int) $_POST['id'];

    $stmt = $db->prepare("DELETE FROM resident WHERE id = ?");
    $result = $stmt->execute([$id]);



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