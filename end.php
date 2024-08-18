<?php   
    $target_dir="uploads/";
    $target_path=$target_dir.$_FILES['file']['name'];
    $extension=strtolower(pathinfo($target_path,PATHINFO_EXTENSION));
    $uploadto=1;
    if(file_exists($target_path)){
        echo "Sorry!The recommended file is already existed.";
        $uploadto=0;
    }
    if($extension!='jpeg'&& $extension!='png' && $extension!='jpg'){
        echo "Sorry!Only jpeg,png,jpg files are allowed<br>";
        $uploadto=0;
    }
    if($uploadto==0){
        echo "Sorry!Can't upload your file<br>Visit again...";
    }
    else{
        if(move_uploaded_file($_FILES['file']['tmp_name'],$target_path)){
            echo "Thank you!<br>Your file is Successfully Uploaded<br>Visit again...";
        }
        else{
            echo "Sorry!There something wrong while uploading.Try Again...";
        }
    }
?>
