<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Proratis</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://proratis.youpihost.fr/assets/css/custom.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>

<body>

    <!-- Spinner Start -->

    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid topbar px-5">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <h5 class="text-white">admin</h5>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href="{{route('candidat')}}" class=""><small class="me-3 fw-bold text-white">se deconnecter</small></a>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row mt-5">
            <div class="col-12 col-md-6">
                <div class="card rounded-0 ">
                    <div class="card-header font18 fw-bold">information entreprise</div>
                    <div class="card-body">
                        <form action="" method="post"><input type="hidden" name="_token" value="biO7mNE10ZkciKBFFeA6Vse2SeAPGzJ756stNEL3" autocomplete="off">
                            <div class="mb-3">
                                <label for="email" class="form-label">nom entreprise</label>
                                <input type="text" class="form-control" id="email" value="{{$entreprise->nom}}">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">email</label>
                                <input type="email" class="form-control" id="email" value="{{$entreprise->email}}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">code</label>
                                <input type="text" class="form-control" id="password" value="{{$entreprise->code}}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Téléphone</label>
                                <input type="text" class="form-control" id="password" value="{{$entreprise->phone}}">
                            </div>   
                            <div class="text-center mt-5">
                                <button type="submit" class="btn btn-lg btn-primary col-12 col-md-6">
                                    <span class="text-uppercase">envoyer confirmation par email</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>