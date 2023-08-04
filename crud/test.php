<?php
    include("../connection.php")
?>
<?php
    if(isset($_POST['btn-submit-test'])){
        $name     = $_POST['txt_name'];
        $title    = $_POST['txt_title'];
        $romance  = $_POST['txt_romance'];
        $drama    = $_POST['txt_drama'];

        $banner       = $_FILES['txt_banner']['name'];
        $file         = rand(1,111).'-'.$banner;
        $path         = "../banner_image/".$file;
        move_uploaded_file($_FILES['txt_banner']['tmp_name'],$path);
    }

    $sql_banner       = "INSERT INTO `tb_test`(`name`, `title`, `romance`, `drama`, `banner`)
         VALUES ($name,$title,$romance,$drama,$file)";
    $banner_result    = $connect->query($sql_banner);

?>