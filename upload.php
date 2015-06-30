<?php
    $uploaddir = 'E:/UniServerZ/www/AjaxUpload/';
    $uploadfile = $uploaddir . basename($_FILES['myfile']['name']);

    if (move_uploaded_file($_FILES['myfile']['tmp_name'], $uploadfile)) {
        echo "File is successfully uploaded.";
    } else {
        echo "Upload failed.";
    }
?>