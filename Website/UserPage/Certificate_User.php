<?php include('../Database/db.php'); ?>
<?php include('fetch_Certificate_Notification.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
     <!-- CSS -->
    <link rel="stylesheet" href="css/certificate_user.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <div class="wrapper">
        <!-- Insert sideNav -->
        <div id="sideNav"><?php include'SideNav_User.php';?></div>
        <div class="main_content">

    <!-- Top Nav -->
            <div class="sticky">
                <div class="navbar navbar-light bg-white">
                    <div class="search navbar-left"><h4>Create Request</h4></div>
                    <div class="search navbar-right">
                        <div class="container-fluid gedf-wrapper">
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="btn btn-outline-secondary" style="font-weight: bold; 
                        border-radius: 50px 50px 50px;" href = "Certificate_Notification.php">
                            <i class="fas fa-bell fa-lg"><?php echo $cert ?></i>
                        </a>
                    </div>
                </div>
                </div>  
            </div> 
    <!-- /Top Nav -->            

    <!-- Body -->
        <div class="container-fluid gedf-wrapper">
    <!-- View Account Information -->        
        <div class="row">
                <div class="col">   
                    <!-- My Profile -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <h4 class="m-2 font-weight-bold text-primary">Certificate Form Request </h4>
                        </div>
                        <!-- My Profile (Default) -->
                         <div class="mb-2" >
                                <form id="createForm" action="create_request.php" method="POST">
                                      <div class="col-12 px-5">
                                        <div class="form-group row">
                                            <div class="col-md-2"></div>
                                            <label for="no_of_year" class="col-sm-2 col-form-label">Years living in Barangay :</label>
                                            <div class="col-sm-6">
                                        <input type="text" class="form-control" id = "no_of_year" name="no_of_year" >
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-md-2"></div>
                                            <label for="category" class="col-sm-2 col-form-label">Category :</label>
                                            <div class="col-sm-6">
                                                <select  id="category" class="custom-select custom-select-lg mb-2" name = "category">
                                                <option selected>Select  Category</option>
                                                <option value="cedula">Cedula</option>
                                                <option value="brgyID">Barangay ID</option>
                                                <option value="brgyClearance">Barangay Clearance / Indigency</option>
                                                <option value="brgyBusinessPermit">Barangay Business Permit</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-md-2"></div>
                                            <label for="message" class="col-sm-2 col-form-label">Message :</label> 
                                            <div class="col-sm-6">
                                                <textarea class="form-control" type="text" id="message" name = "message"rows="7" cols="50"></textarea>
                                            </div>
                                        </div>                                   
                                        <div class="form-group row">
                                              <div class="col-md-5"></div>
                                            <button type="button" class="btn btn-primary"  name = "createBtn" id ="createBtn">Submit Request</button>
                                        </div>   
                                </form>
                        </div>

            </div>
    </div>
    </div> <!-- End of Main Content -->


<?php include '../LandingPage/ToTop.php';?>

</body>
</html>

<script src="..\Database\CertificateCRUD\certificate_ajax.js"></script>


