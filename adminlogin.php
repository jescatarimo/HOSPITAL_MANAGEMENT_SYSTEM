<?php

    session_start();
    
    include("include/header.php");

    include("include/connection.php");

    if (isset($_POST['login'])){

        $username = $_POST['Username'];
        $password = $_POST['Password'];

        $error = array();

        if(empty($username)){
            $error['admin'] = "Enter username";
        }else if(empty($password)){
            $error['admin'] = "Enter password";
        }

        if(count($error)==0){
            $query = "SELECT * FROM `admin` WHERE Username='$username' AND Password = '$password'";

            $result = mysqli_query($con,$query);

            if (mysqli_num_rows ($result) == 1){
                echo "<script>alert('You have login as an admin')</script>";

                $_SESSION['admin'] = $username;
                header("Location:admin/index.php");
                exit();
            }else{
                echo "<script>alert('Invalid username or password')</script>";
            }
        }
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login Page</title>
    </head>

    <body style="background-image: url(images/hosp-bg.webp); background-repeat: no-repeat; background-size: cover;">
        <div style="margin-top: 20px;"></div>
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 jumbotron">
                        <div class="imag">
                            <img src="images/admin login.jpg" class="col-md-12">
                        </div>
                        <form method="POST">

                            <div >

                                <?php

                                    if(isset($error['admin'])){
                                        $sh = $error['admin'];

                                        $show = "<h4 class='alert alert-danger'>$sh</h4>";
                                    }
                                    else{
                                        $show = "";
                                    }

                                    echo $show;
                                ?>
                             
                            </div>

                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="Username" class="form-control" placeholder="Enter Username" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="Password" placeholder="Enter Password" class="form-control">
                            </div>

                            <input type="submit" name="login" value="Login" class="btn btn-primary">
                        </form>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </body>
</html>