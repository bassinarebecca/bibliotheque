<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gestion des livre</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{asset("assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css")}}">
                <link rel="stylesheet" href="{{asset("assets/vendors/iconfonts/ionicons/dist/css/ionicons.css")}}">
                <link rel="stylesheet" href="{{asset("assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css")}}">
                <link rel="stylesheet" href="{{asset("assets/vendors/css/vendor.bundle.base.css")}}">
                <link rel="stylesheet" href="{{asset("assets/vendors/css/vendor.bundle.addons.css")}}">
                <link rel="stylesheet" href="css.css">
                <link rel="stylesheet" href="">
                <!-- endinject -->
                <!-- plugin css for this page -->
                <!-- End plugin css for this page -->
                <!-- inject:css -->
                <link rel="stylesheet" href="{{asset("assets/css/shared/style.css")}}">
                <!-- endinject -->
                <!-- Layout styles -->
                <link rel="stylesheet" href="{{asset("assets/css/demo_1/style.css")}}">
                <!-- End Layout styles -->
                <link rel="shortcut icon" href="{{asset("assets/images/favicon.ico")}}" />
    {{-- <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css"> --}}
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html">
            <img src="assets/images/logo.svg" alt="logo" /> </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="assets/images/logo-mini.svg" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-center">
          <ul class="navbar-nav">
            {{-- <li class="nav-item font-weight-semibold d-none d-lg-block">Accueil</li>
            <li class="nav-item font-weight-semibold d-none d-lg-block">Enregistrer</li> --}}

            <li class="nav-item dropdown language-dropdown">
              <a class="nav-link dropdown-toggle px-2 d-flex align-items-center" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="d-inline-flex mr-0 mr-md-3">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-us"></i>
                  </div>
                </div>
                <span class="profile-text font-weight-medium d-none d-md-block">ListeLivre</span>
              </a>
              <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-us"></i>
                  </div>livre par auteur
                </a>
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-fr"></i>
                  </div>French
                </a>
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-ae"></i>
                  </div>Arabic
                </a>
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-ru"></i>
                  </div>Russian
                </a>
              </div>
            </li>
          </ul>
          <form class="ml-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
              <input type="search" class="form-control" placeholder="Search Here">
            </div>
          </form>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count">7</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  {{-- <div class="preview-thumbnail">
                    <img src="assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                  </div> --}}
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>

                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-email-outline"></i>
                <span class="count bg-success">3</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                <a class="dropdown-item py-3 border-bottom">
                  <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-alert m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                    <p class="font-weight-light small-text mb-0"> Just now </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-settings m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                    <p class="font-weight-light small-text mb-0"> Private message </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-airballoon m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                    <p class="font-weight-light small-text mb-0"> 2 days ago </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="assets/images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                  <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
                </div>
                <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
                <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
                <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
                <a class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav p-0 d-flex flex-column justify-content-around h-100">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"></p>
                  <p class="designation"></p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category"></li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Accueil</span>
              </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="pages/forms/basic_elements.html">
                  <i class="menu-icon typcn typcn-shopping-bag"></i>
                  <span class="menu-title">Ajouter</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/forms/basic_elements.html">
                  <i class="menu-icon typcn typcn-shopping-bag"></i>
                  <span class="menu-title">Recherche</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/forms/basic_elements.html">
                  <i class="menu-icon typcn typcn-shopping-bag"></i>
                  <span class="menu-title">Déconnexion</span>
                </a>
              </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title center">Le SAVAN, le meilleur endroit pour la connaissance</h4>
                  <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">

                  </div>
                </div>
              </div>

            </div>
            <!-- Page Title Header Ends-->

            <div class="container-scroller">
                <div class="container-fluid page-body-wrapper full-page-wrapper">
                  <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
                    <div class="row w-100">
                      <div class="col-lg-4 mx-auto">
                        <h2 class="text-center mb-4">Ajouter un livre</h2>
                        <div class="auto-form-wrapper">
                          <form method="POST" action="{{ url('ajout') }}">
                              @csrf
                            <div class="form-group">
                              <div class="input-group">
                                <input type="text" class="form-control"  name="titre" value="{{ old('titre') }}" placeholder="Titre">
                                <div class="input-group-append">
                                  <span class="input-group-text">
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group">
                                <input type="text" class="form-control"  name="auteur" value="{{ old('auteur ') }}" placeholder="Auteur">
                                <div class="input-group-append">
                                  <span class="input-group-text">
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                                <label for="">Type :</label>
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
                                <label for="">Pays :</label>
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
                              <div class="input-group">
                                <input type="date" class="form-control" name="annee_parution" placeholder="Annee_parution">
                                <div class="input-group-append">
                                  <span class="input-group-text">
                                  </span>
                                </div>
                              </div>
                            </div>

                            {{-- <div class="form-group d-flex justify-content-center">
                              <div class="form-check form-check-flat mt-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" checked> I agree to the terms </label>
                              </div>
                            </div> --}}
                            <div class="form-group">
                              <button type="submit" class="btn btn-primary submit-btn btn-block">Ajouter un livre</button>
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
                <script src="{{asset("assets/js/shared/jquery.cookie.js")}}"></script>




    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="assets/js/shared/off-canvas.js"></script>
    <script src="assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="assets/js/demo_1/dashboard.js"></script>
    <!-- End custom js for this page-->
    <script src="assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
  </body>
</html>
