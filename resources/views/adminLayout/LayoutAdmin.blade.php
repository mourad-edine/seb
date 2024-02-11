<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Proratis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- Icon Font Stylesheets -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="https://proratis.youpihost.fr/assets/css/custom.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
</head>

<body>

    <!-- Sidebar Start -->
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading m-3 ">
                <img src="{{ asset('images/job.png') }}" alt="Description de l'image" height="40" width="40">
            </div>
            <div class="list-group list-group-flush">
                <a href="{{route('administration')}}" class="list-group-item list-group-item-action">Demande</a>
                <a href="{{route('entrepriselist')}}" class="list-group-item list-group-item-action">Entreprise</a>
                <a href="{{route('contactlist')}}" class="list-group-item list-group-item-action">candidat</a>
                <a href="{{route('fiche_cv')}}" class="list-group-item list-group-item-action">Fiche CV</a>
                <a href="{{route('categorie_metier')}}" class="list-group-item list-group-item-action">categorie</a>

                <a href="{{route('home')}}" class="list-group-item list-group-item-action">Se déconnecter</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper" class="flex-grow-1">
            <!-- Topbar Start -->
            <div class="container-fluid topbar px-5">
                <div class="row gx-0">
                    <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                        <div class="d-inline-flex align-items-center text-white" style="height: 45px;">
                            Admin
                        </div>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end">
                        <div class="d-inline-flex align-items-center" style="height: 45px;">
                            <a href="{{route('home')}}"><small class="me-3 fw-bold text-white">Se déconnecter</small></a>
                        </div>
                    </div>
                </div>
            </div> <!-- Topbar End -->

            <div class="container mt-5">
                <div class="card rounded-0">

                    @yield('contenu')

                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>

    <!-- /#wrapper -->

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom Script for Sidebar Toggle -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>

</body>

</html>