<?php
/*Create API*/
    header('Content-Type: application/json');
    include("../db.php");

    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $bdate = $_POST['bdate'];
    $address = $_POST['address'];
    $contact_no = $_POST['contact_no'];
    $marital_status = $_POST['marital_status'];
    $voter_status = $_POST['voter_status'];
    
    if (empty($_POST["first_name"]) or 
        empty($_POST["middle_name"]) or
        empty($_POST["last_name"]) or
        empty($_POST["gender"]) or
        empty($_POST["age"]) or
        empty($_POST["bdate"]) or
        empty($_POST["address"]) or
        empty($_POST["contact_no"]) or
        empty($_POST["marital_status"]) or
        empty($_POST["voter_status"])) {
        echo json_encode([
            'code' => '400'
        ]);
    } else {
        $stmt = $db->prepare("INSERT INTO resident (first_name,
                                                    middle_name,
                                                    last_name,
                                                    gender,
                                                    age,
                                                    bdate,
                                                    address,
                                                    contact_no,
                                                    marital_status,
                                                    voter_status) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $result = $stmt->execute([$first_name,$middle_name,$last_name,$gender,$age,$bdate,$address,$contact_no,$marital_status,$voter_status]);

        $db->exec("INSERT INTO account (resident_id) SELECT MAX(id) FROM resident");
        $db->exec("INSERT INTO image (resident_id) SELECT MAX(id) FROM resident");

        if($result){
            echo json_encode([
                'code' => '201'
            ]);
        }else{
            echo json_encode([
                'code' => '400'
            ]);
        }
    }
    

?>