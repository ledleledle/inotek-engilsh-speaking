<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include 'connect.php'; 
  include 'partials/head.php'; 
  $page = 666;
  $difficult =  $_POST['test'];
  if (isset($_POST['stage'])){     
    $stage=$_POST['stage']+1;
  } else {
  $stage=0; }
  ?>
  <title>Belajar English - Soal</title>
  <link rel="stylesheet" href="stt_basic/css/style.css" /> 
  <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</head>

<body id="page-top">
<?php if(isset($difficult)){ ?>
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include 'partials/sidebar.php';
          include "cek_kemiripan/function_basic.php";
          $nilai=cek_kemiripan($_POST['res_soal'], $_POST['data']);
          $_SESSION['nilai'.$stage] = $nilai; 
          $_SESSION['kesulitan'] = $difficult;
          $_SESSION['jwb'.$stage] = $_POST['data'];
          $_SESSION['soal'.$stage] = $_POST['res_soal'];
          $_SESSION['idsoal'.$stage] = $_POST['id_soal'];
          $except = "'".$_SESSION['soal1']."', '".$_SESSION['soal3']."', '".$_SESSION['soal5']."', '".$_SESSION['soal7']."', '".$_SESSION['soal9']."'";
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

          <div class="row">

            <div class="col-lg-12">
              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Soal</h6>
                </div>
                <div class="card-body">
                  <ul class="progress-indicator">
                    <li <?php if($stage > 0 && $stage <= 10){ echo 'class="completed"'; } ?>> <span class="bubble"></span> No. 1 </li>
                    <li <?php if($stage > 2 && $stage <= 10){ echo 'class="completed"'; } ?>> <span class="bubble"></span> No. 2 </li>
                    <li <?php if($stage > 4 && $stage <= 10){ echo 'class="completed"'; } ?>> <span class="bubble"></span> No. 3 </li>
                    <li <?php if($stage > 6 && $stage <= 10){ echo 'class="completed"'; } ?>> <span class="bubble"></span> No. 4 </li>
                    <li <?php if($stage > 8){ echo 'class="completed"'; } ?>> <span class="bubble"></span> No. 5 </li>
                  </ul>
                  <?php
                  if (isset($_POST['res_soal'])){     
                    echo '<div class="alert alert-primary" role="alert">
                            <i class="fas fa-clipboard"></i><strong> Soal : </strong>'.$_POST['res_soal'].'
                          </div>';
                    echo $_SESSION['idsoal1'];
                    echo $_SESSION['nilai1'];
                    echo $_SESSION['jwb1'];
                    echo $_SESSION['soal1'];     
                    echo "<br>";
                    echo $_SESSION['idsoal3'];
                    echo $_SESSION['nilai3'];
                    echo $_SESSION['jwb3'];
                    echo $_SESSION['soal3'];
                    echo "<br>";
                    echo $_SESSION['idsoal5'];
                    echo $_SESSION['nilai5'];
                    echo $_SESSION['jwb5'];
                    echo $_SESSION['soal5'];
                    echo "<br>";
                    echo $_SESSION['idsoal7'];
                    echo $_SESSION['nilai7'];
                    echo $_SESSION['jwb7'];
                    echo $_SESSION['soal7']; 
                    echo "<br>";
                    echo $_SESSION['idsoal9'];
                    echo $_SESSION['nilai9'];
                    echo $_SESSION['jwb9'];
                    echo $_SESSION['soal9'];    
                  }else{
                  $query = mysqli_query($conn, "SELECT * FROM kata WHERE lvl = '$difficult' AND kata NOT IN ($except) ORDER BY RAND() LIMIT 1");
                  $soal = mysqli_fetch_array($query);
                  echo '<div class="alert alert-primary" role="alert">
                    <i class="fas fa-clipboard"></i><strong> Soal : </strong>'.$soal['kata'].'
                  </div>'; }
                  ?>
                  <div id="div_language" style="opacity: 0; margin-top: -50px;"><center>
                    Pilih Bahasa : <select id="select_language" onchange="updateCountry()"></select>
                    <select id="select_dialect"></select>
                    </center>
                  </div>
                  <br>
                    <?php include "stt_basic/info.php"; ?>
                  <br>        
        <?php if (isset($_POST['data'])){
          echo '<div class="alert alert-warning" role="alert">
            <i class="fas fa-microphone"></i><strong> Jawaban : </strong>'.$_POST['data'].'
          </div>'; ?>
         <?php if($stage >= 9) { echo '<center><a href="result.php" class="btn btn-primary">Lihat Hasil <i class="fas fa-arrow-right fa-sm"></i></a></center>'; }
               if($stage < 9) { ?>
    <form method="POST">
      <input type="hidden" name="test" value="<?php echo $difficult; ?>">
      <input type="hidden" name="stage" value="<?php echo $stage; ?>">
      <center><input type="submit" name="" value="Soal Berikutnya" class="btn btn-primary"></center>
    </form>
  <?php } }else{ ?>
    <center>
<div id="results">
  <span id="final_span" class="final"></span>
  <span id="interim_span" class="interim"></span>
</div>
</center>
<div class="center">
  <center>
  <button id="start_button" onclick="startButton(event)">
      <img id="start_img" src="stt_basic/mic.gif" alt="Start">
  </button>
  </center>
  <center>
  <br>
  <div class="sidebyside" style="text-align:center">
    <button id="copy_button" class="button" onclick="copyButton()">
      Tampilkan Hasil
    </button>
    <div id="copy_info" class="info">
    </div>
  </div>
  </center>
</div>
 
<?php } ?>

<form action="" method="post" id="form">
  <input type="hidden" name="test" value="<?php echo $difficult; ?>">
  <input type="hidden" name="data" id="data">
  <input type="hidden" name="stage" value="<?php echo $stage; ?>">
  <input type="hidden" name="res_soal" value="<?php echo $soal['kata']; ?>">
  <input type="hidden" name="id_soal" value="<?php echo $soal['id']; ?>">
</form>

<?php include "stt_basic/function.php"; ?> 

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
  <?php include 'partials/js.php'; } else {
    echo '<script>
    setTimeout(function() {
        swal({
            title: "Error!",
            text: "Sesi telah berakhir, Silahkan pilih level lagi!",
            type: "error"
        }, function() {
            window.location = "cards.php";
        });
    }, 1000);
    </script>';
  } ?>
</body>

</html>