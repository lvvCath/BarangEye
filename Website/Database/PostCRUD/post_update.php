<?php
    /*To update a record (update.php)*/
    header('Content-Type: application/json');
    include("../db.php"); //DB connection script

    $id = $_POST['id'];
    $category = $_POST['category'];
    $subject = $_POST['subject'];
    $content = $_POST['content'];
    $post_img = $_POST['post_img'];
    
    if (empty($_POST["category"]) OR 
        empty($_POST["subject"]) OR 
        (empty($_POST["content"]) AND empty($_POST["post_img"]))
        ) {
        echo json_encode([
            'code' => '400'
        ]);
    } else {
        $stmt = $db->prepare("UPDATE post SET category = ?, subject=?, content=?, post_img = ? WHERE id = ?");
        $result = $stmt->execute([$category,$subject,$content,$post_img,$id]);
        if($result){
            echo json_encode([
                'code' => '201'
            ]);
        }else{
            echo json_encode([
                'code' => '400'
            ]);
        }
    }

?>