<?php
    include("../Dashboard/connection.php")
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{
            background-image: url(../image/ba.jpg);
            background-position: center;
            background-size: cover;
        }
        .box-form{
            width: 350px;
            height: 450px;
            margin: 0 auto;
            margin-top: 60px;
            border-radius: 10px;
            background-color: #658C5A;
        }
        .box-login{
            width: 95%;
        }
        .end{
            display:flex;
            justify-content: end;
        }
        .sign{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .sign i{
            color: #3D66C0;
            font-size: 50px;
        }
        .text{
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }
        .b{
            font-size: 15px;
            color: black;
        }
    </style>

</head>
<body>
<div class="box-form p-4">
        <div class="box-login">
            <div class="sign"><i class="fa-solid fa-user"></i></div>
            <h4 class="text-center text-white pb-2 mt-4"> Admin Login </h4>
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" name="name" class="form-control mt-3" placeholder="username">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control mt-3" placeholder="password">
                </div>
                    <p class="text">Forget Password?</p>
                    <p class="text"><a href="./register.php" class="b">Create new Account</a></p>
                <div class="form-group">
                   <input type="submit" name="btn-login" value="Login" class="btn btn-warning text-white mt-3 form-control">
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<?php
    session_start();
    if (isset($_POST['btn-login'])) {
        $username   = $_POST['name'];
        $password   = $_POST['password'];

        $sql_list   = "SELECT * FROM `tb_register` WHERE username = '$username' AND password = '$password' ";
        $result     = $connect->query($sql_list);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $_SESSION['FullName'] = $row['username'];
                $_SESSION['Password'] = $row['password'];
                header("location: dashboard.php");
            }
        }
    }
?>