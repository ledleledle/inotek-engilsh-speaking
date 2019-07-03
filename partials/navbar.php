<?php 
include 'connect.php';
$username = mysqli_query($conn, "SELECT * FROM user WHERE id='$usrid'");
$username2 = mysqli_fetch_array($username);
if($lvlusr == 1){
  $tampillevel = "Admin";
}else{
  $tampillevel = "";
}
?>
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <div class="d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100">
            <div class="input-group">
              <h1 class="h3 mb-0 text-gray-800"><?php 
              if($page == "1"){ echo "<i class='fas fa-fw fa-tachometer-alt fa-sm'></i> Dasbor"; }
              if($page == "2"){ echo "<i class='fas fa-fw fa-users fa-sm'></i> Kontrol User"; }
              if($page == "3"){ echo "<i class='fas fa-fw fa-pencil-alt fa-sm'></i> Edit halaman"; }
              if($page == "4"){ echo "<i class='fas fa-fw fa-clipboard-list fa-sm'></i> Perpustakaan Kata"; }
              if($page == "5"){ echo "<i class='fas fa-fw fa-list fa-sm'></i> Aktivitas terakhir"; }
              if($page == "6"){ echo "<i class='fas fa-fw fa-comments fa-sm'></i> Kritik & Saran"; }
              if($page == "7"){ echo "<i class='fas fa-fw fa-play fa-sm'></i> Mulai"; }
              if($page == "8"){ echo "<i class='fas fa-fw fa-chart-pie fa-sm'></i> Statistik Anda"; }?></h1>
            </div>
          </div>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle"></i><i style="margin-left: 10px;"></i>
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hay <?php echo $tampillevel." ".$username2['username']; ?> !</span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#"><strong>
                  <i class="fas fa-user fa-lg fa-fw mr-2 text-gray-400"></i>
                  <?php if($username2['ftname'] == ''){
                    echo "Admin ".$username2['username'];
                  } else { echo $username2['ftname']." ".$username2['lsname']; } ?>
                </strong><br>
                Last Login : <?php if($username2['last_login'] == ""){ echo "-";} else {echo $username2['last_login'];} ?></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>