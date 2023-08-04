<?php
    include("../connection.php")
?>
<?php

if (isset($_POST['btn-topRate_worldBest'])) {
    $title     = $_POST['txt_title'];
    $date      = $_POST['txt_date'];
    $hd        = $_POST['txt_hd'];
    $hour      = $_POST['txt_hour'];
    $star      = $_POST['txt_star'];

    $photo     = $_FILES['txt_photo']['name'];
    $file      = rand(1, 111) . '-' . $photo;
    $path      = "../topRate_worldBest_image/" . $file;
    move_uploaded_file($_FILES['txt_photo']['tmp_name'], $path);

    $type      = $_POST['txt_types'];

    $sql_top_world  = "INSERT INTO `tb_toprate_and_worldbest`(`title`, `date`, `HD`, `hour`, `star`, `photo`, `tpye`)
                     VALUES ('$title','$date','$hd','$hour','$star','$file','$type')";
    $res_top_world  = $connect->query($sql_top_world);
   
}
if(isset($_POST['btn-edit-top_world'])){
    $id        = $_POST['txt_id'];
    $title     = $_POST['txt_title'];
    $date      = $_POST['txt_date'];
    $hd        = $_POST['txt_hd'];
    $hour      = $_POST['txt_hour'];
    $star      = $_POST['txt_star'];

    $photo     = $_FILES['txt_photo']['name'];
    $file      = rand(1, 111) . '-' . $photo;
    $path      = "../topRate_worldBest_image/" . $file;
    move_uploaded_file($_FILES['txt_photo']['tmp_name'], $path);

    $type      = $_POST['txt_types'];

    $top_world_edit        = "UPDATE `tb_toprate_and_worldbest` SET `title`='$title',`date`='$date',`HD`='$hd',`hour`='$hour',`star`='$star',
                                      `photo`='$file',`tpye`='$type' WHERE id = $id";
    $res_top_world_edit    = $connect->query($top_world_edit);
  

}
if(isset($_POST['btn-topworld'])){
    $id             = $_POST['txt_id'];
    $sql_top_world  = "DELETE FROM `tb_toprate_and_worldbest` WHERE id = $id";
    $res_top_world  = $connect->query($sql_top_world);
}

?>