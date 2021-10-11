<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
<!-- CSS -->
    <link rel="stylesheet" href="css/certificate_Admin.css">
</head>

<body>
    <div class="wrapper">
    <!-- Insert sideNav -->
        <div id="sideNav"><?php include 'SideNav_Admin.php';?></div>
        <div class="main_content">
    <!-- Top Nav -->
            <div class="sticky">
                <div class="navbar navbar-light bg-white">
                    <div class="search navbar-left"><h4>Certificate Requests</h4></div>
                    <div class="search navbar-right">
                        <i class="fa fa-search"></i>
                        <input class="searchInp" id="search" type="text" placeholder="Search Request">
                        <input name="search" class="searchBtn" type="submit" value="Search">
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
                            <h4 class="title">Request <span>Data</span></h4>
                        </div>
                    </div>
                    <div class="panel-body table-responsive">
                        <table id="certificateTable" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Release Date</th>
                                    <th>Date Claimed</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <!-- <tbody id="certificate_result"> -->
                                <!-- Requests Data -->
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


<!-- View Modal Form --->
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" >
            <div class="modal-content" >
                <div class="modal-header">
                    <h4 class="modal-title align-middle" id="viewModalLabel">View Request</h4>
                </div>
                <div class="modal-body">
                    <form id="viewForm" name="viewForm" method="POST">
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="text-muted" for="name_v">Requested By</label>
                                    <input class="form-control" id="name_v" name="name_v" type="text"readonly/> 
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="text-muted" for="no_of_year_v">Years of Residency</label>
                                    <input class="form-control" id="no_of_year_v" name="no_of_year_v" type="text"readonly/> 
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="text-muted" for="status_v">Status</label>
                                    <input class="form-control" id="status_v" name="status_v" type="text"readonly/> 
                                </div>
                            </div>
                        </div> 
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="text-muted" for="date_release_v">Date Released</label>
                                    <input class="form-control" id="date_release_v" name="date_release_v" type="text"readonly/> 
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="text-muted" for="date_claimed_v">Date Claimed</label>
                                    <input class="form-control" id="date_claimed_v" name="date_claimed_v" type="text"readonly/> 
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="category_v">Category</label>
                            <input class="form-control" id="category_v" name="category_v" type="text"readonly/> 
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="text-muted" for="message_v">Request Message</label>
                                    <textarea class="form-control" id="message_v" name="message_v" rows="6" readonly></textarea>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="text-muted" for="reply_v">Requirements</label>
                                    <textarea class="form-control" id="reply_v" name="reply_v" rows="6" readonly></textarea>
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


<!-- Modal Reply Form -->
    <div class="modal fade" id="replyModal" tabindex="-1" aria-labelledby="replyModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title align-middle" id="replyModalLabel">Request Requirement</h4>
                </div>
                <div class="modal-body">
                    <form id="replyForm" name="replyForm" method="POST">
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="text-muted" for="category_r">Category</label>
                                    <input class="form-control" id="category_r" name="category_r" type="text"readonly/> 
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">    
                                    <label class="text-muted" for="status_r">Status</label> <br>
                                    <select class="custom-select custom-select-lg mb-5" id="status_r">
                                        <option selected>Select</option>
                                        <option value="On-Going">On-Going</option>
                                        <option value="Approved">Approved</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="text-muted" for="message_r">Request Message</label>
                                    <textarea class="form-control" id="message_r" name="message_r" rows="10" readonly></textarea>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="text-muted" for="reply_r">Requirements</label>
                                    <textarea class="form-control" id="reply_r" name="reply_r" rows="10" ></textarea>
                                </div>
                            </div>
                        </div> 
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary replyUpdateBtn">Send Changes</button>
                </div>
            </div>
        </div>
    </div>

<!-- Modal Date Form -->
<div class="modal fade" id="dateModal" tabindex="-1" aria-labelledby="dateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title align-middle" id="dateModalLabel">Request Progress</h4>
                </div>
                <div class="modal-body">
                    <form id="dateForm" name="dateForm" method="POST">
                        <div class="form-group">    
                            <label class="text-muted" for="status_d">Status</label> <br>
                            <select class="custom-select custom-select-lg mb-5" id="status_d">
                                <option selected>Select</option>
                                <option value="On-Going">On-Going</option>
                                <option value="Approved">Approved</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="date_release_d">Release Date</label>
                            <div class="input-group date">
                                <input id="date_release_d" name="date_release_d" type="text" class="form-control date-input" />
                                <div class="input-group-addon" >
                                    <span class="fa fa-calendar"></span>
                                </div>
                            </div>
                            <!-- Calendar -->
                            <script type="text/javascript">
                                $(function () {
                                    $("#date_release_d").datepicker({
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
                        <div class="form-group">
                            <label class="text-muted" for="date_claimed_d">Date Claimed</label>
                            <div class="input-group date">
                                <input id="date_claimed_d" name="date_claimed_d" type="text" class="form-control date-input" />
                                <div class="input-group-addon" >
                                    <span class="fa fa-calendar"></span>
                                </div>
                            </div>
                            <!-- Calendar -->
                            <script type="text/javascript">
                                $(function () {
                                    $("#date_claimed_d").datepicker({
                                        format: "yyyy-mm-dd HH:II",
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
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary dateUpdateBtn">Send Changes</button>
                </div>
            </div>
        </div>
    </div>






    <?php include '../LandingPage/ToTop.php';?>
</body>
</html> 

<!-- CRUD Script -->
<script src="../Database/CertificateCRUD/DATATABLE/certificate_ajax.js"></script>

