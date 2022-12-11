<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=., initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="files/css/bootstrap.min.css">
</head>
<style>
    body{
        background: rgb(0,0,0,0)url('back.jpg');
        background-blend-mode: darken;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
</style>
<body>
<div class="container mt-3">
    <div class="container bg-light p-3 m-2 text-center">
    <h1 class="">
        <strong>User Registration System</strong>
    </h1>

    </div>
    <div class="row justify-content-center">
        <div class="col-5 ">
            <div class="card p-3">
                <div class="card-header">
                    <h3 class="card-title"><b>Login</b></h3>
                    <?php 
                        if(isset($_GET['message']) and $_GET['message'] == 'incorectusernameorpassword')
                        {
                            ?>
                            <div class="alert alert-warning">
                              <strong>
                              Incorrect Username And Password
                              </strong>
                            </div>
                            <?php 
                        }
                     ?>
                </div>
                <div class="card-body">
                    <form action="AdminDashboard/includes/functions.php" method="post">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label><strong>Username</strong></label>
                                    <input type="text" class="form-control p-3" id="name" name="username">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label><strong>Password</strong></label>
                                    <input type="password" class="form-control p-3" id="name" name="password">
                                </div>
                            </div>
                        </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="Login" class="btn btn-primary btn-block p-3">
                        <strong>Login</strong>
                    </button>
                </div>
            </form>
            </div>
        </div>
        <div class="col-7">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><b>Signup</b></h3>
                    <?php 
                        if(isset($_GET['message'])){
                            require('AdminDashboard/includes/pushnotifications.php');
                        }
                    ?>
                </div>
                <div class="card-body">
                    <form action="AdminDashboard/includes/functions.php" method="post">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label><strong>Fullname</strong></label>
                                    <input type="text" placeholder="Enter your Fullname" class="form-control " id="fullname" name="fullname">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label><strong>Username</strong></label>
                                    <input type="text" placeholder="Enter your username" class="form-control " id="username" name="username">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label><strong>Password</strong></label>
                                    <input type="password" placeholder="Enter Your password" class="form-control " id="password" name="password">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label><strong>Confirm password</strong></label>
                                    <input type="password" placeholder="Confirm Password" class="form-control " id="cpassword" name="cpassword">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label><strong>User Role</strong></label>
                                    <select class="form-control "   name="role" id="">
                                        <option value="no">Choose Role</option>
                                        <option value="Admin">Admin</option>
                                        <option value="editor">Editor</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="signup" class="btn btn-primary btn-block p-3">
                        <strong>Signup</strong>
                    </button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
    <?php require('AdminDashboard/includes/scripts.php'); ?>

</body>
</html>
        



  