<?php include_once('../Database/db.php'); ?>
<?php include('fetch.php'); ?> 
<?php 

if (isset($_POST['submit'])){
    $id = $_POST['id'];
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
	
		$queryupdate ="UPDATE resident SET first_name = '$first_name', middle_name = '$middle_name', last_name = '$last_name', gender = '$gender',bdate = '$bdate', address= '$address', contact_no= '$contact_no', marital_status = 
      '$marital_status', voter_status = '$voter_status' WHERE id = $id";
    $sqlupdate = mysqli_query($conn, $queryupdate);

		if($sqlupdate == 1){
			header('location:My_Account.php');
		    

		}else{
			echo ("<script LANGUAGE='JavaScript'>
		    window.alert('Failed to update !');
		    window.location.href='edit_profile.php';
		    </script>");
		}
    }

?>