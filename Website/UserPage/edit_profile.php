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
                    <div class="search navbar-left"><h4>Update My Account</h4></div>
                    <div class="search navbar-right">
                            
                    </div>
                </div>  
            </div> 
    <!-- /Top Nav -->            

    <!-- Body -->
        <div class="container-fluid gedf-wrapper">
    <!-- View Account Information -->        
        <div class="row" style="width:90%;">
                <div class="col-lg-15"> 
                    <!-- My Profile -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="col-8">
                        <h3 class="m-0  text-primary">PROFILE</h3>
                    </div>
                        </div>
                        <!-- My Profile (Default) -->
                        <div class="mb-2" >
                            <div class="row needs-validation"  novalidate>
                                    <!-- Account Information -->
                            <div class="col-4 px-5 account">
                                 <img src="<?php echo $row['profile_img']; ?>"  id ="profile"/> 
      
                                <div class="form-group">
                                    <label class="text-muted" for="username">Username</label>
                                    <input class="form-control" id="username" name="username" type="text"  value="<?php echo $row['username']?>"> 
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="email">Email</label>
                                    <input class="form-control" id="email" name="email" type="text"  value="<?php echo $row['email']?>"> 
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="user_type">User Type</label>
                                    <input class="form-control" id="user_type" name="user_type" type="text"  value="<?php echo $row['user_type']?>"> 
                                </div>

                            </div>

                            <!-- Resident Information -->
                            <div class="col-8 px-5">
                                <div class="form-row resident-info-view">
                                    <div class="col">
                                    <form  method="POST"  action="edit_profile_process.php">
                                        <div class="form-group">
                                            <input class="form-control" id="id" name="id" type="hidden"  value="<?php echo $row['id']?>"> 
                                            <label class="text-muted" for="first_name">First Name</label>
                                            <input class="form-control" id="first_name" name="first_name" type="text"  value="<?php echo $row['first_name']?>"> 
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="text-muted" for="middle_name">Middle Name</label>
                                            <input class="form-control" id="middle_name" name="middle_name" type="text"  value="<?php echo $row['middle_name']?>"> 
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="text-muted" for="last_name">Last Name</label>
                                    <input class="form-control" id="last_name" name="last_name" type="text" value="<?php echo $row['last_name']?>"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-4">
                                    <label class="text-muted" for="bdate">Birth Date</label>
                                    <div class="input-group date">
                                        <input id="bdate" name="bdate" onchange="UpdateAge()" type="text" class="form-control date-input" value="<?php echo $row['bdate']?>"/>
                                        <div class="input-group-addon" >
                                            <span class="fa fa-calendar"></span>
                                        </div>
                                    </div>
                            <!-- Calendar -->
                            <script type="text/javascript">
                                $(function () {
                                    $("#bdate").datepicker({
                                        format: "yyyy-mm-dd",
                                        showOtherMonths: true,
                                        selectOtherMonths: true,
                                        autoclose: true,
                                        changeMonth: true,
                                        changeYear: true,
                                        //gotoCurrent: true,
                                        orientation: "bottom",
                                    });
                                });
                            </script>
                        </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="text-muted" for="age">Age</label>
                                            <input class="form-control" id="age_u" name="age" type="text" readonly value="<?php echo $row['age']?>" > 
                                        </div>
                                    </div>    
                                    <div class="col">
                                        <div class="form-group">
                                        <label class="text-muted" for="gender">Gender</label> <br>
                                        <select class="custom-select custom-select-lg py-2" name ="gender" id="gender" required>
                                            <option selected>Select</option>
                                            <option value="Male"
                                            <?php if ($gender == "Male"){
                                                echo "selected";
                                              } ?>
                                            >Male</option>
                                            <option value="Female"
                                            <?php if ($gender == "Female"){
                                                echo "selected";
                                              } ?>
                                            >Female</option>
                                        </select>
                                    </div>   
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="address">Address</label>
                                    <input class="form-control" id="address" name="address" type="text"  value="<?php echo $row['address']?>"> 
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="contact_no">Contact No.</label>
                                    <input class="form-control" id="contact_no" name="contact_no" type="text"  value="<?php echo $row['contact_no']?>"> 
                                </div>
                                 <div class="form-row">
                        <div class="form-group col">
                            <label class="text-muted" for="marital_status">Marital Status</label> <br>
                            <select class="custom-select custom-select-lg mb-5" id="marital_status" name="marital_status">
                                <option selected>Select</option>
                                <option value="Single"
                                <?php if ($marital_status == "Single"){
                                            echo "selected";
                                } ?>
                                >Single</option>
                                <option value="Married"
                                <?php if ($marital_status == "Married"){
                                            echo "selected";
                                } ?>
                                >Married</option>
                                <option value="Widowed"
                                <?php if ($marital_status == "Widowed"){
                                            echo "selected";
                                } ?>
                                >Widowed</option>
                                <option value="Divorced"
                                <?php if ($marital_status == "Divorced"){
                                         echo "selected";
                                } ?>
                                >Divorced</option>
                            </select>
                        </div>  
                        <div class="form-group col">
                            <label class="text-muted" for="voter_status">Voter Status</label> <br>
                           <select class="custom-select custom-select-lg mb-5" name = "voter_status" id="voter_status">
                                <option selected>Select</option>
                                <option value="Registered"
                               <?php if ($voter_status == "Registered"){
                                         echo "selected";
                                } ?>
                                >Registered</option>
                                <option value="Not Registered"
                               <?php if ($voter_status == "Not Registered"){
                                         echo "selected";
                                } ?>
                                >Not Registered</option>
                            </select>
                            </div> 
                        </div>
                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <div class = "button-group">
                                     <a  href = "My_Account.php"class="btn btn-secondary" id ="submit">CANCEL</a>
                                    <button type="submit"  name = "submit"class="btn btn-primary" id ="submit">SAVE UPDATE</button>
                                    </div>
                                </div>   
                            </form>   
                        </div>    
                 </form>
                 
            </div>
        </div>
<?php include '../LandingPage/ToTop.php';?>
</body>
</html>
<script type="text/javascript">
function SetAge() {
    var bdate=document.createForm.birth_date.value;
    var age =new Person(bdate).calculateAge();
    document.getElementById('age').value=age;
}
function UpdateAge() {
    var bdate=document.updateForm.birth_date_u.value;
    var age =new Person(bdate).calculateAge();
    document.getElementById('age_u').value=age;
}
function Person(dob) {
    this.birthday = new Date(dob);
    this.calculateAge = function() {
      const diff = Date.now() - this.birthday.getTime();
      const ageDate = new Date(diff); 
      console.log(ageDate.getUTCFullYear()); 
      return Math.abs(ageDate.getUTCFullYear() - 1970);
    };
}
</script>
