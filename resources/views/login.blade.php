<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset("assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/vendors/iconfonts/ionicons/dist/css/ionicons.css")}}">
    <link rel="stylesheet" href="{{asset("assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/vendors/css/vendor.bundle.base.css")}}">
    <link rel="stylesheet" href="{{asset("assets/vendors/css/vendor.bundle.addons.css")}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset("assets/css/shared/style.css")}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset("assets/images/favicon.ico")}}" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper">
                <form method="POST" action="{{url('post-login')}}">
                    @csrf
                  <div class="form-group">
                    <label class="label">Email</label>
                    <div class="input-group">
                      <input type="text" name="email" class="form-control" placeholder="Email">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="label">Password</label>
                    <div class="input-group">
                      <input type="password" name="password" class="form-control" placeholder="Mot de passe">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary submit-btn btn-block">Login</button>
                  </div>
                  <div class="form-group d-flex justify-content-between">
                    <div class="form-check form-check-flat mt-0">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked> Keep me signed in </label>
                    </div>
                    <a href="#" class="text-small forgot-password text-black">Forgot Password</a>
                  </div>
                </form>
              </div>
              <p class="footer-text text-center">copyright © 2020 Bootstrapdash. All rights reserved.</p>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset("assets/vendors/js/vendor.bundle.base.js")}}"></script>
    <script src="{{asset("assets/vendors/js/vendor.bundle.addons.js")}}"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="{{asset("assets/js/shared/off-canvas.js")}}"></script>
    <script src="{{asset("assets/js/shared/misc.js")}}"></script>
    <!-- endinject -->
    <script src="{{asset("assets/js/shared/jquery.cookie.js")}}" type="text/javascript"></script>
  </body>
</html>
