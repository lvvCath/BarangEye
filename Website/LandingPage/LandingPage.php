<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="css/landingPage.css">
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>  
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Barangay Ma-ao</title>
  </head>

  <body data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="1"  class="scrollspy-example" tabindex="0">
    <nav id="navbar-example2" class="navbar sticky-top navbar-light bg-light px-3">
        <a class="navbar-brand" href="#">
            <img src="..\image\brgyLogo.png" alt="Brgy Icon" class="brgyLogo">
            Barangay Ma-ao
        </a>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#history">History</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#location">Location</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact-us">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link sign-in" href="LogInSignUp.php">Sign in</a>
            </li>
            
        </ul>
    </nav>


<!-- HOME -->
    <div id="home" class="container-fluid section">
        <div id="carousel-example-generic" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-bs-target="#carousel-example-generic" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carousel-example-generic" data-bs-slide-to="1"></li>
                <li data-bs-target="#carousel-example-generic" data-bs-slide-to="2"></li>
                <li data-bs-target="#carousel-example-generic" data-bs-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Bago_city_coliseum.JPG/1200px-Bago_city_coliseum.JPG" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h1><strong>Welcome to Barrio MA-AO</strong></h1>
                        <p>The Barangay implements a liberalized, and business and investor-friendly economy 
                            nd is ready to accommodate investments in manufacturing, eco-tourism, 
                            property development, and power generation projects.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/f/f2/The_Ruins_in_Talisay%2C_Negros_Occidental_at_Dusk.jpg" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h1><strong>EVENTS</strong></h1>
                        <p> takes pride of its colorful historical and religious festivals that makes one’s visit a worthwhile and fun experience.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/4/4f/Kipot.jpg" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h1><strong>TOURISM</strong></h1>
                        <p>Barrio MA-AO has both mountainous and coastal expanses the beauty of which can overwhelm an observer.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://twomonkeystravelgroup.com/wp-content/uploads/2019/11/15-Places-to-visit-in-Batangas-Batangas-Tourist-Spot13.jpg" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h1><strong>TOURISM</strong> </h1>
                        <p>Barrio MA-AO has both mountainous and coastal expanses the beauty of which can overwhelm an observer.</p>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-example-generic" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel-example-generic" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div> 
<!-- /HOME -->

