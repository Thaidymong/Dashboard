<?php
    session_start();
        if (!($_SESSION['FullName'] && $_SESSION['Password'])) {
            header("location: Login.php");
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="./dashborad.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@800&family=Kalam:wght@300;400;700&family=Kanit:ital,wght@0,400;0,500;0,600;0,800;1,400;1,600;1,700&family=Kumbh+Sans:wght@300;500;600;800;900&family=Lato:ital,wght@0,300;0,400;1,300&family=Montserrat:wght@300;400;500;600;800;900&family=Nunito:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,600;1,800;1,900&family=Raleway:wght@300;600;700;900&family=Roboto+Condensed:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,100;0,900;1,300&family=Rubik+Distressed&family=Secular+One&display=swap" rel="stylesheet">
</head>
<body>
    <div class="dashboard">
        <div class="body">
            <div class="body-left">
                <div class="company-name">
                    <h3 class="p-3">PAUL ROBERTS</h3>
                </div>
                <div class="image">
                    <img src="../image/new.jpg" alt="">
                </div>
                <div class="admin">
                    <h4>Thai Dymong</h4>
                </div>
                <div class="box-center">
                    <div class="item">
                        <div class="box1 ">
                            <div class="icon text-info" ><i class="fa-solid fa-gauge"></i></div>
                            <div class="name active">
                                <p><a href="./dashboard.php" class="text-gray">Dashboard</a></p>
                            </div>
                        </div>
                        <div class="box1 ">
                            <div class="icon text-info" ><i class="fa-solid fa-list-ul"></i></div>
                            <div class="name">
                                <p><a href="./list_register.php" class="text-gray">Register List</a></p>
                            </div>
                        </div>

                        <div class="box1" id="slide-down1">
                            <div class="icon text-info" ><i class="fa-brands fa-page4"></i></div>
                            <div class="name">
                                <p>Pages<i class="fa-solid fa-sort-down" style="padding-left: 5px;font-size:13px;margin-top:-5px;"></i></p>
                            </div>
                        </div>
                        <div class="box-slide-pages">
                            <div class="box1" >
                                <div class="icon text-info" ><i class="fas fa-file-word"></i></div>
                                <div class="name">
                                    <p><a href="./model/banner.php">Banner page</a></p>
                                </div>
                            </div>
                            <div class="box1" >
                                <div class="icon text-info" ><i class="fas fa-file-word"></i></div>
                                <div class="name">
                                    <p><a href="./model/upcoming.php">Upcoming  page </a></p>
                                </div>
                            </div>
                            <div class="box1" >
                                <div class="icon text-info" ><i class="fas fa-file-word"></i></div>
                                <div class="name">
                                <p><a href="../model/download.php">Download</a></p>
                                </div>
                            </div>
                            <div class="box1" >
                                <div class="icon text-info" ><i class="fas fa-file-word"></i></div>
                                <div class="name">
                                    <p><a href="./model/topRate_worldBest.php">Top Rate and World Best</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="box1" id="slide-down2">
                            <div class="icon text-info" ><i class="fas fa-user-circle"></i></div>
                                <div class="name">
                                    <p>User<i class="fa-solid fa-sort-down" style="padding-left: 5px;font-size:13px;margin-top:-5px;"></i></p>
                                </div>
                        </div>

                        <div class="box-slide-users">
                            <div class="box1" >
                                <div class="icon text-info" ><i class="fas fa-file-word"></i></div>
                                <div class="name">
                                    <p><a href="">User 1</a></p>
                                </div>
                            </div>
                            <div class="box1" >
                                <div class="icon text-info" ><i class="fas fa-file-word"></i></div>
                                <div class="name">
                                    <p><a href="">User 2</a></p>
                                </div>
                            </div>
                            <div class="box1" >
                                <div class="icon text-info" ><i class="fas fa-file-word"></i></div>
                                <div class="name">
                                    <p><a href="">User 3</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="box1 ">
                            <div class="icon text-info" ><i class="fas fa-file-pdf"></i></div>
                            <div class="name">
                                <p>Reviews<a href="" class="text-gray"></a></p>
                            </div>
                        </div>
                        <div class="box1 ">
                            <div class="icon text-info" ><i class="fa-solid fa-right-to-bracket"></i></div>
                            <div class="name">
                                <p><a href="./register.php" class="text-gray">Register</a></p>
                            </div>
                        </div>
                        <div class="box1 ">
                            <div class="icon text-info" ><i class="fas fa-sign-out-alt"></i></div>
                            <div class="name">
                                <p ><a href="./logout.php" class="text-gray">Logout</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="body-right">
                <div class="space">
                    <div class="bars"><i class="fa-solid fa-bars-staggered"></i></div>
                    <div class="text mt-3"><p>Dashborad</p></div>
                    <div class="bars-right">
                        <i class="fa-brands fa-github"></i>
                        <div>
                            <i class="fa-solid fa-envelope"><p>2</p></i> 
                        </div>
                        <div>
                            <i class="fa-solid fa-bell"><p>5</p></i> 
                        </div>
                        <img src="../image/new.jpg" alt="" style="width: 30px; height: 30px;border-radius: 50%; ">
                        <i class="fa-solid fa-ellipsis-vertical" style="padding-left:15px;"></i>
                    </div>
                </div>
               
                <div class="item">
                    <!-- white here -->
                </div>
            </div>
        </div>
    </div>
</body>
<script>
        
        $(document).ready(function(){
            $("#slide-down1").click(function() {
                $(".box-slide-pages").toggle();
            })
            $("#slide-down2").click(function() {
                $(".box-slide-users").toggle();
            })
        })

</script>
</html>