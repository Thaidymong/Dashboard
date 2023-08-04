<?php
    include("../connection.php")
?>
<?php
    if(isset($_POST['btn-submit-upcoming'])){
        $title     = $_POST['txt_title'];
        $date      = $_POST['txt_date'];
        $hd        = $_POST['txt_hd'];
        $hour      = $_POST['txt_hour'];
        $star      = $_POST['txt_star'];

        $photo     = $_FILES['txt_photo']['name'];
        $file      = rand(1,111).'-'.$photo;
        $path      = "../upcoming_image/".$file;
        move_uploaded_file($_FILES['txt_photo']['tmp_name'],$path);

        $upcoming  = "INSERT INTO `tb_upcoming`(`title`, `date`, `HD`, `hour`, `star`, `photo`) 
                    VALUES ('$title','$date','$hd','$hour','$star','$file')";
        $result_up = $connect->query($upcoming);   
    }
    
    if(isset($_POST['btn-edit-upcoming'])){
        $id        = $_POST['txt_id'];
        $title     = $_POST['txt_title'];
        $date      = $_POST['txt_date'];
        $hd        = $_POST['txt_hd'];
        $hour      = $_POST['txt_hour'];
        $star      = $_POST['txt_star'];

        $photo     = $_FILES['txt_photo']['name'];
        $file      = rand(1,111).'-'.$photo;
        $path      = "../upcoming_image/".$file;
        move_uploaded_file($_FILES['txt_photo']['tmp_name'],$path);

        $up_edit   = "UPDATE `tb_upcoming` SET `title`='$title',`date`='$date',`HD`='$hd',
                    `hour`='$hour',`star`='$star',`photo`='$file' WHERE id = $id";
        $up_result = $connect->query($up_edit);
        
    }
    if(isset($_POST['btn-delete-upcoming'])){
        $id        = $_POST['txt_id'];
        $up_delete = "DELETE FROM `tb_upcoming` WHERE id = $id";
        $res_up    = $connect->query($up_delete);
        
    }
?>