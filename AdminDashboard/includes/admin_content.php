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
              <li class="breadcrumb-item active">Dashboard v1</li>
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
        <div class="row">
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3>
                  <?php 
                require('includes/config.php');
                $query = mysqli_query($conn,"SELECT * FROM users Where city = 'hargeisa'");
                $count = mysqli_num_rows($query);
                if($count > 0){
                  echo $count;
                }
                  ?>
                </h3>

                <p>Hargeisa Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-location"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>
                <h3>
                  <?php 
                require('includes/config.php');
                $query = mysqli_query($conn,"SELECT * FROM users Where city = 'jigjiga'");
                $count = mysqli_num_rows($query);
                if($count > 0){
                  echo $count;
                }
                  ?>
                </h3>
              </h3>

                <p>Jigjiga Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3>
                  <?php 
                require('includes/config.php');
                $query = mysqli_query($conn,"SELECT * FROM users Where city = 'garowe'");
                $count = mysqli_num_rows($query);
                if($count > 0){
                  echo $count;
                }
                  ?>
                </h3>

                <p>Garowe users</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <h3>
                  <?php 
                require('includes/config.php');
                $query = mysqli_query($conn,"SELECT * FROM users Where city = 'mogadisho'");
                $count = mysqli_num_rows($query);
                if($count > 0){
                  echo $count;
                }
                  ?>
                </h3>

                <p>Mogdisho Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div class="inner">
              <h3>
                  <?php 
                require('includes/config.php');
                $query = mysqli_query($conn,"SELECT * FROM users");
                $count = mysqli_num_rows($query);
                if($count > 0){
                  echo $count;
                }
                  ?>
                </h3>

                <p>Total Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>
                  <?php 
                require('includes/config.php');
                $query = mysqli_query($conn,"SELECT * FROM adminlogin");
                $count = mysqli_num_rows($query);
                if($count > 0){
                  echo $count;
                }
                  ?>
                </h3>

                <p>Total of System Admins</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
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
                <form  action="includes/functions.php" method="post">

              <button type="submit" name="csv" class="btn btn-success m-1 p-3  " >
                <strong>Report As CSV</strong>
              </button>
              <button type="submit" name="backup" class="btn btn-success m-1 p-3   " >
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
       <div class="modal fade" id="addusermodal">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <?php require('entryform.php'); ?>
                </div>
            </div>
        </div>
       </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>