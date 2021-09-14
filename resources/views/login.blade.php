<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login - Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
      
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5"><!-- 
              <div class="brand-logo">
                <img src="../../images/logo.svg" alt="logo">
              </div> -->
              <div class="row mb-3" style="float: right;">
                 <img src="images/logo.svg" class="img-fluid" style="width: 80px;">
                  <img src="images/logo-vokasi-smk.png" class="img-fluid" style="width: 80px;">
              </div>
              <h3 class="mt-4 font-weight-light"><span class="text-success">ADMIN</span> <b class="text-primary">SPW</b></h3>
              <h6 class="font-weight-light"></h6>
              @if(session('errors'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Upss!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
              @if (Session::has('success'))
              <div class="alert alert-success">
                {{ Session::get('success') }}
              </div>
              @endif
              @if (Session::has('error'))
              <div class="alert alert-danger">
                {{ Session::get('error') }}
              </div>
              @endif
              <form class="pt-3"  action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg"placeholder="email" name="email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="password" placeholder="Kata Sandi">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">Masuk</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Ingat Saya
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Lupa kata sandi?</a>
                </div>
                <!-- <div class="text-center mt-4 font-weight-light">
                  Belum memiliki akun? <a href="{{ route('register') }}" class="text-primary">Registrasi </a>
                </div> -->
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <!-- endinject -->
</body>

</html>
