<?php require('../Database/summary_CRUD.php');?>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
<!-- CSS -->
    <link rel="stylesheet" href="css/summary_Admin.css">
</head>

<body>
    <div class="wrapper">
    <!-- Insert sideNav -->
        <div id="sideNav"><?php include 'SideNav_Admin.php';?></div>
        <div class="main_content">
    <!-- Top Nav -->
            <div class="sticky">
                <div class="navbar navbar-light bg-white">
                    <h4>Barangay Resident Summary</h4>
                </div>  
            </div> 
    <!-- /Top Nav -->
            
    <!-- Body -->
    <div class="container-fluid">

        <div class="row mx-5 my-5">
            <div class="col-md-4">
            <div class="card border-primary mx-sm-1 p-3" id = "card">
                <div class="card border-primary shadow text-primary p-3 my-card" >
                    <span class="fas fa-vote-yea" aria-hidden="true"></span></div>
                <div class="text-primary text-center mt-3"><h4>Registered Voter</h4></div>
                <div class="text-primary text-center mt-2"><h1><?php echo $voter?></h1></div>
            </div>
        </div>
        
        <div class="col-md-4">
        <div class="card border-info mx-sm-1 p-3">
        <div class="card border-info shadow text-info p-3 my-card" >
            <span  class="fas fa-users" aria-hidden="true"></span></div>
                <div class="text-info text-center mt-3"><h4>Total Population</h4></div>
                <div class="text-info text-center mt-2"><h1><?php echo $population?></h1></div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="card border-danger mx-sm-1 p-3">
        <div class="card border-danger shadow text-danger p-3 my-card" >
            <span class="far fa-times-circle" aria-hidden="true"></span></div>
                <div class="text-danger text-center mt-3"><h4>Not Registered Voter</h4></div>
                <div class="text-danger text-center mt-2"><h1><?php echo $Notvoter?></h1></div>
            </div>
        </div>
      
    </div>
    <div class="row mx-5 my-5">
        <div class="col-md-4">
        <div class="card border-success mx-sm-1 p-3">
<div class="card border-success shadow text-success p-3 my-card">
    <span class="fas fa-female" aria-hidden="true"></span></div>
                <div class="text-success text-center mt-3"><h4>Female</h4></div>
                <div class="text-success text-center mt-2"><h1><?php echo $female?></h1></div>
            </div>
        </div>
         <div class="col-md-4">
        <div class="card border-info mx-sm-1 p-3">
        <div class="card border-info shadow text-info p-3 my-card" >
         <span class="fas fa-blind" aria-hidden="true"></span></div>
            <div class="text-info text-center mt-3"><h4>Senior</h4></div>
                <div class="text-info text-center mt-2"><h1><?php echo $senior?></h1></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-warning mx-sm-1 p-3">
                <div class="card border-warning shadow text-warning p-3 my-card" ><span class="fas fa-male" aria-hidden="true"></span></div>
                <div class="text-warning text-center mt-3"><h4>Male</h4></div>
                <div class="text-warning text-center mt-2"><h1><?php echo $male?></h1></div>
            </div>
        </div>
   
 </div>
 </div>
   </div>
    </div>
    
    <!-- /Body End-->
    </div> <!-- /main_content  -->
</div> <!-- /wrapper  -->
    <?php include '../LandingPage/ToTop.php';?>
</body>
</html>

