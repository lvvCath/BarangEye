<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>  
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- CSS -->
	<link rel="stylesheet" href="css/logInSignUp.css">
</head>
	
<?php include('../Database/db.php'); ?>
<?php session_start(); ?>
<?php   
// Login
	if(isset($_REQUEST['LoginBtn'])){
		$email = $_REQUEST['email'];
		$username = $_REQUEST['email'];
		$password = $_REQUEST['password'];

		if(!empty($email) && !empty($password)){
			$sql = "SELECT * FROM account WHERE (email = '$email' OR username = '$username') AND password='$password'";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)  == 1){
				$row = mysqli_fetch_assoc($result);
				if ($row['user_type'] == 'admin') {
					$_SESSION['id'] = $row['id'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['username'] = $row['username'];
					header('Location:../AdminPage/Dashboard_Admin.php');
				}
				else if($row['user_type'] == 'user') {
					$_SESSION['id'] = $row['id'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['username'] = $row['username'];
					header('Location:../UserPage/Dashboard_User.php');
				}
			}else{
				echo ("<script LANGUAGE='JavaScript'>
					window.alert('Incorrect Email Address or Password !');
					window.location.href='#';
					</script>");
			}
		}
	}
?>

<div class="container" id="container">
    <!-- Sign Up Part -->
	<div class="form-container sign-up-container">
		<form action="SignUp.php" method="POST"> <br> <br>
			<h1>Welcome to BarangEYE!!</h1> <br>
			<p><strong>“BarangEYE”</strong> aims to provide electronic governance through computerization 
				and automation of the operations of the barangay.
			</p>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
				<label class="form-check-label" for="flexCheckDefault">
					Agree to the <a href="" class="terms">Terms and Conditions</a> and <a href="" class="terms">Privacy Policy</a> 
				</label>
			</div>
			<br><br>
            <input name="SignupBtn"  id="SignupBtn" href="SignUp.php" type="submit" class="btn ghost signBtn" value="Get Started">
			<a href="LandingPage.php">Go Back</a>
		</form>
	</div>
    <!-- Log In Part -->
	<div class="form-container sign-in-container">
		<form action="#" method="POST"> <br><br><br>
			<h1>Log in</h1> <br>
            <input name="email" id="email" type="text" class="email form-control" placeholder="Email or Username" required>
            <input name="password" id="password" type="password" class="password form-control" placeholder="Password" required>
            <span>or use your account</span>
            <div class="social-container">
                <a class="btn btn-primary" style="background-color: #3b5998;" href="#!" role="button"><i class="fa fa-facebook"></i></a>  
                <a class="btn btn-primary" style="background-color: #1DA1F2;" href="#!" role="button"><i class="fa fa-twitter"></i></a>
                <a class="btn btn-primary" style="background-color: #DB4437;" href="#!" role="button"><i class="fa fa-google"></i></a>  
            </div> 
			<a href="#" >Forgot your password?</a>
            <input name="LoginBtn" id="LoginBtn"  type="submit" class="ghost signBtn" value="Login">
			<a href="LandingPage.php">Go Back</a>
		</form>
	</div>
    <!-- Overlay Part  -->
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Join now Ka'Barrio!</h1>
				<p> Join and be update to the latest barangay local news, announcements, activities and more!</p>
                <p class="question">Registered Already?</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Welcome Back Ka'Barrio!</h1>
				<p>Let's continue our jouney!</p>
                <p class="question">Not yet Registered? Join us now!</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<!-- 

<script>
    $(document).ready(function(){
        $("#LoginBtn").click(function(){
            $("p").hide();
        });
    });
</script> -->

<!-- For swiching Log in and Sign up -->
<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>
