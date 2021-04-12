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
    <div class="container mt-5">
           <h3>{{$count}} Livres</h3>
        <div class="the-block">
        <table class="table table-hover text-nowrap text-center" id="exemple1">
            <tbody>
                <tr>

                        <th>  <div class="notice notice-primary"> <strong>Titre</strong> </div></th>
                        <th>  <div class="notice notice-primary "> <strong>Auteur</strong>  </div></th>
                        <th>  <div class="notice notice-primary"> <strong>Type_livre</strong>  </div></th>
                        <th>  <div class="notice notice-danger"> <strong>Pays</strong>  </div></th>
                        <th>  <div class="notice notice-primary"> <strong>Annee_parution</strong>  </div></th>
                        <th width="280px">  <div class="notice notice-primary"> <strong></strong> Action </div></th>

                </tr>
                 @foreach ($search as $livre)
                <tr>

                    <td><div class="notice notice-danger"> {{$livre->titre}}</div></td>
                    <td><div class="notice notice-danger"> {{$livre->auteur}} </div></td>
                    <td> <div class="notice notice-danger"> {{$livre->type_livre}} </div></td>
                    <td><div class="notice notice-danger">{{$livre->pays}} </div></td>
                    <td><div class="notice notice-danger">{{$livre->annee_parution}} </div></td>


               </tr>
            </tbody>


                @endforeach

        </table>
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
