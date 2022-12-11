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
                $query = mysqli_query($conn,"SELECT * FROM users Where city = 'Garoowe'");
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
        