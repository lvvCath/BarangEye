<?php 
/*To Get All Items in the Table (list.php).*/

    header('Content-Type: application/json');
    include("../db.php");

    $stmt = $db->prepare("  SELECT  certificate.id, 
                                    certificate.no_of_year, 
                                    certificate.category, 
                                    certificate.message,
                                    certificate.reply,
                                    certificate.status,
                                    certificate.date_release,
                                    certificate.date_claimed,
                                    account.id as account_id,
                                    resident.first_name,
                                    resident.last_name
                            FROM certificate LEFT OUTER JOIN account ON certificate.account_id = account.id
                            LEFT OUTER JOIN resident ON account.resident_id = resident.id
                            ");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($result);
    // echo $result;

?>