<!-- ABOUT -->
    <div id="about" class="container-fluid about section">
    <!-- Demography -->
        <div class="title-container">
            <h2 class="title"><strong>Barangay Ma-ao Demography</strong></h2>
        </div>
        <div class="row demography">
            <!-- Population -->
            <div class="col-6 d-flex justify-content-center">
                <div class="card">
                    <!-- Pop Content -->
                    <div class="additional">
                        <!-- left col -->
                        <div class="user-card">
                            <img src="https://cdn-icons-png.flaticon.com/512/1170/1170591.png" alt="population img">
                        </div>
                        <!-- slide col -->
                        <div class="more-info">
                            <h1>Population</h1>
                            <div class="row stats justify-content-center">
                                <div class="col-5">
                                    <i class="fa fa-male">&nbsp 3,095</i>
                                    <p>Male</p>
                                </div>
                                <div class="col-5">
                                    <i class="fa fa-female">&nbsp 2,798</i>
                                    <p>Female</p>
                                </div>
                            </div>
                            <div class="row stats justify-content-center">
                                <div class="col-5">
                                    <i class="fa fa-blind">&nbsp 597</i>
                                    <p>Senior</p>
                                </div>
                                <div class="col-5">
                                    <i class="fa fa-flag">&nbsp 4,829</i>
                                    <p>Voter</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- visible Content -->
                    <div class="general people">
                        <h1>Population</h1>
                        <h1>5,893</h1>
                        <hr style="height:5px; width:96%; margin-top:1.4rem; background-color: #00bfb2;background-image: linear-gradient(315deg, #00bfb2 0%, #028090 74%);">
                        <p style="font-size:0.9rem;">Population 2021 (Projected)</p>
                        <span class="more"><i class="fa fa-angle-double-right"></i></span>
                    </div>
                </div>
            </div>
            <!-- Land Area -->
            <div class="col-6 d-flex justify-content-center">
                <div class="card">
                    <!-- Pop Content -->
                    <div class="additional landarea">
                        <!-- left col -->
                        <div class="user-card">
                            <img src="https://cdn-icons-png.flaticon.com/512/717/717498.png" alt="population img">
                        </div>
                        <!-- slide col -->
                        <div class="more-info">
                            <h1>Land Area</h1>
                            <div class="row stats justify-content-center">
                                <div class="col-5">
                                    <i class="fa fa-map">&nbsp 44</i>
                                    <p>Purok</p>
                                </div>
                                <div class="col-5">
                                    <i class="fa fa-home">&nbsp 4,147</i>
                                    <p>Household</p>
                                </div>
                            </div>
                            <div class="row stats">
                                <i class="fa fa-map-marker">&nbsp 21.70 Kms</i>
                                <p>Distance from the City</p>
                            </div>
                        </div>
                    </div>
                    <!-- visible Content -->
                    <div class="general land">
                        <h1>Land Area</h1> <br>
                        <h1>3,938.3330</h1>
                        <span class="more"><i class="fa fa-angle-double-right"></i></span>
                    </div>
                </div>
            </div>
        </div> <!-- /row -->
        

    <!-- Barangay Officials -->
        <div class="title-container">
            <h2 class="title"><strong>Barangay Ma-ao Officials</strong></h2>
        </div>
        <div class="row brgy-officials">
            <div class="col-3 col1">
                <!-- Punong Barangay -->
                <div class="single-team">
                    <div class="team-img">
                    <img src="http://bagocity.gov.ph/wp-content/uploads/2018/09/ma-ao-cap.jpg" alt="" class="card-img-top">
                    </div>
                    <div class="team-content capt-content">
                        <div class="team-info">
                            <h3>Jovito M. Gahaton</h3>
                            <p>Punong Barangay</p>
                        </div>
                        <p class="social">
                            <a href=""><i class="fa fa-facebook-square"></i></a>
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-envelope-o"></i></a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- Barangay Kagawad -->
            <div class="col-3 col2">
                <h4><strong>Barangay Kagawad</strong></h4> 
                    <p> Neil O. Barrientos      <br>
                        Jose Pio G. Araneta     <br>
                        Araceli G. Pellejo      <br>
                        Joemarie A. Deocampo    <br>
                        Jocelyn T. Cachumbo     <br>
                        Marites B. Espeleta     <br>
                        Raymundo C. Gerona, Sr. 
                    </p>
                <h4><strong>Barangay Secretary</strong></h4>
                    <p>Mary Grace M. Gonzaga</p>
                <h4><strong>Barangay Treasurer</strong></h4>
                    <p>Ofelia A. Turco</p>
            </div>

            <!-- Barangay Sk -->
            <div class="col-3 col3">
                <!-- Card Brgy Sk Chairperson-->
                <div class="single-team">
                    <div class="team-img">
                    <img src="http://bagocity.gov.ph/wp-content/uploads/2018/09/ma-ao-sk.jpg" alt="" class="card-img-top">
                    </div>
                    <div class="team-content capt-content">
                        <div class="team-info">
                            <h3>Jesus V. Oreta</h3>
                            <p>SK Chairperson</p>
                        </div>
                        <p class="social">
                            <a href=""><i class="fa fa-facebook-square"></i></a>
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-envelope-o"></i></a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- SK Kagawad -->
            <div class="col-3 col4">
                <h4><strong>SK Kagawad</strong></h4> 
                    <p> Paul Martin C. Espeleta     <br>
                        Jhoebelle D. Alicante       <br>
                        Jan Michael P. Jordan       <br>
                        Stephanie J. Alagos         <br>
                        Edraine Lattrell G. Latido  <br>
                        Jess Mark M. Montero        <br>
                        Jeanicka V. Lacson          <br>
                    </p>
                <h4><strong>SK Secretary</strong></h4>
                    <p>Desira Blanca</p>
                <h4><strong>SK Treasurer</strong></h4>
                    <p>Solaria L. Sancho</p>
            </div>

        </div> <!-- /Row -->
    </div>
<!-- /ABOUT -->



<!-- HISTORY -->
    <div id="history" class="container-fluid history section">
        <div class="row">
            <div class="col-6 col1">
                <img class="history-img" src="http://bagocity.gov.ph/wp-content/uploads/2018/05/about-brgy-maao.jpg" alt="">
            </div>
            <div class="col-6 col2"> <br> <br>
                <h1><strong>History of MA-AO</strong></h1> 
                <hr style="height:5px; background-color: #045de9;background-image: linear-gradient(315deg, #045de9 0%, #09c6f9 74%);">
                <br> 
                <p>Little was known about the origins of Barangay Ma-ao. 
                Old folks and natives explained the story of a Spaniard 
                who reached the area and asked a woman, obviously the mother 
                of a crying child, what the name of the place was. 
                The child crying, shouted “mahaw, mahaw” (“I want breakfast”). 
                The Spaniard thought the place was “Mahaw” (later Ma-ao).
                </p> <br>
                <p>
                Still another tale said that, people from the mountain coming 
                down usually ate their breakfast at this particular point, 
                thus the word “mahao” meant the point where they got hungry and ate breakfast.</p>
            </div>    
        </div>
    </div>
<!-- /HISTORY -->

<!-- LOCATION -->
    <div id="location" class="container-fluid location section">
        <div class="head">
            <h3 class="title">FIND BARANGAY MA-AO AT</h3>
        </div>
        <!--Google map-->
        <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3218.204675776445!2d122.98944150572528!3d10.489253565619126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aeca029302a795%3A0x7852af3c370cea0c!2sBarangay%20Hall!5e1!3m2!1sen!2sph!4v1633097962843!5m2!1sen!2sph" style="position: relative; height: 100%; width: 100%;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
