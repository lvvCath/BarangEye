<?php
/*Create API*/
    header('Content-Type: application/json');
    include("../db.php");

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
        $stmt = $db->prepare("INSERT INTO post (category,
                                                subject,
                                                content,
                                                post_img,
                                                date_time) 
                            VALUES (?, ?, ?, ?, CURRENT_TIMESTAMP)");
        $result = $stmt->execute([$category, $subject, $content, $post_img]);
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