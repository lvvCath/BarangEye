
// Read
function Load(){
    $('#viewBtn').empty();
    $.ajax({
        url: "../Database/UserCRUD/user_list.php",
        type: "GET",
        success: function(response){

            response.forEach(function (resident, index) {                                
                '<button class="btn btn-action viewBtn" data-toggle="modal" data-target="#viewModal"' +
                                                                'data-id="'+resident.id+'"' + 
                                                                'data-last_name="'+resident.last_name+'"' + 
                                                                'data-first_name="'+resident.first_name+'"' + 
                                                                'data-middle_name="'+resident.middle_name+'"' + 
                                                                'data-gender="'+resident.gender+'"' + 
                                                                'data-age="'+resident.age+'"' + 
                                                                'data-bdate="'+resident.bdate+'"' + 
                                                                'data-address="'+resident.address+'"' + 
                                                                'data-contact_no="'+resident.contact_no+'"' + 
                                                                'data-marital_status="'+resident.marital_status+'"' + 
                                                                'data-voter_status="'+resident.voter_status+'"' +
                                                                'data-profile_img="'+resident.profile_img+'"' +
                                                                'data-username="'+resident.username+'"' + 
                                                                'data-email="'+resident.email+'"' + 
                                                                'data-user_type="'+resident.user_type+'"' + 
                                                                '>' +
                                                            '<li><i class="fa fa-eye"></i></li>' +
                                                   '</button>'
            });
        }
        
    });  
     
}

// Read: Resident & Account Table
$(document).on('click','.viewBtn',function(e) {
    var last_name=$(this).attr("data-last_name");
    var first_name=$(this).attr("data-first_name");
    var middle_name=$(this).attr("data-middle_name");
    var gender=$(this).attr("data-gender");
    var age=$(this).attr("data-age");
    var bdate=$(this).attr("data-bdate");
    var address=$(this).attr("data-address");
    var contact_no=$(this).attr("data-contact_no");
    var marital_status=$(this).attr("data-marital_status");
    var voter_status=$(this).attr("data-voter_status");

    var profile_img=$(this).attr("data-profile_img");

    var username=$(this).attr("data-username");
    var email=$(this).attr("data-email");
    var user_type=$(this).attr("data-user_type");

    $('#last_name_v').val(last_name);
    $('#first_name_v').val(first_name);
    $('#middle_name_v').val(middle_name);
    $('#gender_v').val(gender);
    $('#age_v').val(age);
    $('#birth_date_v').val(bdate);
    $('#address_v').val(address);
    $('#contact_no_v').val(contact_no);
    $('#marital_status_v').val(marital_status);
    $('#voter_status_v').val(voter_status);

    $('#profileImg').attr('src', profile_img);

    $('#username_v').val(username);
    $('#email_v').val(email);
    $('#user_type_v').val(user_type);

});
