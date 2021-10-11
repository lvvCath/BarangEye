<?php 
/*To Get All Items in the Table (list.php).*/

    header('Content-Type: application/json');
    include("../db.php");

    $stmt = $db->prepare("  SELECT resident.id, resident.first_name, resident.middle_name, resident.last_name, resident.gender, resident.age, resident.bdate, resident.address, resident.contact_no, resident.marital_status, resident.voter_status,
    account.id as id_account, account.username, account.email, account.password, account.user_type, account.resident_id,
    image.profile_img
    FROM resident LEFT OUTER JOIN account ON resident.id = account.resident_id
                    LEFT OUTER JOIN image ON resident.id = image.resident_id
                        ");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($result);
    // echo $result;

?>