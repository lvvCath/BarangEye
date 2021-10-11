<?php include('../Database/db.php'); ?>
<?php include('fetch_Report_Notification.php'); ?>
<head>
        <link rel="stylesheet" href="css/report_user.css">  
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> 
</head>
<body>
    <div class="wrapper">
        <!-- Insert sideNav -->
        <div id="sideNav"><?php include 'SideNav_User.php';?></div>
        <div class="main_content">

    <!-- Top Nav -->
            <div class="sticky">
                <div class="navbar navbar-light bg-white">
                    <div class="search navbar-left"><h4>REPORT STATUS</h4></div>
                    <div class="search navbar-right">
                          <div class="container-fluid gedf-wrapper">
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="btn btn-outline-secondary" style="font-weight: bold; 
                        border-radius: 50px 50px 50px;" href = "Report_Status.php">
                            <i class="fas fa-bell fa-lg"><?php echo $report ?></i>
                        </a>
                    </div>
                    </div>
                </div>  
            </div> 
    <!-- /Top Nav -->
            
    <!-- Body -->
        <div class="container-fluid gedf-wrapper">
            <div class="container-fluid gedf-wrapper">
    <!-- View Account Information -->        
        <div class="row">
                <div class="col">   
                    <!-- My Profile -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <h4 class="m-2 font-weight-bold text-danger">Report History</h4>
                        </div>
                        <!-- My Profile (Default) -->
                         <div class="mb-2" >
                                <form id="createForm" name="createForm" method="POST">
                                      <div class="col-12 px-5">
                                        <div class="form-group row">
                                            <div class="col-md-2"></div>
                                            <br>
                                            <label for="no_of_year" class="col-sm-2 col-form-label">Number of Report :</label>
                                            <div class="col-sm-6">
                                        <input type="text" class="form-control" id = "num_report" name="num_report"  readonly value="<?php echo $report ?>">
                                            </div>
                                        </div>     
                                </form>
                        </div>

            </div>
    </div>

<!--End of calling Out the Modal Form-->
 </div>

<?php include '../LandingPage/ToTop.php';?>
</body>

<!-- CRUD Script -->
<script src="..\Database\PostCRUD\post_user_ajax.js"></script>
<script src="..\Database\CovidReportCRUD\report_ajax.js"></script>

<script type="text/javascript">

  function terms() {
      swal.fire({  title: 'Agree to the terms and condition',
                    html: '<p>By accessing this website we assume you accept these terms and conditions. Do not continue to use ma-aobago city if you do not agree to take all of the terms and conditions stated on this page.',         
                  })
    }
    
   function submit(){
        swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Your work has been saved',
        showConfirmButton: false,
        timer: 1500
        })
    }

   

</script>


