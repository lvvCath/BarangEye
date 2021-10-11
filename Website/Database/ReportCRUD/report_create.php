<?php
/*Create API*/
    header('Content-Type: application/json');
    include("../db.php");

    $case_no = $_POST['case_no'];
    $complainant = $_POST['complainant'];
    $c_address = $_POST['c_address'];
    $respondent = $_POST['respondent'];
    $r_address = $_POST['r_address'];
    $complain = $_POST['complain'];
    $status = $_POST['status'];
    
    if (empty($_POST["case_no"]) or 
        empty($_POST["complainant"]) or
        empty($_POST["c_address"]) or
        empty($_POST["respondent"]) or
        empty($_POST["r_address"]) or
        empty($_POST["complain"]) or
        empty($_POST["status"])) {
        echo json_encode([
            'code' => '400'
        ]);
    } else {
        $stmt = $db->prepare("INSERT INTO complain (case_no,
                                                    complainant,
                                                    c_address,
                                                    respondent,
                                                    r_address,
                                                    complain,
                                                    status,
                                                    date_time) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, CURRENT_TIMESTAMP)");
        $result = $stmt->execute([$case_no,$complainant,$c_address,$respondent,$r_address,$complain,$status]);

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