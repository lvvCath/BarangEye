
// Read
Load();
update();

function Load(){
    $('#post_column').empty();

    $.ajax({
        url: "../Database/PostCRUD/post_list.php",
        type: "GET",
        success: function(response){

            response.forEach(function (post, index) { 
                $('#post_column').append('<div class="card gedf-card">' +
                                            '<div class="post-card">' +
                                                '<div class="card-header py-3">' +
                                                    '<div class="d-flex justify-content-between align-items-center">'+
                                                        '<div class="d-flex justify-content-between align-items-center">'+
                                                            '<div class="mr-2">'+
                                                                '<img class="rounded-circle" width="45" src="../image/brgyLogo.png" alt="Brgy Logo">'+
                                                            '</div>'+
                                                            '<div class="ml-2">'+
                                                                '<div class="h4 m-0">' + post.category + '</div>'+
                                                                '<div class="h7 text-muted"><i class="fa fa-clock-o"></i> &nbsp' + post.date_time + '</div>'+
                                                            '</div>'+
                                                        '</div>'+
                                                        '<div class="dropdown" id="dropdown">'+                                           
                                                            '<button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+                                                        
                                                                '<i class="fa fa-ellipsis-h"></i>'+
                                                            '</button>'+                                                        
                                                            '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">'+
                                                                '<a class="dropdown-item edit" data-toggle="modal" data-target="#editModal" href=""'+
                                                                'data-id="'+post.id+'"' +
                                                                'data-category="'+post.category+'"' +
                                                                'data-subject="'+post.subject+'"' +
                                                                'data-content="'+post.content+'"' +
                                                                'data-post_img="'+post.post_img+'"' +
                                                                '><i class="fa fa-pencil"></i> Edit this Post</a>'+                                                            
                                                                '<a class="dropdown-item deleteBtn" data-id="'+post.id+'" href=""><i class="fa fa-trash"></i> Delete this Post</a>'+
                                                            '</div>'+                                                            
                                                        '</div>'+
                                                    '</div>'+                                                       
                                                '</div>'+                                                   
                                                '<div class="card-body">'+                                                  
                                                    '<h3 class="card-title">' + post.subject + '</h3>'+                                                      
                                                    '<p class="card-text">' + post.content + '</p>'+  
                                                    '<div class="post-img d-flex justify-content-center py-1">' +
                                                        '<img src="'+ post.post_img +'" style="height: 100%; width: 100%; object-fit: contain" alt="" onerror="this.style.opacity=0">'+
                                                    '</div>'+                                                        
                                                '</div>'+                                                   
                                                '<div class="card-footer py-4">'+                                                        
                                                    '<a href="#" class="card-link"><i class="fa fa-thumbs-up"></i> &nbsp' + post.likes + ' Likes</a>'+                                                
                                                    '<a href="#" class="card-link"><i class="fa fa-comment"></i> &nbsp' + post.comments + ' Comments</a>'+                                                   
                                                '</div>'+                                                       
                                            '</div>'+                                           
                                        '</div>');   
            });
        }
    });   
}


// Delete
$(document).on('click', '.deleteBtn', function(){
    let id = $(this).data('id');
    console.log(id)
    $.ajax({
        url: "../Database/PostCRUD/post_delete.php",
        type: "POST",
        data: {
            "id": id
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




// Update
function update(){
    $curr_id = 0;
    $(document).on('click','.edit',function(e) {
        var id=$(this).attr("data-id");
        var category=$(this).attr("data-category");
        var subject=$(this).attr("data-subject");
        var content=$(this).attr("data-content");
        var post_img=$(this).attr("data-post_img");

        $('#category_u').val(category);
        $('#subject_u').val(subject);
        $('#content_u').val(content);
        $('#post_img_u').val(post_img);

        $curr_id = id;
    });

    $(document).on('click', '.editBtn', function(e){
        e.preventDefault();
        let id = $curr_id;

        $.ajax({
            url: "../Database/PostCRUD/post_update.php",
            type: "POST",
            data: {
                "id": id,
                "category": $('#category_u').val(), 
                "subject": $('#subject_u').val(), 
                "content": $('#content_u').val(),
                "post_img": $('#post_img_u').val(),
            },
            success: function(response){
                console.log(response);
                if(response.code=='201'){
                    $('#editModal').modal('hide');
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

// Create
$( "#createBtn" ).click(function(e) {
    e.preventDefault();
    $.ajax({
        url: "../Database/PostCRUD/post_create.php",
        type: "POST",
        data: {
            "category": $('#category').val(), 
            "subject": $('#subject').val(), 
            "content": $('#content').val(),
            "post_img": $('#post_img').val(),
        },
        success: function(response){
            //console.log(response);
            if(response.code=='201'){
                console.log('Created Successfully');
                $('#createModal').modal('hide');
                $('#createForm').trigger("reset");
                location.reload();
            }else{
                console.log('Error');
                alert("Please Fill out all the Fields");
            }
        }
    });
});

