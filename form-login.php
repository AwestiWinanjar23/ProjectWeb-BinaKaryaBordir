<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Dashboard Admin Jasa Bordir-->
    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <style type="text/css">
      html,body{height: 100%;}
      .form-login{
        background-image: url(bgsolo.jpg);
        background-size: cover;
        background-position: auto;
        height: 100%;
        width: 100%;
      }
    </style>
    </head>
    <body >
      <div class="bg-utama"></div>
    <div class="form-login" >
        <div class="card login-form" >             
            <div class="card-body">
            <i class="fas fa-user"></i>
            <span><b>Login</b></span><br>
              <!--<h2 class="card-title" align="center"><b>Login</b></h2><br>-->
              <img class="logo" src="bk-computer.png" height="100px" width="100px"><br>

              <h6 class="card-subtitle text-muted mb-5 fw-bold" align="center"><b>Please login to use this BK.Bordir Website!</b></h6>
            
              <form action="login-aksi.php" method="POST">
                <div class="mb-3" >
                  <label for="exampleInputEmail1" class="form-label">Username*</label>
                  <input name="Username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" >
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password*</label>
                  <input name="Password_User" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>

                <div class="d-flex justify-content-between">
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                </div>
                <div class="d-grid mt-3">
                    <button name="login" type="submit" class="btn btn-success btn-login">Login</button>
                </div>
              </form>
            </div>
          </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
    </body>
    