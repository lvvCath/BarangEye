<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
<!-- CSS -->
    <link rel="stylesheet" href="css/residents_Admin.css">
</head>

<body>
    <div class="wrapper">
    <!-- Insert sideNav -->
        <div id="sideNav"><?php include 'SideNav_User.php';?></div>
        <div class="main_content">
    <!-- Top Nav -->
            <div class="sticky">
                <div class="navbar navbar-light bg-white">
                    <div class="search navbar-left"><h4>Barangay Name Residents</h4></div>
                    <div class="search navbar-right">
                        <i class="fa fa-search"></i>
                        <input class="searchInp" type="text" placeholder="Search Resident">
                        <input name="search" class="searchBtn" type="submit" value="Search">
                        <button class="postBtn" data-toggle="modal" data-target="#createModal" >
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>  
            </div> 
    <!-- /Top Nav -->
            
    <!-- Body -->
    <div class="container-fluid">
        <div class="row mx-5 my-4">
            <div class=" col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row">
                            <h4 class="title">Residents <span>Data</span></h4>
                        </div>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Last Name</th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>Action</th>
                                    <th>Account</th>
                                </tr>
                            </thead>
                            <tbody id="resident_result">
                                <!-- Resident Data -->
                            </tbody>
                        </table>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
    <!-- /Body End-->
    </div> <!-- /main_content  -->
</div> <!-- /wrapper  -->



