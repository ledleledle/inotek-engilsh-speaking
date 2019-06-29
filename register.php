<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'partials/head.php'; ?>
  <title>Belajar English - Form Daftar</title>
  <script type="text/javascript">
    $(document).ready(function () {
    $('#frm-dftr').validate({
      rules: {
        fsname : {
          minlength:4,
          maxlength:50
          },
        lsname : {
          minlength:4,
          maxlength:50
        },
        username : {
          minlength:6,
          maxlength:12
        },
        lspass : {
          equalTo : "#txtPassword"
        }
      },
      messages: {
        fsname : {
          required : "<div class='text-danger'><i class='fas fa-times'></i> Kolom ini Harus Diisi",
          minlength: "<div class='text-danger'><i class='fas fa-times'></i> Min. 4 Karakter",
          maxlength: "<div class='text-danger'><i class='fas fa-times'></i> Max. 50 Karakter"
        },
        lsname : {
          required : "<div class='text-danger'><i class='fas fa-times'></i> Kolom ini Harus Diisi",
          minlength: "<div class='text-danger'><i class='fas fa-times'></i> Min. 4 Karakter",
          maxlength: "<div class='text-danger'><i class='fas fa-times'></i> Max. 50 Karakter"
        },
        username : {
          required : "<div class='text-danger'><i class='fas fa-times'></i> Kolom Username Harus Diisi!",
          minlength: "<div class='text-danger'><i class='fas fa-times'></i> Min. 6 Karakter",
          maxlength: "<div class='text-danger'><i class='fas fa-times'></i> Max. 12 Karakter"
        },
        email : {
          required : "<div class='text-danger'><i class='fas fa-times'></i> Kolom Email Harus Diisi!",
          email : "<div class='text-danger'><i class='fas fa-times'></i> Format email salah. (Contoh : example@example.com)"
        },
        fspass : {
          required : "<div class='text-danger'><i class='fas fa-times'></i> Kolom Password Harus Diisi!",
        },
        lspass : {
          equalTo : "<div class='text-danger'><i class='fas fa-times'></i> Password Harus Sama!",
          required : "<div class='text-danger'><i class='fas fa-times'></i> Konfirmasi Password Anda!"
        }
      }
    });  
    $('#txtPassword').keyup(function () {  
        $('#strengthMessage').html(checkStrength($('#txtPassword').val()))  
    })  
    function checkStrength(password) {  
        var strength = 0  
        if (password.length < 1) {  
            $('#strengthMessage').removeClass()  
            return ''
        }  
        if (password.length < 6) {  
            $('#strengthMessage').removeClass()  
            $('#strengthMessage').addClass('Short') 
            return 'Terlalu Pendek'
        }  
        if (password.length > 7) strength += 1  
        // If password contains both lower and uppercase characters, increase strength value.  
        if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1  
        // If it has numbers and characters, increase strength value.  
        if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 1  
        // If it has one special character, increase strength value.  
        if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1  
        // If it has two special characters, increase strength value.  
        if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1  
        // Calculated strength value, then tampil msg  
        // If value is krng than 2  
        if (strength < 2) {  
            $('#strengthMessage').removeClass()  
            $('#strengthMessage').addClass('Weak')  
            return 'Lemah'  
        } else if (strength == 2) {  
            $('#strengthMessage').removeClass()  
            $('#strengthMessage').addClass('Good')  
            return 'Bagus'  
        } else {  
            $('#strengthMessage').removeClass()  
            $('#strengthMessage').addClass('Strong')  
            return 'Kuat'  
        }  
    }  
});  
  </script>
  <style>
    .error { width: 100%; font-size:small; }
    .Short {  
    width: 100%;  
    background-color: #dc3545;  
    margin-top: 5px;  
    height: 3px;  
    color: #dc3545;  
    font-weight: 500;  
    font-size: 12px;  
}  
.Weak {  
    width: 100%;  
    background-color: #ffc107;  
    margin-top: 5px;  
    height: 3px;  
    color: #ffc107;  
    font-weight: 500;  
    font-size: 12px;  
}  
.Good {  
    width: 100%;  
    background-color: #28a745;  
    margin-top: 5px;  
    height: 3px;  
    color: #28a745;  
    font-weight: 500;  
    font-size: 12px;  
}  
.Strong {  
    width: 100%;  
    background-color: #d39e00;  
    margin-top: 5px;  
    height: 3px;  
    color: #d39e00;  
    font-weight: 500;  
    font-size: 12px;  
}  
  </style>
</head>

<body class="bg-gradient-success">

  <div class="container">
    <?php include 'partials/navbaruser.php'; ?>
    <br>
    <div class="row justify-content-center">
    <div class="col-lg-6 col-md-9">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Form Pendaftar</h1>
                <p>Daftar sekarang! Dan mulailah belajar sendiri</p>
              </div>
              <form class="user" method="POST" action="daftar.php" id="frm-dftr">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nama Depan" name="fsname" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Nama Belakang" name="lsname" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                  <input type="text" class="form-control form-control-user" id="exampleInputUser" placeholder="Username" name="username" required></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" name="email" required>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="txtPassword" placeholder="Password" name="fspass" required>                      
                    <div id="strengthMessage"></div>  
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Ulangi Password" name="lspass" required>
                  </div>
                </div>
                <input type="submit" name="sub" value="Daftarkan Akun" class="btn btn-primary btn-user btn-block">
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="login.php">Sudah punya akun? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
</div>
<?php include 'partials/js.php'; ?>
</body>

</html>
