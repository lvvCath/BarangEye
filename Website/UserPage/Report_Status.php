<?php include('../Database/db.php'); ?>
<?php include('fetch_Report_Notification.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
     <!-- CSS -->
   <link rel="stylesheet" href="css/report_user.css">  
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
                    <div class="search navbar-left"><h4>Report Data</h4></div>
                    <div class="search navbar-right">
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
                        <h4 class="m-2 font-weight-bold text-danger">Report are Reported !</h4>
                        </div>
                        <!-- My Profile (Default) -->
                         <div class="mb-2" >
                                <form id="createForm" name="createForm" method="POST">
                                      <div class="col-12 px-5">
                                        <div class="form-group row">
                                            <div class="col-md-2"></div>
                                            <label for="no_of_year" class="col-sm-2 col-form-label">Status :</label>
                                            <div class="col-sm-6">
                                        <input type="text" class="form-control" id = "status" name="status" value="<?php echo $row['status']?>"readonly>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-md-2"></div>
                                            <label for="category" class="col-sm-2 col-form-label">Complainant :</label>
                                            <div class="col-sm-6">
                                        <input type="text" class="form-control" id = "complainant" name="complainant" value="<?php echo $row['complainant']?>"readonly>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-md-2"></div>
                                            <label for="message" class="col-sm-2 col-form-label">Complain :</label> 
                                            <div class="col-sm-6">
                                                <textarea class="form-control" type="text" id="complain" name = "complain"rows="7" cols="50" readonly><?php echo $row['complain']?></textarea>
                                            </div>
                                        </div>    
                                        <div class="form-group row">
                                            <div class="col-md-2"></div>
                                            <label for="message" class="col-sm-2 col-form-label">Date / Time:</label> 
                                            <div class="col-sm-6">
                                               <input type="text" class="form-control" id = "complainant" name="complainant" value="<?php echo $row['date_time']?>"readonly>
                                            </div>
                                            </div>
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