<!-- Modal Create Form -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title align-middle" id="createModalLabel">Add Resident Data</h4>
            </div>
            	
            <div class="modal-body">
                <form id="createForm" name="createForm" method="POST">
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label class="text-muted" for="first_name">First Name</label>
                                <input class="form-control" id="first_name" name="first_name" type="text"> 
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="text-muted" for="middle_name">Middle Name</label>
                                <input class="form-control" id="middle_name" name="middle_name" type="text"> 
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="text-muted" for="last_name">Last Name</label>
                                <input class="form-control" id="last_name" name="last_name" type="text"> 
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-4">
                            <label class="text-muted" for="birth_date">Birth Date</label>
                            <div class="input-group date">
                                <input id="birth_date" name="birth_date" onchange="SetAge()" type="text" class="form-control date-input" />
                                <div class="input-group-addon" >
                                    <span class="fa fa-calendar"></span>
                                </div>
                            </div>
                            <!-- Calendar -->
                            <script type="text/javascript">
                                $(function () {
                                    $("#birth_date").datepicker({
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
                                <input class="form-control" id="age" name="age" type="text" readonly> 
                            </div>
                        </div>    
                        <div class="col">
                            <div class="form-group">
                                <label class="text-muted" for="gender">Gender</label> <br>
                                <select class="custom-select custom-select-lg py-2" id="gender" required>
                                    <option selected>Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>   
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="text-muted" for="address">Address</label>
                        <input class="form-control" id="address" name="address" type="text"> 
                    </div>
                    <div class="form-group">
                        <label class="text-muted" for="contact_no">Contact No.</label>
                        <input class="form-control" id="contact_no" name="contact_no" type="text"> 
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="text-muted" for="marital_status">Marital Status</label> <br>
                            <select class="custom-select custom-select-lg mb-5" id="marital_status">
                                <option selected>Select</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Divorced">Divorced</option>
                            </select>
                        </div>  
                        <div class="form-group col">
                            <label class="text-muted" for="voter_status">Voter Status</label> <br>
                            <select class="custom-select custom-select-lg mb-5" id="voter_status">
                                <option selected>Select</option>
                                <option value="Registered">Registered</option>
                                <option value="Not Registered">Not Registered</option>
                            </select>
                        </div> 
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="createBtn" class="btn btn-primary">Add Data</button>
            </div>
            </div>
        </div>
    </div>

<!-- Modal Update Form -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title align-middle" id="updateModalLabel">Update Resident Data</h4>
            </div>
            	
            <div class="modal-body">
                <form id="updateForm" name="updateForm" method="POST">
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label class="text-muted" for="first_name_u">First Name</label>
                                <input class="form-control" id="first_name_u" name="first_name_u" type="text"> 
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="text-muted" for="middle_name_u">Middle Name</label>
                                <input class="form-control" id="middle_name_u" name="middle_name_u" type="text"> 
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="text-muted" for="last_name_u">Last Name</label>
                                <input class="form-control" id="last_name_u" name="last_name_u" type="text"> 
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-4">
                            <label class="text-muted" for="birth_date_u">Birth Date</label>
                            <div class="input-group date">
                                <input id="birth_date_u" name="birth_date_u" onchange="UpdateAge()" type="text" class="form-control date-input" />
                                <div class="input-group-addon" >
                                    <span class="fa fa-calendar"></span>
                                </div>
                            </div>
                            <!-- Calendar -->
                            <script type="text/javascript">
                                $(function () {
                                    $("#birth_date_u").datepicker({
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
                                <label class="text-muted" for="age_u">Age</label>
                                <input class="form-control" id="age_u" name="age_u" type="text" readonly> 
                            </div>
                        </div>    
                        <div class="col">
                            <div class="form-group">
                                <label class="text-muted" for="gender_u">Gender</label> <br>
                                <select class="custom-select custom-select-lg py-2" id="gender_u" required>
                                    <option selected>Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>   
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="text-muted" for="address_u">Address</label>
                        <input class="form-control" id="address_u" name="address_u" type="text"> 
                    </div>
                    <div class="form-group">
                        <label class="text-muted" for="contact_no_u">Contact No.</label>
                        <input class="form-control" id="contact_no_u" name="contact_no_u" type="text"> 
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="text-muted" for="marital_status_u">Marital Status</label> <br>
                            <select class="custom-select custom-select-lg mb-5" id="marital_status_u">
                                <option selected>Select</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Divorced">Divorced</option>
                            </select>
                        </div>  
                        <div class="form-group col">
                            <label class="text-muted" for="voter_status_u">Voter Status</label> <br>
                            <select class="custom-select custom-select-lg mb-5" id="voter_status_u">
                                <option selected>Select</option>
                                <option value="Registered">Registered</option>
                                <option value="Not Registered">Not Registered</option>
                            </select>
                        </div> 
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary updateBtn">Save Changes</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal View Form -->
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title align-middle" id="viewModalLabel">View Resident Data</h4>
            </div>
            	
            <div class="modal-body">
                <form id="viewForm" name="viewForm" method="POST">
                    <div class="row">
                        <!-- Account Information -->
                        <div class="col-4 px-5 account">
                            <div id="profile-img">
                                <img id="profileImg" class="profileImg" src="" alt="No Profile Image yet"></img>
                            </div>
                            
                            <div class="form-group">
                                <label class="text-muted" for="username_v">Username</label>
                                <input class="form-control" id="username_v" name="username_v" type="text" readonly> 
                            </div>
                            <div class="form-group">
                                <label class="text-muted" for="email_v">Email</label>
                                <input class="form-control" id="email_v" name="email_v" type="text" readonly> 
                            </div>
                            <div class="form-group">
                                <label class="text-muted" for="user_type_v">User Type</label>
                                <input class="form-control" id="user_type_v" name="user_type_v" type="text" readonly> 
                            </div>

                        </div>
                        <!-- Resident Information -->
                        <div class="col-8 px-5">
                            <div class="form-row resident-info-view">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="text-muted" for="first_name_v">First Name</label>
                                        <input class="form-control" id="first_name_v" name="first_name_v" type="text" readonly> 
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="text-muted" for="middle_name_v">Middle Name</label>
                                        <input class="form-control" id="middle_name_v" name="middle_name_v" type="text" readonly> 
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="text-muted" for="last_name_v">Last Name</label>
                                        <input class="form-control" id="last_name_v" name="last_name_v" type="text" readonly> 
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-4">
                                    <label class="text-muted" for="birth_date_v">Birth Date</label>
                                    <div class="input-group date">
                                        <input id="birth_date_v" name="birth_date_v" onchange="UpdateAge()" type="text" class="form-control date-input" readonly/>
                                        <div class="input-group-addon" >
                                            <span class="fa fa-calendar"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="text-muted" for="age_v">Age</label>
                                        <input class="form-control" id="age_v" name="age_v" type="text" readonly> 
                                    </div>
                                </div>    
                                <div class="col">
                                    <div class="form-group">
                                        <label class="text-muted" for="gender_v">Gender</label>
                                        <input class="form-control" id="gender_v" name="gender_v" type="text" readonly> 
                                    </div>   
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="text-muted" for="address_v">Address</label>
                                <input class="form-control" id="address_v" name="address_v" type="text" readonly> 
                            </div>
                            <div class="form-group">
                                <label class="text-muted" for="contact_no_v">Contact No.</label>
                                <input class="form-control" id="contact_no_v" name="contact_no_v" type="text" readonly> 
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="text-muted" for="marital_status_v">Marital Status</label>
                                    <input class="form-control" id="marital_status_v" name="marital_status_v" type="text" readonly>
                                </div>  
                                <div class="form-group col">
                                    <label class="text-muted" for="voter_status_v">Voter Status</label>
                                    <input class="form-control" id="voter_status_v" name="voter_status_v" type="text" readonly>
                                </div> 
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

<!-- Modal Update Account Form -->
    <div class="modal fade" id="updateAccountModal" tabindex="-1" aria-labelledby="updateAccountModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title align-middle" id="updateAccountModalLabel">Update Resident Account Data</h4>
            </div>
            <div class="modal-body">
                <form id="updateAccountForm" name="updateAccountForm" method="POST">
                    <div class="row">
                        <div class="col-4 px-5">
                            <div id="profile-img">
                                <img id="profileImg_u" class="profileImg" src="" alt="No Profile Image yet"></img>
                            </div>
                        </div>
                        <div class="col-8 px-5">
                            <div class="form-group">
                                <label class="text-muted" for="username_u">Username</label>
                                <input class="form-control" id="username_u" name="username_u" type="text"> 
                            </div>
                            <div class="form-group">
                                <label class="text-muted" for="email_u">Email</label>
                                <input class="form-control" id="email_u" name="email_u" type="text" readonly> 
                            </div>
                            <div class="form-group">
                                <label class="text-muted" for="password_u">Password</label>
                                <input class="form-control" id="password_u" name="password_u" type="password"> 
                            </div>
                            <div class="form-group">
                                <label class="text-muted" for="user_type_u">User Type</label><br>
                                <select class="custom-select custom-select-lg mb-5" id="user_type_u" name="user_type_u">
                                    <option selected>Select</option>
                                    <option value="null">null</option>
                                    <option value="user">user</option>
                                    <option value="admin">admin</option>
                                </select> 
                            </div>
                        </div>
                    </div>
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="accountBtn" class="btn btn-primary">Save Changes</button>
            </div>
            </div>
        </div>
    </div>
    



    <?php include '../LandingPage/ToTop.php';?>
</body>
</html>

<!-- CRUD Script -->
<script src="..\Database\ResidentsCRUD\resident_ajax.js"></script>