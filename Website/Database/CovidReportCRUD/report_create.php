<?php
/*Create API*/
    header('Content-Type: application/json');
    include("../db.php");

    $quarantine_status = $_POST['quarantine_status'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $active_case = $_POST['active_case'];
    $recovered_case = $_POST['recovered_case'];
    $deceased_case = $_POST['deceased_case'];
    $total_case = $_POST['total_case'];
    
    if (empty($_POST["quarantine_status"]) or 
        empty($_POST["start_date"]) or 
        empty($_POST["end_date"]) or 
        empty($_POST["active_case"]) or 
        empty($_POST["recovered_case"]) or 
        empty($_POST["deceased_case"]) or 
        empty($_POST["total_case"])
        ) {
        echo json_encode([
            'code' => '400'
        ]);
    } else {
        $stmt = $db->prepare("INSERT INTO covid_report (quarantine_status,
                                                        start_date,
                                                        end_date,
                                                        active_case,
                                                        recovered_case,
                                                        deceased_case,
                                                        total_case) 
                            VALUES (?, ?, ?, ?, ?, ?, ?)");
        $result = $stmt->execute([$quarantine_status, $start_date, $end_date, $active_case, $recovered_case, $deceased_case, $total_case]);
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