<?php 
    if($_GET['message']){
        $message = $_GET['message'];
        if($message == "allfeildsareempty")
        {
            ?>
            <div class="alert alert-warning">
                <strong>All feilds are Empty</strong>
                <a href="#" type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
                
            </div>
            <?php 
        }
        elseif($message == "correctname")
        {
            ?>
            <div class="alert alert-warning">
                <strong>
                Please correct the names such as family name,
                firstname, lastname</strong>
                <a href="#" type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
                
            </div>
            <?php 
        }
        elseif($message == "exists")
        {
            ?>
            <div class="alert alert-warning">
                <strong>
            This user is already registered    
            </strong>
                <a href="#" type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
                
            </div>
            <?php 
        }
        elseif($message == "Successregidtered")
        {
            ?>
            <div class="alert alert-success">
                <strong>
            Successfuly registered
            </strong>
                <a href="#" type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
                
            </div>
            <?php 
        }
        elseif($message == "SuccessLogin")
        {
            ?>
            <div class="alert alert-success">
              <strong>
              Welcome
              <?php 
              //message removing code in here...
                echo $_SESSION['role'];
              ?>
              You are successfuly Loged !
              </strong>
            </div>
            <?php 
        }
        elseif($message == "getedbackup")
        {
            ?>
            <div class="alert alert-success">
              <strong>
              You have successfuly taken a backup of your database See your Storage Folder
              </strong>
            </div>
            <?php 
        }
        elseif($message == "passworderror")
        {
            ?>
            <div class="alert alert-warning">
              <strong>
              Password Error
              </strong>
            </div>
            <?php 
        }
        elseif($message == "incorrectfullname")
        {
            ?>
            <div class="alert alert-warning">
              <strong>
              Incorrect Fullname
              </strong>
            </div>
            <?php 
        }
        elseif($message == "adminexists")
        {
            ?>
            <div class="alert alert-warning">
              <strong>
              This user already Exist
              </strong>
            </div>
            <?php 
        }
        elseif($message == "Successreg")
        {
            ?>
            <div class="alert alert-warning">
              <strong>
              Successfuly Signup
              </strong>
            </div>
            <?php 
        }
        elseif($message == "Pleasefillallfields")
        {
            ?>
            <div class="alert alert-warning">
              <strong>
              Please fill all fields
              </strong>
            </div>
            <?php         
    }
    elseif($message == "Successupdate")
        {
            ?>
            <div class="alert alert-warning">
              <strong>
              Successfuly Updated
              </strong>
            </div>
            <?php 
        }
    elseif($message == "deleted")
        {
            ?>
            <div class="alert alert-warning">
              <strong>
              Successfuly Deleted 
              </strong>
            </div>
            <?php 
        }
    }
?>