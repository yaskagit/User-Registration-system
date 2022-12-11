<?php
session_start();
require("config.php");
    if(isset($_POST['submit'])){
        $familyname = mysqli_real_escape_string($conn,$_POST['familyname']);
        $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
        $gender = mysqli_real_escape_string($conn,$_POST['gender']);
        $phone = mysqli_real_escape_string($conn,$_POST['phone']);
        $city = mysqli_real_escape_string($conn,$_POST['city']);
        $dob = mysqli_real_escape_string($conn,$_POST['dob']);
        $occupation = mysqli_real_escape_string($conn,$_POST['occupation']);
        $address = mysqli_real_escape_string($conn,$_POST['address']);
        
        if(empty($familyname) || empty($firstname) || empty($lastname)
         || empty($gender) || empty($phone) || empty($city) || empty($dob) 
         || empty($occupation) || empty($address))
         {
            header("Location:../?message=allfeildsareempty");
         }
         else{
            if (!preg_match('/^[a-zA-Z0-9 ]*$/', $familyname) 
                or !preg_match('/^[a-zA-Z0-9 ]*$/', $firstname) 
                or !preg_match('/^[a-zA-Z0-9 ]*$/', $lastname)){
                header("Location:../?message=correctname");

            }
            else{
                $fetch = "SELECT * FROM users WHERE familyname = '$familyname' 
                                    and firstname = '$firstname' 
                                    and lastname='$lastname' 
                                    and phone='$phone'";
                $result = mysqli_query($conn,$fetch);
                $count = mysqli_num_rows($result);
                if($count > 0){
                    header("Location:../?message=exists");
                }else{
                    $insertion = mysqli_query($conn,"INSERT INTO users(Familyname, firstname, lastname, gender, phone, city, dob, occupation, address) 
                    VALUES('$familyname','$firstname','$lastname','$gender','$phone','$city','$dob','$occupation','$address')");
                    if($insertion){
                        header("Location:../?message=Successregidtered");
                    }
                    else{
                        header("Location:../?message=sqlerorr");
                    }

                }              

            }
            

         }
    }
    if(isset($_POST['signup'])){
        $fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $cpassword = mysqli_real_escape_string($conn,$_POST['cpassword']);
        
        if(empty($fullname) || empty($username) || empty($password) || empty($cpassword) ){
            header("Location:../../?message=Pleasefillallfields");


        }
        else{
            if($password != $cpassword){
                header("Location:../../?message=passworderror");
            }
            else{
                if(!preg_match('/^[a-zA-Z0-9 ]*$/', $fullname)){
                header("Location:../../?message=incorrectfullname");
            }
            else{
                $fetchadmins = mysqli_query($conn,"SELECT * FROM adminlogin WHERE admin_name = '$fullname' and username = '$username'");
                $countadmins = mysqli_num_rows($fetchadmins);
                if($countadmins > 0){
                    header("Location:../?message=adminexists");
                }
                else{
                    $passwordHash = base64_encode($password);
                    $userrole = "editor";
                    $insert = mysqli_query($conn,"INSERT INTO adminlogin(admin_name, username, password,role) 
                    VALUES('$fullname','$username','$passwordHash','$userrole')");
                    if($insert){
                        header("Location:../../?message=Successreg");
                }
            }
        }
            }
        }
    }
    if(isset($_POST['signupadmin'])){
        $fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $cpassword = mysqli_real_escape_string($conn,$_POST['cpassword']);
        $role = mysqli_real_escape_string($conn,$_POST['role']);
        
        if(empty($fullname) || empty($username) || empty($password) || empty($cpassword) || empty($role)){
            header("Location:../?message=Pleasefillallfields");


        }
        else{
            if($password != $cpassword){
                header("Location:../?message=passworderror");
            }
            else{
                if(!preg_match('/^[a-zA-Z0-9 ]*$/', $fullname)){
                header("Location:../?message=incorrectfullname");
            }
            else{
                $fetchadmins = mysqli_query($conn,"SELECT * FROM adminlogin WHERE admin_name = '$fullname' and username = '$username'");
                $countadmins = mysqli_num_rows($fetchadmins);
                if($countadmins > 0){
                    header("Location:../?message=adminexists");
                }
                else{
                    $passwordHash = base64_encode($password);
                    $insert = mysqli_query($conn,"INSERT INTO adminlogin(admin_name, username, password, role) 
                    VALUES('$fullname','$username','$passwordHash','$role')");
                    if($insert){
                        header("Location:../?message=Successreg");
                }
            }
        }
            }
        }
    }
    if(isset($_POST['Login'])){
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        if(empty($username) || empty($password)){
            echo "Please fill all fields";
        }
        else{
            $passwordDehash = base64_encode($password);
            $query = mysqli_query($conn,"SELECT * FROM adminlogin WHERE username = '$username' and password = '$passwordDehash'");
            $count = mysqli_num_rows($query);
            $fetch = mysqli_fetch_assoc($query);
            if($count > 0){

            $_SESSION['role'] = $fetch['role'];
            if($_SESSION['role'] == 'Admin'){
                header("Location:../?message=SuccessLogin");
            }
            else{
                header("Location:../?message=SuccessLogin");
            }
                
            }
            else{
                header("Location:404page.php?message=incorectusernameorpassword");
            }
        }
    }


    if (isset($_POST['csv'])) {
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=UsersReport.csv');
        $output = fopen("php://output", 'w');
        fputcsv($output, array('user_id', 'Familyname', 'firstname', 'lastname', 'gender', 'phone', 'city', 'dob', 'occupation','address'));
    
        $query = "SELECT * FROM users order by user_id";
        $resulty = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($resulty)) {
            fputcsv($output, $row);
        }
        fclose($output);
    }

    if(isset($_POST['backup'])){
        require('../../Mysqldump.php');
        $dump = new Ifsnop\Mysqldump\Mysqldump('mysql:host=localhost;dbname=userregistration', 'root', '');
        $date = date('Y-m-d');
        $rand = rand(10000,99999);
        $dump->start('../../storage/'.$date.$rand.'db.sql');
        header('Location:../index.php?message=getedbackup');
        
       }
       if(isset($_POST['updateusers'])){
        $user_id = mysqli_real_escape_string($conn,$_POST['user_id']);
        $familyname = mysqli_real_escape_string($conn,$_POST['familyname']);
        $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
        $gender = mysqli_real_escape_string($conn,$_POST['gender']);
        $phone = mysqli_real_escape_string($conn,$_POST['phone']);
        $city = mysqli_real_escape_string($conn,$_POST['city']);

        if(empty($familyname) || empty($firstname) || empty($lastname)
         || empty($gender) || empty($phone) || empty($city)){
            header("Location:../index.php?message=emptyupdatefeilds");
         }
         else{
            $update = mysqli_query($conn,"UPDATE users SET Familyname = '$familyname', firstname = '$firstname', lastname = '$lastname', gender = '$gender', phone = '$phone',city='$city'WHERE user_id = '$user_id' ");
            if($update){
                header("Location:../index.php?message=Successupdate");
            }
            else{
                header("Location:../index.php?message=incorectusernameorpassword");
            }

         }

    }
    
    if(isset($_POST['change'])){
        $oldpassword = mysqli_real_escape_string($conn,$_POST['oldpassword']);
        $newpassword = mysqli_real_escape_string($conn,$_POST['newpassword']);
        
        if(empty($oldpassword) || empty($newpassword)){
            header("Loction:../?message=pleasefillallfields");
        }
        else{
            $oldpasswordhash = base64_encode($oldpassword);
            $select = mysqli_query($conn,"SELECT * FROM adminlogin Where password = '$oldpasswordhash'");
            $count = mysqli_num_rows($select);
            if($count > 0){
                echo $count;
                $passwordHash = base64_encode($newpassword);
                $updatepasword = mysqli_query($conn,"UPDATE adminlogin SET password = '$passwordHash' Where password = '$oldpasswordhash'");
                if($updatepasword){
                    header("Location:../../index.php?message=successfulychangepassword");
                }else{
                    echo "Sql Erorr";
                }
            }
            else{
                echo"mas hayno ninkan";
            }
        }
    }
    if(isset($_GET['user_id'])){
        $user_id = $_GET['user_id'];
        $delete = mysqli_query($conn,"DELETE FROM users WHERE user_id = '$user_id'");
        if($delete){
            header("Location:../index.php?message=deleted");
        }else{
            echo"SQL ERORR";
        }
    }

 ?>