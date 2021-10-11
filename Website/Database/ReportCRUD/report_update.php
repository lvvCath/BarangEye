<?php
    /*To update a record (update.php)*/
    header('Content-Type: application/json');
    include("../db.php"); //DB connection script

    $id = $_POST['id_u'];
    $status = $_POST['status_u'];
    // $case_no = $_POST['case_no_u'];
    // $complaint = $_POST['complainant_u'];
    // $c_address = $_POST['c_address_u'];
    // $respondant = $_POST['respondant_u'];
    // $r_address = $_POST['r_address_u'];
    // $complain = $_POST['complain_u'];
    // $dates = $_POST['dates_u'];


    // $stmt = $db->prepare("UPDATE complain SET case_no = ?, complaint = ?, c_address=?, respondant=?, r_address = ?, complain=?, status=?, dates = ? WHERE id_u = ?");
    // $result = $stmt->execute([$case_no,$complaint,$c_address,$respondant,$r_address,$complain,$status,$dates,$id]);
    
    $stmt = $db->prepare("UPDATE complain SET status=? WHERE id = ?");
    $result = $stmt->execute([$status, $id]);

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