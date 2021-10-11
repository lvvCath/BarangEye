<head>
    <!-- CSS -->
    <link rel="stylesheet" href="css/dashboard_Admin.css">
</head>


<body>
    <div class="wrapper">
        <!-- Insert sideNav -->
        <div id="sideNav"><?php include 'SideNav_Admin.php';?></div>
        <div class="main_content">

    <!-- Top Nav -->
            <div class="sticky">
                <div class="navbar navbar-light bg-white">
                    <div class="search navbar-left"><h4>Latest News</h4></div>
                    <div class="search navbar-right">
                        <i class="fa fa-search"></i>
                        <input class="searchInp" id="search" type="text" placeholder="Search Post">
                        <input name="search" class="searchBtn" type="submit" value="Search">
                        <button class="postBtn btn-primary" data-toggle="modal" data-target="#createModal">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>  
            </div> 
    <!-- /Top Nav -->
            
            

    <!-- Body -->
            <div class="container-fluid gedf-wrapper">
                <div class="row">
                    <!-- Column 1 POSTS -->
                    <div id="post_column" class=" col-md-7 gedf-main mx-5 my-4" >
                        <table id="postTable" style="width:100%" cellpadding="0" cellspacing="0" BORDER="0">
                            <thead></thead>
                        </table>
                    </div> <!-- /Column 1 -->

                    <!-- Column 2 COVID REPORT-->
                    <div class="col-md-4 my-5 notice-card">
                        <div class="card gedf-card">
                            <div class="card-body status-card">
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                    <div id="config-report" class="dropdown-menu" aria-labelledby="gedf-drop2">
                                        
                                    </div>
                                </div>
                                
                                <h3 class="card-title text-center"><strong>Community<br>Quarantine Status</strong></h3>                            
                                <div id="community_qurantine" class="row mx-5 my-4 justify-content-center rounded-pill card-report status-report">
                                    <!-- Get QUARANTINE_STATUS data -->
                                </div>
                                <h5 class="card-subtitle mb-2 text-center">Stay Safe and follow Health Protocols</h5>
                                <div id="report-date" class="d-inline d-flex justify-content-center">
                                    <!-- Get START_DATE & END_DATE data -->
                                </div>
                                
                            </div>
                        </div>

                        <div class="card gedf-card">
                                <div class="card-body">
                                    <h3 class="card-title text-center"><strong>Covid-19 Report</strong></h3>
                                    <h6 class="card-subtitle mb-2 text-muted text-center">Since August 22 2020</h6>
                                    <br>
                                    <div class="row mx-5 my-3 card-report active-report">
                                        Active Cases
                                        <div id="active-cases"></div>
                                    </div>
                                    <div class="row mx-5 my-3">
                                        <div class="col-md-6 mr-4 card-report recover-report">
                                            Recovered
                                            <div id="recovered-cases"></div>
                                        </div>
                                        <div class="col-md-5 ml-2 card-report deceased-report">
                                            Deceased
                                            <div id="deceased-cases"></div>
                                        </div>
                                    </div>
                                    <div class="row mx-5 my-3 card-report total-report">
                                        Total Cases
                                        <div id="total-cases"></div>
                                    </div>
                                    
                                </div>
                            </div>
                    </div> <!-- /Column 2 -->
                    
                </div> <!-- /Row End-->
            </div> <!-- /Body End-->

        </div> <!-- /main_content  -->
    </div> <!-- /wrapper  -->




    <!-- Create Post Modal -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel"><strong>Create New Post</strong></h3>
                </div>
                <div class="modal-body">
                    <form id="createForm" name="createForm"  action="POST">
                        <div class="form-group">
                            <label class="text-muted" for="category">Category</label>
                            <input class="form-control" id="category" name="category" type="text"> 
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="subject">Post Subject</label>
                            <input class="form-control" id="subject" name="subject" type="text"> 
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="content">Post Content</label>
                            <textarea class="form-control" id="content" name="content" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="post_img">Post Image Link</label>
                            <input class="form-control" id="post_img" name="post_img" type="text"> 
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="createBtn" class="btn btn-primary">Post</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Update Post Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel"><strong>Edit Post</strong></h3>
                </div>
                <div class="modal-body">
                    <form id="editForm" name="editForm"  action="POST">
                        <div class="form-group">
                            <label class="text-muted" for="category_u">Category</label>
                            <input class="form-control" id="category_u" name="category_u" type="text"> 
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="subject_u">Post Subject</label>
                            <input class="form-control" id="subject_u" name="subject_u" type="text"> 
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="content_u">Post Content</label>
                            <textarea class="form-control" id="content_u" name="content_u" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="post_img_u">Post Image Link</label>
                            <input class="form-control" id="post_img_u" name="post_img_u" type="text"> 
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="editBtn btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>





    <!-- Create Report Modal -->
    <div class="modal fade" id="createReportModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel"><strong>Create Report</strong></h3>
                </div>
                <div class="modal-body">
                    <form id="createReportForm" name="createReportForm" action="POST">
                        <div class="form-group px-5">
                            <label class="text-muted" for="quarantine_status">Quarantine Status</label>
                            <input class="form-control" id="quarantine_status" name="quarantine_status" type="text"> 
                        </div>
                        <div class="form-row d-flex align-items-center justify-content-center">
                            <div class="col-5 mx-4">
                                <label class="text-muted" for="start_date">Start Date</label>
                                <div class="input-group date">
                                    <input id="start_date" name="start_date" type="text" class="form-control date-input calendar" readonly/>
                                    <div class="input-group-addon" >
                                        <span class="fa fa-calendar"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5 mx-4">
                                <label class="text-muted" for="end_date">End Date</label>
                                <div class="input-group date">
                                    <input id="end_date" name="end_date" type="text" class="form-control date-input calendar" readonly='readonly'/>
                                    <div class="input-group-addon" >
                                        <span class="fa fa-calendar"></span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Calendar -->
                            <script type="text/javascript">
                                $(function () {
                                    $(".calendar").datepicker({
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
                        <hr>
                        <div class="d-flex justify-content-center"><h3>Covid-19 Cases</h3></div> <br>
                        
                        <div class="form-row align-items-center d-flex justify-content-center">
                            <div class="form-group col mx-5">
                                <label class="text-muted" for="active_case">Active Cases</label>
                                <input class="form-control" id="active_case" name="active_case" type="number"> 
                            </div>
                            <div class="form-group col mx-5">
                                <label class="text-muted" for="recovered_case">Recovered Cases</label>
                                <input class="form-control" id="recovered_case" name="recovered_case" type="number"> 
                            </div>
                        </div>
                        <div class="form-row align-items-center d-flex justify-content-center">
                            <div class="form-group col mx-5">
                                <label class="text-muted" for="deceased_case">Deceased Cases</label>
                                <input class="form-control" id="deceased_case" name="deceased_case" type="number"> 
                            </div>
                            <div class="form-group col mx-5">
                                <label class="text-muted" for="total_case">Total Cases</label>
                                <input class="form-control" id="total_case" name="total_case" type="number"> 
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="createReportBtn" class="btn btn-primary">Add Report</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Update Report Modal -->
    <div class="modal fade" id="updateReportModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel"><strong>Update Latest Report</strong></h3>
                </div>
                <div class="modal-body">
                    <form id="updateReportForm" name="updateReportForm" action="POST">
                        <p id="report_id_u" hidden></p>
                        <div class="form-group px-5">
                            <label class="text-muted" for="quarantine_status_u">Quarantine Status</label>
                            <input class="form-control" id="quarantine_status_u" name="quarantine_status_u" type="text"> 
                        </div>
                        <div class="form-row d-flex align-items-center justify-content-center">
                            <div class="col-5 mx-4">
                                <label class="text-muted" for="start_date_u">Start Date</label>
                                <div class="input-group date">
                                    <input id="start_date_u" name="start_date_u" type="text" class="form-control date-input calendar" readonly/>
                                    <div class="input-group-addon" >
                                        <span class="fa fa-calendar"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5 mx-4">
                                <label class="text-muted" for="end_date_u">End Date</label>
                                <div class="input-group date">
                                    <input id="end_date_u" name="end_date_u" type="text" class="form-control date-input calendar" readonly='readonly'/>
                                    <div class="input-group-addon" >
                                        <span class="fa fa-calendar"></span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Calendar -->
                            <script type="text/javascript">
                                $(function () {
                                    $(".calendar").datepicker({
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
                        <hr>
                        <div class="d-flex justify-content-center"><h3>Covid-19 Cases</h3></div> <br>
                        
                        <div class="form-row align-items-center d-flex justify-content-center">
                            <div class="form-group col mx-5">
                                <label class="text-muted" for="active_case_u">Active Cases</label>
                                <input class="form-control" id="active_case_u" name="active_case_u" type="number"> 
                            </div>
                            <div class="form-group col mx-5">
                                <label class="text-muted" for="recovered_case_u">Recovered Cases</label>
                                <input class="form-control" id="recovered_case_u" name="recovered_case_u" type="number"> 
                            </div>
                        </div>
                        <div class="form-row align-items-center d-flex justify-content-center">
                            <div class="form-group col mx-5">
                                <label class="text-muted" for="deceased_case_u">Deceased Cases</label>
                                <input class="form-control" id="deceased_case_u" name="deceased_case_u" type="number"> 
                            </div>
                            <div class="form-group col mx-5">
                                <label class="text-muted" for="total_case_u">Total Cases</label>
                                <input class="form-control" id="total_case_u" name="total_case_u" type="number"> 
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="updateReportBtn" class="btn btn-primary">Update Report</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Delete & View All Post Modal -->
    <div class="modal fade" id="deleteReportModal" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-content" style="width: 85%; margin:auto; top: 20px;">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel"><strong>COVID Community Report</strong></h3>
            </div>
            <div class="modal-body">
                <div class="panel-body table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Status</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Active</th>
                                <th>Recovered</th>
                                <th>Deceased</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="report_result">
                            <!-- Resident Data -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>




<?php include '../LandingPage/ToTop.php';?>
</body>




<!-- CRUD Script -->
<script src="..\Database\PostCRUD\DATATABLE\post_ajax.js"></script>
<script src="..\Database\CovidReportCRUD\report_ajax.js"></script>
