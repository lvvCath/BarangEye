<?php include('../Database/db.php'); ?>
<?php 

if (isset($_SESSION['id'])) {

if (isset($_POST['old']) && isset($_POST['new'])
    && isset($_POST['retype'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$old = validate($_POST['old']);
	$new = validate($_POST['new']);
	$retype = validate($_POST['retype']);
    
    if(empty($old)){
    	$_SESSION['error'] = "Old Password is Required";
      header("Location: Change_Password.php");
	  exit();
    }else if(empty($new)){
       $_SESSION['error'] = "New Password is Required";
      header("Location: Change_Password.php?error=");
	  exit();
    }else if($new !== $retype){
    	 $_SESSION['error'] = "The Confirmation Password  does not match";
      header("Location: Change_Password.php?");
	  exit();
    }else {

        $id = $_SESSION['id'];

        $sql = "SELECT password FROM account WHERE id='$id' AND password='$old'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
        	
        	$sql_2 = "UPDATE account SET password='$new' WHERE id='$id'";
        	mysqli_query($conn, $sql_2);
        	$_SESSION['success'] = "Password updated successfully";
        	header("Location: Change_Password.php");
	        exit();

        }else {
        	 $_SESSION['error'] = "Incorrect password";
        	header("Location: Change_Password.php");
	        exit();
        }

    }
   
}
}