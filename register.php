<?php
    include("../Dashboard/connection.php")
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@800&family=Kalam:wght@300;400;700&family=Kanit:ital,wght@0,400;0,500;0,600;0,800;1,400;1,600;1,700&family=Kumbh+Sans:wght@300;500;600;800;900&family=Lato:ital,wght@0,300;0,400;1,300&family=Montserrat:wght@300;400;500;600;800;900&family=Nunito:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,600;1,800;1,900&family=Raleway:wght@300;600;700;900&family=Roboto+Condensed:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,100;0,900;1,300&family=Rubik+Distressed&family=Secular+One&display=swap" rel="stylesheet">
    <style>
        .container{
            width: 600px;
            margin: 0 auto;
        }
        .container .test{
            text-align: center;
            background: linear-gradient(gold,pink);
            font-family: 'Roboto', sans-serif;
            border-radius: 6px;
        }
        body{
            background-image: url(../image/tech.jpg);
            /* background-image: url(../image/wall\ \(1\).jpg); */
            background-position: center;
            background-size: cover;
        }
        .btn{
            display: flex;
            justify-content: end;
        }
        label{
            color: white;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="container  p-2 mt-3 text-white">
        <div class="test p-2"><h1>Register Form</h1></div>
    </div>
    <div class="container mt-4">
        <form action="" method="post">
            <div class="form-group">
                <label for="">UserName</label></label>
                <input type="text" name="username" class="form-control" placeholder="username">
            </div>
            <div class="form-group">
                <label for="">Gender</label></label>
                <input type="text" name="gender" class="form-control" placeholder="male">
            </div>
            <div class="form-group">
                <label for="">Email</label></label>
                <input type="text" name="email" class="form-control" placeholder="thaidymong@gmail.com">
            </div>
            <div class="form-group">
                <label for="">Password</label></label>
                <input type="password" name="password" class="form-control" placeholder=".......">
            </div>
            <div class="form-group">
                <label for="">Address</label></label>
                <input type="text" name="address" class="form-control" placeholder="Phnom Penh">
            </div>
            <div class="btn">
                <input type="submit" value="Cancel" class="btn btn-danger px-3 mr-2 ">
                <input type="submit" name="btn-register" value="Submit" class="btn btn-success px-3 ">
            </div>
        </form>
</body>
<?php
    if(isset($_POST['btn-register'])){
        $name       = $_POST['username'];
        $gender     = $_POST['gender'];
        $email      = $_POST['email'];
        $password   = $_POST['password'];
        $address    = $_POST['address'];

        $register_sql = "INSERT INTO `tb_register`(`username`, `gender`, `email`, `password`, `address`) 
        VALUES ('$name','$gender','$email','$password','$address')";

        $result       = $connect->query($register_sql);
    }
?>
</html>