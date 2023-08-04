<?php
    include("../connection.php")
?>
<?php
    if(isset($_POST['btn-submit-banner'])){
        $name         = $_POST['txt_name'];
        $title        = $_POST['txt_title'];
        $romance      = $_POST['txt_romance'];
        $drama        = $_POST['txt_drama'];
        $date         = $_POST['txt_date'];
        $hour         = $_POST['txt_hour'];

        $banner       = $_FILES['txt_banner']['name'];
        $file         = rand(1,111).'-'.$banner;
        $path         = "../banner_image/".$file;
        move_uploaded_file($_FILES['txt_banner']['tmp_name'],$path);

        $sql_banner   = "INSERT INTO `tb_banner`(`name`, `title`, `romance`, `drama`, `date`, `hour`, `banner`) 
                        VALUES ('$name','$title','$romance','$drama','$date','$hour','$file')";
        $result       = $connect->query($sql_banner);

    }
    if(isset($_POST['btn-edit-banner'])){
        $id           = $_POST['txt_id'];
        $name         = $_POST['txt_name'];
        $title        = $_POST['txt_title'];
        $romance      = $_POST['txt_romance'];
        $drama        = $_POST['txt_drama'];
        $date         = $_POST['txt_date'];
        $hour         = $_POST['txt_hour'];

        $banner       = $_FILES['txt_banner']['name'];
        $file         = rand(1,111).'-'.$banner;
        $path         = "../banner_image/".$file;
        move_uploaded_file($_FILES['txt_banner']['tmp_name'],$path);

        $banner_edit  = "UPDATE `tb_banner` SET `name`='$name',`title`='$title',`romance`='$romance',
                        `drama`='$drama',`date`='$date',`hour`='$hour',`banner`='$file' WHERE id = $id";
        $result_edit  = $connect->query($banner_edit);
    }

    if(isset($_POST['btn-delete-banner'])){
        $id           = $_POST['txt_id'];
        $banner_delete= "DELETE FROM `tb_banner` WHERE id = $id";
        $result_delete= $connect->query($banner_delete);

    }

?>