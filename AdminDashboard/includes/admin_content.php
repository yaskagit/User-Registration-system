<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Admin Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <?php 
            if(isset($_GET['message'])){
                require('pushnotifications.php');
            }
        ?>
            <?php require('includes/analysis.php'); ?>
        <!-- /.row -->
        <!-- Main row -->
        <div class="container-fluid ml-0">

            <div class="container text-center">
            
            <div class="row justify-content-center">
            <?php 
            if(isset($_SESSION['role']) and $_SESSION['role'] == 'Admin'){
            ?>
            
            <button type="submit" class="btn btn-success m-1 p-3 w-25 "  data-toggle="modal" data-target="#addusermodal">
                <strong>Add New user</strong>
            </button>
            <button type="submit" class="btn btn-primary m-1 p-3"  data-toggle="modal" data-target="#addnewadmin">
                <strong>Add New Admin</strong>
            </button>
            <button type="submit" class="btn btn-warning m-1 p-3 w-25 "  data-toggle="modal" data-target="#changepassword">
                <strong>Change Password</strong>
            </button>
                <form  action="includes/functions.php" method="post">

              <button type="submit" name="csv" class="btn btn-danger m-1 p-3  " >
                <strong>Report As CSV</strong>
              </button>
              <button type="submit" name="backup" class="btn btn-dark m-1 p-3   " >
              <strong>Get Back Up</strong>
              </button>
              
              </form>
            <?php          
               }
               else{
                ?>
                <button type="submit" class="btn btn-success m-1 p-3 w-25 "  data-toggle="modal" data-target="#addusermodal">
                <strong>Add New user</strong>
                </button>
                <button type="submit" class="btn btn-warning m-1 p-3 w-25 "  data-toggle="modal" data-target="#changepassword">
                  <strong>Change Password</strong>
              </button>
                <?php 
               }
            ?>
            <!-- report pdf modal -->
            
                
            
            </div>

            </div>

        <div class="row">
            <div class="col-12 ">
               <?php 
               if(isset($_GET['page'])){
                $page = $_GET['page'];
                if($page == 'updateform'){
                  
                  ?>
                  <div class="row justify-content-center">
                      <div class="col-9">
                      <div class="card">
                      <div class="card-header">
                        <h3><strong>Update Users Form</strong></h3>
                      </div>
                      <div class="card-body">
                        <?php 
                          $user_id = $_GET['user_id'];
                          $select = mysqli_query($conn,"SELECT  * FROM users Where user_id = '$user_id'");
                          $row = mysqli_fetch_array($select);
                          
                         ?>
                      <form action="includes/functions.php" method="post">
                                    <div class="row">
                                    <div class="col-12">
                                <div class="form-group">
                                    
                                    <input type="text" hidden value="<?php echo $row['user_id']; ?>" name="user_id" placeholder="Enter Familyname" id="" class="form-control">
                                </div>
                            </div>
                                    <div class="col-6">
                                <div class="form-group">
                                    <label for="">Family name</label>
                                    <input type="text"value="<?php echo $row['Familyname']; ?>" name="familyname" placeholder="Enter Familyname" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Firstname</label>
                                    <input type="text"value="<?php echo $row['firstname']; ?>" placeholder="Enter Firstname" name="firstname" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Lastname</label>
                                    <input type="text" value="<?php echo $row['lastname']; ?>" placeholder="Enter Lastname" name="lastname" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Gender</label>
                                    <select name="gender" id="" class="form-control">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="number" value="<?php echo $row['phone']; ?>" placeholder="Enter Phone number" name="phone" id="" class="form-control">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">City</label>
                                    <input type="text" value="<?php echo $row['city']; ?>" placeholder="Enter Phone number" name="city" id="" class="form-control">
                                </div>
                            </div>
                          </div>
                                                                    
                            </div>
                            <div class="card-footer">
                            <button name="updateusers" class="btn btn-primary btn-block p-3">Update</button>
                            </div>
                            </form>
                        </div>
                            </div>
                        </div>
                  <?php 
                }
                else{
                  require('includes/usersData.php');                  
                }

               }else{
                
                require('includes/usersData.php');
               }
                ?>
            </div>
        </div>
        </div>
       <?php require('includes/modals.php'); ?>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  


          