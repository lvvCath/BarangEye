
// Read
Load();
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

