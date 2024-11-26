<?php $page='dashboard';
include("php/dbconnect.php");
include("php/checklogin.php");


?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>School Fees Management System</title>

   <!-- BOOTSTRAP STYLES-->
   <link href="css/bootstrap.css?v=1.0" rel="stylesheet" />
   <!-- FONTAWESOME STYLES-->
   <link href="css/font-awesome.css?v=1.0" rel="stylesheet" />

   <!--CUSTOM MAIN STYLES-->
   <link href="css/custom.css?v=1.0" rel="stylesheet" />
   <!-- GOOGLE FONTS-->
   <link rel="stylesheet" type="text/css" href="css/basic.css?v=1.0">

   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />



</head>

<?php
include("php/header.php");
?>

<div id="page-wrapper">

   <div id="page-inner">


      <h1 class="page-head-line">Overview</h1>




      <!-- /. ROW  -->
      <div class="row">

         <div class="col-md-3">
            <div class="main-box mb-purple">
               <a href="student.php">

                  <h4>Total Students: <?php include 'counter/stucount.php'?></h4>
                  <h5>Manage Students</h5>
               </a>
            </div>
         </div>




         <div class="col-md-3">
            <div class="main-box mb-green">
               <a href="fees.php">

                  <h4>Total Earnings: <?php include 'counter/totalearncount.php'?></h4>
                  <h5>Collect Fees</h5>
               </a>
            </div>
         </div>


         <div class="col-md-3">
            <div class="main-box mb-secondary">
               <a href="report.php">

                  <h4>Available Grades: <?php include 'counter/totalgrade.php'?></h4>
                  <h5>School Grade Levels</h5>
               </a>
            </div>
         </div>


      </div>

      <div class="row">
         <div class="col-md-3">
            <div class="main-box mb-dull">
               <a>

                  <h5>Active Students: <?php include 'counter/activecount.php'?></h5>
               </a>
            </div>
         </div>

         <div class="col-md-4">
            <div class="main-box mb-maroon">
               <a href="report.php">

                  <h5>Reports</h5>
               </a>
            </div>
         </div>

         <div class="col-md-4">
            <div class="main-box mb-yell">
               <a href="inactivestd.php">

                  <h5>In-Active Students: <?php include 'counter/inactivecount.php'?></h5>
               </a>
            </div>
         </div>
      </div>
      <!-- /. ROW  -->


   </div>
   <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->



<script src="js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="js/bootstrap.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="js/jquery.metisMenu.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="js/custom1.js"></script>



</body>

</html>