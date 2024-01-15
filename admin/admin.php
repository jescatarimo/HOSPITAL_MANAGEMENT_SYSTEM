<?php

    session_start();

    

    include("../include/header.php")

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    </head>
    <body>

        <div class="container-fluid">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2" style="margin-left: -30px;">
                        <?php
                            include("sidenav.php");
                            include("../include/connection.php");
                        ?>
                    </div>
                    <div class="col-md-10">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="text-center">All admin</h5>

                                    <?php
                                        $ad = $_SESSION['admin'];
                                        $query = "SELECT * FROM `admin` WHERE 'Username'  !='$ad'";
                                        $res = mysqli_query($con,$query);

                                        $output = "
                                            <table class='table table-responsive table-bordered'>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Username</th>
                                                    <th style='width: 10%;'>Action</th>
                                                </tr>
                                        ";


                                        if(mysqli_num_rows($res) < 1 ){
                                            $output .= "<tr><td colspan='3' class='text-center'>No New Admin</td></tr>";
                                        }

                                        while($row = mysqli_fetch_array($res)){
                                            $Id = $row['Id'];
                                            $Username = $row['Username'];

                                            $output .="
                                                <tr>
                                                <td>$Id</td>
                                                <td>$Username</td>
                                                <td>
                                                    <button id='$Id' class='btn btn-danger remove'>Remove</button>
                                                </td>
                                            ";

                                        }

                                        $output .= "
                                            </tr>

                                            </table>
                                        ";

                                        echo $output;

                                    ?>

                                    

                                        
                                        

                                </div>
                                <div class="col-md-6">

                                    <?php

                                        if(isset($_POST['add'])){
                                            $Username = $_POST['Username'];
                                            $Password = $_POST['Password'];
                                            $imag = $_FILES['img']['name'];

                                            $error = array();

                                            if(empty($Username)){
                                                $error['u'] = "Enter Admin Username";
                                            }
                                            else if(empty($Password)){
                                                $error['u'] = "Enter Admin Password";
                                            }
                                            else if(empty($imag)){
                                                $error['u'] = "Add Admin Picture";
                                            }

                                            if(count($error) == 0){
                                                $q = "INSERT INTO `admin`(`Username`, `Password`, `Profile`) VALUES ('$Username','$Password','$imag',)";

                                                $result = mysqli_query($con,$q);

                                                if($result){
                                                    move_uploaded_file($_FILES['img']['tmp_name'],"img/$imag");
                                                }else{

                                                }
                                            }

                                        }

                                    ?>

                                    <h5 class="text-center">Add admin</h5>

                                    <form method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="Username" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="Password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Add admin picture</label>
                                            <input type="file" name="img" class="form-control">
                                        </div>
                                        <input type="submit" name="add" value="Add New Admin" class="btn btn-success">
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>