<?php include('../Database/db.php'); ?>
<?php
    //redirect ot login page if not logged in
    if(!isset($_SESSION['id'])){
        header('location:../LandingPage/LogInSignUp.php');
        exit()
;    }

    //get user details
    $sql = "SELECT * FROM account WHERE id = '".$_SESSION['id']."'";
    $query = $conn->query($sql);
    $row = $query->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
     <!-- CSS -->
    <link rel="stylesheet" href="css/change_password.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<style type="text/css">
    .card{
        margin-right: px;
    }


</style>
<body>
    <div class="wrapper">
        <!-- Insert sideNav -->
        <div id="sideNav"><?php include 'SideNav_User.php';?></div>
        <div class="main_content">

    <!-- Top Nav -->
            <div class="sticky">
                <div class="navbar navbar-light bg-white">
                    <div class="search navbar-left"><h4>Update My Password</h4></div>
                    <div class="search navbar-right">
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
                    <div class="card shadow mb-4" id ="card">
                        <div class="card-header py-3">
                            <div class="form-row">              
                       
                            </div>
                        </div>
                        <div class="mb-2" id = "pass">
                            <div class="col-12 px-5">
                                    <form  method="POST"  action="change_password_process.php">
                                         <h3 class="m-0 text-primary">CHANGE PASSWORD</h3>
                                          <?php
                                if(isset($_SESSION['error'])){
                                    ?>
                                    <div class="alert alert-danger text-center" style="margin-top:20px;">
                                        <?php echo $_SESSION['error']; ?>
                                    </div>
                                    <?php

                                    unset($_SESSION['error']);
                                }
                                if(isset($_SESSION['success'])){
                                    ?>
                                    <div class="alert alert-success text-center" style="margin-top:20px;">
                                        <?php echo $_SESSION['success']; ?>
                                    </div>
                                    <?php

                                    unset($_SESSION['success']);
                                }
                            ?>
                                         <div class="form-group row ">
                                            <div class="col-md-12"></div>
                                    <label for="Current Password" class="col-sm-4 col-form-label">Password :</label>
                                        <div class="col-sm-12">
                                        <input type="password" class="form-control" type="password" name="old" id="old"   placeholder="Enter Old Password" value="<?php echo (isset($_SESSION['old'])) ? $_SESSION['old'] : ''; ?>">
                                    </div>

                                         </div>
                                       <div class="form-group row">
                                       <div class="col-md-12"></div>
                                        <label for="New Password" class="col-sm-4  col-form-label" >New Password :</label>
                                         <div class="col-sm-12">
                                         <input type="password" class="form-control"  name="new" id="new" placeholder="Enter New Password" value="<?php echo (isset($_SESSION['new'])) ? $_SESSION['new'] : ''; ?>">
                                     </div>
                                    </div>
                                       <div class="form-group row">
                                           <div class="col-md-12"></div>
                                    <label for="Confirm Password" class="col-sm-4  col-form-label">Confirm Password :</label>
                                      <div class="col-sm-12">
                                       <input type="password" class="form-control" name="retype" id="retype" placeholder=" Enter Confirm Password" value="<?php echo (isset($_SESSION['retype'])) ? $_SESSION['retype'] : ''; ?>">
                                        </div>    
                                        </div>
                                  <div class="form-group row">
                                    <div class="col-md-4"></div>
                                    <div class="button-group">
                                      <a  href = "My_Account.php"class="btn btn-secondary" id ="submit">CANCEL</a>
                                    <button type="submit"  name = "update" class="btn btn-primary">CONFIRM </button>
                                    </div>
                                </div>   
                            </form>
                     </div>
             </div>
      

<?php include '../LandingPage/ToTop.php';?>
</body>
</html>


