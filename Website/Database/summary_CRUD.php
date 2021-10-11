<?php
require('../Database/db.php');

//TOTAL POPULATION

$queryPopulation =  "SELECT count(id) AS total FROM resident"; 
$sqlPopulation = mysqli_query($conn, $queryPopulation);
$result = mysqli_fetch_array($sqlPopulation);
$population = $result['total'];


//TOTAL MALE
$queryMale =  "SELECT count(gender) AS total FROM resident WHERE gender = 'Male'"; 
$sqlMale= mysqli_query($conn, $queryMale);
$result = mysqli_fetch_array($sqlMale);
$male = $result['total'];


//TOTAL FEMALE
$queryFemale =  "SELECT count(gender) AS total FROM resident WHERE gender = 'Female'"; 
$sqlFemale = mysqli_query($conn, $queryFemale);
$result = mysqli_fetch_array($sqlFemale);
$female = $result['total'];


//TOTAL SENIOR
$querySenior =  "SELECT count(age) AS total FROM resident WHERE age >= 60"; 
$sqlSenior = mysqli_query($conn, $querySenior );
$result = mysqli_fetch_array($sqlSenior);
$senior = $result['total'];

//TOTAL REGISTERED
$queryVoter =  "SELECT count(voter_status) AS total FROM resident WHERE voter_status = 'Registered'"; 
$sqlVoter = mysqli_query($conn, $queryVoter);
$result = mysqli_fetch_array($sqlVoter);
$voter = $result['total'];

//TOTAL  NOT REGISTERED
$queryNotVoter =  "SELECT count(voter_status) AS total FROM resident WHERE voter_status = 'Not Registered'"; 
$sqlNotVoter = mysqli_query($conn, $queryNotVoter);
$result = mysqli_fetch_array($sqlNotVoter);
$Notvoter = $result['total'];

?>

