Load();

function Load(){
    // READ: Display Data (resident, account, image)
    update();
    $('#residentTable').dataTable({
        // "processing": true,
        dom: 'lBfrtip',
        buttons: [
            {   extend: 'copy',
                className: 'btn btn-datatable',
                text: '<i class="fa fa-copy"></i> Copy',
                filename: 'Brgy_Ma-ao_Resident_List',
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ]
                }
            },{ extend: 'excel',
                title: 'Barangay MA-AO Residents',
                filename: 'Brgy_Ma-ao_Resident_List',
                className: 'btn btn-datatable',
                text: '<i class="fa fa-file-excel-o"></i> Excel',
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ]
                }
            },{ extend: 'pdf',
                title: 'Barangay MA-AO Residents',
                filename: 'Brgy_Ma-ao_Resident_List',
                className: 'btn btn-datatable',  
                text: '<i class="fa fa-file-pdf-o"></i> PDF',
                orientation: 'landscape',
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ]
                }
            },{ extend: 'print',
                className: 'btn btn-datatable',
                text: '<i class="fa fa-print"></i> Print',
                title: function(){
                        return "<br><br><br> Barangay MA-AO Resident List"
                    },
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ]
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

        "columnDefs": [
            {   "targets": [ 6 ],
                "visible": false,
                "searchable": false
            },{ "targets": [ 7 ],
                "visible": false
            },{ "targets": [ 8 ],
                "visible": false
            },{ "targets": [ 9 ],
                "visible": false
            },{ "targets": [ 10 ],
                "visible": false
            },
        ],

        "ajax": "../Database/ResidentsCRUD/DATATABLE/resident_list.php",
        "columns": [
            {data: 'id'},
            {data: 'last_name'},
            {data: 'first_name'},
            {data: 'middle_name'},
            {data: 'gender'},
            {data: 'age'},
            // Hide
            {data: 'bdate'},
            {data: 'address'},
            {data: 'contact_no'},
            {data: 'marital_status'},
            {data: 'voter_status'},
            // /Hide
            {data: null,
                render: function ( data, type, row ) {
                    return '<ul class="action-list">' +
                                '<button class="btn btn-action viewBtn" data-toggle="modal" data-target="#viewModal"' +
                                        'data-id="'+data.id+'"' + 
                                        'data-last_name="'+data.last_name+'"' + 
                                        'data-first_name="'+data.first_name+'"' + 
                                        'data-middle_name="'+data.middle_name+'"' + 
                                        'data-gender="'+data.gender+'"' + 
                                        'data-age="'+data.age+'"' + 
                                        'data-bdate="'+data.bdate+'"' + 
                                        'data-address="'+data.address+'"' + 
                                        'data-contact_no="'+data.contact_no+'"' + 
                                        'data-marital_status="'+data.marital_status+'"' + 
                                        'data-voter_status="'+data.voter_status+'"' +
                                        'data-profile_img="'+data.profile_img+'"' +
                                        'data-username="'+data.username+'"' + 
                                        'data-email="'+data.email+'"' + 
                                        'data-user_type="'+data.user_type+'"' + 
                                        '>' +
                                    '<li><i class="fa fa-eye"></i></li>' +
                                '</button>' +
                                '<button class="btn btn-action update" type="button" data-toggle="modal" data-target="#updateModal"' + 
                                        'data-id="'+data.id+'"' + 
                                        'data-last_name="'+data.last_name+'"' + 
                                        'data-first_name="'+data.first_name+'"' + 
                                        'data-middle_name="'+data.middle_name+'"' + 
                                        'data-gender="'+data.gender+'"' + 
                                        'data-age="'+data.age+'"' + 
                                        'data-bdate="'+data.bdate+'"' + 
                                        'data-address="'+data.address+'"' + 
                                        'data-contact_no="'+data.contact_no+'"' + 
                                        'data-marital_status="'+data.marital_status+'"' + 
                                        'data-voter_status="'+data.voter_status+'"' + 
                                        '>' +
                                    '<li><i class="fa fa-edit"></i></li>' +
                                '</button>' +
                                '<button class="btn btn-action deleteBtn" data-id="'+data.id+'" data-id_account="'+data.id_account+'" data-id_image="'+data.id_image+'">' +
                                    '<li><i class="fa fa-trash"></i></li>' +
                                '</button>' +
                            '</ul>';
                }
            },
            {data: null,
                render: function ( data, type, row ) {
                    return '<button class="btn btn-action accountBtn"  data-toggle="modal" data-target="#updateAccountModal"'+ 
                                        'data-id_account="'+data.id_account+'" '+
                                        'data-profile_img="'+data.profile_img+'"' +
                                        'data-username="'+data.username+'"' +
                                        'data-email="'+data.email+'"' + 
                                        'data-password="'+data.password+'"' + 
                                        'data-user_type="'+data.user_type+'"' +
                                        'data-id="'+data.id+'"' +
                                        '>' +
                                '<li><i class="fa fa-user-circle-o"></i> '+data.username+'</li>' +
                            '</button>';
                }
            }
        ],

        
    });
    


    // CREATE: Resident
    $("#createBtn").click(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../Database/ResidentsCRUD/resident_create.php",
            type: "POST",
            data: {
                "first_name": $('#first_name').val(), 
                "middle_name": $('#middle_name').val(), 
                "last_name": $('#last_name').val(), 
                "gender": $('#gender').val(),
                "age": $('#age').val(),
                "bdate": $('#birth_date').val(), 
                "address": $('#address').val(), 
                "contact_no": $('#contact_no').val(), 
                "marital_status": $('#marital_status').val(), 
                "voter_status": $('#voter_status').val(), 
            },
            success: function(response){
                //console.log(response);
                if(response.code=='201'){
                    console.log('Created Successfully');
                    $('#createModal').modal('hide');
                    $('#createForm').trigger("reset");
                    $('#residentTable').DataTable().ajax.reload();
                }else{
                    console.log('Error');
                    alert("Please Fill out all the Fields");
                }
            }
        });
    });

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

    // UPDATE: Resident
    function update(){
        $curr_id = 0;
        $(document).on('click','.update',function(e) {
            var id=$(this).attr("data-id");
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

            $('#last_name_u').val(last_name);
            $('#first_name_u').val(first_name);
            $('#middle_name_u').val(middle_name);
            $('#gender_u').val(gender);
            $('#age_u').val(age);
            $('#birth_date_u').val(bdate);
            $('#address_u').val(address);
            $('#contact_no_u').val(contact_no);
            $('#marital_status_u').val(marital_status);
            $('#voter_status_u').val(voter_status);
           
            console.log($('#first_name_u').val());
            console.log($('#middle_name_u').val());

            $curr_id = id;
        });

        $(document).on('click', '.updateBtn', function(e){
            e.preventDefault();
            let id = $curr_id;
            console.log(id);

            $.ajax({
                url: "../Database/ResidentsCRUD/resident_update.php",
                type: "POST",
                data: {
                    "id_u": id,
                    "first_name_u": $('#first_name_u').val(), 
                    "middle_name_u": $('#middle_name_u').val(), 
                    "last_name_u": $('#last_name_u').val(), 
                    "gender_u": $('#gender_u').val(),
                    "age_u": $('#age_u').val(),
                    "birth_date_u": $('#birth_date_u').val(), 
                    "address_u": $('#address_u').val(), 
                    "contact_no_u": $('#contact_no_u').val(), 
                    "marital_status_u": $('#marital_status_u').val(), 
                    "voter_status_u": $('#voter_status_u').val(),
                },
                success: function(response){
                    console.log(response);
                    if(response.code=='201'){
                        $('#updateModal').modal('hide');
                        console.log('Updated Successfully');
                        $('#residentTable').DataTable().ajax.reload();
                    }
                    if(response.code=='400'){
                        console.log('Error');
                    }
                }
            });
        });

    }

    // UPDATE: Account 
    UpdateAccount();
    function UpdateAccount(){
        $curr_id = 0;
        $(document).on('click','.accountBtn',function(e) {
            var id_resident=$(this).attr("data-id");
            var id_account=$(this).attr("data-id_account");
            var username=$(this).attr("data-username");
            var email=$(this).attr("data-email");
            var password=$(this).attr("data-password");
            var user_type=$(this).attr("data-user_type");
            var profile_img=$(this).attr("data-profile_img");

            $('#username_u').val(username);
            $('#email_u').val(email);
            $('#password_u').val(password);
            $('#user_type_u').val(user_type);
            $('#profileImg_u').attr('src', profile_img);
            
            $curr_id = id_account;
        });

        $(document).on('click', '#accountBtn', function(e){
            e.preventDefault();
            let id = $curr_id;
            console.log($('#username_u').val());
            console.log($('#email_u').val());
            
            $.ajax({
                url: "../Database/ResidentsCRUD/account_update.php",
                type: "POST",
                data: {
                    "id_account_u": id,
                    "username_u": $('#username_u').val(), 
                    "email_u": $('#email_u').val(), 
                    "password_u": $('#password_u').val(), 
                    "user_type_u": $('#user_type_u').val(),
                },
                success: function(response){
                    console.log(response);
                    if(response.code=='201'){
                        $('#updateAccountModal').modal('hide');
                        console.log('Updated Successfully');
                        $('#residentTable').DataTable().ajax.reload();
                    }
                    if(response.code=='400'){
                        console.log('Error');
                    }
                }
            });
        });

    }


    // DELETE: Resident & Account & Image
    $(document).on('click', '.deleteBtn', function(){
        let id = $(this).data('id');
        let id_account = $(this).data('id_account');
        let id_image = $(this).data('id_image');

        console.log(id)
        console.log(id_account)
        console.log(id_image)

        $.ajax({
            url: "../Database/ResidentsCRUD/resident_delete.php",
            type: "POST",
            data: {
                "id": id,
            },
            success: function(response){
                //console.log(response);
                if(response.code=='201'){
                    console.log('Deleted Successfully');
                    $('#residentTable').DataTable().ajax.reload();
                }
                if(response.code=='400'){
                    console.log('Error');
                }
            }
        });

    });
    

}


// Reassign Search to the Search input in the TopNav
oTable = $('#residentTable').DataTable();   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
$('#search').keyup(function(){
      oTable.search($(this).val()).draw() ;
})





// Auto Set Age
function SetAge() {
    var bdate=document.createForm.birth_date.value;
    var age =new Person(bdate).calculateAge();
    document.getElementById('age').value=age;
}
function UpdateAge() {
    var bdate=document.updateForm.birth_date_u.value;
    var age =new Person(bdate).calculateAge();
    document.getElementById('age_u').value=age;
}
function Person(dob) {
    this.birthday = new Date(dob);
    this.calculateAge = function() {
      const diff = Date.now() - this.birthday.getTime();
      const ageDate = new Date(diff); 
      console.log(ageDate.getUTCFullYear()); 
      return Math.abs(ageDate.getUTCFullYear() - 1970);
    };
}
