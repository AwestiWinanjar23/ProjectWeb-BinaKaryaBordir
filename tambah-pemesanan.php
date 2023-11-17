<?php
//untuk pengecekan validasi
  session_start();
  if ($_SESSION['Username'] == ''){
    echo "<script>
      alert('Silahkan login terlebih dahulu');
      window.location='form-login.php';
    </script>";
  }else{
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Tambah Data Pemesanan-->
    <title>Tambah Data Pemesanan</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />
  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="bk-computer.png" height="50px" width="55px">
          </div>
          <div class="sidebar-brand-text mx-2">Bina Karya Bordir<sup></sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <!-- Page Dashboard-->
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Kategori</div>

        <!-- Nav Item - Pages Collapse Menu -->
        <!-- Menu Master Data Pelanggan-->
          <li class="nav-item">
          <a class="nav-link collapsed" href="data-pelanggan.php"  data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <i class="fas fa-male"></i>
            <span>Data Pelanggan</span></a>
        </li>
        <!-- Menu Pemesanan Jasa Bordir-->
        <li class="nav-item">
          <a class="nav-link collapsed" href="data-pemesanan.php" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-tshirt"></i>
            <span>Pemesanan Bordir</span>
          </a>
        </li>
        <!-- Menu Progress Jasa Bordir-->
        <li class="nav-item">
          <a class="nav-link" href="data-progresbordir.php">
          <i class="fas fa-calendar-alt"></i>
            <span>Progress Bordir</span></a
          >
        </li>
        <!-- Menu Pembayaran Jasa Bordir-->
        <li class="nav-item">
          <a class="nav-link collapsed" href="data-pembayaran.php" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-money-check"></i>
            <span>Pembayaran</span>
          </a>
        </li>
        <!-- Menu Pengiriman Jasa Bordir-->
        <li class="nav-item">
          <a class="nav-link collapsed" href="data-pengiriman.php" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-shipping-fast"></i>
            <span>Pengiriman Bordir</span>
          </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Autentikasi</div>

        <!-- Nav Item - Pages Collapse Menu -->
        <!-- Menu Login/ autentikasi Jasa Bordir-->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-user-circle"></i>
            <span>Account</span>
          </a>
          <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Autentikasi:</h6>
              <a class="collapse-item" href="form-login.php">Login</a>
            </div>
          </div>
        </li>

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <form class="form-inline">
              <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
              </button>
            </form>

            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>
              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['Username'];?></span>
                  <img class="user" src="img/circle-user.png" width="35px" hight="35px" />  
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown"> 
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="logout.php"  >
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Bina Karya Bordir Komputer</h1>
            </div>


            <!-- Content Row -->
            <div class="row">
              <!-- Content Column -->
              <div class="col-lg-12 mb-4">
                <!-- Project Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-3 font-weight-bold text-primary">Form Tambah Data Pemesanan:</h6>
                        <div class="card-body">
                            <form method="POST" action="tambah-pemesanan-aksi.php">
                                <div class="mb-3">
                                    <select name="ID_Pelanggan" class="form-select form-control">
                                        <?php
                                        include "koneksi.php";
                                        $query=mysqli_query($connect, "SELECT * FROM tb_pelanggan");
                                        while ($data = mysqli_fetch_array($query)) {
                                            ?>
                                            <option value="<?=$data['ID_Pelanggan'];?>"><?php echo $data['Nama_Pelanggan'];?></option>
                                            <?php } ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Jumlah Bordiran*</label>
                                    <input name="Jumlah_Bordiran" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Pcs">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Ukuran Bordir*</label>
                                    <input name="Ukuran_Bordir" type="text" class="form-control" id="exampleFormControlInput1" placeholder="cm">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Estimasi Bordir (Hari)*</label>
                                    <input name="Estimasi_Bordir" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Date">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Pengambilan Bahan Bordir</label><br>
                                    <div class="form-check">
                                        <input name="Pengambilan_Bahan" value="Diantar" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">Diantar</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="Pengambilan_Bahan" value="Dijemput" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">Dijemput</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Pengiriman Bordir</label><br>
                                    <div class="form-check">
                                        <input name="Pengantaran_Barang" value="Diantar" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">Diantar</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="Pengantaran_Barang" value="Dijemput" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">Dijemput</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Upload Desain Bordir</label>
                                    <input name="Desain" class="form-control" type="file" id="formFile"></div>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="gap:30px">
                                    <button class="btn btn-primary me-md-2" type="button" value='kembali' onClick='history.back()'>Kembali</button>
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
            <span>© Copyright 2023 . Bina Karya Bordir Komputer. All rights reserved.</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
  </body>
</html>
<?php } ?>