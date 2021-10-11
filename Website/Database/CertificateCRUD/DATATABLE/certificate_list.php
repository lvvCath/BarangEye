<?php
include('../../db.php');

// fetch records
$sql = "SELECT  certificate.id, 
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
        ";
$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($result)) {
    $array[] = $row;
}

$dataset = array(
    "echo" => 1,
    "totalrecords" => count($array),
    "totaldisplayrecords" => count($array),
    "data" => $array
);



echo json_encode($dataset);

?>