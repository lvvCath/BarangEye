<?php
include('dbconnect.php');

$email = $decodedData['email'];
$password = ($decodedData['password']); //password is hashed

$SQL = "SELECT * FROM account WHERE email = '$email'";
$exeSQL = mysqli_query($conn, $SQL);
$checkEmail =  mysqli_num_rows($exeSQL);

if ($checkEmail != 0) {
    $arrayu = mysqli_fetch_array($exeSQL);
    if ($arrayu['password'] != $password) {
        $Message = "Incorrect Password";
    }else {
        $Message = "Success";
    }
} else {
    $Message = "No account yet";
}

$response[] = array("Message" => $Message);
echo json_encode($response);
?>