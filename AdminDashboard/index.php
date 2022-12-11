<?php session_start(); ?>
<?php 
  if(isset($_SESSION['role']) and $_SESSION['role'] == 'Admin' or $_SESSION['role'] == 'editor'){
?>
<?php require('includes/header.php'); ?>

<!-- Preloader -->
<?php require('includes/preloader.php'); ?>


<!-- Navbar -->
<?php require('includes/Topnav.php'); ?>

<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php require('includes/Leftsidebar.php'); ?>


<!-- Content Wrapper. Contains page content -->
<?php require('includes/admin_content.php'); ?>

<!-- /.content-wrapper -->
<?php require('includes/footer.php'); ?>


<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

<?php require('includes/scripts.php'); ?>
<?php 
  }else{
    header('Location:includes/404page.php');
    exit;
  }
?>
