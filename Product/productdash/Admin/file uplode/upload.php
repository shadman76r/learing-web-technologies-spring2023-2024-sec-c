<?php 
    $src = $_FILES['myFile']['tmp_name'];
    $des = "uploadPic/".$_FILES['myFile']['name'];

    if(move_uploaded_file($src, $des)){
        header('location: ../view/fileupload.php');
        echo "Success";
    }else{
        echo "Not Successfully upload. Please Try Again";
    }

?>