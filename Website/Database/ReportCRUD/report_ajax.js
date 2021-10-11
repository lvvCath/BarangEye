Load();
 
// Read 
function Load(){
    $('#report_result').empty();
    $.ajax({
        url: "../Database/ReportCRUD/report_list.php",
        type: "GET",
        success: function(response){

            response.forEach(function (report, index) {  
                $('#report_result').append('<tr>');
                    $('#report_result').append('<td>' + report.id + '</td>');
                    $('#report_result').append('<td>' + report.case_no + '</td>');
                    $('#report_result').append('<td>' + report.complainant + '</td>');
                    $('#report_result').append('<td>' + report.respondent + '</td>');
                    $('#report_result').append('<td>' + report.date_time + '</td>');
                    $('#report_result').append('<td>' + report.status + '</td>');
                    $('#report_result').append('<td>' +
                                                    '<ul class="action-list">' +
                                                        '<button class="btn btn-action viewBtn_report" type="button" data-toggle="modal" data-target="#viewModal"'  +
                                                                'data-id="'+report.id+'"' + 
                                                                'data-case_no="'+report.case_no+'"' +
                                                                'data-status="'+report.status+'"' + 
                                                                'data-complainant="'+report.complainant+'"' + 
                                                                'data-c_address="'+report.c_address+'"' + 
                                                                'data-respondent="'+report.respondent+'"' + 
                                                                'data-r_address="'+report.r_address+'"' + 
                                                                'data-complain="'+report.complain+'"' + 
                                                                'data-dates="'+report.dates+'"' + 
                                                                '>' +
                                                            '<li><i class="fa fa-eye"></i></li>' +
                                                        '</button>' +
                                                        '<button class="btn btn-action update" type="button" data-toggle="modal" data-target="#updateModal"' + 
                                                                'data-id="'+report.id+'"' + 
                                                                'data-status="'+report.status+'"' +  
                                                                '>' +
                                                            '<li><i class="fa fa-edit"></i></li>' +
                                                        '</button>' +
                                                        '<button class="btn btn-action deleteBtn" data-id="'+report.id+'">' +
                                                            '<li><i class="fa fa-trash"></i></li>' +
                                                        '</button></td>' +
                                                    '</ul>' +
                                                '</td>');
                $('#report_result').append('/<tr>');
            });
        }
        
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
                Load();
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
                    Load();
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
                Load();
            }
            if(response.code=='400'){
                console.log('Error');
            }
        }
    });
});




