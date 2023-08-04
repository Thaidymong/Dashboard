<?php
    include("../connection.php")
?>
<?php
    if(isset($_POST['btn-submit-download'])){
        $title   = $_POST['txt_title'];
        $enjoy   = $_POST['txt_enjoy'];
        $watch   = $_POST['txt_watch'];

        $photo   = $_FILES['txt_photo']['name'];
        $file    = rand(1,111).'-'.$photo;
        $path    = "../download_image/".$file;

        move_uploaded_file($_FILES['txt_photo']['tmp_name'],$path);

        $sql_download  = "INSERT INTO `download`(`title`, `enjoy_title`, `enjoy_watch`, `photo`) 
                            VALUES ('$title','$enjoy','$watch','$file')";
        $download_sql  = $connect->query($sql_download);
    }

    if(isset($_POST['btn-update-download'])){
        $id       = $_POST['txt_id'];
        $title   = $_POST['txt_title'];
        $enjoy   = $_POST['txt_enjoy'];
        $watch   = $_POST['txt_watch'];

        $photo   = $_FILES['txt_photo']['name'];
        $file    = rand(1,111).'-'.$photo;
        $path    = "../download_image/".$file;

        move_uploaded_file($_FILES['txt_photo']['tmp_name'],$path);

        $download_update   = "UPDATE `download` SET `title`='$title',`enjoy_title`='$enjoy',
                                `enjoy_watch`=' $watch',`photo`='$file' WHERE id = $id";
        $update_result     = $connect->query($download_update);


    }
    if(isset($_POST['btn-delete-download'])){

        $id       = $_POST['txt_id'];
        $download_delete   = "DELETE FROM `download` WHERE id = $id";
        $result_delete     = $connect->query($download_delete);
        
    }
    
?>