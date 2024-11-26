<body>

   <div id="wrapper">




      <!-- /. NAV TOP  -->
      <nav class="navbar-default navbar-side" role="navigation">
         <div class="sidebar-collapse">
            <div>
               <a href="index.php">
                  <h1 class="heading">Fees Management System</h1>
               </a>
            </div>

            <ul class="nav" id="main-menu">


               <li>
                  <a class="<?php if($page=='dashboard'){ echo 'active-menu';}?>" href="index.php">Home</a>
               </li>

               <li>
                  <a class="<?php if($page=='student'){ echo 'active-menu';}?>" href="student.php">Manage Students</a>
               </li>



               <li>
                  <a class="<?php if($page=='fees'){ echo 'active-menu';}?>" href="fees.php">Fees</a>
               </li>
               <li>
                  <a class="<?php if($page=='report'){ echo 'active-menu';}?>" href="report.php">Report</a>
               </li>



               <li>
                  <a class="<?php if($page=='setting'){ echo 'active-menu';}?>" href="setting.php"></i>Settings</a>
               </li>

               <li>
                  <a href="logout.php">Logout</a>
               </li>


            </ul>

         </div>

      </nav>
      <!-- /. NAV SIDE  -->