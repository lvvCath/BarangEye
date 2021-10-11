<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
<!-- CSS -->
    <link rel="stylesheet" href="css/report_Admin.css">
</head>

<body>
    <div class="wrapper">
    <!-- Insert sideNav -->
        <div id="sideNav"><?php include 'SideNav_Admin.php';?></div>
        <div class="main_content">
    <!-- Top Nav -->
            <div class="sticky">
                <div class="navbar navbar-light bg-white">
                    <div class="search navbar-left"><h4>Barangay Reports</h4></div>
                    <div class="search navbar-right">
                        <i class="fa fa-search"></i>
                        <input class="searchInp" id="search" type="text" placeholder="Search Report">
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
                            <h4 class="title">Reports <span>Data</span></h4>
                        </div>
                    </div>
                    <div class="panel-body table-responsive">
                        <table id="reportTable" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Case No.</th>
                                    <th>Complainant</th>
                                    <th>Respondent</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <!-- <tbody id="report_result"> -->
                                <!-- Resident Data -->
                            <!-- </tbody> -->
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
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title align-middle" id="createModalLabel">Add Report Data</h4>
                </div>
                    
                <div class="modal-body">
                    <form id="createForm" name="createForm" method="POST">
                        <div class="form-row">
                            <!-- Column 1 -->
                            <div class="form-group col">
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="text-muted" for="case_no">Case No.</label>
                                            <input class="form-control" id="case_no" name="case_no" type="text"> 
                                        </div>
                                    </div>
                                    <div class="form-group col">
                                        <label class="text-muted" for="status">Status</label> <br>
                                        <select class="custom-select custom-select-lg mb-5" id="status">
                                            <option selected>Select</option>
                                            <option value="On-Going">On-Going</option>
                                            <option value="Solved">Solved</option>
                                        </select>
                                    </div> 
                                </div> 
                                <div class="form-row">
                                    <div class="form-group col">           
                                        <label class="text-muted" for="complainant">Complainant</label>
                                        <input class="form-control" id="complainant" name="complainant" type="text"> 
                                    </div>
                                    <div class="form-group col">
                                        <label class="text-muted" for="respondent">Respondent</label>
                                        <input class="form-control" id="respondent" name="respondent" type="text"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="c_address">Complainant Address</label>
                                    <input class="form-control" id="c_address" name="c_address" type="text"> 
                                </div> 
                                
                                <div class="form-group">
                                    <label class="text-muted" for="r_address">Respondent Address</label>
                                    <input class="form-control" id="r_address" name="r_address" type="text"> 
                                </div>
                            </div>
                            <!-- Column 2 -->
                            <div class="form-group col">
                                <div class="form-group">
                                    <label class="text-muted" for="complain">Complain </label>
                                    <textarea class="form-control" id="complain" name="complain" rows="14"></textarea>
                                </div>  
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="createBtn" class="createBtn btn btn-primary">Add Data</button>
                </div>
            </div>
        </div>
    </div>

<!-- View Modal Form --->
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title align-middle" id="viewModalLabel">View Resident Data</h4>
                </div>
                    
                <div class="modal-body">
                    <form id="viewForm" name="viewForm" method="POST">
                        <div class="form-row">
                            <div class="col">
                                <div class="form-row">
                                    <div class="col">
                                        <label class="text-muted" for="dates_v">Date</label>
                                        <div class="input-group date">
                                            <input id="dates_v" name="dates_v" type="text" class="form-control date-input" readonly/>
                                        </div>
                                    </div>
                                    <div class="form-group col">
                                        <label class="text-muted" for="status_v">Status</label> <br>
                                        <input class="form-control" id="status_v" name="status_v" type="text" readonly/>
                                    </div> 
                                </div> 
                                <div class="form-group">           
                                    <label class="text-muted" for="complainant_v">Complainant</label>
                                    <input class="form-control" id="complainant_v" name="complainant_v" type="text"readonly/> 
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="c_address_v">Complainant Address</label>
                                    <input class="form-control" id="c_address_v" name="c_address_v" type="text"readonly/> 
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="text-muted" for="respondent_v">Respondent</label>
                                    <input class="form-control" id="respondent_v" name="respondent_v" type="text"readonly/> 
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="r_address_v">Respondent Address</label>
                                    <input class="form-control" id="r_address_v" name="r_address_v" type="text"readonly/> 
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="text-muted" for="case_no_v">Case No.</label>
                                    <input class="form-control" id="case_no_v" name="case_no_v" type="text"readonly/> 
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="complain_v">Complain </label>
                                    <textarea class="form-control" id="complain_v" name="complain_v" rows="14" readonly></textarea>
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

<!-- Modal Update Form -->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title align-middle" id="updateModalLabel">Update Report Status</h4>
                </div>
                <div class="modal-body">
                    <form id="updateForm" name="updateForm" method="POST">
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">    
                                <label class="text-muted" for="status_u">Status</label> <br>
                                <select class="custom-select custom-select-lg mb-5" id="status_u">
                                    <option selected>Select</option>
                                    <option value="On-Going">On-Going</option>
                                    <option value="Solved">Solved</option>
                                </select>
                            </div> 
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary updateBtn_report" >Save Changes</button>
                </div>
            </div>
        </div>
    </div>

    <div id="PdfDataHolder" hidden>
        <form id="pdfForm" name="pdfForm" method="POST" action="../Database/ReportCRUD/report_pdf.php">
            <div class="form-row">
                <input id="case_no_pdf" type="text" >
                <input id="complainant_pdf" type="text" >
                <input id="c_address_pdf" type="text" >
                <input id="respondent_pdf" type="text" >
                <input id="r_address_pdf" type="text" >
                <input id="complain_pdf" type="text" >
                <input id="date_time_pdf" type="text" >
            </div>
        </form>
    </div>

    <?php include '../LandingPage/ToTop.php';?>
</body>
</html> 


<!-- CRUD Script -->
<script src="../Database/ReportCRUD/DATATABLE/report_ajax.js"></script>

