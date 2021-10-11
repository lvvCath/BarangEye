Load();
updateReply();
updateDate();

// Read 
function Load(){
    $('#certificate_result').empty();
    $.ajax({
        url: "../Database/CertificateCRUD/certificate_list.php",
        type: "GET",
        success: function(response){

            response.forEach(function (certificate, index) {  
                $('#certificate_result').append('<tr>');
                    $('#certificate_result').append('<td>' + certificate.id + '</td>');
                    $('#certificate_result').append('<td>' + certificate.category + '</td>');
                    $('#certificate_result').append('<td>' + certificate.status + '</td>');
                    $('#certificate_result').append('<td>' + certificate.date_release + '</td>');
                    $('#certificate_result').append('<td>' + certificate.date_claimed + '</td>');
                    $('#certificate_result').append('<td>' +
                                                    '<ul class="action-list">' +
                                                        '<button class="btn btn-action viewBtn_certificate" type="button" data-toggle="modal" data-target="#viewModal"'  +
                                                                'data-no_of_year="'+certificate.no_of_year+'"' +
                                                                'data-category="'+certificate.category+'"' + 
                                                                'data-message="'+certificate.message+'"' + 
                                                                'data-reply="'+certificate.reply+'"' + 
                                                                'data-status="'+certificate.status+'"' + 
                                                                'data-date_release="'+certificate.date_release+'"' + 
                                                                'data-date_claimed="'+certificate.date_claimed+'"' + 
                                                                'data-account_id="'+certificate.account_id +'"' + 
                                                                'data-first_name="'+certificate.first_name +'"' + 
                                                                'data-last_name="'+certificate.last_name +'"' + 
                                                                '>' +
                                                            '<li><i class="fa fa-eye"></i></li>' +
                                                        '</button>' +
                                                        '<button class="btn btn-action reply" type="button" data-toggle="modal" data-target="#replyModal"' + 
                                                                'data-id="'+certificate.id+'"' + 
                                                                'data-status="'+certificate.status+'"' +  
                                                                'data-category="'+certificate.category+'"' + 
                                                                'data-message="'+certificate.message+'"' + 
                                                                'data-reply="'+certificate.reply+'"' +
                                                                '>' +
                                                            '<li><i class="fa fa-reply"></i></li>' +
                                                        '</button>' +
                                                        '<button class="btn btn-action dateIcon" type="button" data-toggle="modal" data-target="#dateModal"' + 
                                                                'data-id="'+certificate.id+'"' + 
                                                                'data-status="'+certificate.status+'"' +  
                                                                'data-date_release="'+certificate.date_release+'"' + 
                                                                'data-date_claimed="'+certificate.date_claimed+'"' +  
                                                                '>' +
                                                            '<li><i class="fa fa-calendar"></i></li>' +
                                                        '</button>' +
                                                        '<button class="btn btn-action deleteBtn" data-id="'+certificate.id+'">' +
                                                            '<li><i class="fa fa-trash"></i></li>' +
                                                        '</button></td>' +
                                                    '</ul>' +
                                                '</td>');
                $('#certificate_result').append('/<tr>');
            });
        }
        
    });  
     
}

// Read: certificate 
$(document).on('click','.viewBtn_certificate',function(e) {
    var first_name=$(this).attr("data-first_name");
    var last_name=$(this).attr("data-last_name");
    var no_of_year=$(this).attr("data-no_of_year");
    var status=$(this).attr("data-status");
    var date_release=$(this).attr("data-date_release");
    var date_claimed=$(this).attr("data-date_claimed");
    var category=$(this).attr("data-category");
    var message=$(this).attr("data-message");
    var reply=$(this).attr("data-reply");
   

    $('#name_v').val(first_name + ' ' + last_name);
    $('#no_of_year_v').val(no_of_year);
    $('#status_v').val(status);
    $('#date_release_v').val(date_release);
    $('#date_claimed_v').val(date_claimed);
    $('#category_v').val(category);
    $('#message_v').val(message);
    $('#reply_v').val(reply);
    
});

// Update: Reply Requirements Request
function updateReply(){
    $curr_id = 0;
    $(document).on('click','.reply',function(e) {
        var id=$(this).attr("data-id");
        var category=$(this).attr("data-category");
        var message=$(this).attr("data-message");
        var status=$(this).attr("data-status");
        var reply=$(this).attr("data-reply");
        
        $('#category_r').val(category);
        $('#message_r').val(message);
        $('#status_r').val(status);
        $('#reply_r').val(reply);
        

        $curr_id = id;
    });
      $(document).on('click', '.replyUpdateBtn', function(e){
        e.preventDefault();

        let id = $curr_id;
        $.ajax({
            url: "../Database/CertificateCRUD/certificate_update_reply.php",
            type: "POST",
            data: {
                "id": id,
                "status": $('#status_r').val(),
                "reply": $('#reply_r').val(),
            },
            success: function(response){
                console.log(response);
                if(response.code=='201'){
                    $('#replyModal').modal('hide');
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

// Update: Date Requirements Request
function updateDate(){
    $curr_id = 0;
    $(document).on('click','.dateIcon',function(e) {
        var id=$(this).attr("data-id");
        var status=$(this).attr("data-status");
        var date_release=$(this).attr("data-date_release");
        var date_claimed=$(this).attr("data-date_claimed");
        
        $('#status_d').val(status);
        $('#date_release_d').val(date_release);
        $('#date_claimed_d').val(date_claimed);
        

        $curr_id = id;
    });
      $(document).on('click', '.dateUpdateBtn', function(e){
        e.preventDefault();
        let id = $curr_id;

        console.log(id);
        console.log($('#date_release_d').val());
        console.log($('#date_claimed_d').val());
        $.ajax({
            url: "../Database/CertificateCRUD/certificate_update_date.php",
            type: "POST",
            data: {
                "id": id,
                "status": $('#status_d').val(),
                "date_release": $('#date_release_d').val(),
                "date_claimed": $('#date_claimed_d').val(),
            },
            success: function(response){
                console.log(response);
                if(response.code=='201'){
                    $('#dateModal').modal('hide');
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


// Delete: certificate
$(document).on('click', '.deleteBtn', function(){
    let id = $(this).data('id');

    console.log(id)

    $.ajax({
        url: "../Database/CertificateCRUD/certificate_delete.php",
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




