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
                <form method="POST" action="{{url('result')}}">
                    @csrf
                  <div class="form-group">
                    <label class="label">Filtre</label>
                    <div class="input-group">
                     <select name="filtre" id="" class="form-control">
                         <option value="type">Par type</option>
                         <option value="auteur">Par Auteur</option>
                         <option value="pays">Par pays</option>
                         <option value="parrution">Par date de publication</option>
                     </select>
                      <div class="input-group-append">
                        <span class="input-group-text">
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="label">Auteur</label>
                    <div class="input-group">
                      <input type="text" name="auteur" class="form-control" placeholder="Auteur">
                      <div class="input-group-append">
                        <span class="input-group-text">
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="label">Type_livre</label>
                    <div class="input-group">
                        <select name="type_livre" class="form-control" id="type_livre"placeholder="Type_livre" id="">
                            <option value="Romantique">Romantique</option>
                            <option value="Romantique">poétique</option>
                            <option value="Romantique">theatrale</option>
                            <option value="Romantique">science</option>
                            <option value="Romantique">Livre_enfant</option>
                            <option value="Romantique">Romantique</option>
                        </select>
                      <div class="input-group-append">
                        <span class="input-group-text">
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="label">Pays</label>
                    <div class="input-group">
                        <select name="pays" class="form-control" id="type_livre"placeholder="Type_livre" id="">
                            <option value="Burkina faso">Burkina Faso</option>
                            <option value="Mali">Mali</option>
                            <option value="Niger">Niger</option>
                            <option value="France">France</option>
                            <option value="USA">USA</option>
                            <option value="Ghana">Ghana</option>
                        </select>
                      <div class="input-group-append">
                        <span class="input-group-text">
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="label">Année_parution</label>
                    <div class="input-group">
                      <input type="date" name="annee_parution" class="form-control" placeholder="Année_parution">
                      <div class="input-group-append">
                        <span class="input-group-text">
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary submit-btn btn-block">Recherche</button>
                  </div>
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
