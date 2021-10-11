<?php include('../Database/db.php'); ?>
<?php include('fetch.php'); ?>                      

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>     
    <!-- CSS -->
    <link rel="stylesheet" href="css/Account_user.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Insert sideNav -->
        <div id="sideNav"><?php include 'SideNav_User.php';?></div>
        <div class="main_content">

    <!-- Top Nav -->
            <div class="sticky">
                <div class="navbar navbar-light bg-white">
                    <div class="search navbar-left"><h4>View My Account</h4></div>
                    <div class="search navbar-right">
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="btn btn-outline-primary" style="font-weight: bold; 
                        border-radius: 50px 50px 50px;" href = "Change_Password.php">Change Password
                            <i class="fa fa-edit"></i>
                        </a>
                        &nbsp;&nbsp;<a class ="btn btn-outline-primary" style="font-weight: bold; 
                        border-radius: 50px 50px 50px;" href = "edit_profile.php">Edit Profile
                            <i class="fa fa-edit"></i></a>
                    </div>
                </div>  
            </div> 
    <!-- /Top Nav -->            

    <!-- Body -->
        <div class="container-fluid gedf-wrapper">
    <!-- View Account Information -->        
        <div class="row">
                <div class="col-lg-15"> 
                    <!-- My Profile -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="form-row">              
                        <h3 class="m-0 text-primary">PROFILE</h3>
                            </div>
                        
                        </div>
                        <!-- My Profile (Default) -->
                        <div class="mb-2" id = "result">
                          <form class="row needs-validation"  novalidate>
                                    <!-- Account Information -->
                            <div class="col-4 px-5 account">
                                <!-- <img src="data:image/jpg/jpeg;charset=utf8;base64,<?php echo base64_encode($row['profile']); ?>"  id ="profile"/>  -->
                                <img src="<?php echo $row['profile_img']; ?>"  id ="profile"/> 
                                <div class="form-group">
                                    <label class="text-muted" for="username_v">Username</label>
                                    <input class="form-control" id="username_v" name="username_v" type="text" readonly value="<?php echo $row['username']?>"> 
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="email_v">Email</label>
                                    <input class="form-control" id="email_v" name="email_v" type="text" readonly value="<?php echo $row['email']?>"> 
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="user_type_v">User Type</label>
                                    <input class="form-control" id="user_type_v" name="user_type_v" type="text" readonly value="<?php echo $row['user_type']?>"> 
                                </div>

                            </div>
                            <!-- Resident Information -->
                            <div class="col-8 px-5">
                                <div class="form-row resident-info-view">
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="text-muted" for="first_name_v">First Name</label>
                                            <input class="form-control" id="first_name_v" name="first_name_v" type="text" readonly value="<?php echo $row['first_name']?>"> 
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="text-muted" for="middle_name_v">Middle Name</label>
                                            <input class="form-control" id="middle_name_v" name="middle_name_v" type="text" readonly value="<?php echo $row['middle_name']?>"> 
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="text-muted" for="last_name_v">Last Name</label>
                                            <input class="form-control" id="last_name_v" value = "<?php echo $row['last_name'];?>" name="last_name_v" type="text" readonly value="<?php echo $row['last_name']?>"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-4">
                                        <label class="text-muted" for="birth_date_v">Birth Date</label>
                                        <div class="input-group date">
                                            <input id="birth_date_v" name="birth_date_v" onchange="UpdateAge()" type="text" class="form-control date-input" readonly value="<?php echo $row['bdate']?>">
                                            <div class="input-group-addon" >
                                                <span class="fa fa-calendar"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="text-muted" for="age_v">Age</label>
                                            <input class="form-control" id="age_v" name="age_v" type="text" readonly value="<?php echo $row['age']?>"> 
                                        </div>
                                    </div>    
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="text-muted" for="gender_v">Gender</label>
                                            <input class="form-control" id="gender_v" name="gender_v" type="text" readonly value="<?php echo $row['gender']?>"> 
                                        </div>   
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="address_v">Address</label>
                                    <input class="form-control" id="address_v" name="address_v" type="text" readonly value="<?php echo $row['address']?>"> 
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="contact_no_v">Contact No.</label>
                                    <input class="form-control" id="contact_no_v" name="contact_no_v" type="text" readonly value="<?php echo $row['contact_no']?>"> 
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label class="text-muted" for="marital_status_v">Marital Status</label>
                                        <input class="form-control" id="marital_status_v" name="marital_status_v" type="text" readonly value="<?php echo $row['marital_status']?>">
                                    </div>  
                                    <div class="form-group col">
                                        <label class="text-muted" for="voter_status_v">Voter Status</label>
                                        <input class="form-control" id="voter_status_v" name="voter_status_v" type="text" readonly value="<?php echo $row['voter_status']?>">
                                    </div> 
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>


<?php include '../LandingPage/ToTop.php';?>
</body>
</html>


