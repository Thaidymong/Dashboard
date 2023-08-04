<?php
    include("../connection.php")
?>
<?php
    include("../crud/download.php")
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="../dashborad.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap4.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
        .btn{
            display: flex;
            justify-content: end;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <div class="body">
            <div class="body-left">
                <div class="company-name">
                    <h3 class="p-3">PAUL ROBERTS</h3>
                </div>
                <div class="image">
                    <img src="../front/image/new.jpg" alt="">
                </div>
                <div class="admin">
                    <h4>Thai Dymong</h4>
                </div>
                <div class="box-center">
                    <div class="item">
                        <div class="box1 ">
                            <div class="icon text-info" ><i class="fa-solid fa-gauge"></i></div>
                            <div class="name">
                                <p><a href="./dashboard.php" class="text-gray">Dashboard</a></p>
                            </div>
                        </div>
                        <div class="box1 ">
                            <div class="icon text-info" ><i class="fa-solid fa-list-ul"></i></div>
                            <div class="name  active">
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
                                    <p><a href="../model/banner.php">Banner page</a></p>
                                </div>
                            </div>
                            <div class="box1" >
                                <div class="icon text-info" ><i class="fas fa-file-word"></i></div>
                                <div class="name">
                                <p><a href="../model/upcoming.php">Upcoming  page </a></p>

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
                                <p><a href="../model/topRate_worldBest.php">Top Rate and World Best</a></p>
                                </div>
                            </div>
                            <div class="box1" >
                                <div class="icon text-info" ><i class="fas fa-file-word"></i></div>
                                <div class="name">
                                <p><a href="./download.php">Download</a></p>

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
                                <p><a href="../register.php" class="text-gray">Register</a></p>
                            </div>
                        </div>
                        <div class="box1 ">
                            <div class="icon text-info" ><i class="fas fa-sign-out-alt"></i></div>
                            <div class="name">
                                <p ><a href="../logout.php" class="text-gray">Logout</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="body-right">
            <div class="space">
                    <div class="bars"><i class="fa-solid fa-bars-staggered"></i></div>
                    <div class="text mt-3"><p>Register List</p></div>
                    <div class="bars-right">
                        <i class="fa-brands fa-github"></i>
                        <div>
                            <i class="fa-solid fa-envelope"><p>2</p></i> 
                        </div>
                        <div>
                            <i class="fa-solid fa-bell"><p>5</p></i> 
                        </div>
                        <img src="../front/image/new.jpg" alt="" style="width: 30px; height: 30px;border-radius: 50%; ">
                        <i class="fa-solid fa-ellipsis-vertical" style="padding-left:15px;"></i>
                    </div>
            </div>
                <div class="item" >
                        <!-- Insert Data -->
                        <button type="button" style="margin-left:50px; margin-top:50px; background-color: gold;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                            Insert Download
                        </button>

                        <!-- Modal Insert-->
                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" >
                            <div class="modal-dialog" role="document">
                                <div class="modal-content text-white" style="background-image: url(../front/image/banner.jpg);">
                                    <div class="modal-header">
                                        <h5 class="modal-title " id="exampleModalLongTitle" >Insert Download</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="">Title</label>
                                                <input type="text" name="txt_title" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Enjoy Title</label>
                                                <input type="text" name="txt_enjoy" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Watch Title</label>
                                                <input type="text" name="txt_watch" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Photo</label>
                                                <input type="file" name="txt_photo" class="form-control">
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                <button type="submit" name="btn-submit-download" class="btn btn-success">Insert</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>



                        <div class="text-white" style="margin-left: 50px; width: 1100px;padding-top:30px;">
                        <table id="example" class="container w-100  table-striped table-dark "  >
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Enjoy_title</th>
                                    <th>Watch Title</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $download_file    = "SELECT * FROM `download`";
                                $download_res     = $connect->query($download_file);
                                if($download_res->num_rows>0){
                                    $index = 1;
                                    while($row = $download_res->fetch_assoc()){
                                
                                ?>
                                    <tr>
                                        <td><?= $index; ?></td>
                                        <td><?=$row['title']?></td>
                                        <td><?=$row['enjoy_title']?></td>
                                        <td><?=$row['enjoy_watch']?></td>
                                        <td><img style="width: 35px;height: 35px;"src="../download_image/<?=$row['photo']?>" alt=""></td>
                                        <td>
                                            <button  type="submit" data-toggle="modal" data-target="#updateModel<?=$row['id']?>"><i class="fa-solid fa-pen-to-square text-info p-2"></i></button>
                                            <button  type="submit" data-toggle="modal" data-target="#deleteModel<?=$row['id']?>"><i class="fa-solid fa-trash text-danger p-2"></i></button>
                                        </td>
                                    </tr>
                                    
                                     <!-- Modal Edit-->
                                     <div class="modal fade" id="updateModel<?=$row['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" >
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content text-white" style="background-color:darkseagreen;">
                                                <div class="modal-header">
                                                    <h5 class="modal-title " id="exampleModalLongTitle" >Edit Upcoming</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <form action="" method="post" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <input type="hidden" name="txt_id" class="form-control" value="<?=$row['id']?>">
                                                        <label for="">Title</label>
                                                        <input type="text" name="txt_title" class="form-control" value="<?=$row['title']?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Enjoy Title</label>
                                                        <input type="text" name="txt_enjoy" class="form-control" value="<?=$row['enjoy_title']?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Watch Title</label>
                                                        <input type="text" name="txt_watch" class="form-control" value="<?=$row['enjoy_watch']?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Photo</label>
                                                        <input type="file" name="txt_photo" class="form-control">
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                        <button type="submit" name="btn-update-download" class="btn btn-success">UPDATE</button>
                                                    </div>
                                                </form>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                     <!-- Modal Delete-->
                                     <div class="modal fade" id="deleteModel<?=$row['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" >
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content text-white" style="background-color: black;">
                                                <div class="modal-header">
                                                    <h5 class="modal-title " id="exampleModalLongTitle" >Top Rate and World Best</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="" method="post" enctype="multipart/form-data">
                                                        <p>Are you sure to delete this download?</p>
                                                        <div class="form-group">
                                                            <input type="hidden" name="txt_id" class="form-control" value="<?=$row['id']?>">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                            <button type="submit" name="btn-delete-download" class="btn btn-danger">Delete</button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                <?php  $index++; }} ?>
                            </tbody>
                        </table>

                </div>

                      
                </div>
            </div>
        </div>
    </div>
</body>
<script>
        //data table bootstrap/js
        $(document).ready(function() {
            $('#example').DataTable();
         });
        
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