<!-- /LOCATION -->

<!-- CONTACT US -->
    <div id="contact-us" class="container-fluid contact-us section">
        <div class="form contact-us-form">
            <div class="contact-info">
                <h3 class="title">PEOPLE’S CORNER</h3>
                <p class="text">BE HEARD! BE INVOLVED! </p>
                <div class="info"><br>
                    <div class="social-information"> <i class="fa fa-map-marker"></i>
                        <p>Ma-ao Barrio, Bago City Negros Occidental</p>
                    </div>
                    <div class="social-information"> <i class="fa fa-envelope"></i>
                        <p>cio@bagocity.gov.ph</p>
                    </div>
                    <div class="social-information"> <i class="fa fa-phone"></i>
                        <p>+(034) 454-1308 </p>
                    </div>
                </div>
                <div class="social-media"><br>
                    <p>Connect with us :</p>
                    <div class="social-icons"> 
                        <a href="#"><i class="fa fa-facebook"></i></a> 
                        <a href="#"><i class="fa fa-twitter"></i></a> 
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="contact-info-form"> <span class="circle one"></span> <span class="circle two"></span>
                <form action="#" onclick="return false;" autocomplete="off">
                    <h3 class="title">Contact us</h3>
                    <div class="social-input-containers"> 
                        <input type="text" name="name" class="input" placeholder="Name" /> 
                    </div>
                    <div class="social-input-containers"> 
                        <input type="email" name="email" class="input" placeholder="Email" /> 
                    </div>
                    <div class="social-input-containers"> 
                        <input type="tel" name="phone" class="input" placeholder="Phone" /> 
                    </div>
                    <div class="social-input-containers textarea"> 
                        <textarea name="message" class="input" placeholder="Message"></textarea> 
                    </div> 
                    <input type="submit" value="Send" class="btn" />
                </form>
            </div>
        </div>
    </div> 
<!-- /CONTACT US -->


<!-- FOOTER -->
    <footer class="text-center text-lg-start text-white">
        <div class="container p-4 py-5">
            <!-- Section: Links -->
            <section class="">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <img src="http://bagocity.gov.ph/wp-content/uploads/2021/06/cio2021-logo.png" alt="">
                        <p> <br>
                        A. Gonzaga St., Brgy. Poblacion, <br>
                        Bago City Negros Occidental, <br>
                        Philippines, 6101 <br>
                        Tel: (034) 454-1308
                        </p>
                    </div>
                    <hr class="w-100 clearfix d-md-none" />
                    <div class="col-4 mx-auto mt-4">
                        <h4 class="text-uppercase mb-4 font-weight-bold">Links</h4>
                        <p><a class="text-white" href="#">OFFICIAL GAZETTE</a></p>
                        <p><a class="text-white" href="#">OFFICE OF THE PRESIDENT</a></p>
                        <p><a class="text-white" href="#">OFFICE OF THE VICE PRESIDENT</a></p>
                        <p><a class="text-white" href="#">DILG</a></p>
                        <p><a class="text-white" href="#">DEPARTMENT OF TOURISM</a></p>
                        <p><a class="text-white" href="#">CIVIL SERVICE COMMISSION</a></p>
                        <p><a class="text-white" href="#">PHILIPPINE INFORMATION AGENCY</a></p>
                        <p><a class="text-white" href="#">PROVINCIAL GOVERNMENT OF NEG. OCC.</a></p>
                    </div>
                    <hr class="w-100 clearfix d-md-none" />
                    <div class="col-3 mx-auto mt-3">
                        <h4 class="text-uppercase mb-4 font-weight-bold">Terms of Use</h4>
                        <p><a class="text-white">Disclaimer</a></p>
                        <p><a class="text-white">Privacy Policy</a></p>
                    </div>
                    <hr class="w-100 clearfix d-md-none" />
                    <div class="col-2 mx-auto mt-3">
                        <h4 class="text-uppercase mb-4 font-weight-bold">Visitors</h4>
                        <p><i class="fa fa-user mr-3"></i> &nbsp 608911</p>
                    </div>
                </div>
            </section> <!-- /Section: Links -->
            
            <hr class="my-3">
            <!-- Section: Developer -->
            <section class="p-3 pt-0">
                <div class="text-center text-md-end">
                    <div class="p-3">
                        <i class="fa fa-users mr-3"></i>
                        Powered By:
                        <a class="text-white" href="#">CODE Z</a>
                    </div>
                </div>
            </section> <!-- /Section: Developer -->
        
        </div>
    </footer> 
<!-- /FOOTER -->
    </body>
</html>


<SCRIPT>
    var scrollSpy = new bootstrap.ScrollSpy(document.body, {
        target: '#navbar-example2'
    })
</SCRIPT>

