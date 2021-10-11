<?php 
/*To Get All Items in the Table (list.php).*/

    header('Content-Type: application/json');
    include("../db.php");
    // Display only the latest data
    $stmt = $db->prepare("SELECT * FROM covid_report ORDER BY id DESC LIMIT 1;");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($result);
    // echo $result;

    

?>
