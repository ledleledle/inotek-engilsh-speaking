<?php
session_start();
$usrid = $_SESSION['userid'];
$lvlusr = $_SESSION['lvl'];
if(!isset($usrid)){
  header('location:login.php');
}else{
?>
<ul class="navbar-nav bg-gradient-<?php if($lvlusr == 1) { echo 'danger';} else { echo 'primary';} ?> sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
        <div class="sidebar-brand-icon">
          <img src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="logo" width="40" height="40">
        </div>
        <div class="sidebar-brand-text mx-3"><?php if($lvlusr == 1) { echo 'Halaman Admin';} else { echo 'English Speaking';} ?></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
<?php if($lvlusr == 1){ ?>
      <li <?php if($page == "1"){ echo "class='nav-item active'"; } else { echo "class='nav-item'"; }?>>
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dasbor</span></a>
      </li>

      <li <?php if($page == "2"){ echo "class='nav-item active'"; } else { echo "class='nav-item'"; }?>>
        <a class="nav-link" href="users.php">
          <i class="fas fa-fw fa-users"></i>
          <span>Kontrol User</span></a>
      </li>

      <li <?php if($page == "3"){ echo "class='nav-item active'"; } else { echo "class='nav-item'"; }?>>
        <a class="nav-link" href="edit.php">
          <i class="fas fa-fw fa-pencil-alt"></i>
          <span>Edit Halaman</span></a>
      </li>

      <li <?php if($page == "4"){ echo "class='nav-item active'"; } else { echo "class='nav-item'"; }?>>
        <a class="nav-link" href="perpus.php">
          <i class="fas fa-fw fa-clipboard-list"></i>
          <span>Perpustakaan Kata</span></a>
      </li>

      <li <?php if($page == "5"){ echo "class='nav-item active'"; } else { echo "class='nav-item'"; }?>>
        <a class="nav-link" href="log.php">
          <i class="fas fa-fw fa-list"></i>
          <span>Aktifitas Terakhir</span></a>
      </li>

      <li <?php if($page == "6"){ echo "class='nav-item active'"; } else { echo "class='nav-item'"; }?>>
        <a class="nav-link" href="kritik.php">
          <i class="fas fa-fw fa-comments"></i>
          <span>Kritik & Saran</span></a>
      </li>
  <?php } else { ?>
      <li <?php if($page == "1"){ echo "class='nav-item active'"; } else { echo "class='nav-item'"; }?>>
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dasbor</span></a>
      </li>

      <li <?php if($page == "7" || $page == 666 || $page == 555){ echo "class='nav-item active'"; } else { echo "class='nav-item'"; }?>>
        <a class="nav-link" href="cards.php">
          <i class="fas fa-fw fa-play"></i>
          <span><?php if($page == 666 || $page == 555){ echo "Pilih Level Lain"; } else { echo "Mulai"; } ?></span></a>
      </li>

      <li <?php if($page == "5"){ echo "class='nav-item active'"; } else { echo "class='nav-item'"; }?>>
        <a class="nav-link" href="log.php">
          <i class="fas fa-fw fa-list"></i>
          <span>Aktifitas Terakhir</span></a>
      </li>

      <li <?php if($page == "8"){ echo "class='nav-item active'"; } else { echo "class='nav-item'"; }?>>
        <a class="nav-link" href="charts.php">
          <i class="fas fa-fw fa-chart-pie"></i>
          <span>Statistik Anda</span></a>
      </li>
      <li class='nav-item'>
        <a class="nav-link" href="contactus.php">
          <i class="fas fa-fw fa-comments"></i>
          <span>Kontak Kami</span></a>
      </li>
  <?php } ?>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>