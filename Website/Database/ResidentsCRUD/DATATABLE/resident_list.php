<?php
include('../../db.php');

// fetch records
$sql = "SELECT resident.id, resident.first_name, resident.middle_name, resident.last_name, resident.gender, resident.age, resident.bdate, resident.address, resident.contact_no, resident.marital_status, resident.voter_status,
        account.id as id_account, account.username, account.email, account.password, account.user_type, account.resident_id,
        image.id as id_image, image.profile_img 
        FROM resident LEFT OUTER JOIN account ON resident.id = account.resident_id
        LEFT OUTER JOIN image ON resident.id = image.resident_id";
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