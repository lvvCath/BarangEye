Load();
 
function Load(){
    // READ: Display Data (resident, account, image)
    update();
    ReportPdf();
    $('#reportTable').dataTable({
        // "processing": true,
        dom: 'lBfrtip',
        buttons: [
            {   extend: 'copy',
                className: 'btn btn-datatable',
                text: '<i class="fa fa-copy"></i> Copy',
                filename: 'Brgy_Ma-ao_Resident_List',
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4 ]
                }
            },{ extend: 'excel',
                title: 'Barangay MA-AO Reports',
                filename: 'Brgy_Ma-ao_Reports',
                className: 'btn btn-datatable',
                text: '<i class="fa fa-file-excel-o"></i> Excel',
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4 ]
                }
            },{ extend: 'pdf',
                title: 'Barangay MA-AO Reports',
                filename: 'Brgy_Ma-ao_Reports',
                className: 'btn btn-datatable',  
                text: '<i class="fa fa-file-pdf-o"></i> PDF',
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4 ]
                }
            },{ extend: 'print',
                className: 'btn btn-datatable', 
                text: '<i class="fa fa-print"></i> Print',
                title: function(){
                        return "<br><br><br> Barangay MA-AO Reports"
                    },
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4 ]
                    }, 
                    customize: function ( win ) {
                        $(win.document.body)
                            .css( 'font-size', '10pt' )
                            .prepend(
                                '<img src="http://bagocity.gov.ph/wp-content/uploads/2018/08/Barangay-Ma-ao-Logo.png" style="position:absolute; top:20; right:30; width:150px; height:150px; z-index:-1;" />'
                            );
                        $(win.document.body).find( 'table' )
                            .addClass( 'compact' )
                            .css( 'font-size', 'inherit' );
                }
            },


        ],
        "ajax": "../Database/ReportCRUD/DATATABLE/report_list.php",
        "columns": [
            {data: 'id'},
            {data: 'case_no'},
            {data: 'complainant'},
            {data: 'respondent'},
            {data: 'date_time'},
            {data: 'status'},
            {data: null,
                render: function ( data, type, row ) {
                    return '<ul class="action-list">' +
                                '<button class="btn btn-action viewBtn_report" type="button" data-toggle="modal" data-target="#viewModal"'  +
                                        'data-id="'+data.id+'"' + 
                                        'data-case_no="'+data.case_no+'"' +
                                        'data-status="'+data.status+'"' + 
                                        'data-complainant="'+data.complainant+'"' + 
                                        'data-c_address="'+data.c_address+'"' + 
                                        'data-respondent="'+data.respondent+'"' + 
                                        'data-r_address="'+data.r_address+'"' + 
                                        'data-complain="'+data.complain+'"' + 
                                        'data-dates="'+data.date_time+'"' + 
                                        '>' +
                                    '<li><i class="fa fa-eye"></i></li>' +
                                '</button>' +
                                '<button class="btn btn-action update" type="button" data-toggle="modal" data-target="#updateModal"' + 
                                        'data-id="'+data.id+'"' + 
                                        'data-status="'+data.status+'"' +  
                                        '>' +
                                    '<li><i class="fa fa-edit"></i></li>' +
                                '</button>' +
                                '<button class="btn btn-action deleteBtn" data-id="'+data.id+'">' +
                                    '<li><i class="fa fa-trash"></i></li>' +
                                '</button></td>' +
                                '<button class="btn btn-action printBtn" name="printbtn" type="button"'+ 
                                            'data-id="'+data.id+'"' + 
                                            'data-case_no="'+data.case_no+'"' +
                                            'data-status="'+data.status+'"' + 
                                            'data-complainant="'+data.complainant+'"' + 
                                            'data-c_address="'+data.c_address+'"' + 
                                            'data-respondent="'+data.respondent+'"' + 
                                            'data-r_address="'+data.r_address+'"' + 
                                            'data-complain="'+data.complain+'"' + 
                                            'data-date_time="'+data.date_time+'"' + 
                                        '>' +
                                '<li><i class="fa fa-print"></i></li>' +
                                '</button>' +
                            '</ul>';
                }// /Render
            }  // /ACTION Column
        ]

    }); // /DISPLAY TABLE

    $( "#createBtn" ).click(function(e) {
        
    });

    //PDF
    function ReportPdf(){
        $(document).on('click', '.printBtn', function(e){
            console.log("eNTERED");
            var case_no=$(this).attr("data-case_no");
            var complainant=$(this).attr("data-complainant");
            var c_address=$(this).attr("data-c_address");
            var respondent=$(this).attr("data-respondent");
            var r_address=$(this).attr("data-r_address");
            var complain=$(this).attr("data-complain");
            var date_time=$(this).attr("data-date_time");
            
            $('#case_no_pdf').val(case_no);
            $('#complainant_pdf').val(complainant);
            $('#c_address_pdf').val(c_address);
            $('#respondent_pdf').val(respondent);
            $('#r_address_pdf').val(r_address);
            $('#complain_pdf').val(complain);
            $('#date_time_pdf').val(date_time);

            console.log( $('#case_no_pdf').val() );
            console.log($('#c_address_pdf').val() );
            console.log($('#respondent_pdf').val() );
            console.log($('#r_address_pdf').val() );
            console.log($('#complain_pdf').val() );
            console.log($('#date_time_pdf').val() );

            $.ajax({
                url: "../Database/ReportCRUD/report_pdf.php",
                type: "POST",
                data: {
                    "case_no": $('#case_no_pdf').val(), 
                    "complainant": $('#complainant_pdf').val(), 
                    "c_address": $('#c_address_pdf').val(), 
                    "respondent": $('#respondent_pdf').val(), 
                    "r_address": $('#r_address_pdf').val(), 
                    "complain": $('#complain_pdf').val(), 
                    "date_time": $('#date_time_pdf').val(), 
                },
                success: function(html) {
                    window.location.href = '../Database/ReportCRUD/report_pdf.php';      
                }

            });
        });
    }

    // Create: report
    $( "#createBtn" ).click(function(e) {
        console.log("Entered")
        console.log($('#case_no').val());
        console.log($('#complainant').val());
        console.log($('#c_address').val());
        console.log($('#respondent').val());
        console.log($('#r_address').val());
        console.log($('#complain').val());
        console.log($('#status').val());
        
        $.ajax({
            url: "../Database/ReportCRUD/report_create.php",
            type: "POST",
            data: {
                "case_no": $('#case_no').val(), 
                "complainant": $('#complainant').val(), 
                "c_address": $('#c_address').val(), 
                "respondent": $('#respondent').val(),
                "r_address": $('#r_address').val(),
                "complain": $('#complain').val(), 
                "status": $('#status').val(),
            },
            success: function(response){
                //console.log(response);
                if(response.code=='201'){
                    console.log('Created Successfully');
                    $('#createModal').modal('hide');
                    $('#createForm').trigger("reset");
                    $('#reportTable').DataTable().ajax.reload();
                }else{
                    console.log('Error');
                    alert("Please Fill out all the Fields");
                }
            }
        });
    });

    // Read: report 
    $(document).on('click','.viewBtn_report',function(e) {
        var case_no=$(this).attr("data-case_no");
        var dates=$(this).attr("data-dates");
        var status=$(this).attr("data-status");
        var complainant=$(this).attr("data-complainant");
        var respondent=$(this).attr("data-respondent");
        var c_address=$(this).attr("data-c_address");
        var r_address=$(this).attr("data-r_address");
        var complain=$(this).attr("data-complain");

        $('#case_no_v').val(case_no);
        $('#dates_v').val(dates);
        $('#status_v').val(status);
        $('#complainant_v').val(complainant);
        $('#respondent_v').val(respondent);
        $('#c_address_v').val(c_address);
        $('#r_address_v').val(r_address);
        $('#complain_v').val(complain);
    });

    // Update: report
    function update(){
        $curr_id = 0;
        $(document).on('click','.update',function(e) {
            var id=$(this).attr("data-id");
            var status=$(this).attr("data-status");
            
            $('#status_u').val(status);
            
            $curr_id = id;
        });
        $(document).on('click', '.updateBtn_report', function(e){
            e.preventDefault();
            console.log($curr_id);
            console.log($('#status_u').val());
            let id = $curr_id;
            $.ajax({
                url: "../Database/ReportCRUD/report_update.php",
                type: "POST",
                data: {
                    "id_u": id,
                    "status_u": $('#status_u').val(), 
                },
                success: function(response){
                    console.log(response);
                    if(response.code=='201'){
                        $('#updateModal').modal('hide');
                        console.log('Updated Successfully');
                        $('#reportTable').DataTable().ajax.reload();
                    }
                    if(response.code=='400'){
                        console.log('Error');
                    }
                }
            });
        });
    }

    // Delete: report
    $(document).on('click', '.deleteBtn', function(){
        let id = $(this).data('id');

        console.log(id)

        $.ajax({
            url: "../Database/ReportCRUD/report_delete.php",
            type: "POST",
            data: {
                "id": id,
            },
            success: function(response){
                //console.log(response);
                if(response.code=='201'){
                    console.log('Deleted Successfully');
                    $('#reportTable').DataTable().ajax.reload();
                }
                if(response.code=='400'){
                    console.log('Error');
                }
            }
        });
    });




}

oTable = $('#reportTable').DataTable();   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
$('#search').keyup(function(){
      oTable.search($(this).val()).draw() ;
})







