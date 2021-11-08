<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo ucfirst($_SESSION['fname']); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
	  
        <li class="treeview active">
          <a href="home.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <!--<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>-->
          </a>
          <!---<ul class="treeview-menu">
            <li class=""><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>-->
        </li>
		 <li class="treeview">
          <a href="../index.php">
            <i class="fa fa-dashboard"></i><span>Visit Site</span>
          </a>
        </li>

					 <?php if(isset($_SESSION['role']) && $_SESSION['role']==0)
					 {?>
					 <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="class="class="fa-users" aria-hidden="true""></i> Users<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
				              <li>
                                <a href="users.php">Users</a>
                            </li>
                            <li>
                                <a href="#">Add Users</a>
                            </li>
                        </ul>
                    </li>
					<?php
					}
					?>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-arrows-v"></i> Coupons <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a href="coupans.php">Coupons</a>
                            </li>
                            <li>
                                <a href="insertcoupon.php">Add Coupons</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="balance.php"><i class="fa fa-fw fa-dollar"></i> My Wallet</a>
                    </li>
                      <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-arrows-v"></i> Payment <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <a href="paymentrequest.php">Payment Request</a>
                            </li>
                            <li>
                                <a href="myhistory.php">My History</a>
                            </li>
                        </ul>
                    </li>
					
					<?php if(isset($_SESSION['role']) && $_SESSION['role']==0)
					 {?>
					 <li class="">
                        <a href="setting.php"><i class="fa fa-fw fa-gear"></i> Setting</a>
                    </li>
                     <li class="">
                        <a href="approve_request.php"><i class="fa fa-fw fa-file"></i> User Request</a>
                    </li>
                     <li class="">
                        <a href="Add_blog.php"><i class="fa fa-fw fa-file"></i> Blog</a>
                    </li>
                    <li class="">
                        <a href="subscrib.php"><i class="fa fa-fw fa-file"></i>Subscriber</a>
                    </li>
					<li class="">
                        <a href="sendcoupan.php"><i class="fa fa-fw fa-file"></i> Send Coupons</a>
                    </li>
					 <?php } ?>
					  <li class="">
                        <a href="emailmarketing1.php"><i class="fa fa-fw fa-dollar"></i> Email Marketing</a>
                    </li>
                   <!--  <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li> -->
              </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


