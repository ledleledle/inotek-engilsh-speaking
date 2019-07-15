<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'partials/head.php'; 
  $page = 555;
  @$id = $_GET['id'];
  ?>
  <title>Belajar English - Hasil</title>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include 'partials/sidebar.php';
    if(!isset($_SESSION['kesulitan'])){ header('location:cards.php'); }
     ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include 'partials/navbar.php'; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="row">

            <div class="col-lg-12">
              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Hasil</h6>
                </div>
                <div class="card-body">
                  <ul class="progress-indicator custom-complex">
            <li class="<?php if($id == '' || $id == 1){ echo 'completed'; } ?>">
                <a href="?id=1">
                    <span class="bubble"></span>
                    <i class="fa fa-check-circle"></i>
                    No. 1
                </a>
            </li>
            <li class="<?php if($id == 3){ echo 'completed'; } ?>">
                <a href="?id=3">
                    <span class="bubble"></span>
                    <i class="fa fa-check-circle"></i>
                    No. 2
                </a>
            </li>
            <li class="<?php if($id == 5){ echo 'completed'; } ?>">
                <a href="?id=5">
                    <span class="bubble"></span>
                    <i class="fa fa-check-circle"></i>
                    No. 3
                </a>
            </li>
            <li class="<?php if($id == 7){ echo 'completed'; } ?>">
                <a href="?id=7">
                    <span class="bubble"></span>
                    <i class="fa fa-check-circle"></i>
                    No. 4
                </a>
            </li>
            <li class="<?php if($id == 9){ echo 'completed'; } ?>">
                <a href="?id=9">
                    <span class="bubble"></span>
                    <i class="fa fa-check-circle"></i>
                    No. 5
                </a>
            </li>
        </ul><hr>
              <?php
              if($id == ''){
                $id = 1;
              }
              $soalea = 'soal'.$id;
              $jwbea = 'jwb'.$id;
                echo '<div class="alert alert-primary" role="alert">
                    <i class="fas fa-clipboard"></i><strong> Soal : </strong>'.$_SESSION[$soalea].'
                </div>';
                echo '<div class="alert alert-warning" role="alert">
                    <i class="fas fa-microphone"></i><strong> Jawaban : </strong>'.$_SESSION[$jwbea].'
                </div>';
                echo '<div class="alert alert-info" role="alert">
                    <i class="fas fa-chart-pie"></i><strong> Nilai : </strong>'.$_SESSION['nilai'.$id].' %
                </div>';
                echo '<div class="alert alert-success" role="alert">
                    <i class="fas fa-chart-pie"></i><strong> Koreksi : <br>';

$string = $_SESSION[$soalea];
$string2 = $_SESSION[$jwbea];
$PecahStr = explode(" ", $string);
$PecahStr2 = explode(" ", $string2);

for ( $i = 0; $i < count( $PecahStr ); $i++ ) {
  if(@$PecahStr[$i] == @$PecahStr2[$i]){
    echo $PecahStr[$i]." ";
  }else{
    echo "<a class='bg-danger text-white'>".@$PecahStr[$i]."</a> ";
  }
}
echo "<hr>"; 
for ( $i = 0; $i < count( $PecahStr2 ); $i++ ) {
if(@$PecahStr[$i] == @$PecahStr2[$i]){
    echo $PecahStr2[$i]." ";
  }else{
    echo "<a class='bg-danger text-white'>".@$PecahStr2[$i]."</a> ";
  }
}  ?>
            </div>
                </div>
              </div>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include 'partials/footer.php'; ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php include 'partials/js.php'; ?>
</body>

</html>
