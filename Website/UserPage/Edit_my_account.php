<head>
     <!-- CSS -->
   <link rel="stylesheet" href="my_account.css"> 
    <!--Bootstrap 5 Link for Card-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!--Font Awesome Link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    <!--Ajax Links-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
        
    <!--Bundle js of Bootstrap Link (Need this for Modal)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>


<body>
    <div class="wrapper">
        <!-- Insert sideNav -->
        <div id="sideNav"><?php include 'SideNav_User.php';?></div>
        <div class="main_content">

    <!-- Top Nav -->
            <div class="sticky">
                <div class="navbar navbar-light bg-white">
                    <div class="search navbar-left"><h4>General Account Settings</h4></div>
                    <div class="search navbar-right">
                        <i class="fa fa-search"></i>
                        <input class="searchInp" type="text" placeholder="Search Post">
                        <input name="search" class="searchBtn" type="submit" value="Search">
                    </div>
                </div>  
            </div> 
    <!-- /Top Nav -->
            
            

    <!-- Body -->
        <div class="container-fluid gedf-wrapper">
                
<div class="row">

  <div class="col-lg-15">

    <!-- My Profile -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">My Account</h4>
      </div>
      
      <div class="card-body">
        
        <!-- My Profile (Default) -->
      <div class="mb-2">
        <form class="row g-3 needs-validation"  novalidate>
          <!--Header 1--> 
          <h5 style="color:black;" >Full Name</h5>                      
              <div class="col-md-4">
                  <label for="first_name" class="form-label">First name</label>
                  <input type="text" class="form-control" id="first_name" value=" " required>
                      <div class="invalid-feedback">cannot be empty</div>
              </div>
              <div class="col-md-4">
                  <label for="middle_name" class="form-label">Middle name</label>
                  <input type="text" class="form-control" id="middle_name" value=" ">
              </div>
              <div class="col-md-4">
                  <label for="last_name" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="last_name" value=" "  required>
                      <div class="invalid-feedback">cannot be empty</div> 
              </div>
          <!--/.Header 1--> 

          <!--Header 2-->
          <h5>General Information</h5>

              <div class="col-md-8">
                  <label for="address" class="form-label">Address</label>
                  <input type="text" class="form-control" id="address" value=" " required>
                      <div class="invalid-feedback">Please provide Address.</div>
              </div>
              <div class="col-md-2">
                  <label for="age" class="form-label">Age</label>
                  <input type="text" class="form-control" id="age" value=" " readonly>
              </div>
              <div class="col-md-2">
                  <label for="gender" class="form-label">Gender</label>
                  <select class="form-select" id="gender" required>
                  <option selected disabled value="">Choose...</option>
                  <option>...</option>
                  <option value="female">Female</option>
                  <option value="male">Male</option>
                  </select>
                      <div class="invalid-feedback">Please select a valid gender.</div>
              </div>
              <div class="col-md-3">
                  <label for="bdate" class="form-label">Birthday</label>
                  <input type="text" class="form-control" id="bdate" value=" " required>
                    <div class="invalid-feedback">Please input contact number.</div>
              </div>
              <div class="col-md-3">
                  <label for="contact_no" class="form-label">Contact No.</label>
                  <input type="text" class="form-control" id="contact_no" value=" " required>
                    <div class="invalid-feedback">Please input contact number.</div>
                </div>
              <div class="col-md-3">
                  <label for="marital_status" class="form-label">Marital Status</label>
                  <select class="form-select" id="marital_status" required>
                  <option selected disabled value="">Choose...</option>
                  <option>...</option>
                  <option value="single" >Single</option>
                  <option value="married">Married</option>
                  <option value="widowed">Widowed</option>
                  <option value="divorce">Divorce</option>
                  <option value="seperated">Seperated</option>
                  </select>
                      <div class="invalid-feedback">Please select a valid marital status.</div>
              </div>
              <div class="col-md-3">
                  <label for="voter_status" class="form-label">Voter Status</label>
                  <select class="form-select" id="voter_status" required>
                  <option selected disabled value="">Choose...</option>
                  <option>...</option>
                  <option value="active">Active</option>
                  <option value="inactive">Inactive</option>
                  </select>
                      <div class="invalid-feedback">Please select a valid voter status.</div>
              </div>

              <div class="row"></div>
              <div class="col-12">
                <a  href=" "><button class="btn btn-primary" type="submit">Submit changes</button></a>
              </div>
          </form>

        <!-- Circle Buttons (Large) -->
        <div class="mt-4 mb-2"></div>
      </div>

  </div>
  <!--End My Profile-->

  <div class="col-lg-6"></div>
  </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>


<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
'use strict'

// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.querySelectorAll('.needs-validation')

// Loop over them and prevent submission
Array.prototype.slice.call(forms)
.forEach(function (form) {
form.addEventListener('submit', function (event) {
if (!form.checkValidity()) {
event.preventDefault()
event.stopPropagation()
}

form.classList.add('was-validated')
}, false)
})
})()
</script>



        </div>

    




<?php include '../LandingPage/ToTop.php';?>
</body>




<!-- CRUD Script -->
<script src="..\Database\PostCRUD\post_user_ajax.js"></script>
<script src="..\Database\CovidReportCRUD\report_ajax.js"></script>

