<nav class="navbar navbar-expand-md navbar-dark bg-fade fixed-top">
    <a href="index.php"><img class="navbar-brand" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="logo" width="50" height="50"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse w-100 order-3 dual-collapse2" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><strong>Home</strong></a>
      </li>
    </ul>
        <ul class="navbar-nav ml-auto">
          <?php if(!isset($_SESSION['lvl'])){ ?>
            <li class="nav-item">
                <a class="nav-link text-white" href="register.php"><i class="fas fa-user-plus"></i> <strong>Daftar</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="login.php"><i class="fas fa-sign-in-alt"></i> <strong>Login</strong></a>
            </li> <?php }else{
              echo '<li class="nav-item">
                    <a class="nav-link text-white" href="#" data-toggle="modal" data-target="#logoutModal">
                      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                    </a></li>';
            } ?>
        </ul>
    </div>
    </nav>