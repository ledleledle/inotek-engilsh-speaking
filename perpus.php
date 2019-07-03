<!DOCTYPE html>
<html lang="en">

<head>
<?php 
$page = 4;
include 'connect.php';
include 'partials/head.php';
?>
  <title>Belajar English - Perpustakkan Kata</title>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php include 'partials/sidebar.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
      <?php include 'partials/navbar.php'; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#addModal">
                  <i class="fas fa-plus-circle"></i>
                  Tambah
                </a>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-primary">Perpustakaan Kata</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                  <div class="card-body">
                    
                    <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>Kata</th>
                            <th>Level</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th>Kata</th>
                            <th>Level</th>
                            <th>Aksi</th>
                          </tr>
                        </tfoot>
                        <tbody>
                            <?php $show = mysqli_query($conn, "SELECT * FROM kata");
                            while ($row = mysqli_fetch_array($show)) {
                              echo "<tr><td>".$row['kata']."</td>";
                              if($row['lvl'] == 1){
                                echo "<td><span class='badge badge-pill badge-success'>Easy</span></td>";
                              }elseif($row['lvl'] == 2){
                                echo "<td><span class='badge badge-pill badge-primary'>Medium</span></td>";
                              }elseif($row['lvl'] == 3){
                                echo "<td><span class='badge badge-pill badge-warning'>Hard</span></td>";
                              }else{
                                echo "<td><span class='badge badge-pill badge-danger'>Very Hard</span></td>";
                              }
                            ?>
                            <td align='center'>
                  <a href="#" data-toggle="modal" data-target="#delModal" data-id="<?php echo $row['kata']; ?>" class='btn btn-danger btn-icon-split btn-sm'>
                    <span class='icon text-white-50'>
                      <i class='fas fa-trash'></i>
                    </span>
                    <span class='text'>Hapus</span>
                  </a>
                  <a href="#" data-toggle="modal" data-target="#editModal" data-dif="<?php echo $row['lvl']; ?>" data-id="<?php echo $row['kata']; ?>" class='btn btn-info btn-icon-split btn-sm'>
                    <span class='icon text-white-50'>
                      <i class='fas fa-pencil-alt'></i>
                    </span>
                    <span class='text'>Edit</span>
                  </a></td>
                          </tr><?php } ?>
                        </tbody>
                      </table>
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

  <?php include 'partials/js.php'; ?>
  <!-- Modals -->
  <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Kata</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form method="POST" action="add_kata.php">
        <div class="modal-body">
          <div class="form-group">
           <select class="form-control" name="diff">
              <option value="1">Easy</option>
              <option value="2">Medium</option>
              <option value="3">Hard</option>
              <option value="4">Very Hard</option>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control form-control-user" name="kata" placeholder="Kata">
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <input type="submit" class="btn btn-primary" value="Tambah">
        </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form method="POST" action="edit_kata.php">
        <div class="modal-body">
          <div class="form-group">
           <select class="form-control" id="mySelect" name="diff">
              <option value="1">Easy</option>
              <option value="2">Medium</option>
              <option value="3">Hard</option>
              <option value="4">Very Hard</option>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control form-control-user" name="kata" placeholder="Kata">
            <input type="hidden" name="log" id="admin">
            <input type="hidden" class="form-control form-control-user" name="key" id="diff" placeholder="Kata">
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <input type="submit" class="btn btn-primary" value="Edit">
        </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form method="POST" action="delete_kata.php">
        <div class="modal-body">
          Anda yakin ingin menghapus kata ini?
          <div class="form-group">
            <input type="hidden" class="form-control form-control-user" name="kata" placeholder="Kata">
            <input type="hidden" name="log" id="admin">
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <input type="submit" class="btn btn-danger" value="Hapus">
        </form>
        </div>
      </div>
    </div>
  </div>


  <script>
    $('#editModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var recipient = button.data('id')
  var difficult = button.data('dif')
  var modal = $(this)
  if(difficult == "1"){
    document.getElementById("mySelect").selectedIndex = "0";
  }else if(difficult == "2"){
    document.getElementById("mySelect").selectedIndex = "1";
  }else if(difficult == "3"){
    document.getElementById("mySelect").selectedIndex = "2";
  }else {
    document.getElementById("mySelect").selectedIndex = "3";
  }
  modal.find('.modal-title').text('Edit Kata : ' + recipient)
  modal.find('.modal-body input').val(recipient)
  modal.find('#admin').val("<?php echo $usrid; ?>")
})

    $('#delModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var recipient = button.data('id')
  var modal = $(this)
  modal.find('.modal-title').text('Hapus Kata : ' + recipient)
  modal.find('.modal-body input').val(recipient)
  modal.find('#admin').val("<?php echo $usrid; ?>")
})
  </script>
</body>
</html>
