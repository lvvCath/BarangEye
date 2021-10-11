// Read
Load();
LoadAll();
update()

function Load(){
    $('#community_qurantine').empty();
    $('#report-date').empty();
    $('#active-cases').empty();
    $('#recovered-cases').empty();
    $('#deceased-cases').empty();
    $('#total-cases').empty();
    $('#config-report').empty();

    $.ajax({
        url: "../Database/CovidReportCRUD/report_list.php",
        type: "GET",
        success: function(response){

            response.forEach(function (covid_report, index) { 
                // Community Quarantine Status
                $('#community_qurantine').append('<h4 class="text-center">' + covid_report.quarantine_status + '</h4>');   
                $('#report-date').append('<h5 class="card-subtitle mb-2 text-muted text-center">' + covid_report.start_date + '&nbsp to</h5>');   
                $('#report-date').append('<h5 class="card-subtitle mb-2 text-muted text-center"> &nbsp ' + covid_report.end_date + '</h5>');
                // Community COVID Cases Report
                $('#active-cases').append('<h3><strong>' + covid_report.active_case + '</strong></h3>');
                $('#recovered-cases').append('<h3><strong>' + covid_report.recovered_case + '</strong></h3>');
                $('#deceased-cases').append('<h3><strong>' + covid_report.deceased_case + '</strong></h3>');
                $('#total-cases').append('<h3><strong>' + covid_report.total_case + '</strong></h3>');
                // Config COVID Cases Report drop-down 
                $('#config-report').append('<a href="" class="dropdown-item" data-toggle="modal" data-target="#createReportModal"><i class="fa fa-plus"></i> Add Report</a>');
                $('#config-report').append('<a href="" class="dropdown-item updateReportBtn" data-toggle="modal" data-target="#updateReportModal"'+
                                                'data-id="'+ covid_report.id +'"'+
                                                'data-quarantine_status="'+ covid_report.quarantine_status +'"' +
                                                'data-start_date="'+ covid_report.start_date +'"' +
                                                'data-end_date="'+ covid_report.end_date +'"'+
                                                'data-active_case="'+ covid_report.active_case +'"' +
                                                'data-recovered_case="'+ covid_report.recovered_case +'"' +
                                                'data-deceased_case="'+ covid_report.deceased_case +'"' +
                                                'data-total_case="'+ covid_report.total_case +'"' +
                                                '><i class="fa fa-pencil"></i> Edit this Report</a>');
                $('#config-report').append('<a href="" class="dropdown-item" data-toggle="modal" data-target="#deleteReportModal"><i class="fa fa-trash"></i> Delete Report</a>');
                    
                    
                    
            });
        }
    });   
}

function LoadAll(){
    $('#report_result').empty();
    $.ajax({
        url: "../Database/CovidReportCRUD/reportAll_list.php",
        type: "GET",
        success: function(response){

            response.forEach(function (covid_report, index) { 
                // Display All
                $('#report_result').append('<tr>');
                $('#report_result').append('<td>' + covid_report.id + '</td>');
                $('#report_result').append('<td>' + covid_report.quarantine_status + '</td>');
                $('#report_result').append('<td>' + covid_report.start_date + '</td>');
                $('#report_result').append('<td>' + covid_report.end_date + '</td>');
                $('#report_result').append('<td>' + covid_report.active_case + '</td>');
                $('#report_result').append('<td>' + covid_report.recovered_case + '</td>');
                $('#report_result').append('<td>' + covid_report.deceased_case + '</td>');
                $('#report_result').append('<td>' + covid_report.total_case + '</td>');
                $('#report_result').append('<td>'+
                                                '<a href="" class="deleteReportBtn" data-id="'+covid_report.id+'"><i class="fa fa-trash"></i> Delete</a>' +
                                                '</td>');
                $('#report_result').append('</tr>');
            });
        }
    });   
}


// Create
$( "#createReportBtn" ).click(function(e) {
    e.preventDefault();
    console.log($('#quarantine_status').val());
    console.log($('#start_date').val());
    console.log($('#end_date').val());
    console.log($('#active_case').val());
    console.log($('#recovered_case').val());
    console.log($('#deceased_case').val());
    console.log($('#total_case').val());

    $.ajax({
        url: "../Database/CovidReportCRUD/report_create.php",
        type: "POST",
        data: {
            "quarantine_status": $('#quarantine_status').val(), 
            "start_date": $('#start_date').val(), 
            "end_date": $('#end_date').val(),
            "active_case": $('#active_case').val(),
            "recovered_case": $('#recovered_case').val(),
            "deceased_case": $('#deceased_case').val(),
            "total_case": $('#total_case').val(),
        },
        success: function(response){
            //console.log(response);
            if(response.code=='201'){
                console.log('Created Successfully');
                $('#createReportModal').modal('hide');
                $('#createReportForm').trigger("reset");
                location.reload();
            }else{
                console.log('Error');
                alert("Please Fill out all the Fields");
            }
        }
    });
});


// Update
function update(){
    
    $(document).on('click','.updateReportBtn',function(e) {
        var id=$(this).attr("data-id");
        var quarantine_status=$(this).attr("data-quarantine_status");
        var start_date=$(this).attr("data-start_date");
        var end_date=$(this).attr("data-end_date");
        var active_case=$(this).attr("data-active_case");
        var recovered_case=$(this).attr("data-recovered_case");
        var deceased_case=$(this).attr("data-deceased_case");
        var total_case=$(this).attr("data-total_case");
        
        $('#report_id_u').val(id);
        $('#quarantine_status_u').val(quarantine_status);
        $('#start_date_u').val(start_date);
        $('#end_date_u').val(end_date);
        $('#active_case_u').val(active_case);
        $('#recovered_case_u').val(recovered_case);
        $('#deceased_case_u').val(deceased_case);
        $('#total_case_u').val(total_case);
    });

    $(document).on('click', '#updateReportBtn', function(e){
        e.preventDefault();
        console.log($('#report_id_u').val());
        console.log($('#quarantine_status_u').val());
        console.log($('#start_date_u').val());
        console.log($('#end_date_u').val());
        console.log($('#active_case_u').val());
        console.log($('#recovered_case_u').val());
        console.log($('#deceased_case_u').val());
        console.log($('#total_case_u').val());

        $.ajax({
            url: "../Database/CovidReportCRUD/report_update.php",
            type: "POST",
            data: {
                "id": $('#report_id_u').val(),
                "quarantine_status": $('#quarantine_status_u').val(), 
                "start_date": $('#start_date_u').val(), 
                "end_date": $('#end_date_u').val(),
                "active_case": $('#active_case_u').val(),
                "recovered_case": $('#recovered_case_u').val(),
                "deceased_case": $('#deceased_case_u').val(),
                "total_case": $('#total_case_u').val(),
            },
            success: function(response){
                console.log(response);
                if(response.code=='201'){
                    $('#updateReportModal').modal('hide');
                    console.log('Updated Successfully');
                    location.reload();
                }
                if(response.code=='400'){
                    console.log('Error');
                    alert("Please Fill out all the Fields");
                }
            }
        });
    });

}



// Delete
$(document).on('click', '.deleteReportBtn', function(){
    let id = $(this).data('id');
    console.log(id);
    $.ajax({
        url: "../Database/CovidReportCRUD/report_delete.php",
        type: "POST",
        data: {
            "id": id
        },
        success: function(response){
            //console.log(response);
            if(response.code=='201'){
                console.log('Deleted Successfully');
                LoadAll();
            }
            if(response.code=='400'){
                console.log('Error');
            }
        }
    });
});
